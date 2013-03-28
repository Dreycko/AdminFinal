<?php
include("../dataLayer/gestor.php");

$obj = new clientList;

switch ($_GET["op"])
{
	case 'save':
	$obj->save();
	break;
	
	default:
		# code...
	break;
}


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

	function save()
	{
		$gestor = new gestor();
		
		var_dump($_POST);

		//$dato = $gestor->clientListConsultar();
		//return $dato;
	}




}
?>