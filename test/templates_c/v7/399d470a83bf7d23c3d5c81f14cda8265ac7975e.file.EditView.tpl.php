<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:28
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4085090475cdac72c511152-02019764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '399d470a83bf7d23c3d5c81f14cda8265ac7975e' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditView.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4085090475cdac72c511152-02019764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATE_FORMAT' => 0,
    'MODULE' => 0,
    'SEC_MODULE' => 0,
    'RECORDID' => 0,
    'FOLDERID' => 0,
    'relmodulesstring' => 0,
    'MODE' => 0,
    'isDuplicate' => 0,
    'cancel_btn_url' => 0,
    'REPORTTYPE' => 0,
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
  'unifunc' => 'content_5cdac72c5c2fe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72c5c2fe')) {function content_5cdac72c5c2fe($_smarty_tpl) {?>

<?php echo $_smarty_tpl->tpl_vars['DATE_FORMAT']->value;?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<form name="NewReport" id="NewReport" class="form-horizontal recordEditView" action="index.php" method="POST" enctype="multipart/form-data" onsubmit="return changeSteps();"><input type="hidden" name="module" value="ITS4YouReports"><input type="hidden" name='secondarymodule' id='secondarymodule' value="<?php echo $_smarty_tpl->tpl_vars['SEC_MODULE']->value;?>
"/><input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORDID']->value;?>
"><input type="hidden" name='modulesString' id='modulesString' value=''/><input type="hidden" name='reload' id='reload' value='true'/><input type="hidden" name='action' id='action' value='Save'/><input type="hidden" name='file' id='file' value=''/><input type="hidden" name='folder' id='folder' value="<?php echo $_smarty_tpl->tpl_vars['FOLDERID']->value;?>
"/><input type="hidden" name='relatedmodules' id='relatedmodules' value='<?php echo $_smarty_tpl->tpl_vars['relmodulesstring']->value;?>
'/><input type="hidden" name='mode' id='mode' value='<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
' /><input type="hidden" name='isDuplicate' id='isDuplicate' value='<?php echo $_smarty_tpl->tpl_vars['isDuplicate']->value;?>
' /><input type="hidden" name='SaveType' id='SaveType_v7' value='' /><input type="hidden" name='actual_step' id='actual_step' value='1' /><input type="hidden" name='cancel_btn_url' id='cancel_btn_url' value='<?php echo $_smarty_tpl->tpl_vars['cancel_btn_url']->value;?>
' /><input type="hidden" name="reporttype" id="reporttype" value="<?php echo $_smarty_tpl->tpl_vars['REPORTTYPE']->value;?>
"><div class="reportTab" id="step1"><?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/ReportsStep1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step4"><?php echo $_smarty_tpl->tpl_vars['REPORT_GROUPING']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step5"><?php echo $_smarty_tpl->tpl_vars['REPORT_COLUMNS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step6"><?php echo $_smarty_tpl->tpl_vars['REPORT_COLUMNS_TOTAL']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
" id="step61"><?php echo $_smarty_tpl->tpl_vars['REPORT_CUSTOM_CALCULATIONS']->value;?>
</div><div class="<?php echo $_smarty_tpl->tpl_vars['steps_display']->value;?>
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
</div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Buttons.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/EditScript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><?php }} ?>