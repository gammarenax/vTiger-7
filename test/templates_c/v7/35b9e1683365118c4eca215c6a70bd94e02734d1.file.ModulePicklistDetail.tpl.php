<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:24:58
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/ModulePicklistDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6913841605cb44dea399c25-53872238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b9e1683365118c4eca215c6a70bd94e02734d1' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/ModulePicklistDetail.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6913841605cb44dea399c25-53872238',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NO_PICKLIST_FIELDS' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'QUALIFIED_NAME' => 0,
    'QUALIFIED_MODULE' => 0,
    'PICKLIST_FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'DEFAULT_FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb44dea3b48f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44dea3b48f')) {function content_5cb44dea3b48f($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)){?><label style="padding-top: 40px;"><b><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
 <?php echo vtranslate('NO_PICKLIST_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_NAME']->value);?>
. &nbsp;</b></label><?php }else{ ?><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="fieldLabel"><strong><?php echo vtranslate('LBL_SELECT_PICKLIST_IN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label></div><div class="col-sm-3 col-xs-3 fieldValue"><select class="select2 inputElement" id="modulePickList" name="modulePickList"><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_FIELD']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['DEFAULT_FIELD']->value==$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option><?php } ?></select></div></div><?php }?><?php }} ?>