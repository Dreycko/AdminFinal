<?php
include ('dataLayer/gestor.php');


 class Buscar ()
 {
 	funtion public countries()

 	{ 
 		$gestor = new gestor();
 		$gestor->conectar();
 		$countries = $gestor->consultar("call countries()");
 		$gestor->cerrarConexion();
 		return $countries;






 	}







 }





?>