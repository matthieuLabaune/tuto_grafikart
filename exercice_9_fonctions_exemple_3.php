<?php
// Filtre à insulte qui remplace chaque lettre de l'insulte contenue dans le tableau 'instulte' par un '*'

$insultes = ['merde', 'con'];
$asterisque = [];
foreach ($insultes as $insulte) {
    $lettre = substr($insulte, 0, 1);
    $asterisque [] = $lettre . str_repeat('*', strlen($insulte) - 1);
}
$phrase = readline('Entrez une phrase : ');
$phrase = str_replace($insultes, $asterisque, $phrase);
echo $phrase ;


// On peut faire la même chose avec le code ci-dessous
/*
    $insultes = ['merde', 'con'];
    $phrase = readline('Entrez une phrase : ');
    foreach ($insultes as $insulte){
        $taille = strlen($insulte);
        $replace = str_repeat('*',strlen(($insulte)));
        $phrase = str_replace($insulte, $replace, $phrase);
    }
    echo $phrase ;

*/