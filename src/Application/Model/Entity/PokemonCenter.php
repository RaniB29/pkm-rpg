<?php

namespace PkmRpg\Application\Model\Entity;

use PkmRpg\Application\SystemUtils;

class PokemonCenter
{
    public function healPokemon(Trainer $trainer, int $pokeballNumber, array $pokemonList, NonPlayableCharacter $npc)
    {
        SystemUtils::speakMessage($npc->name, "Welcome to Pallete Pokemon Center {$trainer->name}!");

        if($pokemonList == null)
        {
            SystemUtils::speakMessage($npc->name, "Sorry! We are without data access at the moment!");
            exit;
        }

        if($trainer->name == null) 
        {
            SystemUtils::speakMessage($npc->name, "Sorry, would you please tell me your name?");
            exit;
        }

        if($pokeballNumber == null)
        {
            SystemUtils::speakMessage($npc->name, "Hi there {$trainer->name} I need your pokeballs");
            exit;
        }

        if($pokeballNumber > POKEBALL_LIMIT) 
        {
            SystemUtils::speakMessage($npc->name, "Sorry dear, I only can heal 6 Pokemon at time and you gave me {$pokeballNumber} pokemon");
            exit;
        }

        for($pokeIndex = 0;$pokeIndex < count($pokemonList);$pokeIndex = $pokeIndex + 1)
        {
            SystemUtils::speakMessage($npc->name,"I will heal your {$pokemonList[$pokeIndex]->getName()}");
        };
    }
}