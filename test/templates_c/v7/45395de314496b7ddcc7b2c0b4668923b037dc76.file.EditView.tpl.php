<?php /* Smarty version Smarty-3.1.7, created on 2019-05-13 11:49:26
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/VGSMaskedInput/EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:974746485cd959c62185b1-02181041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45395de314496b7ddcc7b2c0b4668923b037dc76' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/VGSMaskedInput/EditView.tpl',
      1 => 1557319876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '974746485cd959c62185b1-02181041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_ID' => 0,
    'QUALIFIED_MODULE_NAME' => 0,
    'MODULES' => 0,
    'module_id' => 0,
    'RECORD_MODEL' => 0,
    'module_label' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd959c62778f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd959c62778f')) {function content_5cd959c62778f($_smarty_tpl) {?><div class="modal" style="display:block;width:50%;margin-left:25%;margin-top:5%;"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><h3><?php echo vtranslate('LBL_EDIT_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }else{ ?><h3><?php echo vtranslate('LBL_ADD_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
 </h3><?php }?></div><input type="hidden" id="action" name="action" value="SaveAjax"><div class="modal-body configContent"><?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" name="fieldid" id="fieldid"/><?php }?><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_SELECT_MODULENAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><select class='chzn-select moduleName' id='moduleName' name='moduleName' onchange='Settings_VGSMaskedInput_List_Js.loadFields();' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option value=''>Select module</option><?php  $_smarty_tpl->tpl_vars['module_label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_label']->_loop = false;
 $_smarty_tpl->tpl_vars['module_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_label']->key => $_smarty_tpl->tpl_vars['module_label']->value){
$_smarty_tpl->tpl_vars['module_label']->_loop = true;
 $_smarty_tpl->tpl_vars['module_id']->value = $_smarty_tpl->tpl_vars['module_label']->key;
?><option value='<?php echo $_smarty_tpl->tpl_vars['module_id']->value;?>
' <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('tabid')==$_smarty_tpl->tpl_vars['module_id']->value){?>selected='selected'<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['module_label']->value);?>
</option><?php } ?></select></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><select class='fieldName' id='fieldName' name='fieldName' data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"><option value=''>Select field</option><?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('fieldid')!=''){?><option value='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("fieldid");?>
' selected="selected"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("fieldlabel");?>
</option><?php }?></select></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><input type="text" placeholder="(999)-999-9999" name="maskinfo" class="span3" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('maskinfo');?>
" mandatory='true' /></div></div><div class="control-group"><span class="control-label"><strong><?php echo vtranslate('LBL_ENABLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</strong></span><div class="controls"><input type="checkbox" name="enabled" <?php if ($_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get("enabled")=='1'){?>checked='checked'<?php }?>/></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><script type="text/javascript">$(document).ready(function(){$(".btn-success").click(function(){var action = $("#action").val();var fieldid = $("#fieldid").val();var moduleName = $("#moduleName").val();var fieldName = $("#fieldName").val();var maskinfo = $("[name='maskinfo']").val();var enabled = $("[name='enabled']").val();var module="VGSMaskedInput";
		    $.ajax({
		    	type: "POST",
		    	url: "index.php",
		    	data: {"action": action,
		    	"fieldid": fieldid,
		    	"moduleName": moduleName,
		    	"fieldName": fieldName,
		    	"maskinfo": maskinfo,
		    	"enabled": enabled,
		    	"module": module,
		    	"parent": "Settings"}, 
		    	success: function(result)
		    		{
		       		if(result.success){
		       			bootbox.alert(result.result[0]);
		       			location.reload();
		       		}else{
		       			bootbox.alert(result.error.message)
		       		}
		    		}
		    	});
		    });});var verifica=true;if($("#moduleName").val()=='')verifica=false;if($("#fieldName").val()=='')verifica=false;if($("[name='maskinfo']").val()=='')verifica=false;if(verifica){$(".btn-success").show();}else{$(".btn-success").hide();}$("input").change(function(){var verifica=true;if($("#moduleName").val()=='')verifica=false;if($("#fieldName").val()=='')verifica=false;if($("[name='maskinfo']").val()=='')verifica=false;if(verifica){$(".btn-success").show();}else{$(".btn-success").hide();}});$("select").change(function(){var verifica=true;if($("#moduleName").val()=='')verifica=false;if($("#fieldName").val()=='')verifica=false;if($("[name='maskinfo']").val()=='')verifica=false;if(verifica){$(".btn-success").show();}else{$(".btn-success").hide();}});</script><?php }} ?>