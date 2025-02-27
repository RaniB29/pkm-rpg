<?php

function colorir($message)
{
    echo "\e[33m{$message}\e[0m";
}

/**
 * Show a message from a given character 
*/
function speakMessage($character, $message)
{
    colorir($character);
    echo " > {$message}\n";
}
