<html>
<head>
	<title></title>
  {$libraries}
  <script>
  $(function() {

    /*
    var availableTags;
    for (var i = $countrie.length - 1; i >= 0; i--) {
      availableTags = availableTags + countrie[i];
    };
//var availableTags = {$mensaje}
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

    {$menu}

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
             {* start and end year can be relative to current year *}
             {html_select_date prefix='StartDate' time=$time start_year='-50' end_year='+1' display_days=true}
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
               {for $foo=0 to $countCountries }
               <option value={$foo}  >{$countries[$foo][1]}</option>
               {/for} 
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
{$footer}

</body>
</html>