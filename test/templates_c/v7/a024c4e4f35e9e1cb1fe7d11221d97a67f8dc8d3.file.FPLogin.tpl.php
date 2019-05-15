<?php /* Smarty version Smarty-3.1.7, created on 2019-03-19 12:34:30
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Users/FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20457901065c90e1d6ae63a8-07922879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a024c4e4f35e9e1cb1fe7d11221d97a67f8dc8d3' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Users/FPLogin.tpl',
      1 => 1523270133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20457901065c90e1d6ae63a8-07922879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'USERNAME' => 0,
    'PASSWORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c90e1d6b6e15',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c90e1d6b6e15')) {function content_5c90e1d6b6e15($_smarty_tpl) {?>





<?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?>
	Error, please retry setting the password!!
<?php }else{ ?>
	<h4>Loading .... </h4>
	<form class="form-horizontal" name="login" id="login" method="post" action="../../../index.php?module=Users&action=Login">
		<input type=hidden name="username" value="<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
" >
		<input type=hidden name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" >
	</form>
	<script type="text/javascript">
		function autoLogin () {
			var form = document.getElementById("login");
			form.submit();
		}
		window.onload = autoLogin;
	</script>
<?php }?><?php }} ?>