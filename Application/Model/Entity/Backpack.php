<?php

class Backpack
{
    public Array $pocket;
    
    public function __construct(Array $pocket)
    {
        $this->pocket = $pocket;
    }
}