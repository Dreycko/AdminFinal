<?php

//cargamos las librerías de smarty
require('include.php');
//echo " existe include "; 
include ('dataLayer/gestor.php');
//echo " existe gestor "; 


class agregarpersona {
		 //echo "entro en la clase agregar personar"; 
		 public function agregar($Opcion,$Datos)
			 {
				 //echo " entro en la funcion agregar "; 
				 global $smarty, $TemplateAuxiliar;

		switch($Opcion)
			 {

			 case "agregar":
				 $gestor = new gestor();
				 $gestor->conectar();
				$Datos['company_name'] = sprintf("%s",$_POST["company_name"]);
				echo "( ".$Datos['company_name']." ) ";
				//echo $_POST["company_name"];
				 $gestor->agregar('persona',$Datos);
				 $gestor->cerrarConexion();
				 $smarty->assign('mensaje','Persona agregada correctamente');
				 $TemplateAuxiliar = 'mensaje.tpl';
			 	break;

			 	case "agregar1":
			 	$smarty->assign('mensaje','entro en el case');
			 	 $TemplateAuxiliar = 'mensaje.tpl';
			 	break;

			 default:
			 	break;
			 }


		 }

		 public function display()
			 {
			 global $smarty, $TemplateAuxiliar;

			 //Muestra por pantalla todos los diferentes templates
			 $smarty->display($TemplateAuxiliar);
			 }

}

//guarda el tipo de accion que se desea realizar
$Opcion = $_GET['opcion'];
//guarda los datos enviados en una nueva conexion
$Datos = $_POST;

$TemplateAuxiliar ='fromCliente.tpl'; 

$call = new agregarpersona();
$call->agregar($Opcion,$Datos);
$call->display();

?>