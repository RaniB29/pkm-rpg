<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

//requisitando outros scripts.
require_once("./pokemonData.php");
require_once("./utils.php");
require_once("./PokeInfo.php");

$pikachuInfo = new PokeInfo();
$pikachuInfo->name = "Pikachu";
$pikachuInfo->type = "eletric";
$pikachuInfo->number = 25;
$pikachuInfo->evolution = 2;
$pokemonList[count($pokemonList)] = $pikachuInfo;

speakMessage("Joy", "Welcome to Pallete Pokemon Center");

if($pokemonList == null)
{
    speakMessage("Joy", "Sorry! We are without data access at the moment!");
    exit;
}

if($playerName == null) 
{
    speakMessage("Joy", "Sorry, would you please tell me your name?");
    exit;
}

if($pokeballNumber == null)
{
    speakMessage("Joy", "Hi there {$playerName} I need your pokeballs");
    exit;
}

if($pokeballNumber > POKEBALL_LIMIT) 
{
    speakMessage("Joy", "Sorry dear, I only can heal 6 Pokemon at time and you gave me {$pokeballNumber} pokemon");
    exit;
}

for($pokeIndex = 0;$pokeIndex < count($pokemonList);$pokeIndex = $pokeIndex + 1)
{
    speakMessage("Joy","I will heal your {$pokemonList[$pokeIndex]->name}");
};