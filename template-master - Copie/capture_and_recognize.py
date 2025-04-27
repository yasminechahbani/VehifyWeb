import cv2
import face_recognition
import json
import os

def capture_and_compare():
    try:
        # Check if known face exists
        known_face_path = "public/images/known_face.jpg"
        if not os.path.exists(known_face_path):
            return json.dumps({"error": "Reference face image not found"})

        # Load known face
        known_image = face_recognition.load_image_file(known_face_path)
        known_face_encodings = face_recognition.face_encodings(known_image)
        
        if not known_face_encodings:
            return json.dumps({"error": "No face detected in reference image"})
            
        known_encoding = known_face_encodings[0]

        # Initialize webcam
        cap = cv2.VideoCapture(0)
        if not cap.isOpened():
            return json.dumps({"error": "Cannot access webcam"})

        # Create window with instructions
        cv2.namedWindow("Face Recognition", cv2.WINDOW_NORMAL)
        cv2.resizeWindow("Face Recognition", 640, 480)

        while True:
            ret, frame = cap.read()
            if not ret:
                break

            # Display frame
            cv2.putText(frame, "Press 'c' to capture or 'q' to quit", (10, 30),
                       cv2.FONT_HERSHEY_SIMPLEX, 0.7, (0, 255, 0), 2)
            cv2.imshow("Face Recognition", frame)

            key = cv2.waitKey(1) & 0xFF
            if key == ord('q'):
                return json.dumps({"error": "Capture cancelled by user"})
            elif key == ord('c'):
                # Save captured image
                temp_path = "public/images/temp_capture.jpg"
                cv2.imwrite(temp_path, frame)
                break

        # Clean up camera resources
        cap.release()
        cv2.destroyAllWindows()

        # Process captured image
        input_image = face_recognition.load_image_file(temp_path)
        input_encodings = face_recognition.face_encodings(input_image)

        if not input_encodings:
            os.remove(temp_path)
            return json.dumps({"error": "No face detected in captured image"})

        # Compare faces
        matches = face_recognition.compare_faces([known_encoding], input_encodings[0], tolerance=0.6)
        face_distance = face_recognition.face_distance([known_encoding], input_encodings[0])
        
        # Clean up temporary file
        os.remove(temp_path)

        return json.dumps({
            "match": bool(matches[0]),
            "confidence": float(1 - face_distance[0]),
            "success": True
        })

    except Exception as e:
        return json.dumps({"error": str(e)})

if __name__ == "__main__":
    result = capture_and_compare()
    print(result)
