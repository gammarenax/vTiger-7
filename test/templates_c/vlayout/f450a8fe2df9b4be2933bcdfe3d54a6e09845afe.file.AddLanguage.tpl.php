<?php /* Smarty version Smarty-3.1.7, created on 2018-02-01 14:54:34
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/LangManagement/AddLanguage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826359995a732a2ac677f8-60956206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f450a8fe2df9b4be2933bcdfe3d54a6e09845afe' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/LangManagement/AddLanguage.tpl',
      1 => 1517496866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826359995a732a2ac677f8-60956206',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a732a2acc7ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a732a2acc7ea')) {function content_5a732a2acc7ea($_smarty_tpl) {?>
<div id="AddNewLangMondal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
        <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="myModalLabel" class="modal-title"><?php echo vtranslate('LBL_ADD_LANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>
			</div>
			<div class="modal-body form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_label',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="label" class="form-control" type="text" /></div>
				</div><br />
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_name',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="name" class="form-control" type="text" /></div>
				</div><br />
				<div class="form-group">
					<label class="control-label col-md-3"><?php echo vtranslate('LBL_Lang_prefix',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;</label>
					<div class="col-md-7"><input name="prefix" class="form-control" type="text" /></div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><?php echo vtranslate('LBL_Cancel',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
				<button class="btn btn-primary"><?php echo vtranslate('LBL_AddLanguage',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div>
		</div>
	</div>
</div>
<?php }} ?>