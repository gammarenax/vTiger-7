<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:32:15
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/EditViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17988367895cb44f9fb20708-23370456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9069e1db8904fd988235ea118eb860437595a71' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/EditViewHeader.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17988367895cb44f9fb20708-23370456',
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
  'unifunc' => 'content_5cb44f9fb5f8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44f9fb5f8d')) {function content_5cb44f9fb5f8d($_smarty_tpl) {?>
<div class="container-fluid"><div class="row"><div class="col-xs-12 col-sm-12 col-lg-6"><h4><?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LANG_LABEL']->value;?>
</h4></div></div><hr><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><form><input type="hidden" name="langPrefix" id="langPrefix" value="<?php echo $_smarty_tpl->tpl_vars['LANG_PREFIX']->value;?>
"><table id="selectingLanguage" class="table table-bordered table-responsive table-condensed table"><thead class="tableHeader"><tr><th colspan="6"><labelclass="pull-left"><b><?php echo vtranslate("LBL_EDITOR_SETTINGS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th></tr></thead><tbody><tr><td style="vertical-align: middle"><label class="pull-right"><?php echo vtranslate("LBL_PREVIEW_LANG",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td><select class="select2 inputElement" id="SelectLanguage" name="SelectLanguage"><option value="none"><?php echo vtranslate("LBL_NONE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==1){?><option value="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
</option><?php }?><?php } ?></select></td><td style="vertical-align: middle"><label class="pull-right"><?php echo vtranslate("LBL_MODULE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td><select class="select2 inputElement" id="SelectModule" name="SelectModule"><option value="none"><?php echo vtranslate("LBL_SELECT_OPTION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
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
</option><?php } ?></optgroup></select></td></tr><tr><td style="vertical-align: middle"><label class="pull-right"><?php echo vtranslate("LBL_SEARCH_TRANS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td><div class="input-group"><input type="text" name="transSearch" id="trans_search" class="inputElement"><span class="input-group-addon"><i id="clear_trans_search" class="fa fa-times" title="Clear"></i></span></div></td><td style="vertical-align: middle"><label class="pull-right"><?php echo vtranslate("LBL_SHOW_MISSING_TRANS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</label></td><td style="vertical-align: middle"><input type="checkbox" name="missingTrans" id="missingTrans" class="inputElement"></td></tr></tbody></table></form></div></div><div class="clearfix"></div><hr><div class="listViewContentDiv" id="listViewContents"><?php }} ?>