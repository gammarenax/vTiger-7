<?php /* Smarty version Smarty-3.1.7, created on 2017-11-29 12:03:24
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6639359115a1ea20c613fc5-53784302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e03bab11fd4905a012d54625c0680bfabb28f6b6' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewContent.tpl',
      1 => 1510671588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6639359115a1ea20c613fc5-53784302',
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
  'unifunc' => 'content_5a1ea20c67100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ea20c67100')) {function content_5a1ea20c67100($_smarty_tpl) {?>

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