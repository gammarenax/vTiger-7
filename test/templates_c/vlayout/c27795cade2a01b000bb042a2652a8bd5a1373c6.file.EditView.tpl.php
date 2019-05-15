<?php /* Smarty version Smarty-3.1.7, created on 2017-10-28 16:07:52
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/VGSMaskedInput/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173366178159f4ab58676799-85616135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c27795cade2a01b000bb042a2652a8bd5a1373c6' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/VGSMaskedInput/EditView.tpl',
      1 => 1509206746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173366178159f4ab58676799-85616135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_ID' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
    'MODULES' => 0,
    'module_id' => 0,
    'RECORD_MODEL' => 0,
    'module_label' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59f4ab588edfe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f4ab588edfe')) {function content_59f4ab588edfe($_smarty_tpl) {?><div class="modal"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><h3><?php echo vtranslate('LBL_EDIT_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ADD_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }?></div><form class="form-horizontal" id="maskeditor" method="POST"><div class="modal-body configContent"><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" name="fieldid" id="fieldid"/><?php }?><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_SELECT_MODULENAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><select class='chzn-select moduleName' id='moduleName' name='moduleName' onchange='Settings_VGSMaskedInput_List_Js.loadFields();' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option value=''>Select module</option><?php  $_smarty_tpl->tpl_vars['module_label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_label']->_loop = false;
 $_smarty_tpl->tpl_vars['module_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_label']->key => $_smarty_tpl->tpl_vars['module_label']->value){
$_smarty_tpl->tpl_vars['module_label']->_loop = true;
 $_smarty_tpl->tpl_vars['module_id']->value = $_smarty_tpl->tpl_vars['module_label']->key;
?><option value='<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('tabid')==$_smarty_tpl->tpl_vars['module_id']->value){?>selected='selected'<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['module_label']->value);?>
</option><?php } ?></select></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><select class='fieldName' id='fieldName' name='fieldName' data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option value=''>Select field</option><?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('fieldid')!=''){?><option value='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("fieldid");?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("fieldlabel");?>
</option><?php }?></select></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><input type="text" placeholder="(999)-999-9999" name="maskinfo" class="span3" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('maskinfo');?>
" mandatory='true' /></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_ENABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><input type="checkbox" name="enabled" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("enabled")=='1'){?>checked='checked'<?php }?>/></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>