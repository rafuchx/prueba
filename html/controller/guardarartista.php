<?php

//esto es un comentario

/**** 
esto es un comentario 
largo

*/
require("../libreria/conexion.php");

$db = new conexion();


$nombre=$_GET['artista'];

if(!empty($nombre)){
	//echo insert into artistas (artista) values ('.$nombre.')';
	$db->consulta("insert into artistas (artista) values ('".$nombre."')");
	}

$artistas=$db->consulta("select * from artistas");
foreach($artistas as $a){
	echo $a['id']." ".$a['artista'].'<br>';
}


?>