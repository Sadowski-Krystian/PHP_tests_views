<?php
require('./Vievs.php');
USE PHPUnit\Framework\TestCase;

class LoadLibTest extends TestCase{

    public function setUp(){
        $this->instance = new Views();
    }

    public function tearDown(){
        unset($this->instance);
    }

    public function testLoadlib(){
        $exp1 = '<link rel="stylesheet" href="ui/katalog/plik.css" />';
        $out1 = $this->instance->loadLib('css', 'katalog/plik');

        $this->assertEquals($exp1, $out1);
        $exp2 = '<link rel="stylesheet" href="ui/katalog/plik.css?v=123" />';
        $out2 = $this->instance->loadLib('css', 'katalog/plik', ['ver'=>123]);

        $this->assertEquals($exp2, $out2);
    }

    public function testLoadlibNoFile(){
        $exp0 = '';

        $out1 = $this->instance->loadLib('css', 'katalog/brak');


        $this->assertEquals($exp0, $out1);
        
    }
}