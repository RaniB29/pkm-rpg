<?php

namespace PkmRpg\Application\Model\Entity;

class Trainer extends Character
{
    public Backpack $backpack;

    public function __construct(string $name, Backpack $backpack)
    {
    //  $this->name = $name;
        parent::__construct($name);
        $this->backpack = $backpack;
    }

}