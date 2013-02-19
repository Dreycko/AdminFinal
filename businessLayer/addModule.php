<?php
session_start();

require('../include.php');
include ('../businessLayer/libraries.php');
include("../dataLayer/gestor.php");

global $smarty;

//$obj = new gestor();
//echo $_GET["op"];

if ($_GET["op"] == "l") 
{

	//var_dump($_POST);
	//exit();
	//echo "Opcion l";
	//$smarty->display("addModule.tpl");
	//$smarty->assign('cliente',"l");
	$gestor	 = new gestor();
	if ($_POST["textBuscar"]!= "")
	 {
		$entity=$gestor->buscarCliente($_POST["textBuscar"]);
	}
	elseif ($_GET["textBuscar"]!= "")
	 {
		$entity=$gestor->buscarCliente($_GET["textBuscar"]);
	}
	
	//var_dump($entity);
	//exit();

	//if (count($entity)==1)
	//{
		$_SESSION["msgIdClient"] = "r";
		$_SESSION["entity"] = $entity;
		header("Location: ../index.php?menu=addModule");

	//}
	/*else
	{
		include ('message.php');
		$Message = new Message();
		$Message->addModule($entity,"addModule","searchModule");

	}*/
	


} 
else if($_GET["op"] == "s")
{

	/*//var_dump($_GET["op"] );
	
	$gestor	 = new gestor();
	$entity=$gestor->buscarCliente();
	//var_dump($entity);
	global $smarty;
	$smarty->assign('entity',$entity);
	$smarty->display("addModule.tpl");
	//exit();
*/
}
else
{

}


?>
