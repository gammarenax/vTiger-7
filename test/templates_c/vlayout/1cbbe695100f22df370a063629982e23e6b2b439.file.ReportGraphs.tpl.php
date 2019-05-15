<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:59
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportGraphs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3052459405a0d63722bd2f3-43933858%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cbbe695100f22df370a063629982e23e6b2b439' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportGraphs.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3052459405a0d63722bd2f3-43933858',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d63723381e',
  'variables' => 
  array (
    'MODULE' => 0,
    'charttitle' => 0,
    'X_GROUP' => 0,
    'x_column_str' => 0,
    'x_column_arr' => 0,
    'CHARTS_ARRAY' => 0,
    'CHART_TYPE' => 0,
    'chart_type_key' => 0,
    'chtype1' => 0,
    'charttype_arr' => 0,
    'selected_summaries' => 0,
    'column_arr' => 0,
    'chtype2' => 0,
    'chtype3' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d63723381e')) {function content_5a0d63723381e($_smarty_tpl) {?>

<div class="row-fluid">       
    <div class="span9">
        <div class="row-fluid">  
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                            <?php echo vtranslate('LBL_GRAPHS',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                            <input type="hidden" name="none_chart" id="none_chart" value="<?php echo getTranslatedString('LBL_SELECT_CHARTTYPE','ITS4YouReports');?>
">
                       </th>
                   </tr>
                </thead>
                <tbody> 
                    

                    <tr style="height:25px">
                        <td class="medium"><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_CHART_Title',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <input class="span5" id="charttitle" name="charttitle" value="<?php echo $_smarty_tpl->tpl_vars['charttitle']->value;?>
" type="text" placeholder="<?php echo getTranslatedString('LBL_CHART_Title','ITS4YouReports');?>
" onblur="setChartTitle(this)">
                        </td>
                    </tr>
                    <tr style="height:25px">
                        <td class="medium"><label class="pull-right marginRight10px"><?php echo vtranslate('LBL_CHART_DataSeries',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <select id="x_group" name="x_group" onchange="ChartDataSeries(this);">
                                <?php  $_smarty_tpl->tpl_vars['x_column_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['x_column_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['x_column_str'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['X_GROUP']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['x_column_arr']->key => $_smarty_tpl->tpl_vars['x_column_arr']->value){
$_smarty_tpl->tpl_vars['x_column_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['x_column_str']->value = $_smarty_tpl->tpl_vars['x_column_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['x_column_str']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['x_column_arr']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['x_column_arr']->value['value'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr style="height:25px">
                        <td class="medium"><label class="pull-right marginRight10px"><?php echo vtranslate('Graph1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <?php $_smarty_tpl->tpl_vars["chtype1"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[1]['charttype'], null, 0);?>
                            <select id="chartType1" name="chartType1">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['charttype_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['charttype_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['chart_type_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CHART_TYPE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['charttype_arr']->key => $_smarty_tpl->tpl_vars['charttype_arr']->value){
$_smarty_tpl->tpl_vars['charttype_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['chart_type_key']->value = $_smarty_tpl->tpl_vars['charttype_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['chart_type_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['chart_type_key']->value==$_smarty_tpl->tpl_vars['chtype1']->value){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['charttype_arr']->value['value'];?>
</option>
                                <?php } ?>
                            </select>
                            <select id="data_series1" name="data_series1">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['column_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['column_i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selected_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column_arr']->key => $_smarty_tpl->tpl_vars['column_arr']->value){
$_smarty_tpl->tpl_vars['column_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['column_i']->value = $_smarty_tpl->tpl_vars['column_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['column_arr']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['column_arr']->value['value']==$_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[1]['dataseries']){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['column_arr']->value['label'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr style="height:25px">
                        <td class="medium"><label class="pull-right marginRight10px"><?php echo vtranslate('Graph2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <?php $_smarty_tpl->tpl_vars["chtype2"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[2]['charttype'], null, 0);?>
                            <select id="chartType2" name="chartType2">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['charttype_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['charttype_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['chart_type_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CHART_TYPE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['charttype_arr']->key => $_smarty_tpl->tpl_vars['charttype_arr']->value){
$_smarty_tpl->tpl_vars['charttype_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['chart_type_key']->value = $_smarty_tpl->tpl_vars['charttype_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['chart_type_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['chart_type_key']->value==$_smarty_tpl->tpl_vars['chtype2']->value){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['charttype_arr']->value['value'];?>
</option>
                                <?php } ?>
                            </select>
                            <select id="data_series2" name="data_series2">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['column_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['column_i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selected_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column_arr']->key => $_smarty_tpl->tpl_vars['column_arr']->value){
$_smarty_tpl->tpl_vars['column_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['column_i']->value = $_smarty_tpl->tpl_vars['column_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['column_arr']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['column_arr']->value['value']==$_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[2]['dataseries']){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['column_arr']->value['label'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    <tr style="height:25px">
                        <td class="medium"><label class="pull-right marginRight10px"><?php echo vtranslate('Graph3',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <?php $_smarty_tpl->tpl_vars["chtype3"] = new Smarty_variable($_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[3]['charttype'], null, 0);?>
                            <select id="chartType3" name="chartType3">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['charttype_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['charttype_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['chart_type_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CHART_TYPE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['charttype_arr']->key => $_smarty_tpl->tpl_vars['charttype_arr']->value){
$_smarty_tpl->tpl_vars['charttype_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['chart_type_key']->value = $_smarty_tpl->tpl_vars['charttype_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['chart_type_key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['chart_type_key']->value==$_smarty_tpl->tpl_vars['chtype3']->value){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['charttype_arr']->value['value'];?>
</option>
                                <?php } ?>
                            </select>
                            <select id="data_series3" name="data_series3">
                                <option value="none"><?php echo getTranslatedString('LBL_NONE','ITS4YouReports');?>
</option>
                                <?php  $_smarty_tpl->tpl_vars['column_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['column_i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selected_summaries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column_arr']->key => $_smarty_tpl->tpl_vars['column_arr']->value){
$_smarty_tpl->tpl_vars['column_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['column_i']->value = $_smarty_tpl->tpl_vars['column_arr']->key;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['column_arr']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['column_arr']->value['value']==$_smarty_tpl->tpl_vars['CHARTS_ARRAY']->value[3]['dataseries']){?>selected='selected'<?php }?>><?php echo $_smarty_tpl->tpl_vars['column_arr']->value['label'];?>
</option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <div class="span4" style="width: 20%;">
        <div class="row-fluid">           
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                        <i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_GRAPHS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                       </th>
                   </tr>
                </thead>
                <tbody>    
                    <tr style="height:25px">
                        <td>
                            <div class="padding1per">
                              <span>
                                <?php echo vtranslate('LBL_STEP12_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                              </span>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div><?php }} ?>