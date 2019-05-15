<?php /* Smarty version Smarty-3.1.7, created on 2017-11-16 11:34:59
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/EditViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1177598985a0d77e362a772-92264874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2ad45e09062f2dbf131b7fdf0a2f7d5b74ee10' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/EditViewContent.tpl',
      1 => 1510671597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1177598985a0d77e362a772-92264874',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOR_MODULE' => 0,
    'FINALLY_PREFIX' => 0,
    'NONE_MODULE' => 0,
    'FILE_EXIST' => 0,
    'QUALIFIED_MODULE' => 0,
    'FILE_WRITEABLE' => 0,
    'DIRFILENAME' => 0,
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
    'NONE' => 0,
    'PREVIEW_LANG_PREF' => 0,
    'LANG_PREF' => 0,
    'MODE' => 0,
    'SEARCH_ARRAYS' => 0,
    'SEARCH_VALUE' => 0,
    'ALL_LANG_KEYS' => 0,
    'ALL_JSLANG_KEYS' => 0,
    'LANG_DIFF' => 0,
    'JS_LANG_DIFF' => 0,
    'LANG_VARIABLE_TYPE' => 0,
    'KEY' => 0,
    'TYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d77e36d9a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d77e36d9a8')) {function content_5a0d77e36d9a8($_smarty_tpl) {?>
<input type="hidden" name="for_module_name" id="for_module_name" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"><input type="hidden" name="finally_prefix" id="finally_prefix" value="<?php echo $_smarty_tpl->tpl_vars['FINALLY_PREFIX']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['NONE_MODULE']->value!='none'){?><?php if ($_smarty_tpl->tpl_vars['FILE_EXIST']->value=="dontExist"){?><div class="row-fluid textAlignCenter"><span class="lead"><?php echo vtranslate('LBL_NO_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;</div><br><br><div class="row-fluid textAlignCenter"><?php if ($_smarty_tpl->tpl_vars['FILE_WRITEABLE']->value=='false'){?><span class=" lead alert-danger" style="padding: 10px"><?php echo vtranslate('LBL_IF_CREATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;"<?php echo $_smarty_tpl->tpl_vars['DIRFILENAME']->value;?>
"</span><?php }else{ ?><span class="lead"><?php echo vtranslate('LBL_CREATE_NEW_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;<select class="chzn-select" id="langForCreateFile" name="langForCreateFile"><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==1){?><option value="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
</option><?php }?><?php } ?></select>&nbsp;&nbsp;<button class="btn btn-primary" id="createLangFile"><?php echo vtranslate('LBL_CREATE_FILE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?></div><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['FILE_WRITEABLE']->value=='false'){?><br><br><div class="row-fluid textAlignCenter"><span class=" lead alert-danger" style="padding: 10px"><?php echo vtranslate('LBL_NOT_WRITABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;"<?php echo $_smarty_tpl->tpl_vars['DIRFILENAME']->value;?>
"</span></div><?php }else{ ?><div class="row-fluid"><span class="pull-left"><button class="btn addNewTranslation addButton" type="button"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_NEW_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></span><br><br></div><table class="table table-bordered table-condensed"><thead><tr><th class="span7" style="border-right: none"><label><b><?php echo vtranslate('LBL_LANG_VAR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th><th class="span7" style="border-right: none; border-left: none"><label><b><?php echo vtranslate('LBL_EN_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label></th><?php if ($_smarty_tpl->tpl_vars['NONE']->value!='none'){?><th class="span7" style="border-right: none; border-left: none"><label><b><?php echo vtranslate('LBL_PREVIEW_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['PREVIEW_LANG_PREF']->value;?>
)</b></label></th><?php }?><th class="span7" style="border-right: none; border-left: none"><label><b><?php echo vtranslate('LBL_CURRENT_TRANSL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
)</b></label></th><th class="span7" style="border-right: none; border-left: none"><label><b><?php echo vtranslate('LBL_NEW_TRANSL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
)</b></label></th><th class="span3" style="border-left: none"></th></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='Edit'){?><?php if (empty($_smarty_tpl->tpl_vars['SEARCH_ARRAYS']->value)){?><?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUE']->value==''){?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
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
<?php } ?><?php }else{ ?><tr class="listViewEntries"><td class="listViewEntryValue medium" colspan="6" style="text-align: center"><?php echo vtranslate('LBL_NO_SEARCH_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php }?><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
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
<?php } ?><?php }?><?php }?><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='missingTranslation'){?><?php if (empty($_smarty_tpl->tpl_vars['SEARCH_ARRAYS']->value)){?><?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUE']->value==''){?><?php if (empty($_smarty_tpl->tpl_vars['LANG_DIFF']->value)&&empty($_smarty_tpl->tpl_vars['JS_LANG_DIFF']->value)){?><tr class="listViewEntries"><td class="listViewEntryValue medium" colspan="6" style="text-align: center"><?php echo vtranslate('LBL_NO_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['LANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANG_DIFF']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TRANSLATE']->key => $_smarty_tpl->tpl_vars['TRANSLATE']->value){
$_smarty_tpl->tpl_vars['TRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['LANGKEY']->value = $_smarty_tpl->tpl_vars['TRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php  $_smarty_tpl->tpl_vars['JSTRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = false;
 $_smarty_tpl->tpl_vars['JSLANGKEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['JS_LANG_DIFF']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['JSTRANSLATE']->key => $_smarty_tpl->tpl_vars['JSTRANSLATE']->value){
$_smarty_tpl->tpl_vars['JSTRANSLATE']->_loop = true;
 $_smarty_tpl->tpl_vars['JSLANGKEY']->value = $_smarty_tpl->tpl_vars['JSTRANSLATE']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("JsLangTableContent.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php }?><?php }else{ ?><tr class="listViewEntries"><td class="listViewEntryValue medium" colspan="6" style="text-align: center"><?php echo vtranslate('LBL_NO_SEARCH_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php }?><?php }else{ ?><?php if (empty($_smarty_tpl->tpl_vars['LANG_DIFF']->value)&&empty($_smarty_tpl->tpl_vars['JS_LANG_DIFF']->value)){?><tr class="listViewEntries"><td class="listViewEntryValue medium" colspan="6" style="text-align: center"><?php echo vtranslate('LBL_NO_TRANSLATIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td></tr><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['TRANSLATE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TRANSLATE']->_loop = false;
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
<?php } ?><?php }?><?php }?><?php }?></tbody></table><div class="modal createTransModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_CREATE_NEW_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
</h3></div><form class="form-horizontal addNewTranslationForm" method="POST"><div class="modal-body"><div class="control-group"><span class="control-label"><?php echo vtranslate('LBL_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><select class="typeSelect span8" id="typeSelect" name="typeSelect"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANG_VARIABLE_TYPE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['TYPE']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
</option><?php } ?></select></span></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><input type="text" name="langVariable" id="langVariable" class="span8" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'langVariable')));?>
></span></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><input type="text" name="langTranslation" id="langTranslation" class="span8" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'langTranslation')));?>
></span></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }?></div><?php }?><?php }else{ ?><div class="row-fluid textAlignCenter"><span class="lead"><?php echo vtranslate('LBL_NO_MODULE_SELECTED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span>&nbsp;</div><?php }?><?php }} ?>