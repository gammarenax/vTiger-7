<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:37
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsStep1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:64325039159ba9ebdd30a48-32422024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078a0edd19449a53bf9576f09ebb89ec856fbdf0' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsStep1.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64325039159ba9ebdd30a48-32422024',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'custom_style' => 0,
    'REPORTNAME' => 0,
    'PRIMARYMODULES' => 0,
    'RECORD_MODE' => 0,
    'MODE' => 0,
    'primarymodulearr' => 0,
    'REP_FOLDERS' => 0,
    'folder' => 0,
    'REPORTDESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebdd7210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebdd7210')) {function content_59ba9ebdd7210($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["custom_style"] = new Smarty_variable(" style='' ", null, 0);?>
<div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><input type="text" name="reportname" id="reportname" class="span12" style="margin:auto;" value="<?php echo $_smarty_tpl->tpl_vars['REPORTNAME']->value;?>
"></td></tr><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_PRIMARY_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><input name="report_primarymodule" id="report_primarymodule" type="hidden" ><select name="primarymodule" id="primarymodule" class="span3 chzn-select row-fluid"  style="margin:auto;"><?php  $_smarty_tpl->tpl_vars['primarymodulearr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['primarymodulearr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRIMARYMODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['primarymodulearr']->key => $_smarty_tpl->tpl_vars['primarymodulearr']->value){
$_smarty_tpl->tpl_vars['primarymodulearr']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['RECORD_MODE']->value=="ChangeSteps"||$_smarty_tpl->tpl_vars['MODE']->value=="edit"){?><?php if ($_smarty_tpl->tpl_vars['primarymodulearr']->value['selected']!=''){?><option value="<?php echo $_smarty_tpl->tpl_vars['primarymodulearr']->value['id'];?>
" selected ><?php echo $_smarty_tpl->tpl_vars['primarymodulearr']->value['module'];?>
</option><?php }?><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['primarymodulearr']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['primarymodulearr']->value['selected']!=''){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['primarymodulearr']->value['module'];?>
</option><?php }?><?php } ?></select></td></tr><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_REP_FOLDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><select name="reportfolder" id="reportfolder" class="span3 chzn-select row-fluid"  style="margin:auto;"><?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['folder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REP_FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value){
$_smarty_tpl->tpl_vars['folder']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['folder']->value['folderid'];?>
" <?php if ($_smarty_tpl->tpl_vars['folder']->value['selected']!=''){?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['folder']->value['foldername'];?>
</option><?php } ?></select></td></tr><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td align="left" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><textarea name="reportdesc" id="reportdesc" class="txtBox" rows="5"><?php echo $_smarty_tpl->tpl_vars['REPORTDESC']->value;?>
</textarea></td></tr></tbody></table></div></div><div class="span4" style="width: 20%;"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php echo vtranslate('LBL_STEP1_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div><?php }} ?>