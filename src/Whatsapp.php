<?php 
namespace arifinhabibi\whatsapp;

use arifinhabibi\whatsapp\country\FilterCountry;
use arifinhabibi\whatsapp\filter\SeparateMessage;

class Whatsapp
{
    public function __construct(){

    }

    public static function send(string $targetNumber, string $message)
    {
        // filtering number
        $readyNumber = FilterCountry::filter($targetNumber);

        // filtering message
        $readyMessage = SeparateMessage::separated($message);
        
        return redirect("https://api.whatsapp.com/send/?phone=%2B" . $readyNumber . "&text=". $readyMessage ."&type=phone_number&app_absent=0");
    }
}