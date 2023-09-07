<?php 
namespace Arifinhabibi\Whatsapp\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Arifinhabibi\Whatsapp\Whatsapp;

class Test extends TestCase {

    /**  @test */
    public function test(){
        var_dump(Whatsapp::send("6285882529291", "helloo world!"));
        // var_dump(Whatsapp::countries());
        // var_dump(Whatsapp::register("id", "85812938987"));
        // var_dump(Whatsapp::findCountry("as"));
    }
}