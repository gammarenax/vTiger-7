<?php /* Smarty version Smarty-3.1.7, created on 2017-10-17 12:18:18
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/GroupStep2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4195427859e5f50acf0f21-67460425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65244716858687b3da9824a9472e7ca74e027768' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/GroupStep2.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4195427859e5f50acf0f21-67460425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODE' => 0,
    'DYNAMICFIELDS_RECORD_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e5f50aded97',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e5f50aded97')) {function content_59e5f50aded97($_smarty_tpl) {?>
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step2" class="form-horizontal"><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditGroupSteps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div span="span6"><div class="pull-right" style="padding-top:10px;"><button class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="editfields"){?>loadB<?php }else{ ?>b<?php }?>ackStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><input type="hidden" name="module" value="ITS4YouDynamicFields" /><input type="hidden" name="action" value="Save"><input type="hidden" name="mode" value="SaveFields"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('dfid');?>
" /><input type="hidden" class="actual_step" value="3" /><input type="hidden" class="followsup" value="" /><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><input type="hidden" name="save_type" value="individual"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditGroupFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></form><?php }} ?>