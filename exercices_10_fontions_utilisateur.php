<?php

function repondre_oui_non($phrase)
{
    while (true) {
        $reponse = readline($phrase . "(o)ui/(n)on ");
        if ($reponse === "o") {
            return true;
        } elseif ($reponse === 'n') {
            return false;
        }
    }
}

function demander_creneau($phrase = 'Veuillez entrer un creneau ')
{
    echo $phrase . "\n";
    while (true) {
        $ouverture = (int)readline('Heure d\'ouverture : ');
        if ($ouverture >= 0 && $ouverture <= 23) {
            break;
        }
    }
    while (true) {
        $fermeture = (int)readline('Heure de fermeture : : ');
        if ($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture)
            break;
    }
    return [$ouverture, $fermeture];
}


$creneau2 = demander_creneau('Veuillez entrer votre creneau ');


function demander_creneaux(string $phrase = "Veuillez entrer vos créneaux")
{
    $creneaux = [];
    $continuer = true;
    while ($continuer) {
        $creneau[] = demander_creneau();
        $continuer = repondre_oui_non('Voulez vous continuer ? ');
    }
    return $creneaux ;
}


$creneaux = demander_creneaux('Entrez vos créneaux');

var_dump($creneaux);

/*EXERCICE 1

$resultat = repondre_oui_non('Voulez vous continuer ?');


/*
var_dump($resultat);
*/