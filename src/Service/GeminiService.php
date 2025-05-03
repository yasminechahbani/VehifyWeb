<?php

namespace App\Service;

use Google\Cloud\Storage\StorageClient;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GeminiService
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function analyzeCarImage($imageData)
    {
        $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-pro-vision:generateContent';
        
        $data = [
            'contents' => [
                'parts' => [
                    [
                        'text' => 'Analyze this car image and tell me if there are any visible damages, accidents, or issues that might affect technical inspection. Rate the overall condition from 0 to 100%.'
                    ],
                    [
                        'inline_data' => [
                            'mime_type' => 'image/jpeg',
                            'data' => base64_encode($imageData)
                        ]
                    ]
                ]
            ]
        ];

        $ch = curl_init($url . '?key=' . $this->apiKey);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}