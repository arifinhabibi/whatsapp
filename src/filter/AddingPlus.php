<?php 
namespace Arifinhabibi\Whatsapp\Filter;

class AddingPlus {

    public static function add($number){
        $convert = str_split($number);
        $ready = '';
        if ($convert[0] != '+') {
            $ready = '+'.implode("", $convert);
        } else {
            $ready = $number;
        }
        return $ready;
    }
}