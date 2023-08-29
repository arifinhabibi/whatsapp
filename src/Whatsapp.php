<?php 
namespace Arifinhabibi\Whatsapp;

use Arifinhabibi\Whatsapp\Filter\SeparateMessage;

class Whatsapp
{
    public function __construct(){

    }

    public static function send(string $targetNumber, string $message)
    {
        $convertNumber = str_split($targetNumber);
        if ($convertNumber[0] != "+") {
            $targetNumber = "+".$targetNumber;
        }

        // filtering message
        $readyMessage = SeparateMessage::separated($message);

        return redirect("https://api.whatsapp.com/send/?phone=" . $targetNumber . "&text=". $readyMessage ."&type=phone_number&app_absent=0");
    }

    public static function register(string $country_dial_code, string $numbers){
        $data = array($country_dial_code, $numbers);
        return implode('', $data);
    }

    public static function countries(){
        return include("country/Countries.php");
    }

    public static function findCountry(string $code){
        $countries = include("country/Countries.php");
        foreach($countries as $country)
        {   
            if (strtolower($country->code)  === strtolower($code)) {
                return $country;
            }
        }
    }
}