<?php
session_start();
class gestor
{

	var $servidor = "localhost";
	var $user = "root";
	var $pass = "";
	var $db = "adminfinal";
	var $cn;

	function gestor()
	{
	}

	function conectar()
	{
		//Corregida ya que esta funcio es Opsoleta 
		//$this->cn = mysql_pconnet($this->servidor, $this->user, $this->pass );
			//echo $this->servidor." ".$this->user." ".$this->pass." ".$this->db;
		$this->cn = mysqli_connect($this->servidor, $this->user, $this->pass, $this->db);
		/*
		if ( !$this->cn )
		die("Fallo en la conexion a la base de datos: ".mysqli_error());
		if(!mysqli_select_db($this->cn, $this->db))
		die ( "No fue posible comunicarse con la base de datos $db: ".mysqli_error($this->cn));*/
	}

	function realizarOperacion($codigo)
	{
		//echo $codigo;
		try
		{
			//echo "entro en el try";
			$resultado = mysqli_query( $this->cn,$codigo) or die(mysqli_error($this->cn)) ;
			//echo "Ejecuto la consulta";
			//var_dump($resultado);
			//exit();
			return $resultado;
		//echo $resultado;

		}
		catch (Exception $e)
		{
			//echo "error";
			//var_dump($e);
			//exit();
			return $e;
		}
	}

	/**Realiza una consulta sobre la BD*/
	function consultar($codigo){
	//vector donde se almacenaran los resultados de la consulta; cada elemento sera un registro
		$datos = array();
		$resultado = mysqli_query( $this->cn, $codigo) or die(mysqli_error($this->cn));
		//echo "Termino la consulta";
		
		while ( $row = mysqli_fetch_object($resultado) )
		{
			array_push($datos, $row);
		}
		//var_dump($resultado);
		return $datos;
	}

	/**Cierra la conexion a la BD*/
	function cerrarConexion()
	{
		if($this->cn)
			mysql_close( $this->cn );
	}



	function agregar($Datos, $diretors,$contact)
	{	



		$consulta ="";
		$numRegistro =1;
		$confirm ="confirmacion";
		$ip = $this->getRealIpAddr();
		$ip_user =1;
		$previous_entity =1;
		$meg = array();
		$consulta = ("call sp_insert_cliente
			('".$ip_user."',
				'".$Datos['company_name']."',
				'".$Datos['incorporation_date']."',
				'".$Datos['jurisdiction']."',
				'".$Datos['type_business']."',
				'".$Datos['company_address']."',
				'".$Datos['email']."',
				'".$Datos['phone']."',
				'".$Datos['fax']."',
				'".$Datos['position_authorizations']."',
				'".$Datos['full_legal_name_position_authorizations']."',
				'".$Datos['email_position_authorizations']."',
				'".$Datos['phone_position_authorizations']."',
				'".$Datos['position_super_administrator']."',
				'".$Datos['name_super_administrator']."',
				'".$Datos['phone_super_administrator']."',
				'".$Datos['email_super_administrator']."',
				'".$previous_entity."',
				'".$Datos['creation_date']."',
				'".$ip."',
				'".$confirm."',
				'".$Datos['abbreviation_name']."',
				@id)

		");
		$meg["msg"] = $this->realizarOperacion($consulta);
		if ($meg["msg"] ==1) 
		{	
			$id= $this->consultar("select @id as id");
			$key = array_keys($diretors);
			if (count($diretors) != 0 && ( $diretors[$key[0]]["txtDirectors1"] != "" || $diretors[$key[0]]["txtLegals1"] != "") ) 
			{

				$consulta= "insert into `directors` (`name`,`legal`,`identity`) VALUES";
			 //var_dump(array_keys($diretors));
				;
				for ($i=0; $i < count($diretors) ; $i++) 
				{ 
					if ($i!= 0) 
					{
						$consulta  .=",";
					}
					if ($diretors[$key[$i]]["txtDirectors1"] != "" || $diretors[$key[$i]]["txtLegals1"] != "")
					{
						$consulta  .= "('".$diretors[$key[$i]]["txtDirectors".($i+1)]."','".$diretors[$key[$i]]["txtLegals".($i+1)]."',".$id[0]->id.")";
					}
				//var_dump($diretors[$key[$i]]);
				}
				$meg["msgDirectors"] = $this->realizarOperacion($consulta);
			}

			//exit();

			$keyC = (array_keys($contact));
			if (count($contact)!= 0 && ($contact[$keyC[0]]["txtNameContact1"] != "" || $contact[$keyC[0]]["txtPositionContact1"] != "" || $contact[$keyC[0]]["txtPhoneContact1"] != "" || $contact[$keyC[0]]["txtEmailContact1"] != "")) 
			{

				$consulta = "insert into `contact`(`identity`,`name`,`position`,`phone`,`email`) VALUES";

				for ($k=0; $k < count($contact) ; $k++) 
				{
					if ($k != 0)
					{
						$consulta .= ","; 	
					} 
					if ($contact[$keyC [$k]]["txtNameContact1"] != "" || $contact[$keyC[$k]]["txtPositionContact1"] != "" || $contact[$keyC[$k]]["txtPhoneContact1"] != "" || $contact[$keyC[$k]]["txtEmailContact1"] != "")
					{
						$consulta .= "('".$id[0]->id."','".$contact[$keyC[$k]]["txtNameContact".($k+1)]."','".$contact[$keyC[$k]]["txtPositionContact".($k+1)]."','".$contact[$keyC[$k]]["txtPhoneContact".($k+1)]."','".$contact[$keyC[$k]]["txtEmailContact".($k+1)]."')";

					}


				}
				$meg["msgContact"] = $this->realizarOperacion($consulta);
			//var_dump($consulta);
			}

		//var_dump($consulta);
		//exit();

			$meg["idClient"] = $id[0]->id;
		}
		return  $meg;


	}

	function login($u, $p)
	{
		$resultado = $this->consultar("call sp_select_user('".$u."','".$p."')");
		return $resultado;
	}


	function getRealIpAddr()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}else{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

	function lastId()
	{
		try
		{

			$id = mysqli_insert_id($this->cn);
		//var_dump($id);
		//exit();
			return $id;

		}
		catch (Exception $e)
		{
			echo "error";
			return $e;
		}

	}


	function buscarCliente($client)
	{

		$consulta = "select * from entity where abbreviation_name ='".$client."'";
		//var_dump($consulta);
		//exit();
		$this-> conectar();
		$entity = $this->consultar($consulta);
		$this-> cerrarConexion();
		//var_dump($entity);
		return $entity;
		//exit();

	}
	function buscarClienteModulos($client)
	{
		$consulta = "select * from clientmodules where idCliente='".$client."'";
		//var_dump($consulta);
		//exit();
		$this-> conectar();
		$entity = $this->consultar($consulta);
		$this-> cerrarConexion();
		return $entity;
	}

	function deleteCaching()
	{

		//definimos el directoriode los archivos	
		/*$pathTempalte = "../templates/";
		$dir = opendir($pathTempalte);
		while ($elemento = readdir($dir))
		{ 
			//echo $elemento." tamano de letras".strlen($elemento)."</br>";
			//echo $pathTempalte.$elemento_c;
			//echo substr($elemento_c, 0,14);
			if (substr($elemento, -14,14) =="addModule2.tpl")
			{
				$aBorrar = $pathTempalte.$elemento_c;

				//echo $elemento." tamano de letras".strlen($elemento)."</br>";
				

			}
			closedir($dir);
			var_dump(unlink($aBorrar));

		}*/
		
			//cache
		//echo "cache";
		$pathTempalte_c = "../templates_c/";
		//echo $pathTempalte_C ;
		$dir_c = opendir($pathTempalte_c);
		//var_dump($dir_c);
		while ($elemento_c = readdir($dir_c))
		{ 
			//echo $elemento_c." tamano de letras".strlen($elemento_c)."</br>";
			//echo substr($elemento_c, -18,18)."</br>" ;
			if (substr($elemento_c, -18,18) =="addModule2.tpl.php" )
			{	
				$file = $elemento_c;

				
			}	
		}

		var_dump($file);
		closedir($dir_c);

		return $file;
	}


 function insertModule($consulta)
 {
 		$this-> conectar();
		$resp = $this->consultar($consulta);
		$this-> cerrarConexion();
		return  $resp;

 }




}

?>