#!/usr/bin/env python3
import cv2
import os
import sys
import numpy as np
import json
from datetime import datetime
import logging

# Configuration du logging
logging.basicConfig(
    level=logging.INFO,
    format='%(asctime)s - %(levelname)s - %(message)s',
    handlers=[
        logging.FileHandler('face_compare.log'),
        logging.StreamHandler()
    ]
)
logger = logging.getLogger(__name__)

class FaceComparator:
    def __init__(self):
        try:
            # Chemin du classificateur Haar Cascade
            cascade_path = cv2.data.haarcascades + 'haarcascade_frontalface_default.xml'
            self.face_cascade = cv2.CascadeClassifier(cascade_path)
            
            if self.face_cascade.empty():
                raise RuntimeError("Failed to load face detection model")
                
            self.detection_params = {
                'scaleFactor': 1.1,
                'minNeighbors': 5,
                'minSize': (100, 100)
            }
            
            self.similarity_threshold = 0.6
            self.face_size = (200, 200)
            
            # Créer le répertoire uploads si inexistant
            self.upload_dir = os.path.join(os.path.dirname(os.path.abspath(__file__)), 'public', 'uploads')
            os.makedirs(self.upload_dir, exist_ok=True)
            
        except Exception as e:
            logger.error(f"Initialization error: {str(e)}")
            raise

    def load_image(self, path):
        """Charge une image avec vérification et conversion de chemin"""
        try:
            path = os.path.normpath(path)
            logger.info(f"Loading image from: {path}")
            
            if not os.path.exists(path):
                raise FileNotFoundError(f"Image file not found: {path}")
                
            # Lecture alternative plus robuste
            with open(path, 'rb') as f:
                img_array = np.frombuffer(f.read(), dtype=np.uint8)
            
            img = cv2.imdecode(img_array, cv2.IMREAD_COLOR)
            if img is None:
                raise ValueError("Unsupported image format or corrupted file")
                
            return img
        except Exception as e:
            logger.error(f"Error loading image {path}: {str(e)}")
            raise

    def detect_faces(self, image):
        """Détection des visages avec gestion d'erreurs"""
        try:
            gray = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
            gray = cv2.equalizeHist(gray)
            faces = self.face_cascade.detectMultiScale(gray, **self.detection_params)
            return faces
        except Exception as e:
            logger.error(f"Face detection error: {str(e)}")
            return []

    def compare_faces(self, img1_path, img2_path):
        """Fonction principale de comparaison"""
        try:
            # Chargement des images
            img1 = self.load_image(img1_path)
            img2 = self.load_image(img2_path)
            
            # Détection des visages
            faces1 = self.detect_faces(img1)
            faces2 = self.detect_faces(img2)
            
            if len(faces1) == 0 or len(faces2) == 0:
                return {
                    'success': False,
                    'message': "No face detected in one or both images"
                }

            # Extraction du premier visage détecté
            x1, y1, w1, h1 = faces1[0]
            x2, y2, w2, h2 = faces2[0]
            
            face1 = img1[y1:y1+h1, x1:x1+w1]
            face2 = img2[y2:y2+h2, x2:x2+w2]
            
            # Redimensionnement
            face1 = cv2.resize(face1, self.face_size)
            face2 = cv2.resize(face2, self.face_size)
            
            # Conversion en niveaux de gris
            gray1 = cv2.cvtColor(face1, cv2.COLOR_BGR2GRAY)
            gray2 = cv2.cvtColor(face2, cv2.COLOR_BGR2GRAY)
            
            # Calcul de la similarité (méthode simplifiée)
            hist1 = cv2.calcHist([gray1], [0], None, [256], [0, 256])
            hist2 = cv2.calcHist([gray2], [0], None, [256], [0, 256])
            similarity = cv2.compareHist(hist1, hist2, cv2.HISTCMP_CORREL)
            
            # Sauvegarde du résultat
            timestamp = datetime.now().strftime("%Y%m%d_%H%M%S")
            output_path = os.path.join(self.upload_dir, f'comparison_{timestamp}.jpg')
            
            comparison = np.hstack((face1, face2))
            cv2.putText(comparison, f"Similarity: {similarity:.2f}", (10, 30),
                       cv2.FONT_HERSHEY_SIMPLEX, 0.7, (0, 255, 0), 2)
            cv2.imwrite(output_path, comparison)
            
            return {
                'success': True,
                'match': similarity > self.similarity_threshold,
                'confidence': float(similarity),
                'comparison_path': f'/uploads/{os.path.basename(output_path)}'
            }
            
        except Exception as e:
            logger.error(f"Comparison error: {str(e)}", exc_info=True)
            return {
                'success': False,
                'message': str(e)
            }

def main():
    if len(sys.argv) != 3:
        print(json.dumps({
            'success': False,
            'message': "Usage: python compare.py <image1> <image2>"
        }))
        sys.exit(1)
        
    try:
        comparator = FaceComparator()
        result = comparator.compare_faces(sys.argv[1], sys.argv[2])
        print(json.dumps(result, indent=2))
    except Exception as e:
        logger.critical(f"Critical error: {str(e)}", exc_info=True)
        print(json.dumps({
            'success': False,
            'message': f"System error: {str(e)}"
        }))
        sys.exit(1)

if __name__ == "__main__":
    main()