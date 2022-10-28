<?php

/**
 * 
 */
class conexion 
{
	private $conex; 
	private $cont;
	
	public function __construct()
	{
		if(!isset($this->conex)){
			$this->conex=mysqli_connect("127.0.0.1", "root", "panconmortadela") or die ("error de conexion");
						 mysqli_select_db($this->conex,"amisi") or die ("no se pudo acceder a la base de datos");
						}
	}

	public function consulta($sql){
		$result=mysqli_query($this->conex,$sql);
		if(!$result){
			throw new Exception("error en sentencia ".mysqli_error($this->conex));
			exit;
		}
		return $result;
	}
}

?>