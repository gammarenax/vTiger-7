<?php /* Smarty version Smarty-3.1.7, created on 2018-01-29 10:40:30
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19378067725a6efa1e0ebad1-21636865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a36c5ed5f2f36e0a91ca1e25478c23f211bc9a' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListViewContent.tpl',
      1 => 1510671589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19378067725a6efa1e0ebad1-21636865',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_MODULE_NAME' => 0,
    'TABID' => 0,
    'QUALIFIED_MODULE' => 0,
    'ISEMPTY' => 0,
    'CALCULATEFIELDSLABELS' => 0,
    'FIELD_ID' => 0,
    'FIELD_LABEL' => 0,
    'RECORD_MODEL' => 0,
    'ADD_SUPPORTED_FIELD_TYPES' => 0,
    'FIELD_TYPE' => 0,
    'FIELD_TYPE_INFO' => 0,
    'TYPE_INFO' => 0,
    'TYPE_INFO_VALUE' => 0,
    'BLOCKS' => 0,
    'BLOCK_MODEL' => 0,
    'BLOCK_ID' => 0,
    'BLOCK_LABEL_KEY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a6efa1e1462f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a6efa1e1462f')) {function content_5a6efa1e1462f($_smarty_tpl) {?>
<div class="row-fluid"><input id="selectedModuleName" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
" /><input id="tabid" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" /><table id="CalculateFieldsLabels" class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th class="medium"><?php echo vtranslate('LBL_SELECT_CALCULATE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-left: none"><?php if ($_smarty_tpl->tpl_vars['ISEMPTY']->value!=0){?><button class="btn addCustomField pull-right" type="button"><strong><?php echo vtranslate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }?></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATEFIELDSLABELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" data-fieldid="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
" data-recordUrl='index.php?module=ITS4YouCalculateFields&parent=Settings&view=Edit&fieldid=<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
&tabid=<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
'><td class="medium"><?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL']->value;?>
</td><td class="medium" style="border-left: none"><div class="actions pull-right"><span class="actionImages"><a href="index.php?module=ITS4YouCalculateFields&parent=Settings&view=Edit&fieldid=<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
&tabid=<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><i class="icon-pencil alignMiddle" title="Edit"></i></a><?php $_smarty_tpl->tpl_vars["RECORD_MODEL"] = new Smarty_variable(Settings_ITS4YouCalculateFields_Record_Model::getInstanceByTabIdAndFieldId($_smarty_tpl->tpl_vars['TABID']->value,$_smarty_tpl->tpl_vars['FIELD_ID']->value), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><a class="deleteRecordButton"><i class="icon-trash alignMiddle" id="deleteCalcField" title="Delete"></i></a><?php }?></span></div></td></tr><?php } ?></tbody></table><div class="modal createFieldModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_CREATE_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal createCustomFieldForm" method="POST"><div class="modal-body"><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_SELECT_FIELD_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><select class="fieldTypesList span7" name="fieldType"><option value="no"><?php echo vtranslate('LBL_CHOOSE_FIELDTYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['FIELD_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ADD_SUPPORTED_FIELD_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_TYPE']->key => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value){
$_smarty_tpl->tpl_vars['FIELD_TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
"<?php  $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['TYPE_INFO'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELD_TYPE_INFO']->value[$_smarty_tpl->tpl_vars['FIELD_TYPE']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->key => $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value){
$_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['TYPE_INFO']->value = $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->key;
?>data-<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['TYPE_INFO_VALUE']->value;?>
"<?php } ?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_TYPE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></select></span></div></div><div class="control-group hide" id="blocksS"><span class="control-label"><?php echo vtranslate('LBL_BLOCKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><select class="bloksList span6" name="bloks"><?php  $_smarty_tpl->tpl_vars['BLOCK_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCKS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_MODEL']->key => $_smarty_tpl->tpl_vars['BLOCK_MODEL']->value){
$_smarty_tpl->tpl_vars['BLOCK_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value = $_smarty_tpl->tpl_vars['BLOCK_MODEL']->key;
?><?php $_smarty_tpl->tpl_vars['BLOCK_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['BLOCK_MODEL']->value->get('id'), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_ID']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL_KEY']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php } ?></select></span></div></div><div class="control-group hide" id="fieldLabel"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" maxlength="50" name="fieldLabel" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'FieldLabel')));?>
 /></div></div><div class="control-group supportedType lengthsupported hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LENGTH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="fieldLength" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group supportedType decimalsupported hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_DECIMALS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><input type="text" name="decimal" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></div></div><div class="control-group supportedType preDefinedValueExists hide"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><div class="row-fluid"><input type="hidden" id="picklistUi" class="span7 select2" name="pickListValues"placeholder="<?php echo vtranslate('LBL_ENTER_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-validator=<?php echo Zend_Json::encode(array(array('name'=>'PicklistFieldValues')));?>
 /></div></div></div><div class="control-group supportedType picklistOption hide"><span class="control-label">&nbsp;</span><div class="controls"><label class="checkbox span3" style="margin-left: 0px;"><input type="checkbox" class="checkbox" name="isRoleBasedPickList" value="1" >&nbsp;<?php echo vtranslate('LBL_ROLE_BASED_PICKLIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div></div><?php }} ?>