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

	reLoadPage();

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


function reLoadPage()
{

	$dom = new DomDocument();
	//$dom->loadHTMLFile("../templates/addModule.tpl");
	$dom->loadHTMLFile("../templates/addModule.tpl");
	//var_dump($dom);
	//echo $dom;
	//exit();
	// example 1:
	$elements = $dom->getElementsByTagName('*');
	// example 2:
	//$elements = $dom->getElementsByTagName('html');
	// example 3:
	//$body = $dom->getElementsByTagName('body');
	/*foreach ($body as $body1)
	{

		$bodyNodes = $bodyElement->childNodes;
		echo "Node---";
		foreach ($bodyNodes as $bodyNode)
		{
			echo "<li>Node child Name ".$bodyNode->nodeName;
		}
	}
*/
	//$body->setAttribute("onload","load('{$addModuleOption}','{$company_name}','{$email}','{$phone}");
	// example 4:
	//$elements = $dom->getElementsByTagName('table');
	// example 5:
	//$elements = $dom->getElementsByTagName('input');

	//var_dump($elements);
	if (!is_null($elements)) 
	{
		foreach ($elements as $element)
		{
			echo $element->getAttribute("name")."</br>"; //Node name:".$element->nodeName.": Node value->".$element->getAttribute("type");


			if ($element->getAttribute("type")=="checkbox")
			{
				$element->setAttribute("checked","true");
			}
			if ($element->getAttribute("type")=="checkbox")
			{
				$element->setAttribute("checked","true");
			}
			//$element->setAttribute("checked","true");

			/*$nodes = $element->childNodes;
			foreach ($nodes as $node)
			{
				echo "<li>Node child Name ".$node->nodeName." , "."node value".$node->nodeValue."</li>"."\n";
			}*/
		}
	}

	
	//var_dump($body->nodeName);
	exit();
	$dom->saveHTMLFile("../templates/addModule2.tpl");
	//echo 'Escrito: ' . $dom->saveHTMLFile("../templates/addModule2.tpl") . ' bytes'; // Escrito: 129 bytes
	//exit();
	//echo "Copiado";
//exit();



}


?>
