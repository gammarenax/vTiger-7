<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 17:23:12
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/Install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7544268245cd30ec3762641-78787620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73c6b4c1b072e16c1c0d9b35601120813212501' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/Install.tpl',
      1 => 1557336054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7544268245cd30ec3762641-78787620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd30ec37915c',
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'STEP' => 0,
    'LABELS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd30ec37915c')) {function content_5cd30ec37915c($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 2%;padding-right: 2%"><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><h3><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="row"><?php $_smarty_tpl->tpl_vars['LABELS'] = new Smarty_variable(array("step1"=>"LBL_VALIDATION","step2"=>"LBL_FINISH"), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("BreadCrumbs.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ACTIVESTEP'=>$_smarty_tpl->tpl_vars['STEP']->value,'BREADCRUMB_LABELS'=>$_smarty_tpl->tpl_vars['LABELS']->value,'MODULE'=>$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), 0);?>
</div><div class="clearfix"></div><div class="installationContents"><div style="border:1px solid #ccc;padding:1%;<?php if ($_smarty_tpl->tpl_vars['STEP']->value!="1"){?>display:none;<?php }?>" id="stepContent1"><form name="install" id="editLicense" method="POST" action="index.php" class="form-horizontal"><input type="hidden" name="module" value="ITS4YouDynamicFields"/><input type="hidden" name="view" value="List"/><input type="hidden" name="parent" value="Settings"><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><h4><strong><?php echo vtranslate('LBL_WELCOME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></h4><br><p><?php echo vtranslate('LBL_WELCOME_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><?php echo vtranslate('LBL_WELCOME_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><br><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><label><strong><?php echo vtranslate('LBL_INSERT_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><p><?php echo vtranslate('LBL_ONLINE_ASSURE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LicenseDetails.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></form></div><div style="border:1px solid #ccc;padding:1%;<?php if ($_smarty_tpl->tpl_vars['STEP']->value!="4"){?>display:none;<?php }?>" id="stepContent2"><div class="row"><div class="col-sm-12 col-md-12 col-lg-12"><h4><strong><?php echo vtranslate('LBL_INSTALL_SUCCESS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></h4><br><div class="controls"><button type="submit" id="next_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;</div></div></div></div></div></div><script language="javascript" type="text/javascript">jQuery(document).ready(function() {var thisInstance = ITS4YouDynamicFields_License_Js.getInstance();thisInstance.registerInstallEvents();});</script><?php }} ?>