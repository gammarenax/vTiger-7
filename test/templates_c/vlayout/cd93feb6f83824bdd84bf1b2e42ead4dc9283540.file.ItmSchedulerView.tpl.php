<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 10:50:45
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ItmSchedulerView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2392374245a5dd6d3355f76-90432211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd93feb6f83824bdd84bf1b2e42ead4dc9283540' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ItmSchedulerView.tpl',
      1 => 1516099829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2392374245a5dd6d3355f76-90432211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5dd6d33681a',
  'variables' => 
  array (
    'DEFAULTMAXLIMIT' => 0,
    'SELECTEDUSERSJSON' => 0,
    'CALENDATA' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5dd6d33681a')) {function content_5a5dd6d33681a($_smarty_tpl) {?><input type="hidden" name="maxselected" value="<?php if (isset($_GET['maxlimit'])){?><?php echo $_GET['maxlimit'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['DEFAULTMAXLIMIT']->value;?>
<?php }?>"/><input type="hidden" name="selectedusers" value="<?php echo $_smarty_tpl->tpl_vars['SELECTEDUSERSJSON']->value;?>
"/><input type="hidden" name="hour_format" value="<?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['hour_format'];?>
"/><input type="hidden" name="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['start_hour'];?>
"/><input type="hidden" name="end_hour" value="<?php if ($_smarty_tpl->tpl_vars['CALENDATA']->value['end_hour']!=''){?><?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['end_hour'];?>
<?php }else{ ?>21:00<?php }?>"/><div id='calendarSC'></div><?php }} ?>