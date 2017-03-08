
<?php
include 'fonction.php';

echo "<div>";


if (True() == true){
	echo "exo1 ok <br/>";

	if (True2("test")=="test"){
	echo "exo2 ok <br/>";

		if (True3("test", "paul")=="testpaul"){
			echo "exo3 ok <br/>";


			if (True4(1, 1)=="les deux nombres sont identique"){
				if (True4(1, 70)==" le deuxieme est + gd"){
					if (True4(70, 1)=="le premier est le plus grand"){
						echo "exo 4 ok <br/>";
						

						if (concat("jean", 45)=="jean45"){
							echo ("exo 5 ok <br/>");


							if (bonjour('n', 're', 'i')=="bonjour n re tu as i ans"){
							echo ("exo 6 ok <br/>");



								if (agesexe(67, "femme")=='vous êtes un femme majeur'){
									if 	(agesexe(7, "femme")=='vous êtes une femme mineur')	{
										if (agesexe(7, "homme")=='vous êtes un homme mineur'){
											if (agesexe(18, "homme")=='vous êtes un homme majeur'){
												if (agesexe(18, "hom")=="genre non valide"){
													echo ("exo 7 ok <br/>");

												}else{
													echo ("exo 7 failed genre nn valide<br/>");
											}
											}else{
												echo ("exo 7 failed homme maj<br/>");
										}
										}else{
											echo ("exo 7 failed homme min <br/>");
									}
									}else{
										echo ("exo 7 failed femme min <br/>");
								}		

								}else{
								echo ("exo 7 failed femme maj <br/>");
								}



							}else{
							echo ("exo 6 failed <br/>");
							}




						}else{
						echo ("exo 5 failed <br/>");
						}







					}else{
				echo ("exo 4 failed prem + gd <br/>");
				}

				}else{
				echo ("exo 4 failed 2 + gd <br/>");
			}
			}else{
				echo ("exo 4 failed 2 id <br/>");
			}


		}else{
			echo ("exo 3 failed <br/>");
		}


	}else{
	echo ("exo 2 failed <br/>");
	}

}else{
	echo ("exo 1 failed <br/>");
}


echo "</div>";
?>