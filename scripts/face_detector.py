import cv2
import sys
import json
import numpy as np
import urllib.request

def detect_face(image_path):
    try:
        # Load the pre-trained face cascade classifier
        face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

        # Handle both local files and URLs
        if image_path.startswith('http'):
            resp = urllib.request.urlopen(image_path)
            image = np.asarray(bytearray(resp.read()), dtype="uint8")
            image = cv2.imdecode(image, cv2.IMREAD_COLOR)
        else:
            image = cv2.imread(image_path)

        if image is None:
            return json.dumps({"success": False, "message": "Could not load image"})

        # Convert to grayscale
        gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

        # Detect faces
        faces = face_cascade.detectMultiScale(gray, 1.1, 4)

        # Check if exactly one face is detected
        if len(faces) == 1:
            return json.dumps({"success": True, "message": "Valid human face detected"})
        elif len(faces) == 0:
            return json.dumps({"success": False, "message": "No face detected"})
        else:
            return json.dumps({"success": False, "message": f"Multiple faces detected ({len(faces)})"})

    except Exception as e:
        return json.dumps({"success": False, "message": str(e)})

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print(json.dumps({"success": False, "message": "Usage: python face_detector.py <image_path>"}))
        sys.exit(1)
    
    print(detect_face(sys.argv[1]))