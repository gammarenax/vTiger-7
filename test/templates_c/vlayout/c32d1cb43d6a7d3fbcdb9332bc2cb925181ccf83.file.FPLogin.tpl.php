<?php /* Smarty version Smarty-3.1.7, created on 2018-01-17 09:14:25
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Users/FPLogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12646693615a5f13f103b865-16442472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32d1cb43d6a7d3fbcdb9332bc2cb925181ccf83' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Users/FPLogin.tpl',
      1 => 1510670575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12646693615a5f13f103b865-16442472',
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
  'unifunc' => 'content_5a5f13f1072b5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5f13f1072b5')) {function content_5a5f13f1072b5($_smarty_tpl) {?>
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