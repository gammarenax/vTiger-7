<?php /* Smarty version Smarty-3.1.7, created on 2018-01-16 14:29:14
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/EditRelatedBlock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18865072515a5e0c3ab48e68-30266733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ede72783f7c8a259ed65b208e91565060ab4b326' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/EditRelatedBlock.tpl',
      1 => 1510670555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18865072515a5e0c3ab48e68-30266733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REL_MODULE' => 0,
    'RECORD' => 0,
    'SEC_MODULE' => 0,
    'STEP' => 0,
    'REP' => 0,
    'SECCOLUMNS' => 0,
    'MODE' => 0,
    'RELATED_MODULES' => 0,
    'relmod' => 0,
    'SELECTEDCOLUMNS' => 0,
    'SELECTED_SORT_FIELDS' => 0,
    'ROW_VAL' => 0,
    'SELECTED_SORT_FEILDS_ARRAY' => 0,
    'SELECTED_SORT_FIELDS_COUNT' => 0,
    'BLOCKNAME' => 0,
    'RELATEDBLOCK' => 0,
    'BACK_WALK' => 0,
    'BACK' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a5e0c3ac6657',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5e0c3ac6657')) {function content_5a5e0c3ac6657($_smarty_tpl) {?>
<div id="page paddingTop20">                     
<form id="NewBlock" name="NewBlock" method="POST" ENCTYPE="multipart/form-data" action="index.php" class="form-horizontal">
<input type="hidden" name="module" value="PDFMaker">
<input type="hidden" name="pdfmodule" value="<?php echo $_smarty_tpl->tpl_vars['REL_MODULE']->value;?>
">
<input type="hidden" name="primarymodule" value="<?php echo $_smarty_tpl->tpl_vars['REL_MODULE']->value;?>
">
<input type="hidden" id="saved_secmodule" name="saved_secmodule" value="<?php if ($_smarty_tpl->tpl_vars['RECORD']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['SEC_MODULE']->value;?>
<?php }?>">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
">
<input type="hidden" name="action" value="SaveRelatedBlock">
<input type="hidden" name="step" id="step" value="<?php echo $_smarty_tpl->tpl_vars['STEP']->value;?>
">
<input type="hidden" name="advanced_filter" id="advanced_filter" value="" />
<input type="hidden" name="selected_sort_fields" id="selected_sort_fields" value="" />

<div id="filter_columns" style="display:none"><option value=""><?php echo $_smarty_tpl->tpl_vars['REP']->value['LBL_NONE'];?>
</option><?php echo $_smarty_tpl->tpl_vars['SECCOLUMNS']->value;?>
</div>    
<div class="bodyContents">        
        <div class="contentsDiv marginLeftZero">            
            <div class="padding1per">                
                <div style="position: relative; " class="row-fluid">
                    <label class="themeTextColor font-x-x-large"><?php echo vtranslate('LBL_EDIT_RELATED_BLOCK','PDFMaker');?>
</label><hr>
                        <ul class="crumbs marginLeftZero">
                            <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>
                                <li class="first step active" style="z-index:3; float: left;"  id="steplabel3"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_FILTERS','PDFMaker');?>
</span></a></li>
                                <li class="step" style="z-index:2; float: left;"  id="steplabel4"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_SORTING','PDFMaker');?>
</span></a></li>
                                <li class="step last" style="z-index:1; float: left;" id="steplabel5"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_BLOCK_STYLE','PDFMaker');?>
</span></a></li>
                            <?php }else{ ?>
                                <li class="first step active" style="z-index:10; float: left;" id="steplabel1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_RELATIVE_MODULE','PDFMaker');?>
</span></a></li>
                                <li class="step " style="z-index:9; float: left;"  id="steplabel2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_SELECT_COLUMNS','PDFMaker');?>
</span></a></li>
                                <li class="step " style="z-index:8; float: left;"  id="steplabel3"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_FILTERS','PDFMaker');?>
</span></a></li>
                                <li class="step " style="z-index:7; float: left;"  id="steplabel4"><a><span class="stepNum">4</span><span class="stepText"><?php echo vtranslate('LBL_SORTING','PDFMaker');?>
</span></a></li>
                                <li class="step last" style="z-index:6; float: left;" id="steplabel5"><a><span class="stepNum">5</span><span class="stepText"><?php echo vtranslate('LBL_BLOCK_STYLE','PDFMaker');?>
</span></a></li>
                            <?php }?> 
                        </ul>
                </div>    
                <div style="position: relative;" class="row-fluid">    
                    <div style="min-height: 800px;">                  
                        <div class="pushDown2per">     
                            <div class="summaryWidgetContainer">
                            <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="create"){?>
                                 <!-- STEP 1 -->
                                 <div id="step1" style="display:<?php if ($_smarty_tpl->tpl_vars['STEP']->value=="1"){?>block<?php }else{ ?>none<?php }?>">

                                     <div class="widget_header row-fluid">
                                         <span class="span5 margin0px"><h4><?php echo vtranslate('LBL_RELATIVE_MODULE','PDFMaker');?>
</h4></span>
                                     </div>
                                     <div class="widget_contents">
                                             <table border="0" cellpadding="5" cellspacing="0" width="100%">
                                                 <tr valign=top>
                                                     <?php if (count($_smarty_tpl->tpl_vars['RELATED_MODULES']->value)>0){?>
                                                         <td style="padding-right: 5px;" align="right" nowrap width="25%" align="top"><b><?php echo $_smarty_tpl->tpl_vars['REP']->value['LBL_NEW_REP0_HDR2'];?>
</b></td>
                                                         <td  style="padding-left: 5px; " align="left" width="75%" valign="top">

                                                             <?php  $_smarty_tpl->tpl_vars['relmod'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['relmod']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RELATED_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['relmod']->key => $_smarty_tpl->tpl_vars['relmod']->value){
$_smarty_tpl->tpl_vars['relmod']->_loop = true;
?>
                                                                 <?php if ($_smarty_tpl->tpl_vars['SEC_MODULE']->value==$_smarty_tpl->tpl_vars['relmod']->value){?>
                                                                     <div class="marginBottom10px">
                                                                     <input type='radio' name="secondarymodule" checked value="<?php echo $_smarty_tpl->tpl_vars['relmod']->value;?>
" />
                                                                     <?php echo vtranslate($_smarty_tpl->tpl_vars['relmod']->value);?>

                                                                     </div> 
                                                                 <?php }else{ ?>
                                                                     <div class="marginBottom10px"><input type='radio' name="secondarymodule" value="<?php echo $_smarty_tpl->tpl_vars['relmod']->value;?>
" />
                                                                     <?php echo vtranslate($_smarty_tpl->tpl_vars['relmod']->value);?>

                                                                     </div>
                                                                 <?php }?>
                                                             <?php } ?>
                                                         </td>
                                                     <?php }else{ ?>
                                                         <td style="padding-right: 5px;" align="left" nowrap width="25%"><b><?php echo $_smarty_tpl->tpl_vars['REP']->value['NO_REL_MODULES'];?>
</b></td>
                                                             <?php }?>
                                                 </tr>
                                             </table>
                                     </div>
                                 </div>
                                 <!-- STEP 2 -->     
                                 <div id="step2" style="display:none;">
                                     <div class="widget_header row-fluid">
                                         <span class="span5 margin0px"><h4><?php echo vtranslate('LBL_SELECT_COLUMNS','Reports');?>
</h4></span>
                                     </div>
                                     <div class="widget_contents">

                                             <div class="row-fluid block paddingTop20">
                                                 <div class="row-fluid row span">
                                                     <select data-placeholder="<?php echo vtranslate('LBL_ADD_MORE_COLUMNS','Reports');?>
" id="relatedblockColumnsList" name="relatedblockColumnsList" class="select2-container span11 columns" multiple="">
                                                         <?php echo $_smarty_tpl->tpl_vars['SECCOLUMNS']->value;?>

                                                     </select>
                                                 </div>
                                             </div>
                                             <input name="selected_fields" id="seleted_fields" value="<?php if ($_smarty_tpl->tpl_vars['SELECTEDCOLUMNS']->value!=''){?><?php echo $_smarty_tpl->tpl_vars['SELECTEDCOLUMNS']->value;?>
<?php }else{ ?>{}<?php }?>" type="hidden">         

                                     </div>
                                 </div> 
                            <?php }?>
                                 <!-- STEP 3 -->    
                                 <div id="step3" style="display:<?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>block<?php }else{ ?>none<?php }?>;">
                                     <?php if ($_smarty_tpl->tpl_vars['RECORD']->value!=''){?>
                                         <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('BlockFilters.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                     <?php }?>
                                 </div> 
                                 <!-- STEP 4 -->                     
                                 <div id="step4" style="display:none;">

                                     <input type="hidden" name="sortColCount" id="sortColCount" value="1" />
                                     <div class="widget_header row-fluid">    
                                         <span class="span5 margin0px"><h4><?php echo vtranslate('LBL_SORTING','PDFMaker');?>
</h4>
                                         </span>
                                     </div>
                                     <div class="widget_contents">
                                         <div class="filterContainer">
                                             <div class="conditionGroup contentsBackground well">

                                                 <div class="row-fluid block">
                                                     <div class="row-fluid row span">
                                                             <span class="span6">
                                                                     <strong><?php echo vtranslate('LBL_SORT_BY','PDFMaker');?>
</strong>
                                                             </span>	
                                                             <span class="span6">
                                                                     <strong><?php echo vtranslate('LBL_SORT_ORDER','Reports');?>
</strong>
                                                             </span>
                                                     </div>
                                                     <?php $_smarty_tpl->tpl_vars['ROW_VAL'] = new Smarty_variable(1, null, 0);?>	
                                                     <?php  $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->key => $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->value){
$_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_KEY']->value = $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELD_VALUE']->key;
?>
                                                             <div class="row-fluid row span sortFieldRow paddingTop20">
                                                                     <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('RelatedFields.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ROW_VAL'=>$_smarty_tpl->tpl_vars['ROW_VAL']->value), 0);?>

                                                                     <?php $_smarty_tpl->tpl_vars['ROW_VAL'] = new Smarty_variable(($_smarty_tpl->tpl_vars['ROW_VAL']->value+1), null, 0);?>
                                                             </div>
                                                     <?php } ?>
                                                     <?php $_smarty_tpl->tpl_vars['SELECTED_SORT_FEILDS_ARRAY'] = new Smarty_variable($_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS']->value, null, 0);?>
                                                     <?php $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS_COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['SELECTED_SORT_FEILDS_ARRAY']->value), null, 0);?>
                                                     <?php while ($_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS_COUNT']->value<3){?>
                                                             <div class="row-fluid row span sortFieldRow paddingTop20">
                                                                     <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('RelatedFields.tpl','PDFMaker'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('ROW_VAL'=>$_smarty_tpl->tpl_vars['ROW_VAL']->value), 0);?>

                                                                     <?php $_smarty_tpl->tpl_vars['ROW_VAL'] = new Smarty_variable(($_smarty_tpl->tpl_vars['ROW_VAL']->value+1), null, 0);?>
                                                                     <?php $_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS_COUNT'] = new Smarty_variable(($_smarty_tpl->tpl_vars['SELECTED_SORT_FIELDS_COUNT']->value+1), null, 0);?>
                                                             </div>
                                                     <?php }?>
                                                 </div>
                                             </div>
                                         </div>                
                                     </div>
                                 </div>
                                 <!-- STEP 5 -->
                                 <div id="step5" style="display:none">
                                     <div class="widget_header row-fluid">
                                         <span class="span5 margin0px"><h4><?php echo vtranslate('LBL_BLOCK_STYLE','PDFMaker');?>
</h4></span>
                                     </div>
                                     <div class="widget_contents">

                                             <div class="control-group">
                                                 <div class="control-label"><?php echo vtranslate('Name');?>
<span class="redColor">*</span></div>
                                                 <div class="controls">
                                                 <input value="<?php echo $_smarty_tpl->tpl_vars['BLOCKNAME']->value;?>
" type="text" id="blockname" name="blockname" class="span6">
                                                 </div>
                                             </div>    
                                         <textarea name="relatedblock" id="relatedblock" style="width:90%;height:500px" class=small tabindex="5"><?php echo $_smarty_tpl->tpl_vars['RELATEDBLOCK']->value;?>
</textarea>
                                     </div>
                                 </div>  
                                <!-- BUTTONS -->
                                <div class="row-fluid paddingTop20">
                                <hr>
                                     <div class="floatRight">
                                         <button type="button" name="back_rep" id="back_rep" class="btn btn-danger" onclick="return PDFMaker_RelatedBlockJs.changeStepsback('<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
');" <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="1"||$_smarty_tpl->tpl_vars['STEP']->value=="3"){?>disabled="disabled"<?php }?>><strong><?php echo vtranslate('LBL_BACK');?>
</strong></button>
                                         &nbsp;<button type="button" name="next" id="next" class="btn btn-success" onclick="return PDFMaker_RelatedBlockJs.changeSteps('<?php echo $_smarty_tpl->tpl_vars['MODE']->value;?>
');"><strong><?php echo vtranslate('LBL_NEXT','PDFMaker');?>
</strong></button>
                                         &nbsp;<a name="cancel" class="cursorPointer cancelLink" value="Cancel" href="javscript:;" onClick="self.close();"><?php echo vtranslate('LBL_CANCEL');?>
</a>
                                     </div>
                                </div>    
                            </div>
                        </div>                 
                    </div>                    
                </div>
            </div>
        </div>  
    </div>          
</form>
<script>
    var sortRowCount = 1;
    var sortColString = '';
    
    jQuery(document).ready(function(){  
        <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>
            PDFMaker_RelatedBlockJs.registerEditEvents();
        <?php }else{ ?>
            PDFMaker_RelatedBlockJs.registerEvents();
        <?php }?>
    });    

    <?php if ($_smarty_tpl->tpl_vars['BACK_WALK']->value=='true'){?>
        hide('step1');
        show('step2');
        document.getElementById('back_rep').disabled = false;
        document.getElementById('step1label').className = 'settingsTabList';
        document.getElementById('step2label').className = 'settingsTabSelected';
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['BACK']->value=='false'){?>
        hide('step1');
        show('step2');
        document.getElementById('back_rep').disabled = true;
        document.getElementById('step1label').className = 'settingsTabList';
        document.getElementById('step2label').className = 'settingsTabSelected';
    <?php }?>
 </script><?php }} ?>