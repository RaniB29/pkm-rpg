<?php

$bagunca = [$argv[1], $argv[2], $argv[3], $argv[4], $argv[5]];
$maior = $bagunca[0];
$x = count($bagunca);

for ($i = 1; $i < $x; $i++) {
    if ($maior < $bagunca[$i]) {
        $maior = $bagunca[$i];
    }
}

echo "O maior número é o $maior.\n";