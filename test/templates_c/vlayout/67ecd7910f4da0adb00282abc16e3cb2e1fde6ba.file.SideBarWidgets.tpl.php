<?php /* Smarty version Smarty-3.1.7, created on 2017-12-05 08:56:41
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBarWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9676424495a265f4976a7e5-16367342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67ecd7910f4da0adb00282abc16e3cb2e1fde6ba' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/SideBarWidgets.tpl',
      1 => 1510670562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9676424495a265f4976a7e5-16367342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUICK_LINKS' => 0,
    'MODULE' => 0,
    'SIDEBARWIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a265f497b316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a265f497b316')) {function content_5a265f497b316($_smarty_tpl) {?>
<div class="quickWidgetContainer accordion"><?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['SIDEBARWIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->key => $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value){
$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->key;
?><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader" data-target="#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel());?>
"data-toggle="collapse" data-parent="#quickWidgets" data-label="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel();?>
"data-widget-url="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getUrl();?>
" ><span class="pull-left"><img class="imageElement" data-rightimage="<?php echo vimage_path('rightArrowWhite.png');?>
" data-downimage="<?php echo vimage_path('downArrowWhite.png');?>
" src="<?php echo vimage_path('rightArrowWhite.png');?>
" /></span><h5 class="title widgetTextOverflowEllipsis pull-right" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><div class="loadingImg hide pull-right"><div class="loadingWidgetMsg"><strong><?php echo vtranslate('LBL_LOADING_WIDGET',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div></div><div class="clearfix"></div></div><div class="widgetContainer accordion-body collapse" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel());?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getUrl();?>
"></div></div><?php } ?><?php if ($_REQUEST['view']=='List'||$_REQUEST['view']=='Detail'){?><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader" data-target="#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_Tools"data-toggle="collapse" data-parent="#quickWidgets" data-label="<?php echo vtranslate('Tools',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"data-widget-url="module=PDFMaker&view=TemplateTools&templateid=<?php echo $_REQUEST['templateid'];?>
&from_view=<?php echo $_REQUEST['view'];?>
&from_templateid=<?php echo $_REQUEST['templateid'];?>
" ><span class="pull-left"><img class="imageElement" data-rightimage="<?php echo vimage_path('rightArrowWhite.png');?>
" data-downimage="<?php echo vimage_path('downArrowWhite.png');?>
" src="<?php echo vimage_path('rightArrowWhite.png');?>
" /></span><h5 class="title widgetTextOverflowEllipsis pull-right" title="<?php echo vtranslate('Tools',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('Tools',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><div class="loadingImg hide pull-right"><div class="loadingWidgetMsg"><strong><?php echo vtranslate('LBL_LOADING_WIDGET',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div></div><div class="clearfix"></div></div><div class="widgetContainer accordion-body collapse" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_Tools" data-url="module=PDFMaker&view=TemplateTools&templateid=<?php echo $_REQUEST['templateid'];?>
&from_view=<?php echo $_REQUEST['view'];?>
&from_templateid=<?php echo $_REQUEST['templateid'];?>
"></div></div><?php }?></div><?php }} ?>