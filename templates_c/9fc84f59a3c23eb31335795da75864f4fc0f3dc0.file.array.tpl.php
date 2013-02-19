<?php /* Smarty version Smarty-3.1.12, created on 2013-02-18 11:29:30
         compiled from "templates\array.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21167512251b8961d43-15472377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fc84f59a3c23eb31335795da75864f4fc0f3dc0' => 
    array (
      0 => 'templates\\array.tpl',
      1 => 1361204968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21167512251b8961d43-15472377',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_512251b897c776_16508466',
  'variables' => 
  array (
    'countentity' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_512251b897c776_16508466')) {function content_512251b897c776_16508466($_smarty_tpl) {?><html>
<head>
	<title>array</title>
</head>
<body>
	<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int)ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['countentity']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['countentity']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0){
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++){
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
		<label><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</label>
		</br>
	<?php }} ?>

</body>
</html><?php }} ?>