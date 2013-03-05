<?php 
require('../include.php');

/**
* 
*/
class Message
{
	
	function cliente($entity, $page, $msg,$entityabre)
	{

		if ($msg["msg"] == 1) 
		{
			$_SESSION["msg"] = $msg["msg"];
			$_SESSION["msgIdClient"] = $msg["idClient"];
			$_SESSION["msgEntity"] = $entity;
			$_SESSION["msgPage"] =  $page;
			$_SESSION["entityabre"] =  $entityabre;
			header("Location: ../index.php?menu=message");
		}
		else  
		{
			header("Location: ../index.php?menu=message");
		}
	}

	function addModule($entity, $page, $msg)
	{

		
		
		$_SESSION["msg"] = $msg["msg"];
		$_SESSION["msgIdClient"] = $msg["idClient"];
		$_SESSION["msgEntity"] = $entity;
		$_SESSION["msgPage"] =  $page;
		header("Location: ../index.php?menu=message");
		
	}

	function addClientSale($msg)
	{
		$_SESSION["msg"] = $msg;
		header("Location: ../index.php?menu=message");


	}


}



?>