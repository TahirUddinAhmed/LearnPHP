<?php

class Calc {
    private $num1;
    private $num2;

    public function __construct($num1, $num2)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    // perform addition
    public function getSum() {
        return $this->num1 + $this->num2;
    }

    // Perform multiplication
    public function getMul() {
        return $this->num1 * $this->num2;
    }

}