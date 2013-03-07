<?php
include("../dataLayer/gestor.php");


/**
* 
*/
class clientList
{
	
	function __construct() 
	{
		$gestor = new gestor();
	}
	
	function info()
	{
		$gestor = new gestor();
		$dato = $gestor->clientListConsultar();
		return $dato;
		//var_dump($dato);
		//exit();

	}


}
?>