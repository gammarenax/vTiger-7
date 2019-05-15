<?php /* Smarty version Smarty-3.1.7, created on 2019-05-13 13:04:10
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/CreateLanguageModalContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15144554755cd96b4aa42af4-67048234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81fc4821eed10f2c318ad63c11e7df597a93d74' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/CreateLanguageModalContent.tpl',
      1 => 1557319872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15144554755cd96b4aa42af4-67048234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LANG_PREF' => 0,
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
    'LANGUAGES' => 0,
    'LANG_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd96b4aa511d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd96b4aa511d')) {function content_5cd96b4aa511d($_smarty_tpl) {?>
<div class="modal-dialog createLanguageModal"><div class="modal-content"><form class="form-horizontal newLanguageForm" id="newLanguageForm" name="newLanguageForm" method="post"><?php ob_start();?><?php echo vtranslate('LBL_CREATE_NEW_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_smarty_tpl->tpl_vars['LANG_PREF']->value), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body "><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" class='inputElement col-sm-9' maxlength="50" name="newLanguage" id="newLanguage" value="" data-rule-required='true' style='width: 75%' /></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" class='inputElement col-sm-9' maxlength="30" name="langName" id="langName" value="" data-rule-required='true' style='width: 75%' /></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_CODE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="controls col-sm-7"><input type="text" class='inputElement col-sm-9' maxlength="10" name="langCode" id="langCode" value="" data-rule-required='true' style='width: 75%' /></div></div><div class="form-group"><label class="control-label fieldLabel col-sm-5"><?php echo vtranslate('LBL_SOURCE_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></label><div class="controls col-sm-7"><select class="select2 col-sm-9" id="selectCopyLang" name="selectCopyLang"><?php  $_smarty_tpl->tpl_vars['LANG_INFO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LANG_INFO']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LANG_INFO']->key => $_smarty_tpl->tpl_vars['LANG_INFO']->value){
$_smarty_tpl->tpl_vars['LANG_INFO']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['LANG_INFO']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['prefix'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG_INFO']->value['label'];?>
</option><?php } ?></select></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div></div><?php }} ?>