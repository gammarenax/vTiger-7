<?php /* Smarty version Smarty-3.1.7, created on 2017-12-11 15:26:55
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/FieldExpressions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5082394265a0d63490c03a1-89878441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5d348df78ffc834f0953483c5f1afd8c351e80d' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/FieldExpressions.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5082394265a0d63490c03a1-89878441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d63490d925',
  'variables' => 
  array (
    'columnIndex' => 0,
    'MODULE' => 0,
    'columnIndexSpecial' => 0,
    'REL_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d63490d925')) {function content_5a0d63490d925($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars["columnIndex"] = new Smarty_variable("WCCINRW", null, 0);?><?php $_smarty_tpl->tpl_vars["columnIndexSpecial"] = new Smarty_variable("chzn-done", null, 0);?><div id='fieldExpressionsBase' ><div class="fieldExpressionsBase hide" id='fieldExpressionsBaseWCCINRW' style="padding-left: 3%;padding-right: 3%"><div class="popupUi modal " data-backdrop="false" style="z-index: 1000006;min-width: 750px;overflow: visible"><div class="modal-header contentsBackground" style="text-align:left;"><button type="button" class="close" onClick="jQuery('#fieldExpressionsBase<?php echo $_smarty_tpl->tpl_vars['columnIndex']->value;?>
').css('display', 'none');" data-dismiss="modal" aria-hidden="true">&times;</button><h3><?php echo vtranslate('LBL_SET_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3></div><div class="modal-body"><div class="row-fluid"><span class="span4" style="text-align:left;"><select name="fc_fval_<?php echo $_smarty_tpl->tpl_vars['columnIndex']->value;?>
" id="fc_fval_<?php echo $_smarty_tpl->tpl_vars['columnIndex']->value;?>
" onChange="AddFieldToFilter('<?php echo $_smarty_tpl->tpl_vars['columnIndex']->value;?>
',this);" class="span6 chzn-select <?php echo $_smarty_tpl->tpl_vars['columnIndexSpecial']->value;?>
"  style="margin-top:0.5em;"><option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php echo $_smarty_tpl->tpl_vars['REL_FIELDS']->value;?>
</select></span></div></div><div class="modal-footer"><div class=" pull-right cancelLinkContainer"><a class="cancelLink closeModal" type="button" onClick="jQuery('#fieldExpressionsBase<?php echo $_smarty_tpl->tpl_vars['columnIndex']->value;?>
').css('display', 'none');"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div><div class="clonedPopUp"></div></div></div><?php }} ?>