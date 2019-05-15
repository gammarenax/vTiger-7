<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:01:14
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28763644059bbeb3a65fa41-57729895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efcf6eb9d6583d360174e11a0058450a4eb8b50b' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step3.tpl',
      1 => 1505485622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28763644059bbeb3a65fa41-57729895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODE' => 0,
    'DYNAMICFIELDS_RECORD_MODEL' => 0,
    'EDITTYPE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbeb3a6c162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbeb3a6c162')) {function content_59bbeb3a6c162($_smarty_tpl) {?>
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step3" class="form-horizontal"><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditSteps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div span="span6"><div class="pull-right" style="padding-top:10px;"><button class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="editfields"){?>loadB<?php }else{ ?>b<?php }?>ackStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><input type="hidden" name="module" value="ITS4YouDynamicFields" /><input type="hidden" name="action" value="Save"><input type="hidden" name="mode" value="SaveFields"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('dfid');?>
" /><input type="hidden" class="actual_step" value="3" /><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><?php if ($_smarty_tpl->tpl_vars['EDITTYPE']->value=="individual"){?><input type="hidden" name="save_type" value="individual"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditFieldsAll.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></form><?php }} ?>