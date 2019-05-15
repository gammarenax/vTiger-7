<?php /* Smarty version Smarty-3.1.7, created on 2017-11-11 08:03:19
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169178552859c0bf0218d944-57034417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '143210b32ee2d148914e1585c859a45ab471a87b' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl',
      1 => 1510386527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169178552859c0bf0218d944-57034417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c0bf02254c9',
  'variables' => 
  array (
    'display_widget_header' => 0,
    'recordid' => 0,
    'MODULE_NAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c0bf02254c9')) {function content_59c0bf02254c9($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['display_widget_header']->value=='true'){?>
    <script type="text/javascript" src="layouts/vlayout/modules/ITS4YouReports/resources/Getreports.js"></script>

    <script type="text/javascript">
            Vtiger_Getreports_Widget_Js('Vtiger_Getreports_Widget_Js',{},{});
    </script>
    
    <div class="dashboardWidgetHeader" id="dashboardWidgetHeader<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
" >
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    </div>
<?php }?>
<div style="height:5px;"></div>
<input class="widgetData" type='hidden' value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input id="widgetReports4YouId" type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
' /><div id="reports4you_widget_<?php echo $_smarty_tpl->tpl_vars['recordid']->value;?>
" style="height:73%;width:95%;margin:auto;" ></div><?php echo $_smarty_tpl->tpl_vars['DATA']->value;?>


<?php }} ?>