<?php

require_once("./utils.php");

class PokemonCenter
{
    public function healPokemon(Trainer $trainer, int $pokeballNumber, array $pokemonList, NonPlayableCharacter $npc)
    {
        speakMessage($npc->name, "Welcome to Pallete Pokemon Center {$trainer->name}!");

        if($pokemonList == null)
        {
            speakMessage($npc->name, "Sorry! We are without data access at the moment!");
            exit;
        }

        if($trainer->name == null) 
        {
            speakMessage($npc->name, "Sorry, would you please tell me your name?");
            exit;
        }

        if($pokeballNumber == null)
        {
            speakMessage($npc->name, "Hi there {$trainer->name} I need your pokeballs");
            exit;
        }

        if($pokeballNumber > POKEBALL_LIMIT) 
        {
            speakMessage($npc->name, "Sorry dear, I only can heal 6 Pokemon at time and you gave me {$pokeballNumber} pokemon");
            exit;
        }

        for($pokeIndex = 0;$pokeIndex < count($pokemonList);$pokeIndex = $pokeIndex + 1)
        {
            speakMessage($npc->name,"I will heal your {$pokemonList[$pokeIndex]->getName()}");
        };
    }
}