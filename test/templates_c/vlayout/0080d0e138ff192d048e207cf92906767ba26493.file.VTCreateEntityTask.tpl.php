<?php /* Smarty version Smarty-3.1.7, created on 2018-01-30 14:00:25
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17995800255a707a791b5ed5-94929336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0080d0e138ff192d048e207cf92906767ba26493' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/Workflows/Tasks/VTCreateEntityTask.tpl',
      1 => 1510672350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17995800255a707a791b5ed5-94929336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'WORKFLOW_MODEL' => 0,
    'RELATED_MODULES_INFO' => 0,
    'TASK_OBJECT' => 0,
    'RELATED_MODULES' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a707a7925b48',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a707a7925b48')) {function content_5a707a7925b48($_smarty_tpl) {?>
<div class="row-fluid"><div class="span3" style="position:relative;top:4px;"><strong><?php echo vtranslate('LBL_MODULES_TO_CREATE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></strong></div><div class="span6"><?php $_smarty_tpl->tpl_vars['RELATED_MODULES_INFO'] = new Smarty_variable($_smarty_tpl->tpl_vars['WORKFLOW_MODEL']->value->getDependentModules(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_MODULES'] = new Smarty_variable(array_keys($_smarty_tpl->tpl_vars['RELATED_MODULES_INFO']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type, null, 0);?><select class="chzn-select" id="createEntityModule" name="entity_type" data-validation-engine='validate[required]'><option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE']->key => $_smarty_tpl->tpl_vars['MODULE']->value){
$_smarty_tpl->tpl_vars['MODULE']->_loop = true;
?><option <?php if ($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type==$_smarty_tpl->tpl_vars['MODULE']->value){?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></div></div><br><div id="addCreateEntityContainer"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("CreateEntity.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>