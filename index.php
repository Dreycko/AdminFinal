<?php
session_start();
require('include.php');
include( 'businessLayer/countries.php');
include ('countries.php');
include ('htmlbody/menu.php');
include ('htmlbody/footer.php');
include ('businessLayer/libraries.php');
class index 
{


  public function display($TemplateAuxiliar)
  {

   global $smarty;

                  // $smarty->assign('countrie',$datos);
   $smarty->display($TemplateAuxiliar);
                  //$smarty->display('login.tpl');
                  //$smarty ->display('home.tpl');
 }

 public function menu()
 {

  global $smarty;                  
                  //$menu = array( 'New','Modify','Add Module');
  $menu = array( 
    "New"  => array ( "title" => "New","url" => "index.php"),
    "Modify"  => array ( "title" => "Modify","url" => "index.php"),
    "Module"  => array ( "title" => "Add Module","url" => "index.php"),
    );
                 // var_dump($menu);
  $smarty->assign('menu',$menu);
}



}





echo "<noscript> No tienes JS</noscript>";
$call = new index();
global $smarty;
    //echo $_GET['menu'];
    //var_dump($_POST);

if ($_SESSION['isLogin'])
{





  $Menu = new Menu();
  $menu = $Menu->mostrar($_SESSION['user']);
  $smarty->assign('menu',$menu);

  $Libraries = new Libraries();
  $libraries = $Libraries->cargar();
  $smarty->assign('libraries',$libraries);

  $Footer = new Footer( );
  $footer = $Footer->mostrar();
  $smarty->assign('footer',$footer);



  $Countrie = new Countrie();
  $countries = $Countrie->buscarCountrie();
  //Se declara una variable tipo array para manejarlo en el html de una mejor manera
  $onlyContries = array();
  for ($i=0; $i < count($countries); $i++) 
  { 
   $onlyContries[$i][0] = $countries[$i]->idcountries;
   $onlyContries[$i][1] = $countries[$i]->countries;
 }

 $smarty->assign("countCountries",count($countries));
 $smarty->assign("countries",$onlyContries);

 switch ($_GET['menu'])
 {

  case 'newClient':
  unset($_SESSION["msgEntity"]);
  $call->display('formCliente.tpl');
  break;

  case 'modifyClient':

  $smarty->assign('titleMenu','Modify Client');
  $call->display('modifyCliente.tpl');
   break;

  case 'addModule':
      $smarty->assign('titleMenu','Add Module');

          if ($_GET["op"] =="r") 
          {
            $_SESSION["msgIdClient"] == "r";
          }

          if (!is_null($_SESSION["msgIdClient"]) &&  $_SESSION["msgIdClient"] != "r")
          {
                //echo "Load";
            $smarty->assign('addModuleOption','l');
            $smarty->assign('entity','');
            unset($_SESSION["msgIdClient"]);
            $call->display('addModule.tpl');

          }
          else if (!is_null($_SESSION["msgIdClient"]) &&  $_SESSION["msgIdClient"] == "r") 
          {
            $entity = array();
            $entity  = $_SESSION["entity"];
            $smarty->assign('addModuleOption','r');
            $smarty->assign('company_name',$entity[0]->company_name);
            $smarty->assign('email',$entity[0]->email);
            $smarty->assign('phone',$entity[0]->phone);
            unset($_SESSION["addModuleOption"]);
            unset($_SESSION["entity"]);
            unset($_SESSION["msgIdClient"]);
            $call->display('addModule.tpl');
          } 
          else
          {
              //echo "Else";
              //var_dump($_SESSION);
            $smarty->assign('addModuleOption','s');
            unset($_SESSION["msgIdClient"]);
            $call->display('addModule.tpl');

          }
       
          break;

   case 'message':
          //echo "entro en el case de index para message";
          //var_dump($_SESSION);
          //exit();
          $smarty->assign('titleMenu','message');
          $smarty->assign('msg',$_SESSION["msg"]);
          $smarty->assign('page',$_SESSION["msgPage"]);
          $smarty->assign('msgEntity',$_SESSION["msgEntity"]);
          $smarty->assign('msgType',$_SESSION["msgType"]);
          $smarty->assign('msgIdClient',$_SESSION["msgIdClient"]);

          $call->display('message.tpl');
  break;

  default:
          $smarty->assign('titleMenu','New Client');
          $call->display('formCliente.tpl');
                     //echo "defaul";
   break;
        }



      }

      else

      {
        $smarty->assign("messagelogin", sprintf("%s",$_SESSION["msgLogin"]));
        $call->display('login.tpl');


      }





      ?>