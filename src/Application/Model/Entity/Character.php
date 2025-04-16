<?php

namespace PkmRpg\Application\Model\Entity;

class Character
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }    

    public function getName()
    {
        return $this->name;
    }
}