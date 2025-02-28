<?php

class NossosDados
{
    public $name;
    public $idade;
    public $rg;
    public $cpf;
}

$Kelvin = new NossosDados;
$Kelvin->name = "KelvinLuan";
$Kelvin->idade = "33";
$Kelvin->rg = 'SP123785';
$Kelvin->cpf = 12345678988;

$Alan = new NossosDados;
$Alan->cpf = 12378945621;
$Alan->name = "AlanRaniel";
$Alan->rg = "MG4567212";
$Alan->idade = 36;

$conjuntoNomes = [
    $Kelvin,
    $Alan,
];

for($indice=0;$indice<2;$indice=$indice+1){
    echo "Seus nomes são: {$conjuntoNomes[$indice]->name}\n";
}
