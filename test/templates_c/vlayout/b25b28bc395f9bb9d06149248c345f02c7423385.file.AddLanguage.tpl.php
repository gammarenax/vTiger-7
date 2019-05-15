<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:18:26
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/LangManagement/AddLanguage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:654843415c87bfb2425a15-79173358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b25b28bc395f9bb9d06149248c345f02c7423385' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/LangManagement/AddLanguage.tpl',
      1 => 1552392681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '654843415c87bfb2425a15-79173358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87bfb2436b0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87bfb2436b0')) {function content_5c87bfb2436b0($_smarty_tpl) {?>
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