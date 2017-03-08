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

?>