<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:08:28
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardKeyMetrics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29684983059ba9b6c0b42a7-55393491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee8dbe2ff50fda3c40b8aea7e0ebd4f9ff6e709' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardKeyMetrics.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29684983059ba9b6c0b42a7-55393491',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_widget_header' => 0,
    'MODULE_NAME' => 0,
    'DATA' => 0,
    'keyMetricsRow' => 0,
    'RHEIGHT' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9b6c0d244',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9b6c0d244')) {function content_59ba9b6c0d244($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['display_widget_header']->value=='true'){?>
    <div class="dashboardWidgetHeader">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/KeyMetricsHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
<?php }?>
<div class="" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="dashboardWidgetContent" style="padding: 5px; overflow: hidden; width: auto; height: 250px;"><?php if (!empty($_smarty_tpl->tpl_vars['DATA']->value)){?><?php  $_smarty_tpl->tpl_vars['keyMetricsRow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['keyMetricsRow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['keyMetricsRow']->key => $_smarty_tpl->tpl_vars['keyMetricsRow']->value){
$_smarty_tpl->tpl_vars['keyMetricsRow']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['RHEIGHT'] = new Smarty_variable($_smarty_tpl->tpl_vars['keyMetricsRow']->value['rheight'], null, 0);?><div style="padding:5px;height:<?php echo $_smarty_tpl->tpl_vars['RHEIGHT']->value;?>
em;"><span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['keyMetricsRow']->value['value'];?>
</span><a href="<?php echo $_smarty_tpl->tpl_vars['keyMetricsRow']->value['result_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['keyMetricsRow']->value['name'];?>
</a></div><?php } ?><?php }else{ ?><?php echo vtranslate('LBL_NO_DATA_TO_DISPLAY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php }?></div></div><div style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 260px;" class="slimScrollBar ui-draggable"></div><div style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div>
<?php }} ?>