<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:06:04
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsRowStep.tpl" */ ?>
<?php /*%%SmartyHeaderCode:171179883259ba9adc402c83-14193631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9860139bbdb0ea857e44875837f77c105f861d61' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsRowStep.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '171179883259ba9adc402c83-14193631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'custom_style' => 0,
    'label' => 0,
    'reportsList' => 0,
    'foldername' => 0,
    'report' => 0,
    'valueid' => 0,
    'metrics_type' => 0,
    'reportid' => 0,
    'reportname' => 0,
    'cvList' => 0,
    'viewtype' => 0,
    'customview' => 0,
    'cv_id' => 0,
    'viewname' => 0,
    'col_options' => 0,
    'summaries_otions' => 0,
    'optgroupvalue' => 0,
    'report_module' => 0,
    'optgrouparray' => 0,
    'summaries_column_arr' => 0,
    'summaries_column_val' => 0,
    'column_str_value' => 0,
    'summaries_column_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9adc44ddf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9adc44ddf')) {function content_59ba9adc44ddf($_smarty_tpl) {?>
<script type="text/javascript">
jQuery().ready(function() {
    var ITS4YouReports_KM_Js = new ITS4YouReports_KeyMetricsList_Js();
    ITS4YouReports_KM_Js.registerReportChangeEvent();
});
</script>

<div class="row-fluid"><div class="listViewHeaders"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><?php echo vtranslate('LBL_KEY_METRICS_INFORMATION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr style="height:25px"><td class="fieldLabel medium" style="vertical-align:middle;" ><label class="pull-right marginRight10px"><?php echo vtranslate('label',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><input id="label" class="input-large span5 nameField" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" name="label" value="<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
" data-fieldinfo="" type="text" style="margin-bottom:0px;"></td></tr><tr style="height:25px"><td class="fieldLabel medium" style="vertical-align:middle;" ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><select name="reportname" id="reportname" class="span5 chzn-select row-fluid"  style="margin:auto;" onchange=""><option value="" ></option><?php  $_smarty_tpl->tpl_vars['report'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['report']->_loop = false;
 $_smarty_tpl->tpl_vars['foldername'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['reportsList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['report']->key => $_smarty_tpl->tpl_vars['report']->value){
$_smarty_tpl->tpl_vars['report']->_loop = true;
 $_smarty_tpl->tpl_vars['foldername']->value = $_smarty_tpl->tpl_vars['report']->key;
?><optgroup label='<?php echo $_smarty_tpl->tpl_vars['foldername']->value;?>
'><?php  $_smarty_tpl->tpl_vars['reportname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['reportname']->_loop = false;
 $_smarty_tpl->tpl_vars['valueid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['report']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['reportname']->key => $_smarty_tpl->tpl_vars['reportname']->value){
$_smarty_tpl->tpl_vars['reportname']->_loop = true;
 $_smarty_tpl->tpl_vars['valueid']->value = $_smarty_tpl->tpl_vars['reportname']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['valueid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['metrics_type']->value=="report"&&$_smarty_tpl->tpl_vars['valueid']->value==$_smarty_tpl->tpl_vars['reportid']->value){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['reportname']->value;?>
</option><?php } ?></optgroup><?php } ?><?php  $_smarty_tpl->tpl_vars['customview'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customview']->_loop = false;
 $_smarty_tpl->tpl_vars['viewtype'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cvList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customview']->key => $_smarty_tpl->tpl_vars['customview']->value){
$_smarty_tpl->tpl_vars['customview']->_loop = true;
 $_smarty_tpl->tpl_vars['viewtype']->value = $_smarty_tpl->tpl_vars['customview']->key;
?><optgroup label='<?php echo $_smarty_tpl->tpl_vars['viewtype']->value;?>
'><?php  $_smarty_tpl->tpl_vars['viewname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewname']->_loop = false;
 $_smarty_tpl->tpl_vars['valueid'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customview']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['viewname']->key => $_smarty_tpl->tpl_vars['viewname']->value){
$_smarty_tpl->tpl_vars['viewname']->_loop = true;
 $_smarty_tpl->tpl_vars['valueid']->value = $_smarty_tpl->tpl_vars['viewname']->key;
?><?php $_smarty_tpl->tpl_vars['cv_id'] = new Smarty_variable("cv_".($_smarty_tpl->tpl_vars['reportid']->value), null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['valueid']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['metrics_type']->value=="customview"&&$_smarty_tpl->tpl_vars['valueid']->value==$_smarty_tpl->tpl_vars['cv_id']->value){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['viewname']->value;?>
</option><?php } ?></optgroup><?php } ?></select></td></tr><tr style="height:25px"><td class="fieldLabel medium" style="vertical-align:middle;" ><label class="pull-right marginRight10px"><?php echo vtranslate('column_str',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><select name="column_str" id="column_str" class="span5 chzn-select row-fluid"  style="margin:auto;"><option value="" ><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php if ($_smarty_tpl->tpl_vars['col_options']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['col_options']->value;?>
<?php }else{ ?><?php  $_smarty_tpl->tpl_vars['optgrouparray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optgrouparray']->_loop = false;
 $_smarty_tpl->tpl_vars['optgroupvalue'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['summaries_otions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optgrouparray']->key => $_smarty_tpl->tpl_vars['optgrouparray']->value){
$_smarty_tpl->tpl_vars['optgrouparray']->_loop = true;
 $_smarty_tpl->tpl_vars['optgroupvalue']->value = $_smarty_tpl->tpl_vars['optgrouparray']->key;
?><?php if ($_smarty_tpl->tpl_vars['optgroupvalue']->value!=''){?><optgroup label='<?php echo vtranslate($_smarty_tpl->tpl_vars['optgroupvalue']->value,$_smarty_tpl->tpl_vars['report_module']->value);?>
'><?php  $_smarty_tpl->tpl_vars['summaries_column_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['summaries_column_arr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optgrouparray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['summaries_column_arr']->key => $_smarty_tpl->tpl_vars['summaries_column_arr']->value){
$_smarty_tpl->tpl_vars['summaries_column_arr']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['summaries_column_val'] = new Smarty_variable($_smarty_tpl->tpl_vars['summaries_column_arr']->value['value'], null, 0);?><?php $_smarty_tpl->tpl_vars['summaries_column_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['summaries_column_arr']->value['text'], null, 0);?><option value="<?php echo $_smarty_tpl->tpl_vars['summaries_column_val']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['column_str_value']->value==$_smarty_tpl->tpl_vars['summaries_column_val']->value){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['summaries_column_text']->value;?>
</option><?php } ?></optgroup><?php }?><?php } ?><?php }?></select></td></tr></tbody></table></div></div></div><?php }} ?>