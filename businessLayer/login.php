<?php 
session_start();
//include("varios/gestor.php");
include ('../dataLayer/gestor.php');
//if(file_exists('../varios/gestor.php')){echo "existe";} else {echo"no existes";}

$TemplateAuxiliar = "mensaje.tpl";
$call = new Login();
$call ->verificar('edwin','edwin');
//$call ->display();

class  Login
{

	public function  verificar($user, $pass)
	{
		global $smarty;

		$gestor = new gestor();
		$gestor->conectar();
		$rol = $gestor->login(sprintf("%s",$_POST["user"]), sprintf("%s",$_POST["pass"]));
		//var_dump($rol);
		if (is_null($rol[0]))
		{
				//echo "Null";
				//var_dump($rol);
			$_SESSION["isLogin"] = false;
			$_SESSION["msgLogin"] = "Usuario no encontrado";
				//header("Location: ../index.php");
				//$smarty->assign("message","El usuario no rejistrado");
				// $smarty->display("login.tpl");
			header("Location: ../index.php");
			return false;


		}

		else
		{
				//echo "no es null ";
				//var_dump($rol);
				//exit();
			$_SESSION["user"] = $rol[0]->username;
			$_SESSION["rol"] = $rol[0]->rol;
			$_SESSION["user_status"] = $rol[0]->user_status;
			$_SESSION["isLogin"] = true;
			$_SESSION["userId"] = $rol[0]->id;
				//echo "se crearon las seciones: ".$_SESSION["user"].$_SESSION["rol"].$_SESSION["user_status"]."->".$_SESSION["isLogin"];
			header("Location: ../index.php");
			

				//$smarty->assign("message","El usuario no rejistrado");
				//$smarty->display("login.tpl");
			return true;
		}
		//var_dump($rol);
		$gestor->cerrarConexion();
		 //$smarty->assign('mensaje','Usuario encontrado');
	 	 //$TemplateAuxiliar = 'mensaje.tpl';

		//$gestor->



	}


}




?>