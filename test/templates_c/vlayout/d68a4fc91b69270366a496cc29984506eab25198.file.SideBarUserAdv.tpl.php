<?php /* Smarty version Smarty-3.1.7, created on 2017-10-21 15:39:48
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/SideBarUserAdv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8767028359eb6a440e4458-18412569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd68a4fc91b69270366a496cc29984506eab25198' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/SideBarUserAdv.tpl',
      1 => 1508597452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8767028359eb6a440e4458-18412569',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SUBORDUSERS' => 0,
    'ID' => 0,
    'SHAREDUSERS' => 0,
    'SELECTEDUSERS' => 0,
    'SUBORDUSER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59eb6a441a608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59eb6a441a608')) {function content_59eb6a441a608($_smarty_tpl) {?>Hide users with more than <br/><input type="text" style="width:60px;height:25px;border:1px solid #0000FF;font-size:10px;border:0px" value="<?php echo $_GET['maxlimit'];?>
" name="shareduserlimit">&nbsp;<button name="shareduserlimitBtn" type="button"><i class="icon-refresh"></i></button><br/><?php  $_smarty_tpl->tpl_vars['SUBORDUSER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SUBORDUSER']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUBORDUSERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SUBORDUSER']->key => $_smarty_tpl->tpl_vars['SUBORDUSER']->value){
$_smarty_tpl->tpl_vars['SUBORDUSER']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['SUBORDUSER']->key;
?><label class="checkbox addedCalendars"><?php if (isset($_GET['maxlimit'])&&$_smarty_tpl->tpl_vars['SHAREDUSERS']->value[$_smarty_tpl->tpl_vars['ID']->value]['count']>$_GET['maxlimit']){?><input type="checkbox" class="ckbox" name="sharedUsers[]" value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'><?php }else{ ?><input type="checkbox" class="ckbox" name="sharedUsers[]" value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
' <?php if (in_array($_smarty_tpl->tpl_vars['ID']->value,$_smarty_tpl->tpl_vars['SELECTEDUSERS']->value)||count($_smarty_tpl->tpl_vars['SELECTEDUSERS']->value)==0){?>checked<?php }?>><?php }?><span class='label' style="background-color:<?php if (isset($_smarty_tpl->tpl_vars['SHAREDUSERS']->value[$_smarty_tpl->tpl_vars['ID']->value]['color'])){?><?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS']->value[$_smarty_tpl->tpl_vars['ID']->value]['color'];?>
<?php }else{ ?>#3a87ad<?php }?>;padding:3px;color:white;margin:1px;"><?php echo $_smarty_tpl->tpl_vars['SUBORDUSER']->value;?>
</span>&nbsp;<b> (<?php if (isset($_smarty_tpl->tpl_vars['SHAREDUSERS']->value[$_smarty_tpl->tpl_vars['ID']->value]['count'])){?><?php echo $_smarty_tpl->tpl_vars['SHAREDUSERS']->value[$_smarty_tpl->tpl_vars['ID']->value]['count'];?>
<?php }else{ ?>0<?php }?>)</b><br/></label><?php } ?>


<?php }} ?>