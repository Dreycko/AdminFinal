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

   $smarty->display($TemplateAuxiliar);

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
//$smarty->clear_all_cache();
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

  case 'clientList':
  include("/businessLayer/clientList.php");
  $clientList = new clientList();
  $dato=$clientList->info();
  $conut = count($dato);
  //var_dump( $dato);
  //exit();
  $datoClient = array();
  for ($i=0; $i < count($dato); $i++) 
  { 

   $datoClient[$i][0] = $dato[$i]->id_entity;
   $datoClient[$i][1] = $dato[$i]->company_name;
   $datoClient[$i][2] = $dato[$i]->creation_date;
   $datoClient[$i][3] = $dato[$i]->abbreviation_name;
   $datoClient[$i][4] = $dato[$i]->contact;
   $datoClient[$i][5] = $dato[$i]->package;
   $datoClient[$i][6] = $dato[$i]->hosting;
   $datoClient[$i][7] = $dato[$i]->domain;
 }
 $smarty->assign('dato',$datoClient);
 $smarty->assign('count',$conut);
 unset($_SESSION["msgEntity"]);
 $call->display('clientList.tpl');
 break;
 case 'newClientSales':
 unset($_SESSION["msgEntity"]);
 $call->display('newClientSales.tpl');

 break;
 case 'newClientSales2':
 unset($_SESSION["msgEntity"]);
 $call->display('newClientSales2.tpl');
 break;


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
  $_SESSION["msgIdClient"] = "r";
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
  $_SESSION["id_entity"] = $entity[0]->id_entity;
  unset($_SESSION["addModuleOption"]);
  unset($_SESSION["entity"]);
  unset($_SESSION["msgIdClient"]);
    //$smarty->clear_cache('addModule2.tpl');//, 'CACHEID');
  $call->display('addModule2.tpl');
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
$call->display('newClientSales.tpl');
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