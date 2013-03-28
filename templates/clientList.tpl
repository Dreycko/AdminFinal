<html>
<head>
	<link rel="stylesheet" type="text/css" href="varios/css/960/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/layout.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/nav.css" media="screen" />
	<link href='varios/css/popup/popup.css' rel='stylesheet'>
	<script type='text/javascript' src='varios/script/clientList.js'></script>


	{$libraries}
</head>
<body onload="pag(0);" class="main-box">
	cantidad:{$count}
	<div class = "container_12">
		
		{$menu}
		<div id ="tableActive" calss="grid_12">
			

			<table  id="active" class="grid_12">
				<!--<caption>Active</caption>-->
				<colgroup>
				<col class="colA" />
				<col class="colB" />
				<col class="colC" />
			</colgroup>
			<thead>
				<tr>
					<th colspan="11" class="table-head">Active</th>
				</tr>
				<tr>
					<th>DOP</th>
					<th>CODE</th>
					<th>Company Name</th>
					<th>Contact Name</th>
					<th>Type</th>
					<th>Package</th>
					<th>Hosting</th>
					<th>Domain</th>
					<th>Integration</th>
					<th>Started</th>
					<th class="currency">Paid Until</th>
				</tr>
			</thead>
			<tbody>
				{for $foo=0 to $count-1}
				<tr  id ="{$foo}"class="odd" style="display:none" onClick="actualizar({$foo});">
					<td><label id="DOP">{$dato[$foo][2]}</label></td>
					<td><label id="code_label">{$dato[$foo][3]}</label></td>
					<td><label id="company_name_label">{$dato[$foo][1]}</label></td>
					<td><label id="contact_label">{$dato[$foo][4]}</label></td>
					<td><label id="type_label">Lorem ipsum</label></td>
					<td><label id="package_label">{$dato[$foo][5]}</label></td>
					<td><label id="hosting_label">{$dato[$foo][6]}</label></td>
					<td><label id="domain_label">{$dato[$foo][7]}</label></td>
					<td><label id="integration_label">Lorem ipsum</label></td>
					<td><label id="starte_label">{$dato[$foo][0]}</label></td>
					<td class="currency"><label id="paid_label">$125.00</label></td>
				</tr>
				{/for}

			</tbody>
			
		</table>
<!--
		<table  class="grid_12"summary="This table includes examples of as many table elements as possible">
			<caption>Active</caption>
			<colgroup>
			<col class="colA" />
			<col class="colB" />
			<col class="colC" />
		</colgroup>
		<thead>
			<tr>
				<th colspan="11" class="table-head">Inactive</th>
			</tr>
			<tr>
				<th>DOP</th>
				<th>CODE</th>
				<th>Company Name</th>
				<th>Contact Name</th>
				<th>Type</th>
				<th>Package</th>
				<th>Hosting</th>
				<th>Domain</th>
				<th>Integration</th>
				<th>Started</th>
				<th class="currency">Paid Until</th>
			</tr>
		</thead>
		<tfoot>

		</tfoot>
		<tbody>
			<tr class="odd">
				<th>Lorem ipsum</th>
				<td>Dolor sit</td>
				<th>Lorem ipsum</th>
				<td>Dolor sit</td>
				<th>Lorem ipsum</th>
				<td>Dolor sit</td>
				<th>Lorem ipsum</th>
				<td>Dolor sit</td>
				<th>Lorem ipsum</th>
				<th>Lorem ipsum</th>
				<td class="currency">$125.00</td>
			</tr>
			
		</tbody>
	</table>
-->
<form action="businessLayer/ClientList.php?op=save" id="formSave"  method ="POST">
<div id="form" class="grid_6">
	<table>
		<tr>
			<td colspan="2">
				<label for="dop">DOP:</label>
				<input type="text" id="dop" name="dop">
			</td>
		</tr>
		<tr>
			<td>
				
				<label for="code">CODE:</label>
				<input type="text" id="code" name="code" >
			</td>
			<td >
				<label for="company_name">Company Name:</label>
				<input type="text" id="company_name" name="company_name" aling="right">
			</td>
			
		</tr>
		<tr>
			<td>
				<label for="contact">Contact:</label>
				<input type="text"id ="contact" name ="contact">
			</td>
			<td>
				<label for="type">Type</label>
				<input type="text" id="type" name="type">
			</td>

		</tr>
		<tr>
			<td>
				<label for="package">Package:</label>
				<input type="text"id ="package" name ="package">
			</td>
			<td>
				<label for="hosting">Hosting:</label>
				<input type="text"id ="hosting" name ="hosting">
			</td>
			
		</tr>
		<tr>

			<td>
				<label for="domain">Domain</label>
				<input type="text"id ="domain" name ="domain">
			</td>
			
			<td>
				<label for="integration">Integration</label>
				<input type="text" id="integration" name="integration">
			</td>
		</tr>
		<tr>
			<td>
				<label for="started">Started</label>
				<input type="text" id="started" name="started">

			</td>
			<td>
				<label for="paid">Paid</label>
				<input type="text" id="paid" name="paid">
			</td>
		</tr>
		<tr >
			<td >
				<button name="btnSave" onclick=" saveForm();" value="save">save</button>
			</td>
			<td >
				<button name="btnExit" onclick=" exit();">cancel</button>
			</td></tr>

		</table>


	</div>
	</form>
	<div id="main-box"></div>


</div>


{$footer}
</div>



</body>
</html>
