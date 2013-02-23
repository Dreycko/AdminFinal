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
	$_SESSION["addModuleOption"] = "r";
	$_SESSION["msgIdClient"] = "r";
	$_SESSION["entity"] = $entity;

	//var_dump($entity);
	//exit();

	$modules = $gestor->buscarClienteModulos($entity[0]->id_entity);
	//var_dump($modules);
	//array_search("34", $modules);
	//exit();
	//var_dump(file_exists("../templates/addModule.tpl"));
	var_dump(unlink("../templates/addModule2.tpl"));
	//$gestor->deleteCaching();
	reLoadPage($modules);
	//echo $modules[0]->idmodule;
	exit();
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


function reLoadPage($module)
{
	$dom = new DomDocument();
	$dom->loadHTMLFile("../templates/addModule.tpl");
	$elements = $dom->getElementsByTagName('*');
	unlink("../templates/addModule2.tpl");



	if (!is_null($elements)) 
	{
		foreach ($elements as $element)
		{
			
			for ($l=0; $l < count($module) ; $l++)
			{ 
				if ($element->getAttribute("id") == $module[$l]->idmodule)
						//if ($element->getAttribute("type")=="checkbox")
				{
						//echo $element->getAttribute("id")."</br>";
					$element->setAttribute("checked","true");
				}
			}
			
			
			
		}
		//exit();
	}

	$elements = $dom->getElementsByTagName('body');
	if (!is_null($elements))
	{
		foreach ($elements as $element) {
			$element->setAttribute("onload","load('{\$addModuleOption}','{\$company_name}','{\$email}','{\$phone}');");

		}
	}

	$dom->saveHTMLFile("../templates/addModule2.tpl");

}


?>
