<?php

//cargamos las librerías de smarty
require('../include.php');
//echo " existe include "; 
include ('../dataLayer/gestor.php');


//echo file_exists('../include.php')." include";
//echo file_exists('../dataLayer/gestor.php')." gestor";
//exit();

		//echo "entro en el controlador de formcliente";
$call = new Cliente();
$call->agregar();
		//$call->display();
class Cliente{
	public function agregar()
	{
				// echo " entro en la funcion agregar "; 
		global $smarty;
		$gestor = new gestor();
		$gestor->conectar(); 
		$cont;
		$indices = array_keys($_POST);
		//var_dump($_POST);
		$diretors = array();
		$contact = array();

		foreach ($indices as $key => $value)
		{
			
			//se almacena los datos de los DIrectores 
			$dato = substr($indices[$key], 0,12);
			if ($dato=="txtDirectors" /*|| substr($indices[$key], 0,9)=="txtLegals"*/ )
			{
				$diretors[$key]= array();
				$diretors[$key][$indices[$key]] =$_POST[$indices[$key]];

				$diretors[$key]["txtLegals".substr($indices[$key],12)] =$_POST["txtLegals".substr($indices[$key],12)];
			}

			//se almacena los datos de los contactos
			$dato = substr($indices[$key], 0,14);
			if ($dato=="txtNameContact" /*|| substr($indices[$key], 0,18)=="txtPositionContact" ||substr($indices[$key], 0,15)=="txtPhoneContact" ||substr($indices[$key], 0,15)=="txtEmailContact"*/)
			{
				$contact[$key]= array();
				$contact[$key][$indices[$key]] =$_POST[$indices[$key]];

				$contact[$key]["txtPositionContact".substr($indices[$key],14)] =$_POST["txtPositionContact".substr($indices[$key],14)];
				$contact[$key]["txtPhoneContact".substr($indices[$key],14)] =$_POST["txtPhoneContact".substr($indices[$key],14)];
				$contact[$key]["txtEmailContact".substr($indices[$key],14)] =$_POST["txtEmailContact".substr($indices[$key],14)];
			}



		}
		//var_dump($diretors);
		//var_dump($contact);
				//
		//exit();

		$Datos['company_name'] = sprintf("%s",$_POST["company_name"]);
		$entity = sprintf("%s",$_POST["company_name"]);
		$date = date_create(sprintf("%s",$_POST["StartDateYear"])."-".sprintf("%s",$_POST["StartDateMonth"])."-".sprintf("%s",$_POST["StartDateDay"]));
		$Datos['incorporation_date'] = date_format($date ,"Y-m-d H:i:s");
		$Datos['jurisdiction'] = sprintf("%s",$_POST["jurisdiction"]);
		$Datos['type_business'] = sprintf("%s",$_POST["type_business"]);
		$Datos['company_address'] = sprintf("%s",$_POST["company_address"]);
		$Datos['email'] = sprintf("%s",$_POST["email"]);
		$Datos['phone'] = sprintf("%s",$_POST["phone"]);
		$Datos['fax'] = sprintf("%s",$_POST["fax"]);

		
		$Datos['position_authorizations'] = sprintf("%s",$_POST["position_authorizations"]);
		$Datos['full_legal_name_position_authorizations'] = sprintf("%s",$_POST["full_legal_name_position_authorizations"]);
		$Datos['email_position_authorizations'] = sprintf("%s",$_POST["email_position_authorizations"]);
		$Datos['phone_position_authorizations'] = sprintf("%s",$_POST["phone_position_authorizations"]);
		
		$Datos['position_super_administrator'] = sprintf("%s",$_POST["position_super_administrator"]);
		$Datos['name_super_administrator'] = sprintf("%s",$_POST["name_super_administrator"]);
		$Datos['phone_super_administrator'] = sprintf("%s",$_POST["phone_super_administrator"]);
		$Datos['email_super_administrator'] = sprintf("%s",$_POST["email_super_administrator"]);
		$Datos['abbreviation_name'] = sprintf("%s",$_POST["abbreviation_name"]);
		$entityabre = sprintf("%s",$_POST["abbreviation_name"]);
		//se gurada la informacion de el cliente
		$msg = $gestor->agregar($Datos, $diretors,$contact);

		include ('message.php');

		$Message = new Message();
		$Message->cliente($entity,"newClient",$msg,$entityabre);

	}





}

?>