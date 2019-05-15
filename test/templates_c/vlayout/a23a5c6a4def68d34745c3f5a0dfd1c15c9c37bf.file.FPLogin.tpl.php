<?php /* Smarty version Smarty-3.1.7, created on 2017-10-05 08:55:36
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Users/FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:62636801659d5f388291c40-78740679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a23a5c6a4def68d34745c3f5a0dfd1c15c9c37bf' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Users/FPLogin.tpl',
      1 => 1504540955,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62636801659d5f388291c40-78740679',
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
  'unifunc' => 'content_59d5f3882a1a7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d5f3882a1a7')) {function content_59d5f3882a1a7($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?> 
    Error, please retry setting the password!! 
<?php }else{ ?> 
<h4>Loading .... </h4>
<form class="form-horizontal" name="login" id="login" method="post" action="../../../index.php?module=Users&action=Login&mode=reset">
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