<?php /* Smarty version Smarty-3.1.7, created on 2017-09-20 12:12:00
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/SelectEmailFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206950032759c25b107850c0-58569815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05cb1f536a9a8d4c652bdfc7167e7fe15ec5963d' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/SelectEmailFields.tpl',
      1 => 1505401257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206950032759c25b107850c0-58569815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'EMAIL_FIELDS_COUNT' => 0,
    'BASIC' => 0,
    'FORLISTVIEW' => 0,
    'SELECTED_IDS' => 0,
    'EXCLUDED_IDS' => 0,
    'VIEWNAME' => 0,
    'SEARCH_KEY' => 0,
    'OPERATOR' => 0,
    'ALPHABET_VALUE' => 0,
    'TOTAL_EMAILOPTOUT' => 0,
    'PARENT_MODULE' => 0,
    'PARENT_RECORD' => 0,
    'RELATED_MODULE' => 0,
    'PDFTEMPLATEID' => 0,
    'PDFLANGUAGE' => 0,
    'EMAIL_FIELDS_LIST' => 0,
    'EMAIL_FIELD_NAME' => 0,
    'EMAIL_FIELD_LIST' => 0,
    'EMAIL_FIELD_DATA' => 0,
    'SINGLE_RECORD' => 0,
    'IS_INPUT_CHECKED_DEFINED' => 0,
    'IS_INPUT_SELECTED' => 0,
    'SOURCE_NAME' => 0,
    'CRM_TEMPLATES_EXIST' => 0,
    'CRM_TEMPLATES' => 0,
    'category_name' => 0,
    'options' => 0,
    'option' => 0,
    'DEFAULT_TEMPLATE' => 0,
    'TEMPLATE_LANGUAGES' => 0,
    'CURRENT_LANGUAGE' => 0,
    'lang_key' => 0,
    'IS_PDFMAKER' => 0,
    'itemArr' => 0,
    'templateid' => 0,
    'RELATED_LOAD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c25b1091e0f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c25b1091e0f')) {function content_59c25b1091e0f($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm6.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>
<div id="sendEmailContainer" class="modelContainer"  style="min-width: 800px"><form class="form-horizontal" id="SendEmailFormStep1" method="post" action="index.php"><div class="modal-header contentsBackground"><span class='pull-right'><span class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELDS_COUNT']->value!="0"||$_smarty_tpl->tpl_vars['BASIC']->value!="true"){?><button class="btn addButton" type="submit" name="selectfield"><strong><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></span><h3><?php if ($_smarty_tpl->tpl_vars['FORLISTVIEW']->value=='yes'&&$_smarty_tpl->tpl_vars['EMAIL_FIELDS_COUNT']->value=="0"){?><?php echo vtranslate('LBL_SELECT_TEMPLATES','EMAILMaker');?>
<?php }else{ ?><?php echo vtranslate('LBL_SELECT_EMAIL_IDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></h3></div><div class="hide" style="display:none;"><textarea name="toemailinfo_emailField" /></textarea><textarea name="toMailNamesList_emailField" /></textarea><textarea name="toemailinfo_emailCCField" /></textarea><textarea name="toMailNamesList_emailCCField" /></textarea><textarea name="toemailinfo_emailBCCField" /></textarea><textarea name="toMailNamesList_emailBCCField" /></textarea></div><input type="hidden" name="selected_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SELECTED_IDS']->value);?>
 /><input type="hidden" name="excluded_ids" value=<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['EXCLUDED_IDS']->value);?>
 /><input type="hidden" name="cvid" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><input type="hidden" name="viewname" value="<?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="view" value="ComposeEmail"/><input type="hidden" name="search_key" value= "<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
" /><input type="hidden" name="operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" name="search_value" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><input type="hidden" name="ispdfactive" id="ispdfactive" value="0" /><input type="hidden" name="total_emailoptout" value="<?php echo $_smarty_tpl->tpl_vars['TOTAL_EMAILOPTOUT']->value;?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['PARENT_MODULE']->value)){?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
" /><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_RECORD']->value;?>
" /><input type="hidden" name="parentModule" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE']->value;?>
" /><?php }?><?php if ($_smarty_tpl->tpl_vars['FORLISTVIEW']->value!='yes'){?><input type="hidden" name="ispdfactive" value="<?php if ($_smarty_tpl->tpl_vars['PDFTEMPLATEID']->value!=''){?>1<?php }else{ ?>0<?php }?>"><input type="hidden" name="pdftemplateid" value="<?php echo $_smarty_tpl->tpl_vars['PDFTEMPLATEID']->value;?>
"><input type="hidden" name="pdflanguage" value="<?php echo $_smarty_tpl->tpl_vars['PDFLANGUAGE']->value;?>
"><?php }?><div id='multiEmailContainer'><div class='padding20'><?php $_smarty_tpl->tpl_vars['IS_INPUT_SELECTED_DEFINED'] = new Smarty_variable('0', null, 0);?><div class="row-fluid padding1per"><span class="span<?php if ($_smarty_tpl->tpl_vars['FORLISTVIEW']->value=='yes'){?>3<?php }else{ ?>2<?php }?> textAlignRight "><?php echo vtranslate('LBL_TO','EMAILMaker');?>
<span class="redColor">*</span>:</span><span class="span<?php if ($_smarty_tpl->tpl_vars['FORLISTVIEW']->value=='yes'){?>9<?php }else{ ?>10<?php }?> emailToFields"><input type="hidden" class="emailFields" value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELDS_COUNT']->value;?>
"><select id="emailField" name="toEmail" type="text" style="width:100%" class="chzn-select" multiple><?php  $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->_loop = false;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELDS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->_loop = true;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->key;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value;?>
"><?php  $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EMAIL_FIELD_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emailFieldIterator']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['emailFieldIterator']['index']++;
?><?php $_smarty_tpl->tpl_vars['EMAIL_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['crmname'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['crmname']!=''){?><?php $_smarty_tpl->tpl_vars['EMAIL_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['crmname'], null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['EMAIL_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['fieldlabel'], null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['emailoptout']=="0"&&$_smarty_tpl->getVariable('smarty')->value['foreach']['emailFieldIterator']['index']=="0"&&$_smarty_tpl->tpl_vars['SINGLE_RECORD']->value=="yes"&&$_smarty_tpl->tpl_vars['IS_INPUT_CHECKED_DEFINED']->value=="0"){?><?php $_smarty_tpl->tpl_vars['IS_INPUT_SELECTED'] = new Smarty_variable('selected', null, 0);?><?php $_smarty_tpl->tpl_vars['IS_INPUT_SELECTED_DEFINED'] = new Smarty_variable('1', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['IS_INPUT_SELECTED'] = new Smarty_variable('', null, 0);?><?php }?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['crmid'];?>
|<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['fieldname'];?>
|<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['module'];?>
" <?php echo $_smarty_tpl->tpl_vars['IS_INPUT_SELECTED']->value;?>
><?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['label'];?>
 <?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['value']!=''&&$_smarty_tpl->tpl_vars['SINGLE_RECORD']->value=="yes"){?>: <?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['value'];?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value!=''){?>(<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value;?>
)<?php }?><?php }?> <?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELD_DATA']->value['emailoptout']=="1"&&$_smarty_tpl->tpl_vars['SINGLE_RECORD']->value=="yes"){?>&nbsp(<?php echo vtranslate('Email Opt Out',$_smarty_tpl->tpl_vars['MODULE']->value);?>
)<?php }?></option><?php } ?></optgroup><?php } ?></select></span></div><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELDS_COUNT']->value=="0"&&$_smarty_tpl->tpl_vars['SOURCE_NAME']->value!=''&&$_smarty_tpl->tpl_vars['FORLISTVIEW']->value!='yes'){?><?php echo $_smarty_tpl->tpl_vars['SOURCE_NAME']->value;?>
 <?php echo vtranslate('DO_NOT_HAVE_AN_EMAIL_ID','EMAILMaker');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['FORLISTVIEW']->value=='yes'){?><?php if ($_smarty_tpl->tpl_vars['CRM_TEMPLATES_EXIST']->value=='0'){?><div class="row-fluid padding1per"><span class="span3 textAlignRight"><?php echo vtranslate('LBL_SELECT_EMAIL_TEMPLATE','EMAILMaker');?>
:</span><span class="span9"><select id="use_common_email_template" name="emailtemplateid" class="chzn-select" style="width:100%"><option value=""><?php echo vtranslate('LBL_NONE','EMAILMaker');?>
</option><?php  $_smarty_tpl->tpl_vars["options"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["options"]->_loop = false;
 $_smarty_tpl->tpl_vars["category_name"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CRM_TEMPLATES']->value["1"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["options"]->key => $_smarty_tpl->tpl_vars["options"]->value){
$_smarty_tpl->tpl_vars["options"]->_loop = true;
 $_smarty_tpl->tpl_vars["category_name"]->value = $_smarty_tpl->tpl_vars["options"]->key;
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['category_name']->value;?>
"><?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['title']!=''){?>title="<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['value']==$_smarty_tpl->tpl_vars['DEFAULT_TEMPLATE']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</option><?php } ?></optgroup><?php } ?><?php  $_smarty_tpl->tpl_vars["option"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["option"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CRM_TEMPLATES']->value["0"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["option"]->key => $_smarty_tpl->tpl_vars["option"]->value){
$_smarty_tpl->tpl_vars["option"]->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['title']!=''){?>title="<?php echo $_smarty_tpl->tpl_vars['option']->value['title'];?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['option']->value['value']==$_smarty_tpl->tpl_vars['DEFAULT_TEMPLATE']->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['label'];?>
</option><?php } ?></select></span></div><?php }?><?php if (sizeof($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value)>1){?><div class="row-fluid padding1per"><span class="span3 textAlignRight"><?php echo vtranslate('LBL_LANGUAGE','EMAILMaker');?>
:</span><span class="span9"><select name="email_template_language" id="email_template_language" class="chzn-select" style="span4" size="1"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value,'selected'=>$_smarty_tpl->tpl_vars['CURRENT_LANGUAGE']->value),$_smarty_tpl);?>
</select></span></div><?php }else{ ?><?php  $_smarty_tpl->tpl_vars["lang"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["lang"]->_loop = false;
 $_smarty_tpl->tpl_vars["lang_key"] = new Smarty_Variable;
 $_from = ($_smarty_tpl->tpl_vars['TEMPLATE_LANGUAGES']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["lang"]->key => $_smarty_tpl->tpl_vars["lang"]->value){
$_smarty_tpl->tpl_vars["lang"]->_loop = true;
 $_smarty_tpl->tpl_vars["lang_key"]->value = $_smarty_tpl->tpl_vars["lang"]->key;
?><input type="hidden" name="email_template_language" id="email_template_language" value="<?php echo $_smarty_tpl->tpl_vars['lang_key']->value;?>
"/><?php } ?><?php }?><?php if ($_smarty_tpl->tpl_vars['IS_PDFMAKER']->value=='yes'){?><div class='hide' id='EMAILMakerPDFTemplatesContainer'><div class='row-fluid padding1per'><span class="span3 textAlignRight"><?php echo vtranslate('LBL_SELECT_PDF_TEMPLATES','EMAILMaker');?>
:</span><span class="span9"><select id="use_common_pdf_template" class="detailedViewTextBox" multiple style="width:100%;" size="5"><?php  $_smarty_tpl->tpl_vars["itemArr"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["itemArr"]->_loop = false;
 $_smarty_tpl->tpl_vars["templateid"] = new Smarty_Variable;
 $_from = ($_smarty_tpl->tpl_vars['PDF_TEMPLATES']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["itemArr"]->key => $_smarty_tpl->tpl_vars["itemArr"]->value){
$_smarty_tpl->tpl_vars["itemArr"]->_loop = true;
 $_smarty_tpl->tpl_vars["templateid"]->value = $_smarty_tpl->tpl_vars["itemArr"]->key;
?><?php if ($_smarty_tpl->tpl_vars['itemArr']->value['is_default']=='1'||$_smarty_tpl->tpl_vars['itemArr']->value['is_default']=='3'){?><option value="<?php echo $_smarty_tpl->tpl_vars['templateid']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['itemArr']->value['templatename'];?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['templateid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['itemArr']->value['templatename'];?>
</option><?php }?><?php } ?></select></span></div><div class="row-fluid"><div class='pull-right' style='padding:10px 0px 10px 0px'><button id='removePDFMakerTemplate' class='btn' onClick='return false'><!--i class='icon-plus-sign'></i--><i class="icon-minus icon-black"></i> <?php echo vtranslate('LBL_REMOVE_PDFMAKER_TEMPLATES','EMAILMaker');?>
</button></div></div></div><div class="row-fluid"><span class='pull-right' id='EMAILMakerPDFTemplatesBtn'><button id='addPDFMakerTemplate' class='btn' onClick='return false'><!--i class='icon-plus-sign'></i--><i class="icon-plus icon-black"></i> <?php echo vtranslate('LBL_ADD_PDFMAKER_TEMPLATES','EMAILMaker');?>
</button></span></div><?php }?><?php }?></div></div><div class='modal-footer'><div class=" pull-right cancelLinkContainer"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><?php if ($_smarty_tpl->tpl_vars['EMAIL_FIELDS_COUNT']->value!="0"||$_smarty_tpl->tpl_vars['BASIC']->value!="true"){?><button class="btn addButton" type="submit" name="selectfield"><strong><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div><?php if ($_smarty_tpl->tpl_vars['RELATED_LOAD']->value==true){?><input type="hidden" name="relatedLoad" value=<?php echo $_smarty_tpl->tpl_vars['RELATED_LOAD']->value;?>
 /><?php }?></form></div><?php }} ?>