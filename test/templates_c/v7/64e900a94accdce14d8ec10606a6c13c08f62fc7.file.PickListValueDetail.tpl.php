<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 17:29:05
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/PickListValueDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:529945215cd311e1604d73-31349344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64e900a94accdce14d8ec10606a6c13c08f62fc7' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/PickListValueDetail.tpl',
      1 => 1557319873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '529945215cd311e1604d73-31349344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
    'SELECTED_PICKLIST_FIELDMODEL' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'QUALIFIED_MODULE' => 0,
    'SELECTED_PICKLISTFIELD_ALL_VALUES' => 0,
    'PICKLIST_VALUES' => 0,
    'PICKLIST_KEY' => 0,
    'PICKLIST_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd311e1649d3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd311e1649d3')) {function content_5cd311e1649d3($_smarty_tpl) {?>

<ul class="nav nav-tabs massEditTabs" style="margin-bottom: 0;border-bottom: 0"><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LANG_INFO']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
 $_smarty_tpl->tpl_vars['LANG_INFO']->index++;
 $_smarty_tpl->tpl_vars['LANG_INFO']->first = $_smarty_tpl->tpl_vars['LANG_INFO']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['LANG']['first'] = $_smarty_tpl->tpl_vars['LANG_INFO']->first;
?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==1){?><li <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['LANG']['first']){?>class="active"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
"><a href="#<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
" data-toggle="tab"><strong><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
</strong></a></li><?php }?><?php } ?></ul><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><br><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LANG_INFO']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
 $_smarty_tpl->tpl_vars['LANG_INFO']->index++;
 $_smarty_tpl->tpl_vars['LANG_INFO']->first = $_smarty_tpl->tpl_vars['LANG_INFO']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['LANG']['first'] = $_smarty_tpl->tpl_vars['LANG_INFO']->first;
?><?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['LANG']['first']){?><div class="tab-pane active" id="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php }else{ ?><div class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php }?><div class="row"><div class="col-lg-8 col-md-8 col-sm-8"><table id="pickListValuesTable" class="table table-bordered" style="table-layout: fixed"><thead><tr class="listViewHeaders"><th style="border-right: none"><?php echo vtranslate($_smarty_tpl->tpl_vars['SELECTED_PICKLIST_FIELDMODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
&nbsp;<?php echo vtranslate('LBL_ITEMS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-left: none"><?php echo vtranslate('LBL_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th></tr></thead><tbody><?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['SELECTED_PICKLISTFIELD_ALL_VALUES']->value, null, 0);?><?php  $_smarty_tpl->tpl_vars['PICKLIST_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->key;
?><tr class="pickListValue" data-key-id="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value;?>
" data-key="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" data-lang="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"data-langtranslate="<?php echo htmlspecialchars(Vtiger_Language_Handler::getLanguageTranslatedString($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value));?>
"><td class="textOverflowEllipsis" style="border-right: none"><?php echo $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value;?>
</td><td style="border-left: none"><input type="text" class="inputElement nameField pickListTranslation" value="<?php echo htmlspecialchars(Vtiger_Language_Handler::getLanguageTranslatedString($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value));?>
"></td></tr><?php } ?></tbody></table></div></div></div><?php } ?></div><?php }} ?>