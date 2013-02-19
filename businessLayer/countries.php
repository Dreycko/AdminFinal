<?php

//cargamos las librerías de smarty
require('include.php');
//echo " existe include "; 
include ('dataLayer/gestor.php');
//echo " existe gestor "; 
/*
if (!file_exists('dataLayer/gestor.php')) 
	{ 
		echo "no existe"; 
	}
else
	{
		 echo "existe";
	}
	exit();*/
/*
$call = new Countrie();
$call->buscar();
*/
class Countrie
			{
				public function buscarCountrie()
			 {
							//echo "entro en la funcion buscar las ciudades";
							$gestor = new gestor();
							$gestor->conectar(); 
							//$Datos['coutries'] ="all";
							//var_dump($datos);
							$datos = $gestor->consultar("call sp_select_countries()");
							$gestor->cerrarConexion();
							return $datos;

			 }




			}


?>