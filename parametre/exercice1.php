
<?php
echo "<br/>";
if(isset($_GET['nom'])) {
    $test = $_GET['nom'];
    echo $test;
}
echo "<br/>";
if(isset($_GET['prenom'])) {
    $test2 = $_GET['prenom'];
    echo $test2;
}
echo "<br/>";
?>
<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>