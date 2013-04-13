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
		$sql ="update `entity` set";
		///var_dump($_POST);
		if ($_POST["dop"])
		{
			$sql .="`incorporation_date` = '".$_POST["dop"]."',";
		}
		if ($_POST["company_name"])
		{
			$sql .="`company_name` = '".$_POST["company_name"]."',";
		}
		if ($_POST["type"])
		{
			$sql .="`type_business` = '".$_POST["type"]."',";
		}
		if ($_POST["contact"])
		{
			$sql .="`contact` = '".$_POST["contact"]."',";
		}
		if ($_POST["package"])
		{
			$sql .="`package` = '".$_POST["package"]."',";
		}
		if ($_POST["hosting"])
		{
			$sql .="`hosting` = '".$_POST["hosting"]."',";
		}
		if ($_POST["domain"])
		{
			$sql .="`domain` = '".$_POST["domain"]."',";
		}
		
		$sql=substr($sql , 0,(strlen($sql)-1));

		$sql .= " where abbreviation_name = '".$_POST["code"]."'";

		$resp = $gestor->clientListEdit($sql);
		//var_dump($resp);
		//exit();
		header("Location: ../index.php?menu=clientList&page=".$_POST["btnseleted"]);
		//var_dump($_POST);

		//echo $sql;



		
	}




}
?>