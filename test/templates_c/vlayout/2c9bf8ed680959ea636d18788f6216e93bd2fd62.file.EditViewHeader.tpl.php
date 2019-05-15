<?php /* Smarty version Smarty-3.1.7, created on 2017-11-16 11:34:59
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/EditViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16742552475a0d77e3595672-05986541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c9bf8ed680959ea636d18788f6216e93bd2fd62' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/EditViewHeader.tpl',
      1 => 1510671596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16742552475a0d77e3595672-05986541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LANG_LABEL' => 0,
    'LANG_PREFIX' => 0,
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
    'GLOBAL_LANG' => 0,
    'NAME' => 0,
    'MODULES' => 0,
    'MOD_NAME' => 0,
    'SETTINGS_MODULES' => 0,
    'S_M_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d77e35da96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d77e35da96')) {function content_5a0d77e35da96($_smarty_tpl) {?>
<div class="container-fluid"><div class="contents row-fluid"><div class="widget_header row-fluid"><span class="widget_header row-fluid span10"><div class="row-fluid"><h3><?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LANG_LABEL']->value;?>
</h3></div></span></div><hr><form><input type="hidden" name="langPrefix" id="langPrefix" value="<?php echo $_smarty_tpl->tpl_vars['LANG_PREFIX']->value;?>
"><table id="selectingLanguage" class="table table-bordered table-condensed"><thead><tr><th colspan="6"><label class="pull-left"><b><?php echo vtranslate("LBL_EDITOR_SETTINGS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th></tr></thead><tbody><tr><td class="medium"><label class="pull-right"><?php echo vtranslate("LBL_PREVIEW_LANG",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td class="medium" style="border-left: none"><select class="select2 span3" id="SelectLanguage" name="SelectLanguage"><option value="none"><?php echo vtranslate("LBL_NONE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==1){?><option value="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
</option><?php }?><?php } ?></select></td><td class="medium" style="border-left: none"><label class="pull-right"><?php echo vtranslate("LBL_MODULE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td class="medium" style="border-left: none"><select class="select2 span3" id="SelectModule" name="SelectModule"><option value="none"><?php echo vtranslate("LBL_SELECT_OPTION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><optgroup style="border: none" label="<?php echo vtranslate('LBL_GLOBAL_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GLOBAL_LANG']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->key => $_smarty_tpl->tpl_vars['NAME']->value){
$_smarty_tpl->tpl_vars['NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['NAME']->key;
?><option value="g_<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['NAME']->value);?>
</option><?php } ?></optgroup><optgroup style="border: none" label="<?php echo vtranslate('LBL_MODULES_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['MOD_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MOD_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MOD_NAME']->key => $_smarty_tpl->tpl_vars['MOD_NAME']->value){
$_smarty_tpl->tpl_vars['MOD_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['MOD_NAME']->key;
?><option value="m_<?php echo $_smarty_tpl->tpl_vars['MOD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MOD_NAME']->value);?>
</option><?php } ?></optgroup><optgroup style="border: none" label="<?php echo vtranslate('LBL_SETTING_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['S_M_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['S_M_NAME']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SETTINGS_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['S_M_NAME']->key => $_smarty_tpl->tpl_vars['S_M_NAME']->value){
$_smarty_tpl->tpl_vars['S_M_NAME']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['S_M_NAME']->key;
?><option value="s_<?php echo $_smarty_tpl->tpl_vars['S_M_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['S_M_NAME']->value);?>
</option><?php } ?></optgroup></select></td></tr><tr><td class="medium"><label class="pull-right"><?php echo vtranslate("LBL_SEARCH_TRANS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td class="medium" style="border-left: none"><div class="row-fluid input-prepend input-append"><input type="text" name="transSearch" id="trans_search"><span class="add-on"><i id="clear_trans_search" class="icon-remove-sign" title="Clear"></i></span></div></td><td class="medium" style="border-left: none"><label class="pull-right"><?php echo vtranslate("LBL_SHOW_MISSING_TRANS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td class="medium" style="border-left: none"><input type="checkbox" name="missingTrans" id="missingTrans"></td></tr></tbody></table></form></div><div class="clearfix"></div><hr><div class="listViewContentDiv" id="listViewContents"><?php }} ?>