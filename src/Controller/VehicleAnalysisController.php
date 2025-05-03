<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Psr\Log\LoggerInterface;

class VehicleAnalysisController extends AbstractController
{
    private $httpClient;
    private $logger;
    private $imaggaKey = 'acc_e7da05a568903ab';
    private $imaggaSecret = '9bcbac14523b8b23b39c26c2089f2343';
    private $imaggaEndpoint = 'https://api.imagga.com/v2/tags';

    public function __construct(
        HttpClientInterface $httpClient,
        LoggerInterface $logger
    ) {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
    }

    #[Route('/api/analyze-vehicle', name: 'api_analyze_vehicle', methods: ['POST'])]
    public function analyzeVehicle(Request $request): JsonResponse
    {
        try {
            $data = json_decode($request->getContent(), true);
            if (!isset($data['image'])) {
                throw new \Exception('Image data is missing');
            }

            $imageData = preg_replace('/^data:image\/\w+;base64,/', '', $data['image']);
            if (empty($imageData)) {
                throw new \Exception('Invalid image data');
            }

            $this->logger->info('Sending request to Imagga API', [
                'endpoint' => $this->imaggaEndpoint,
                'image_length' => strlen($imageData)
            ]);

            $response = $this->httpClient->request('POST', $this->imaggaEndpoint, [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->imaggaKey . ':' . $this->imaggaSecret)
                ],
                'body' => [
                    'image_base64' => $imageData
                ]
            ]);

            $statusCode = $response->getStatusCode();
            $this->logger->info('Imagga API response status', ['status' => $statusCode]);

            if ($statusCode !== 200) {
                $errorContent = $response->getContent(false);
                $this->logger->error('Imagga API error response', ['content' => $errorContent]);
                throw new \Exception('API Error: ' . $errorContent);
            }

            $result = json_decode($response->getContent(), true);
           
            // Ensure proper score calculation
            $score = $this->calculateVehicleScore($result);
            $score = max(0, min(100, $score)); // Ensure score is between 0 and 100
           
            $recommendation = $this->generateRecommendation($score);

            return new JsonResponse([
                'score' => $score,
                'recommendation' => $recommendation
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Analysis error:', ['error' => $e->getMessage()]);
            return new JsonResponse([
                'score' => 0,
                'recommendation' => 'Erreur technique: ' . $e->getMessage()
            ], 500);
        }
    }

    private function calculateVehicleScore(array $result): int
    {
        $score = 70; // Base score
       
        if (isset($result['result']['tags'])) {
            $this->logger->info('Detected tags:', ['tags' => $result['result']['tags']]);
            foreach ($result['result']['tags'] as $tag) {
                switch ($tag['tag']['en']) {
                    case 'damaged':
                    case 'old':
                    case 'rust':
                    case 'wrecked':
                        $score -= 60; // Decrease score more significantly for severe damage
                        break;
                    case 'dirty':
                        $score -= 40; // Decrease score for dirt
                        break;
                    case 'new':
                    case 'clean':
                    case 'shiny':
                        $score += 10; // Increase score for good condition
                        break;
                }
            }
        }

        return max(0, min(100, $score));
    }

    private function generateRecommendation(int $score): string
    {
        if ($score >= 80) {
            return "Le véhicule semble en excellent état. Forte probabilité de passer le contrôle technique.";
        } elseif ($score >= 60) {
            return "Le véhicule nécessite quelques vérifications mineures avant le contrôle technique.";
        } else {
            return "Des réparations importantes sont recommandées avant le passage du contrôle technique.";
        }
    }
}
