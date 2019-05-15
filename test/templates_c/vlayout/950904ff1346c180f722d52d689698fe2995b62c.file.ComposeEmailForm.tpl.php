<?php /* Smarty version Smarty-3.1.7, created on 2018-10-02 08:28:18
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ComposeEmailForm.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10749264065bb32c229b36a8-82045127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '950904ff1346c180f722d52d689698fe2995b62c' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ComposeEmailForm.tpl',
      1 => 1510670483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10749264065bb32c229b36a8-82045127',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'VIEWNAME' => 0,
    'FOR_MODULE' => 0,
    'TOMAIL_INFO' => 0,
    'TOMAIL_NAMES_LIST' => 0,
    'TOMAIL_CC_INFO' => 0,
    'TOMAIL_CC_NAMES_LIST' => 0,
    'TOMAIL_BCC_INFO' => 0,
    'TOMAIL_BCC_NAMES_LIST' => 0,
    'MAX_UPLOAD_SIZE' => 0,
    'EMAIL_MODE' => 0,
    'EMAILS_SEQ' => 0,
    'PARENT_EMAIL_ID' => 0,
    'PARENT_RECORD' => 0,
    'RECORDID' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'EMAIL_LANGUAGE' => 0,
    'SELECTED_SOURCEID' => 0,
    'MODULE' => 0,
    'FROM_EMAILS' => 0,
    'SELECTED_DEFAULT_FROM' => 0,
    'SINGLE_RECORD' => 0,
    'SOURCE_NAMES' => 0,
    'source_id' => 0,
    'source_name' => 0,
    'RELATED_MODULES' => 0,
    'MODULE_NAME' => 0,
    'SELECTED_FOR_MODULE' => 0,
    'TO' => 0,
    'TO_EMAILS' => 0,
    'FIELD_INFO' => 0,
    'SPECIAL_VALIDATOR' => 0,
    'CC' => 0,
    'BCC' => 0,
    'SUBJECT' => 0,
    'PDFTEMPLATES' => 0,
    'DOCUMENTS_URL' => 0,
    'ATTACHMENTS' => 0,
    'ATTACHMENT' => 0,
    'FILE_TYPE' => 0,
    'DOCUMENT_ID' => 0,
    'pdftemplatename' => 0,
    'PDFTEMPLATEIDS' => 0,
    'PDFLANGUAGE' => 0,
    'EMAIL_TEMPLATE_URL' => 0,
    'RELATED_LOAD' => 0,
    'DESCRIPTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bb32c22a1e48',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bb32c22a1e48')) {function content_5bb32c22a1e48($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>
<div class="SendEmailFormStep2" id="composeEmailContainer"><form class="form-horizontal" id="massEmailForm" method="post" action="index.php" enctype="multipart/form-data" name="massEmailForm"><input type="hidden" name="selected_ids" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
' /><input type="hidden" name="excluded_ids" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
' /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><input type="hidden" name="module" value="EMAILMaker"/><input type="hidden" name="for_module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
"/><input type="hidden" name="mode" value="massSave" /><div class="hide" style="display:none;"><textarea name="toemailinfo_emailField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_INFO']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_INFO']->value);?>
<?php }else{ ?>{}<?php }?></textarea><textarea name="toMailNamesList_emailField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_NAMES_LIST']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_NAMES_LIST']->value);?>
<?php }else{ ?>{}<?php }?></textarea><textarea name="toemailinfo_emailCCField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_CC_INFO']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_CC_INFO']->value);?>
<?php }else{ ?>{}<?php }?></textarea><textarea name="toMailNamesList_emailCCField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_CC_NAMES_LIST']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_CC_NAMES_LIST']->value);?>
<?php }else{ ?>{}<?php }?></textarea><textarea name="toemailinfo_emailBCCField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_BCC_INFO']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_BCC_INFO']->value);?>
<?php }else{ ?>{}<?php }?></textarea><textarea name="toMailNamesList_emailBCCField" ><?php if ($_smarty_tpl->tpl_vars['TOMAIL_BCC_NAMES_LIST']->value!=''){?><?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['TOMAIL_BCC_NAMES_LIST']->value);?>
<?php }else{ ?>{}<?php }?></textarea></div><input type="hidden" name="view" value="MassSaveAjax" /><input type="hidden" name="to" value=""/><input type="hidden" id="flag" name="flag" value="" /><input type="hidden" id="maxUploadSize" value="<?php echo $_smarty_tpl->tpl_vars['MAX_UPLOAD_SIZE']->value;?>
" /><input type="hidden" id="documentIds" name="documentids" value="" /><input type="hidden" name="emailMode" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_MODE']->value;?>
" /><input type="hidden" value="EMAILMaker_Popup_Js" id="popUpClassName"/><input type="hidden" id="emails_seq" value="<?php echo $_smarty_tpl->tpl_vars['EMAILS_SEQ']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['PARENT_EMAIL_ID']->value)){?><input type="hidden" name="parent_id" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_EMAIL_ID']->value;?>
" /><input type="hidden" name="parent_record_id" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value;?>
" /><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['RECORDID']->value)){?><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><?php }?><input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="email_language" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_LANGUAGE']->value;?>
" /><input type="hidden" name="sorce_ids" value="<?php echo $_REQUEST['pid'];?>
" /><input type="hidden" id="selected_sourceid" name="selected_sourceid" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_SOURCEID']->value;?>
"><div class="row-fluid margin0px" style="padding-top:10px"><div class="span7 margin0px padding-right1per"><span class="span7 row-fluid margin0px padding-bottom1per"><h3><?php echo vtranslate('LBL_COMPOSE_EMAIL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></span></div><span class="span5 row-fluid margin0px"><select name="from_email" class="span12" title="<?php echo vtranslate('LBL_FROM_EMAIL','EMAILMaker');?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['FROM_EMAILS']->value,'selected'=>$_smarty_tpl->tpl_vars['SELECTED_DEFAULT_FROM']->value),$_smarty_tpl);?>
</select></span></div><hr class="margin0px " style='width:100%'><div class="row-fluid margin0px"><div class="span7 margin0px"><div style="padding-right:20px;padding-top:5px;"><div class="row-fluid" style="height:140px;"><span class="row-fluid"><?php if ($_smarty_tpl->tpl_vars['SINGLE_RECORD']->value!='yes'){?><span class="span2 textAlignRight"><label class="padding5per"><?php echo vtranslate('LBL_RECORDS_LIST',$_smarty_tpl->tpl_vars['FOR_MODULE']->value);?>
:</label></span><span class="span"><select class="chzn-select emailSourcesList"><?php  $_smarty_tpl->tpl_vars['source_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['source_name']->_loop = false;
 $_smarty_tpl->tpl_vars['source_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SOURCE_NAMES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['source_name']->key => $_smarty_tpl->tpl_vars['source_name']->value){
$_smarty_tpl->tpl_vars['source_name']->_loop = true;
 $_smarty_tpl->tpl_vars['source_id']->value = $_smarty_tpl->tpl_vars['source_name']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['source_id']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_SOURCEID']->value==$_smarty_tpl->tpl_vars['source_id']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['source_name']->value;?>
</option><?php } ?></select></span><?php }?><div class="input-prepend"><span class="pull-right"><select name="select_recipients" class="chzn-select emailModulesList" style="width:150px;"><optgroup><?php if (in_array($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['RELATED_MODULES']->value)){?><?php $_smarty_tpl->tpl_vars['SELECTED_FOR_MODULE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FOR_MODULE']->value, null, 0);?><?php }else{ ?><?php if (in_array("Contacts",$_smarty_tpl->tpl_vars['RELATED_MODULES']->value)){?><?php $_smarty_tpl->tpl_vars['SELECTED_FOR_MODULE'] = new Smarty_variable("Contacts", null, 0);?><?php }elseif(in_array("Accounts",$_smarty_tpl->tpl_vars['RELATED_MODULES']->value)){?><?php $_smarty_tpl->tpl_vars['SELECTED_FOR_MODULE'] = new Smarty_variable("Accounts", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['SELECTED_FOR_MODULE'] = new Smarty_variable('', null, 0);?><?php }?><?php }?><?php  $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->key => $_smarty_tpl->tpl_vars['MODULE_NAME']->value){
$_smarty_tpl->tpl_vars['MODULE_NAME']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED_FOR_MODULE']->value==$_smarty_tpl->tpl_vars['MODULE_NAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?><option value=""><?php echo vtranslate('LBL_OTHER','EMAILMaker');?>
</option></optgroup></select><span class="pull-right" id="select_recipients"><span id="selectEmailBtn" data-sourceid="<?php echo $_smarty_tpl->tpl_vars['SELECTED_SOURCEID']->value;?>
" class="add-on selectEmail cursorPointer "><i class="icon-search" title="<?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></span></span></span></div></span><span class="row-fluid"><span class="span2 textAlignRight"><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span>:</span><?php if (!empty($_smarty_tpl->tpl_vars['TO']->value)){?><?php $_smarty_tpl->tpl_vars['TO_EMAILS'] = new Smarty_variable(implode(",",$_smarty_tpl->tpl_vars['TO']->value), null, 0);?><?php }?><span class="span10"><input id="emailField" name="toEmail" type="text" style="width:100%" class="autoComplete sourceField select2"value="<?php echo $_smarty_tpl->tpl_vars['TO_EMAILS']->value;?>
" data-validation-engine="validate[required]"data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
' <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)){?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }?>/></span></span><div class="row-fluid <?php if (empty($_smarty_tpl->tpl_vars['CC']->value)){?>hide <?php }?>" id="ccContainer" style="margin-top:5px"><div class="span2 textAlignRight"><?php echo vtranslate('LBL_CC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</div><span class="span10"><input id="emailCCField" class="autoComplete sourceField select2" style="width:100%" type="text" name="cc" value="<?php if (!empty($_smarty_tpl->tpl_vars['CC']->value)){?><?php echo $_smarty_tpl->tpl_vars['CC']->value;?>
<?php }?>"/></span></div><div class="row-fluid <?php if (empty($_smarty_tpl->tpl_vars['BCC']->value)){?>hide <?php }?>" id="bccContainer" style="margin-top: 5px"><span class="span2 textAlignRight"><?php echo vtranslate('LBL_BCC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</span><span class="span10"><input id="emailBCCField" class="autoComplete sourceField select2" style="width:100%"  class="span10" type="text" name="bcc" value="<?php if (!empty($_smarty_tpl->tpl_vars['BCC']->value)){?><?php echo $_smarty_tpl->tpl_vars['BCC']->value;?>
<?php }?>"/></span></div><div class="row-fluid <?php if ((!empty($_smarty_tpl->tpl_vars['CC']->value))&&(!empty($_smarty_tpl->tpl_vars['BCC']->value))){?> hide <?php }?> padding10"><span class="span2">&nbsp;</span><span class="span10"><a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['CC']->value))){?>hide<?php }?>" id="ccLink"><?php echo vtranslate('LBL_ADD_CC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>&nbsp;&nbsp;<a class="cursorPointer <?php if ((!empty($_smarty_tpl->tpl_vars['BCC']->value))){?>hide<?php }?>" id="bccLink"><?php echo vtranslate('LBL_ADD_BCC',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div></div><span class="row-fluid margin0px zeroPaddingAndMargin" ><span class="span12 row-fluid zeroPaddingAndMargin" style="padding-top:5px"><span class="span2"><span class="margin0px textAlignRight"><label style="padding:5px;"><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span>:</label></span></span><span class="span10 textAlignRight" style="margin:0px 0px 0px 10px"><input class="row-fluid" data-validation-engine='validate[required]' style="width:99%"  type="text" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['SUBJECT']->value;?>
" id="subject"/></span></span></span></div></div><div class="span5 margin0px" style="padding-top:5px;"><div class="summaryWidgetContainer margin0px"><div class="widgetContainer_1" <?php if ($_smarty_tpl->tpl_vars['PDFTEMPLATES']->value==''){?>style="height:140px"<?php }?>><div class="widget_header row-fluid"><div class="marginBottom10px"><h4><?php echo vtranslate('LBL_ATTACHMENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><div class="row-fluid margin0px"><span class="pull-left"><input type="file" id="multiFile" name="file[]" class="btn btn-small" /></span><span class="pull-right"><button type="button" class="btn btn-small" id="browseCrm" data-url="<?php echo $_smarty_tpl->tpl_vars['DOCUMENTS_URL']->value;?>
" title="<?php echo vtranslate('LBL_BROWSE_CRM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_BROWSE_CRM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></span></div></div><div class="widget_contents"><div id="attachments" class="row-fluid" <?php if ($_smarty_tpl->tpl_vars['PDFTEMPLATES']->value==''){?>style="overflow:auto;height:80px;"<?php }?>><?php  $_smarty_tpl->tpl_vars['ATTACHMENT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ATTACHMENT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ATTACHMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ATTACHMENT']->key => $_smarty_tpl->tpl_vars['ATTACHMENT']->value){
$_smarty_tpl->tpl_vars['ATTACHMENT']->_loop = true;
?><?php if ((array_key_exists('docid',$_smarty_tpl->tpl_vars['ATTACHMENT']->value))){?><?php $_smarty_tpl->tpl_vars['DOCUMENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['ATTACHMENT']->value['docid'], null, 0);?><?php $_smarty_tpl->tpl_vars['FILE_TYPE'] = new Smarty_variable("document", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['FILE_TYPE'] = new Smarty_variable("file", null, 0);?><?php }?><div class="MultiFile-label customAttachment" data-file-id="<?php echo $_smarty_tpl->tpl_vars['ATTACHMENT']->value['fileid'];?>
" data-file-type="<?php echo $_smarty_tpl->tpl_vars['FILE_TYPE']->value;?>
"  data-file-size="<?php echo $_smarty_tpl->tpl_vars['ATTACHMENT']->value['size'];?>
" <?php if ($_smarty_tpl->tpl_vars['FILE_TYPE']->value=="document"){?> data-document-id="<?php echo $_smarty_tpl->tpl_vars['DOCUMENT_ID']->value;?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['ATTACHMENT']->value['nondeletable']!=true){?><a name="removeAttachment" class="cursorPointer">x </a><?php }?><span><?php echo $_smarty_tpl->tpl_vars['ATTACHMENT']->value['attachment'];?>
</span></div><?php } ?></div></div><?php if ($_smarty_tpl->tpl_vars['PDFTEMPLATES']->value!=''){?><br><div class="widget_header row-fluid"><h4><?php echo vtranslate('LBL_PDFMAKER_TEMPLATES','EMAILMaker');?>
</h4></div><?php  $_smarty_tpl->tpl_vars['pdftemplatename'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pdftemplatename']->_loop = false;
 $_smarty_tpl->tpl_vars['pdftemplateid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PDFTEMPLATES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pdftemplatename']->key => $_smarty_tpl->tpl_vars['pdftemplatename']->value){
$_smarty_tpl->tpl_vars['pdftemplatename']->_loop = true;
 $_smarty_tpl->tpl_vars['pdftemplateid']->value = $_smarty_tpl->tpl_vars['pdftemplatename']->key;
?><div class="MultiFile-label customAttachment"><span><?php echo $_smarty_tpl->tpl_vars['pdftemplatename']->value;?>
</span></div><?php } ?><input type="hidden" name="pdftemplateids" value="<?php echo $_smarty_tpl->tpl_vars['PDFTEMPLATEIDS']->value;?>
"><input type="hidden" name="pdflanguage" value="<?php echo $_smarty_tpl->tpl_vars['PDFLANGUAGE']->value;?>
"><?php }?></div></div></div></div><div class="row-fluid margin0px"><div class="btn-toolbar zeroPaddingAndMargin"><div class="row-fluid btn-group"><button class="floatNone btn btn-success" id="sendEmail" type="submit" title="<?php echo vtranslate('LBL_SEND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="paddingLeftRight10px"><span class="paddingLeftRight10px"><strong><?php echo vtranslate('LBL_SEND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span></span></button>&nbsp;&nbsp;<button type="button" class="btn" id="selectEmailTemplate" data-url="<?php echo $_smarty_tpl->tpl_vars['EMAIL_TEMPLATE_URL']->value;?>
" title="<?php echo vtranslate('LBL_SELECT_EMAIL_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_SELECT_EMAIL_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><span name="progressIndicator" style="height:30px;">&nbsp;</span></div></div></div><?php if ($_smarty_tpl->tpl_vars['RELATED_LOAD']->value==true){?><input type="hidden" name="related_load" value=<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
 /><?php }?><textarea id="description" name="description"><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
</textarea><input type="hidden" name="attachments" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['ATTACHMENTS']->value);?>
' /><div class="row-fluid margin0px"><div class="span8"><div class="btn-toolbar" ><span class="btn-group"><button class="floatNone btn btn-success" id="sendEmail2" type="submit" title="<?php echo vtranslate('LBL_SEND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="paddingLeftRight10px"><span class="paddingLeftRight10px"><strong><?php echo vtranslate('LBL_SEND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span></span></button>&nbsp;&nbsp;</span></div></div></div></form></div><select id="to_selectbox_pattern" class="buttonNormal margin0px span2" style="display:none"><option value="to"><?php echo vtranslate("LBL_TO",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="cc"><?php echo vtranslate("LBL_CC",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="bcc"><?php echo vtranslate("LBL_BCC",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select><div id="setEmailAddress" class='hide modelContainer'><div class="modal-header "><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3 style="white-space: nowrap;padding-right: 40px;"><?php echo vtranslate('LBL_SET_EMAIL_ADRESS','EMAILMaker');?>
</h3></div><form class="form-horizontal row-fluid" method="post" action="index.php"><div name='exportCalendar'><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="muted control-label"><?php echo vtranslate('SINGLE_Emails');?>
</label><div class="controls input-append"><input type="text" name="emailaddress" class="input-large" placeholder="" value="" data-validation-engine="validate[funcCall[Vtiger_Email_Validator_Js.invokeValidation]]" /></div></div></div></div></div><div class="modal-footer"><button class="btn btn-success" type="button" name="setButton"><strong><?php echo vtranslate('LBL_ADD');?>
</strong></button></div></form></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>