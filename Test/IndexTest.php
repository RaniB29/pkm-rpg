<?php

$backpack = new Backpack($pocket);
$trainer = new Trainer($playerName, $backpack);
$trainer->backpack->pocket[3]->setPokemon(new Pokemon("pikachu", "Gilberto", 12,["quickattack", "thunder", "scratch", "tailwhip"]));

var_dump($trainer->backpack->pocket[3]->type);
var_dump($trainer->backpack->pocket[3]->pokemon);
