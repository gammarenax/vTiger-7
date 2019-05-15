<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:59
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/CustomCalculationRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7294127025a0d637147dc95-51244904%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9adcca46a16c43a8ecbe9ad5d8c34241efdc8593' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/CustomCalculationRow.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7294127025a0d637147dc95-51244904',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d63714aa53',
  'variables' => 
  array (
    'cc_i' => 0,
    'cc_calculation_arr' => 0,
    'MODULE' => 0,
    'cc_special' => 0,
    'COLUMNS_OPTIONS' => 0,
    'optName' => 0,
    'all_columns_array' => 0,
    'column_array' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d63714aa53')) {function content_5a0d63714aa53($_smarty_tpl) {?>

<div id="cc_row_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="cc_row_class" style="padding:5px 0px 5px 0px;"><input type="hidden" id="cc_id_val" value="<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" ><input type="text" name="cc_name_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_name_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="span3 cc_row_name" style="margin:auto;" value="<?php echo $_smarty_tpl->tpl_vars['cc_calculation_arr']->value['cc_name'];?>
" placeholder="<?php echo vtranslate('LBL_CUSTOM_CALCULATION_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" >&nbsp;<select name="cc_options_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_options_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="span4 chzn-select row-fluid cc-new-select <?php echo $_smarty_tpl->tpl_vars['cc_special']->value;?>
"  style="margin:auto;" onChange="addCustomCalculationValue(this,'cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
')"><option value="" selected ><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['all_columns_array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['all_columns_array']->_loop = false;
 $_smarty_tpl->tpl_vars['optName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['COLUMNS_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['all_columns_array']->key => $_smarty_tpl->tpl_vars['all_columns_array']->value){
$_smarty_tpl->tpl_vars['all_columns_array']->_loop = true;
 $_smarty_tpl->tpl_vars['optName']->value = $_smarty_tpl->tpl_vars['all_columns_array']->key;
?><optgroup label='<?php echo $_smarty_tpl->tpl_vars['optName']->value;?>
'><?php  $_smarty_tpl->tpl_vars['column_array'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column_array']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_columns_array']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column_array']->key => $_smarty_tpl->tpl_vars['column_array']->value){
$_smarty_tpl->tpl_vars['column_array']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['column_array']->value['value'];?>
" ><?php echo $_smarty_tpl->tpl_vars['column_array']->value['text'];?>
</option><?php } ?></optgroup><?php } ?></select>&nbsp;<textarea name="cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="span6 cc-new-textarea" style="margin:auto;height:28px;" value="" placeholder="<?php echo vtranslate('LBL_CUSTOM_CALCULATION_EXPRESSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ><?php echo $_smarty_tpl->tpl_vars['cc_calculation_arr']->value['cc_calculation'];?>
</textarea>&nbsp;<span><a onclick="deleteCustomCalculationRow(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
);" href="javascript:;"><img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0"></a></span>&nbsp;<span><a data-original-title="" href="#" id="cc_tooltip_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="editHelpInfo tooltipstered" onmouseover="displayCustomCalculationArea(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
)" onmouseout="hideCustomCalculationArea(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
)" data-placement="top" data-text="test" data-template="<div class='tooltip' role='tooltip'><div class='tooltip-arrow'></div><div class='tooltip-inner' style='text-align: left'></div></div>"><i class="icon-info-sign alignMiddle"></i>&nbsp;</a><span id="cc_tooltip_base<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="" style="z-index:999;position:relative;top:-23px;left:-100px;display:none;" ><span class='tooltip-arrow'></span><span class='tooltip-inner' style='text-align: left' id="cc_tooltip_content<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
"></span></span></span></div><?php }} ?>