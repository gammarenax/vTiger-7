<?php /* Smarty version Smarty-3.1.7, created on 2018-01-10 11:23:06
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/LayoutEditor/RelatedList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6509512955a55f79ad3c0c9-87464975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4758bd2b58d10ffed3870c9d573cc4310fe3a48b' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/LayoutEditor/RelatedList.tpl',
      1 => 1510671600,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6509512955a55f79ad3c0c9-87464975',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RELATED_MODULES' => 0,
    'QUALIFIED_MODULE' => 0,
    'MODULE_MODEL' => 0,
    'removedModuleIds' => 0,
    'ModulesList' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a55f79ad8ec2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a55f79ad8ec2')) {function content_5a55f79ad8ec2($_smarty_tpl) {?>
<div class="relatedTabModulesList"><?php if (empty($_smarty_tpl->tpl_vars['RELATED_MODULES']->value)){?><div class="emptyRelatedTabs"><div class="recordDetails"><p class="textAlignCenter"><?php echo vtranslate('LBL_NO_RELATED_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></div></div><?php }else{ ?><div class="relatedListContainer"><div class="row-fluid"><div class="span2"><strong><?php echo vtranslate('LBL_ARRANGE_RELATED_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="span10 row-fluid"><span class="span5"><ul class="relatedModulesList" style="list-style: none;"><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()){?><li class="relatedModule module_<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
 border1px contentsBackground" style="width: 200px; padding: 5px;" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
"><a><img src="<?php echo vimage_path('drag.png');?>
" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="moduleLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationModuleName());?>
</span><button class="close" data-dismiss="modal" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button></li><?php }?><?php } ?></ul></span><span class="span7" style="padding: 5% 0;"><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_RELATED_LIST_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<br><br><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_REMOVE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<br><br><i class="icon-info-sign alignMiddle"></i>&nbsp;<?php echo vtranslate('LBL_ADD_MODULE_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><br><div class="row-fluid"><div class="span2"><strong><?php echo vtranslate('LBL_SELECT_MODULE_TO_ADD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="span4"><?php $_smarty_tpl->tpl_vars['ModulesList'] = new Smarty_variable(array(), null, 0);?><?php $_smarty_tpl->tpl_vars['removedModuleIds'] = new Smarty_variable(array(), null, 0);?><ul style="list-style: none; width:213px;" class="displayInlineBlock"><li><div class="row-fluid"><select class="select2" multiple name="addToList" placeholder="<?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><?php  $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_MODEL']->_loop = true;
?><?php $_smarty_tpl->createLocalArrayVariable('ModulesList', null, 0);
$_smarty_tpl->tpl_vars['ModulesList']->value[$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId()] = vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationModuleName());?><?php if (!$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isActive()){?><?php echo array_push($_smarty_tpl->tpl_vars['removedModuleIds']->value,$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId());?>
<option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getRelationModuleName());?>
</option><?php }?><?php } ?></select></div></li></ul><input type="hidden" class="ModulesListArray" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['ModulesList']->value);?>
' /><input type="hidden" class="RemovedModulesListArray" value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['removedModuleIds']->value);?>
' /></div><div class="span6"><button class="btn btn-success saveRelatedList" type="button" disabled="disabled"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><br></div></div><li class="moduleCopy hide border1px contentsBackground" style="width: 200px; padding: 5px;"><a><img src="<?php echo vimage_path('drag.png');?>
" title="<?php echo vtranslate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="moduleLabel"></span><button class="close" data-dismiss="modal" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button></li></div><?php }?></div><?php }} ?>