<?php

namespace PkmRpg\Application\Model\Entity;

class Pokemon
{
    public string $specie;
    public string $nickname;
    public int $level;
    public Array $attacks;

    public function __construct(string $specie, string $nickname, int $level, Array $attacks)
    {
        $this->specie = $specie;
        $this->nickname = $nickname;
        $this->level = $level;
        $this->attacks = $attacks;
    }
}