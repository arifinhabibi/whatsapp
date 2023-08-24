<?php 

namespace arifinhabibi\whatsappSendingMessage\src;

class Whatsapp {

    function send(string $targetNumber, string $message)
    {
        $filterNumber = str_split($targetNumber);
        $readyNumber = array_map(function($value){
            if ($value == "0") {
                return "62";
            }
            if ($value == "+") {
                # code...
                return "";
            }
        }, $filterNumber);

        $convertMessage = explode(" ", $message);
        $readySend = implode("+", $convertMessage);
        return redirect("https://api.whatsapp.com/send/?phone=%2B" . $targetNumber . "&text=". $readySend ."&text&type=phone_number&app_absent=0");
    }
}