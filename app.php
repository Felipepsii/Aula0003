<?php

require "Calc.php";

$calcula= new Calc();

$num1=0;
$num2=0;
$opera;

$calcula->number1($num1);
$calcula->number2($num2);


echo "OPERAÇÕES MATEMÁTICAS: \n";
echo "===somar===\n";
echo "===subtrair===\n";
echo "===dividir===\n";
echo "===multiplicar===\n";

$opera = readline("escolha uma das operações matemáticas acima: \n");
$num1 = readline("insira um número: \n");
$num2 = readline("insira outro número: \n");

switch ($opera)
{
    case 'somar':
        $calcula->soma();
        break;
    case 'subtrair':
        $calcula->subtrai();
        break;
    case 'dividir':
        $calcula->dividi();
         break;
    case 'multiplicar':
        $calcula->multiplica();
        break;
}