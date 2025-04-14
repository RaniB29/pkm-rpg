<?php

class SystemUtils
{
    static function colorir(string $message) : void
    {
        $color = self::greencolor();
        echo "\e[{$color}m {$message}\e[0m";
    }

    /**
     * Show a message from a given character 
    */
    static public function speakMessage(string $characterName, string $message) : void
    {
        self::colorir($characterName);
        echo " > {$message}\n";
    }


    static function greencolor() : string
    {
        return 32;
    }

    function completeName(string $name, string $lastname) : string 
    {
        return $name . $lastname; 
    }
}