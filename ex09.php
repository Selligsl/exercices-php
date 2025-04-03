<?php

// Exercice 9 : Vérifier si un mot est un palindrome.
// Pseudo-code :
// inverser le mot
// si mot == mot inversé alors
//   afficher 'palindrome'
// sinon
//   afficher 'non'

$chaine = "kayak";
echo $chaine . "<br>";
for ($i = strlen($chaine)-1; $i >= 0; $i--) {
    echo $chaine [$i];
    }
$chaineInv = $chaine;
    if ($chaine === $chaineInv) {
        echo "<br> C'est un palindrome";
    }

    else echo "<br> Ce n'est pas un palindrome";
