import cv2
import json
import os

def compare_images(image1_path, image2_path):
    try:
        # Load the images
        img1 = cv2.imread(image1_path)
        img2 = cv2.imread(image2_path)

        if img1 is None or img2 is None:
            return json.dumps({"error": "Failed to load one or both images"})

        # Load face cascade classifier
        face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

        # Convert images to grayscale
        gray1 = cv2.cvtColor(img1, cv2.COLOR_BGR2GRAY)
        gray2 = cv2.cvtColor(img2, cv2.COLOR_BGR2GRAY)

        # Detect faces in both images
        faces1 = face_cascade.detectMultiScale(gray1, 1.1, 4)
        faces2 = face_cascade.detectMultiScale(gray2, 1.1, 4)

        if len(faces1) == 0 or len(faces2) == 0:
            return json.dumps({"error": "No face detected in one or both images"})

        # Get the first face from each image
        x1, y1, w1, h1 = faces1[0]
        x2, y2, w2, h2 = faces2[0]

        # Extract face regions
        face1 = gray1[y1:y1+h1, x1:x1+w1]
        face2 = gray2[y2:y2+h2, x2:x2+w2]

        # Resize faces to same size
        face1 = cv2.resize(face1, (100, 100))
        face2 = cv2.resize(face2, (100, 100))

        # Compare faces using template matching
        similarity = cv2.matchTemplate(face1, face2, cv2.TM_CCOEFF_NORMED)[0][0]

        return json.dumps({
            "success": True,
            "match": similarity > 0.5,
            "confidence": float(similarity),
            "message": "Face comparison completed successfully"
        })

    except Exception as e:
        return json.dumps({"error": str(e)})

if __name__ == "__main__":
    # Example usage
    image1_path = "path/to/first/image.jpg"
    image2_path = "path/to/second/image.jpg"
    result = compare_images(image1_path, image2_path)
    print(result)