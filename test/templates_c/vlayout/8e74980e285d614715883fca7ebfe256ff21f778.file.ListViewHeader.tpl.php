<?php /* Smarty version Smarty-3.1.7, created on 2018-01-12 08:34:26
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16892129525a587312d81ae0-58159570%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e74980e285d614715883fca7ebfe256ff21f778' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/ListViewHeader.tpl',
      1 => 1510671595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16892129525a587312d81ae0-58159570',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_INSTALATION' => 0,
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
    'VERSION_TYPE' => 0,
    'ALL_MODULES' => 0,
    'SOURCE_MODULE' => 0,
    'S_MODULE_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a587312db13e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a587312db13e')) {function content_5a587312db13e($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['IS_INSTALATION']->value=="yes"){?><div class="paddingTop20"><br><?php }else{ ?><div class="listViewPageDiv marginLeftZero"><div class="row-fluid"><div class="span8"><h3><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3></div></div><hr><div class="row-fluid"><span class="span4 btn-toolbar"><?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="deactivate"||$_smarty_tpl->tpl_vars['VERSION_TYPE']->value==''){?><span class="btn-group"><a href='index.php?module=ITS4YouDynamicFields&parent=Settings&view=License'><span class="btn btn-danger"><?php echo vtranslate("LBL_ACTIVATE_BTN",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></span><?php }?></span><span class="span4 btn-toolbar"><select class="chzn-select" id="moduleFilter" ><option value=""><?php echo vtranslate('LBL_PLEASE_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><option value="all"><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['S_MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->key;
?><option <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value==$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName()){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName());?>
</option><?php } ?></select></span><span class="span4 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div><div class="clearfix"></div></div><div class="listViewContentDiv" id="listViewContents"><?php }?>
<?php }} ?>