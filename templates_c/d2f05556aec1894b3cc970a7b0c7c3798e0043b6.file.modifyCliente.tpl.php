<?php /* Smarty version Smarty-3.1.12, created on 2013-01-15 14:12:20
         compiled from "templates\modifyCliente.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3173150ef25f15e3ec1-73543848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f05556aec1894b3cc970a7b0c7c3798e0043b6' => 
    array (
      0 => 'templates\\modifyCliente.tpl',
      1 => 1358277009,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3173150ef25f15e3ec1-73543848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ef25f162c054_18116945',
  'variables' => 
  array (
    'libraries' => 0,
    'mensaje' => 0,
    'menu' => 0,
    'countries' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ef25f162c054_18116945')) {function content_50ef25f162c054_18116945($_smarty_tpl) {?><html>
<head>
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


    <form action="fromcliente.php" id="agregar" method="post" onsubmit="return validarCampos(agregar);">
      <ul id="icons" class="ui-widget ui-helper-clearfix">

      </ul>
      <!-- Accordion -->
      <h2 class="demoHeaders">Required Information</h2>


      <div id="accordion">
       <h3>User Information  * indicated required field</h3>
       <div>
         <table class="table_outside">

          <tr> 
            <td >Company name*:</td>
            <td><input type="text" name="required" id="company_name" class="field_text"   maxlength="255" /></td>
          </tr>
          <tr> 
            <td>Incorporation date*:</td>
            <td>
             <div id="datepicker"></div>
           </td>
         </tr>
         <tr> 
          <td>Registration number*:</td>
          <td><input type="text" name="required" id="registration_number" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td>Jurisdiction*:</td>
          <td>
            <div>
              <select>
                <option value="" disabled="disabled" selected="selected">Please select a name</option>
                <?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 5+1 - (0) : 0-(5)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['countries']->value;?>
></option>
                
                <?php }} ?> 
              </select>
            </div>
          </td>
        </tr>
        <tr> 
          <td>Type of Business or Activity*:</td>
          <td><input type="text" name="type_business" id="type_business" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td valign="top">Company address*:</td>
          <td><textarea name="company_address" style="width: 200px; height: 100px"></textarea></td>
        </tr>
        <tr> 
          <td>Email*:</td>
          <td><input name="email" type="text" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td>Phone*:</td>
          <td><input name="phone" type="text" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td>Fax:</td>
          <td><input name="fax" type="text" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td width="200">Director 1*:</td>
          <td><input type="text" name="director_1" id="director_1" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td>Appointment date:</td>
          <td><input type="text" name="appointment_date_director_1" id="appointment_date_director_1" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr> 
          <td>Full legal name*:</td>
          <td><input type="text" name="full_legal_name_director_1" id="full_legal_name_director_1" class="field_text"   maxlength="255" /></td>
        </tr>

      </table>

    </div>
    <h3>Additional Directors</h3>
    <div id="divDirectors">
      <button type="button" onclick="crearCampos()" >New Direct</button>
      <div id="divDirect" name="divDirect">
        <label name="labelDirector">Director </label>
        <input type="text" name="txtDirector"/>

        <label name="labelLegal">Legal </label>
        <input type="text" name="txtLegal"/>
      </div>

    </div>

    <h3>Authorized Representative</h3>
    <div>

      <table>
        <tr>
          <td colspan="2">for future communication and authorizations on behalf of the company</td>
        </tr>
        <tr>
          <td>Position*:</td>
          <td><input type="text" name="position_1" id="position_1" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr>
          <td>Full legal name*:</td>
          <td><input type="text" name="full_legal_name_position_1" id="full_legal_name_position_1" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email_position_1" id="email_position_1" class="field_text"   maxlength="255" /></td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td><input type="text" name="phone_position_1" id="phone_position_1" class="field_text"   maxlength="255" /></td>
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
        <td>Position*:</td>
        <td><input type="text" name="position_super_administrator" id="position_super_administrator" class="field_text"   maxlength="255" /></td>
      </tr>
      <tr>
        <td>Name*:</td>
        <td><input type="text" name="name_super_administrator" id="name_super_administrator" class="field_text"   maxlength="255" /></td>
      </tr>
      <tr>
        <td>Phone number:</td>
        <td><input type="text" name="phone_super_administrator" id="phone_super_administrato" class="field_text"   maxlength="255" /></td>
      </tr>
      <tr>
        <td>Email address:</td>
        <td><input type="text" name="email_super_administrator" id="email_super_administrator" class="field_text"   maxlength="255" /></td>
      </tr>


    </table>  

    <div id="divContacts">
      <button type="button" onclick="crearCamposContact()" >New Direct</button>
      <div id="divContact" name="divContact">

        <label name="labelNameContact">Name Contact</label>
        <input type="text" name="txtNameContact"/>

        <label name="labelPositionContact">Position </label>
        <input type="text" name="txtPositionContact"/>

        <label name="labelPhoneContact">Phone</label>
        <input type="text" name="txtPhoneContact"/>

        <label name="labelEmailContact">Email</label>
        <input type="text" name="txtEmailContact"/>
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