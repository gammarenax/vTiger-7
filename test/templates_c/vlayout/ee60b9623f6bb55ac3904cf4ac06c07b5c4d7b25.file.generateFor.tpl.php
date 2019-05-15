<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:57
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/generateFor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20789665575a0d63702db8a9-67826027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee60b9623f6bb55ac3904cf4ac06c07b5c4d7b25' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/generateFor.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20789665575a0d63702db8a9-67826027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d63702f1f4',
  'variables' => 
  array (
    'generateForOptions' => 0,
    'moduleGroupKey' => 0,
    'moduleGroupOpts' => 0,
    'optionArray' => 0,
    'selectedForOptions' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d63702f1f4')) {function content_5a0d63702f1f4($_smarty_tpl) {?>

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