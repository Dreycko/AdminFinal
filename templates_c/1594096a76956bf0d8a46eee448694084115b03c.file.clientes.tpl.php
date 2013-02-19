<?php /* Smarty version Smarty-3.1.12, created on 2013-01-05 09:56:34
         compiled from "templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3098350e73f79064006-63212349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1594096a76956bf0d8a46eee448694084115b03c' => 
    array (
      0 => 'templates\\clientes.tpl',
      1 => 1357397714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3098350e73f79064006-63212349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50e73f7907a1f9_37606824',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50e73f7907a1f9_37606824')) {function content_50e73f7907a1f9_37606824($_smarty_tpl) {?><html>
<title></title>
<body>

<table border="0" cellspacing="10"><tr><td>

<form action="clientes.php?opcion=agregar" name="agregarpersona" method="post">
<b>company_name:</b> <input type="text" name="company_name" id ="company_name" /><br />

<input type="submit" value="Agregar" />
</form>
</td></tr></table>
</body>
</html><?php }} ?>