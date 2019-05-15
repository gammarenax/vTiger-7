<?php /* Smarty version Smarty-3.1.7, created on 2017-11-12 11:13:57
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/AdvanceFilter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12737959559ba9ea2d7dd39-77119892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dfa5089bb75c494d7a5c67b0d35d090238b2fac' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/AdvanceFilter.tpl',
      1 => 1510386409,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12737959559ba9ea2d7dd39-77119892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9ea2e634f',
  'variables' => 
  array (
    'std_filter_columns' => 0,
    'std_filter_criteria' => 0,
    'SEL_FIELDS' => 0,
    'current_mk_time' => 0,
    'user_date_format' => 0,
    'fld_date_options' => 0,
    'COLUMNS_BLOCK_JSON' => 0,
    'MODULE' => 0,
    'FOPTION' => 0,
    'REL_FIELDS' => 0,
    'JS_DATEFORMAT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9ea2e634f')) {function content_59ba9ea2e634f($_smarty_tpl) {?>

<input type="hidden" name="std_filter_columns" id="std_filter_columns" value='<?php echo $_smarty_tpl->tpl_vars['std_filter_columns']->value;?>
' />
<input type="hidden" name="std_filter_criteria" id="std_filter_criteria" value='<?php echo $_smarty_tpl->tpl_vars['std_filter_criteria']->value;?>
' />
<input type="hidden" name="sel_fields" id="sel_fields" value='<?php echo $_smarty_tpl->tpl_vars['SEL_FIELDS']->value;?>
' />
<input type="hidden" name="current_mk_time" id="current_mk_time" value='<?php echo $_smarty_tpl->tpl_vars['current_mk_time']->value;?>
' />
<input type="hidden" name="user_date_format" id="user_date_format" value='<?php echo $_smarty_tpl->tpl_vars['user_date_format']->value;?>
' />
<input type="hidden" name="fld_date_options" id="fld_date_options" value='<?php echo $_smarty_tpl->tpl_vars['fld_date_options']->value;?>
' />
<div class="none" id='filter_columns' style='display:none;'><?php echo $_smarty_tpl->tpl_vars['COLUMNS_BLOCK_JSON']->value;?>
</div>
<script>
    function addColumnConditionGlue(groupIndex, columnIndex){

            var columnConditionGlueElement = document.getElementById('columnconditionglue_' + columnIndex);

            if (groupIndex != "0")
                ctype = "f";
            else
                ctype = "g";

            if (columnConditionGlueElement) {
                        columnConditionGlueElement.innerHTML = "<select name='" + ctype + "con" + columnIndex + "' id='" + ctype + "con" + columnIndex + "' class='chzn-select' data-value='value' name='columnname' data-fieldinfo='' style='max-width:87px;'>" +
                                "<option value='and'><?php echo vtranslate('LBL_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>" +
                                "<option value='or'><?php echo vtranslate('LBL_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>" +
                                "</select>";
jQuery().ready(function() {
    var columnConditionGlueElement_obj = jQuery('#fcon' + columnIndex);
            if(document.getElementById("hfcon_"+groupIndex+"_"+ columnIndex)) {
              var fColColumnsObj = jQuery('#fcon' + columnIndex);
              if(jQuery('#hfcon_'+groupIndex+'_'+ columnIndex)){
                var selected_fcon = jQuery('#hfcon_'+groupIndex+'_'+ columnIndex).val();
                //jQuery("#"+ctype + "con" + columnIndex).val(selected_fcon);
                jQuery("#fcon" + columnIndex).val(selected_fcon);
                }
//                if(fColColumnsObj.options[i].value == document.getElementById("hfcon_"+groupIndex+"_"+ columnIndex).value){
//                  fColColumnsObj.options[i].selected=true;
//alert(fColColumnsObj.options[i].value);
//alert(fColColumnsObj.options[i].selected);
//                  jQuery("#"+ctype + "con" + columnIndex).val(fColColumnsObj.options[i].value);
//              }
            }
    app.changeSelectElementView(columnConditionGlueElement_obj);
});

    }
    }

        function addConditionRow(groupIndex) {
                var groupColumns = column_index_array[groupIndex];
                if (typeof (groupColumns) != 'undefined') {
                            for (var i = groupColumns.length - 1; i >= 0; --i) {
                                            var prevColumnIndex = groupColumns[i];
                                            if (document.getElementById('conditioncolumn_' + groupIndex + '_' + prevColumnIndex)) {
                                                                addColumnConditionGlue(groupIndex, prevColumnIndex);
                                                                break;
    }
    }
    }
            if (groupIndex != "0")
                var ctype = "f";
            else
                var ctype = "g";

            var columnIndex = advft_column_index_count + 1;
            var nextNode = document.getElementById('groupfooter_' + groupIndex);
            var newNode = document.createElement('tr');
            var newNodeId = 'conditioncolumn_' + groupIndex + '_' + columnIndex;
            newNode.setAttribute('id', newNodeId);
            newNode.setAttribute('name', 'conditionColumn');
            nextNode.parentNode.insertBefore(newNode, nextNode);

            var node1 = document.createElement('td');
            node1.setAttribute('width', '25%');
            newNode.appendChild(node1);

            if (groupIndex != "0")
            {
                var filtercolumns = jQuery('#filter_columns').html();
               filtercolumns = html_entity_decode(filtercolumns,"UTF-8");
var fcon_selectbox = '<select name="' + ctype + 'col' + columnIndex + '" id="' + ctype + 'col' + columnIndex + '" style="display: block;" onchange="reports4you_updatefOptions(this, \'' + ctype + 'op' + columnIndex + '\');addRequiredElements(\'' + ctype + '\',' + columnIndex + ');updateRelFieldOptions(this, \'' + ctype + 'val_' + columnIndex + '\');" class="chzn-select span6" data-value="value" name="columnname" data-fieldinfo=""></select>';
node1.innerHTML = '<div class="conditionRow"><div id="condition'+ ctype + 'col' + columnIndex +'" >'+fcon_selectbox+'</div>';

                var oOption = document.createElement("OPTION");
                oOption.value = "";
                oOption.appendChild(document.createTextNode("<?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"));
                document.getElementById(ctype + 'col' + columnIndex).appendChild(oOption);

                var optgroups = filtercolumns.split("(|@!@|)");
                for (i = 0; i < optgroups.length; i++)
                {
                    var optgroup = optgroups[i].split("(|@|)");

                    if (optgroup[0] != '')
                    {
                        var oOptgroup = document.createElement("OPTGROUP");
                        oOptgroup.label = optgroup[0];

                        var responseVal = JSON.parse(optgroup[1]);

                        for (var widgetId in responseVal)
                        {
                            if (responseVal.hasOwnProperty(widgetId))
                            {
                                option = responseVal[widgetId];
                                var oOption = document.createElement("OPTION");
                                oOption.value = option["value"];
                                oOption.appendChild(document.createTextNode(option["text"]));
                                oOptgroup.appendChild(oOption);
                            }
                        }
                        document.getElementById(ctype + 'col' + columnIndex).appendChild(oOptgroup);
                    }
                }
            }
            else
            {
                var filtercolumns = document.getElementById('SortByColumn').innerHTML;
                node1.innerHTML = '<div class="conditionRow"><select name="' + ctype + 'col' + columnIndex + '" id="' + ctype + 'col' + columnIndex + '" onchange="reports4you_updatefOptions(this, \'' + ctype + 'op' + columnIndex + '\');addRequiredElements(\'' + ctype + '\',' + columnIndex + ');updateRelFieldOptions(this, \'' + ctype + 'val_' + columnIndex + '\');" class="detailedViewTextBox">' + filtercolumns + '</select>';
                document.getElementById(ctype + 'col' + columnIndex).value = "none";
            }
var fcon_selectbox_obj = jQuery("#condition"+ ctype + "col" + columnIndex);
jQuery().ready(function() {
    app.changeSelectElementView(fcon_selectbox_obj);
});
            
            node2 = document.createElement('td');
            node2.setAttribute('width', '15%');
            newNode.appendChild(node2);
            node2.innerHTML = '<select name="' + ctype + 'op' + columnIndex + '" id="' + ctype + 'op' + columnIndex + '" class="repBox" style="width:100%;" onchange="addRequiredElements(\'' + ctype + '\',' + columnIndex + ');">' +
                    '<option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>' +
                    '<?php echo $_smarty_tpl->tpl_vars['FOPTION']->value;?>
' +
                    '</select>';

            node3 = document.createElement('td');
    
            newNode.appendChild(node3);

            var node3_inner = "";

    
            node3_inner +='<div class="layerPopup" id="show_val' + columnIndex + '" name="relFieldsPopupDiv" style="border:2px solid #656565;border:0; position: absolute; width:300px; z-index: 50; display: none;">' +
                    '<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" style="padding:5px;border-radius:5px;border:1px solid #ccc;background-color:white;">' +
                    '<tr>' +
                    '<td>' +
                    '<table width="100%" cellspacing="0" cellpadding="0" border="0" class="small">' +
                    '<tr>' +
                    '<td>' +
                    '<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="white" class="small">' +
                    '<tr>' +
                    '<td width="30%" align="left" class="cellLabel small"><b><?php echo vtranslate('LBL_SELECT_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>' +
                    '<td width="30%" align="left" class="cellText">' +
                    '<select name="' + ctype + 'val_' + columnIndex + '" id="' + ctype + 'val_' + columnIndex + '" onChange="AddFieldToFilter(' + columnIndex + ',this);" class="chzn-select" style="margin-top:0.5em;">' +
                    '<option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>' +
                    '<?php echo $_smarty_tpl->tpl_vars['REL_FIELDS']->value;?>
' +
                    '</select>' +
                    '</td>' +
                    '<td width="30%" align="left" class="cellLabel small">' +
                    '<input type="button" style="width: 70px;margin-top:0.5em;" value="<?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="button" onclick="hideAllElementsByName(\'relFieldsPopupDiv\');" class="crmbutton small create" accesskey="X" title="<?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/>' +
                    '</td>' +
                    '</tr>' +
                    '</table>' +
                    '</td>' +
                    '</tr>' +
                    '</table>' +
                    '</td>' +
                    '</tr>' +
                    '</table>' +
                    '</div>';
            node3.innerHTML = '<span id="node3span' + columnIndex + '_st" style="width:100%;"><input name="' + ctype + 'val' + columnIndex + '" id="' + ctype + 'val' + columnIndex + '" class="repBox" style="width: 85%;" type="text" value=""><input name="' + ctype + 'valhdn' + columnIndex + '" id="' + ctype + 'valhdn' + columnIndex + '" class="repBox" style="width: 85%;" type="hidden" value=""><span class="add-on relatedPopup cursorPointer"><i id="node3span'+columnIndex+'_select" class="icon-search relatedPopup" onClick="" title="<?php echo vtranslate('LBL_SELECT');?>
"></i></span><span class="add-on clearReferenceSelection cursorPointer"><i id="node3span'+columnIndex+'_clear" class="icon-remove-sign" onClick="ClearFieldToFilter('+columnIndex+');" title="<?php echo vtranslate('LBL_CLEAR');?>
"></i></span>' + node3_inner + '</span><span id="node3span' + columnIndex + '_ajx" style="width:100%;display:none;"></span><span id="node3span' + columnIndex + '_djx" style="width:100%;display:none;"></span>';
            setRelPopupClick('node3span'+columnIndex+'_select',columnIndex);

            node4 = document.createElement('td');
            node4.setAttribute('id', 'columnconditionglue_' + columnIndex);
            node4.setAttribute('width', '87px');
            newNode.appendChild(node4);

            node5 = document.createElement('td');
            node5.setAttribute('width', '30px');
            newNode.appendChild(node5);
            node5.innerHTML = '<a onclick="deleteColumnRow(' + groupIndex + ',' + columnIndex + ');" href="javascript:;">' +
                    '<img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0">' +
                    '</a></div>';

            if (typeof (column_index_array[groupIndex]) == 'undefined')
                column_index_array[groupIndex] = [];
            column_index_array[groupIndex].push(columnIndex);
            advft_column_index_count++;
    }

    function addGroupConditionGlue(groupIndex) {

                var groupConditionGlueElement = document.getElementById('groupconditionglue_' + groupIndex);
                if (groupConditionGlueElement) {
var gcon_selectbox = '<select name="gpcon' + groupIndex + '" id="gpcon' + groupIndex + '" class="chzn-select" data-value="value" style="display: block;width:8em;" name="columnname" data-fieldinfo="">'+
                                    "<option value='and'><?php echo vtranslate('LBL_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>" +
                                    "<option value='or'><?php echo vtranslate('LBL_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>" +'</select>';
groupConditionGlueElement.innerHTML = '<div class="gconRow"><div id="gconRow' + groupIndex +'" >'+gcon_selectbox+'</div>';

var gcon_selectbox_obj = jQuery("#gconRow" + groupIndex);
jQuery().ready(function() {
    app.changeSelectElementView(gcon_selectbox_obj);
});

                }
    }

    function addConditionGroup(parentNodeId) {
            for (var i = group_index_array.length - 1; i >= 0; --i) {
                var prevGroupIndex = group_index_array[i];
                if (document.getElementById('conditiongroup_' + prevGroupIndex)) {
                    addGroupConditionGlue(prevGroupIndex);
                    break;
                }
            }

            var groupIndex = advft_group_index_count + 1;
            var parentNode = document.getElementById(parentNodeId);

            var newNode = document.createElement('div');
            newNodeId = 'conditiongroup_' + groupIndex;
            newNode.setAttribute('id', newNodeId);
            newNode.setAttribute('name', 'conditionGroup');
            
            newNode.setAttribute('class', 'conditionGroup conditionFilterDiv');

            
            if(groupIndex>1){
                var deleted_group_btn = "<button type='button' class='btn' style='float:right;' onclick='deleteGroup(\"" + groupIndex + "\");'><strong><?php echo vtranslate('LBL_DELETE_GROUP',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>";
            }else{
                var deleted_group_btn = "";
            }
            
            newNode.innerHTML = "<div class='conditionList'><table class='small crmTable' border='0' cellpadding='5' cellspacing='0' width='100%' valign='top' id='conditiongrouptable_" + groupIndex + "' style='border:0px;' >" +
                    "<tr id='groupfooter_" + groupIndex + "' style='display:none;'>" +
                    "<td colspan='5' align='left'>" +
                    "</td>" +
                    "</tr>" +
                    "</table>" +
                    "<table class='small' border='0' cellpadding='5' cellspacing='1' width='100%' valign='top'>" +
                    "<tr id='groupheader_" + groupIndex + "'>" +
                    "<td colspan='4' align='left'>" +
                    "<button type='button' class='btn' style='float:left;' onclick='addConditionRow(\"" + groupIndex + "\")'><strong><?php echo vtranslate('LBL_NEW_CONDITION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>" +

                    "</td>" +
                    "<td colspan='1' align='right'>" +
                    deleted_group_btn+
                    "</td>" +
                    "</tr>" +
                    "<tr><td align='center' id='groupconditionglue_" + groupIndex + "' style='text-align:center;' colspan='5'>" +
                    "</td></tr>" +
                    "</table></div>";

            parentNode.appendChild(newNode);

            group_index_array.push(groupIndex);
            advft_group_index_count++;
            if(advft_group_index_count>0){
                jQuery('.fgroup_btn').addClass('hide');
            }
    }

    function addNewConditionGroup(parentNodeId) {
                addConditionGroup(parentNodeId);
                addConditionRow(advft_group_index_count);
    }

    function deleteColumnRow(groupIndex, columnIndex) {
                removeElement('conditioncolumn_' + groupIndex + '_' + columnIndex);

                var groupColumns = column_index_array[groupIndex];
                var keyOfTheColumn = groupColumns.indexOf(columnIndex);
                var isLastElement = true;

                for (var i = keyOfTheColumn; i < groupColumns.length; ++i) {
                            var nextColumnIndex = groupColumns[i];
                            var nextColumnRowId = 'conditioncolumn_' + groupIndex + '_' + nextColumnIndex;
                            if (document.getElementById(nextColumnRowId)) {
                                            isLastElement = false;
                                            break;
    }
    }

            if (isLastElement) {
                        for (var i = keyOfTheColumn - 1; i >= 0; --i) {
                                        var prevColumnIndex = groupColumns[i];
                                        var prevColumnGlueId = "fcon" + prevColumnIndex;
                                        if (document.getElementById(prevColumnGlueId)) {
                                                            removeElement(prevColumnGlueId);
                                                            break;
    }
    }
    }
    }

    function deleteGroup(groupIndex) {
        removeElement('conditiongroup_' + groupIndex);

        var keyOfTheGroup = group_index_array.indexOf(groupIndex);
        var isLastElement = false;
        
        var g_length = group_index_array.length
        var g_length_i = g_length;
        var hide_gop = false;

        for (var i = 0; i < g_length; i++) {
            if(!document.getElementById('conditiongroup_'+g_length_i)){
                hide_gop = true;
            }
            else
            {
                hide_gop = false;
            }
            g_length_i = g_length_i-1;
            if(hide_gop==true){
                if(g_length_i==(g_length-1)){
                    for (var di = 0; di < g_length; di++) {
                        if(!document.getElementById('conditiongroup_'+g_length_i)){
                            g_length_i = g_length_i-1;
                        }
                        else
                        {
                            jQuery('#gconRow'+g_length_i).html('');
                            break;
                        }
                    }
                }
            }
        }
    }

    function removeElement(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                        var parent = element.parentNode;
                        if (parent) {
                                        parent.removeChild(element);
                        } else {
                                        element.remove();
                        }
            }
    }

    function hideAllElementsByName(name) {
            var allElements = document.getElementsByTagName('div');
            for (var i = 0; i < allElements.length; ++i) {
                        var element = allElements[i];
                        if (element.getAttribute('name') == name)
                            element.style.display = 'none';
            }
            return true;
    }

    function addRequiredElements(ctype, columnindex) {
        jQuery().ready(function() {
                var colObj = document.getElementById(ctype + 'col' + columnindex);
                if (colObj){
                            var opObj = document.getElementById(ctype + 'op' + columnindex);
                            var valObj = document.getElementById(ctype + 'val' + columnindex);

                            var currField = colObj.options[colObj.selectedIndex];
                            var currOp = opObj.options[opObj.selectedIndex];

                            var fieldtype = null;

                            if (currField.value != null && currField.value.length != 0) {
                                    fieldtype = trimfValues(currField.value);

                                    var sel_fields = JSON.parse(document.getElementById("sel_fields").value);
                                    var selected_value = html_entity_decode(colObj.value,"UTF-8");
                                    if (sel_fields[selected_value]) {
                                        updateRelFieldOptions(colObj, 'fval_'+columnindex);
                                    }
                                    
                                    switch (fieldtype) {
                                                        case 'D':
                                                        case 'T':
                                                                var dateformat = "<?php echo $_smarty_tpl->tpl_vars['JS_DATEFORMAT']->value;?>
";
                                                                var timeformat = "%H:%M:%S";
                                                                var showtime = true;
                                                                if (fieldtype == 'D') {
                                                                                            timeformat = '';
                                                                                            showtime = false;
                                                                }

                                                            break;
                                                default:
                                                        if (document.getElementById('jscal_trigger_fval' + columnindex))
                                                            document.getElementById('jscal_trigger_fval' + columnindex).remove();
                                                        if (document.getElementById('fval_ext' + columnindex))
                                                            document.getElementById('fval_ext' + columnindex).remove();
                                                        if (document.getElementById('jscal_trigger_fval_ext' + columnindex))
                                                            document.getElementById('jscal_trigger_fval_ext' + columnindex).remove();
                                                 }
                    var comparatorId = ctype + "op" + columnindex;
                    var comparatorObject = jQuery("#"+comparatorId);
                    var comparatorValue = comparatorObject.val();
                    
                    if(comparatorValue=="isn" || comparatorValue=="isnn"){
		                	document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
		                  document.getElementById("node3span" + columnindex + "_st").style.display = "none";
											document.getElementById("node3span" + columnindex + "_djx").style.display = "none";
										}else{
											document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
		                  document.getElementById("node3span" + columnindex + "_st").style.display = "block";
											document.getElementById("node3span" + columnindex + "_djx").style.display = "none";
										}

                    var std_filter_columns = document.getElementById("std_filter_columns").value;
                    if (std_filter_columns){
                                        var std_filter_columns_arr = std_filter_columns.split('<<?php ?>%jsstdjs%<?php ?>>');
                                        var selected_value = html_entity_decode(colObj.value,"UTF-8");
                                        if (std_filter_columns_arr.indexOf(selected_value) > -1) {
                                                                if ((document.getElementById("jscal_field_sdate" + columnindex)) && (document.getElementById("jscal_field_edate" + columnindex))){
                                                                            var s_obj = document.getElementById("jscal_field_sdate" + columnindex);
                                                                            var e_obj = document.getElementById("jscal_field_edate" + columnindex);
                                                                            var st_obj = document.getElementById("jscal_trigger_sdate" + columnindex);
                                                                            var et_obj = document.getElementById("jscal_trigger_edate" + columnindex);
                                                                            var seOption_type = currOp.value;
                                                                            
                                                                            if(comparatorValue=="olderNdays" || comparatorValue=="lastNdays" || comparatorValue=="nextNdays" || comparatorValue=="moreNdays" || comparatorValue=="daysago" || comparatorValue=="daysmore"){
                                                                                jQuery('#fval'+columnindex).val('');
                                                                                jQuery('#fvalhdn'+columnindex).val('');
                                                                                document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
                                                                                document.getElementById("node3span" + columnindex + "_st").style.display = "none";
                                                                                document.getElementById("div_nfval" + columnindex).style.display = "block";
                                                                                document.getElementById("node3span" + columnindex + "_djx").style.display = "block";
                                                                                showNdayRange(columnindex);
                                                                            }else{
                                                                                document.getElementById("div_nfval" + columnindex).style.display = "none";
                                                                                showDateRange(s_obj, e_obj, st_obj, et_obj, seOption_type);
                                                                                if(comparatorValue=="custom"){
                                                                                    app.registerEventForDateFields('#jscal_field_sdate_val_' + columnindex);
                                                                                    app.registerEventForDateFields('#jscal_field_edate_val_' + columnindex);
                                                                                }
                                                                                if(comparatorValue!=""){
        																																						if(comparatorValue=="isn" || comparatorValue=="isnn"){
                                                                                      jQuery('#fval'+columnindex).val('');
                                                                                      jQuery('#fvalhdn'+columnindex).val('');
        																														                	document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
        																														                  document.getElementById("node3span" + columnindex + "_st").style.display = "none";
        																																							document.getElementById("node3span" + columnindex + "_djx").style.display = "none";
                                                                                    }else if(jQuery.inArray(comparatorValue,JSON.parse(jQuery('#fld_date_options').val()))>-1){
                                                                                      document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
        																														                  document.getElementById("node3span" + columnindex + "_st").style.display = "block";
        																																							document.getElementById("node3span" + columnindex + "_djx").style.display = "none";
        																																						}else{
                                                                                      jQuery('#fval'+columnindex).val('');
                                                                                      jQuery('#fvalhdn'+columnindex).val('');
        																																							document.getElementById("node3span" + columnindex + "_ajx").style.display = "none";
        																														                  document.getElementById("node3span" + columnindex + "_st").style.display = "none";
        																																							document.getElementById("node3span" + columnindex + "_djx").style.display = "block";
        																																						}
                                                                                }
                                                                            }
                                                                           
                                                                }
                                        }
                    }

                }
            }
        });
    }

        function showHideDivs(showdiv, hidediv) {
                if (document.getElementById(showdiv))
                    document.getElementById(showdiv).style.display = "block";
                if (document.getElementById(hidediv))
                    document.getElementById(hidediv).style.display = "none";
    }
        
    /**/
    
    function deleteGroupColumnRow(groupIndex, columnIndex) {
            removeElement('groupconditioncolumn_' + groupIndex + '_' + columnIndex);

            var groupColumns = gf_column_index_array[groupIndex];
            var keyOfTheColumn = groupColumns.indexOf(columnIndex);
            var isLastElement = true;

            for (var i = keyOfTheColumn; i < groupColumns.length; ++i) {
                        var nextColumnIndex = groupColumns[i];
                        var nextColumnRowId = 'groupconditioncolumn_' + groupIndex + '_' + nextColumnIndex;
                        if (document.getElementById(nextColumnRowId)) {
                                        isLastElement = false;
                                        break;
    }
    }

            if (isLastElement) {
                        for (var i = keyOfTheColumn - 1; i >= 0; --i) {
                                        var prevColumnIndex = groupColumns[i];
                                        var prevColumnGlueId = "ggroupcon" + prevColumnIndex;
                                        if (document.getElementById(prevColumnGlueId)) {
                                                            removeElement(prevColumnGlueId);
                                                            break;
                                        }
                         }
            }
    }

    function addGroupConditionRow(groupIndex) {
	var groupColumns = gf_column_index_array[groupIndex];
	if(typeof(groupColumns) != 'undefined') { 		
		for(var i=groupColumns.length - 1; i>=0; --i) {
			var prevColumnIndex = groupColumns[i];
                        
			if(document.getElementById('groupconditioncolumn_'+groupIndex+'_'+prevColumnIndex)) {
				addGroupColumnConditionGlue(groupIndex, prevColumnIndex);
				break;
                        }
                }
        }
	if (groupIndex != "0")
	   ctype = "f";
	else
	   ctype = "g";
	var columnIndex = gf_advft_column_index_count+1;
	var nextNode = document.getElementById('ggroupfooter_'+groupIndex);
	var newNode = document.createElement('tr');
	newNodeId = 'groupconditioncolumn_'+groupIndex+'_'+columnIndex;
	newNode.setAttribute('id',newNodeId);
	newNode.setAttribute('name','groupconditionColumn');
	nextNode.parentNode.insertBefore(newNode, nextNode);
	
	node1 = document.createElement('td');
    
	node1.setAttribute('width', '25%');
	newNode.appendChild(node1);
    

    
    
    node1.innerHTML = '<select name="'+ctype+'groupcol'+columnIndex+'" id="'+ctype+'groupcol'+columnIndex+'" onchange="reports4you_updatefOptions(this, \''+ctype+'groupcolop'+columnIndex+'\');addRequiredElements(\''+ctype+'\','+columnIndex+');" class="chzn-select chzn-done" style="width:auto"><option value="none"><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select>';
      document.getElementById(ctype+'groupcol'+columnIndex).value = "none";
      var filtercolumns_str = document.getElementById('sum_group_columns').innerHTML;
      var optgroups = filtercolumns_str.split("(|@!@|)");
      for(i=0; i < optgroups.length; i++)
    {
         var optgroup = optgroups[i].split("(|@|)");
         if (optgroup[0] != '' && optgroup[1] != '')
    {
             var option_value = optgroup[0];
             var option_text = optgroup[1];
             var oOption = document.createElement("OPTION");
	    		   oOption.value=option_value;
	    		   oOption.appendChild(document.createTextNode(option_text));
						 document.getElementById(ctype+'groupcol'+columnIndex).appendChild(oOption);
    }
    }
			
	
	node2 = document.createElement('td');
    
	node2.setAttribute('width', '25%');
	newNode.appendChild(node2);
	node2.innerHTML = '<select name="'+ctype+'groupop'+columnIndex+'" id="'+ctype+'groupop'+columnIndex+'" class="repBox" style="width:100%;" onchange="addRequiredElements(\''+ctype+'\','+columnIndex+');">'+
							'<option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>'+
							'<?php echo $_smarty_tpl->tpl_vars['FOPTION']->value;?>
'+
						'</select>';
	
	node3 = document.createElement('td');
    
	newNode.appendChild(node3);
	node3.innerHTML = '<input name="'+ctype+'groupval'+columnIndex+'" id="'+ctype+'groupval'+columnIndex+'" class="repBox" style="width: 100%;" type="text" value="">';
	
    	

    node3.innerHTML += '<div class="layerPopup" id="show_val'+columnIndex+'" name="relFieldsPopupDiv" style="border:0; position: absolute; width:300px; z-index: 50; display: none;">'+
							'<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="mailClient mailClientBg">'+
								'<tr>'+
									'<td>'+
										'<table width="100%" cellspacing="0" cellpadding="0" border="0" class="layerHeadingULine">'+
											'<tr class="mailSubHeader">'+
												'<td width=90% class="genHeaderSmall"><b><?php echo vtranslate('LBL_SELECT_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</b></td>'+
												'<td align=right>'+
													'<img border="0" align="absmiddle" src="layouts/vlayout/skins/images/close.gif" style="cursor: pointer;" alt="<?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" title="<?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="hideAllElementsByName(\'relFieldsPopupDiv\');"/>'+
												'</td>'+
											'</tr>'+
										'</table>'+
							
										'<table width="100%" cellspacing="0" cellpadding="0" border="0" class="small">'+
											'<tr>'+
												'<td>'+
													'<table width="100%" cellspacing="0" cellpadding="5" border="0" bgcolor="white" class="small">'+
														'<tr>'+
															'<td width="30%" align="left" class="cellLabel small"><?php echo vtranslate('LBL_RELATED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>'+
															'<td width="30%" align="left" class="cellText">'+
																'<select name="'+ctype+'val_'+columnIndex+'" id="'+ctype+'val_'+columnIndex+'" onChange="AddFieldToFilter('+columnIndex+',this);" class="detailedViewTextBox">'+
																	'<option value=""><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>'+
													        		'<?php echo $_smarty_tpl->tpl_vars['REL_FIELDS']->value;?>
'+
												        		'</select>'+
															'</td>'+
														'</tr>'+
													'</table>'+	
													'<!-- save cancel buttons -->'+
													'<table width="100%" cellspacing="0" cellpadding="5" border="0" class="layerPopupTransport">'+
														'<tr>'+
															'<td width="50%" align="center">'+
																'<input type="button" style="width: 70px;" value="<?php echo vtranslate('LBL_DONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" name="button" onclick="hideAllElementsByName(\'relFieldsPopupDiv\');" class="crmbutton small create" accesskey="X" title="<?php echo vtranslate('LBL_DONE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/>'+
															'</td>'+
														'</tr>'+
													'</table>'+	
												'</td>'+
											'</tr>'+
										'</table>'+
									'</td>'+
								'</tr>'+
							'</table>'+
						'</div>';
	
	node4 = document.createElement('td');
    
	node4.setAttribute('id', 'groupcolumnconditionglue_'+columnIndex);
	node4.setAttribute('width', '87px');
	newNode.appendChild(node4);
	
	node5 = document.createElement('td');
    
	node5.setAttribute('width', '30px');
	newNode.appendChild(node5);
	node5.innerHTML = '<a onclick="deleteGroupColumnRow('+groupIndex+','+columnIndex+');" href="javascript:;">'+
							'<img src="modules/ITS4YouReports/img/Delete.png" align="absmiddle" title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
..." border="0" >'+
						'</a>';

	if(typeof(gf_column_index_array[groupIndex]) == 'undefined') gf_column_index_array[groupIndex] = [];
	gf_column_index_array[groupIndex].push(columnIndex);
	gf_advft_column_index_count++;  
    }
    function addGroupColumnConditionGlue(groupIndex, columnIndex) {

	var columnConditionGlueElement = document.getElementById('groupcolumnconditionglue_'+columnIndex);
	
	if (groupIndex != "0")
	   ctype = "f";
	else
	   ctype = "g";
	
	if(columnConditionGlueElement) {		
		columnConditionGlueElement.innerHTML = "<select name='"+ctype+"groupcon"+columnIndex+"' id='"+ctype+"groupcon"+columnIndex+"' class='chzn-select chzn-done' style='display:none;width:auto'>"+
													"<option value='and'><?php echo vtranslate('LBL_AND',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
													"<option value='or'><?php echo vtranslate('LBL_OR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>"+
												"</select>";
    }
    }
</script>
<?php }} ?>