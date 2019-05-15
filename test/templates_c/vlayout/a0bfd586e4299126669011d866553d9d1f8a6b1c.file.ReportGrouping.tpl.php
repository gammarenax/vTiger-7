<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:36
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportGrouping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:118179904159ba9ebcd95c53-20538883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0bfd586e4299126669011d866553d9d1f8a6b1c' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportGrouping.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '118179904159ba9ebcd95c53-20538883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'timelinecolumn' => 0,
    'date_options_json' => 0,
    'sum_group_columns' => 0,
    'summaries_orderby' => 0,
    'REPORTTYPE' => 0,
    'MODULE' => 0,
    'REL_MODULES_STR' => 0,
    'RG_BLOCK1' => 0,
    'ASCDESC1' => 0,
    'timelinecolumn1_html' => 0,
    'reporttype_readonly' => 0,
    'timeline_type2' => 0,
    'RG_BLOCK2' => 0,
    'ASCDESC2' => 0,
    'timelinecolumn2_html' => 0,
    'timeline_type3' => 0,
    'RG_BLOCK3' => 0,
    'ASCDESC3' => 0,
    'timelinecolumn3_html' => 0,
    'SummariesModules' => 0,
    'modulearr' => 0,
    'ALL_FIELDS_STRING' => 0,
    'RG_BLOCK4' => 0,
    'selectedSummariesString' => 0,
    'RG_BLOCK6' => 0,
    'summaries_orderby_type' => 0,
    'SUMMARIES_LIMIT' => 0,
    'step4_info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebce4fde',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebce4fde')) {function content_59ba9ebce4fde($_smarty_tpl) {?>

<input type="hidden" name="timelinecolumn_html" id='timelinecolumn_html' value='<?php echo $_smarty_tpl->tpl_vars['timelinecolumn']->value;?>
'><div id='date_options_json' class="none" style='display:none;'><?php echo $_smarty_tpl->tpl_vars['date_options_json']->value;?>
</div><div id='sum_group_columns' class="none" style='display:none;'><?php echo $_smarty_tpl->tpl_vars['sum_group_columns']->value;?>
</div><input type="hidden" id="summaries_orderby_val" value="<?php echo $_smarty_tpl->tpl_vars['summaries_orderby']->value;?>
"><?php $_smarty_tpl->tpl_vars["matrix_js"] = new Smarty_variable('', null, 0);?><?php $_smarty_tpl->tpl_vars["reporttype_readonly"] = new Smarty_variable('', null, 0);?><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value=="summaries"||$_smarty_tpl->tpl_vars['REPORTTYPE']->value=="summaries_matrix"){?><?php $_smarty_tpl->tpl_vars["reporttype_readonly"] = new Smarty_variable("readonly", null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['REPORTTYPE']->value=="summaries_matrix"){?><?php $_smarty_tpl->tpl_vars["matrix2_js"] = new Smarty_variable("matrix_js(2);", null, 0);?><?php $_smarty_tpl->tpl_vars["matrix3_js"] = new Smarty_variable("matrix_js(3);", null, 0);?><?php $_smarty_tpl->tpl_vars["timeline_type2"] = new Smarty_variable("cols", null, 0);?><?php }?><div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><?php echo vtranslate('LBL_GROUPING_SUMMARIZE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<input type="hidden" name='all_related_modules' id='all_related_modules' value="<?php echo $_smarty_tpl->tpl_vars['REL_MODULES_STR']->value;?>
"/></th></tr></thead><tbody><tr><td><div class="row-fluid"><div class="span1">&nbsp;</div><div class="span10"><table style="margin:0px;padding:0px;" cellspadding="0" cellspacing="0"><tr><td><select id="timeline_type1" name="timeline_type1" class="txtBox" readonly style="float:left;width:7em;margin:auto;"><option value="rows" selected="selected" ><?php echo vtranslate('LBL_ROWS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></td><td><select id="Group1" name="Group1" class="span5 chzn-select row-fluid"  style="margin:auto;float:left;" onChange="checkTimeLineColumn(this,1)"><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK1']->value;?>
</select></td><td><?php echo $_smarty_tpl->tpl_vars['ASCDESC1']->value;?>
</td><td><div id="radio_group1" style="margin:auto;float:left;"><?php echo $_smarty_tpl->tpl_vars['timelinecolumn1_html']->value;?>
</div></td></tr></table></div></div></td></tr><tr id="group2_table_row"><td><div class="row-fluid"><div class="span1">&nbsp;</div><div class="span10"><table style="margin:0px;padding:0px;" cellspadding="0" cellspacing="0"><tr><td><select id="timeline_type2" name="timeline_type2" class="txtBox" <?php echo $_smarty_tpl->tpl_vars['reporttype_readonly']->value;?>
 style="float:left;width:7em;margin:auto;"><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value!="summaries_matrix"){?><option value="rows" <?php if ($_smarty_tpl->tpl_vars['timeline_type2']->value=="rows"){?>selected="selected"<?php }?> ><?php echo vtranslate('LBL_ROWS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value!="summaries"){?><option value="cols" <?php if ($_smarty_tpl->tpl_vars['timeline_type2']->value=="cols"){?>selected="selected"<?php }?> ><?php echo vtranslate('LBL_COLS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?></select></td><td><select id="Group2" name="Group2" class="span5 chzn-select row-fluid" style="margin:auto;float:left;" onChange="checkTimeLineColumn(this,2)"><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK2']->value;?>
</select></td><td><?php echo $_smarty_tpl->tpl_vars['ASCDESC2']->value;?>
</td><td><div id="radio_group2" style="margin:auto;float:left;"><?php echo $_smarty_tpl->tpl_vars['timelinecolumn2_html']->value;?>
</div></td></tr></table></div></div></td></tr><tr id="group3_table_row"><td><div class="row-fluid"><div class="span1">&nbsp;</div><div class="span10"><table style="margin:0px;padding:0px;" cellspadding="0" cellspacing="0"><tr><td><select id="timeline_type3" name="timeline_type3" class="txtBox" <?php echo $_smarty_tpl->tpl_vars['reporttype_readonly']->value;?>
 style="float:left;width:7em;margin:auto;"><option value="rows" <?php if ($_smarty_tpl->tpl_vars['timeline_type3']->value=="rows"){?>selected="selected"<?php }?> ><?php echo vtranslate('LBL_ROWS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php if ($_smarty_tpl->tpl_vars['REPORTTYPE']->value!="summaries"&&$_smarty_tpl->tpl_vars['REPORTTYPE']->value!="summaries_matrix"){?><option value="cols" <?php if ($_smarty_tpl->tpl_vars['timeline_type3']->value=="cols"){?>selected="selected"<?php }?> ><?php echo vtranslate('LBL_COLS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php }?></select></td><td><select id="Group3" name="Group3" class="span5 chzn-select row-fluid" style="margin:auto;float:left;"  onChange="checkTimeLineColumn(this,3)"><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK3']->value;?>
</select></td><td><?php echo $_smarty_tpl->tpl_vars['ASCDESC3']->value;?>
</td><td><div id="radio_group3" style="margin:auto;float:left;"><?php echo $_smarty_tpl->tpl_vars['timelinecolumn3_html']->value;?>
</div></td></tr></table></div></div></td></tr></tbody></table><br><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th><?php echo vtranslate('AVAILABLE_SUMMARIES_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr><td style="padding:0px;" cellpadding="0" cellspacing="0"><div class="row-fluid padding1per"><div class="span12"><div><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<select id="SummariesModules" name="SummariesModules" onchange='defineSUMModuleFields(this)' class="txtBox" style="width:auto;margin:auto;" ><?php  $_smarty_tpl->tpl_vars['modulearr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modulearr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SummariesModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modulearr']->key => $_smarty_tpl->tpl_vars['modulearr']->value){
$_smarty_tpl->tpl_vars['modulearr']->_loop = true;
?><option value=<?php echo $_smarty_tpl->tpl_vars['modulearr']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['modulearr']->value['checked']=="checked"){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['modulearr']->value['name'];?>
</option><?php } ?></select><input type="text" id="search_input_sum" onkeyup="getSUMFieldsOptionsSearch(this)" placeholder="<?php echo vtranslate('LBL_Search_column',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></div></div><table width="100%" ><tr><td width="40%" ><div id="availSumModValues" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['ALL_FIELDS_STRING']->value;?>
</div><select id="availListSum" multiple size="11" name="availListSum" class="" ondblclick="addOndblclickSUM(this)" style="width:100%;" ><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK4']->value;?>
</select></td><td width="10%" ><input name="add" value=" <?php echo vtranslate('LBL_ADD_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &gt&gt " class="btn" type="button" onClick="addColumn('selectedSummaries');"></td><td width="40%" ><input type="hidden" name="selectedSummariesString" id="selectedSummariesString" value="<?php echo $_smarty_tpl->tpl_vars['selectedSummariesString']->value;?>
"><select id="selectedSummaries" size="11" name="selectedSummaries" onchange="selectedColumnClick(this);" multiple class="" style="width:100%;"><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK6']->value;?>
</select></td><td ><br><br><div class="span1"><div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowUp row-fluid" onclick="moveUp('selectedSummaries')"><img src="layouts/vlayout/skins/images/Arrow-up.png"></img></button></div><div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid"  onclick="delColumn('selectedSummaries')"><img src="layouts/vlayout/skins/images/no.png"></img></button></div><div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid"  onclick="moveDown('selectedSummaries')"><img src="layouts/vlayout/skins/images/Arrow-down.png"></img></button></div></div></td></tr></table></td></tr><tbody></table><br><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="6"><?php echo vtranslate('LBL_LIMIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_SORT_ORDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr><td style="text-align: right;vertical-align: middle;"><?php echo vtranslate('SUMMARIES_ORDER_BY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</td><td style="text-align: left;vertical-align: middle;"><div style="float:left;text-align:left;"><input type="hidden" name="summaries_orderby_columnString" id="summaries_orderby_columnString" value="<?php echo $_smarty_tpl->tpl_vars['summaries_orderby']->value;?>
"><select id="summaries_orderby_column" class="txtBox" style="width:auto;margin:auto;" ><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php echo $_smarty_tpl->tpl_vars['RG_BLOCK6']->value;?>
</select>&nbsp;<input type="hidden" name="summaries_orderby_typeString" id="summaries_orderby_typeString" value="<?php echo $_smarty_tpl->tpl_vars['summaries_orderby_type']->value;?>
"><input type='radio' name='summaries_orderby_type' id='summaries_orderby_asc' <?php if ($_smarty_tpl->tpl_vars['summaries_orderby_type']->value=="ASC"){?>checked="checked"<?php }?> $TimeLineColumnD value='ASC' style="margin:auto;">&nbsp;<?php echo vtranslate('Ascending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<input type='radio' name='summaries_orderby_type' id='summaries_orderby_desc' <?php if ($_smarty_tpl->tpl_vars['summaries_orderby_type']->value=="DESC"){?>checked="checked"<?php }?> $TimeLineColumnW value='DESC' style="margin:auto;">&nbsp;<?php echo vtranslate('Descending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</div></td></tr><tr><td style="text-align: right;vertical-align: middle;"><?php echo vtranslate('SET_LIMIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td style="text-align: left;vertical-align: middle;"><input type="text" id="summaries_limit" name="summaries_limit" value="<?php if ($_smarty_tpl->tpl_vars['SUMMARIES_LIMIT']->value!="0"){?><?php echo $_smarty_tpl->tpl_vars['SUMMARIES_LIMIT']->value;?>
<?php }?>" class="txtBox" style="width:100px;vertical-align: middle;">&nbsp;&nbsp;<small><?php echo vtranslate('SET_EMPTY_FOR_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</small></td></tr><tbody></table></div></div><div class="span4" style="width: 20%;"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_SPECIFY_GROUPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php $_smarty_tpl->tpl_vars["step4_info"] = new Smarty_variable("LBL_STEP4_".($_smarty_tpl->tpl_vars['REPORTTYPE']->value), null, 0);?><?php echo vtranslate($_smarty_tpl->tpl_vars['step4_info']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div><?php }} ?>