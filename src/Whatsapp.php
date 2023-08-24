<?php 

namespace arifinhabibi\whatsappSendingMessage\src;

class Whatsapp {

    function send(string $targetNumber, string $message)
    {
        $convertMessage = explode(" ", $message);
        $readySend = implode("+", $convertMessage);
        return redirect("https://api.whatsapp.com/send/?phone=%2B62" . $targetNumber . "&text=". $readySend ."&text&type=phone_number&app_absent=0");
    }
}