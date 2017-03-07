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


?>
