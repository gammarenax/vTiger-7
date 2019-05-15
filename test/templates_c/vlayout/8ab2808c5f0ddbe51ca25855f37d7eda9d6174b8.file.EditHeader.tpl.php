<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 14:59:26
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84608419159bbeace83d3a8-12284024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ab2808c5f0ddbe51ca25855f37d7eda9d6174b8' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditHeader.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84608419159bbeace83d3a8-12284024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORDID' => 0,
    'QUALIFIED_MODULE' => 0,
    'DYNAMICFIELDS_RECORD_MODEL' => 0,
    'LOAD_STEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbeace88633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbeace88633')) {function content_59bbeace88633($_smarty_tpl) {?>
<div class="editContainer"><div class="widget_header row-fluid"><div class="span12"><h3><?php if ($_smarty_tpl->tpl_vars['RECORDID']->value==''){?><?php echo vtranslate('LBL_DEFINE_NEW_DYNAMIC_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDITING_DYNAMIC_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('description');?>
<?php }?></h3></div></div><hr><!--div id="pull-left"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div></div--><div class="clearfix"></div></div><div class="dynamicfieldsContents"><input type="hidden" class="load_step" value="<?php echo $_smarty_tpl->tpl_vars['LOAD_STEP']->value;?>
" />
<?php }} ?>