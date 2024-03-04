<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
 
    public function esPar($a)
    {
        return $a % 2 == 0;
    }
	
	public function esImpar($a)
    {
        return $a % 2 == 1;
    }

}
