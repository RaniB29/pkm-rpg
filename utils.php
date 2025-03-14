<?php

function colorir(string $message) : void
{
    $color = greencolor();
    echo "\e[{$color}m {$message}\e[0m";
}

/**
 * Show a message from a given character 
*/
function speakMessage(string $character, string $message) : void
{
    colorir(completeName($character, "Silva"));
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