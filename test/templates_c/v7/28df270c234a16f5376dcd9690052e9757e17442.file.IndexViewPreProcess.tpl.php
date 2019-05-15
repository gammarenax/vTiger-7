<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 10:14:18
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/IndexViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14654074335cb4597a9c4ff0-02321178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28df270c234a16f5376dcd9690052e9757e17442' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/IndexViewPreProcess.tpl',
      1 => 1555322855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14654074335cb4597a9c4ff0-02321178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'VIEW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb4597a9d334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4597a9d334')) {function content_5cb4597a9d334($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="container-fluid app-nav"><div class="row"><?php echo $_smarty_tpl->getSubTemplate ("modules/ITS4YouReports/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></nav><div class="clearfix main-container"><div><div class="editViewPageDiv viewContent"><?php if ('Edit'!=$_smarty_tpl->tpl_vars['VIEW']->value&&'EditKeyMetricsRow'!=$_smarty_tpl->tpl_vars['VIEW']->value){?><div class="reports-content-area"> <?php }?><?php }} ?>