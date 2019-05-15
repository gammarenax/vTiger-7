<?php /* Smarty version Smarty-3.1.7, created on 2017-11-12 11:13:57
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/FieldExpressions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14292742959ba9ea30b0211-99618552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bd5d809c9d93ba61c6c9b76a9362814447b5cf5' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/FieldExpressions.tpl',
      1 => 1510386410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14292742959ba9ea30b0211-99618552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ea30cc4d',
  'variables' => 
  array (
    'columnIndex' => 0,
    'MODULE' => 0,
    'columnIndexSpecial' => 0,
    'REL_FIELDS' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ea30cc4d')) {function content_59ba9ea30cc4d($_smarty_tpl) {?>
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