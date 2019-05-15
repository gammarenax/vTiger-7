<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:27
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/generateFor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19277817905cdac72b0986a6-01661675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2cccbc19f1160b376996aaa9d56b29264aa5303' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/generateFor.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19277817905cdac72b0986a6-01661675',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'generateForOptionsArray' => 0,
    'moduleGroupKey' => 0,
    'moduleGroupOpts' => 0,
    'optionArray' => 0,
    'selectedForOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cdac72b0a29a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72b0a29a')) {function content_5cdac72b0a29a($_smarty_tpl) {?>


<select multiple class="select2 col-lg-12 inputElement" id='generate_for' name='generate_for' data-rule-required="false" ><?php  $_smarty_tpl->tpl_vars['moduleGroupOpts'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['moduleGroupOpts']->_loop = false;
 $_smarty_tpl->tpl_vars['moduleGroupKey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['generateForOptionsArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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