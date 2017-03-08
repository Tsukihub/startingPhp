<?php

// if(isset($_GET['nom'])) {
// 	    if(isset($_GET['prenom'])) {
// 		    $test = $_GET['nom'];
// 		    $test2 = $_GET['prenom'];
// 		    echo "GET bienvenue ".$test." ".$test2."<br/>";
// 		}else{
//     echo "GET erreur prenom nn renseigné";
// }

// }else{
//     echo "GET erreur et ou prenom non non reseigné";
// }


if(isset($_POST['nom']) AND isset($_POST['prenom'])) {
	    
		    $testA = $_POST['nom'];
		    $testB = $_POST['prenom'];
		    echo "POST bienvenue ".$testA." ".$testB."<br/>";
	

}

?>

<a href="http://localhost/StartingPhp/startingPhp/formulaire.php">retour</a>