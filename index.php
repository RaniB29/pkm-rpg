<?php

// The atendant must greet the player
// All message must show who is the speaker
// The player must give it name as first argument
// The player must give a pokeball number lower than the pokeball limit

define('POKEBALL_LIMIT', 6);

$playerName = $argv[1];
$pokeballNumber = $argv[2];

require_once("./bootstrap.php");
use PkmRpg\Application\Model\Entity\ConsumableItem;
use PkmRpg\Application\Model\Entity\Pokeball;
use PkmRpg\Application\Model\Entity\Trainer;
use PkmRpg\Application\Model\Entity\Backpack;
use PkmRpg\Application\Model\Entity\NonPlayableCharacter;
use PkmRpg\Application\Model\Entity\PokemonCenter;
use PkmRpg\Application\Controller\GameLoop;

$pocket = [
    new ConsumableItem("potion", "heal pokemon's 20 HP",false), 
    new ConsumableItem("superpotion", "heal pokemon's 50 HP",false), 
    new ConsumableItem("revive", "heal a fainted pokemon",false),
    new Pokeball("greatball") 
];

$trainer = new Trainer($playerName, new Backpack($pocket));
$npc = new NonPlayableCharacter("Jabulani", "To heal");
$pocket[3]->getPurpose();
$pocket[3]->useItem();

//$pokemonCenter = new PokemonCenter();
//$pokemonCenter->healPokemon($trainer, $pokeballNumber, $pokemonList, $npc);
$gameLoop = new GameLoop();
$gameLoop->run($trainer);