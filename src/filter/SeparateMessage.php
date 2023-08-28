<?php
namespace arifinhabibi\whatsapp\filter;

class SeparateMessage {

    public static function separated(string $message){
        $convertingMessage = explode(" ", $message);
        return implode("+", $convertingMessage);
    }
}