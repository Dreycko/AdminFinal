<?php /* Smarty version Smarty-3.1.12, created on 2013-03-07 16:43:32
         compiled from "templates\clientList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41685136031e262197-85395505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1678e9c103149028b2d918016a931205fd7eecc0' => 
    array (
      0 => 'templates\\clientList.tpl',
      1 => 1362692609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41685136031e262197-85395505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5136031e27ab44_38730358',
  'variables' => 
  array (
    'libraries' => 0,
    'count' => 0,
    'menu' => 0,
    'foo' => 0,
    'dato' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5136031e27ab44_38730358')) {function content_5136031e27ab44_38730358($_smarty_tpl) {?><html>
<head>
	<link rel="stylesheet" type="text/css" href="varios/css/960/reset.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/text.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/grid.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/layout.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="varios/css/960/nav.css" media="screen" />
	<script type='text/javascript' src='varios/script/clientList.js'></script>
	<?php echo $_smarty_tpl->tpl_vars['libraries']->value;?>

</head>
<body onload="pag();">
	cantidad:<?php echo $_smarty_tpl->tpl_vars['count']->value;?>

	<div class = "container_12">
		
		<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

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
				<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['count']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['count']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
				<tr class="odd">
					<th><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][2];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][3];?>
</td>
					<th><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][1];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][4];?>
</td>
					<th>Lorem ipsum</th>
					<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][5];?>
</td>
					<th><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][6];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['dato']->value[$_smarty_tpl->tpl_vars['foo']->value][7];?>
</td>
					<th>Lorem ipsum</th>
					<th>Lorem ipsum</th>
					<td class="currency">$125.00</td>
				</tr>
				<?php }} ?>

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

<?php echo $_smarty_tpl->tpl_vars['footer']->value;?>

</div>

</body>
</html>
<?php }} ?>