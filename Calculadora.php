<?php

class Calc
{
    public $num1;
    public $num2;
    public $valorfinal;

    public function _construct()
    {
        $this->valorfinal = 0;
        $this->num1 = 0;
        $this->num2 = 0;
    }

    //captura de dados:
    public function number1($num1)
    {
        $this->num1=$num1;
    }
    public function number2($num2)
    {
        $this->num2=$num2;
    }

    //operações:
    public function soma($valorfinal)
    {
        $this->valorfinal = $this->num1 + $this->num2;

    }

    public function subtrai()
    {
        $this->valorfinal = $this->num1 - $this->num2;
    }

    public function multiplica()
    {
        $this->valorfinal = $this->num1 * $this->num2;
    }

    public function dividi()
    {
        $this->valorfinal = $this->num1 / $this->num2;
    }

    public function total()
    {
        return $this->valorfinal;
    }
}