<?php /* Smarty version Smarty-3.1.7, created on 2017-09-11 06:06:27
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Project/ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149605431159b627e3bc6997-94699325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae19babfac493a2fe601fa09471c05d9796ce0fd' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Project/ModuleSummaryView.tpl',
      1 => 1504548099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149605431159b627e3bc6997-94699325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'SUMMARY_INFORMATION' => 0,
    'SUMMARY_CATEGORY' => 0,
    'FIELD_NAME' => 0,
    'FIELD_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59b627e3bfa20',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b627e3bfa20')) {function content_59b627e3bfa20($_smarty_tpl) {?>
<div class="recordDetails"><div><h4> <?php echo vtranslate('LBL_RECORD_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
	</h4><hr></div><?php  $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY_INFORMATION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->key => $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value){
$_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->_loop = true;
?><div class="row-fluid textAlignCenter roundedCorners"><?php  $_smarty_tpl->tpl_vars['FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY_CATEGORY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['FIELD_VALUE']->value){
$_smarty_tpl->tpl_vars['FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_VALUE']->key;
?><span class="well squeezedWell span3"><div><label class="font-x-small"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</label></div><div><label class="font-x-x-large"><?php if (!empty($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)){?><?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
<?php }else{ ?>0<?php }?></label></div></span><?php } ?></div><?php } ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>