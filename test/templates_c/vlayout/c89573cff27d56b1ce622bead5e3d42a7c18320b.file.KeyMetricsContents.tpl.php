<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:04:55
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75034981359ba9a9725dbf1-18938178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c89573cff27d56b1ce622bead5e3d42a7c18320b' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsContents.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75034981359ba9a9725dbf1-18938178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'CURRENT_USER_MODEL' => 0,
    'LISTVIEW_HEADERS' => 0,
    'WIDTHTYPE' => 0,
    'COLUMN_NAME' => 0,
    'LISTVIEW_HEADER_KEY' => 0,
    'NEXT_SORT_ORDER' => 0,
    'LISTVIEW_HEADER' => 0,
    'SORT_IMAGE' => 0,
    'USERS_OPTIONS' => 0,
    'PICKLIST_ARR' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'COLUMNNAME' => 0,
    'COLUMNVALUE' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9a972d6e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9a972d6e0')) {function content_59ba9a972d6e0($_smarty_tpl) {?>

<div id="keyMetricsViewContents"><br /><div class="listViewTopMenuDiv noprint"><div class="listViewActionsDiv row-fluid"><button class="btn addButton" data-trigger="addReportWidget" onclick="ITS4YouReports_KeyMetricsList_Js.triggerAddKeyWidget('index.php?module=ITS4YouReports&view=EditKeyMetrics');" ><?php echo vtranslate('LBL_ADD_WIDGET');?>
</button></div></div><br /><div id="selectAllMsgDiv" class="alert-block msgDiv"><strong><a id="selectAllMsg"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv"><strong><a id="deSelectAllMsg"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><div class="bottomscroll-div"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><p class="listViewLoadingMsg hide"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-bordered listViewEntriesTable"><thead><tr class="listViewHeaders"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><th nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?> colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['name'];?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></th><?php } ?></tr></thead><tr><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_NAME']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><td><div class="row-fluid"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['column']=="smcreatorid"){?><select class="chzn-select listSearchContributor span11" name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['column'];?>
" multiple style="width:150px;" data-fieldinfo=''><?php  $_smarty_tpl->tpl_vars['PICKLIST_ARR'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_ARR']->_loop = false;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['USERS_OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_ARR']->key => $_smarty_tpl->tpl_vars['PICKLIST_ARR']->value){
$_smarty_tpl->tpl_vars['PICKLIST_ARR']->_loop = true;
 $_smarty_tpl->tpl_vars['PICKLIST_KEY']->value = $_smarty_tpl->tpl_vars['PICKLIST_ARR']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_ARR']->value[0];?>
" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['search_val']==$_smarty_tpl->tpl_vars['PICKLIST_ARR']->value[0]){?>selected<?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_ARR']->value[1],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select><?php }else{ ?><input type="text" name="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['column'];?>
" class="span9 listSearchContributor" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['search_val'];?>
" data-fieldinfo=''/><?php }?></div></td><?php } ?><td style="text-align:right;padding-right:20px;" ><button class="btn" data-trigger="listSearch"><?php echo vtranslate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></td></tr><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
?><tr class="listViewEntries" data-id=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['id'];?>
 data-recordUrl='' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listview']['index']+1;?>
"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><?php $_smarty_tpl->tpl_vars['COLUMNNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value['column'], null, 0);?><?php $_smarty_tpl->tpl_vars['COLUMNVALUE'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value[$_smarty_tpl->tpl_vars['COLUMNNAME']->value], null, 0);?><td nowrap class="listViewEntryValue"  width="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['COLUMNNAME']->value=="name"){?><a href="index.php?module=ITS4YouReports&view=KeyMetricsRows&id=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['COLUMNVALUE']->value;?>
</a><?php }elseif($_smarty_tpl->tpl_vars['COLUMNNAME']->value=="smcreatorid"){?><?php echo getUserFullName($_smarty_tpl->tpl_vars['COLUMNVALUE']->value);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['COLUMNVALUE']->value;?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?></td><td nowrap width="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->id==$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['smcreatorid']){?><div class="pull-right actions"><span class="actionImages"><a style="text-shadow: none" href='javascript:void(0);' onclick="ITS4YouReports_KeyMetricsList_Js.triggerAddKeyWidget('index.php?module=ITS4YouReports&view=EditKeyMetrics&id=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['id'];?>
');" ><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('Edit');?>
"></i></a>&nbsp;<a style="text-shadow: none" href='javascript:void(0);' class="deleteRecordButton" onclick="ITS4YouReports_KeyMetricsList_Js.deleteRecord('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['id'];?>
');" ><i class="icon-trash alignMiddle" title="<?php echo vtranslate('Delete');?>
"></i></a>&nbsp;</span></div><?php }?></td><?php }?></td><?php } ?></tr><?php } ?></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?><table class="emptyRecordsDiv"><tbody><tr><td><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate("LBL_KEY_METRICS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND');?>
. <a href="javascript:void(0);" onclick="ITS4YouReports_KeyMetricsList_Js.triggerAddKeyWidget('index.php?module=ITS4YouReports&view=EditKeyMetrics&id=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value['id'];?>
');" id="add_widget_href"><?php echo vtranslate("LBL_ADD_WIDGET");?>
</a></td></tr></tbody></table><?php }?>
    <div align="center" class="small" style="color: rgb(153, 153, 153);"><?php echo vtranslate("ITS4YouReports","ITS4YouReports");?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 <?php echo vtranslate("COPYRIGHT","ITS4YouReports");?>
</div>
</div>
<?php }} ?>