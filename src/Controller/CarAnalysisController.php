<?php

namespace App\Controller;

use App\Service\GeminiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CarAnalysisController extends AbstractController
{
    #[Route('/api/analyze-car', name: 'api_analyze_car', methods: ['POST'])]
    public function analyzeImage(Request $request, GeminiService $geminiService): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $imageData = $data['image'];
        
        // Remove data URL prefix
        $imageData = str_replace('data:image/jpeg;base64,', '', $imageData);
        $imageData = str_replace('data:image/png;base64,', '', $imageData);
        
        $analysis = $geminiService->analyzeCarImage(base64_decode($imageData));
        
        return $this->json($analysis);
    }
}