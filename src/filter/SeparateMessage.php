<?php
namespace Arifinhabibi\Whatsapp\Filter;

class SeparateMessage {

    public function __construct(){

    }

    public static function separated(string $message){
        $convertingMessage = explode(" ", $message);
        return implode("+", $convertingMessage);
    }
}