<?php

$dividendo = $argv[1];
$divisor = $argv[2];
$quociente;

if ($divisor != 0)
{
    $quociente = ($dividendo ^ $divisor);
    echo "Você digitou {$dividendo} para ser dividido por {$divisor}\n";
    echo "Logo, a resposta é igual à {$quociente}\n";
}
else 
{
    echo "Você tentou fazer uma divisão por zero, isso não é possível no momento.\n";
    exit;
}

