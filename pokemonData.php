<?php
require_once("./PokeInfo.php");

//criando objetos da classe PokeInfo

$pokemonList = [
    new PokeInfo("Bulbassaur", "grass/poison", 1, 1),
    new PokeInfo("Charmander", "fire", 4, 1),
    new PokeInfo("Squirtle", "water", 7, 1)
];

$pokemonList[0]->setNickname("VERDE");
echo $pokemonList[0]->getNickname();
die;