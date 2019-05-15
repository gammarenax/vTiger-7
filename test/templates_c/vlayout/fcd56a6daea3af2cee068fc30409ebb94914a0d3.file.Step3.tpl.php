<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:11:10
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:172694165559bbed8e728e69-06485034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd56a6daea3af2cee068fc30409ebb94914a0d3' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step3.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172694165559bbed8e728e69-06485034',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'FOR_FIELD' => 0,
    'FROM_MODULE' => 0,
    'DESCRIPTION' => 0,
    'CVID' => 0,
    'RECORD_MODEL' => 0,
    'QUALIFIED_MODULE' => 0,
    'COLUMNS' => 0,
    'FIELD_ID' => 0,
    'FIELD_LABEL' => 0,
    'OPERATIONS' => 0,
    'OPERATION_KEY' => 0,
    'OPERATION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbed8e77384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbed8e77384')) {function content_59bbed8e77384($_smarty_tpl) {?>
<form name="EditCalculateFields"  method="post" id="calculateFields_step3" class="form-horizontal"><input type="hidden" name="module" value="ITS4YouCalculateFields"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Save"><input type="hidden" name="mode" value="Step3" /><input type="hidden" class="step" value="3" /><input type="hidden" name="for_module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="for_field" value="<?php echo $_smarty_tpl->tpl_vars['FOR_FIELD']->value;?>
" /><input type="hidden" name="from_module" value="<?php echo $_smarty_tpl->tpl_vars['FROM_MODULE']->value;?>
" /><input type="hidden" name="description" value="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
" /><input type="hidden" name="cvid" value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" /><input type="hidden" name="conditions" id="advanced_filter2" value="" /><?php if (!empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><input type="hidden" name="calculatefields_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('calculatefields_id');?>
"><?php }?><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><label><strong><?php echo vtranslate('LBL_STEP_3',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_COLUMN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" id="column" name="column" required="true" data-placeholder=""><?php if (empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['COLUMNS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL']->value;?>
</option><?php } ?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['COLUMNS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_ID']->value = $_smarty_tpl->tpl_vars['FIELD_LABEL']->key;
?><?php if ($_smarty_tpl->tpl_vars['FIELD_ID']->value==Settings_ITS4YouCalculateFields_Record_Model::getFieldId(getTabid($_smarty_tpl->tpl_vars['FROM_MODULE']->value),$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('from_field'))){?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL']->value;?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['FIELD_LABEL']->value;?>
</option><?php }?><?php } ?><?php }?></select></div></div><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SELECT_OPERATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" id="operation" name="operation" required="true"><?php if (empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php  $_smarty_tpl->tpl_vars['OPERATION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OPERATION']->_loop = false;
 $_smarty_tpl->tpl_vars['OPERATION_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OPERATIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OPERATION']->key => $_smarty_tpl->tpl_vars['OPERATION']->value){
$_smarty_tpl->tpl_vars['OPERATION']->_loop = true;
 $_smarty_tpl->tpl_vars['OPERATION_KEY']->value = $_smarty_tpl->tpl_vars['OPERATION']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OPERATION_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OPERATION']->value;?>
</option><?php } ?><?php }elseif(!empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php  $_smarty_tpl->tpl_vars['OPERATION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OPERATION']->_loop = false;
 $_smarty_tpl->tpl_vars['OPERATION_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['OPERATIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OPERATION']->key => $_smarty_tpl->tpl_vars['OPERATION']->value){
$_smarty_tpl->tpl_vars['OPERATION']->_loop = true;
 $_smarty_tpl->tpl_vars['OPERATION_KEY']->value = $_smarty_tpl->tpl_vars['OPERATION']->key;
?><?php if ($_smarty_tpl->tpl_vars['OPERATION_KEY']->value==$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('operation')){?><option value="<?php echo $_smarty_tpl->tpl_vars['OPERATION_KEY']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['OPERATION']->value;?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['OPERATION_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['OPERATION']->value;?>
</option><?php }?><?php } ?><?php }?></select></div></div></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="step3submit" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form><?php }} ?>