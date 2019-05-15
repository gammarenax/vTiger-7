<?php /* Smarty version Smarty-3.1.7, created on 2019-03-20 12:25:22
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/MailManager/FolderDrafts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13650321365c923132c5a588-86912567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e41a0183c6b76cbd761eb0b2886c68474fe0f85' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/MailManager/FolderDrafts.tpl',
      1 => 1552922087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13650321365c923132c5a588-86912567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOLDER' => 0,
    'QUERY' => 0,
    'SEARCHOPTIONS' => 0,
    'value' => 0,
    'TYPE' => 0,
    'label' => 0,
    'IS_READ' => 0,
    'MAIL' => 0,
    'MAIL_DESC' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5c92313319f04',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c92313319f04')) {function content_5c92313319f04($_smarty_tpl) {?>
<div class='col-lg-12 padding0px'><span class="col-lg-1 paddingLeft5px"><input type='checkbox' id='mainCheckBox' class="pull-left"></span><span class="col-lg-6 padding0px"><span class="fa-stack fa-sm cursorPointer mmActionIcon" id="mmDeleteMail" title="<?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-trash-o fa-stack-lg"></i></span></span><span class="col-lg-5 padding0px"><span class="pull-right"><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><span><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageInfo();?>
&nbsp;&nbsp;</span><?php }?><button type="button" id="PreviousPageButton" class="btn btn-default marginRight0px" <?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasPrevPage()){?>data-page='<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(-1);?>
'<?php }else{ ?>disabled="disabled"<?php }?>><i class="fa fa-caret-left"></i></button><button type="button" id="NextPageButton" class="btn btn-default" <?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasNextPage()){?> data-page='<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(1);?>
'<?php }else{ ?>disabled="disabled"<?php }?>><i class="fa fa-caret-right"></i></button></span></span></div><div class='col-lg-12 padding0px'><span class="col-lg-1 padding0px">&nbsp;</span><div class="col-lg-9 mmSearchContainer"><div><div class="input-group col-lg-8 padding0px"><input type="text" class="form-control" id="mailManagerSearchbox" aria-describedby="basic-addon2" value="<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" data-foldername='<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
' placeholder="<?php echo vtranslate('LBL_TYPE_TO_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></div><div class="col-lg-4 padding0px mmSearchDropDown"><select id="searchType" style="background: #DDDDDD url('layouts/v7/skins/images/arrowdown.png') no-repeat 95% 40%; padding-left: 9px;"><?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCHOPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></div></div></div><div class='col-lg-2' id="mmSearchButtonContainer"><button id='mm_searchButton' class="pull-right" style="width: 72%;"><?php echo vtranslate('LBL_Search',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><div class="col-lg-12 mmEmailContainerDiv" id='emailListDiv'><?php  $_smarty_tpl->tpl_vars['MAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDER']->value->mails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAIL']->key => $_smarty_tpl->tpl_vars['MAIL']->value){
$_smarty_tpl->tpl_vars['MAIL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['IS_READ'] = new Smarty_variable(1, null, 0);?><div class="col-lg-12 cursorPointer mailEntry <?php if ($_smarty_tpl->tpl_vars['IS_READ']->value){?>mmReadEmail<?php }?>" data-read='<?php echo $_smarty_tpl->tpl_vars['IS_READ']->value;?>
'><span class="col-lg-1 paddingLeft5px"><input type='checkbox' class='mailCheckBox' class="pull-left"></span><div class="col-lg-11 draftEmail padding0px"><input type="hidden" class="msgNo" value='<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
'><div class="col-lg-8 padding0px font13px stepText"><?php echo strip_tags($_smarty_tpl->tpl_vars['MAIL']->value['saved_toid']);?>
<br><?php echo strip_tags($_smarty_tpl->tpl_vars['MAIL']->value['subject']);?>
</div><div class="col-lg-4 padding0px"><span class="pull-right"><span class='mmDateTimeValue'><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MAIL']->value['date_start'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
</span></span></div><div class="col-lg-12 mmMailDesc"><?php $_smarty_tpl->tpl_vars['MAIL_DESC'] = new Smarty_variable(str_replace("\n"," ",strip_tags($_smarty_tpl->tpl_vars['MAIL']->value['description'])), null, 0);?><?php echo $_smarty_tpl->tpl_vars['MAIL_DESC']->value;?>
</div></div></div><?php } ?></div><?php }else{ ?><div class="noMailsDiv"><center><strong><?php echo vtranslate('LBL_No_Mails_Found',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></center></div><?php }?><?php }} ?>