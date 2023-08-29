<?php 
namespace Arifinhabibi\Whatsapp\Country;

class FilterCountry {

    public static function filter(string $targetNumber){
        $convertNumber = str_split($targetNumber);
        return self::indonesia($convertNumber);
    }

    public static function indonesia(array $targetNumber){
        $code1 = [
            "+", "6", "2"
        ];
        $code2 = [
            "0"
        ];
        $code3 = [
            "8"
        ];
        if ($targetNumber[0] == $code1[0] && $targetNumber[1] == $code1[1] && $targetNumber[2] == $code1[2]) {
            $targetNumber[0] = "";
            return implode("", $targetNumber);
        }
        if ($targetNumber[0] == $code2[0]) {
            $targetNumber[0] = "2";
            array_unshift($targetNumber, "6");
            return implode("", $targetNumber);
        }
        if ($targetNumber[0] == $code3[0]) {
            array_unshift($targetNumber, "2");
            array_unshift($targetNumber, "6");
            return implode("", $targetNumber);
        }
    }
}