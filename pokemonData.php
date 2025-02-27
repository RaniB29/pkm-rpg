<?php

class PokeInfo
{
    public $name;
    public $type;
    public $number;
    public $evolution;
}

$instance = new PokeInfo();
$instance->name = "gilberto";
$instance->type = "grass/posion";
$instance->number = 2;
$instance->evolution = 2;

$instance2 = new PokeInfo();
$instance2->name = "mary";
$instance2->type = "grass/posion";
$instance2->number = 2;
$instance2->evolution = 2;

//var_dump($instance->name);
echo "The pokemon's name is {$instance->name}\n";
echo "The pokemon's name is {$instance2->name}\n";

$bulbassaurInfo = new PokeInfo();
$bulbassaurInfo->name = "Bulbassaur";
$bulbassaurInfo->type = "grass/poison";
$bulbassaurInfo->number = 1;
$bulbassaurInfo->evolution = 1;

$charmanderInfo = new PokeInfo();
$charmanderInfo->name = "Charmander";
$charmanderInfo->type = "fire";
$charmanderInfo->number = 4;
$charmanderInfo->evolution = 1;

$squirtleInfo = new PokeInfo();
$squirtleInfo->name = "Squirtle";
$squirtleInfo->type = "water";
$squirtleInfo->number = 7;
$squirtleInfo->evolution = 1;

$pokemonList = [
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
];