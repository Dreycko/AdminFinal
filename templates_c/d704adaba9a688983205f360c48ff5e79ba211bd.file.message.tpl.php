<?php /* Smarty version Smarty-3.1.12, created on 2013-02-07 10:14:02
         compiled from "templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1684511270c237ce06-68906713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd704adaba9a688983205f360c48ff5e79ba211bd' => 
    array (
      0 => 'templates\\message.tpl',
      1 => 1360250021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684511270c237ce06-68906713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_511270c238d218_42888722',
  'variables' => 
  array (
    'libraries' => 0,
    'page' => 0,
    'msg' => 0,
    'msgEntity' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_511270c238d218_42888722')) {function content_511270c238d218_42888722($_smarty_tpl) {?><html>
<head>
	<?php echo $_smarty_tpl->tpl_vars['libraries']->value;?>

</head>
<body onload="message('open','<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['msgEntity']->value;?>
');" class="main-box">
	<!-- Message Box -->
	<div class="container_12">
		
		<div id="msg-box">
			
		</div>
		
	</div>
	<!-- Message Box -->

	<div id="main-box"></div>
	
</body>
</html><?php }} ?>