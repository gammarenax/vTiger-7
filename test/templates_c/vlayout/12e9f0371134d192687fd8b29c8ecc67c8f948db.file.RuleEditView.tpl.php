<?php /* Smarty version Smarty-3.1.7, created on 2018-08-27 07:15:27
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/RuleEditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18852643925b83a50f3bd067-31218822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12e9f0371134d192687fd8b29c8ecc67c8f948db' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/RuleEditView.tpl',
      1 => 1510671605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18852643925b83a50f3bd067-31218822',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE_NAME' => 0,
    'SCANNER_ID' => 0,
    'RECORD_ID' => 0,
    'MODULE_MODEL' => 0,
    'FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_DATA_TYPE' => 0,
    'FIELD_NAME' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_KEY' => 0,
    'RECORD_MODEL' => 0,
    'PICKLIST_VALUE' => 0,
    'RADIO_OPTIONS' => 0,
    'RADIO_NAME' => 0,
    'RADIO_VALUE' => 0,
    'USER_MODEL' => 0,
    'USERS' => 0,
    'OWNER_ID' => 0,
    'OWNER_NAME' => 0,
    'ASSIGNED_USER' => 0,
    'GROUPS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b83a50f47360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b83a50f47360')) {function content_5b83a50f47360($_smarty_tpl) {?>
<div class='modelContainer'><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_ADD_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><form class="form-horizontal" id="ruleSave" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="SaveRule" /><input type="hidden" name="scannerId" value="<?php echo $_smarty_tpl->tpl_vars['SCANNER_ID']->value;?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><div class="modal-body tabbable"><?php $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getSetupRuleFiels(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><div class="control-group"><div class="control-label"><label><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="controls"><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='picklist'){?><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPickListValues(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='subject'){?><select name="subjectop" class="chzn-select" style="min-width:220px"><option value=""><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('subjectop')==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select>&nbsp;&nbsp;<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
" /><?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='body'){?><select name="bodyop" class="chzn-select" style="min-width:220px"><option value="" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('bodyop')==''){?>selected<?php }?>><?php echo vtranslate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('bodyop')==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select>&nbsp;&nbsp;<br><br><textarea name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
</textarea><?php }else{ ?><select id="actions" name="action1" class="select2" style="min-width:220px"><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)==$_smarty_tpl->tpl_vars['PICKLIST_KEY']->value){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</option><?php } ?></select><?php }?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='radio'){?><?php $_smarty_tpl->tpl_vars['RADIO_OPTIONS'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getRadioOptions(), null, 0);?><?php  $_smarty_tpl->tpl_vars['RADIO_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RADIO_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['RADIO_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RADIO_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RADIO_VALUE']->key => $_smarty_tpl->tpl_vars['RADIO_VALUE']->value){
$_smarty_tpl->tpl_vars['RADIO_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['RADIO_NAME']->value = $_smarty_tpl->tpl_vars['RADIO_VALUE']->key;
?><label class="radio inline"><input class="radio" type="radio" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RADIO_NAME']->value;?>
"<?php if (empty($_smarty_tpl->tpl_vars['RECORD_ID']->value)&&($_smarty_tpl->tpl_vars['RADIO_NAME']->value=='AND')){?> checked="" <?php }?> <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)==$_smarty_tpl->tpl_vars['RADIO_NAME']->value){?> checked <?php }?> /><?php echo $_smarty_tpl->tpl_vars['RADIO_VALUE']->value;?>
</label><?php } ?><?php }elseif($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='email'){?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
" data-validation-engine="validate[funcCall[Vtiger_Email_Validator_Js.invokeValidation]]"/><?php }else{ ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
"/><?php }?></div></div><?php } ?><div style="" id="assignedToBlock" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('action')=='UPDATE_HelpDesk_SUBJECT'){?>class="hide"<?php }?>><div class="control-label"><label><?php echo vtranslate('Assigned To');?>
</label></div><div class="controls"><select class="select2-container select2" id="assignedTo" name="assignedTo" style="width: 49%;"><optgroup label="<?php echo vtranslate('LBL_USERS');?>
"><?php $_smarty_tpl->tpl_vars['USERS'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleUsersForModule($_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['ASSIGNED_USER']->value==$_smarty_tpl->tpl_vars['OWNER_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup><optgroup label="<?php echo vtranslate('LBL_GROUPS');?>
"><?php $_smarty_tpl->tpl_vars['GROUPS'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->getAccessibleGroups(), null, 0);?><?php  $_smarty_tpl->tpl_vars['OWNER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['OWNER_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GROUPS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OWNER_NAME']->key => $_smarty_tpl->tpl_vars['OWNER_NAME']->value){
$_smarty_tpl->tpl_vars['OWNER_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['OWNER_ID']->value = $_smarty_tpl->tpl_vars['OWNER_NAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
" data-picklistvalue= '<?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['ASSIGNED_USER']->value==$_smarty_tpl->tpl_vars['OWNER_ID']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['OWNER_NAME']->value;?>
</option><?php } ?></optgroup></select></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div>
<?php }} ?>