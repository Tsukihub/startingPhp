<?php
echo "<br/>";
$test="pas def";
$test2="pas def";
if(isset($_GET['salle'])) {
    $test = $_GET['salle'];
    echo $test."<br/>";
}else{
    echo $test."<br/>";
}
if(isset($_GET['batiment'])) {
    $test2 = $_GET['batiment'];
    echo $test2."<br/>";
}else{
    echo $test2."<br/>";
}
?>

<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>