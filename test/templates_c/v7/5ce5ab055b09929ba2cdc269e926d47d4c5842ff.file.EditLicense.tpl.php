<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 18:01:53
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditLicense.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12509174645cd319914499e2-67352084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce5ab055b09929ba2cdc269e926d47d4c5842ff' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditLicense.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12509174645cd319914499e2-67352084',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TYPE' => 0,
    'MODULE' => 0,
    'LICENSEKEY' => 0,
    'LABELID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd319914a5a2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd319914a5a2')) {function content_5cd319914a5a2($_smarty_tpl) {?>
<div class="CustomLabelModalContainer"><div class="modal-header"><button class="close vtButton" data-dismiss="modal">×</button><?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?><h3><?php echo vtranslate('LBL_REACTIVATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ACTIVATE_KEY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><?php }?></div><form id="editLicense" class="form-horizontal contentsBackground"><input type="hidden" name="module" value=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
><input type="hidden" name="action" value="License"><input type="hidden" name="mode" value="editLicense"><input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
"><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="muted control-label"><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><input type="text" name="licensekey" value="<?php echo $_smarty_tpl->tpl_vars['LICENSEKEY']->value;?>
" data-validation-engine='validate[required]' /></div></div></div></div><?php if ($_smarty_tpl->tpl_vars['LABELID']->value==''){?><input type="hidden" class="addCustomLabelView" value="true" /><?php }?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl','Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>