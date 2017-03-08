<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucles</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
<h1>Boucle la</h1>

<?php
echo "<div>";
function True(){
	return true;
}
echo True();

echo "<br/>";

$string="jean";
$string2="claude";

function True2($string){
	return $string;
}
echo True2($string);


echo "<br/>";


function True3($string, $string2){
	return ($string.$string2);
}
echo True3($string, $string2);


echo "<br/>";
$nb1=1;
$nb2=2;
function True4($nb1, $nb2){
	$nb3=$nb1-$nb2;
	echo "$nb3";

if ($nb3 == 0) {
    return "les deux nombres sont identique";
} elseif ($nb3>0){
        return "le premier est le plus grand";
} elseif ($nb3<0){
        return " le deuxieme est + gd";
}


}

echo True4($nb1, $nb2);

echo "<br/>";
function concat($string, $nb1){
	return ($string.$nb1);
}

echo concat($string, $nb1);


$nom="jean";
$prenom="jean";
$age="34";
echo "<br/>";
function bonjour($nom, $prenom, $age){
	return ("bonjour ".$nom." ".$prenom." tu as ".$age." ans");
}

echo bonjour($nom, $prenom, $age);

echo "</div>";






?>

</body>
</html>