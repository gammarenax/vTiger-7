<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:18:26
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/LangManagement/Settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9417368165c87bfb23d53d6-56429414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3232a742071cbb1159eec85236e6c279f3d425c4' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/LangManagement/Settings.tpl',
      1 => 1552392681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9417368165c87bfb23d53d6-56429414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87bfb23f206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87bfb23f206')) {function content_5c87bfb23f206($_smarty_tpl) {?>
<div class="container-fluid"><div class="widget_header row-fluid"><div class="col-md-10"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3>&nbsp;<?php echo vtranslate('LBL_Module_desc',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-md-2"></div></div><hr><div class="clearfix"></div><div class="summaryWidgetContainer LangManagement"><div class="contents tabbable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="active"><a data-toggle="tab" href="#lang_list"><strong><?php echo vtranslate('LBL_TAB_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="edit_lang"><a data-toggle="tab" href="#edit_lang" data-mode="editLang"><strong><?php echo vtranslate('LBL_TAB_EDITLANG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><!--<li class="editHelpIcon"><a data-toggle="tab" href="#editHelpIcon" data-mode="editHelpIcon"><strong></strong></a></li>--></ul><div class="tab-content layoutContent padding10 themeTableColor overflowVisible"><div class="tab-pane active" id="lang_list"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LangList.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="tab-pane" id="edit_lang" data-mode="editLang"></div><div class="tab-pane" id="editHelpIcon" data-mode="editHelpIcon"></div></div></div></div><div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddLanguage.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AddTranslation.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>