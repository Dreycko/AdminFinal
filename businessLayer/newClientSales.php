<?php
include( '../dataLayer/gestor.php');
//echo "newCleintSales";
if ($_POST["btnKyc"]=="Save")
{
	echo "KYC";	



}
if($_POST["btnSales"]=="Save")
{
	// se crea las variables de array para la informacion 

	$arraySave = array();
	
	$date = date_create(sprintf("%s",$_POST["StartDateYear"])."-".sprintf("%s",$_POST["StartDateMonth"])."-".sprintf("%s",$_POST["StartDateDay"]));
	$arraySave['incorporation_date'] = date_format($date ,"Y-m-d H:i:s");
	$arraySave["code"] = $_POST["code"];
	$arraySave["company_name"] = $_POST["company_name"];
	$arraySave["contact_sale"] = $_POST["contact_sale"];
	$arraySave["package"] = $_POST["package"];
	$arraySave["hosting"] = $_POST["hosting"];
	$arraySave["domain"] = $_POST["domain"];
	$gestor = new gestor();
	$resp = $gestor->newClientSaves($arraySave);
	if ($resp) 
	{
		
		$dom = new DomDocument();
		$dom->loadHTMLFile("../templates/newClientSales.tpl");
		$elements = $dom->getElementsByTagName('*');
		unlink("../templates/newClientSales2.tpl");
		//$file = $gestor->deleteCaching("newClientSales2");
		//var_dump($file);
		//exit();
		unlink("../templates_c/".$gestor->deleteCaching("newClientSales2"));
		if (!is_null($elements)) 
			{ echo "if";
		foreach ($elements as $element)
		{
			//echo $element->getAttribute("name")."</br>";
			switch ($element->getAttribute("name")) {
				case 'code':
				$element->setAttribute("value",$arraySave["code"]);
				break;
				case 'company_name':
				$element->setAttribute("value",$arraySave["company_name"]);
				break;
				case 'contact_sale':
				$element->setAttribute("value",$arraySave["contact_sale"]);
				break;
				case 'package':
					# code...
				break;
				case 'hosting':
				$element->setAttribute("value",$arraySave["hosting"]);
				break;
				case 'domain':
				$element->setAttribute("value",$arraySave["domain"]);
				break;

				default:
					# code...
				break;
			}
			
		}

	}

	$elements = $dom->getElementsByTagName('body');
	if (!is_null($elements))
	{
		foreach ($elements as $element) {
			$element->setAttribute("onload","habilitar('Kyc');");

		}
	}


	$dom->saveHTMLFile("../templates/newClientSales2.tpl");



	include("message.php");
	$_SESSION["msgEntity"]=$arraySave["company_name"];
	$msg = new Message();
	$msg->addClientSale("newClientSales");


}



exit();
	/*var_dump($dir_c);
		//var_dump($dir_c);
	while ($elemento_c = readdir($dir_c))
	{ 
			//echo $elemento_c." tamano de letras".strlen($elemento_c)."</br>";
			//echo substr($elemento_c, -18,18)."</br>" ;
		if (substr($elemento_c, -22,22) =="newClientSales.tpl.php" )
		{	
			$file = $elemento_c;
			echo $file."</br>";


		}	
		echo $elemento_c."</br>";

		
	}*/

	//var_dump($file);
	//closedir($dir_c);

	//return $file;
}

if($_POST["btnProInfo"]=="Save")
{
	echo "btnProInfo";
}
if($_POST["btnService"]=="Save")
{
	echo "btnService";
}
if($_POST["btnHosting"]=="Save")
{
	echo "btnHosting";
}
if($_POST["btnWebsite"]=="Save")
{
	echo "btnWebsite";
}


?>