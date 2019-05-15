<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 10:50:45
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/SideBarUserAdv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16619542455a5dd6d4c562f0-71532246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed23ecde0858d5fd461e6caff5091e1d8277b290' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/GreenTimeControl/SideBarUserAdv.tpl',
      1 => 1516099829,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16619542455a5dd6d4c562f0-71532246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5dd6d4ced51',
  'variables' => 
  array (
    'SUBORDUSERS' => 0,
    'ID' => 0,
    'SHAREDUSERS' => 0,
    'SELECTEDUSERS' => 0,
    'SUBORDUSER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5dd6d4ced51')) {function content_5a5dd6d4ced51($_smarty_tpl) {?>Hide users with more than <br/><input type="text" style="width:60px;height:25px;border:1px solid #0000FF;font-size:10px;border:0px" value="<?php echo $_GET['maxlimit'];?>
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