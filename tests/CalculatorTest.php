<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class ParImparTests extends TestCase
{
    private $parImpar;
 
    protected function setUp()
    {
        $this->parImpar = new ParImpar();
    }
 
    protected function tearDown()
    {
        $this->parImpar = NULL;
    }
 
    public function testPar()
    {
        $result = $this->parImpar->esPar(2);
        $this->assertEquals(true, $result);
    }

    public function testPar2()
    {
        $result = $this->parImpar->esPar(3);
        $this->assertEquals(false, $result);
    } 
    
	public function testImpar()
    {
        $result = $this->parImpar->esImpar(2);
        $this->assertEquals(false, $result);
    }

    public function testImpar2()
    {
        $result = $this->parImpar->esImpar(3);
        $this->assertEquals(true, $result);
    } 
 
}