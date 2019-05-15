<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 12:25:30
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step3.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10706311115a70643a72eab0-39935661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82754d9c8c9218e7e08e89d89673c5517293f5b0' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step3.tpl',
      1 => 1510671595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10706311115a70643a72eab0-39935661',
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
  'unifunc' => 'content_5a70643a796e1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a70643a796e1')) {function content_5a70643a796e1($_smarty_tpl) {?>
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step3" class="form-horizontal"><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditSteps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div span="span6"><div class="pull-right" style="padding-top:10px;"><button class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="editfields"){?>loadB<?php }else{ ?>b<?php }?>ackStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><input type="hidden" name="module" value="ITS4YouDynamicFields" /><input type="hidden" name="action" value="Save"><input type="hidden" name="mode" value="SaveFields"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('dfid');?>
" /><input type="hidden" class="actual_step" value="3" /><div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><?php if ($_smarty_tpl->tpl_vars['EDITTYPE']->value=="individual"){?><input type="hidden" name="save_type" value="individual"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditFields.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditFieldsAll.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" id="finish" type="submit"><strong><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="clearfix"></div></form><?php }} ?>