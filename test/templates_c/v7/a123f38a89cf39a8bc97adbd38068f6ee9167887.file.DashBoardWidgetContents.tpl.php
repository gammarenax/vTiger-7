<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 13:07:46
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8562864555cd2d4a2506f28-99263451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a123f38a89cf39a8bc97adbd38068f6ee9167887' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl',
      1 => 1557319863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8562864555cd2d4a2506f28-99263451',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'DATA' => 0,
    'recordid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd2d4a257a28',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd2d4a257a28')) {function content_5cd2d4a257a28($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div style="height:5px;"></div>
<input class="widgetData" type='hidden' value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input id="widgetReports4YouId" type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
' /><div id="reports4you_widget_<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
" style="height:85%;width:95%;margin:auto;" ></div><div class="dashboardWidgetContent"><?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>
</div>

<div class="widgeticons dashBoardWidgetFooter">
    <div class="footerIcons pull-right">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
</div><?php }} ?>