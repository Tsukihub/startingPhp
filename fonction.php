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
$nb2=1;
function True4($nb1, $nb2){
	$nb3=$nb1-$nb2;
	switch ($nb3) {
    case ($nb3>0):
        return "le premier est le plus grand";
        break;
    case 0:
        return "les deux nombres sont identique";
        break;
    case ($nb3<0):
        return " Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    }
}

echo True4($nb1, $nb2);

echo "<br/>";
function concat($string, $nb1){
	return ($string.$nb1);
}

echo concat($string, $nb1);

echo "</div>";






?>

</body>
</html>