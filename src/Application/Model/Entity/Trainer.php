<?php

namespace PkmRpg\Application\Model\Entity;

class Trainer
{
    public string $name;
    public Backpack $backpack;

    public function __construct(string $name, Backpack $backpack)
    {
        $this->name = $name;
        $this->backpack = $backpack;
    }

}