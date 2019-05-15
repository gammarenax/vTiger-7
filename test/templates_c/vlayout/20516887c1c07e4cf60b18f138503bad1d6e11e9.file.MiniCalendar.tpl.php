<?php /* Smarty version Smarty-3.1.7, created on 2017-10-21 15:39:45
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/MiniCalendar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188397908359eb6a41310468-44196806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20516887c1c07e4cf60b18f138503bad1d6e11e9' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/MiniCalendar.tpl',
      1 => 1508597451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188397908359eb6a41310468-44196806',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59eb6a4136a02',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb6a4136a02')) {function content_59eb6a4136a02($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/gammaren/www/crm6.gammarenax.ch/libraries/Smarty/libs/plugins/modifier.date_format.php';
?><input type='hidden' name='dateSelected' id='dateSelected'value='<?php if (isset($_GET['start'])){?><?php echo $_GET['start'];?>
<?php }else{ ?><?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
<?php }?>'/><input type='hidden' name='defaultView' id='defaultView'value='<?php if (isset($_GET['defaultView'])){?><?php echo $_GET['defaultView'];?>
<?php }else{ ?>agendaView<?php }?>'/><div id='calendarmini'></div><?php }} ?>