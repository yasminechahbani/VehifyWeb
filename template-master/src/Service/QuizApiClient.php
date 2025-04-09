<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class QuizApiClient
{
    private $httpClient;
    private $apiKey;
    private $apiUrl;

    public function __construct(HttpClientInterface $httpClient, string $apiKey = 'AIzaSyDEHlkGRFo2FDd8lWI95_290zYE7Jsk75g')
    {
        $this->httpClient = $httpClient;
        $this->apiKey = $apiKey;
        $this->apiUrl = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent';
    }

    public function generateQuiz(): array
    {
        $url = $this->apiUrl . '?key=' . $this->apiKey;

        $payload = [
            'contents' => [
                [
                    'parts' => [
                        ['text' => 'Generate a quiz about driving licenses.']
                    ]
                ]
            ]
        ];

        $response = $this->httpClient->request('POST', $url, [
            'json' => $payload
        ]);

        $statusCode = $response->getStatusCode();
        if ($statusCode !== 200) {
            throw new \Exception('Failed to generate quiz. Response code: ' . $statusCode);
        }

        $responseData = $response->toArray();

        // Parse the quiz data from the response
        if (!isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
            throw new \Exception('Invalid response format from API');
        }

        $quizText = $responseData['candidates'][0]['content']['parts'][0]['text'];

        // Parse the quiz questions and answers
        $questions = $this->parseQuizQuestions($quizText);

        return [
            'quizText' => $quizText,
            'questions' => $questions
        ];
    }

    private function parseQuizQuestions(string $quizText): array
    {
        $questions = [];
        $answerKey = [];

        // Split into lines for processing
        $lines = explode("\n", $quizText);

        // First pass: Extract answer key
        $inAnswerKey = false;
        $answerPattern = '/^(\d+)\.\s+([a-d])\)\s*(.*)$/';

        foreach ($lines as $line) {
            $line = trim($line);
            if (strpos($line, '**Answer Key:**') === 0) {
                $inAnswerKey = true;
                continue;
            }
            if ($inAnswerKey && !empty($line)) {
                if (preg_match($answerPattern, $line, $matches)) {
                    $questionNum = (int)$matches[1];
                    $answer = $matches[2];
                    $answerKey[$questionNum] = $answer;
                }
            }
        }

        // Second pass: Process questions and options
        $currentOptions = [];
        $currentQuestion = '';
        $currentQuestionNum = 0;
        $inQuestion = false;
        $inAnswerKey = false;

        foreach ($lines as $line) {
            $line = trim($line);

            // Stop processing when we hit the answer key
            if (strpos($line, '**Answer Key:**') === 0) {
                if ($currentQuestionNum > 0 && !empty($currentOptions)) {
                    $correctAnswer = $answerKey[$currentQuestionNum] ?? '';
                    $questions[] = [
                        'questionNumber' => $currentQuestionNum,
                        'questionText' => trim($currentQuestion),
                        'options' => $currentOptions,
                        'correctAnswer' => $correctAnswer
                    ];
                }
                break;
            }

            // Skip instructions and empty lines
            if (empty($line) || strpos($line, '**Instructions:**') === 0) {
                continue;
            }

            // Check for new question
            if (strpos($line, '**') === 0) {
                // Save previous question if exists
                if ($currentQuestionNum > 0 && !empty($currentOptions)) {
                    $correctAnswer = $answerKey[$currentQuestionNum] ?? '';
                    $questions[] = [
                        'questionNumber' => $currentQuestionNum,
                        'questionText' => trim($currentQuestion),
                        'options' => $currentOptions,
                        'correctAnswer' => $correctAnswer
                    ];
                    $currentOptions = [];
                }

                // Extract question number and text
                $line = str_replace('**', '', trim($line));
                $questionPattern = '/^(\d+)\.\s+(.+)$/';
                if (preg_match($questionPattern, $line, $matches)) {
                    $currentQuestionNum = (int)$matches[1];
                    $currentQuestion = $matches[2];
                    $inQuestion = true;
                }
            }
            // Process options
            elseif ($inQuestion && preg_match('/^[a-d]\).*/', $line)) {
                $currentOptions[] = $line;
            }
            // Append multiline question text if needed
            elseif ($inQuestion && !empty($line) && !empty($currentOptions)) {
                $currentQuestion .= ' ' . $line;
            }
        }

        return $questions;
    }
}