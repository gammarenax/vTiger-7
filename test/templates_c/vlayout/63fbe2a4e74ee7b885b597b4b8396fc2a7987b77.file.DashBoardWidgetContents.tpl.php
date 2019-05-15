<?php /* Smarty version Smarty-3.1.7, created on 2017-12-11 15:25:29
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3099678555a0b5ae183f758-40882873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63fbe2a4e74ee7b885b597b4b8396fc2a7987b77' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/dashboards/DashBoardWidgetContents.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3099678555a0b5ae183f758-40882873',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0b5ae189637',
  'variables' => 
  array (
    'display_widget_header' => 0,
    'recordid' => 0,
    'MODULE_NAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0b5ae189637')) {function content_5a0b5ae189637($_smarty_tpl) {?>

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