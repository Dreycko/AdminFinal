<?php /* Smarty version Smarty-3.1.12, created on 2013-02-20 16:12:23
         compiled from "templates\formCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184450e85bd9920072-10174052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '031248fddc2a7704c2b871d38b18293c4529cb48' => 
    array (
      0 => 'templates\\formCliente.tpl',
      1 => 1361377591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184450e85bd9920072-10174052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e85bd9943874_19274009',
  'variables' => 
  array (
    'libraries' => 0,
    'mensaje' => 0,
    'menu' => 0,
    'time' => 0,
    'countCountries' => 0,
    'foo' => 0,
    'countries' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e85bd9943874_19274009')) {function content_50e85bd9943874_19274009($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'C:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\AdminFinal\\smarty\\plugins\\function.html_select_date.php';
?><html>
<head>
	<title></title>
  <?php echo $_smarty_tpl->tpl_vars['libraries']->value;?>

  <script>
  $(function() {

    /*
    var availableTags;
    for (var i = $countrie.length - 1; i >= 0; i--) {
      availableTags = availableTags + countrie[i];
    };
//var availableTags = <?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

*/
/*
var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    */
    
    $( "#accordion" ).accordion();
    

    
    var availableTags = [
    "ActionScript",
    "AppleScript"
    ];

    $( "#accordion3" ).accordion();
    

    
    var availableTags = [
    "ActionScript",
    "AppleScript"
    ];

    $( "#accordion2" ).accordion();
    

    
    var availableTags = [
    "ActionScript",
    "AppleScript"
    ];



    $( "#autocomplete" ).autocomplete({
      source: availableTags
    });
    

    
    $( "#button" ).button();
    $( "#radioset" ).buttonset();
    

    
    $( "#tabs" ).tabs();
    

    
    $( "#dialog" ).dialog({
      autoOpen: false,
      width: 400,
      buttons: [
      {
        text: "Ok",
        click: function() {
          $( this ).dialog( "close" );
        }
      },
      {
        text: "Cancel",
        click: function() {
          $( this ).dialog( "close" );
        }
      }
      ]
    });

    // Link to open the dialog
    $( "#dialog-link" ).click(function( event ) {
      $( "#dialog" ).dialog( "open" );
      event.preventDefault();
    });
    

    
    $( "#datepicker" ).datepicker({
      inline: true
    });
    

    
    $( "#slider" ).slider({
      range: true,
      values: [ 17, 67 ]
    });
    

    
    $( "#progressbar" ).progressbar({
      value: 20
    });
    

    // Hover states on the static widgets
    $( "#dialog-link, #icons li" ).hover(
      function() {
        $( this ).addClass( "ui-state-hover" );
      },
      function() {
        $( this ).removeClass( "ui-state-hover" );
      }
      );
  });
</script>
<style>
body{
  font: 62.5% "Trebuchet MS", sans-serif;
  margin: 50px;
}
.demoHeaders {
  margin-top: 2em;
}
#dialog-link {
  padding: .4em 1em .4em 20px;
  text-decoration: none;
  position: relative;
}
#dialog-link span.ui-icon {
  margin: 0 5px 0 0;
  position: absolute;
  left: .2em;
  top: 50%;
  margin-top: -8px;
}
#icons {
  margin: 0;
  padding: 0;
}
#icons li {
  margin: 2px;
  position: relative;
  padding: 4px 0;
  cursor: pointer;
  float: left;
  list-style: none;
}
#icons span.ui-icon {
  float: left;
  margin: 0 4px;
}
</style>

</head>


<body>
  <div class="container_12">

    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


    <form action="businessLayer/fromcliente.php" id="agregar" method="post" onsubmit="return validarCampos(agregar);">
      <ul id="icons" class="ui-widget ui-helper-clearfix">

      </ul>
      <!-- Accordion -->
      <h2 class="demoHeaders">Required Information</h2>


      <div id="accordion">
       <h3>User Information</h3>
       <div>
         <table class="table_outside">

          <tr> 
            <td >Company name*:</td>
            <td><input type="text" name="required" id="company_name"/></td>
          </tr>
           <tr> 
            <td >Abbreviation name*:</td>
            <td><input type="text" name="required" id="abbreviation_name"/></td>
          </tr>
          <tr> 
            <td>Incorporation date*: 
            </td>
            
            <td>
             
             <?php echo smarty_function_html_select_date(array('prefix'=>'StartDate','time'=>$_smarty_tpl->tpl_vars['time']->value,'start_year'=>'-50','end_year'=>'+1','display_days'=>true),$_smarty_tpl);?>

           </td>
         </tr>
         <tr> 
          <!--<td>Registration number*:</td>
          <td><input type="text" name="required" id="registration_number" class="field_text"     /></td>
        </tr>
        <tr> -->
          <td>Jurisdiction*:</td>
          <td>
            <div>
              <select name="jurisdiction">
               <!-- <option value="" disabled="disabled" selected="selected">Please select a name</option>-->
               <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['countCountries']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['countCountries']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
               <option value=<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
  ><?php echo $_smarty_tpl->tpl_vars['countries']->value[$_smarty_tpl->tpl_vars['foo']->value][1];?>
</option>
               <?php }} ?> 
             </select>
           </div>
         </td>
       </tr>
       <tr> 
        <td>Type of Business or Activity:</td>
        <td><input type="text" name="type_business" id="type_business" class="field_text"     /></td>
      </tr>
      <tr> 
        <td valign="top">Company address:</td>
        <td><textarea name="company_address" id="company_address" style="width: 200px; height: 100px"></textarea></td>
      </tr>
      <tr> 
        <td>Email:</td>
        <td><input id="email" name="email" type="text" class="field_text"   /></td>
      </tr>
      <tr> 
        <td>Phone:</td>
        <td><input id="phone" name="phone" type="text" class="field_text"     /></td>
      </tr>
      <tr> 
        <td>Fax:</td>
        <td><input id="fax" name="fax" type="text" class="field_text"     /></td>
      </tr>
      
    </table>

  </div>
  <h3>Directors</h3>
  <div id="divDirectors">
    <button type="button" onclick="crearCampos()" >New Direct</button>
    <div id="divDirect" name="divDirect">
      <label name="labelDirector">Director </label>
      <input type="text" name="txtDirector" id="txtDirectors1"/>

      <label name="labelLegal">Legal </label>
      <input type="text" name="txtLegal" id="txtLegals1"/>
    </div>

  </div>

  <h3>Authorized Representative</h3>
  <div>

    <table>
      <tr>
        <td colspan="2">for future communication and authorizations on behalf of the company</td>
      </tr>
      <tr>
        <td>Position:</td>
        <td><input type="text" name="position_authorizations" id="position_authorizations" class="field_text"     /></td>
      </tr>
      <tr>
        <td>Full legal name:</td>
        <td><input type="text" name="full_legal_name_position_authorizations" id="full_legal_name_position_authorizations" class="field_text"     /></td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email_position_authorizations" id="email_position_authorizations" class="field_text"     /></td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td><input type="text" name="phone_position_authorizations" id="phone_position_authorizations" class="field_text"     /></td>
      </tr>

    </table>



  </div>

  <h3>Company staff authorized to communicate with NexorONE® for support (for security of information)</h3>
  <div>
   <table>

    <tr>
      <td colspan="2">Designated Super Administrator</td>
    </tr>
    <tr>
      <td>Position:</td>
      <td><input type="text" name="position_super_administrator" id="position_super_administrator" class="field_text"     /></td>
    </tr>
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name_super_administrator" id="name_super_administrator" class="field_text"     /></td>
    </tr>
    <tr>
      <td>Phone number:</td>
      <td><input type="text" name="phone_super_administrator" id="phone_super_administrator" class="field_text"     /></td>
    </tr>
    <tr>
      <td>Email address:</td>
      <td><input type="text" name="email_super_administrator" id="email_super_administrator" class="field_text"     /></td>
    </tr>


  </table>	

  <div id="divContacts">
    <button type="button" onclick="crearCamposContact()" >New Contact</button>
    <div id="divContact" name="divContact">

      <label name="labelNameContact">Name Contact</label>
      <input type="text" name="txtNameContact" id="txtNameContact1"/>

      <label name="labelPositionContact">Position </label>
      <input type="text" name="txtPositionContact" id="txtPositionContact1"/>

      <label name="labelPhoneContact">Phone</label>
      <input type="text" name="txtPhoneContact" id="txtPhoneContact1"/>

      <label name="labelEmailContact">Email</label>
      <input type="text" name="txtEmailContact" id="txtEmailContact1"/>
    </div>
  </div>

</div>
</div>


<center>	
</br>
</br>
<button id="button" value="agregar">save</button>
</center>


</form>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


</body>
</html><?php }} ?>