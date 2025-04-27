<?php
namespace App\Service;
use Twilio\Rest\Client;

class TwilioWhatsappService
{
    private $twilio;
    private $from;

    public function __construct()
    {
        $sid = $_ENV['TWILIO_SID'] ?? null;
        $authToken = $_ENV['TWILIO_AUTH_TOKEN'] ?? null;
        $this->from = $_ENV['TWILIO_WHATSAPP_FROM'] ?? null;

        if (!$sid || !$authToken || !$this->from) {
            throw new \InvalidArgumentException('Twilio credentials not properly configured');
        }

        $this->twilio = new Client($sid, $authToken);
    }

    public function sendMessage(string $toPhoneNumber, string $body): string
    {
        $message = $this->twilio->messages->create(
            "whatsapp:{$toPhoneNumber}",
            [
                "from" => $this->from,
                "body" => $body,
            ]
        );
        return $message->sid;
    }
}