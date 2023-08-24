<?php 

namespace arifinhabibi\whatsappSendingMessage\src;

class Whatsapp {

    function send(string $targetNumber, string $message)
    {
        // filtering number
        $convertingNumber = str_split($targetNumber);
        $filterNumber = array_map(function($value){
            if ($value == "0") {
                return "62";
            }
            if ($value == "+") {
                # code...
                return "";
            }
        }, $convertingNumber);
        $readyNumber = implode("", $filterNumber);

        $convertingMessage = explode(" ", $message);
        $readyMessage = implode("+", $convertingMessage);
        return redirect("https://api.whatsapp.com/send/?phone=%2B" . $readyNumber . "&text=". $readyMessage ."&text&type=phone_number&app_absent=0");
    }
}