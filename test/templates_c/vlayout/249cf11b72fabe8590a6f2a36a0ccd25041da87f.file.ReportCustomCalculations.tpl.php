<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:37
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportCustomCalculations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194031695559ba9ebd29fe99-93110838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249cf11b72fabe8590a6f2a36a0ccd25041da87f' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportCustomCalculations.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194031695559ba9ebd29fe99-93110838',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CUSTOM_CALCULATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebd2c890',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebd2c890')) {function content_59ba9ebd2c890($_smarty_tpl) {?>
<br /><div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><tbody><tr style="height:25px;display:none;"><td class="dvtCellLabel" nowrap width="100%" align="right" colspan="5" ><?php $_smarty_tpl->tpl_vars["cc_i"] = new Smarty_variable("WCCINRW", null, 0);?><?php $_smarty_tpl->tpl_vars["cc_special"] = new Smarty_variable("chzn-done", null, 0);?><div id="cc_row_base"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CustomCalculationRow.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></td></tr><?php $_smarty_tpl->tpl_vars["cc_special"] = new Smarty_variable('', null, 0);?><tr style="height:25px"><td class="dvtCellLabel" nowrap width="100%" align="right" colspan="5" ><b><?php echo vtranslate('LBL_CUSTOM_CALCULATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td></tr><tr style="height:25px"><td class="dvtCellLabel" nowrap colspan="5" id="cc_td_cell" ><?php if (empty($_smarty_tpl->tpl_vars['CUSTOM_CALCULATIONS']->value)){?><?php $_smarty_tpl->tpl_vars["cc_i"] = new Smarty_variable("1", null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CustomCalculationRow.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['cc_calculation_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cc_calculation_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['cc_i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_CALCULATIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cc_calculation_arr']->key => $_smarty_tpl->tpl_vars['cc_calculation_arr']->value){
$_smarty_tpl->tpl_vars['cc_calculation_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['cc_i']->value = $_smarty_tpl->tpl_vars['cc_calculation_arr']->key;
?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('CustomCalculationRow.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php } ?><?php }?></td></tr><tr style="height:25px"><td class="dvtCellLabel" nowrap colspan="5" ><button type='button' class='btn' style='float:left;' onclick="addNewCustomCalculation()"><strong><?php echo vtranslate('LBL_NEW_CUSTOM_CALCULATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></td></tr></tbody></table></div></div><div class="span4" style="width: 20%;"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_CUSTOM_CALCULATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php echo vtranslate('LBL_STEP61_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div><?php }} ?>