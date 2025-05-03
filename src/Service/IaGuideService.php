<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Knp\Snappy\Pdf;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Equipement;
use Knp\Component\Pager\PaginatorInterface;

class IaGuideService
{
    private $client;
    private $apiKey;
    private $knpSnappyPdf;
    private $paginator;
    private $guideUtilisation;

    public function __construct(HttpClientInterface $client, Pdf $knpSnappyPdf,PaginatorInterface $paginator)
    {
        $this->client = $client;
        $this->apiKey = 'AIzaSyCf8uJ4mJzV3ROEfaQ482K9X8cz8QBtPiE'; // Remplacez par votre clé Gemini
        $this->knpSnappyPdf = $knpSnappyPdf;
        $this->paginator = $paginator;
    }

    public function generateGuide(string $nom, string $categorie, string $description): string
    {
        $prompt = "Rédige un guide d'utilisation extrêmement détaillé pour l'équipement suivant :

- Nom : $nom
- Type : $categorie
- Fonction : $description

Organise le guide avec ces parties :
1. Introduction générale (au moins 5 phrases)
2. Installation (détaillée en étapes claires)
3. Fonctionnalités principales (au moins 5 fonctionnalités différentes avec explication)
4. Fonctionnalités avancées (si applicable)
5. Dépannage (problèmes fréquents et solutions)
6. Spécifications techniques détaillées
7. Exemples d'utilisation pratiques
8. Conseils d'entretien
9. Ressources et Contact pour support

Style :
- Langage clair et pédagogique
- Développement approfondi de chaque point
- Minimum 1200 mots
- Ton professionnel, adapté à un manuel technique.";



        $response = $this->client->request('POST', 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $this->apiKey, [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => [
                'contents' => [['role' => 'user', 'parts' => [['text' => $prompt]]]],
                'generationConfig' => ['maxOutputTokens' => 2500, 'temperature' => 0.6],
            ],
        ]);

        $data = $response->toArray();
        $text = $data['candidates'][0]['content']['parts'][0]['text'] ?? '❌ Erreur...';
        $guideData = $this->parseGuideText($text, $categorie);
        return $this->generateHtmlFromGuideData($guideData, $nom);
    }

    private function parseGuideText(string $text, string $categorie): array
    {
        $lines = explode("\n", $text);
        $steps = [];
        $toc = [];
        $stepContent = '';
        $currentTitle = '';
        $i = 1; // Commencer la numérotation à 1 pour le sommaire

        foreach ($lines as $line) {
            if (preg_match('/^\*{2}(\d+)\.\s*(.*?)\*{2}$/', trim($line), $matches)) {
                if ($stepContent) {
                    $steps[] = [
                        'title' => $currentTitle,
                        'content' => trim($stepContent)
                    ];
                    $stepContent = '';
                }
                $currentTitle = $matches[2];
                $toc[] = $matches[2];
                $i++;
            } else {
                $stepContent .= $line . "\n";
            }
        }

        if ($stepContent) {
            $steps[] = [
                'title' => $currentTitle,
                'content' => trim($stepContent)
            ];
        }

        return [
            'toc' => $toc,
            'steps' => $steps,
            'categorie' => $categorie
        ];
    }

    private function generateHtmlFromGuideData(array $guideData, string $nom): string
{
    $html = '<div class="guide">';
    $html .= '<style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 40px;
            color: #2c3e50;
            background: #fff;
        }
        h1 {
            font-size: 28px;
            color: #2980b9;
            text-align: center;
            margin-bottom: 40px;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 10px;
        }
        h2 {
            font-size: 22px;
            color: #27ae60;
            margin-top: 30px;
            margin-bottom: 10px;
            border-left: 5px solid #27ae60;
            padding-left: 10px;
        }
        .step {
            margin: 20px 0;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        .step p {
            line-height: 1.6;
            font-size: 16px;
        }
        .toc {
            background: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .toc h2 {
            color: #34495e;
            font-size: 20px;
            border: none;
            padding: 0;
            margin-bottom: 10px;
        }
        .toc ul {
            list-style: decimal;
            padding-left: 20px;
            font-size: 16px;
        }
        .toc li {
            margin-bottom: 5px;
        }
        .image-container {
            text-align: center;
            margin: 20px 0;
        }
        .image-container img {
            max-width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>';


    $html .= '<h1>Guide d\'utilisation : ' . htmlspecialchars($nom) . '</h1>';

    $pagination = $this->paginator->paginate(
        $guideData['steps'],
        1,
        3 // 3 étapes par page
    );

    foreach ($pagination as $index => $step) {
        $html .= '<div class="step">';
        $html .= '<h2>' . htmlspecialchars($step['title']) . '</h2>';
        $html .= '<p>' . nl2br(htmlspecialchars($step['content'])) . '</p>';

        if ($guideData['categorie'] === 'informatique' && $index === 0) {
            $html .= '<div class="image-container"><img src="/images/ordinateur.jpg" alt="Image informatique"></div>';
        } elseif ($guideData['categorie'] === 'outil' && $index === 1) {
            $html .= '<div class="image-container"><img src="/images/outil.png" alt="Image outil"></div>';
        }

        $html .= '</div>';
    }

    $html .= '</div>';
    return $html;
}

    public function generatePdfFromHtml(string $html, string $filename = 'guide.pdf'): Response
{
    $safeFilename = $this->sanitizeFilename($filename);
    $pdfData = $this->knpSnappyPdf->getOutputFromHtml($html);

    $response = new Response($pdfData);
    $disposition = $response->headers->makeDisposition(
        ResponseHeaderBag::DISPOSITION_ATTACHMENT,
        $safeFilename
    );
    $response->headers->set('Content-Disposition', $disposition);
    $response->headers->set('Content-Type', 'application/pdf');

    return $response;
}

public function setGuideUtilisation(?string $guideUtilisation): self
{
    $this->guideUtilisation = $guideUtilisation;
    return $this;
}
private function sanitizeFilename(string $filename): string
{
    // Convertir en ASCII (translittération)
    $filename = iconv('UTF-8', 'ASCII//TRANSLIT', $filename);

    // Remplacer tout caractère non alphanumérique ou _.- par _
    $filename = preg_replace('/[^A-Za-z0-9_\.-]/', '_', $filename);

    return trim($filename, '_');
}
}