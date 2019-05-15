<?php /* Smarty version Smarty-3.1.7, created on 2017-11-11 08:03:19
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashboardHeaderIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202670967159c0bf02337fd6-10329539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c727af7d853d9880d97254ec78ba049c963b8b34' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashboardHeaderIcons.tpl',
      1 => 1510386526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202670967159c0bf02337fd6-10329539',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c0bf02355c1',
  'variables' => 
  array (
    'WIDGET' => 0,
    'detailViewUrl' => 0,
    'MODULE_NAME' => 0,
    'SETTING_EXIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0bf02355c1')) {function content_59c0bf02355c1($_smarty_tpl) {?>﻿
	<a name="ddetail" class="icon-th-list" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
" onclick='window.location.href = "<?php echo $_smarty_tpl->tpl_vars['detailViewUrl']->value;?>
"' >
		<i class="icon-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_VIEW_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" alt="<?php echo vtranslate('LBL_VIEW_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></i>
	</a>
<?php if ($_smarty_tpl->tpl_vars['SETTING_EXIST']->value){?>
<a name="dfilter">
	<i class='icon-cog' border='0' align="absmiddle" title="<?php echo vtranslate('LBL_FILTER');?>
" alt="<?php echo vtranslate('LBL_FILTER');?>
"/>
</a>
<?php }?>
<a href="javascript:void(0);" name="drefresh" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
&linkid=<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
&content=data">
	<i class="icon-refresh" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REFRESH');?>
" alt="<?php echo vtranslate('LBL_REFRESH');?>
"></i>
</a>
<?php if (!$_smarty_tpl->tpl_vars['WIDGET']->value->isDefault()){?>
	<a name="dclose" class="widget" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
">
		<i class="icon-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REMOVE');?>
" alt="<?php echo vtranslate('LBL_REMOVE');?>
"></i>
	</a>
<?php }?><?php }} ?>