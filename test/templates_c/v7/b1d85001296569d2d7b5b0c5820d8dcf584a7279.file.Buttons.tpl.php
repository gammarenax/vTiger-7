<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:28
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18469514815cdac72c6e6e04-93900875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1d85001296569d2d7b5b0c5820d8dcf584a7279' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/Buttons.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18469514815cdac72c6e6e04-93900875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cdac72c6ef3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72c6ef3b')) {function content_5cdac72c6ef3b($_smarty_tpl) {?>

<div class="modal-overlay-footer"><div class="row clearfix"><div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '><button type="button" class="btn btn-default" name="back_rep_top" id="back_rep_top"><i class="fa fa-chevron-left"></i>&nbsp;<?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<button class="btn btn-success saveButton" id="savebtn" type="button"><?php echo vtranslate('LBL_SAVE_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<button class="btn btn-success saveButton" id="saverunbtn" type="button"><?php echo vtranslate('LBL_SAVE_RUN_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class="cancelLink" href="javascript:history.back()" type="reset"><?php echo vtranslate('LBL_CANCEL_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>&nbsp;&nbsp;<button type="button" class="btn btn-default" name="next" id="next_rep_top"><i class="fa fa-chevron-right"></i>&nbsp;<?php echo vtranslate('LNK_LIST_NEXT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><?php }} ?>