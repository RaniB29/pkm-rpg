<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

require_once("./bootstrap.php");

$pocket = [
    "Potion",
    "Revive",
    "Super potion",
    new Pokeball("greatball") 
];

$pokemonCenter = new PokemonCenter();
$pokemonCenter->healPokemon($playerName,$pokeballNumber,$pokemonList);