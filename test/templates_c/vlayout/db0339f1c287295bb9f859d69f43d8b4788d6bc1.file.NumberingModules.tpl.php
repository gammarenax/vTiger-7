<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 11:49:39
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MultiCompany4you/NumberingModules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6587087075a5de6d304baa8-05654598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db0339f1c287295bb9f859d69f43d8b4788d6bc1' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/MultiCompany4you/NumberingModules.tpl',
      1 => 1510670549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6587087075a5de6d304baa8-05654598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'DESCRIPTION' => 0,
    'ERROR_MESSAGE' => 0,
    'SUPPORTED_MODULES' => 0,
    'module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5de6d315904',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5de6d315904')) {function content_5a5de6d315904($_smarty_tpl) {?>
<form name="allowed_modules_form" action="index.php" method="post"><input type="hidden" name="module" value="MultiCompany4you"><input type="hidden" name="action" value="SaveAllowedModules"><input type="hidden" name="block" value="<?php echo $_REQUEST['block'];?>
"><input type="hidden" name="fieldid" value="<?php echo $_REQUEST['fieldid'];?>
"><input type="hidden" name="companyid" value="<?php echo $_REQUEST['companyid'];?>
"><div class="padding-left1per"><div class="row-fluid widget_header"><h3><a href="index.php?parent=Settings&module=MultiCompany4you&view=CompanyList&block=<?php echo $_REQUEST['block'];?>
&fieldid=<?php echo $_REQUEST['fieldid'];?>
"><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['DESCRIPTION']->value){?><span style="font-size:12px;color: black;"> - &nbsp;<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['DESCRIPTION']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo vtranslate($_tmp1,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }?></h3></div><hr><div class="contents tabbable ui-sortable"><ul class="nav nav-tabs layoutTabs massEditTabs"><li class="relatedListTab"><a href="index.php?parent=Settings&module=MultiCompany4you&view=Detail&companyid=<?php echo $_REQUEST['companyid'];?>
&block=<?php echo $_REQUEST['block'];?>
&fieldid=<?php echo $_REQUEST['fieldid'];?>
"><strong><?php echo vtranslate('LBL_COMPANY_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li><li class="active"><a href=""><strong><?php echo vtranslate('LBL_NUMBERING',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li></ul><div class="tab-content layoutContent padding20 themeTableColor overflowVisible"></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div  id="CompanyDetailsContainer" class="<?php if (!empty($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value)){?>hide<?php }?>"><div class="row-fluid"><table class="table table-bordered"><thead><tr class="blockHeader"><th colspan="2"><strong><?php echo vtranslate('LBL_AVAILABLE_MODULES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th></tr></thead><tbody><?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUPPORTED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?><tr><td><input type="checkbox" name="allowed_<?php echo $_smarty_tpl->tpl_vars['module']->value['tabid'];?>
" id="allowed_<?php echo $_smarty_tpl->tpl_vars['module']->value['tabid'];?>
" <?php if ($_smarty_tpl->tpl_vars['module']->value['tab_id']){?>checked<?php }?>><td><?php echo getTranslatedString($_smarty_tpl->tpl_vars['module']->value['name'],$_smarty_tpl->tpl_vars['module']->value['name']);?>
</td></tr><?php } ?></tbody></table></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalFooter.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>