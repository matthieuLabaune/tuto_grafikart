<?php
$heure = (int)readline('Entrez une heure : ') ;

if ((9 <= $heure && $heure <= 12) || (14 <= $heure && 17 <= $heure)){
    echo 'Le magasin est ouvert';
}else {
    echo 'Le magasin est fermé';
}


/*switch ($action) {
    case 1:
        echo 'J\'attaque' ;
        break;
    case 2:
        echo 'Je défends';
        break;
    case 3:
        echo 'Je passe mon tour';
        break;
    default:
        echo 'Commande inconnue';
}
*/