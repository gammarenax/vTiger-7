<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:37
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportColumnsTotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153151894059ba9ebd0192b4-75201429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74cfa83ed96d257ac584b9c2dfe4a9ccba499509' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportColumnsTotal.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153151894059ba9ebd0192b4-75201429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'CURL' => 0,
    'BLOCK1' => 0,
    'rowname' => 0,
    'calculations' => 0,
    'checkbox' => 0,
    'RECORDID' => 0,
    'ACT_MODE' => 0,
    'cc_populated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebd042ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebd042ea')) {function content_59ba9ebd042ea($_smarty_tpl) {?>

<div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="5"><?php echo vtranslate('LBL_CALCULATIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<input type="hidden" name="curl_to_go" id="curl_to_go" value="<?php echo $_smarty_tpl->tpl_vars['CURL']->value;?>
"></th></tr></thead><tbody><tr style="height:25px"><td class="dvtCellLabel" nowrap width="26%" align="right" ><b><?php echo vtranslate("LBL_COLUMNS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="dvtCellLabel" nowrap width="11%" align="center" ><b><?php echo vtranslate("LBL_COLUMNS_SUM",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="dvtCellLabel" nowrap width="11%" align="center" ><b><?php echo vtranslate("LBL_COLUMNS_AVERAGE",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="dvtCellLabel" nowrap width="11%" align="center" ><b><?php echo vtranslate("LBL_COLUMNS_LOW_VALUE",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td><td class="dvtCellLabel" nowrap width="11%" align="center" ><b><?php echo vtranslate("LBL_COLUMNS_LARGE_VALUE",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td></tr><?php  $_smarty_tpl->tpl_vars['calculations'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['calculations']->_loop = false;
 $_smarty_tpl->tpl_vars['rowname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['calculations']->key => $_smarty_tpl->tpl_vars['calculations']->value){
$_smarty_tpl->tpl_vars['calculations']->_loop = true;
 $_smarty_tpl->tpl_vars['rowname']->value = $_smarty_tpl->tpl_vars['calculations']->key;
?><tr class="lvtColData" onmouseover="this.className='lvtColDataHover'" onmouseout="this.className='lvtColData'" bgcolor="white"><td class="dvtCellLabel" align="right" ><?php echo $_smarty_tpl->tpl_vars['rowname']->value;?>
</td><?php  $_smarty_tpl->tpl_vars['checkbox'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['checkbox']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['calculations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['checkbox']->key => $_smarty_tpl->tpl_vars['checkbox']->value){
$_smarty_tpl->tpl_vars['checkbox']->_loop = true;
?><td class="dvtCellInfo" align="center" ><input name="<?php echo $_smarty_tpl->tpl_vars['checkbox']->value['name'];?>
" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['checkbox']->value['checked'];?>
 value=""></td><?php } ?></tr><?php }
if (!$_smarty_tpl->tpl_vars['calculations']->_loop) {
?><tr class="lvtColData" bgcolor="white"><td colspan="5" align="center" style="text-align:center;font-size: 1.5em;width:100%;color:red;" ><b><?php echo vtranslate("NO_CALCULATION_COLUMN",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td></tr><?php } ?></tbody></table></div></div><div class="span4" style="width: 20%;"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_CALCULATIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php echo vtranslate('LBL_STEP6_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div><?php if ($_smarty_tpl->tpl_vars['RECORDID']->value==''&&$_smarty_tpl->tpl_vars['ACT_MODE']->value=="ChangeSteps"&&$_smarty_tpl->tpl_vars['cc_populated']->value==''){?>|#<&NBX&>#|<?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/ReportCustomCalculations.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?><?php }} ?>