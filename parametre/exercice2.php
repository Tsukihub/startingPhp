<?php
echo "<br/>";
$test="pas d'age";
if(isset($_GET['age'])) {
    $test = $_GET['age'];
    echo $test;
}else{
    echo $test;
}
echo "<br/>";
?>

<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>