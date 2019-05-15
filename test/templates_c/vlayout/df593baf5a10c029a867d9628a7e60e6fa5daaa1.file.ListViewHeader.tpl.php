<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:09:54
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26034565059bbed42ad7b53-85456316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df593baf5a10c029a867d9628a7e60e6fa5daaa1' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListViewHeader.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26034565059bbed42ad7b53-85456316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULES_FOR_CALCULATEFIELDS' => 0,
    'SELECTED_TABID' => 0,
    'MODULE_ID' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbed42afae3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbed42afae3')) {function content_59bbed42afae3($_smarty_tpl) {?>
<div class="container-fluid"><div class="contents row-fluid"><div class="row-fluid paddingTop20"><div class="span8"><h3><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><span class="span4"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><hr><div class="row-fluid"><div class="span12"><form name="entityModule" id="entityMod" method="POST"  class="form-horizontal"><table id="chooseYourModul" class="table table-bordered"><thead><tr><th class="medium" style="width: 40%"><?php echo vtranslate('LBL_WELCOME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-left: none"></th></tr></thead><tbody><tr><td class="medium"><label class="pull-right marginRight10px"><b><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</b></label></td><td class="fieldValue medium" style="border-left: none"><span class="pull-left"><select name="module" id="ModName" class="chzn-select"><option value="-1"><?php echo vtranslate('LBL_CHOOSE_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES_FOR_CALCULATEFIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_ID']->value = $_smarty_tpl->tpl_vars['MODULE_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['SELECTED_TABID']->value==$_smarty_tpl->tpl_vars['MODULE_ID']->value){?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_ID']->value;?>
" selected=""><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }?><?php } ?></select></span></td></tr></tbody></table></form></div></div></div><div class="clearfix"></div><br><hr><div class="listViewContentDiv" id="listViewContents">

<?php }} ?>