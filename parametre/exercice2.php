<?php
echo "<br/>";
$test="pas d'age";
if(isset($_GET['age'])) {
    $test = $_GET['nom'];
    echo $test;
}else{
    echo $test;
}
?>

<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>