<?php

class PokeInfo
{
    public $name;
    public $type;
    public $number;
    public $evolution;
    public $nickname;
    
    function __construct(string $abobrinha, string $type, int $number, int $evolution){
        $this->name = $abobrinha;
        $this->type = $type;
        $this->number = $number;
        $this->evolution = $evolution;
    } 
}
