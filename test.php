<?php
include 'fonction.php';
$string="test";
$string2='paul';

echo "<div>";
if (True() == true){
	echo "exo1 ok <br/>";

	if (True2($string)=="test"){
	echo "exo2 ok <br/>";

		if (True3($string, $string2)=="testpaul"){
			echo "exo3 ok <br/>";


			if (True4(1, 1)=="les deux nombres sont identique"){
				if (True4(1, 70)==" le deuxieme est + gd"){
					if (True4(70, 1)=="le premier est le plus grand"){
						echo "exo 4 ok <br/>";
						

						if (concat("jean", 45)=="jean45"){
							echo ("exo 5 ok <br/>");


							if (bonjour('n', 're', 'i')=="bonjour n re tu as i ans"){
							echo ("exo 6 ok <br/>");				

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