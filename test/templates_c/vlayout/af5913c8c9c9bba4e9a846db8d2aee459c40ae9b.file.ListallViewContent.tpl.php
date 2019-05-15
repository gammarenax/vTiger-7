<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:07:04
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113864664559bbec98f2f895-69409981%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5913c8c9c9bba4e9a846db8d2aee459c40ae9b' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewContent.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113864664559bbec98f2f895-69409981',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEWHEADERS' => 0,
    'NAME' => 0,
    'CALCULATEFIELDS' => 0,
    'FIELD' => 0,
    'TABID' => 0,
    'FIELD_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbec9901975',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbec9901975')) {function content_59bbec9901975($_smarty_tpl) {?>

<div class="listViewContentDiv"><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php  $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEWHEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->key => $_smarty_tpl->tpl_vars['NAME']->value){
$_smarty_tpl->tpl_vars['NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['NAME']->key;
?><th class="medium"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</th><?php } ?><th></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATEFIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->key => $_smarty_tpl->tpl_vars['FIELD']->value){
$_smarty_tpl->tpl_vars['FIELD']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['FIELD']->key;
?><?php $_smarty_tpl->tpl_vars['TABID'] = new Smarty_variable(getTabid($_smarty_tpl->tpl_vars['FIELD']->value['for_module']), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_ID'] = new Smarty_variable(Settings_ITS4YouCalculateFields_Record_Model::getFieldId($_smarty_tpl->tpl_vars['TABID']->value,$_smarty_tpl->tpl_vars['FIELD']->value['for_field']), null, 0);?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
" data-fieldid="<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
" data-recordUrl='index.php?module=ITS4YouCalculateFields&parent=Settings&view=Edit&fieldid=<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
&tabid=<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
'><td class="listViewEntryValue medium" nowrap=""><?php echo $_smarty_tpl->tpl_vars['FIELD']->value['for_desc'];?>
</td><td class="listViewEntryValue medium" nowrap=""><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value['for_module']);?>
</td><td class="listViewEntryValue medium" nowrap=""><?php echo Settings_ITS4YouCalculateFields_Record_Model::getFieldLabel(getTabid($_smarty_tpl->tpl_vars['FIELD']->value['for_module']),$_smarty_tpl->tpl_vars['FIELD']->value['for_field']);?>
</td><td class="listViewEntryValue medium" nowrap=""><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value['from_module']);?>
</td><td class="listViewEntryValue medium" nowrap=""><?php echo Settings_ITS4YouCalculateFields_Record_Model::getFieldLabel(getTabid($_smarty_tpl->tpl_vars['FIELD']->value['from_module']),$_smarty_tpl->tpl_vars['FIELD']->value['from_field']);?>
</td><td class="listViewEntryValue medium" nowrap=""><?php echo ucfirst($_smarty_tpl->tpl_vars['FIELD']->value['operation']);?>
</td><td class="medium" style="border-left: none"><div class="actions pull-right"><span class="actionImages"><a href="index.php?module=ITS4YouCalculateFields&parent=Settings&view=Edit&fieldid=<?php echo $_smarty_tpl->tpl_vars['FIELD_ID']->value;?>
&tabid=<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><i class="icon-pencil alignMiddle" title="Edit"></i></a>&nbsp;<a class="deleteRecordButton"><i class="icon-trash alignMiddle" id="deleteCalcField" title="Delete"></i></a></span></div></td></tr><?php } ?></tbody></table></div></div><?php }} ?>