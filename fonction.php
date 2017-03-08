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

function True2($string){
	return $string;
}
echo True2($string);


echo "<br/>";

// $var1=0;
// $var2=rand ( 1 , 100 );
// while ($var1 <=20){
// 	echo ("<br/>".($var1*$var2));
// 	$var1 ++;
echo "</div>";
?>

</body>
</html>