<?php 

namespace arifinhabibi\whatsapp;

use arifinhabibi\whatsapp\filter\CountryCode;
use arifinhabibi\whatsapp\filter\SeparateMessage;

class Whatsapp {

    function send(string $targetNumber, string $message)
    {
        // filtering number
        $readyNumber = CountryCode::filter($targetNumber);

        // filtering message
        $readyMessage = SeparateMessage::separated($message);
        
        return redirect("https://api.whatsapp.com/send/?phone=%2B" . $readyNumber . "&text=". $readyMessage ."&text&type=phone_number&app_absent=0");
    }
}