<?php /* Smarty version Smarty-3.1.7, created on 2017-11-29 12:03:30
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7368532095a1ea2127a5717-43177458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5135bba06f8b91b384455dbc2c9a8245996d1fe0' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step1.tpl',
      1 => 1510671589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7368532095a1ea2127a5717-43177458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TABID' => 0,
    'FIELDID' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'RELATED_MODULES' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a1ea2127dd39',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ea2127dd39')) {function content_5a1ea2127dd39($_smarty_tpl) {?>


<div class="workFlowContents" style="padding-left: 3%;padding-right: 3%"><form class="form-horizontal" id="calculateFields_step1" action="index.php" method="post" name="EditCalculateFields"><input type="hidden" name="module" value="ITS4YouCalculateFields"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step2" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="1" /><input type="hidden" name="for_module" value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" /><input type="hidden" name="for_field" value="<?php echo $_smarty_tpl->tpl_vars['FIELDID']->value;?>
" /><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><label><strong><?php echo vtranslate('LBL_STEP_1',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SELECT_RELATED_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" id="moduleName" name="module_id" required="true" data-placeholder=""><?php if (empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['TABID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['TABID']->value = $_smarty_tpl->tpl_vars['MODULE_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['TABID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['TABID']->value = $_smarty_tpl->tpl_vars['MODULE_NAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['TABID']->value==getTabid($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('from_module'))){?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php }?><?php } ?><?php }?></select></div><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><?php if (empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><input type="text" name="description" class="span5" id="description" /><?php }else{ ?><input type="text" name="description" class="span5" id="description" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('for_desc');?>
"/><?php }?></div></div></div></div><br><div class="pull-right"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form></div><br><?php }} ?>