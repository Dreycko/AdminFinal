<?php /* Smarty version Smarty-3.1.12, created on 2013-02-26 17:46:56
         compiled from "templates\addModule2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11101512d3b608eeb37-88250357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ec25ca82e19396c8cf033965a9b849542d598be' => 
    array (
      0 => 'templates\\addModule2.tpl',
      1 => 1361918816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11101512d3b608eeb37-88250357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addModuleOption' => 0,
    'company_name' => 0,
    'email' => 0,
    'phone' => 0,
    'libraries' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_512d3b609218f6_98012781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512d3b609218f6_98012781')) {function content_512d3b609218f6_98012781($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title></title></head><body onload="load('<?php echo $_smarty_tpl->tpl_vars['addModuleOption']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
');"><p>
  <?php echo $_smarty_tpl->tpl_vars['libraries']->value;?>


  <script>
  $(function() {


    $( "#selectable" ).selectable({
      stop: function() {
        var result = $( "#select-result" ).empty();
        $( ".ui-selected", this ).each(function() {
          var index = $( "#selectable li" ).index( this );
          result.append( " #" + ( index + 1 ) );
        });
      }
    });

    $( "#radio" ).buttonset();

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
</script><style>
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
</style><<?php ?>?php include("components/functions_low.php"); ?<?php ?>><script src="varios/script/addModule.js"></script></p>
  <div class="container_12">
    <form name="addModule" method="POST">
      <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

      <div class="grid_12" id="clientLoad">
      </div>
      <div class="grid_12" id="client">
      </div>

      <h2 class="demoHeaders grid_4">IT Admin Info</h2> 
      <h2 class="demoHeaders grid_4">Language</h2> 
      <h2 class="demoHeaders grid_4">Package</h2> 

      <div class="grid_4">
       <table class="grid_4"><tr><td>
            <label>ITAdmin Password:</label> 
          </td>
          <td>
            <input type="text" name="ITAdminPassword" id="ITAdminPassword"></td>
        </tr><tr><td>
            <h3 class="demoHeaders">MySQL Info</h3> 
          </td>
        </tr><tr><td>
            Username: 
          </td>
          <td>
            <input type="text" name="ITAdminUserName" id="ITAdminUserName"></td>
        </tr><tr><td>
            Password: 
          </td>
          <td>
            <input type="text" name="ITAdminPassword" id="ITAdminPassword"></td>
        </tr><tr><td>
            DB Name: 
          </td>
          <td>
            <input type="text" name="ITAdminName" id="ITAdminName"></td>
        </tr></table></div>


    <div class="grid_4">
     <div>
      <table><tr><td> <input type="checkbox">English   <br></td> </tr><tr><td> <input type="checkbox">French   <br></td> </tr><tr><td> <input type="checkbox">German   <br></td> </tr><tr><td> <input type="checkbox">Spanish   <br></td> </tr><tr><td> <input type="checkbox">Japanese   <br></td> </tr><tr><td> <input type="checkbox">Turkish   <br></td> </tr><tr><td> <input type="checkbox">Russian   <br></td> </tr><tr><td> <input type="checkbox">Swedish   <br></td> </tr><tr><td> <input type="checkbox">Portuguese   <br></td> </tr><tr><td> <input type="checkbox">SerboCroatian   <br></td> </tr><tr><td> <input type="checkbox">Nederlands   <br></td> </tr><tr><td> <input type="checkbox">Czech   <br></td> </tr><tr><td> <input type="checkbox">Italiano   <br></td> </tr><tr><td> <input type="checkbox">Chinese   <br></td> </tr><tr><td> <input type="checkbox">Greek   <br></td> </tr><tr><td> <input type="checkbox">Korean   <br><br></td> </tr></table></div>
  </div>
  <div class="grid_4">
    <table><tr><div id="radio">
          <input type="radio" id="radio1" name="radio" onclick="selectCore()"><label for="radio1">Core</label>
          <input type="radio" id="radio2" name="radio" onclick="selectFull()"><label for="radio2">Full</label>
          <input type="radio" id="radio3" name="radio" onclick="Clear()"><label for="radio3">Clear all</label>
        </div>
      </tr></table></div>


  <div id="accordion" class="grid_4">
    <h3>NexorONE&Acirc;&reg; Core Package</h3>
    <div>
      <table><tr><td><input id="1" type="checkbox" name="checkbox[]" value="1"> Multiple Administrators <br></td> </tr><tr><td><input id="2" type="checkbox" name="checkbox[]" value="2"> Profile Groups <br></td> </tr><tr><td><input id="3" type="checkbox" name="checkbox[]" value="3"> Calendar <br></td> </tr><tr><td><input id="4" type="checkbox" name="checkbox[]" value="4"> Help System <br></td> </tr><tr><td><input id="35" type="checkbox" name="checkbox[]" value="35"> Multi Currency Wires (Incoming and Outgoing Wire Transfers) <br></td> </tr></table></div>


    <h3>Operations Enhancement Modules</h3>
    <div>
     <table><tr><td><input id="5" type="checkbox" name="checkbox[]" value="5"> Interest &amp; Term Deposits Module <br></td> </tr><tr><td><input id="6" type="checkbox" name="checkbox[]" value="6"> Certificate of Deposits Generator (PDF) <br></td> </tr><tr><td><input id="7" type="checkbox" name="checkbox[]" value="7"> Minimum Balance Module <br></td> </tr><tr><td><input id="8" type="checkbox" name="checkbox[]" value="8"> Monthly Fee Module <br></td> </tr><tr><td><input id="9" type="checkbox" name="checkbox[]" value="9"> Line of Credit Module <br></td> </tr><tr><td><input id="10" type="checkbox" name="checkbox[]" value="10"> Recurring Transfers Between Users <br></td> </tr><tr><td><input id="11" type="checkbox" name="checkbox[]" value="11"> Loan Module <br></td> </tr></table></div>

  <h3>Compliance Protocol Enhancement Modules</h3>
  <div>
    <table><tr><td><input id="12" type="checkbox" name="checkbox[]" value="12"> Terms &amp; Conditions Module <br></td> </tr><tr><td><input id="13" type="checkbox" name="checkbox[]" value="13"> File Upload Interface Module - Profile Documents <br></td> </tr><tr><td><input id="14" type="checkbox" name="checkbox[]" value="14"> File Upload Interface Module - Proof of Funds <br></td> </tr></table></div>

  <h3>Large Scale Operations Enhancement Modules</h3>
  <div>
    <table><tr><td><input id="15" type="checkbox" name="checkbox[]" value="15"> News Page Module <br></td> </tr><tr><td><input id="16" type="checkbox" name="checkbox[]" value="16"> Editable Transactions Module <br></td> </tr><tr><td><input id="17" type="checkbox" name="checkbox[]" value="17"> Import Transactions Module <br></td> </tr><tr><td><input id="18" type="checkbox" name="checkbox[]" value="18"> Automated Username/Password Reset Module <br></td> </tr><tr><td><input id="19" type="checkbox" name="checkbox[]" value="19"> Customer Service Control Module <br></td> </tr><tr><td><input id="20" type="checkbox" name="checkbox[]" value="20"> Requests Matrix Module <br></td> </tr></table></div>


  <h3>Business Expansion Modules</h3>
  <div>
    <table><tr><td><input id="21" type="checkbox" name="checkbox[]" value="21"> Debit Card Funding Module (Passive) <br></td> </tr><tr><td><input id="22" type="checkbox" name="checkbox[]" value="22"> Portfolio and Commodities Module (Passive) <br></td> </tr><tr><td><input id="23" type="checkbox" name="checkbox[]" value="23"> FX Module (Transfers between Accounts of Different Currencies) <br></td> </tr><tr><td><input id="24" type="checkbox" name="checkbox[]" value="24"> Commissions Module <br></td> </tr><tr><td><input id="25" type="checkbox" name="checkbox[]" value="25"> OFAC Compliance Module <br></td> </tr></table></div>

  <h3>External Service Provider Integrations</h3>
  <div>
    <table><tr><td><input id="26" type="checkbox" name="checkbox[]" value="26"> Earthport Integration Module <br></td> </tr><tr><td><input id="27" type="checkbox" name="checkbox[]" value="27"> Earthport V6 Integration Module <br></td> </tr><tr><td><input id="28" type="checkbox" name="checkbox[]" value="28"> Earthport Direct Integration Module <br></td> </tr><tr><td><input id="29" type="checkbox" name="checkbox[]" value="29"> Prepaid Financial Services Integration Module <br></td> </tr><tr><td><input id="30" type="checkbox" name="checkbox[]" value="30"> CCS Prepay Integration Module <br></td> </tr><tr><td><input id="31" type="checkbox" name="checkbox[]" value="31"> Banclear Integration Module <br></td> </tr><tr><td><input id="32" type="checkbox" name="checkbox[]" value="32"> eGateway Integration Module <br></td> </tr></table></div>


  <h3>Other Modules</h3>
  <div>
    <table><tr><td><input id="33" type="checkbox" name="checkbox[]" value="33"> Currency Conversion Tool <br></td> </tr><tr><td><input id="34" type="checkbox" name="checkbox[]" value="34"> Pro Tooltips <br></td> </tr></table></div>
</div>   
<center>
  <button class="push_6" onclick="this.form.action='businessLayer/addModule.php?op=g'">save</button>

</center>

</form></div>






</body></html>
<?php }} ?>