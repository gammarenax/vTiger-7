<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 13:07:46
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashboardFooterIcons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17807993815cd2d4a26951e0-42940720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a6ecd05d81c77d9c908bce1f80453cdee6758ff' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashboardFooterIcons.tpl',
      1 => 1557319863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17807993815cd2d4a26951e0-42940720',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2d4a26e80c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2d4a26e80c')) {function content_5cd2d4a26e80c($_smarty_tpl) {?>
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