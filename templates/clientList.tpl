<html>
<head>
	<link rel="stylesheet" type="text/css" href="varios/css/960/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/layout.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/nav.css" media="screen" />
	<script type='text/javascript' src='varios/script/clientList.js'></script>
	{$libraries}
</head>
<body onload="pag();">
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
			<tfoot>

			</tfoot>
			<tbody>
				{for $foo=0 to $count}
				<tr class="odd">
					<th>{$dato[$foo][2]}</th>
					<td>{$dato[$foo][3]}</td>
					<th>{$dato[$foo][1]}</th>
					<td>{$dato[$foo][4]}</td>
					<th>Lorem ipsum</th>
					<td>{$dato[$foo][5]}</td>
					<th>{$dato[$foo][6]}</th>
					<td>{$dato[$foo][7]}</td>
					<th>Lorem ipsum</th>
					<th>Lorem ipsum</th>
					<td class="currency">$125.00</td>
				</tr>
				{/for}

			</tbody>
			<tfoot>
				<tr>
					<td colspan="11">
						
					</td>
				</tr>
			</tfoot>
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
</div>

{$footer}
</div>

</body>
</html>
