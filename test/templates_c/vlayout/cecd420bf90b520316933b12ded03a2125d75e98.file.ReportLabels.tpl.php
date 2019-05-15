<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:59
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportLabels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20036593235a0d63714f95d6-78113806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cecd420bf90b520316933b12ded03a2125d75e98' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportLabels.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20036593235a0d63714f95d6-78113806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d637155ac2',
  'variables' => 
  array (
    'ROWS_COUNT' => 0,
    'COL_SPAN' => 0,
    'MODULE' => 0,
    'labels_html' => 0,
    'lbl_type' => 0,
    'type_arr' => 0,
    'type_row_lbl' => 0,
    'ROWS_I' => 0,
    'fieldarray' => 0,
    'make_row' => 0,
    'fieldkey' => 0,
    'fieldinput' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d637155ac2')) {function content_5a0d637155ac2($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/gammaren/www/crm.gammarenax.ch/libraries/Smarty/libs/plugins/function.math.php';
?>

<?php $_smarty_tpl->tpl_vars["ROWS_COUNT1"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROWS_COUNT']->value, null, 0);?><?php $_smarty_tpl->tpl_vars["ROWS_COUNT2"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROWS_COUNT']->value+1, null, 0);?><?php $_smarty_tpl->tpl_vars["COL_SPAN"] = new Smarty_variable(2, null, 0);?><?php if ($_smarty_tpl->tpl_vars['ROWS_COUNT']->value>20){?><?php echo smarty_function_math(array('assign'=>"ROWS_COUNT1",'equation'=>"(".($_smarty_tpl->tpl_vars['ROWS_COUNT1']->value)."/2)+2"),$_smarty_tpl);?>
<?php echo smarty_function_math(array('assign'=>"ROWS_COUNT2",'equation'=>"(".($_smarty_tpl->tpl_vars['ROWS_COUNT2']->value)."/2)+2"),$_smarty_tpl);?>
<?php $_smarty_tpl->tpl_vars["COL_SPAN"] = new Smarty_variable($_smarty_tpl->tpl_vars['COL_SPAN']->value+2, null, 0);?><?php }?><div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="6"><?php echo vtranslate('LBL_LABELS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<input type="hidden" name="labels_to_go" id="labels_to_go" value="_XYZ_"></th></tr></thead><tbody><?php $_smarty_tpl->tpl_vars["ROWS_I"] = new Smarty_variable(0, null, 0);?><?php  $_smarty_tpl->tpl_vars['type_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['lbl_type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['labels_html']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type_arr']->key => $_smarty_tpl->tpl_vars['type_arr']->value){
$_smarty_tpl->tpl_vars['type_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['lbl_type']->value = $_smarty_tpl->tpl_vars['type_arr']->key;
?><?php if ($_smarty_tpl->tpl_vars['lbl_type']->value=="SC"){?><?php $_smarty_tpl->tpl_vars["type_row_lbl"] = new Smarty_variable(vtranslate("LBL_SC_LABELS",$_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['lbl_type']->value=="SM"){?><?php $_smarty_tpl->tpl_vars["type_row_lbl"] = new Smarty_variable(vtranslate("LBL_SM_LABELS",$_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['type_arr']->value)){?><tr><td colspan="4" style="text-align: center;color:silver;font-size:1.1em;"><b><?php echo $_smarty_tpl->tpl_vars['type_row_lbl']->value;?>
</b></td></tr><?php }?><?php $_smarty_tpl->tpl_vars["ROWS_I"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROWS_I']->value+1, null, 0);?><?php $_smarty_tpl->tpl_vars["make_row"] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['fieldarray'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldarray']->_loop = false;
 $_smarty_tpl->tpl_vars['fieldi'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['type_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldarray']->key => $_smarty_tpl->tpl_vars['fieldarray']->value){
$_smarty_tpl->tpl_vars['fieldarray']->_loop = true;
 $_smarty_tpl->tpl_vars['fieldi']->value = $_smarty_tpl->tpl_vars['fieldarray']->key;
?><?php $_smarty_tpl->tpl_vars["fieldkey"] = new Smarty_variable($_smarty_tpl->tpl_vars['fieldarray']->value['translated_key'], null, 0);?><?php $_smarty_tpl->tpl_vars["fieldinput"] = new Smarty_variable($_smarty_tpl->tpl_vars['fieldarray']->value['translate_html'], null, 0);?><?php if ($_smarty_tpl->tpl_vars['ROWS_COUNT']->value>20){?><?php if ($_smarty_tpl->tpl_vars['make_row']->value==1){?><tr style="height:25px"><?php }?><td class="dvtCellLabel" align="left" colspan="1"><b><?php echo $_smarty_tpl->tpl_vars['fieldkey']->value;?>
</b></td><td class="dvtCellInfo" align="left" colspan="1"><?php echo $_smarty_tpl->tpl_vars['fieldinput']->value;?>
</td><?php if ($_smarty_tpl->tpl_vars['make_row']->value==2){?><?php $_smarty_tpl->tpl_vars["make_row"] = new Smarty_variable(1, null, 0);?></tr><?php }else{ ?><?php $_smarty_tpl->tpl_vars["make_row"] = new Smarty_variable($_smarty_tpl->tpl_vars['make_row']->value+1, null, 0);?><?php }?><?php }else{ ?><tr style="height:25px"><td class="dvtCellLabel" align="left" colspan="1"><b><?php echo $_smarty_tpl->tpl_vars['fieldkey']->value;?>
</b></td><td class="dvtCellInfo" align="left" colspan="1"><?php echo $_smarty_tpl->tpl_vars['fieldinput']->value;?>
</td></tr><?php }?><?php $_smarty_tpl->tpl_vars["ROWS_I"] = new Smarty_variable($_smarty_tpl->tpl_vars['ROWS_I']->value+1, null, 0);?><?php } ?><?php } ?></tbody></table></div></div><div class="span4" style="width: 20%;"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_LABELS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php echo vtranslate('LBL_STEP7_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div> 
<?php }} ?>