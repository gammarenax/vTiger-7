<?php /* Smarty version Smarty-3.1.7, created on 2017-10-31 09:23:09
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/EditCustomLabel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102671087059f840fdb65b60-02928293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe15087b44767ad4163a2e958bf0eb3d3237f257' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/EditCustomLabel.tpl',
      1 => 1505402768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102671087059f840fdb65b60-02928293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LABELID' => 0,
    'CURR_LANG' => 0,
    'LANGID' => 0,
    'CUSTOM_LABEL_KEY' => 0,
    'CUSTOM_LABEL_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59f840fdbe6bc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f840fdbe6bc')) {function content_59f840fdbe6bc($_smarty_tpl) {?>
<div class="CustomLabelModalContainer"><div class="modal-header"><button class="close vtButton" data-dismiss="modal">×</button><?php if ($_smarty_tpl->tpl_vars['LABELID']->value!=''){?><h3><?php echo vtranslate('LBL_EDIT_CUSTOM_LABEL','PDFMaker');?>
 (<?php echo $_smarty_tpl->tpl_vars['CURR_LANG']->value['label'];?>
)</h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ADD_NEW_CUSTOM_LABEL','PDFMaker');?>
 (<?php echo $_smarty_tpl->tpl_vars['CURR_LANG']->value['label'];?>
)</h3><?php }?></div><form id="editCustomLabel" class="form-horizontal contentsBackground"><input type="hidden" name="labelid" value="<?php echo $_smarty_tpl->tpl_vars['LABELID']->value;?>
" /><input type="hidden" name="langid" value="<?php echo $_smarty_tpl->tpl_vars['LANGID']->value;?>
" /><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_KEY','PDFMaker');?>
</label><div class="controls"><?php if ($_smarty_tpl->tpl_vars['LABELID']->value==''){?>C_<input type="text" name="LblKey" placeholder="<?php echo vtranslate('LBL_ENTER_KEY','PDFMaker');?>
" value="" data-validation-engine='validate[required]' /><?php }else{ ?>C_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_LABEL_KEY']->value;?>
<?php }?></div></div><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_VALUE','PDFMaker');?>
</label><div class="controls input-append"><input type="text" name="LblVal" class="input-large" placeholder="<?php echo vtranslate('LBL_ENTER_CUSTOM_LABEL_VALUE','PDFMaker');?>
" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_LABEL_VALUE']->value;?>
" data-validation-engine='validate[required]' /></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['LABELID']->value==''){?><input type="hidden" class="addCustomLabelView" value="true" /><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>