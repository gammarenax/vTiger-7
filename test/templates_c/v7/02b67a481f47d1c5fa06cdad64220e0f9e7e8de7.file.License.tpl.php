<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 10:01:54
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/License.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16266357015cb4569270a2d3-13071408%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02b67a481f47d1c5fa06cdad64220e0f9e7e8de7' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/License.tpl',
      1 => 1555320277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16266357015cb4569270a2d3-13071408',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LICENSE' => 0,
    'MODE' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb456927183c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb456927183c')) {function content_5cb456927183c($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Settings/ITS4YouDynamicFields/resources/License.js"></script><div class="container-fluid" id="licenseContainer"><form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal"><br><label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_LICENSE','Settings:ITS4YouDynamicFields');?>
</label><br clear="all"><hr><input type="hidden" name="module" value="ITS4YouDynamicFields" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="view" value="" /><input type="hidden" name="license_key_val" id="license_key_val" value="<?php echo $_smarty_tpl->tpl_vars['LICENSE']->value;?>
" /><br /><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LicenseDetails.tpl','Settings:ITS4YouDynamicFields'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<br /></div><?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?><div class="pull-right"><button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><a class="cancelLink" onclick="javascript:window.history.back();" type="reset">Cancel</a></div><?php }?></form></div><script language="javascript" type="text/javascript">jQuery(document).ready(function() {var thisInstance = ITS4YouDynamicFields_License_Js.getInstance();thisInstance.registerEvents();});</script><?php }} ?>