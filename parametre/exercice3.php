<?php
echo "<br/>";
$test="pas def";
$test2="pas def";
if(isset($_GET['dateDebut'])) {
    $test = $_GET['dateDebut'];
    echo $test."<br/>";
}else{
    echo $test."<br/>";
}
if(isset($_GET['dateFin'])) {
    $test2 = $_GET['dateFin'];
    echo $test2."<br/>";
}else{
    echo $test2."<br/>";
}
?>

<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>