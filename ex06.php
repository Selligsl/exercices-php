<?php

// Exercice 6 : Trouver le plus grand de trois nombres.
// Pseudo-code :
// si a >= b et a >= c alors
//   afficher a
// sinon si b >= a et b >= c alors
//   afficher b
// sinon
//   afficher c

$a = 2;
$b = 66;
$c = 45;

if ($a >= $b && $a >= $c) {
    echo $a;
}

else if ($b >= $a && $b >= $c) {
    echo $b;}

else { echo $c;}


