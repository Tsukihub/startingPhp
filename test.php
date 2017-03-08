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


			// if (){
			// 	echo "exo4 ok <br/>";
			// }else{
			// 	echo ("exo 4 failed <br/>");
			// }


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