<?php /* Smarty version Smarty-3.1.7, created on 2017-09-20 12:19:28
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/CustomLabels.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192329982659c25cd0c84077-57174020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa38cb59080c0dc673fba69d80a51599e5c438d8' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/CustomLabels.tpl',
      1 => 1505401257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192329982659c25cd0c84077-57174020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CURR_LANG' => 0,
    'LABELS' => 0,
    'label_id' => 0,
    'label_value' => 0,
    'lang_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c25cd0cbbb7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c25cd0cbbb7')) {function content_59c25cd0cbbb7($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/EMAILMaker/resources/CustomLabels.js"></script>
<div class="container-fluid" id="CustomLabelsContainer">
    <form name="custom_labels" action="index.php" method="post" class="form-horizontal">
    <input type="hidden" name="module" value="EMAILMaker" />
    <input type="hidden" name="action" value="IndexAjax" />
    <input type="hidden" name="mode" value="DeleteCustomLabels" />
    <input type="hidden" name="newItems" value="" />
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_CUSTOM_LABELS','EMAILMaker');?>
</label>
    <br clear="all"><?php echo vtranslate('LBL_CUSTOM_LABELS_DESC','EMAILMaker');?>

    <hr>
    <br />
    <div class="row-fluid">
        <label class="fieldLabel"><strong><?php echo vtranslate('LBL_DEFINE_CUSTOM_LABELS','EMAILMaker');?>
:</strong></label><br>    
        <div class="row-fluid">           
            <button type="button" class="btn btn-danger span1 marginLeftZero" onclick="confirm_delete();"><?php echo vtranslate('LBL_DELETE');?>
</button>    
            <div class="pull-right btn-group">
                <button type="button" class="addCustomLabel btn addButton marginLeftZero" data-url="?module=EMAILMaker&view=IndexAjax&mode=editCustomLabel"><i class="icon-plus icon-white"></i>&nbsp;<strong> <?php echo vtranslate('LBL_ADD');?>
</strong></button>
                
                <button type="reset" class="btn span1 marginLeftZero" onClick="window.history.back();"><?php echo vtranslate('LBL_CANCEL');?>
</button>
            </div>  
        </div>    
        <div class="pushDownHalfper">    
            <table id="CustomLabelTable" class="table table-bordered table-condensed CustomLabelTable" style="padding:0px;margin:0px" id="lbltbl">
            <thead>
                <tr class="blockHeader">
                    <th style="border-left: 1px solid #DDD !important;" width="4%" align="center"><input type="checkbox" name="chx_all" onclick="checkedAll(this);"/></th>
                    <th style="border-left: 1px solid #DDD !important;" width="30%"><?php echo vtranslate('LBL_KEY','EMAILMaker');?>
</th>
                    <th style="border-left: 1px solid #DDD !important;" width="50%" colspan="2"><?php echo vtranslate('LBL_CURR_LANG_VALUE','EMAILMaker');?>
 (<?php echo $_smarty_tpl->tpl_vars['CURR_LANG']->value['label'];?>
)</th>
                    <th style="border-left: 1px solid #DDD !important;" width="16%" align="center"><?php echo vtranslate('LBL_OTHER_LANG_VALUES','EMAILMaker');?>
</th>
                </tr>
            </thead>
            <tbody>
            <script type="text/javascript" language="javascript">var existingKeys = new Array();</script>
            <?php $_smarty_tpl->tpl_vars["lang_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['CURR_LANG']->value['id'], null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['label_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label_value']->_loop = false;
 $_smarty_tpl->tpl_vars['label_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LABELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lbl_foreach']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['label_value']->key => $_smarty_tpl->tpl_vars['label_value']->value){
$_smarty_tpl->tpl_vars['label_value']->_loop = true;
 $_smarty_tpl->tpl_vars['label_id']->value = $_smarty_tpl->tpl_vars['label_value']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['lbl_foreach']['index']++;
?>
                <tr class="opacity">
                    <td><input type="checkbox" name="chx_<?php echo $_smarty_tpl->tpl_vars['label_id']->value;?>
" id="chx_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['lbl_foreach']['index'];?>
"/></td>
                    <td><label class="CustomLabelKey textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['label_value']->value['key'];?>
</label></td>
                    <td><label class="CustomLabelValue textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['label_value']->value['lang_values'][$_smarty_tpl->tpl_vars['lang_id']->value];?>
</label></td>
                    <td style="border-left: none;">
                        <div class="pull-right actions">
                            <a class="editCustomLabel cursorPointer" data-url="?module=EMAILMaker&view=IndexAjax&mode=editCustomLabel&labelid=<?php echo $_smarty_tpl->tpl_vars['label_id']->value;?>
&langid=<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
">
                                <i title="Edit" class="icon-pencil alignBottom"></i></a>&nbsp;
                        </div>
                    </td>
                    <td><a class="showCustomLabelValues textOverflowEllipsis cursorPointer" data-url="?module=EMAILMaker&view=IndexAjax&mode=showCustomLabelValues&labelid=<?php echo $_smarty_tpl->tpl_vars['label_id']->value;?>
&langid=<?php echo $_smarty_tpl->tpl_vars['lang_id']->value;?>
"><?php echo vtranslate('LBL_OTHER_VALS','EMAILMaker');?>
</a></td>
                </tr>
            <?php }
if (!$_smarty_tpl->tpl_vars['label_value']->_loop) {
?>
                <tr id="noItemFountTr"><td colspan="3" class="cellText" align="center" style="padding:10px;"><strong><?php echo vtranslate('LBL_NO_ITEM_FOUND','EMAILMaker');?>
</strong></td></tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
        <div id="otherLangsDiv" style="display:none; width:350px; position:absolute;" class="layerPopup"></div>    
        <div class="row-fluid pushDownHalfper">    
            <button type="button" class="btn btn-danger span1 marginLeftZero" onclick="confirm_delete();"><?php echo vtranslate('LBL_DELETE');?>
</button>    
            <div class="pull-right btn-group">
                <button type="button" class="addCustomLabel btn addButton marginLeftZero" data-url="?module=EMAILMaker&view=IndexAjax&mode=editCustomLabel"><i class="icon-plus icon-white"></i>&nbsp;<strong> <?php echo vtranslate('LBL_ADD');?>
</strong></button>
                
                <button type="reset" class="btn span1 marginLeftZero" onClick="window.history.back();"><?php echo vtranslate('LBL_CANCEL');?>
</button>
            </div>  
        </div>
    </div>
</form>
</div>
<script type="text/javascript" language="javascript">

function checkedAll(oTrigger){
    var tableName = document.getElementById('CustomLabelTable');
    totalNoOfRows = tableName.rows.length;
    ControlRows = totalNoOfRows - 1;        
    for(i = 0; i < ControlRows; i++){
        var tmpChx = document.getElementById('chx_' + i);
        if(tmpChx != 'undefined'){
            tmpChx.checked = oTrigger.checked;
        }
    }
}
function confirm_delete(){
   var tableName = document.getElementById('CustomLabelTable');
    totalNoOfRows = tableName.rows.length;
    ControlRows = totalNoOfRows - 1;        
    var toDelete = 0;
    for(i = 0; i < ControlRows; i++){
        var tmpChx = document.getElementById('chx_' + i); 
        if(tmpChx != 'undefined'){
            if(tmpChx.checked == true)
                toDelete++;
        }
    }    
    if(toDelete > 0){
        var message = app.vtranslate('LBL_MASS_DELETE_CONFIRMATION');
        Vtiger_Helper_Js.showConfirmationBox({'message': message}).then(function(data){
                document.custom_labels.submit();
            },
            function(error, err){
            }
        );
    }
}

EMAILMaker_CustomLabelsJs.registerEvents();
</script><?php }} ?>