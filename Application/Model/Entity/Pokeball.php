<?php

class Pokeball extends ConsumableItem
{
    public string $type;
    public Pokemon $pokemon;

    public function __construct(string $type)
    {
        $this->type = $type;
        parent::__construct("Ronaldo","Catch a pokemon", false);
    }

    public function setPokemon(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }
}