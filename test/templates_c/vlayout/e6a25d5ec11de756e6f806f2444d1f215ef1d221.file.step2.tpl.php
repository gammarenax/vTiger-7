<?php /* Smarty version Smarty-3.1.7, created on 2017-10-13 08:10:19
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/VDSimplyKPI/step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1044036459e074ebd349d4-37569648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6a25d5ec11de756e6f806f2444d1f215ef1d221' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/VDSimplyKPI/step2.tpl',
      1 => 1507881194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1044036459e074ebd349d4-37569648',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FIELDS' => 0,
    'NAME' => 0,
    'VALUE' => 0,
    'assigned_user_id' => 0,
    'RECORD_ID' => 0,
    'DATE_FILTERS' => 0,
    'DATAFIELS' => 0,
    'setype' => 0,
    'MODULE_RECORD_STRUCTURE' => 0,
    'BLOCK_LABEL' => 0,
    'LINEITEM_FIELD_IN_CALCULATION' => 0,
    'key' => 0,
    'BLOCK_FIELDS' => 0,
    'IS_FILTER_SAVED_NEW' => 0,
    'RECORD_STRUCTURE' => 0,
    'SELECTED_ADVANCED_FILTER_FIELDS' => 0,
    'MODE' => 0,
    'CALCULATION_FIELDS' => 0,
    'CALCULATION_FIELDS_MODULE_LABEL' => 0,
    'CALCULATION_FIELDS_MODULE' => 0,
    'CALCULATION_FIELD_KEY' => 0,
    'CALCULATION_FIELD_TRANSLATED_LABEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e074ebdc4e3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e074ebdc4e3')) {function content_59e074ebdc4e3($_smarty_tpl) {?>

<form id="VDSimplyKPI_step2" name="install" method="POST" action="index.php" class="form-horizontal">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/>
<input type="hidden" name="action" value="Save"/>
<?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value){
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['NAME']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?>
    <?php if ($_smarty_tpl->tpl_vars['NAME']->value=='advanced_filter'||$_smarty_tpl->tpl_vars['NAME']->value=='datafields'||$_smarty_tpl->tpl_vars['NAME']->value=='result'||$_smarty_tpl->tpl_vars['NAME']->value=='procent'||$_smarty_tpl->tpl_vars['NAME']->value=='assigned_user_id'){?> <?php continue 1?><?php }?>
    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value;?>
"/>
<?php } ?>
<input type="hidden" name="assigned_user_id" value="<?php echo $_smarty_tpl->tpl_vars['assigned_user_id']->value;?>
"/>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/>
<input type="hidden" name="date_filters" data-value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATE_FILTERS']->value));?>
' />
<input type="hidden" name="advanced_filter" id="advanced_filter" value="" />
<input type="hidden" name='datafields' value=<?php echo $_smarty_tpl->tpl_vars['DATAFIELS']->value;?>
>
  
<div  class="padding1per" style="border:1px solid #ccc;" >  
    <?php $_smarty_tpl->tpl_vars['RECORD_STRUCTURE'] = new Smarty_variable(array(), null, 0);?>
		<?php $_smarty_tpl->tpl_vars['MODULE_LABEL'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['setype']->value,$_smarty_tpl->tpl_vars['setype']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?>
			<?php $_smarty_tpl->tpl_vars['MODULE_BLOCK_LABEL'] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['setype']->value), null, 0);?>
			<?php $_smarty_tpl->tpl_vars['key'] = new Smarty_variable(($_smarty_tpl->tpl_vars['MODULE_LABEL']->value)." ".($_smarty_tpl->tpl_vars['MODULE_BLOCK_LABEL']->value), null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['LINEITEM_FIELD_IN_CALCULATION']->value==false&&$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value=='LBL_ITEM_DETAILS'){?>
				
			<?php }else{ ?>
				<?php $_smarty_tpl->createLocalArrayVariable('RECORD_STRUCTURE', null, 0);
$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value[$_smarty_tpl->tpl_vars['key']->value] = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value;?>
			<?php }?>
		<?php } ?>
                
                <div class="row-fluid" style="border:1px solid #ccc;">
				<div id="advanceFilterContainer" <?php if ($_smarty_tpl->tpl_vars['IS_FILTER_SAVED_NEW']->value==false){?> class="zeroOpacity conditionsContainer padding1per" <?php }else{ ?> class="conditionsContainer padding1per" <?php }?>>
					<h5 class="padding-bottom1per"><strong><?php echo vtranslate('LBL_CHOOSE_FILTER_CONDITIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></h5>
                                       
					<span class="span10" >
                                            
						<?php echo $_smarty_tpl->getSubTemplate ('modules/VDSimplyKPI/AdvanceFilter.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'ADVANCE_CRITERIA'=>$_smarty_tpl->tpl_vars['SELECTED_ADVANCED_FILTER_FIELDS']->value), 0);?>

					</span>
					
				</div>
			</div><br>
                        <div class="row-fluid" style="border:1px solid #ccc;">
                            
                       
                        <div class="conditionsContainer padding1per">
                        <h5 class="padding-bottom1per"><strong><?php echo vtranslate('LBL_SELECT_DATA_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong><span class="redColor">*</span><h5>
                                <div class="span6" >
											<div class="row-fluid">
                                                                                            <select id='datafields' name='datafields' class="span10 validate[required]" data-validation-engine="validate[required]" style='min-width:300px;' <?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'){?>disabled<?php }?> >
	<option value='count(*)'><?php echo vtranslate('LBL_RECORD_COUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
	<?php  $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->_loop = false;
 $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->key => $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->value){
$_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE_LABEL']->value = $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->key;
?>
		<optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE_LABEL']->value,$_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE_LABEL']->value);?>
">
		<?php  $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CALCULATION_FIELDS_MODULE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->key => $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->value){
$_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEY']->value = $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->key;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CALCULATION_FIELD_KEY']->value==$_smarty_tpl->tpl_vars['DATAFIELS']->value){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['CALCULATION_FIELD_TRANSLATED_LABEL']->value;?>
</option>
		<?php } ?>
		</optgroup>
	<?php } ?>
</select>
												</div><br />
                                    </div>
                                                                                         </div>
                                                                                            </div>
<br >
			<div class="pull-right">
				<button class="btn btn-danger backStep" type="button"><strong><?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>&nbsp;&nbsp;
                               
				<button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                               
				<a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
			</div>
			<br><br>

 
</div>
</form> 
            
 				<?php }} ?>