<?php /* Smarty version Smarty-3.1.12, created on 2013-01-15 15:06:35
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1408950ed86ab475501-55222406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1358280371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1408950ed86ab475501-55222406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50ed86ab48b3b7_72449510',
  'variables' => 
  array (
    'messagelogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ed86ab48b3b7_72449510')) {function content_50ed86ab48b3b7_72449510($_smarty_tpl) {?><html>
<head>
	<title>Login</title>
	<meta charset="UTF-8" />
	<meta name="Designer" content="PremiumPixels.com">
	<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
	<link rel="stylesheet" type="text/css" href="varios/css/login/reset.css">
	<link rel="stylesheet" type="text/css" href="varios/css/login/structure.css">
</head>

<body>
	<form class="box login" action="businessLayer/login.php" name="login" method="post">

		
		<?php echo $_smarty_tpl->tpl_vars['messagelogin']->value;?>

		<fieldset class="boxBody">
			<label>Username</label>
			<input name='user' type="text" tabindex="1" placeholder="Enter your user" required>
			<label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
			<input name='pass' type="password" tabindex="2" required>
		</fieldset>
		<footer>
			<label><input type="checkbox" tabindex="3">Keep me logged in</label>
			<input type="submit" class="btnLogin" value="Login" tabindex="4">

		</footer>
	</form>
	<footer id="main">

	</footer>
</body>
</html>
<?php }} ?>