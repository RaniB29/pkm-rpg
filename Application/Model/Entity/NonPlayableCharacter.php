<?php

class NonPlayableCharacter
{
    public $name;
    public $role;

    public function __construct(string $name, string $role)
    {
        $this->name = $name;
        $this->role = $role;
    }
}