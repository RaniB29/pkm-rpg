<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

//requisitando outros scripts.
require_once("./Application/Model/Entity/PokemonCenter.php");
require_once("./Application/Model/Entity/Backpack.php");
require_once("./Application/Model/Entity/Player.php");
require_once("./Application/Model/Entity/Pokeball.php");
require_once("./Application/Model/Entity/Pokemon.php");
require_once("./Application/Model/Entity/PokeInfo.php");
require_once("./pokemonData.php");
require_once("./utils.php");

$pocket = [
    "Potion",
    "Revive",
    "Super potion",
    new Pokeball("greatball") 
];

$backpack = new Backpack($pocket);
$player = new Player($playerName, $backpack);
$player->backpack->pocket[3]->setPokemon(new Pokemon("pikachu", "Gilberto", 12,["quickattack", "thunder", "scratch", "tailwhip"]));

var_dump($player->backpack->pocket[3]->type);
var_dump($player->backpack->pocket[3]->pokemon);

$pokemonCenter = new PokemonCenter();
$pokemonCenter->healPokemon($playerName,$pokeballNumber,$pokemonList);

// Cria uma mochila e adiciona alguns itens
//$mochila = new BackBag("padrão");
//$mochila->addPocket("Potion");
//$mochila->addPocket("Super Potion");
//$mochila->addPocket("Hiper Potion");
// Cria um jogador com nome e mochila
//$player = new Jogador($playerName, $mochila);

// Exibe o nome do jogador e os itens da mochila
//speakMessage("Joy", "Jogador: " . $player->getNome());
//speakMessage("Joy", "Mochila tipo: " . $player->getBackBag()->tipo);
//speakMessage("Joy", "Itens na mochila:");

//foreach ($player->getBackBag()->listPockets() as $item) {
//    speakMessage("Joy", "- $item");
//}

// Instancia o centro Pokémon e executa o método de cura
$pokemonCenter = new PokemonCenter();
$pokemonCenter->healPokemon($playerName, $pokeballNumber, $pokemonList);


//var_dump($pokemonCenter);