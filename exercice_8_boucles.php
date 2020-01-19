<?php
/* On demande à l'utilisateur de rentrer uen note ou de taper "fin
chaque note est sauvegardée dans un tableau $notes (pensez $notes[])
à la fin on affiche le tableau de note sous forme de liste
*/

$notes = [];
$action = null;

//TANT QUE l'utilisateur ne tape pas "fin"
while ($action !== 'fin'){
    $action = readline('Entrer une nouvelle note (ou \'fin\' pour terminer la saisie :');
    //On ajoute la note tapée dans le tableau notes
    if ($action !== 'fin'){
    $notes [] = (int)$action;
    }
}
//POUR CHAQUE note DANS notes
foreach ($notes as $note){
    //On affiche "-note"
    echo "- $note \n";
}



