<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 12:23:20
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7336456475a7063b8803e01-08498393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4599c0e7a383819b88a9377044be96e7a4abc9d1' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/Step2.tpl',
      1 => 1510671595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7336456475a7063b8803e01-08498393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'DYNAMICFIELDS_RECORD_MODEL' => 0,
    'RECORDID' => 0,
    'FOLLOWS_UP' => 0,
    'SHOW_POPUP' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a7063b88559c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a7063b88559c')) {function content_5a7063b88559c($_smarty_tpl) {?>
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step2" class="form-horizontal" ><div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('EditSteps.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="span6"><div class="pull-right" style="padding-top:10px;"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></div></div><input type="hidden" name="module" value="ITS4YouDynamicFields" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="actual_step" value="2" /><input type="hidden" class="isgroup" value="0" /><input type="hidden" name="description" value="<?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('description');?>
" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
" /><input type="hidden" name="followsup" value="<?php echo $_smarty_tpl->tpl_vars['FOLLOWS_UP']->value;?>
" /><input type="hidden" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('module_name');?>
" /><input type="hidden" name="conditions" id="advanced_filter" value='' /><input type="hidden" name="show_popup" value="<?php echo $_smarty_tpl->tpl_vars['SHOW_POPUP']->value;?>
" /><input type="hidden" id="olderConditions" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->get('conditions'));?>
' /><div class="row-fluid padding1per contentsBackground" style="border:1px solid #ccc;box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><label><strong><?php echo vtranslate('LBL_STEP_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: <?php echo vtranslate('LBL_STEP_2_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><div id="advanceFilterContainer" class="conditionsContainer padding1per"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0);?>
</div></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form><?php }} ?>