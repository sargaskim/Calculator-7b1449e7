<?php

$computter1 = 'Welke operatie wil je uitvoeren? (+, -)'.PHP_EOL;
$computter2 = 'Eerste getal?'.PHP_EOL;
$computter3 = 'Tweede getal?'.PHP_EOL;

echo $computter1;
$plusmin = readline("");
echo $computter2;
$getal1 = readline("");
echo $computter3;
$getal2 = readline("");

if ($plusmin == "+")
    echo $getal1 + $getal2;

if ($plusmin == "-")
    echo $getal1 - $getal2;