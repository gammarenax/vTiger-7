<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 17:29:05
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/List.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21336249675cd311e1546482-07293791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acd7ff40ef163e6e5c5c9e90550293eaf73b906b' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouLanguageEditor/List.tpl',
      1 => 1557319872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21336249675cd311e1546482-07293791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_LINKS' => 0,
    'MODULE' => 0,
    'LISTVIEW_SETTING' => 0,
    'PICKLIST_MODULES' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'PICKLIST_MODULE' => 0,
    'NO_PICKLIST_FIELDS' => 0,
    'VERSION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd311e1595fc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd311e1595fc')) {function content_5cd311e1595fc($_smarty_tpl) {?>
<div class="container-fluid"><div class="row"><div class="col-xs-12 col-sm-12 col-lg-6"><h4><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4></div><div class="col-xs-12 col-sm-12 col-lg-6"><?php if (count($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING'])>0){?><div class="btn-group pull-right" role="group"><button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-wrench" alt="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"title="<?php echo vtranslate('LBL_SETTINGS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu"><?php  $_smarty_tpl->tpl_vars['LISTVIEW_SETTING'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWSETTING']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->key => $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->_loop = true;
?><li><a href=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value->getUrl();?>
><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_SETTING']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><?php } ?></ul></div><?php }?></div></div><hr><div class="contents tabbable"><div class="row"><div class="col-sm-12 col-xs-12"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="active"><a href="#allLanguages" data-toggle="tab"><strong><?php echo vtranslate('LBL_AVAILABLE_LANGUAGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li><a href="#picklistTranslation" data-toggle="tab"><strong><?php echo vtranslate('LBL_PICKLIST_TRANSLATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"><div class="tab-pane active" id="allLanguages"><div class="row-fluid"><div class="col-sm-12 col-xs-12"><button class="btn addButton" name="createLangButton" id="createLangButton"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;<strong><?php echo vtranslate('LBL_CREATE_NEW_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div><br><br><br><div class="row-fluid" id="allLanguagesTableContent"></div></div><div class="tab-pane" id="picklistTranslation"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal"><div class="detailViewInfo"><div class="row form-group"><div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel"><label class="fieldLabel"><strong><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </strong></label></div><div class="fieldValue col-sm-3 col-xs-3"><select class="select2 inputElement" id="pickListModules"name="pickListModules"><optgroup label="<?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['PICKLIST_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->key => $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value){
$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value==$_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name')){?> selected="" <?php }?>value="<?php echo $_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['PICKLIST_MODULE']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php } ?></optgroup></select></div></div></div><div id="modulePickListContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModulePicklistDetail.tpl","Settings:ITS4YouLanguageEditor"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><div id="modulePickListValuesContainer"><?php if (empty($_smarty_tpl->tpl_vars['NO_PICKLIST_FIELDS']->value)){?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("PickListValueDetail.tpl","Settings:ITS4YouLanguageEditor"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></div></div></div></div></div></div></div><br><div align="center" class="small" style="color: rgb(153, 153, 153);"><?php echo vtranslate("LBL_MODULE_NAME",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
 :: <a href="http://www.its4you.sk/en" target="_new"><?php echo vtranslate("COPYRIGHT",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></div><br><?php }} ?>