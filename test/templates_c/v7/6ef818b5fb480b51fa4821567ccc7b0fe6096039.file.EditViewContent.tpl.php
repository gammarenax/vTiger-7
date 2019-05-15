<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:32:15
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/EditViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15797542365cb44f9fb6a8a2-52597993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ef818b5fb480b51fa4821567ccc7b0fe6096039' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/EditViewContent.tpl',
      1 => 1555320055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15797542365cb44f9fb6a8a2-52597993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'FINALLY_PREFIX' => 0,
    'NONE_MODULE' => 0,
    'FILE_WRITEABLE' => 0,
    'FILE_EXIST' => 0,
    'FILEDIR_WRITEABLE' => 0,
    'QUALIFIED_MODULE' => 0,
    'PREVIEW_LANG' => 0,
    'PREVIEW_LANG_PREF' => 0,
    'LANG_PREF' => 0,
    'WIDTH' => 0,
    'SEARCH_ARRAYS' => 0,
    'SEARCH_VALUE' => 0,
    'MODE' => 0,
    'LANG_KEYS' => 0,
    'JS_LANG_KEYS' => 0,
    'ALL_LANG_KEYS' => 0,
    'ALL_JSLANG_KEYS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb44f9fbc8c8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb44f9fbc8c8')) {function content_5cb44f9fbc8c8($_smarty_tpl) {?>

<input type="hidden" name="for_module_name" id="for_module_name" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"><input type="hidden" name="finally_prefix" id="finally_prefix" value="<?php echo $_smarty_tpl->tpl_vars['FINALLY_PREFIX']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['NONE_MODULE']->value!='none'){?><?php if ($_smarty_tpl->tpl_vars['FILE_WRITEABLE']->value=='false'||$_smarty_tpl->tpl_vars['FILE_EXIST']->value=="dontExist"){?><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignCenter"><span class="lead"><?php if ($_smarty_tpl->tpl_vars['FILEDIR_WRITEABLE']->value=="false"){?><?php echo vtranslate('LBL_DIR_NOT_WRITABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_NO_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></span>&nbsp;</div></div><?php }else{ ?><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignLeft"><button class="btn addButton addNewTranslation"><span class="glyphicon glyphicon-plus"></span>&nbsp;<strong><?php echo vtranslate('LBL_ADD_NEW_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><br><br><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><table class="table table-nobordered table-condensed"><thead><tr><?php if ($_smarty_tpl->tpl_vars['PREVIEW_LANG']->value!='none'){?><?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-sm-3", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-sm-4", null, 0);?><?php }?><th class="col-sm-2"><label><b><?php echo vtranslate('LBL_LANG_VAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th><th class="col-sm-2"><label><b><?php echo vtranslate('LBL_EN_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th><?php if ($_smarty_tpl->tpl_vars['PREVIEW_LANG']->value!='none'){?><th class="col-sm-2"><label><b><?php echo vtranslate('LBL_PREVIEW_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_PREF']->value;?>
)</b></label></th><?php }?><th class="col-sm-2"><label><b><?php echo vtranslate('LBL_CURRENT_TRANSL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
)</b></label></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
"><label><b><?php echo vtranslate('LBL_NEW_TRANSL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
(<?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
)</b></label></th><th class="col-sm-1"></th></tr></thead><tbody><?php if (empty($_smarty_tpl->tpl_vars['SEARCH_ARRAYS']->value)){?><?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUE']->value==''){?><?php if ($_smarty_tpl->tpl_vars['MODE']->value=="missingTranslation"&&empty($_smarty_tpl->tpl_vars['LANG_KEYS']->value)&&empty($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value)){?><tr></tr><tr class="listViewEntries"><td class="listViewEntryValue textAlignCenter" colspan="6"><span class="lead"><?php echo vtranslate('LBL_NO_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></td></tr><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['MODE']->value=="missingTranslation"){?><?php $_smarty_tpl->tpl_vars["ALL_LANG_KEYS"] = new Smarty_variable($_smarty_tpl->tpl_vars['LANG_KEYS']->value, null, 0);?><?php $_smarty_tpl->tpl_vars["ALL_JSLANG_KEYS"] = new Smarty_variable($_smarty_tpl->tpl_vars['JS_LANG_KEYS']->value, null, 0);?><?php }?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['LANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_LANG_KEYS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATE']->key => $_smarty_tpl->tpl_vars['TRANSLATE']->value){
$_smarty_tpl->tpl_vars['TRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['LANGKEY']->value = $_smarty_tpl->tpl_vars['TRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php  $_smarty_tpl->tpl_vars['JSTRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['JSLANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_JSLANG_KEYS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['JSTRANSLATE']->key => $_smarty_tpl->tpl_vars['JSTRANSLATE']->value){
$_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['JSLANGKEY']->value = $_smarty_tpl->tpl_vars['JSTRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("JsLangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php }?><?php }else{ ?><tr></tr><tr class="listViewEntries"><td class="listViewEntryValue textAlignCenter" colspan="6"><span class="lead"><?php echo vtranslate('LBL_NO_SEARCH_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></td></tr><?php }?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['LANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCH_ARRAYS']->value['languageStrings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATE']->key => $_smarty_tpl->tpl_vars['TRANSLATE']->value){
$_smarty_tpl->tpl_vars['TRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['LANGKEY']->value = $_smarty_tpl->tpl_vars['TRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php  $_smarty_tpl->tpl_vars['JSTRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['JSLANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCH_ARRAYS']->value['jsLanguageStrings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['JSTRANSLATE']->key => $_smarty_tpl->tpl_vars['JSTRANSLATE']->value){
$_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['JSLANGKEY']->value = $_smarty_tpl->tpl_vars['JSTRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("JsLangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php }?></tbody></table></div></div><?php }?><?php }else{ ?><div class="row"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 textAlignCenter"><span class="lead"><?php echo vtranslate('LBL_NO_MODULE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;</div></div><?php }?></div></div><?php }} ?>