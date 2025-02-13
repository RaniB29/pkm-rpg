<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

$playerPokemonList = [
    "Bulbassaur",
    "Charmander",
    "Squirtle",
    "Pikachu",
    "Eevee",
    "Jigglypuff"
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

if ($playerName == null) 
{
    speakMessage("Joy", "Sorry, would you please tell me your name?");
    exit;
}

if ($pokeballNumber == null)
{
    speakMessage("Joy", "Hi there {$playerName} I need your pokeballs");
    exit;
}

if ($pokeballNumber > POKEBALL_LIMIT) 
{
    speakMessage("Joy", "Sorry dear, I only can heal 6 Pokemon at time and you gave me {$pokeballNumber} pokemon");
    exit;
}

speakMessage("Joy", "Great {$playerName}! I will heal your {$pokeballNumber} Pokemons.");
speakMessage("Joy", "So, your $playerPokemonList[0], {$playerPokemonList[1]}, {$playerPokemonList[2]}, {$playerPokemonList[3]}, {$playerPokemonList[4]} and {$playerPokemonList[5]} has been healed");
