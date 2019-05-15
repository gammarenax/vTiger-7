<?php /* Smarty version Smarty-3.1.7, created on 2018-02-01 07:41:19
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTEMAILMakerMailTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6037587465a72c49fcd1a19-17222690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ad912cf410f66d7e4390bfa94ab352ddda6f209' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTEMAILMakerMailTask.tpl',
      1 => 1510672353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6037587465a72c49fcd1a19-17222690',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VY4YOU_CURRENT_VERSION' => 0,
    'QUALIFIED_MODULE' => 0,
    'TASK_OBJECT' => 0,
    'FROM_EMAIL_FIELD_OPTION' => 0,
    'GROUP_NAME' => 0,
    'FROM_EMAIL' => 0,
    'EMAIL' => 0,
    'EMAIL_FIELD_OPTION' => 0,
    'RECEPIENT' => 0,
    'RECEPIENT_OPTIONAL' => 0,
    'EMAILCC' => 0,
    'EMAILCC_OPTIONAL' => 0,
    'EMAILBCC' => 0,
    'EMAILBCC_OPTIONAL' => 0,
    'SOURCE_MODULE' => 0,
    'LANGUAGES_ARRAY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a72c49fe7e29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a72c49fe7e29')) {function content_5a72c49fe7e29($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>
<div id="VtEmailTaskContainer"><div class="contents tabbable ui-sortable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="active"><a data-toggle="tab" href="#detailViewLayout" id="detailViewLayoutBtn"><strong><?php echo vtranslate('LBL_EMAIL_DETAILS','EMAILMaker');?>
</strong></a></li><li class="relatedListTab"><a data-toggle="tab" href="#relatedTabTemplate" class="workflowTab"><strong><?php echo vtranslate('LBL_EMAIL_CONTENT','EMAILMaker');?>
</strong></a></li></ul><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout"><div class="row-fluid padding-bottom1per"><?php if ($_smarty_tpl->tpl_vars['VY4YOU_CURRENT_VERSION']->value==''){?><span class="span7 row-fluid"><span class="span2"><?php echo ucfirst(vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</span><input data-validation-engine='validate[]' name="fromEmail" class="span9 fields" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->fromEmail;?>
" /></span><span class="span5"><select id="fromEmailOption" style="min-width: 300px" class="chzn-select" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['FROM_EMAIL_FIELD_OPTION']->value;?>
</select></span><?php }else{ ?><span class="span7 row-fluid"><span class="span2"><?php echo ucfirst(vtranslate('LBL_FROM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
</span><select name="fromEmail" id="fromEmail" class="select8 fields" style="min-width: 270px" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['FROM_EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = false;
 $_smarty_tpl->tpl_vars["GROUP_NAME"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FROM_EMAIL_FIELD_OPTION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FROM_EMAIL']->key => $_smarty_tpl->tpl_vars['FROM_EMAIL']->value){
$_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = true;
 $_smarty_tpl->tpl_vars["GROUP_NAME"]->value = $_smarty_tpl->tpl_vars['FROM_EMAIL']->key;
?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' ><?php }?><?php  $_smarty_tpl->tpl_vars['EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FROM_EMAIL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL']->key => $_smarty_tpl->tpl_vars['EMAIL']->value){
$_smarty_tpl->tpl_vars['EMAIL']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["value"];?>
" <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value["select"]==1){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["label"];?>
</option><?php } ?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?></optgroup ><?php }?><?php } ?></select></span><?php }?></div><div class="row-fluid padding-bottom1per"><?php if ($_smarty_tpl->tpl_vars['VY4YOU_CURRENT_VERSION']->value==''){?><span class="span7 row-fluid"><span class="span2"><?php echo ucfirst(vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
<span class="redColor">*</span></span><input data-validation-engine='validate[required]' name="recepient" class="span9 fields" type="text" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->recepient;?>
" /></span><span class="span5"><select style="min-width: 300px" class="task-fields chzn-select" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></span><?php }else{ ?><span class="span12 row-fluid"><span class="span1"><?php echo ucfirst(vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
<span class="redColor">*</span></span><select data-validation-engine='validate[required]' name="recepient[]" id="recepient" multiple class="span7 select2" style="max-width: 500px" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['FROM_EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = false;
 $_smarty_tpl->tpl_vars["GROUP_NAME"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FROM_EMAIL']->key => $_smarty_tpl->tpl_vars['FROM_EMAIL']->value){
$_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = true;
 $_smarty_tpl->tpl_vars["GROUP_NAME"]->value = $_smarty_tpl->tpl_vars['FROM_EMAIL']->key;
?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' ><?php }?><?php  $_smarty_tpl->tpl_vars['EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FROM_EMAIL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL']->key => $_smarty_tpl->tpl_vars['EMAIL']->value){
$_smarty_tpl->tpl_vars['EMAIL']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["value"];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['EMAIL']->value["value"],$_smarty_tpl->tpl_vars['RECEPIENT']->value)){?> selected <?php }?> ><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["label"];?>
</option><?php } ?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?></optgroup ><?php }?><?php } ?></select><input data-validation-engine='validate[]' id="recepientOptional" name="recepientOptional" class="span3 fields" type="text" value="<?php echo $_smarty_tpl->tpl_vars['RECEPIENT_OPTIONAL']->value;?>
" /></span><?php }?></div><div class="row-fluid padding-bottom1per <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc)){?>hide <?php }?>" id="ccContainer"><?php if ($_smarty_tpl->tpl_vars['VY4YOU_CURRENT_VERSION']->value==''){?><span class="span7 row-fluid"><span class="span2"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><input class="span9 fields" type="text" name="emailcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc;?>
" /></span><span class="span5"><select class="task-fields" data-placeholder='<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' style="min-width: 300px"><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></span><?php }else{ ?><span class="span12 row-fluid"><span class="span1"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><select name="emailcc[]" id="emailcc" multiple class="span7 select2" style="max-width: 500px" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['FROM_EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = false;
 $_smarty_tpl->tpl_vars["GROUP_NAME"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FROM_EMAIL']->key => $_smarty_tpl->tpl_vars['FROM_EMAIL']->value){
$_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = true;
 $_smarty_tpl->tpl_vars["GROUP_NAME"]->value = $_smarty_tpl->tpl_vars['FROM_EMAIL']->key;
?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' ><?php }?><?php  $_smarty_tpl->tpl_vars['EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FROM_EMAIL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL']->key => $_smarty_tpl->tpl_vars['EMAIL']->value){
$_smarty_tpl->tpl_vars['EMAIL']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["value"];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['EMAIL']->value["value"],$_smarty_tpl->tpl_vars['EMAILCC']->value)){?> selected <?php }?>  ><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["label"];?>
</option><?php } ?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?></optgroup ><?php }?><?php } ?></select><input data-validation-engine='validate[]' id="emailccOptional" name="emailccOptional" class="span3 fields" type="text" value="<?php echo $_smarty_tpl->tpl_vars['EMAILCC_OPTIONAL']->value;?>
" /></span><?php }?></div><div class="row-fluid padding-bottom1per <?php if (empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc)){?>hide <?php }?>" id="bccContainer"><?php if ($_smarty_tpl->tpl_vars['VY4YOU_CURRENT_VERSION']->value==''){?><span class="span7 row-fluid"><span class="span2"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><input class="span9 fields" type="text" name="emailbcc" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc;?>
" /></span><span class="span5"><select class="task-fields" data-placeholder='<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' style="min-width: 300px"><option></option><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value;?>
</select></span><?php }else{ ?><span class="span12 row-fluid"><span class="span1"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><select name="emailbcc[]" id="emailbcc" multiple class="span7 select2" style="max-width: 500px" data-placeholder=<?php echo vtranslate('LBL_SELECT_OPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
><option></option><?php  $_smarty_tpl->tpl_vars['FROM_EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = false;
 $_smarty_tpl->tpl_vars["GROUP_NAME"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELD_OPTION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FROM_EMAIL']->key => $_smarty_tpl->tpl_vars['FROM_EMAIL']->value){
$_smarty_tpl->tpl_vars['FROM_EMAIL']->_loop = true;
 $_smarty_tpl->tpl_vars["GROUP_NAME"]->value = $_smarty_tpl->tpl_vars['FROM_EMAIL']->key;
?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
' ><?php }?><?php  $_smarty_tpl->tpl_vars['EMAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FROM_EMAIL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL']->key => $_smarty_tpl->tpl_vars['EMAIL']->value){
$_smarty_tpl->tpl_vars['EMAIL']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["value"];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['EMAIL']->value["value"],$_smarty_tpl->tpl_vars['EMAILBCC']->value)){?> selected <?php }?>  ><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value["label"];?>
</option><?php } ?><?php if ($_smarty_tpl->tpl_vars['GROUP_NAME']->value!="-none-"){?></optgroup ><?php }?><?php } ?></select><input data-validation-engine='validate[]' id="emailbccOptional" name="emailbccOptional" class="span3 fields" type="text" value="<?php echo $_smarty_tpl->tpl_vars['EMAILBCC_OPTIONAL']->value;?>
" /></span><?php }?></div><div class="row-fluid padding-bottom1per <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc))&&(!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))){?> hide <?php }?>"><span class="span8 row-fluid"><span class="span2">&nbsp;</span><span class="span9"><a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailcc))){?>hide<?php }?>" id="ccLink"><?php echo vtranslate('LBL_ADD_CC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;&nbsp;<a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->emailbcc))){?>hide<?php }?>" id="bccLink"><?php echo vtranslate('LBL_ADD_BCC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></span></span></div></div><div class="tab-pane" id="relatedTabTemplate"><div class="row-fluid padding-bottom1per"><span class="span12 row-fluid"><span style="margin-top: 7px" class="span2"><?php echo vtranslate('LBL_EMAIL_TEMPLATE','EMAILMaker');?>
</span>&nbsp;&nbsp;<span class="span8"><select id="task_template" name="template" class="span7 chzn-select"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->getTemplates($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value),'selected'=>$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->template),$_smarty_tpl);?>
</select><input type="hidden" id="task_folder_value" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->template;?>
"></span></span></div><div class="row-fluid padding-bottom1per"><span class="span12 row-fluid"><span style="margin-top: 7px" class="span2"><?php echo vtranslate('LBL_EMAIL_LANGUAGE','EMAILMaker');?>
</span>&nbsp;&nbsp;<span class="span8"><?php $_smarty_tpl->tpl_vars['LANGUAGES_ARRAY'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->getLanguages(), null, 0);?><select style="min-width: 215px" id="task_template_language" name="template_language" class="chzn-select"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LANGUAGES_ARRAY']->value,'selected'=>$_smarty_tpl->tpl_vars['TASK_OBJECT']->value->template_language),$_smarty_tpl);?>
</select><input type="hidden" id="template_language_value" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->template_language;?>
"></span></span></div></div></div></div></div><script src="modules/EMAILMaker/workflow/VTEMAILMakerMailTask.js" type="text/javascript" charset="utf-8"></script><script type="text/javascript">Settings_Workflows_Edit_Js.prototype.registerVTEMAILMakerMailTaskEvents = function () {var textAreaElement = jQuery('#content');this.registerFillTaskFromEmailFieldEvent();this.registerCcAndBccEvents();};Settings_Workflows_Edit_Js.prototype.VTEMAILMakerMailTaskCustomValidation = function () {var result = true;var selectElement1 = jQuery('input[name="recepient"]');var control1 = selectElement1.val();if(control1 == "") {jQuery('#detailViewLayoutBtn').trigger('click');var result = app.vtranslate('JS_REQUIRED_FIELD');}return result;};</script>	<?php }} ?>