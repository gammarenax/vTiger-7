<?php /* Smarty version Smarty-3.1.7, created on 2017-11-16 11:34:18
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17348428975a0d77ba639237-86313944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf18bf72f976a9718cc427057a505fc5a214acb' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouLanguageEditor/List.tpl',
      1 => 1510671598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17348428975a0d77ba639237-86313944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_LINKS' => 0,
    'MODULE' => 0,
    'LISTVIEW_SETTING' => 0,
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
    'DEFAULTLANGUAGES' => 0,
    'LANGUAGEMODEL' => 0,
    'url' => 0,
    'LANG_PREF' => 0,
    'PICKLIST_MODULES' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'PICKLIST_MODULE' => 0,
    'NO_PICKLIST_FIELDS' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d77baed589',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d77baed589')) {function content_5a0d77baed589($_smarty_tpl) {?>
<div class="container-fluid"><div class="contents row-fluid"><div class="widget_header row-fluid"><div class="row-fluid"><div class="span6"><h3><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><div class="span6"><span class="btn-toolbar"><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING'])>0){?><div class="settingsIcon"><span class="pull-right btn-group"><button class="btn dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-wrench" alt="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i>&nbsp;&nbsp;<i class="caret"></i></button><ul class="listViewSetting dropdown-menu"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_SETTING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->key => $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->_loop = true;
?><li><a href=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value->getUrl();?>
><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php } ?></ul></span></div><?php }?></span></div></div></div><hr><ul class="nav nav-tabs massEditTabs" style="margin-bottom: 0;border-bottom: 0"><li class="active"><a href="#allLanguages" data-toggle="tab"><strong><?php echo vtranslate('LBL_AVAILABLE_LANGUAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li><a href="#picklistTranslation" data-toggle="tab"><strong><?php echo vtranslate('LBL_PICKLIST_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="allLanguages"><div class="row-fluid"><div class="span12" id="LangTab"><div class="pull-left"><button class="btn addButton" name="createLangButton" id="createLangButton"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_CREATE_NEW_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><br><br><table id="AllLanguagesTable" class="table table-bordered table-condensed" style="table-layout: fixed"><thead><tr><th style="border-right: none"><?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-right: none;border-left: none"><?php echo vtranslate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-right: none;border-left: none"><?php echo vtranslate('LBL_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-right: none;border-left: none"><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</th><th style="border-left: none;"></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><tr class="listViewEntries" data-prefix='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
'data-label='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
' data-name='<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
' data-recordurl="index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit&langPrefix=<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><td class="listViewEntrie medium"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['name'];?>
</td><td class="listViewEntrie medium"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
</td><td class="listViewEntrie medium"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
</td><td class="medium" style="border-right:none"><div class="actions pull-right"><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['active']==0){?><button class="btn btn-danger langButton"><?php echo vtranslate('LBL_INACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix']=="en_us"){?><button class="btn btn-info" ><?php echo vtranslate('LBL_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }else{ ?><button class="btn btn-success langButton"><?php echo vtranslate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }?><?php }?></div></td><td class="listViewEntrie medium" style="border-left:none"><div class="actions pull-left"><?php if (in_array($_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'],$_smarty_tpl->tpl_vars['DEFAULTLANGUAGES']->value)){?><button class="btn btn-primary copyLanguage" style="width: 122px" type="button"><?php echo vtranslate('LBL_COPY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php }else{ ?><?php $_smarty_tpl->tpl_vars["url"] = new Smarty_variable($_smarty_tpl->tpl_vars['LANGUAGEMODEL']->value->getEditViewUrl(), null, 0);?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&langPrefix=<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
" class="btn btn-primary" style="width: 100px"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }?></div></td></tr><?php } ?></tbody></table></div></div><div class="modal createLanguageModal hide"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_CREATE_NEW_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LANG_PREF']->value;?>
</h3></div><form class="form-horizontal newLanguageForm" method="POST"><div class="modal-body"><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><input type="text" name="newLanguage" id="newLanguage" class="span8" maxlength="50" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'newLanguage')));?>
></span></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><input type="text" name="langName" id="langName" class="span8" maxlength="30" value="" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'langName')));?>
></span></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><input type="text" name="langCode" id="langCode" class="span8" maxlength="10" data-validation-engine="validate[required, funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"data-validator=<?php echo Zend_Json::encode(array(array('name'=>'langCode')));?>
></span></div></div><div class="control-group"><span class="control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_COPY_LANG_FILES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="controls"><span class="row-fluid"><select class="typeSelect span8" id="selectCopyLang" name="selectCopyLang"><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
</option><?php } ?></select></span></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><div class="tab-pane" id="picklistTranslation"><div class="row-fluid"><div class="span12"><div class="row-fluid"><label class="fieldLabel span3"><strong><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label><div class="span6 fieldValue"><select class="chzn-select" id="pickListModules"><optgroup><?php  $_smarty_tpl->tpl_vars['PICKLIST_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->key => $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value==$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name')){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></optgroup></select></div></div><br><div id="modulePickListContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModulePicklistDetail.tpl","Settings:ITS4YouLanguageEditor"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="modulePickListValuesContainer"><?php if (empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PickListValueDetail.tpl","Settings:ITS4YouLanguageEditor"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div><br></div></div></div></div></div><div align="center" class="small" style="color: rgb(153, 153, 153);"><?php echo vtranslate("LBL_MODULE_NAME",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 :: <a href="http://www.its4you.sk/en" target="_new"><?php echo vtranslate("COPYRIGHT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><br><?php }} ?>