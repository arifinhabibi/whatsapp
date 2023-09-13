<?php 
namespace Arifinhabibi\Whatsapp\Country;

class FilterCountry {

    public static function filter(string $codeNumber, string $targetNumber){
        $countries = include('Countries.php');
        $ready = '';
        foreach($countries as $country){
            if (strtolower($country->code) === strtolower($codeNumber)) {
                $ready = $country->dial_code . $targetNumber;
            }
        }
        return $ready;
    }
}