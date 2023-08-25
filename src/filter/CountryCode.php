<?php 
namespace arifinhabibi\whatsapp\filter;

class CountryCode {
    public function __construct(){
        $this->dataCountries = include("countries-code.json");
    }

    public function filter(string $targetNumber){
        dd($this->dataCountries);
        $convertingNumber = str_split($targetNumber);
        $filterNumber = array_map(function($value){
            if ($convertingNumber[0] == "0") {
                return "62";
            }
            if ($convertingNumber[0] == "+") {
                return "";
            }
            if ($convertingNumber[0] == "8") {
                array_unshift($convertingNumber, "6", "2");
            }
        }, $convertingNumber);
        dd($filterNumber);
        return implode("", $filterNumber);
    }
}