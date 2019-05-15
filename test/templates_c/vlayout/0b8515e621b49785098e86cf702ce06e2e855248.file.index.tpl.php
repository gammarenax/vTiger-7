<?php /* Smarty version Smarty-3.1.7, created on 2017-11-12 11:02:13
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MailManager/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33221457659ada603197494-79594511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b8515e621b49785098e86cf702ce06e2e855248' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MailManager/index.tpl',
      1 => 1510386414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33221457659ada603197494-79594511',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ada6031a9e4',
  'variables' => 
  array (
    'MAILBOX' => 0,
    'MODULE' => 0,
    'ERROR' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ada6031a9e4')) {function content_59ada6031a9e4($_smarty_tpl) {?>

<div class="span2 row-fluid"><div id="_quicklinks_mainuidiv_" class="quickWidgetContainer accordion"><?php echo $_smarty_tpl->getSubTemplate ("modules/MailManager/MainuiQuickLinks.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="clearfix">&nbsp;<input type="hidden" id="isMailBoxExists" value="<?php if ($_smarty_tpl->tpl_vars['MAILBOX']->value->exists()){?>1<?php }else{ ?>0<?php }?>"/></div><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader" onclick="MailManager.getFoldersList();"><span class="pull-left"><img class="imageElement" data-rightimage="<?php echo vimage_path('rightArrowWhite.png');?>
" data-downimage="<?php echo vimage_path('downArrowWhite.png');?>
" src="<?php echo vimage_path('rightArrowWhite.png');?>
" /></span>&nbsp;<h5 class="title widgetTextOverflowEllipsis pull-right"><?php echo vtranslate('LBL_Folders',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></div><div class="widgetContainer accordion-body collapse in" id="folders"><input type=hidden name="mm_selected_folder" id="mm_selected_folder"><input type="hidden" name="_folder" id="mailbox_folder"></div></div><div id="_mainfolderdiv_" class="quickWidgetContainer accordion"></div></div></div><div class="contentsDiv span10 marginLeftZero"><div id='_progress_' style='float: right; display: none; position: absolute; right: 35px; font-weight: bold;'><span id='_progressmsg_'>...</span><img src="<?php echo vimage_path('vtbusy.gif');?>
" border='0' align='absmiddle'></div><span id="_messagediv_"><?php if ($_smarty_tpl->tpl_vars['ERROR']->value){?><p><?php echo $_smarty_tpl->tpl_vars['ERROR']->value;?>
</p><?php }?></span><div id="_contentdiv_"></div><div id="_contentdiv2_" class="container-fluid"></div><div id="_settingsdiv_"></div><div id="_relationpopupdiv_" style="display:none;position:absolute;width:800px;z-index:80000;"></div><div id="_replydiv_" style="display:none;"></div><div id="replycontentdiv" style="display:none;"></div></div><div id = '__vtiger__'></div><script type='text/javascript'>
		jQuery(function(){MailManager.mainui()});
	</script><input type="hidden" name="module" value="MailManager"><?php }} ?>