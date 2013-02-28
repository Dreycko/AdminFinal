<?php

//var_dump($_POST);
//echo "newCleintSales";
if ($_POST["btnKyc"]=="Save")
{
	echo "KYC";	



}
if($_POST["btnSales"]=="Save")
{
	//echo "SAVE";
	$doc = new DOMDocument();
	$doc= loadHTMLFile("../templates/newClientSales.tpl");
	if (file_exists("../templates/newClientSales.tpl"))
	 {

		echo "exist";
	}
	//var_dump($doc);
	//echo $doc->saveHTML();
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