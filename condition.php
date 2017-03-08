<?php
$age=99;
$genre='homme';
if ($age>=18){
	
	if ($genre=='homme'){
	echo ('vous êtes un homme majeur');
}
	if ($genre=='femme'){
	echo ('vous êtes une femme majeur');
}
	 
}else{
	if ($genre=='homme'){
	echo ('vous êtes un homme mineur');
}
	if ($genre=='femme'){
	echo ('vous êtes une femme mineur');
}
	
}

echo "<br/>";
$iseasy=false;
if ($iseasy){
	echo ('facile'); 
}else{
	echo ('c difficile');
}
$magnitude=1;
switch ($magnitude) {
    case 1:
        echo "Micro-séisme impossible à ressentir.";
        break;
    case 2:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        break;
    case 3:
        echo " Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 4:
        echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats";
        break;
    case 5:
        echo " Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        break;
    case 6:
        echo " Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
         break;
    case 7:
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 8:
        echo " Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 9:
        echo " Séisme capable de tout détruire sur une très vaste zone.";
        break;
}
 
echo "<br/>";

$maVariable="homme";
	if ($maVariable!="homme"){
 echo "C'est une développeuse !!!";
}else{
	echo "C'est un développeur !!!";

}

	if ($maVariable== false){
 echo'c\'est ok !!';
}else{
	echo 'c\'est pas bon !!!';

}

	if ($monAge >= 18){
 echo'Tu es majeur';
}else{
	echo 'Tu n\'es pas majeur';

}

	if ($maVariable){
 echo "c'est ok !!";
}else{
	echo "c'est pas bon !!!";

}
