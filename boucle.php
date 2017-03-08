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
$zeroadix=0;
while ( $zeroadix < 10) {
	echo $zeroadix;
	$zeroadix= $zeroadix+1;
}


echo "<br/>";

$var1=0;
$var2=rand ( 1 , 100 );
while ($var1 <=20){
	echo ("<br/>".($var1*$var2));
	$var1 ++;
}


echo "<br/>";

$var3=100;
// $var2=1;
while ($var3>10){
	echo ("<br/>".($var3*$var2));
	$var3 --;
}

echo "<br/>";
$incrementdemi=1;
while ($incrementdemi<=10){
	echo ("<br/>".($incrementdemi));
	$incrementdemi=$incrementdemi+($incrementdemi/2);
}

echo "<br/>";

for ($i=1; $i <=15 ; $i++) { 
	echo ("<br/>"."on y arrive presque");
	# code...
}

for ($k=20; $k >=0 ; $k--) { 
	echo ("<br/>"."c presk bon");
	# code...
}
for ($l=1; $l <=100 ; $l+=15) { 
	echo ("<br/>"."on tient le bon bout");
	# code...
}
?>

</body>
</html>