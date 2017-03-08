<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>boucles</title>
</head>
<body>
	

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

for ($i=1; $i <=15 ; $i++) { 
	echo ("<br/>"."on y arrive presque");
	# code...
}
?>

</body>
</html>