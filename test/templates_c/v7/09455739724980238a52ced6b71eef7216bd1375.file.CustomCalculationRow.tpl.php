<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:27
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/CustomCalculationRow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19008938305cdac72b774f13-05496377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09455739724980238a52ced6b71eef7216bd1375' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/CustomCalculationRow.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19008938305cdac72b774f13-05496377',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cdac72b78600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72b78600')) {function content_5cdac72b78600($_smarty_tpl) {?>

<div id="cc_row_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="cc_row_class col-lg-12" style="padding:5px 0px 5px 0px;"><div class="col-lg-3"><input type="hidden" id="cc_id_val" value="<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" ><input type="text" name="cc_name_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_name_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="inputElement col-lg-2 cc_row_name" value="<?php echo $_smarty_tpl->tpl_vars['cc_calculation_arr']->value['cc_name'];?>
" placeholder="<?php echo vtranslate('LBL_CUSTOM_CALCULATION_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></div><div class="col-lg-3"><select name="cc_options_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_options_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class=" <?php echo $_smarty_tpl->tpl_vars['cc_special']->value;?>
 inputElement cc-new-select"  onChange="addCustomCalculationValue(this,'cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
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
</option><?php } ?></optgroup><?php } ?></select></div><div class="col-lg-3"><textarea name="cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" id="cc_calculation_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="form-control col-sm-6 resize-vertical cc-new-textarea" style="margin:auto;height:28px;" value="" placeholder="<?php echo vtranslate('LBL_CUSTOM_CALCULATION_EXPRESSION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ><?php echo $_smarty_tpl->tpl_vars['cc_calculation_arr']->value['cc_calculation'];?>
</textarea></div><div class="col-lg-2"><span><a onclick="deleteCustomCalculationRow(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
);" href="javascript:;"><img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0"></a></span>&nbsp;<span><a data-original-title="" href="#" id="cc_tooltip_<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="editHelpInfo tooltipstered" onmouseover="displayCustomCalculationArea(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
)" onmouseout="hideCustomCalculationArea(<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
)" data-placement="top" data-text="test" data-template="<div class='tooltip' role='tooltip'><div class='tooltip-arrow'></div><div class='tooltip-inner' style='text-align: left'></div></div>"><i class="glyphicon glyphicon-info-sign alignMiddle"></i></a><span id="cc_tooltip_base<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
" class="" style="z-index:999;position:relative;top:-23px;left:-100px;display:none;" ><span class='tooltip-arrow'></span><span class='tooltip-inner' style='text-align: left' id="cc_tooltip_content<?php echo $_smarty_tpl->tpl_vars['cc_i']->value;?>
"></span></span></span></div></div><?php }} ?>