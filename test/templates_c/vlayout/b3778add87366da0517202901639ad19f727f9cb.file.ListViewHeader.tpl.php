<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 10:04:02
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20125489995a5dce129ebe70-89186078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3778add87366da0517202901639ad19f727f9cb' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ListViewHeader.tpl',
      1 => 1510670508,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20125489995a5dce129ebe70-89186078',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5dce12a0609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5dce12a0609')) {function content_5a5dce12a0609($_smarty_tpl) {?>
<div class="pull-right"><a id="deactivate_license_btn" type="button" class="btn btn-danger btn-small" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=License"><?php echo vtranslate('LBL_DEACTIVATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewHeader.tpl',"Vtiger"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>