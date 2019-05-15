<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 12:22:32
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2305614895a706388425577-68076737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21f59c3c72804950bb84c21459c2c236153c0eee' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step1.tpl',
      1 => 1510671595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2305614895a706388425577-68076737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HIDE' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORDID' => 0,
    'MODE' => 0,
    'MODULE_MODEL' => 0,
    'ALL_MODULES' => 0,
    'SELECTED_MODULE' => 0,
    'DESCRIPTION' => 0,
    'FALLOWS_UP_OPTIONS' => 0,
    'FOLLOWS_UP' => 0,
    'FALLOWS_UP_OPTION' => 0,
    'SHOW_POPUP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a7063884c596',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7063884c596')) {function content_5a7063884c596($_smarty_tpl) {?>
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step1" class="form-horizontal <?php if ($_smarty_tpl->tpl_vars['HIDE']->value=="yes"){?>hide<?php }?>"><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditSteps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="span6"><div class="pull-right" style="padding-top:10px;"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div><input type="hidden" name="module" value="ITS4YouDynamicFields"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="actual_step" value="1" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><label><strong><?php echo vtranslate('LBL_STEP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo vtranslate('LBL_STEP_1_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'){?><input type='text' disabled='disabled' value="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
" ><input type='hidden' name='module_name' value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name');?>
" ><?php }else{ ?><select class="chzn-select" id="moduleName" name="module_name" required="true" data-placeholder="Select Module..."><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TABID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TABID']->value = $_smarty_tpl->tpl_vars['MODULE_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value==$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName()){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getName());?>
</option><?php } ?></select><?php }?></div></div><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="controls"><input type="text" name="description" class="span5" data-validation-engine='validate[required]' value="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
" id="description" /></div></div><?php if ($_smarty_tpl->tpl_vars['FALLOWS_UP_OPTIONS']->value!=''){?><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_FOLLOWS_UP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select span10" id="followsup" name="followsup"><option value="" <?php if ($_smarty_tpl->tpl_vars['FOLLOWS_UP']->value==''){?> selected <?php }?>>&nbsp;</option><?php  $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->key => $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->value){
$_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->value['id']==$_smarty_tpl->tpl_vars['FOLLOWS_UP']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->value['leftpadding'];?>
<?php echo $_smarty_tpl->tpl_vars['FALLOWS_UP_OPTION']->value['description'];?>
</option><?php } ?></select></div></div><?php }?><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SHOW_POPUP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><input type="checkbox" name="show_popup" value="1" id="description" <?php if ($_smarty_tpl->tpl_vars['SHOW_POPUP']->value=="1"){?>checked<?php }?>/></div></div></div><br><div class="pull-right"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form><?php }} ?>