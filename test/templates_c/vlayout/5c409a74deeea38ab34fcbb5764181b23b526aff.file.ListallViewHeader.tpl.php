<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:07:04
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179027145859bbec98e3bcf6-93011294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c409a74deeea38ab34fcbb5764181b23b526aff' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/ListallViewHeader.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179027145859bbec98e3bcf6-93011294',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'VERSION_TYPE' => 0,
    'SCHEDULER_STATUS' => 0,
    'CRON_STATUS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbec98eb535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbec98eb535')) {function content_59bbec98eb535($_smarty_tpl) {?>

<div class="container-fluid"><div class="contents row-fluid"><div class="row-fluid paddingTop20"><div class="span8"><h3><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div><span class="span4"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><hr></div><div class="row-fluid"><span class="span4 btn-toolbar" id="newCalcField"><?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="deactivate"||$_smarty_tpl->tpl_vars['VERSION_TYPE']->value==''){?><span class="btn-group"><a href='index.php?module=ITS4YouCalculateFields&parent=Settings&view=License'><span class="btn btn-danger"><?php echo vtranslate("LBL_ACTIVATE_BTN",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></span><?php }else{ ?><button class="btn addButton"><i class="icon-plus icon-white"></i>&nbsp;<strong><?php echo vtranslate('LBL_CALCULATE_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><?php }?></span><span class="span4 btn-toolbar"></span><span class="span4 btn-toolbar"></span></div><?php if ($_smarty_tpl->tpl_vars['SCHEDULER_STATUS']->value=="0"){?><div class="row-fluid" style="padding-bottom:10px;"><div class='alert alert-danger margin0px'><?php echo vtranslate("LBL_SCHEDULER_IS_INACTIVE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
   <br><a href="https://wiki.vtiger.com/index.php/Cron" class="btn" style="margin-top:10px;"><?php echo vtranslate("LBL_SETUP_CRON_JOB_INSTRUCTIONS",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div><?php }?><?php if ($_smarty_tpl->tpl_vars['CRON_STATUS']->value=="0"){?><div class="row-fluid" style="padding-bottom:10px;"><div class='alert alert-danger margin0px'><?php echo vtranslate("LBL_CRON_IS_INACTIVE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php }?></div><?php }} ?>