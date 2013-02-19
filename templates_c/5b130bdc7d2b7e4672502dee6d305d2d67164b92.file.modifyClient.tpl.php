<?php /* Smarty version Smarty-3.1.12, created on 2013-01-10 14:02:12
         compiled from "templates\modifyClient.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3222850ef01d595a9d0-07182047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b130bdc7d2b7e4672502dee6d305d2d67164b92' => 
    array (
      0 => 'templates\\modifyClient.tpl',
      1 => 1357844529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222850ef01d595a9d0-07182047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ef01d5995ba6_81140870',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ef01d5995ba6_81140870')) {function content_50ef01d5995ba6_81140870($_smarty_tpl) {?><html>
<head>
	<title></title>
  <meta charset="utf-8">
  <link href="varios/css/cupertino/jquery-ui-1.9.2.custom.css" rel="stylesheet">
  <script src="varios/script/jquery-1.8.3.js"></script>
  <script src="varios/script/jquery-ui-1.9.2.custom.js"></script>
  <script type="varios/script/style.js" src="funciones.js"></script>

<script>
$(function() {
    
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

<<?php ?>?php include("components/functions_low.php"); ?<?php ?>>

</head>
<body>

<form>

<style> 
.container { width: 500px; padding: 0 0 5px 0; margin: 3px 0 10px 0; background: #fff; } 
#nav { margin: 0; padding: 0; border-top: 3px solid #5F6A71; } 
#nav li { margin: 0; padding: 0; display: inline; list-style-type: none; } 
#nav a:link, #nav a:visited { float: left; font: bold 7.5pt verdana; line-height: 14px; padding: 9px; text-decoration: none; color: #708491; } 
#nav a:link.active, #nav a:visited.active, #nav a:hover { color: #666; background: url(http://1.bp.blogspot.com/_7wsQzULWIwo/SzvC_Xa-vHI/AAAAAAAACw0/qVeZI3gdWQM/s1600/Inverted.png) no-repeat top center; border-top: 4px solid #5F6A71; } 
</style>

 <div class="container"> 
  <ul id="nav"> 
      <li><a href="index.php?menu=newClient" name ="newClient"><span>New</span></a></li>
      <li><a href="index.php?menu=modifyClient" name ="modifyClient"><span>Modify</span></a></li>
      <li><a href="index.php?menu=addModule" name ="addModule"><span>Add Module</span></a></li>

  </ul>
   </div>

<!-- Accordion -->
<center>
<h2 class="demoHeaders">Packages and Modules</h2>
</center>
<div id="accordion">
  <h3>NexorONE® Standalone Software Packages</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="core" type="checkbox" name="option1" value="core"> NexorONE® Core Package Ready to deploy and start operations. Modules can easily be added.<br></td>
                </tr>

                <tr> 
                  <td><input id ="full" type="checkbox" name="option2" value="full">NexorONE® Full Package A comprehensive package. Includes: All Enhancement Modules + All Languages.<br></td>
                </tr>
      </table>
  </div>

    <h3>Operations Enhancement Modules</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="3" type="checkbox" name="option3" value="3"> Interest  Term Deposits ModuleA flexible &amp; complex interest generating tool with custom reports <br></td>
                </tr>

                <tr> 
                  <td><input id ="4" type="checkbox" name="option4" value="4">Certificate of Deposits Generator (PDF) Creates a custom PDF Certificate for each Term Deposit Account <br></td>
                </tr>

                <tr> 
                  <td><input id ="5" type="checkbox" name="option5" value="5">Minimum Balance Module Charges fee if account goes under pre-defined limit<br></td>
                </tr>

                <tr> 
                  <td><input id ="6" type="checkbox" name="option6" value="6">Monthly Fee Module Automatically charges specific account types a monthly fee<br></td>
                </tr>

                <tr> 
                  <td><input id ="7" type="checkbox" name="option7" value="7">Recurring Transfers Between Users Allows programming recurring payments between, to and from users<br></td>
                </tr>

                 <tr> 
                  <td><input id ="8" type="checkbox" name="option8" value="8">Recurring Transfers Between Users Allows programming recurring payments between, to and from users<br></td>
                </tr>

                <tr> 
                  <td><input id ="9" type="checkbox" name="option9" value="9">Recurring Transfers Between Users Allows programming recurring payments between, to and from users<br></td>
                </tr>

      </table>
  </div>

  <h3>Compliance Protocol Enhancement Modules</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="10" type="checkbox" name="option10" value="10"> Terms &amp; Conditions Module Clients need to accept T &amp; C’s at registration enforced with Digital Signatures<br></td>
                </tr>

                <tr> 
                  <td><input id ="11" type="checkbox" name="option11" value="11">File Upload Interface Module - Proof of Funds Allows clients to upload supporting documentation for transactions <br></td>
                </tr>

                <tr> 
                  <td><input id ="12" type="checkbox" name="option12" value="12">File Upload Interface Module - Profile Documents Allows clients and/or administrators to upload KYC files<br></td>
                </tr>

      </table>
  </div>

  <h3>Compliance Protocol Enhancement Modules</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="13" type="checkbox" name="option13" value="13"> News Page ModuleThis interface allows for the administrator to manage a bulletin board <br></td>
                </tr>

                <tr> 
                  <td><input id ="14" type="checkbox" name="option14" value="14">Editable Transactions Module Allows changing transactions directly at database level by admin<br></td>
                </tr>

                <tr> 
                  <td><input id ="15" type="checkbox" name="option15" value="15">Automated Username/Password Reset Module Users can retrieve their own username and password using security questions <br></td>
                </tr>

                <tr> 
                  <td><input id ="16" type="checkbox" name="option16" value="16"> Customer Service Control Module Allows for assigning controlled customer service issues to administrators<br></td>
                </tr>

                <tr> 
                  <td><input id ="17" type="checkbox" name="option17" value="17">CSV Transactions Import Allows the administrator to import transaction directly into the DB<br></td>
                </tr>

                <tr> 
                  <td><input id ="18" type="checkbox" name="option15" value="18">Requests Matrix Module Manages intensive operations and large client groups more efficiently<br></td>
                </tr>

      </table>
  </div>

  <h3>Multilingual Platform Enhancement</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="19" type="checkbox" name="option19" value="19"> Available Language Files: English, Spanish, French, German, Italian, Portuguese, Dutch, Swedish, Turkish, Russian, Serbo-Croatian, Czech, Chinese (Simplified) and Japanese<br></td>
                </tr>

      </table>
  </div>

    <h3>Multilingual Platform Enhancement</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="20" type="checkbox" name="option20" value="20"> Available Language Files: English, Spanish, French, German, Italian, Portuguese, Dutch, Swedish, Turkish, Russian, Serbo-Croatian, Czech, Chinese (Simplified) and Japanese<br></td>
                </tr>

      </table>
  </div>

  </div>





<h2 class="demoHeaders">Expansions and External Integrations (Not included in the NexorONE® Full Package)</h2>
<div id="accordion2">

<h3>Business Expansion Modules</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="20" type="checkbox" name="option20" value="20"> Debit Card Funding Module (Passive / Integration requires additional programming) An interface to fund pre-associated Debit Cards<br></td>
                </tr>

                <tr> 
                  <td><input id ="21" type="checkbox" name="option21" value="21">Portfolio Module – Funds, Commodities and Metals (Passive / Integration) An interface that allows for passive funds, commodities and metals management<br></td>
                </tr>

                 <tr> 
                  <td><input id ="22" type="checkbox" name="option22" value="22"> FX Module (Requires Live feed) Allows clients to transfer funds between accounts of different currencies<br></td>
                </tr>

                <tr> 
                  <td><input id ="23" type="checkbox" name="option23" value="23">Merchant Services Module Allows selected profiles to create “Pay Now” buttons associated to their accounts<br></td>
                </tr>

                 <tr> 
                  <td><input id ="24" type="checkbox" name="option24" value="24">Commissions Module (Requires additional programming to customize) Custom made to the specifications provided<br></td>
                </tr>

                 <tr> 
                  <td><input id ="25" type="checkbox" name="option25" value="25">OFAC Compliance Module (Requires Live feed) Identifying positive matches upon registrations and transfers<br></td>
                </tr>
      </table>
  </div>

  <h3>External Service Provider Integrations</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="26" type="checkbox" name="option26" value="26"> EarthPort® Integration (NexorONE® Official Solutions Partner) Connection to a UK regulated Payments Institution &amp; Swift <br></td>
                </tr>

                <tr> 
                  <td><input id ="27" type="checkbox" name="option27" value="27">EarthPort® Direct Integration (EarthPort Direct / Final Pay) Sub-Connection to a UK regulated Payments Institution &amp; Swift<br></td>
                </tr>

                 <tr> 
                  <td><input id ="28" type="checkbox" name="option28" value="28"> PrePaid Financial Services® Integration Debit Card Platform <br></td>
                </tr>

                <tr> 
                  <td><input id ="29" type="checkbox" name="option29" value="29">CCS PrePay® Integration Debit Card Platform<br></td>
                </tr>

                 <tr> 
                  <td><input id ="30" type="checkbox" name="option30" value="30">Payment 21® Integration Online Check Processing Platform <br></td>
                </tr>

                <tr> 
                  <td><input id ="31" type="checkbox" name="option31" value="31">Xignite On-Demand Market Data Feed<br></td>
                </tr>
      </table>
  </div>

   
  </div>




 
<h2 class="demoHeaders">Services &amp; Support</h2>
<div id="accordion3">

<h3>NexorONE® Support &amp; Hosting Solutions Package</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="32" type="checkbox" name="option32" value="32"> 
                    Setup and Integration of Hosting Solution Package
                    <div id="tab" padding-left="50px" style="padding-left: 50px;">
                    <li>Domain Name Acquisition</li>
                    <li>Dedicated Website/Email Hosting Account Setup</li>
                    <li>Dedicated NexorONE Hosting Account</li>
                    <li>Secure Dual IP Hosting Setup</li>
                    <li>256Bit SSL Certificate Installation</li>
                    <li>Data Base Creation and Setup</li>
                    <li>NexorONE Installation and Integration</li>
                    <li>Implement Security Protocols</li>
                    </div>

                    <br>
                  </td>
                </tr>

              <tr> 
                  <td><input id ="33" type="checkbox" name="option33" value="33"> 
                    Ongoing Service of the Hosting Solution Package - Monthly
                    <div id="tab" padding-left="50px" style="padding-left: 50px;">
                    <li>Secure Hosting Maintenance</li>
                    <li>Data Base Preventive and Performance Enhancing Maintenance</li>
                    <li>NexorONE Automatic Updates</li>
                    <li>NexorONE Tech Support</li>
                    <li>750MB Dedicated Website Hosting Account</li>
                    <li>20 Email Accounts</li>
                    <li>250MB Dedicated NexorONE Hosting Account</li>
                    <li>10GB Bandwidth for Traffic</li>
                    </div>

                    <br>
                  </td>
                </tr>

                 <tr> 
                  <td><input id ="34" type="checkbox" name="option34" value="34"> 
                    Increased Storage Space for Hosting Solution Package - Monthly
                    <div id="tab" padding-left="50px" style="padding-left: 50px;">
                    <li>1.5GB Hosting Account</li>
                    <li>3GB Hosting Account</li>
                    <li>5GB Hosting Account</li>
                    </div>

                    <br>
                  </td>
                </tr>


      </table>
  </div>

  <h3>Website Design / Additional Services</h3>
  <div>
      <table>
                <tr> 
                  <td><input id ="35" type="checkbox" name="option35" value="35"> Web Page Creation and CMS Web-Manager Software and IntegrationStandard website structure, unique and original design, content uploaded <br></td>
                </tr>

                <tr> 
                  <td><input id ="35" type="checkbox" name="option35" value="35"> Logo Creation and Design Custom Logo and Corporate Image proposal <br></td>
                </tr>

                
      </table>
  </div>

   
  </div>







</form>


  </body>
</html>
<?php }} ?>