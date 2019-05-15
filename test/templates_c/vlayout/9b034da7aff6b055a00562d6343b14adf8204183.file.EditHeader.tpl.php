<?php /* Smarty version Smarty-3.1.7, created on 2017-11-29 12:03:30
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10121940405a1ea2126c9611-94363308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b034da7aff6b055a00562d6343b14adf8204183' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/EditHeader.tpl',
      1 => 1510671587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10121940405a1ea2126c9611-94363308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'TABID' => 0,
    'FIELDLABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a1ea2127327a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ea2127327a')) {function content_5a1ea2127327a($_smarty_tpl) {?>

<div class="editContainer" style="padding-left: 3%;padding-right: 3%"><div class="widget_header row-fluid"><span class="widget_header row-fluid"><div class="row-fluid"><h3><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></span></div><hr><span class="pull-left"><h5><?php echo vtranslate('LBL_IN_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php echo getTabModuleName($_smarty_tpl->tpl_vars['TABID']->value);?>
<?php echo vtranslate('LBL_FIELD_IS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php echo $_smarty_tpl->tpl_vars['FIELDLABEL']->value;?>
</h5></span><br><br><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_FILTER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_OPERATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div><?php }} ?>