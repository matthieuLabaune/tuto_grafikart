<?php
$notes = [10, 20, 13];
$somme = array_sum($notes);
$nb_elments = count($notes, COUNT_NORMAL);
echo "Vous avez " . round($somme / $nb_elments, 2) . " de moyenne.";

