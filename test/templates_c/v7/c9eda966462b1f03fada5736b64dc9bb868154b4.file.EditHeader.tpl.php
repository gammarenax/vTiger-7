<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:28
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15248797455cdac72c5e38f9-41178089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9eda966462b1f03fada5736b64dc9bb868154b4' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditHeader.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15248797455cdac72c5e38f9-41178089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REPORTTYPE' => 0,
    'MODULE' => 0,
    'LABELS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cdac72c67f6b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72c67f6b')) {function content_5cdac72c67f6b($_smarty_tpl) {?>
<div class="main-container clearfix"><?php if (file_exists('modules/Vtiger/partials/Menubar.tpl')){?><div id="modnavigator" class="module-nav editViewModNavigator"><div class="hidden-xs hidden-sm mod-switcher-container"><?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Menubar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }?><div class="editViewPageDiv mailBoxEditDiv viewContent"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><div class="editContainer" style="padding-left: 2%;padding-right: 0%; min-height:70em;"><input type="hidden" name="reporttype" id="reporttype" value="<?php echo $_smarty_tpl->tpl_vars['REPORTTYPE']->value;?>
" /><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("1"=>"LBL_REPORT_DETAILS","13"=>"LBL_REPORT_SQL","4"=>"LBL_SPECIFY_GROUPING","5"=>"LBL_SELECT_COLUMNS","6"=>"LBL_CALCULATIONS","7"=>"LBL_LABELS","8"=>"LBL_FILTERS","9"=>"LBL_SHARING","10"=>"LBL_LIMIT_SCHEDULER","11"=>"LBL_GRAPHS","12"=>"LBL_REPORT_DASHBOARDS"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>1,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>
</div><div class="clearfix"></div><?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/Buttons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>