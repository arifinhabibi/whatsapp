<?php
namespace arifinhabibi\whatsapp\filter;

class SeparateMessage {

    public function separated(string $message){
        $convertingMessage = explode(" ", $message);
        return implode("+", $convertingMessage);
    }
}