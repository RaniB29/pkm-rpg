<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

$bulbassaurInfo = [
    "name" => "Bulbassaur",
    "type" => "grass/poison",
    "number" => 1,
    "evolution" => 1
];

$charmanderInfo = [
    "name" => "Charmander",
    "type" => "fire",
    "number" => 4,
    "evolution" => 1
];

$squirtleInfo = [
    "name" => "Squirtle",
    "type" => "water",
    "number" => 7,
    "evolution" => 1
];

$pokemonList = [
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $squirtleInfo,
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $bulbassaurInfo,
    $charmanderInfo,
    $squirtleInfo,
    $squirtleInfo,
];

function colorir($message)
{
    echo "\e[33m{$message}\e[0m";
}

/**
 * Show a message from a given character 
*/
function speakMessage($character, $message)
{
    colorir($character);
    echo " > {$message}\n";
}

speakMessage("Joy", "Welcome to Pallete Pokemon Center");

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
    speakMessage("Joy","I will heal your {$pokemonList[$pokeIndex]['type']}");
};