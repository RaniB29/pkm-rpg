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

    public function useItem() 
    {
        $this->used = true;
        SystemUtils::speakmessage("","Your {$this->name} item has been used.\n");
    }
    
    public function getPurpose()
    {
        SystemUtils::speakmessage("",$this->purpose);
    }
}