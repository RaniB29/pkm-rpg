<?php

$backpack = new Backpack($pocket);
$player = new Player($playerName, $backpack);
$player->backpack->pocket[3]->setPokemon(new Pokemon("pikachu", "Gilberto", 12,["quickattack", "thunder", "scratch", "tailwhip"]));

var_dump($player->backpack->pocket[3]->type);
var_dump($player->backpack->pocket[3]->pokemon);
