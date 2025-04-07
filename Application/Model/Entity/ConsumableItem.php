<?php

class ConsumableItem
{
    private $name;
    private $purpose;
    private $used;

    public function __construct(string $name, string $purpose, bool $used)
    {
        $this->name = $name;
        $this->purpose = $purpose;
        $this->used = $used;
    }

    public function useItem(string $speaker, string $trainerOwn, bool $status) 
    {
        $this->used = $status;
        require_once("./utils.php");
        if($this->used == true)
        {
            colorir($speaker);
            echo " > Dear trainer {$trainerOwn}, your {$this->name} item has been used.\n";
        }
    }
}