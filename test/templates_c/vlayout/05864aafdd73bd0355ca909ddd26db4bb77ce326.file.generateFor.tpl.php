<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:36
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/generateFor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50812731859ba9ebc764399-26627464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05864aafdd73bd0355ca909ddd26db4bb77ce326' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/generateFor.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50812731859ba9ebc764399-26627464',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'generateForOptions' => 0,
    'moduleGroupKey' => 0,
    'moduleGroupOpts' => 0,
    'optionArray' => 0,
    'selectedForOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebc777e6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebc777e6')) {function content_59ba9ebc777e6($_smarty_tpl) {?>

<select name="generate_for" id="generate_for" class="span10 chzn-select row-fluid" multiple style="margin:auto;"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><?php  $_smarty_tpl->tpl_vars['moduleGroupOpts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleGroupOpts']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleGroupKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['generateForOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['moduleGroupOpts']->key => $_smarty_tpl->tpl_vars['moduleGroupOpts']->value){
$_smarty_tpl->tpl_vars['moduleGroupOpts']->_loop = true;
 $_smarty_tpl->tpl_vars['moduleGroupKey']->value = $_smarty_tpl->tpl_vars['moduleGroupOpts']->key;
?><optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['moduleGroupKey']->value,$_smarty_tpl->tpl_vars['moduleGroupKey']->value);?>
"><?php  $_smarty_tpl->tpl_vars['optionArray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optionArray']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['moduleGroupOpts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optionArray']->key => $_smarty_tpl->tpl_vars['optionArray']->value){
$_smarty_tpl->tpl_vars['optionArray']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['optionArray']->value['value'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['optionArray']->value['value'],$_smarty_tpl->tpl_vars['selectedForOptions']->value)){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['optionArray']->value['text'];?>
</option><?php } ?></optgroup><?php } ?></select><?php }} ?>