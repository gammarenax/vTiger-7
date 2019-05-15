<?php /* Smarty version Smarty-3.1.7, created on 2017-09-18 17:14:29
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsCustomStep1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9722611659bffef5258859-58419223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f4783feb0039b92985f06a1da382f69be40e2a0' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsCustomStep1.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9722611659bffef5258859-58419223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'custom_style' => 0,
    'REPORTNAME' => 0,
    'REP_FOLDERS' => 0,
    'folder' => 0,
    'REPORTDESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bffef528114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bffef528114')) {function content_59bffef528114($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["custom_style"] = new Smarty_variable(" style='' ", null, 0);?>
<div class="row-fluid"><div class="span9"><div class="row-fluid"><table class="table table-bordered table-report"><thead><tr class="blockHeader"><th colspan="2"><?php echo vtranslate('LBL_REPORT_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_REPORT_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<span class="redColor">*</span></label></td><td <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
 ><input type="text" name="reportname" id="reportname" class="span6" style="margin:auto;" value="<?php echo $_smarty_tpl->tpl_vars['REPORTNAME']->value;?>
"></td></tr><tr style="height:25px"><td class="fieldLabel medium" <?php echo $_smarty_tpl->tpl_vars['custom_style']->value;?>
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
<br></th></tr></thead><tbody><tr style="height:25px"><td><div class="padding1per"><span><?php echo vtranslate('LBL_CUSTOMSTEP1_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></div></td></tr></tbody></table></div></div></div><?php }} ?>