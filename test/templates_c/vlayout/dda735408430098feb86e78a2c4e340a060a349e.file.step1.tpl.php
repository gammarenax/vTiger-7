<?php /* Smarty version Smarty-3.1.7, created on 2017-10-13 08:05:09
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/VDSimplyKPI/step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32068138559e073b5b413e0-14052182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dda735408430098feb86e78a2c4e340a060a349e' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/VDSimplyKPI/step1.tpl',
      1 => 1507881194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32068138559e073b5b413e0-14052182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RECORD_ID' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'RECORD_STRUCTURE_MODEL' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'isReferenceField' => 0,
    'REFERENCE_LIST' => 0,
    'REFERENCE_LIST_COUNT' => 0,
    'DISPLAYID' => 0,
    'REFERENCED_MODULE_STRUCT' => 0,
    'value' => 0,
    'REFERENCED_MODULE_NAME' => 0,
    'COUNTER' => 0,
    'MODE' => 0,
    'MODULELIST' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e073b5c70be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e073b5c70be')) {function content_59e073b5c70be($_smarty_tpl) {?>
<div class="contentsDiv marginLeftZero" >
            
<div class="padding1per">

<div class="editContainer" style="padding-left: 3%;padding-right: 3%">
<?php $_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME'] = new Smarty_variable(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value!=''){?>
                    <h3 title="<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
"><?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 - <?php echo $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getRecordName();?>
</h3>
                <?php }else{ ?>
                    <h3><?php echo vtranslate('LBL_CREATING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
                <?php }?>    
<hr>
<div id="breadcrumbStep1">             
    <ul class="crumbs marginLeftZero">
        <li class="first step1 active" style="z-index:10;" id="step1">
            <a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_GENERAL_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a>
        </li>
        <li class="step2 last" style="z-index:7;" id="step2">
            <a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_KPI_FILTRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></a>
        </li>
    </ul>
</div>
<div class="clearfix">
</div>
        <div class="VDSimplyKPIContents">
<form id="VDSimplyKPI_step1" name="install" method="POST" action="index.php" class="form-horizontal">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/>
<input type="hidden" name="view" value="Edit"/>
<input type="hidden" name="step" value="1"/>
<input type="hidden" name="mode" value="step2"/>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/>
  
<div  class="padding1per" style="border:1px solid #ccc;" >     
     <?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?>
          <?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?>
              <?php $_smarty_tpl->tpl_vars["isReferenceField"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?>
               <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='advanced_filter'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='result'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='netto'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='datafields'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='procent'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='typevdkpi'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='date_off'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='number_kpi'||$_smarty_tpl->tpl_vars['FIELD_NAME']->value=='createnewperiod'){?><?php continue 1?><?php }?>
              <div class="control-group">
                  <?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value!="reference"){?><label class="control-label"><?php }?>
                            
                            <?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value=="reference"){?>
                                <?php $_smarty_tpl->tpl_vars["REFERENCE_LIST"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getReferenceList(), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["REFERENCE_LIST_COUNT"] = new Smarty_variable(count($_smarty_tpl->tpl_vars['REFERENCE_LIST']->value), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['REFERENCE_LIST_COUNT']->value>1){?>
                                    <?php $_smarty_tpl->tpl_vars["DISPLAYID"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_STRUCT"] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getReferenceModule($_smarty_tpl->tpl_vars['DISPLAYID']->value), null, 0);?>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value)){?>
                                        <?php $_smarty_tpl->tpl_vars["REFERENCED_MODULE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['REFERENCED_MODULE_STRUCT']->value->get('name'), null, 0);?>
                                    <?php }?>
                                   
                                    <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?>
                                    <select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
_dropDown" class="chzn-select referenceModulesList streched" style="width:160px;">
                                        <optgroup>
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['REFERENCE_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['REFERENCED_MODULE_NAME']->value){?> selected <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                            <?php } ?>
                                        </optgroup>
                                    </select>
                               
                            <?php }else{ ?>
                                <label class="control-label"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></label>
                            <?php }?>
                        <?php }elseif($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=="83"){?>
                            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('COUNTER'=>$_smarty_tpl->tpl_vars['COUNTER']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE']->value), 0);?>

                       <?php }else{ ?>
                            <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>

                        <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['isReferenceField']->value!="reference"){?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></label><?php }?>
                    
            <div class="controls row-fluid">
                <div class="span8 row-fluid">
                             <?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='setype'){?>
                                 
                              <select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" class="chzn-select " <?php if ($_smarty_tpl->tpl_vars['MODE']->value=='edit'){?>disabled<?php }?> name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')){?>
                                                 <option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" selected><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
</option>
                                            <?php }else{ ?>
                                            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULELIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['index']->value,$_smarty_tpl->tpl_vars['index']->value);?>
</option>
                                            <?php } ?>
                                            <?php }?>
                                    </select>   
                            
                        
                            <?php }elseif($_smarty_tpl->tpl_vars['FIELD_NAME']->value=='assigned_user_id'&&$_smarty_tpl->tpl_vars['MODE']->value!='edit'){?>
                               <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('uitypes/MultiOwner.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0);?>
 
                            
                       <?php }else{ ?>
                           
                            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0);?>

                       <?php }?>
           </div>
            </div>
     </div>
          <?php } ?>
     <?php } ?>
     <div class="controls">
        <div>
            
            <div class="pull-right">
                <button type="submit" class="btn btn-success nextStep"><strong><?php echo vtranslate('Next',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                &nbsp;&nbsp;<a onclick="window.history.back()" class="cancelLink cursorPointer"><?php echo vtranslate('Cancel',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
            </div>
            
        </div>

        <div class="clearfix">
        </div>
    </div>
</div>    

 
	
</form> 
            </div>
</div> 
</div>
</div>
 				<?php }} ?>