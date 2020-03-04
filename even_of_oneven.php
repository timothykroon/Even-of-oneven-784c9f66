<?php

echo "vul een getal in" . PHP_EOL;
$getal = readline();

$ding = $getal % 2;

if($ding == 0) {
    echo "het is een even getal";
} else{
    echo "het getal in oneven";
}