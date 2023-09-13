<?php 
namespace Arifinhabibi\Whatsapp;

use Arifinhabibi\Whatsapp\Filter\AddingPlus;
use Arifinhabibi\Whatsapp\Country\FilterCountry;
use Arifinhabibi\Whatsapp\Filter\SeparateMessage;

class Whatsapp
{
    public function __construct(){

    }

    public static function send(string $targetNumber, string $message)
    {
        // filtering number
        $readyNumber = AddingPlus::add($targetNumber);

        // filtering message
        $readyMessage = SeparateMessage::separated($message);
        return redirect("https://api.whatsapp.com/send/?phone=" . $readyNumber . "&text=". $readyMessage ."&type=phone_number&app_absent=0");
    }

    public static function register(string $country_id, string $numbers){
        $filterNumber = FilterCountry::filter($country_id, $numbers);
        $converNumber = str_split($filterNumber);
        if ($converNumber[0] == "+") {
            $converNumber[0] = '';
        }
        $readyNumber = implode("", $converNumber);
        var_dump($readyNumber);
        return $readyNumber;
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