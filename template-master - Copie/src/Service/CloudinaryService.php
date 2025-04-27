<?php
namespace App\Service;

class CloudinaryService
{
    private string $cloudinaryCloudName;
    private string $cloudinaryApiKey;
    private string $cloudinaryApiSecret;

    public function __construct(string $cloudinaryCloudName, string $cloudinaryApiKey, string $cloudinaryApiSecret)
    {
        dd($cloudinaryCloudName, $cloudinaryApiKey, $cloudinaryApiSecret);
    }

    // Exemple de méthode
    public function uploadImage($file): string
    {
        // logique d’upload Cloudinary ici
        return 'url-de-test';
    }

}
