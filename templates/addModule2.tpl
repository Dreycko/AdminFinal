<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/REC-html40/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title></title></head><body><p>
  {$libraries}

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
</style><?php include("components/functions_low.php"); ?><script src="varios/script/addModule.js"></script></p>
  <div class="container_12">
    <form name="addModule" method="POST">
      {$menu}
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
      <table><tr><td> <input type="checkbox" checked>English   <br></td> </tr><tr><td> <input type="checkbox" checked>French   <br></td> </tr><tr><td> <input type="checkbox" checked>German   <br></td> </tr><tr><td> <input type="checkbox" checked>Spanish   <br></td> </tr><tr><td> <input type="checkbox" checked>Japanese   <br></td> </tr><tr><td> <input type="checkbox" checked>Turkish   <br></td> </tr><tr><td> <input type="checkbox" checked>Russian   <br></td> </tr><tr><td> <input type="checkbox" checked>Swedish   <br></td> </tr><tr><td> <input type="checkbox" checked>Portuguese   <br></td> </tr><tr><td> <input type="checkbox" checked>SerboCroatian   <br></td> </tr><tr><td> <input type="checkbox" checked>Nederlands   <br></td> </tr><tr><td> <input type="checkbox" checked>Czech   <br></td> </tr><tr><td> <input type="checkbox" checked>Italiano   <br></td> </tr><tr><td> <input type="checkbox" checked>Chinese   <br></td> </tr><tr><td> <input type="checkbox" checked>Greek   <br></td> </tr><tr><td> <input type="checkbox" checked>Korean   <br><br></td> </tr></table></div>
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
      <table><tr><td><input id="1" type="checkbox" name="checkbox" value="1" checked> Multiple Administrators <br></td> </tr><tr><td><input id="2" type="checkbox" name="checkbox" value="2" checked> Profile Groups <br></td> </tr><tr><td><input id="3" type="checkbox" name="checkbox" value="3" checked> Calendar <br></td> </tr><tr><td><input id="4" type="checkbox" name="checkbox" value="4" checked> Help System <br></td> </tr><tr><td><input id="35" type="checkbox" name="checkbox" value="35" checked> Multi Currency Wires (Incoming and Outgoing Wire Transfers) <br></td> </tr></table></div>


    <h3>Operations Enhancement Modules</h3>
    <div>
     <table><tr><td><input id="5" type="checkbox" name="checkbox" value="5" checked> Interest &amp; Term Deposits Module <br></td> </tr><tr><td><input id="6" type="checkbox" name="checkbox" value="6" checked> Certificate of Deposits Generator (PDF) <br></td> </tr><tr><td><input id="7" type="checkbox" name="checkbox" value="7" checked> Minimum Balance Module <br></td> </tr><tr><td><input id="8" type="checkbox" name="checkbox" value="8" checked> Monthly Fee Module <br></td> </tr><tr><td><input id="9" type="checkbox" name="checkbox" value="9" checked> Line of Credit Module <br></td> </tr><tr><td><input id="10" type="checkbox" name="checkbox" value="10" checked> Recurring Transfers Between Users <br></td> </tr><tr><td><input id="11" type="checkbox" name="checkbox" value="11" checked> Loan Module <br></td> </tr></table></div>

  <h3>Compliance Protocol Enhancement Modules</h3>
  <div>
    <table><tr><td><input id="12" type="checkbox" name="checkbox" value="12" checked> Terms &amp; Conditions Module <br></td> </tr><tr><td><input id="13" type="checkbox" name="checkbox" value="13" checked> File Upload Interface Module - Profile Documents <br></td> </tr><tr><td><input id="14" type="checkbox" name="checkbox" value="14" checked> File Upload Interface Module - Proof of Funds <br></td> </tr></table></div>

  <h3>Large Scale Operations Enhancement Modules</h3>
  <div>
    <table><tr><td><input id="15" type="checkbox" name="checkbox" value="15" checked> News Page Module <br></td> </tr><tr><td><input id="16" type="checkbox" name="checkbox" value="16" checked> Editable Transactions Module <br></td> </tr><tr><td><input id="17" type="checkbox" name="checkbox" value="17" checked> Import Transactions Module <br></td> </tr><tr><td><input id="18" type="checkbox" name="checkbox" value="18" checked> Automated Username/Password Reset Module <br></td> </tr><tr><td><input id="19" type="checkbox" name="checkbox" value="19" checked> Customer Service Control Module <br></td> </tr><tr><td><input id="20" type="checkbox" name="checkbox" value="20" checked> Requests Matrix Module <br></td> </tr></table></div>


  <h3>Business Expansion Modules</h3>
  <div>
    <table><tr><td><input id="21" type="checkbox" name="checkbox" value="21" checked> Debit Card Funding Module (Passive) <br></td> </tr><tr><td><input id="22" type="checkbox" name="checkbox" value="22" checked> Portfolio and Commodities Module (Passive) <br></td> </tr><tr><td><input id="23" type="checkbox" name="checkbox" value="23" checked> FX Module (Transfers between Accounts of Different Currencies) <br></td> </tr><tr><td><input id="24" type="checkbox" name="checkbox" value="24" checked> Commissions Module <br></td> </tr><tr><td><input id="25" type="checkbox" name="checkbox" value="25" checked> OFAC Compliance Module <br></td> </tr></table></div>

  <h3>External Service Provider Integrations</h3>
  <div>
    <table><tr><td><input id="26" type="checkbox" name="checkbox" value="26" checked> Earthport Integration Module <br></td> </tr><tr><td><input id="27" type="checkbox" name="checkbox" value="27" checked> Earthport V6 Integration Module <br></td> </tr><tr><td><input id="28" type="checkbox" name="checkbox" value="28" checked> Earthport Direct Integration Module <br></td> </tr><tr><td><input id="29" type="checkbox" name="checkbox" value="29" checked> Prepaid Financial Services Integration Module <br></td> </tr><tr><td><input id="30" type="checkbox" name="checkbox" value="30" checked> CCS Prepay Integration Module <br></td> </tr><tr><td><input id="31" type="checkbox" name="checkbox" value="31" checked> Banclear Integration Module <br></td> </tr><tr><td><input id="32" type="checkbox" name="checkbox" value="32" checked> eGateway Integration Module <br></td> </tr></table></div>


  <h3>Other Modules</h3>
  <div>
    <table><tr><td><input id="33" type="checkbox" name="checkbox" value="33" checked> Currency Conversion Tool <br></td> </tr><tr><td><input id="34" type="checkbox" name="checkbox" value="34" checked> Pro Tooltips <br></td> </tr></table></div>
</div>   
<center>
  <button class="push_6">save</button>

</center>

</form></div>






</body></html>
