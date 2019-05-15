<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 12:22:32
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15968936365a7063882ad0e4-56867586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80c2b6ac2cad6c062c751350f15b8925c7f864d6' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditHeader.tpl',
      1 => 1510671592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15968936365a7063882ad0e4-56867586',
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
  'unifunc' => 'content_5a706388346cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a706388346cf')) {function content_5a706388346cf($_smarty_tpl) {?>
<div class="editContainer"><div class="widget_header row-fluid"><div class="span12"><h3><?php if ($_smarty_tpl->tpl_vars['RECORDID']->value==''){?><?php echo vtranslate('LBL_DEFINE_NEW_DYNAMIC_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_EDITING_DYNAMIC_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('description');?>
<?php }?></h3></div></div><hr><!--div id="pull-left"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li style="z-index:8" class="step" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step last" style="z-index:7" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div></div--><div class="clearfix"></div></div><div class="dynamicfieldsContents"><input type="hidden" class="load_step" value="<?php echo $_smarty_tpl->tpl_vars['LOAD_STEP']->value;?>
" />
<?php }} ?>