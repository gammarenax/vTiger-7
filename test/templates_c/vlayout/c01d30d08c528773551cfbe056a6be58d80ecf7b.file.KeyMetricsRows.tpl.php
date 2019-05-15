<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:06:00
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsRows.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107555850259ba9ad8b94803-18782596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c01d30d08c528773551cfbe056a6be58d80ecf7b' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsRows.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107555850259ba9ad8b94803-18782596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'KM_NAME' => 0,
    'KM_ID' => 0,
    'KM_SMCREATOR' => 0,
    'currentuser_id' => 0,
    'sortableTable' => 0,
    'MODULE' => 0,
    'KEY_METRICS_ENTRIES' => 0,
    'KEY_METRICS_ARRAY' => 0,
    'KEY_METRICS_ID' => 0,
    'KEY_METRICS_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ad8bd23c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ad8bd23c')) {function content_59ba9ad8bd23c($_smarty_tpl) {?>
<script type="text/javascript">
jQuery().ready(function() {
    var ITS4YouReports_KM_Js = new ITS4YouReports_KeyMetricsList_Js();
    ITS4YouReports_KM_Js.registerPickListValuesSortableEvent();
    ITS4YouReports_KM_Js.registerEditKeyMetricsRowStep1();
});
</script>

<div class="container-fluid editViewContainer"><div class="contentHeader row-fluid"><h3 class="span8 textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['KM_NAME']->value;?>
</h3></div></div><input type="hidden" name="km_id" id="km_id" value="<?php echo $_smarty_tpl->tpl_vars['KM_ID']->value;?>
"><div class="tab-content themeTableColor overflowVisible"><div class="tab-pane active" id="allValuesLayout"><div class="row-fluid"><div class="span5 marginLeftZero textOverflowEllipsis"><?php if ($_smarty_tpl->tpl_vars['KM_SMCREATOR']->value==$_smarty_tpl->tpl_vars['currentuser_id']->value){?><?php $_smarty_tpl->tpl_vars['sortableTable'] = new Smarty_variable("pickListValuesTable", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['sortableTable'] = new Smarty_variable("pickListValuesTableDisabled", null, 0);?><?php }?><table id="<?php echo $_smarty_tpl->tpl_vars['sortableTable']->value;?>
" class="table table-bordered" style="table-layout: fixed"><thead><tr class="listViewHeaders"><th><?php echo vtranslate('LBL_VIEW_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th><?php echo vtranslate('LBL_WIDGET_SMCREATORID',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody class="ui-sortable"><input type="hidden" id="dragImagePath" value="<?php echo vimage_path('drag.png');?>
" /><?php if (!empty($_smarty_tpl->tpl_vars['KEY_METRICS_ENTRIES']->value)){?><?php  $_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['KEY_METRICS_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->key => $_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->value){
$_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['KEY_METRICS_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->value['label'], null, 0);?><?php $_smarty_tpl->tpl_vars['KEY_METRICS_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->value['id'], null, 0);?><tr class="pickListValue" data-key-id="<?php echo $_smarty_tpl->tpl_vars['KEY_METRICS_ID']->value;?>
" data-key="<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['KEY_METRICS_LABEL']->value);?>
"><td class="textOverflowEllipsis"><div style="float:left;"><img class="alignMiddle" src="<?php echo vimage_path('drag.png');?>
"/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['KEY_METRICS_LABEL']->value;?>
</div></td><td class="textOverflowEllipsis"><div style="float:left;"><?php echo getUserFullName($_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->value['smcreatorid']);?>
</div><?php if ($_smarty_tpl->tpl_vars['KEY_METRICS_ARRAY']->value['smcreatorid']==$_smarty_tpl->tpl_vars['currentuser_id']->value){?><div class="actions pull-right"><i class="icon-pencil alignMiddle" title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i>&nbsp;<i class="icon-trash alignMiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" ></i></div><?php }?></td></tr><?php } ?><?php }else{ ?><tr class="pickListValue" data-key-id="" data-key=""><td class="textOverflowEllipsis"><img class="alignMiddle" src="<?php echo vimage_path('drag.png');?>
"/>&nbsp;&nbsp;<?php echo vtranslate("LBL_NO_KEY_METRICS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td></tr><?php }?></tbody></table></div><div class="span2 row-fluid" style="padding-top:3px;"><?php if ($_smarty_tpl->tpl_vars['KM_SMCREATOR']->value==$_smarty_tpl->tpl_vars['currentuser_id']->value){?><button class="btn span10 marginLeftZero" id="addNewKeyMetricsRow" onclick="window.location.href='index.php?module=ITS4YouReports&view=EditKeyMetricsRow&km_id=<?php echo $_smarty_tpl->tpl_vars['KM_ID']->value;?>
&id=&reportid='"><?php echo vtranslate('LBL_ADD_NEW_KEY_METRICS_ROW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button><?php }?></div></div></div></div><?php }} ?>