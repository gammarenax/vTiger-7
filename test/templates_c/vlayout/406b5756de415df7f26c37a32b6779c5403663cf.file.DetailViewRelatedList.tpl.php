<?php /* Smarty version Smarty-3.1.7, created on 2017-12-05 09:41:06
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouStyles/DetailViewRelatedList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4439145505a2669b2d00025-95766231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406b5756de415df7f26c37a32b6779c5403663cf' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouStyles/DetailViewRelatedList.tpl',
      1 => 1510670541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4439145505a2669b2d00025-95766231',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TEMPLATEID' => 0,
    'EDIT' => 0,
    'USER_MODEL' => 0,
    'RELATED_HEADERS' => 0,
    'WIDTHTYPE' => 0,
    'HEADER_LABEL' => 0,
    'MODULE' => 0,
    'RELATED_RECORDS' => 0,
    'RELATED_RECORD' => 0,
    'HEADER_FIELD' => 0,
    'IS_EDITABLE' => 0,
    'IS_DELETABLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a2669b2dd4e2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2669b2dd4e2')) {function content_5a2669b2dd4e2($_smarty_tpl) {?>
<div class="relatedContainer"><input type="hidden" name="currentPageNum" value="1" /><input type="hidden" name="relatedModuleName" id="relatedModuleName" value="ITS4YouStyles"><input type="hidden" id="templateid" value="<?php echo $_smarty_tpl->tpl_vars['TEMPLATEID']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['EDIT']->value=="permitted"){?><div class="relatedHeader "><div class="btn-toolbar row-fluid"><div class="span8"><div class="btn-group"><button type="button" class="btn addButton addRelation" data-modulename="ITS4YouStyles"><i class="icon-plus icon-white"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD');?>
&nbsp;<?php echo vtranslate('SINGLE_ITS4YouStyles','ITS4YouStyles');?>
</strong></button></div><div class="btn-group"><button type="button" class="btn addButton selectRelation" data-modulename="ITS4YouStyles">&nbsp;<strong><?php echo vtranslate('LBL_SELECT');?>
&nbsp;<?php echo vtranslate('SINGLE_ITS4YouStyles','ITS4YouStyles');?>
</strong></button></div></div></div></div><div class="contents-topscroll"><div class="topscroll-div">&nbsp;</div></div><?php }?><div class="relatedContents contents-bottomscroll"><div class="bottomscroll-div"><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php  $_smarty_tpl->tpl_vars['HEADER_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_LABEL']->key => $_smarty_tpl->tpl_vars['HEADER_LABEL']->value){
$_smarty_tpl->tpl_vars['HEADER_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->value = $_smarty_tpl->tpl_vars['HEADER_LABEL']->key;
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration++;
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->last = $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration === $_smarty_tpl->tpl_vars['HEADER_LABEL']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["docforeach"]['last'] = $_smarty_tpl->tpl_vars['HEADER_LABEL']->last;
?><th <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['docforeach']['last']){?> colspan="2" <?php }?> nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['HEADER_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php } ?></tr></thead><?php  $_smarty_tpl->tpl_vars['RELATED_RECORD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->key => $_smarty_tpl->tpl_vars['RELATED_RECORD']->value){
$_smarty_tpl->tpl_vars['RELATED_RECORD']->_loop = true;
?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value['id'];?>
" data-recordurl="index.php?module=ITS4YouStyles&amp;view=Detail&amp;record=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value['id'];?>
"><?php  $_smarty_tpl->tpl_vars['HEADER_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HEADER_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['HEADER_FIELD'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_LABEL']->key => $_smarty_tpl->tpl_vars['HEADER_LABEL']->value){
$_smarty_tpl->tpl_vars['HEADER_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['HEADER_FIELD']->value = $_smarty_tpl->tpl_vars['HEADER_LABEL']->key;
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration++;
 $_smarty_tpl->tpl_vars['HEADER_LABEL']->last = $_smarty_tpl->tpl_vars['HEADER_LABEL']->iteration === $_smarty_tpl->tpl_vars['HEADER_LABEL']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["docrecordsforeach"]['last'] = $_smarty_tpl->tpl_vars['HEADER_LABEL']->last;
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" nowrap><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD']->value];?>
<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['docrecordsforeach']['last']){?></td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="pull-right actions"><span class="actionImages"><a href="index.php?module=ITS4YouStyles&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value['id'];?>
"><i title="<?php echo vtranslate('LBL_SHOW_COMPLETE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-th-list alignMiddle"></i></a>&nbsp;<?php if ($_smarty_tpl->tpl_vars['IS_EDITABLE']->value){?><a href="index.php?module=ITS4YouStyles&view=Edit&record=<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value['id'];?>
" class="cursorPointer" data-related-recordid='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value['id'];?>
'><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></i></a><?php }?><?php if ($_smarty_tpl->tpl_vars['IS_DELETABLE']->value){?><a class="relationDelete"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="icon-trash alignMiddle"></i></a><?php }?></span></div><?php }?></td><?php } ?></tr><?php } ?></table></div></div></div><?php }} ?>