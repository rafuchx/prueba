<?php

//esto es un comentario

/**** 
esto es un comentario 
largo

*/
require("../libreria/conexion.php");

$db = new conexion();


$nombre=$_GET['buscar'];

$names=array();

if(!empty($nombre)){
	//echo insert into artistas (artista) values ('.$nombre.')';
	
$artistas=$db->consulta("select * from artistas where artista like '%".$nombre."%'");
foreach($artistas as $a){
	$names[]=$a['artista'];
}
}
echo json_encode($names);


?>