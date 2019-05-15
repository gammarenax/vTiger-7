<?php /* Smarty version Smarty-3.1.7, created on 2019-03-12 14:40:36
         compiled from "/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/SideBar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7536792995c87c4e49601d0-13447480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aabfb5de4407e34a50565bc9d4b65780775c293f' => 
    array (
      0 => '/var/www/html/gammaren6/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/SideBar.tpl',
      1 => 1552392677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7536792995c87c4e49601d0-13447480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c87c4e496cdf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c87c4e496cdf')) {function content_5c87c4e496cdf($_smarty_tpl) {?>

<div class="sideBarContents"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarLinks.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBarWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>