import cv2
import face_recognition
import json
import os

try:
    # Charger l'image connue
    known_image = face_recognition.load_image_file("scripts/known_face.jpg")
    known_encoding = face_recognition.face_encodings(known_image)[0]

    # Lancer la webcam
    cap = cv2.VideoCapture(0)

    if not cap.isOpened():
        print(json.dumps({"error": "Impossible d’ouvrir la webcam"}))
        exit()

    print("Appuyez sur 'c' pour capturer une image...")

    while True:
        ret, frame = cap.read()
        if not ret:
            break

        cv2.imshow("Appuyez sur 'c' pour capturer", frame)

        key = cv2.waitKey(1)
        if key == ord('c'):
            image_path = "scripts/captured_face.jpg"
            cv2.imwrite(image_path, frame)
            break

    cap.release()
    cv2.destroyAllWindows()

    # Comparer les visages
    input_image = face_recognition.load_image_file(image_path)
    input_encoding = face_recognition.face_encodings(input_image)

    if input_encoding:
        result = face_recognition.compare_faces([known_encoding], input_encoding[0])
        print(json.dumps({"match": result[0]}))
    else:
        print(json.dumps({"error": "Aucun visage détecté"}))

    os.remove(image_path)

except Exception as e:
    print(json.dumps({"error": str(e)}))
