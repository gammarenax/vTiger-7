<?php /* Smarty version Smarty-3.1.7, created on 2017-11-29 12:03:49
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3429814745a1ea225aa64e4-38880450%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d09297aa005207de2674b3da2f24345b2042cb' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Step2.tpl',
      1 => 1510671590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3429814745a1ea225aa64e4-38880450',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_MODULE_TABID' => 0,
    'FOR_MODULE' => 0,
    'FOR_FIELD' => 0,
    'FROM_MODULE' => 0,
    'DESCRIPTION' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORD_MODEL' => 0,
    'CUSTOM_VIEWS' => 0,
    'CVID' => 0,
    'VIEWNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a1ea225af279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1ea225af279')) {function content_5a1ea225af279($_smarty_tpl) {?>
<form name="EditCalculateFields" action="index.php" method="post" id="calculateFields_step2" class="form-horizontal" ><input type="hidden" name="module" value="ITS4YouCalculateFields"><input type="hidden" name="view" value="Edit"><input type="hidden" name="mode" value="Step3" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" class="step" value="2" /><input type="hidden" name="related_module_tabid" value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_TABID']->value;?>
" /><input type="hidden" name="advfilterlist" id="advanced_filter" value='' /><input type="hidden" name="for_module" value="<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
" /><input type="hidden" name="for_field" value="<?php echo $_smarty_tpl->tpl_vars['FOR_FIELD']->value;?>
" /><input type="hidden" name="from_module" value="<?php echo $_smarty_tpl->tpl_vars['FROM_MODULE']->value;?>
" /><input type="hidden" name="description" value="<?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
" /><div class="row-fluid padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"><label><strong><?php echo vtranslate('LBL_STEP_2',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group"><div class="control-label"><?php echo vtranslate('LBL_SELECT_CUSTOM_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="controls"><select class="chzn-select" id="custom_View" name="custom_View" required="true" data-placeholder=""><?php if (empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php  $_smarty_tpl->tpl_vars['VIEWNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWNAME']->_loop = false;
 $_smarty_tpl->tpl_vars['CVID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWNAME']->key => $_smarty_tpl->tpl_vars['VIEWNAME']->value){
$_smarty_tpl->tpl_vars['VIEWNAME']->_loop = true;
 $_smarty_tpl->tpl_vars['CVID']->value = $_smarty_tpl->tpl_vars['VIEWNAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
</option><?php } ?><option value="-1"><?php echo vtranslate('LBL_CHOOSE_OWN_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }elseif(!empty($_smarty_tpl->tpl_vars['RECORD_MODEL']->value)){?><?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('from_cvid')>0){?><?php  $_smarty_tpl->tpl_vars['VIEWNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWNAME']->_loop = false;
 $_smarty_tpl->tpl_vars['CVID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWNAME']->key => $_smarty_tpl->tpl_vars['VIEWNAME']->value){
$_smarty_tpl->tpl_vars['VIEWNAME']->_loop = true;
 $_smarty_tpl->tpl_vars['CVID']->value = $_smarty_tpl->tpl_vars['VIEWNAME']->key;
?><?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('from_cvid')==$_smarty_tpl->tpl_vars['CVID']->value){?><option value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
</option><?php }else{ ?><option value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
</option><?php }?><?php } ?><option value="-1"><?php echo vtranslate('LBL_CHOOSE_OWN_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['VIEWNAME'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VIEWNAME']->_loop = false;
 $_smarty_tpl->tpl_vars['CVID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VIEWNAME']->key => $_smarty_tpl->tpl_vars['VIEWNAME']->value){
$_smarty_tpl->tpl_vars['VIEWNAME']->_loop = true;
 $_smarty_tpl->tpl_vars['CVID']->value = $_smarty_tpl->tpl_vars['VIEWNAME']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['CVID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['VIEWNAME']->value;?>
</option><?php } ?><option value="-1" selected="selected"><?php echo vtranslate('LBL_CHOOSE_OWN_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php }?><?php }?></select></div></div><div class="filterConditionsDiv"><label><strong><?php echo vtranslate('LBL_CHOOSE_OWN_CONDITIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 :</strong></label><br><div class="row-fluid"><span class="span12"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></div></div><br><div class="pull-right"><button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><div class="clearfix"></div></form></div><?php }} ?>