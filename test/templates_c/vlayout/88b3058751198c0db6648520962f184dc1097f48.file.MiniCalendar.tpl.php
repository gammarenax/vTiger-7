<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 10:50:45
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/MiniCalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3741347675a5dd6d3288cf5-35016823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88b3058751198c0db6648520962f184dc1097f48' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/MiniCalendar.tpl',
      1 => 1516099829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3741347675a5dd6d3288cf5-35016823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5dd6d330df7',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5dd6d330df7')) {function content_5a5dd6d330df7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/gammaren/www/crm.gammarenax.ch/libraries/Smarty/libs/plugins/modifier.date_format.php';
?><input type='hidden' name='dateSelected' id='dateSelected'value='<?php if (isset($_GET['start'])){?><?php echo $_GET['start'];?>
<?php }else{ ?><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
<?php }?>'/><input type='hidden' name='defaultView' id='defaultView'value='<?php if (isset($_GET['defaultView'])){?><?php echo $_GET['defaultView'];?>
<?php }else{ ?>agendaView<?php }?>'/><div id='calendarmini'></div><?php }} ?>