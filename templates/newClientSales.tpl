<html>
<head>
    <link rel="stylesheet" type="text/css" href="varios/css/960/reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/text.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/grid.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/layout.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="varios/css/960/nav.css" media="screen" />

</head>
<body>
    <form action="businessLayer/newClientSales.php" method= "post">
        <div class = "container_12">
            {$libraries}
            {$menu}

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
                                        <td><label>DOP:</label></td>
                                        <td><input type="text" name="dop"></td>
                                    </tr>
                                    <tr>
                                        <td><label>CODE:</label></td>
                                        <td><input type="text" name="code"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Company Name:</label></td>
                                        <td><input type="text" name="company_name"></td>
                                    </tr>
                                    <tr>
                                        <td><label>Contact:</label></td>
                                        <td><input type="text" name="contact_sale"></td>
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
                                    <td><input type="text" name="hosting"></td>
                                </tr>
                                <tr>
                                    <td><label>Domain:</label></td>
                                    <td><input type="text" name="domain"></td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2">
                                        <center>
                                            <input type="submit" name="btnSales" value="Save">
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
                <div class="block" id="forms">
                    <fieldset >
                        <legend>User Information</legend>
                        <form action="businessLayer/fromcliente.php" id="agregar" method="post" onsubmit="return validarCampos(agregar);">
                            <div id="accordion">
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
                                                <input type="text" name="txtDirector" id="txtDirectors1"/>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label name="labelLegal">Legal </label>
                                            </td>
                                            <td>
                                                <input type="text" name="txtLegal" id="txtLegals1"/>
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
                                        <table>
                                            <tr>
                                                <td><label name="labelNameContact">Name Contact</label></td>
                                                <td><input type="text" name="txtNameContact" id="txtNameContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelPositionContact">Position </label></td>
                                                <td><input type="text" name="txtPositionContact" id="txtPositionContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelPhoneContact">Phone</label></td>
                                                <td><input type="text" name="txtPhoneContact" id="txtPhoneContact1"/></td>
                                            </tr>
                                            <tr>
                                                <td><label name="labelEmailContact">Email</label></td>
                                                <td><input type="text" name="txtEmailContact" id="txtEmailContact1"/></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            <center>    
                                <input type="submit" name="btnKyc" value="Save">
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
                                    <input type="submit" name="btnProInfo" value="Save">
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
                                    <input type="submit" name="btnService" value="Save">
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
                                        <input type="submit" name="btnHosting" value="Save">
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
                                        <input type="submit" name="btnWebsite" value="Save">
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

<div id="login" style="display:none">
  <p>
    <span id='login_error_msg' class="login_error" style="display:none">&nbsp;</span>
</p>
  <div style="clear:both"></div>
  <p><span class="login_label">login</span> <span class="login_input"><input type="text"/></span></p>
  <div style="clear:both"></div>
  <p><span class="login_label">password</span> <span class="login_input"><input type="password"/></span></p>
  <div style="clear:both"></div>
</div>
{$footer}
</form>
</body>
</html>