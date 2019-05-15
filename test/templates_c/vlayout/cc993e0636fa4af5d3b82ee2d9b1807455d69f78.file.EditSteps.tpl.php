<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 14:59:26
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditSteps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208295786059bbeace9a5ff9-09337166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc993e0636fa4af5d3b82ee2d9b1807455d69f78' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditSteps.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208295786059bbeace9a5ff9-09337166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTUAL_STEP' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbeace9d3e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbeace9d3e5')) {function content_59bbeace9d3e5($_smarty_tpl) {?>
<div class="span6"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step <?php if ($_smarty_tpl->tpl_vars['ACTUAL_STEP']->value=="1"){?>active<?php }?>"  style="z-index:9" id="step1"><a><span class="stepNum">1 </span><span class="stepText"><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step <?php if ($_smarty_tpl->tpl_vars['ACTUAL_STEP']->value=="2"){?>active<?php }?>" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last <?php if ($_smarty_tpl->tpl_vars['ACTUAL_STEP']->value=="3"){?>active<?php }?>" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div></div>
<?php }} ?>