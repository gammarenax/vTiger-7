<?php /* Smarty version Smarty-3.1.7, created on 2017-10-21 15:46:44
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181637711059eb6be4024eb5-53227764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bf995b04c3c40c2634c9da9ef83f2a4db8b0056' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ListViewHeader.tpl',
      1 => 1508597451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181637711059eb6be4024eb5-53227764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59eb6be408109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb6be408109')) {function content_59eb6be408109($_smarty_tpl) {?>
<div class="pull-right"><a id="deactivate_license_btn" type="button" class="btn btn-danger btn-small" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=License"><?php echo vtranslate('LBL_DEACTIVATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewHeader.tpl',"Vtiger"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>