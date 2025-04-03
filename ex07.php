<?php

// Exercice 7 : Calculer la factorielle d'un nombre.
// Pseudo-code :
// fact = 1
// pour i de 1 à n faire
//   fact *= i
// afficher fact

$fact = 1;
$i = 5;

for($a=1; $a<=$i; $a++) {
    $fact=$fact*$a;}

    echo "Factorielle de : ".$i." est : ".$fact;
