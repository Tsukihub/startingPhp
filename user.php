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
	if($_POST['nom']!=="" AND $_POST['prenom']!==""){
	    
		    $testA = $_POST['nom'];
		    $testB = $_POST['prenom'];
		    echo "POST bienvenue ".$testA." ".$testB."<br/>";
	}else{
	echo " <form action='user.php' method='post'>
      <fieldset>
        <legend>Post</legend>
          <p>
             <label for='prenom'>Prenom</label> 
            <input type='text' name='prenom' id='prenom'>
          </p>
          <p>
            <label for='nom'>Nom :</label> 
            <input type='text' name='nom' id='nom' /> 
            <input type='submit' name='submit' value='Envoyer' />
          </p>
          <SELECT name='civilité' size='1'>
			<OPTION>mr
			<OPTION>mme
		  </SELECT>
      </fieldset>
    </form>";
}
	

}else{
	echo " <form action='user.php' method='post'>
      <fieldset>
        <legend>post</legend>
          <p>
             <label for='prenom'>Prenom</label> 
            <input type='text' name='prenom' id='prenom'>
          </p>
          <p>
            <label for='nom'>Nom :</label> 
            <input type='text' name='nom' id='nom' /> 
            <input type='submit' name='submit' value='Envoyer' />
          </p>
          <SELECT name='civilité' size='1'>
			<OPTION>mr
			<OPTION>mme
		  </SELECT>
      </fieldset>
    </form>";
}

?>

<a href="http://localhost/StartingPhp/startingPhp/formulaire.php">retour</a>