<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucles</title>
	<link rel="stylesheet" href="style/css/style.css">
</head>
<body>
<h1>tableau</h1>
<div>
<?php
echo "ex 1 et 2 :<br/> ";
$mois = array("janvier", "fevrier", "mars", "avril",  "mai", "juin",  "juillet", "août", "septembre", "octobre", "novembre", "décembre");
echo $mois[2]."<br/>";
echo "ex 3 :<br/> ";
echo $mois[5]."<br/>";
$mois[3]="julien";
echo "ex 4 :<br/> ";
echo $mois[3]."<br/>";

echo "ex 5 :<br/> ";
$hautDeFrance=array(
    02 => "Aisne",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme"
);

var_dump($hautDeFrance);
echo "<br/> ";
echo "ex 6 :<br/> ";
echo $hautDeFrance[59]."<br/>";
echo "ex 7 :<br/> ";

?>
</div>
</body>
</html>