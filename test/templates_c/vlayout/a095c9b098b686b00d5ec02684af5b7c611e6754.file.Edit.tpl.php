<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:37
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/Edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199430652959ba9ebdc7e2b4-97619905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a095c9b098b686b00d5ec02684af5b7c611e6754' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/Edit.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199430652959ba9ebdc7e2b4-97619905',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATE_FORMAT' => 0,
    'SEC_MODULE' => 0,
    'RECORDID' => 0,
    'FOLDERID' => 0,
    'relmodulesstring' => 0,
    'MODE' => 0,
    'isDuplicate' => 0,
    'cancel_btn_url' => 0,
    'REPORTTYPE' => 0,
    'MODULE' => 0,
    'REPORTNAME' => 0,
    'steps_display' => 0,
    'REPORT_GROUPING' => 0,
    'REPORT_COLUMNS' => 0,
    'REPORT_COLUMNS_TOTAL' => 0,
    'REPORT_CUSTOM_CALCULATIONS' => 0,
    'REPORT_LABELS' => 0,
    'REPORT_FILTERS' => 0,
    'REPORT_SHARING' => 0,
    'REPORT_SCHEDULER' => 0,
    'REPORT_GRAPHS' => 0,
    'REPORT_DASHBOARDS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebdd05cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebdd05cf')) {function content_59ba9ebdd05cf($_smarty_tpl) {?>

<script language="JAVASCRIPT" type="text/javascript" src="layouts/vlayout/modules/ITS4YouReports/resources/ITS4YouReports.js"></script>
<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>
	
<script> var none_lang = "<?php echo vtranslate('LBL_NONE');?>
"; </script><style type="text/css">.table-report th{border-bottom:1px solid #DDD;}.table-report td{border:0px;}.table-report tr td {background: none !important;}.table-bordered tr td{border:0px;vertical-align: middle;}.table-bordered input{vertical-align: middle;margin:auto;}.conditionFilterDiv{background: #EEEFF2;padding-left:5px;padding-top:5px;padding-right:5px;margin-bottom: 10px;border: 0.1px solid rgba(0, 0, 0, 0.1);border-radius: 5px;}</style><form name="NewReport" id="NewReport" action="index.php" method="POST" enctype="multipart/form-data" onsubmit="return changeSteps();"><input type="hidden" name="module" value="ITS4YouReports"><input type="hidden" name='secondarymodule' id='secondarymodule' value="<?php echo $_smarty_tpl->tpl_vars['SEC_MODULE']->value;?>
"/><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"><input type="hidden" name='modulesString' id='modulesString' value=''/><input type="hidden" name='reload' id='reload' value='true'/><input type="hidden" name='action' id='action' value='Save'/><input type="hidden" name='file' id='file' value=''/><input type="hidden" name='folder' id='folder' value="<?php echo $_smarty_tpl->tpl_vars['FOLDERID']->value;?>
"/><input type="hidden" name='relatedmodules' id='relatedmodules' value='<?php echo $_smarty_tpl->tpl_vars['relmodulesstring']->value;?>
'/><input type="hidden" name='mode' id='mode' value='<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
' /><input type="hidden" name='isDuplicate' id='isDuplicate' value='<?php echo $_smarty_tpl->tpl_vars['isDuplicate']->value;?>
' /><input type="hidden" name='SaveType' id='SaveType' value='' /><input type="hidden" name='actual_step' id='actual_step' value='1' /><input type="hidden" name='cancel_btn_url' id='cancel_btn_url' value='<?php echo $_smarty_tpl->tpl_vars['cancel_btn_url']->value;?>
' /><input type="hidden" name="reporttype" id="reporttype" value="<?php echo $_smarty_tpl->tpl_vars['REPORTTYPE']->value;?>
"><!-- DISPLAY --><div class="row-fluid detailViewTitle"><div class=" span10 "><div class="row-fluid"><div class="span5"><div class="row-fluid"><span class="span10" style="padding:0px 0px 0px 2em;"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title=""><?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'){?><?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value=="true"){?><span class="report_name"><?php echo vtranslate('LBL_DUPLICATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['REPORTNAME']->value;?>
&quot;</span>&nbsp;<?php }else{ ?><span class="report_name"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &quot;<?php echo $_smarty_tpl->tpl_vars['REPORTNAME']->value;?>
&quot;</span>&nbsp;<?php }?><?php }else{ ?><span class="report_name"><?php echo vtranslate('LBL_NEW_TEMPLATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;<?php }?></span></span></span></div></div></div></div></div><div class="contents tabbable ui-sortable"><ul class="nav nav-tabs layoutTabs massEditTabs" id="reportTabs" style="margin-left:0.6em;" ><li class="r4you_step active" id="rtypestep1"><a data-toggle="tab" data-step="1" href="#"><strong><?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep4" ><a data-toggle="tab" data-step="4" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_SPECIFY_GROUPING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep5" ><a data-toggle="tab" data-step="5" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_SELECT_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep6" ><a data-toggle="tab" data-step="6" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_CALCULATIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep7" ><a data-toggle="tab" data-step="7" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_LABELS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep8" ><a data-toggle="tab" data-step="8" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_FILTERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep9" ><a data-toggle="tab" data-step="9" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_SHARING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep10" ><a data-toggle="tab" data-step="10" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_LIMIT_SCHEDULER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep11" ><a data-toggle="tab" data-step="11" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_GRAPHS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li><li class="r4you_step relatedListTab" id="rtypestep12" ><a data-toggle="tab" data-step="12" href="#relatedTabReport"><strong><?php echo vtranslate('LBL_REPORT_DASHBOARDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></li></ul></div><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="detailViewLayout"><table width="100%" align="center" border="0" cellpadding="0" cellspacing="0"><tr><td class="small" style="text-align:center;padding:0px 0px 10px 0px;"><input type="button" name="back_rep_top" id="back_rep_top" value=" &nbsp;&lt;&nbsp;<?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; " disabled="disabled" class="btn" onClick="">&nbsp;&nbsp;<div  id="submitbutton" style="display:<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='edit'){?>none<?php }else{ ?>inline<?php }?>;" ><button class="btn btn-success" type="button" id="savebtn" onclick=""><strong><?php echo vtranslate('LBL_SAVE_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button type="button" class="btn btn-danger backStep" id="cancelbtn" onclick=""><strong><?php echo vtranslate('LBL_CANCEL_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;<button class="btn btn-success" type="button" id="saverunbtn" onclick=""><strong><?php echo vtranslate('LBL_SAVE_RUN_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div  id="submitbutton0T" style="display:<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='edit'){?>inline<?php }else{ ?>none<?php }?>;" ><button type="button" class="btn btn-danger backStep" id="cancelbtn0T" onclick=""><strong><?php echo vtranslate('LBL_CANCEL_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;</div><input type="button" name="next" id="next_rep_top" value=" &nbsp;<?php echo vtranslate('LNK_LIST_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&rsaquo;&nbsp; " onClick="" class="btn">&nbsp;&nbsp;</td></tr><tr><td align="left" valign="top"><div class="reportTab" id="step1"><?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/ReportsStep1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step4"><?php echo $_smarty_tpl->tpl_vars['REPORT_GROUPING']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step5"><?php echo $_smarty_tpl->tpl_vars['REPORT_COLUMNS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step6"><?php echo $_smarty_tpl->tpl_vars['REPORT_COLUMNS_TOTAL']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step61"><?php if ($_smarty_tpl->tpl_vars['RECORDID']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['REPORT_CUSTOM_CALCULATIONS']->value;?>
<?php }?></div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step7"><?php echo $_smarty_tpl->tpl_vars['REPORT_LABELS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step8"><?php echo $_smarty_tpl->tpl_vars['REPORT_FILTERS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step9"><?php echo $_smarty_tpl->tpl_vars['REPORT_SHARING']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step10"><?php echo $_smarty_tpl->tpl_vars['REPORT_SCHEDULER']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step11"><?php echo $_smarty_tpl->tpl_vars['REPORT_GRAPHS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step12"><?php echo $_smarty_tpl->tpl_vars['REPORT_DASHBOARDS']->value;?>
</div></td></tr></table><table width="100%"  border="0" cellspacing="0" cellpadding="5" ><tr><td class="small" style="text-align:center;padding:10px 0px 10px 0px;" colspan="3"><input type="button" name="back_rep_top" id="back_rep_top2" value=" &nbsp;&lt;&nbsp;<?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; " disabled="disabled" class="btn" onClick="">&nbsp;&nbsp;<div  id="submitbutton2" style="display:<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='edit'){?>none<?php }else{ ?>inline<?php }?>;" ><button class="btn btn-success" type="button" id="savebtn2" onclick=""><strong><?php echo vtranslate('LBL_SAVE_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button type="button" class="btn btn-danger backStep" id="cancelbtn2" onclick=""><strong><?php echo vtranslate('LBL_CANCEL_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;<button class="btn btn-success" type="button" id="saverunbtn2" onclick=""><strong><?php echo vtranslate('LBL_SAVE_RUN_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div  id="submitbutton0B" style="display:<?php if ($_smarty_tpl->tpl_vars['MODE']->value!='edit'){?>inline<?php }else{ ?>none<?php }?>;" ><button type="button" class="btn btn-danger backStep" id="cancelbtn0B" onclick=""><strong><?php echo vtranslate('LBL_CANCEL_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;</div><input type="button" name="next" id="next_rep_top2" value=" &nbsp;<?php echo vtranslate('LNK_LIST_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&rsaquo;&nbsp; " onClick="" class="btn">&nbsp;&nbsp;</td></tr></table></div></div></form><?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/EditScript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>