<?php /* Smarty version Smarty-3.1.12, created on 2013-02-28 15:21:55
         compiled from "templates\newClientSales.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22067512b9f4d8198c9-35629706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e55230429a6ff12a7c7d25f875c748b50230de6' => 
    array (
      0 => 'templates\\newClientSales.tpl',
      1 => 1362082912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22067512b9f4d8198c9-35629706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_512b9f4d838d42_03156621',
  'variables' => 
  array (
    'libraries' => 0,
    'menu' => 0,
    'time' => 0,
    'countCountries' => 0,
    'foo' => 0,
    'countries' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512b9f4d838d42_03156621')) {function content_512b9f4d838d42_03156621($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_select_date')) include 'C:\\Program Files (x86)\\Zend\\Apache2\\htdocs\\AdminFinal\\smarty\\plugins\\function.html_select_date.php';
?><html>
<head>
    <link rel="stylesheet" type="text/css" href="varios/css/960/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/nav.css" media="screen" />
    <script src='varios/script/newClientSales.js'></script>

</head>
<body onload="load();">
    <form action="businessLayer/newClientSales.php" method= "post">
        <div class = "container_12">
            <?php echo $_smarty_tpl->tpl_vars['libraries']->value;?>

            <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>


            <div class="grid_4">
                <div class="box">
                    <h2>
                        <a href="#" id="toggle-forms">Sales</a>
                    </h2>
                    <div class="block" id="forms">
                        <fieldset class="login">
                            <legend>Purchase Information (Sales)</legend>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><label>DOP:</label>
                                        </td>
                                        <td>
                                            
                                            <?php echo smarty_function_html_select_date(array('prefix'=>'StartDate','time'=>$_smarty_tpl->tpl_vars['time']->value,'start_year'=>'-50','end_year'=>'+1','display_days'=>true),$_smarty_tpl);?>

                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td><label>CODE:</label></td>
                                        <td><input type="text" disabled name="code"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Company Name:</label></td>
                                        <td><input type="text" disabled name="company_name"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Contact:</label></td>
                                        <td><input type="text" disabled name="contact_sale"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Package:</label></td>
                                        <td>
                                            <select name="package" id="package">
                                              <option value="core">Core</option> 
                                              <option value="full">Full</option> 
                                          </select>
                                      </td>
                                  </tr>
                                  <tr>
                                    <td><label>Hosting:</label></td>
                                    <td><input type="text" disabled name="hosting"></td>
                                </tr>
                                <tr>
                                    <td><label>Domain:</label></td>
                                    <td><input type="text" disabled name="domain"></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <center>
                                            <input type="submit" disabled name="btnSales" value="Save">
                                        </center>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </fieldset>

                </div>
            </div>

        </div>
        <div class="grid_4">
            <div class="box">
                <h2>
                    <a href="#" id="toggle-forms">know your client</a>
                </h2>
                <div class="block" id="formsKyc">
                    <fieldset >
                        <legend  id="legendKyc">Click to modify User information</legend>
                        <form action="businessLayer/fromcliente.php" id="agregar" method="post" onsubmit="return validarCampos(agregar);">
                            <div id="accordion">
                                <div>
                                    <table class="table_outside">

                                        <tr> 
                                            <td >Company name*:</td>
                                            <td><input type="text" disabled name="required" id="company_name"/></td>
                                        </tr>
                                        <tr> 
                                            <td >Abbreviation name*:</td>
                                            <td><input type="text" disabled name="required" id="abbreviation_name"/></td>
                                        </tr>

                                        <tr> 

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
                                            <td><input type="text" disabled name="type_business" id="type_business" class="field_text"     /></td>
                                        </tr>
                                        <tr> 
                                            <td valign="top">Company address:</td>
                                            <td><textarea name="company_address" id="company_address" disabled ></textarea></td>
                                        </tr>
                                        <tr> 
                                            <td>Email:</td>
                                            <td><input id="email" name="email" type="text" disabled class="field_text"   /></td>
                                        </tr>
                                        <tr> 
                                            <td>Phone:</td>
                                            <td><input id="phone" name="phone" type="text" disabled class="field_text"     /></td>
                                        </tr>
                                        <tr> 
                                            <td>Fax:</td>
                                            <td><input id="fax" name="fax" type="text" disabled class="field_text"     /></td>
                                        </tr>

                                    </table>

                                </div>
                            </div>
                        </fieldset >
                        <fieldset >
                            <legend>Directors</legend>
                            <div id="divDirectors">
                                <button type="button" onclick="crearCampos()" >New Direct</button>
                                <div id="divDirect" name="divDirect">
                                    <table>                                     
                                        <tr>
                                            <td>
                                                <label name="labelDirector">Director </label>
                                            </td>
                                            <td>
                                                <input type="text" disabled name="txtDirector" id="txtDirectors1"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label name="labelLegal">Legal </label>
                                            </td>
                                            <td>
                                                <input type="text" disabled name="txtLegal" id="txtLegals1"/>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </fieldset >
                        <fieldset >
                            <legend>Authorized Representative</legend>
                            <div>
                                <table>
                                    <tr>
                                        <td colspan="2">for future communication and authorizations on behalf of the company</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td><input type="text" disabled name="position_authorizations" id="position_authorizations" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Full legal name:</td>
                                        <td><input type="text" disabled name="full_legal_name_position_authorizations" id="full_legal_name_position_authorizations" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><input type="text" disabled name="email_position_authorizations" id="email_position_authorizations" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td><input type="text" disabled name="phone_position_authorizations" id="phone_position_authorizations" class="field_text"     /></td>
                                    </tr>
                                </table>
                            </div>
                        </fieldset >
                        <fieldset >
                            <legend>Company staff authorized to communicate with NexorONE® for support</legend>
                            <div>
                                <table>

                                    <tr>
                                        <td colspan="2">Designated Super Administrator</td>
                                    </tr>
                                    <tr>
                                        <td>Position:</td>
                                        <td><input type="text" disabled name="position_super_administrator" id="position_super_administrator" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><input type="text" disabled name="name_super_administrator" id="name_super_administrator" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Phone number:</td>
                                        <td><input type="text" disabled name="phone_super_administrator" id="phone_super_administrator" class="field_text"     /></td>
                                    </tr>
                                    <tr>
                                        <td>Email address:</td>
                                        <td><input type="text" disabled name="email_super_administrator" id="email_super_administrator" class="field_text"     /></td>
                                    </tr>


                                </table>    

                                <div id="divContacts">
                                    <button type="button" onclick="crearCamposContact()" >New Contact</button>
                                    <div id="divContact" name="divContact">
                                        <table>
                                            <tr>
                                                <td><label name="labelNameContact">Name Contact</label></td>
                                                <td><input type="text" disabled name="txtNameContact" id="txtNameContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelPositionContact">Position </label></td>
                                                <td><input type="text" disabled name="txtPositionContact" id="txtPositionContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelPhoneContact">Phone</label></td>
                                                <td><input type="text" disabled name="txtPhoneContact" id="txtPhoneContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelEmailContact">Email</label></td>
                                                <td><input type="text" disabled name="txtEmailContact" id="txtEmailContact1"/></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <center>    
                                <input type="submit" disabled name="btnKyc" value="Save">
                            </center>
                        </form>
                    </fieldset>

                </div>


            </div>

        </div>

        <div class="grid_4">
            <div class="box">
                <h2>
                    <a href="#" id="toggle-tables">Product Information</a>
                </h2>
                <div class="block" id="tables">
                    <table summary="This table includes examples of as many table elements as possible">
                        <!--<caption>An example table</caption>-->
                        <colgroup>
                        <col class="colA" />
                        <col class="colB" />
                        <col class="colC" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th colspan="3" class="table-head">Table heading</th>
                        </tr>
                        <tr>
                            <th>Column 1</th>
                            <th>Column 2</th>
                            <th class="currency">Column 3</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Subtotal</th>
                            <td></td>
                            <th class="currency">$500.00</th>
                        </tr>
                        <tr class="total">
                            <th>Total</th>
                            <td></td>
                            <th class="currency">$500.00</th>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <center>
                                    <input type="submit" disabled name="btnProInfo" value="Save">
                                </center>
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr class="odd">
                            <th>Lorem ipsum</th>
                            <td>Dolor sit</td>
                            <td class="currency">$125.00</td>
                        </tr>
                        <tr>
                            <th>Dolor sit</th>
                            <td>Nostrud exerci</td>
                            <td class="currency">$75.00</td>
                        </tr>
                        <tr class="odd">
                            <th>Nostrud exerci</th>
                            <td>Lorem ipsum</td>
                            <td class="currency">$200.00</td>
                        </tr>
                        <tr>
                            <th>Lorem ipsum</th>
                            <td>Dolor sit</td>
                            <td class="currency">$64.00</td>
                        </tr>
                        <tr class="odd">
                            <th>Dolor sit</th>
                            <td>Nostrud exerci</td>
                            <td class="currency">$36.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="box">
            <h2>
                <a href="#" id="toggle-forms">Service Providers Integrations </a>
            </h2>
            <div class="block" id="forms">
                <table>

                    <tr>
                        <th>Lorem ipsum</th>
                        <td>Dolor sit</td>
                        <td class="currency">$125.00</td>
                    </tr>
                    <tr>
                        <th>Dolor sit</th>
                        <td>Nostrud exerci</td>
                        <td class="currency">$75.00</td>
                    </tr>
                    <tr>
                        <th>Nostrud exerci</th>
                        <td>Lorem ipsum</td>
                        <td class="currency">$200.00</td>
                    </tr>
                    <tr>
                        <th>Lorem ipsum</th>
                        <td>Dolor sit</td>
                        <td class="currency">$64.00</td>
                    </tr>
                    <tr>
                        <th>Dolor sit</th>
                        <td>Nostrud exerci</td>
                        <td class="currency">$36.00</td>
                    </tr>
                    <tfoot>     
                        <tr>
                            <td colspan="3">
                                <center>
                                    <input type="submit" disabled name="btnService" value="Save">
                                </center>
                            </td>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
        <div class="box">
            <h2>
                <a href="#" id="toggle-forms">Hosting Services </a>
            </h2>
            <div class="block" id="forms">
                <fieldset class="login">
                    <legend>Website and Logo Design</legend>

                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <label>Starting Date:</label>
                                </td>
                                <td>
                                    <label>Lorem ipsum</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Domain:</label>
                                </td>
                                <td>
                                    <label>Lorem ipsum</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Hosting:</label>
                                </td>
                                <td>
                                    <label>Lorem ipsum</label>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <input type="submit" disabled name="btnHosting" value="Save">
                                    </center>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>
        <div class="box">
            <h2>
                <a href="#" id="toggle-forms">Website and Logo Design</a>
            </h2>
            <div class="block" id="forms">
                <fieldset class="login">
                    <legend>Website and Logo Design</legend>

                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <label>Website:</label>
                                </td>
                                <td>
                                    <label>Lorem ipsum</label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Logo:</label>
                                </td>
                                <td>
                                    <label>Lorem ipsum</label>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <center>
                                        <input type="submit" disabled name="btnWebsite" value="Save">
                                    </center>

                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </fieldset>
            </div>
        </div>

    </div>

</div>
<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</form>
</body>
</html><?php }} ?>