<?php /* Smarty version Smarty-3.1.7, created on 2017-11-01 13:41:19
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderDrafts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44583348059f9ceff91d159-58211208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f5c07357b1882a519676d33b26e7628a736c9cc' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MailManager/FolderDrafts.tpl',
      1 => 1504548055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44583348059f9ceff91d159-58211208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FOLDER' => 0,
    'MODULE' => 0,
    'QUERY' => 0,
    'SEARCHOPTIONS' => 0,
    'value' => 0,
    'label' => 0,
    'MAIL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59f9ceffa0f9b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f9ceffa0f9b')) {function content_59f9ceffa0f9b($_smarty_tpl) {?>

<div class="listViewPageDiv" id="email_con" name="email_con"><div class="row-fluid" id="mail_fldrname"><h3><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
</h3></div><hr><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv row-fluid"><div class="btn-toolbar span9"><button class='btn btn-danger delete' onclick="MailManager.massMailDelete('__vt_drafts');" value="<?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><?php echo vtranslate('LBL_Delete',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><div class="pull-right"><input type="text" id='search_txt' class='span3' value="<?php echo $_smarty_tpl->tpl_vars['QUERY']->value;?>
" style="margin-bottom: 0px;" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><strong>&nbsp;&nbsp;<?php echo vtranslate('LBL_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;</strong><select class='small' id="search_type" style="margin-bottom: 0px;"><?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCHOPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" ><?php echo vtranslate($_smarty_tpl->tpl_vars['label']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select>&nbsp;<button type=submit class="btn edit" onclick="MailManager.search_drafts();" value="<?php echo vtranslate('LBL_FIND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" id="mm_search"><strong><?php echo vtranslate('LBL_FIND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><div class="btn-toolbar span3"><span class="pull-right"><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><span class="pull-right btn-group"><span class="pageNumbers alignTop listViewActions"><?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageInfo();?>
&nbsp;</span><span class="pull-right"><button class="btn"<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasPrevPage()){?>href="#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
/page/<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(-1);?>
"onclick="MailManager.folder_drafts(<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(-1);?>
);"<?php }else{ ?>disabled="disabled"<?php }?>><span class="icon-chevron-left"></span></button><button class="btn"<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->hasNextPage()){?>href="#<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->name();?>
/page/<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(1);?>
"onclick="MailManager.folder_drafts(<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->pageCurrent(1);?>
);"<?php }else{ ?>disabled="disabled"<?php }?>><span class="icon-chevron-right"></span></button></span></span><?php }?></span></div></div></div><br><div class="listViewContentDiv"><div class="listViewEntriesDiv"><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><th width="3%" class="listViewHeaderValues" ><input align="left" type="checkbox" name="selectall" id="parentCheckBox" onClick='MailManager.toggleSelect(this.checked,"mc_box");'/></th><th width="27%" class="listViewHeaderValues"  ><?php echo vtranslate('LBL_TO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th class="listViewHeaderValues" ><?php echo vtranslate('LBL_SUBJECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th width="17%" class="listViewHeaderValues"  align="right" ><?php echo vtranslate('LBL_Date',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->mails()){?><?php  $_smarty_tpl->tpl_vars['MAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MAIL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FOLDER']->value->mails(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MAIL']->key => $_smarty_tpl->tpl_vars['MAIL']->value){
$_smarty_tpl->tpl_vars['MAIL']->_loop = true;
?><tr class="listViewEntries mm_normal mm_clickable"id="_mailrow_<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
" onmouseover='MailManager.highLightListMail(this);' onmouseout='MailManager.unHighLightListMail(this);'><td width="3%" class="narrowWidthType"><input type='checkbox' value = "<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
" name = 'mc_box' class='small' onclick='MailManager.toggleSelectMail(this.checked, this);'></td><td width="27%" class="narrowWidthType" onclick="MailManager.mail_draft(<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value['saved_toid'];?>
</td><td class="narrowWidthType" onclick="MailManager.mail_draft(<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value['subject'];?>
</td><td width="17%" class="narrowWidthType" align="right" onclick="MailManager.mail_draft(<?php echo $_smarty_tpl->tpl_vars['MAIL']->value['id'];?>
);"><?php echo $_smarty_tpl->tpl_vars['MAIL']->value['date_start'];?>
</td></tr><?php } ?><?php }elseif($_smarty_tpl->tpl_vars['FOLDER']->value->mails()==null){?><tr><td colspan="3"><strong><?php echo vtranslate('LBL_No_Mails_Found',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td></tr><?php }?></tbody></table></div></div></div><?php }} ?>