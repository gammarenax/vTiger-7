<?php /* Smarty version Smarty-3.1.7, created on 2017-09-05 13:29:20
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Import/ImportDetails.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141190541959aea6b01061f7-75309896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c23cae8217a75432ce7d0a527e26fea102e6b000' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Import/ImportDetails.tpl',
      1 => 1504548055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141190541959aea6b01061f7-75309896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TYPE' => 0,
    'MODULE' => 0,
    'IMPORT_RECORDS' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER_NAME' => 0,
    'IMPORT_RESULT_DATA' => 0,
    'RECORD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59aea6b017f0f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59aea6b017f0f')) {function content_59aea6b017f0f($_smarty_tpl) {?>
<div class="popupEntriesDiv textAlignCenter"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS'] = new Smarty_variable($_smarty_tpl->tpl_vars['IMPORT_RECORDS']->value['headers'], null, 0);?><?php $_smarty_tpl->tpl_vars['IMPORT_RESULT_DATA'] = new Smarty_variable($_smarty_tpl->tpl_vars['IMPORT_RECORDS']->value[$_smarty_tpl->tpl_vars['TYPE']->value], null, 0);?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = true;
?><th><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value;?>
</th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMPORT_RESULT_DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->key => $_smarty_tpl->tpl_vars['RECORD']->value){
$_smarty_tpl->tpl_vars['RECORD']->_loop = true;
?><tr class="listViewEntries"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->_loop = true;
?><td><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADER_NAME']->value);?>
</td><?php } ?></tr><?php } ?></table><?php }} ?>