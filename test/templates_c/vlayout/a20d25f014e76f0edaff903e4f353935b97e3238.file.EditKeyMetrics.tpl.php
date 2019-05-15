<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:05:07
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/EditKeyMetrics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56047913259ba9aa3003d21-33673429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a20d25f014e76f0edaff903e4f353935b97e3238' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/EditKeyMetrics.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56047913259ba9aa3003d21-33673429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'METRICS_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9aa301d9d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9aa301d9d')) {function content_59ba9aa301d9d($_smarty_tpl) {?>

<div id="addFolderContainer" class="modelContainer"><div class="modal-header"><button data-dismiss="modal" class="close" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate('LBL_ADD_NEW_KEY_METRICS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><form class="form-horizontal contentsBackground" id="addKeyMetricsWidget" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="KeyMetrics" /><input type="hidden" name="mode" value="addwidget" /><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['METRICS_MODEL']->value->getId();?>
" /><div class="modal-body"><div class="row-fluid"><div class="control-group"><label class="control-label"><span class="redColor">*</span><?php echo vtranslate('LBL_WIDGET_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><input data-validation-engine='validate[required]' id="name" name="name" class="span4" type="text" value="<?php echo $_smarty_tpl->tpl_vars['METRICS_MODEL']->value->getName();?>
"/></div></div><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_WIDGET_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><div class="controls"><textarea rows="5" class="input-xxlarge fieldValue span4" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['METRICS_MODEL']->value->get('description');?>
</textarea></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form></div><?php }} ?>