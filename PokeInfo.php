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
        /*  ucfirst — Make a string's first character uppercase
            ucwords — Uppercase the first character of each word in a string
            -------
            Primeiro tentei assim
            $this->nickname = strtolower($nickname);
            $this->nickname = ucfirst($nickname);

            Dessa forma estava dando errado, porque eu estava alterando apenas o parâmetro da variável local
            nickname.
            Para funcionar eu precisei inserir um this para indicar o valor que estava guardado na variável 
            já com alteração. */
        
        //solução 1
            $this->nickname = strtolower($nickname);
            $this->nickname = ucfirst($this->nickname);

        //solução 2
         //   $nickname = strtolower($nickname);
         //   $this->nickname = ucfirst($nickname);   
    }

    public function getNickname() {
        return $this->nickname;            
    }
}
