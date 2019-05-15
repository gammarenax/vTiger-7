<?php /* Smarty version Smarty-3.1.7, created on 2017-10-21 15:39:45
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ItmSchedulerView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146297943059eb6a413969f5-86201307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '112998a3f4f9f437b70493dc801bd202854dc460' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/ItmSchedulerView.tpl',
      1 => 1508597451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146297943059eb6a413969f5-86201307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DEFAULTMAXLIMIT' => 0,
    'SELECTEDUSERSJSON' => 0,
    'CALENDATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59eb6a413e098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb6a413e098')) {function content_59eb6a413e098($_smarty_tpl) {?><input type="hidden" name="maxselected" value="<?php if (isset($_GET['maxlimit'])){?><?php echo $_GET['maxlimit'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['DEFAULTMAXLIMIT']->value;?>
<?php }?>"/><input type="hidden" name="selectedusers" value="<?php echo $_smarty_tpl->tpl_vars['SELECTEDUSERSJSON']->value;?>
"/><input type="hidden" name="hour_format" value="<?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['hour_format'];?>
"/><input type="hidden" name="start_hour" value="<?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['start_hour'];?>
"/><input type="hidden" name="end_hour" value="<?php if ($_smarty_tpl->tpl_vars['CALENDATA']->value['end_hour']!=''){?><?php echo $_smarty_tpl->tpl_vars['CALENDATA']->value['end_hour'];?>
<?php }else{ ?>21:00<?php }?>"/><div id='calendarSC'></div><?php }} ?>