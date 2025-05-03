import cv2
import json
import os

def detect_face():
    try:
        # Initialize camera
        cap = cv2.VideoCapture(0)
        
        if not cap.isOpened():
            return json.dumps({"error": "Cannot access webcam"})

        # Create directory if it doesn't exist
        upload_dir = "public/uploads/faces"
        os.makedirs(upload_dir, exist_ok=True)

        # Load face cascade classifier
        face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

        while True:
            ret, frame = cap.read()
            if not ret:
                return json.dumps({"error": "Failed to capture image"})

            # Convert to grayscale
            gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
            
            # Detect faces
            faces = face_cascade.detectMultiScale(gray, 1.1, 4)
            
            # Draw rectangle around faces
            for (x, y, w, h) in faces:
                cv2.rectangle(frame, (x, y), (x+w, y+h), (255, 0, 0), 2)
            
            # Display frame
            cv2.imshow('Press SPACE to capture or ESC to quit', frame)
            
            key = cv2.waitKey(1)
            if key == 27:  # ESC key
                break
            elif key == 32 and len(faces) > 0:  # SPACE key and face detected
                # Save image
                image_path = os.path.join(upload_dir, "captured_face.jpg")
                cv2.imwrite(image_path, frame)
                cap.release()
                cv2.destroyAllWindows()
                return json.dumps({
                    "success": True,
                    "message": "Face detected and captured",
                    "captured_image": image_path,
                    "faces_detected": len(faces)
                })

        cap.release()
        cv2.destroyAllWindows()
        return json.dumps({"error": "No face captured"})

    except Exception as e:
        return json.dumps({"error": str(e)})

if __name__ == "__main__":
    print(detect_face())