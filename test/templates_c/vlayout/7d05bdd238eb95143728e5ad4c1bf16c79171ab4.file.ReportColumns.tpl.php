<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:22:36
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportColumns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149590178459ba9ebcecab14-76286673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d05bdd238eb95143728e5ad4c1bf16c79171ab4' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportColumns.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149590178459ba9ebcecab14-76286673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'availModules' => 0,
    'modulearr' => 0,
    'ALL_FIELDS_STRING' => 0,
    'BLOCK1' => 0,
    'BLOCK2' => 0,
    'scolrow_n' => 0,
    'BLOCK3' => 0,
    'BLOCKS3' => 0,
    'SC_INDEX' => 0,
    'sortColumnRowPadding' => 0,
    'SC_BLOCK' => 0,
    'BLOCKS_ORDER3' => 0,
    'COLUMNS_LIMIT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ebcf2eea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ebcf2eea')) {function content_59ba9ebcf2eea($_smarty_tpl) {?>

<script>
var moveupLinkObj,moveupDisabledObj,movedownLinkObj,movedownDisabledObj;
</script>
<div class="row-fluid">       
    <div class="span9">
        <div class="row-fluid">  
            <table class="table table-bordered table-report" style="width:100%;">
                <thead>
                    <tr class="blockHeader">
                       <th >
                            <?php echo vtranslate('LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                       </th>
                   </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td style="padding-bottom:0;">
                            <div class="row-fluid" style="padding-top:1%;">
                                <div class="span12">  
                                    <div style="height:40px;"><?php echo vtranslate('LBL_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                        <select id="availModules" name="availModules" onchange='defineModuleFields(this)' class="txtBox" style="width:auto;margin:auto;">
                                            <?php  $_smarty_tpl->tpl_vars['modulearr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modulearr']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['availModules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modulearr']->key => $_smarty_tpl->tpl_vars['modulearr']->value){
$_smarty_tpl->tpl_vars['modulearr']->_loop = true;
?>
                                                <option value=<?php echo $_smarty_tpl->tpl_vars['modulearr']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['modulearr']->value['checked']=="checked"){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['modulearr']->value['name'];?>
</option>
                                            <?php } ?>
                                        </select>
                                        <input type="text" id="search_input" onkeyup="getFieldsOptionsSearch(this)" placeholder="<?php echo vtranslate('LBL_Search_column',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" style="margin:auto;">
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td  style="padding-bottom:0;padding-top:0;">
                            <div id="availModValues" style="display:none;"><?php echo $_smarty_tpl->tpl_vars['ALL_FIELDS_STRING']->value;?>
</div>
                            <table style="width:100%;">
                    <tr>
                        <td style="width: 45%;">
                            <select id="availList" multiple size="20" name="availList" class="txtBox" ondblclick="addOndblclick(this)" style="width:100%;" >
                            <?php echo $_smarty_tpl->tpl_vars['BLOCK1']->value;?>

                            </select>
                        </td>
                        <td style="width: 5%;">
                            <div class="span4" style="width: 100%;">
                                <input name="add" value=" <?php echo vtranslate('LBL_ADD_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &gt&gt " class="btn" type="button" onClick="addColumn('selectedColumns');">
                            </div>
                        </td>
                        <td style="width: 45%;">
                            <input type="hidden" name="selectedColumnsString" id="selectedColumnsString">
                            <select id="selectedColumns" size="20" name="selectedColumns" onchange="selectedColumnClick(this);" multiple class="txtBox" style="width:100%;" >
                            <?php echo $_smarty_tpl->tpl_vars['BLOCK2']->value;?>

                            </select>
                        </td>
                        <td style="width: 5%;">
                            <div class="span2">
                                <br><br>
                                <div class="row-fluid">
                                    <div class="span3">&nbsp;</div>
                                    <div class="span6">
                                        <div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowUp row-fluid" onclick="moveUp('selectedColumns')"><img src="layouts/vlayout/skins/images/Arrow-up.png"></img></button></div>
                                        <div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid"  onclick="delColumn('selectedColumns')"><img src="layouts/vlayout/skins/images/no.png"></img></button></div>
                                        <div class="padding5per"><button type="button" class="btn btn-mini vtButton arrowDown row-fluid"  onclick="moveDown('selectedColumns')"><img src="layouts/vlayout/skins/images/Arrow-down.png"></img></button></div>   
                                    </div>
                                    <div class="span3">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                    </tr>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="6">
                            <?php echo vtranslate('LBL_LIMIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_SORT_ORDER',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                       </th>
                   </tr>
                </thead>
                <tbody>  
                    <tr>
                        <td style="text-align: right;">
                            <span style="vertical-align: top;">
                                <?php echo vtranslate('LBL_SORT_FIELD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;
                            </span>
                        </td>
                        <td style="text-align: left;vertical-align: middle;width:3em;">
                            <input name="add" value=" <?php echo vtranslate('LBL_ADD_ITEM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 &gt&gt " class="btn" type="button" onClick="addSortColumnRow();">
                        </td>
                        <td style="text-align: left;vertical-align: middle;">
                            <div id="sortColumnsByDiv">
                                <input id="scolrow_n" name="scolrow_n" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['scolrow_n']->value;?>
">
                                <div id="sortColumnsByDivBase" style="display:none;">
                                    <div id="sortColumnRow" style="padding-top:5px;vertical-align: middle;">
                                        <select id="SortByColumnIdNr" name="SortByColumnIdNr" class="row-fluid span7" style="margin:auto;" >
                                            <option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>	
                                            <?php echo $_smarty_tpl->tpl_vars['BLOCK3']->value;?>

                                        </select>
                                        &nbsp;&nbsp;
                                        <input type="radio" name="SortOrderColumnIdNr" value="ASC" checked><?php echo vtranslate('Ascending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; 
                                        <input type="radio" name="SortOrderColumnIdNr" value="DESC"><?php echo vtranslate('Descending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;
                                        <a onclick="deleteSortColumnRow(this);" href="javascript:;"><img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0" ></a>
                                    </div>
                                </div>
                                
                                <?php $_smarty_tpl->tpl_vars["sortColumnRowPadding"] = new Smarty_variable('', null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['SC_BLOCK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SC_BLOCK']->_loop = false;
 $_smarty_tpl->tpl_vars['SC_INDEX'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCKS3']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SC_BLOCK']->key => $_smarty_tpl->tpl_vars['SC_BLOCK']->value){
$_smarty_tpl->tpl_vars['SC_BLOCK']->_loop = true;
 $_smarty_tpl->tpl_vars['SC_INDEX']->value = $_smarty_tpl->tpl_vars['SC_BLOCK']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['SC_INDEX']->value>1){?>
                                      <?php $_smarty_tpl->tpl_vars["sortColumnRowPadding"] = new Smarty_variable("padding-top:5px;", null, 0);?>
                                    <?php }?>
                                    <div id="sortColumnRow" style="<?php echo $_smarty_tpl->tpl_vars['sortColumnRowPadding']->value;?>
vertical-align: middle;">
                                        <select id="SortByColumn<?php echo $_smarty_tpl->tpl_vars['SC_INDEX']->value;?>
" name="SortByColumn<?php echo $_smarty_tpl->tpl_vars['SC_INDEX']->value;?>
" class="chzn-select row-fluid span7" style="margin:auto;" >
                                            <option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                            <?php echo $_smarty_tpl->tpl_vars['SC_BLOCK']->value;?>

                                        </select>
                                        &nbsp;&nbsp;
                                        <input type="radio" name="SortOrderColumn<?php echo $_smarty_tpl->tpl_vars['SC_INDEX']->value;?>
" value="ASC" <?php if ($_smarty_tpl->tpl_vars['BLOCKS_ORDER3']->value[$_smarty_tpl->tpl_vars['SC_INDEX']->value]=="ASC"){?>checked<?php }?>><?php echo vtranslate('Ascending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; 
                                        <input type="radio" name="SortOrderColumn<?php echo $_smarty_tpl->tpl_vars['SC_INDEX']->value;?>
" value="DESC" <?php if ($_smarty_tpl->tpl_vars['BLOCKS_ORDER3']->value[$_smarty_tpl->tpl_vars['SC_INDEX']->value]=="DESC"){?>checked<?php }?>><?php echo vtranslate('Descending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;
                                        <a onclick="deleteSortColumnRow(this);" href="javascript:;"><img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0" ></a>
                                    </div>
                                <?php }
if (!$_smarty_tpl->tpl_vars['SC_BLOCK']->_loop) {
?>
                                    <div id="sortColumnRow" style="vertical-align: middle;">
                                        <select id="SortByColumn1" name="SortByColumn1" class="chzn-select row-fluid span7" style="margin:auto;" >
                                            <option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>	
                                            <?php echo $_smarty_tpl->tpl_vars['BLOCK3']->value;?>

                                        </select>
                                        &nbsp;&nbsp;
                                        <input type="radio" name="SortOrderColumn1" value="ASC" checked ><?php echo vtranslate('Ascending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; 
                                        <input type="radio" name="SortOrderColumn1" value="DESC"><?php echo vtranslate('Descending',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;
                                        <a onclick="deleteSortColumnRow(this);" href="javascript:;"><img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0" ></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: right;vertical-align: middle;">
                            <?php echo vtranslate('SET_LIMIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                        </td>
                        <td style="text-align: left;vertical-align: middle;" colspan="2" >
                            <input type="text" id="columns_limit" name="columns_limit" value="<?php if ($_smarty_tpl->tpl_vars['COLUMNS_LIMIT']->value!="0"){?><?php echo $_smarty_tpl->tpl_vars['COLUMNS_LIMIT']->value;?>
<?php }?>" class="txtBox" style="width:100px;margin:auto;">&nbsp;&nbsp;<small><?php echo vtranslate('SET_EMPTY_FOR_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</small>
                        </td>
                    </tr>
                    <tbody>
                </table>
            </div>
        </div>
    <div class="span4" style="width: 20%;">
        <div class="row-fluid">           
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                        <i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_SELECT_COLUMNS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                       </th>
                   </tr>
                </thead>
                <tbody>    
                    <tr style="height:25px">
                        <td>
                            <div class="padding1per">
                              <span>
                                <?php echo vtranslate('LBL_STEP5_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                              </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<?php }} ?>