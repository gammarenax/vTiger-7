<?php /* Smarty version Smarty-3.1.7, created on 2017-10-05 12:23:28
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditGroupSteps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34295534859d6244044d2b7-04499952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '156dbd3534b7fb0bc343f1173b6449dd5fc58741' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditGroupSteps.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34295534859d6244044d2b7-04499952',
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
  'unifunc' => 'content_59d624404614a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d624404614a')) {function content_59d624404614a($_smarty_tpl) {?>
<div class="span6"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step <?php if ($_smarty_tpl->tpl_vars['ACTUAL_STEP']->value=="1"){?>active<?php }?>"  style="z-index:9" id="step1"><a><span class="stepNum">1 </span><span class="stepText"><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last <?php if ($_smarty_tpl->tpl_vars['ACTUAL_STEP']->value=="2"){?>active<?php }?>" style="z-index:7" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div></div>
<?php }} ?>