<?php

class Pokeball
{
    public string $type;
    public Pokemon $pokemon;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    public function setPokemon(Pokemon $pokemon)
    {
        $this->pokemon = $pokemon;
    }
}