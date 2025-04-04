<?php

function colorir(string $message) : void
{
    $color = greencolor();
    echo "\e[{$color}m {$message}\e[0m";
}

/**
 * Show a message from a given character 
*/
function speakMessage(string $characterName, string $message) : void
{
    colorir($characterName);
    echo " > {$message}\n";
}


function greencolor() : string
{
    return 32;
}

function completeName(string $name, string $lastname) : string 
{
    return $name . $lastname; 
}