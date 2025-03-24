<?php

class PokeInfo
{
    private $name;
    private $type;
    private $number;
    private $evolution;
    private $nickname;
    
    public function __construct(string $abobrinha, string $type, int $number, int $evolution){
        $this->name = $abobrinha;
        $this->type = $type;
        $this->number = $number;
        $this->evolution = $evolution;
    } 

    public function setNickname(string $nickname) {
        if($nickname == "") {
            throw new Exception("You cannot insert a empty string value to nickName.");
        }
        $this->nickname = strtoupper($nickname);
        //strtolower
    }

    public function getNickname() {
        return $this->nickname;            
    }
}
