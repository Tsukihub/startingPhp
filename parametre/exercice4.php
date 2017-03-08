<?php
echo "<br/>";
$test="pas def";
$test2="pas def";
if(isset($_GET['langage'])) {
    $test = $_GET['langage'];
    echo $test."<br/>";
}else{
    echo $test."<br/>";
}
if(isset($_GET['serveur'])) {
    $test2 = $_GET['serveur'];
    echo $test2."<br/>";
}else{
    echo $test2."<br/>";
}
?>

<a href="http://localhost/StartingPhp/startingPhp/parametre.php">retour</a>