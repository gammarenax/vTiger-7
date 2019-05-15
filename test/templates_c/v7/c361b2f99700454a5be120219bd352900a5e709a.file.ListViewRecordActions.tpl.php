<?php /* Smarty version Smarty-3.1.7, created on 2019-05-13 11:43:09
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewRecordActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11873264465cd9584de23172-72027758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c361b2f99700454a5be120219bd352900a5e709a' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/PickListDependency/ListViewRecordActions.tpl',
      1 => 1557319874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11873264465cd9584de23172-72027758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'RECORD_SOURCE_MODULE' => 0,
    'RECORD_SOURCE_FIELD' => 0,
    'RECORD_TARGET_FIELD' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd9584de3747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd9584de3747')) {function content_5cd9584de3747($_smarty_tpl) {?>
<div class="table-actions"><?php $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourceModule'), null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('sourcefield'), null, 0);?><?php $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('targetfield'), null, 0);?><span class="fa fa-pencil" onclick="javascript:Settings_PickListDependency_Js.triggerEdit(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span><span class="fa fa-trash-o" onclick="javascript:Settings_PickListDependency_Js.triggerDelete(event, '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_MODULE']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_SOURCE_FIELD']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['RECORD_TARGET_FIELD']->value;?>
')" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span></div><?php }} ?>