<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:38:02
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8337962745c87c44ae48910-33869749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd64813546c1bcce8da9cd71492d29c9bd702290e' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1552392682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8337962745c87c44ae48910-33869749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87c44ae54da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87c44ae54da')) {function content_5c87c44ae54da($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>