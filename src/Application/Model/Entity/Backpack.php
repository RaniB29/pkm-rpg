<?php

namespace PkmRpg\Application\Model\Entity;

class Backpack
{
    public Array $pocket;
    
    public function __construct(Array $pocket)
    {
        $this->pocket = $pocket;
    }
}