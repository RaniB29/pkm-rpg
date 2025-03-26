<?php
require_once("./PokeInfo.php");

//criando objetos da classe PokeInfo
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
