<?php

require_once("./utils.php");

class PokemonCenter
{
    public function healPokemon($playerName, $pokeballNumber, $pokemonList, $Npc)
    {
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
            speakMessage("Joy","I will heal your {$pokemonList[$pokeIndex]->getName()}");
        };
    }
}