<?php /* Smarty version Smarty-3.1.7, created on 2017-09-20 09:56:16
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65612818759c23b408cf853-87930875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72785fa29593484224070a2e86feadf9036c2a7a' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/MailConverter/Step2.tpl',
      1 => 1504541167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65612818759c23b408cf853-87930875',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IMAP_ERROR' => 0,
    'CONNECTION_ERROR' => 0,
    'QUALIFIED_MODULE' => 0,
    'FOLDERS' => 0,
    'FOLDER' => 0,
    'SELECTED' => 0,
    'CREATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c23b409c28e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c23b409c28e')) {function content_59c23b409c28e($_smarty_tpl) {?>
<div class="pull-left" style="margin-left: 85px; color: #FF0000;"><strong><?php if ($_smarty_tpl->tpl_vars['IMAP_ERROR']->value){?><?php echo $_smarty_tpl->tpl_vars['IMAP_ERROR']->value;?>
<?php }elseif($_smarty_tpl->tpl_vars['CONNECTION_ERROR']->value){?><?php echo vtranslate('LBL_CONNECTION_ERROR',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></strong></div><div class="span9 addMailBoxBlock"><h3 style=""><?php echo vtranslate('SELECT_FOLDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><br><div class="row-fluid padding-bottom1per"><div id="mailConverterDragIcon"><i class="icon-info-sign"></i>&nbsp;&nbsp;<?php echo vtranslate('TO_CHANGE_THE_FOLDER_SELECTION_DESELECT_ANY_OF_THE_SELECTED_FOLDERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><br><form class="form-horizontal" id="mailBoxEditView" name="step2"><div class="addMailBoxStep"><?php  $_smarty_tpl->tpl_vars['SELECTED'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SELECTED']->_loop = false;
 $_smarty_tpl->tpl_vars['FOLDER'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FOLDERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SELECTED']->key => $_smarty_tpl->tpl_vars['SELECTED']->value){
$_smarty_tpl->tpl_vars['SELECTED']->_loop = true;
 $_smarty_tpl->tpl_vars['FOLDER']->value = $_smarty_tpl->tpl_vars['SELECTED']->key;
?><div class="span3"><input type="checkbox" name="folders" value="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['SELECTED']->value=='checked'){?>checked<?php }?>>&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value;?>
</div><?php } ?></div><div class="pull-right" style="margin-top: 20px;"><button class="btn btn-danger backStep" type="button" onclick="javascript:window.history.back();"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>&nbsp;&nbsp;<button class="btn btn-success" onclick="javascript:Settings_MailConverter_Edit_Js.secondStep()"><strong><?php if ($_smarty_tpl->tpl_vars['CREATE']->value=='new'){?><?php echo vtranslate('LBL_NEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_FINISH',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php }?></strong></button><a class="cancelLink" type="reset" onclick="javascript:window.history.go(-2);"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div></form></div><?php }} ?>