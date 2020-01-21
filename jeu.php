<?php
$title = "Composez votre glace";
require 'header.php';

//Checkbox
$parfums = [
    'Fraise' => 4,
    'Chocolat' => 5,
    'Vanille' => 3
];
//Radio
$cornets = [
    'Pot' => 2,
    'Cornet' => 4
];
//checkbox
$supplements = [
    'Pépites de chocolat' => 1,
    'Chantilly' => 0.5
];
?>

<h1>Composez votre glace</h1>
<form action="jeu.php" method="post">
    <?php foreach ($parfums as $parfum => $prix): ?>
        <div class="checkbox">
            <label>
 <?= checkbox ('parfum, $parfum, $_POST') ?>
                <?= $parfum ?> - <?= $prix ?> €
            </label>
        </div>
    <?php endforeach; ?>
    <button type="submit" class="btn btn-secondary">Composer ma glace</button>
</form>

<pre>
    <?php var_dump($_POST); ?>
</pre>

<?php
require 'footer.php';

/* EXERCICE 1
$aDeviner = 150;
$error = null;
$success = null;
$value = null;
if (isset($_POST['chiffre'])) {
$value = (int)$_POST['chiffre'];
if ( $value > $aDeviner) {
    $error = "Votre chiffre est trop grand";
} elseif ($value < $aDeviner) {
    $error = "  Votre chiffre est trop petit";
} else {
    $success = "Bravo ! Vous avez deviné le bon chiffre <strong> $aDeviner";
}

}
?>

<?php if ($error): ?>
<div class="alert alert-danger">
    <?= $error ?></div>
<?php elseif ($success): ?>
<div class="alert alert-success">
    <?= $success ?>
</div>
<?php endif; ?>


<form action="jeu.php" method="post">
    <div class="form-group">
    <input type="text" name="chiffre" placeholder="entre 0 et 1000"
           value="<?= $value ?>">

    </div>
    <button type="submit" class="btn btn-secondary">Deviner</button>
</form>
*/

?>


