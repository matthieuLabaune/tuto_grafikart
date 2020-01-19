<?php
/*
On veut demander à l'utilisateur de rentrer des horaires d'ouvertures d'un magasin
On demande à l'utilisateur de rentrer une heure et on lui dira si le magasin est ouvert.
*/

$creneaux = [];

while (true) {
    //On demande à l'utilisateur de rentrer un creneaux
    // On demande l'heure de début
    $debut = (int)readline('Heure de début du créneau :');
    // On demande l'heure de fin
    $fin = (int)readline ('Heure de fermeture : ');
    // On vérifie que l'heure de début < l'heure de fin
    if ($debut >= $fin){
        echo "Le créneau ne peut pas être enregistré car l'heure de ($debut) est supérieur à l'heure de fermeture";
    }else {
        $creneaux[]= [$debut, $fin];
        // On demande si on veut rajouter un nouveau crenaux (o/n)
        $action = readline('Voulez vous enregistrer un nouveau créneau (o/n)');
        if ($action === 'n')
            break;
    }
}
//Le magasin est ouvert de XXX à XXX et XXX à XXX
echo 'Le magasin est ouvert de';
foreach ($creneaux as $k => $creneau) {
    if ($k > 0) {
        echo ' et de ';
    }
    echo "{$creneau[0]}h à {$creneau[1]}h.";
}

//Nouvelles variables pour réaliser l'action "On demande à l'utilisateur de rentrer une heure"
$heure = (int)readline('A quelle heure voulez vous visiter le magasin ?');
$creneauTrouve=false;
//On demande à l'utilisateur de rentrer une heure
foreach ($creneaux as $creneau){
    if ($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneauTrouve=true;
        break;
    }
}

// On affiche l'état d'ouvertude du magasin
if ($creneauTrouve){
    echo 'Le magasin sera ouvert';
}else{
    echo 'DSL, le magasin sera fermé :(';
}

//print_r($creneaux);