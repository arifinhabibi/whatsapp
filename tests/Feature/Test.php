<?php 
namespace arifinhabibi\whatsapp\tests\feature;

use PHPUnit\Framework\TestCase;
use arifinhabibi\whatsapp\Whatsapp;

class Test extends TestCase {

    /**  @test */
    public function test(){
        Whatsapp::send("85882529291", "lahdsfh");
    }
}