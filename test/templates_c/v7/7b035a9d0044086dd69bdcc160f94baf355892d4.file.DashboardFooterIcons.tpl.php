<?php /* Smarty version Smarty-3.1.7, created on 2019-05-07 12:30:51
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashboardFooterIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9391581885cb4591c3a44b2-78602686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b035a9d0044086dd69bdcc160f94baf355892d4' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashboardFooterIcons.tpl',
      1 => 1557232108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9391581885cb4591c3a44b2-78602686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb4591c3c257',
  'variables' => 
  array (
    'SETTING_EXIST' => 0,
    'CHART_TYPE' => 0,
    'DATA' => 0,
    'CHART_DATA' => 0,
    'WIDGET' => 0,
    'recordid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4591c3c257')) {function content_5cb4591c3c257($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['SETTING_EXIST']->value){?>
	<a name="dfilter">
		<i class='fa fa-cog' border='0' align="absmiddle" title="<?php echo vtranslate('LBL_FILTER');?>
" alt="<?php echo vtranslate('LBL_FILTER');?>
"/>
	</a>
<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['CHART_TYPE']->value)){?>
	<?php $_smarty_tpl->tpl_vars['CHART_DATA'] = new Smarty_variable(ZEND_JSON::decode($_smarty_tpl->tpl_vars['DATA']->value), null, 0);?>
	<?php $_smarty_tpl->tpl_vars['CHART_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHART_DATA']->value['values'], null, 0);?>
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['WIDGET']->value->isDefault()){?>
	<?php if ('ShowWidget'==$_REQUEST['view']){?>
		<a name="rclose" class="widget" href="index.php?module=ITS4YouReports&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
">
			<i class="fa fa-bars" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_DETAILS');?>
" alt="<?php echo vtranslate('LBL_DETAILS');?>
"></i>
		</a>
	<?php }?>
	<a name="dclose" class="widget" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getDeleteUrl();?>
">
		<i class="fa fa-remove" hspace="2" border="0" align="absmiddle" title="<?php echo vtranslate('LBL_REMOVE');?>
" alt="<?php echo vtranslate('LBL_REMOVE');?>
"></i>
	</a>
<?php }?><?php }} ?>