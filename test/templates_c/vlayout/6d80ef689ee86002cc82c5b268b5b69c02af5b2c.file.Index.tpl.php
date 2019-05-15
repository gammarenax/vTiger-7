<?php /* Smarty version Smarty-3.1.7, created on 2017-10-28 09:00:38
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/GreenTimeControl/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190015455259f44736e8d342-56359197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d80ef689ee86002cc82c5b268b5b69c02af5b2c' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/GreenTimeControl/Index.tpl',
      1 => 1508597451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190015455259f44736e8d342-56359197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'MODULE' => 0,
    'DEFAULT_COLOR' => 0,
    'PICKLIST_FIELDS' => 0,
    'CURRENT_FIELD_NAME' => 0,
    'count' => 0,
    'FIELD_NAME' => 0,
    'FIELD_MODEL' => 0,
    'CURRENT_FIELD_COLORS' => 0,
    'PICKLIST_VALUES' => 0,
    'label' => 0,
    'seq' => 0,
    'value' => 0,
    'TEMP_CURRENT_FIELD_NAME' => 0,
    'LINEITEM_MODULES' => 0,
    'LINEITEM_MODULE' => 0,
    'DEFAULT_MODULE' => 0,
    'LINEITEM_ISACTIVE' => 0,
    'TIMECONTROLVIEWS' => 0,
    'TIMECONTROLVIEW' => 0,
    'DEFAULTVIEW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59f44737142d2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f44737142d2')) {function content_59f44737142d2($_smarty_tpl) {?>

<style type="text/css">
    #defaultColor {
        background: rgba(0, 0, 0, 0) url("libraries/jquery/colorpicker/images/select2.png") repeat scroll 0 0;
        height: 34px;
        position: relative;
        width: 34px;
    }
    #defaultColor div {
        background: rgba(0, 0, 0, 0) url("libraries/jquery/colorpicker/images/select2.png") repeat scroll center center;
        height: 30px;
        left: 3px;
        position: absolute;
        top: 3px;
        width: 30px;
    }
    .pickListValueColor {
        background: rgba(0, 0, 0, 0) url("libraries/jquery/colorpicker/images/select2.png") repeat scroll 0 0;
        height: 34px;
        position: relative;
        width: 34px;
    }
    .pickListValueColor div {
        background: rgba(0, 0, 0, 0) url("libraries/jquery/colorpicker/images/select2.png") repeat scroll center center;
        height: 30px;
        left: 3px;
        position: absolute;
        top: 3px;
        width: 30px;
    }
</style>

<div class="container-fluid">

    <div class="tabbable" style="margin-top: 20px;">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#itm-color-config" data-toggle="tab" style="font-weight: bold;">
                    <?php echo vtranslate('LBL_ITM_TIMECONTROLLER_COLOR_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                </a></li>
            <li><a href="#itm-default-lineitem-module" style="font-weight: bold;" data-toggle="tab"> <?php echo vtranslate('LBL_ITM_TIMECONTROLLER_ITEM_DEFAULT_MODULE_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li>
            <li><a href="#itm-is-lineitem-enable" style="font-weight: bold;" data-toggle="tab"> <?php echo vtranslate('LBL_ITM_TIMECONTROLLER_LINEITEM_CONFIG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li>
            <li><a href="#itm-default-view" style="font-weight: bold;" data-toggle="tab"> <?php echo vtranslate('LBL_ITM_TIMECONTROLLER_DEFAULT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="itm-color-config">
                <form id="GreenTimeColor" name="GreenTimeColor" action="" method="post">
                    <div class="contentHeader row-fluid">
                        <span class="pull-right">
                            <button type="button" id="ITMTimeControlSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                            <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
                        </span>
                    </div>
                    <hr>
                    <div class="clearfix"></div>

                    <div class="listViewContentDiv row-fluid" id="listViewContents">
                        <input name="defaultColor" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_COLOR']->value;?>
" type="hidden"/>
                        <table class="table">
                            <tr>
                                <td class="fieldLabel medium"><strong><?php echo vtranslate('LBL_PICK_LIST_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td>
                                <td class="fieldValue medium" colspan="3">
                                    <select name="fieldName" class="chzn-select">
                                        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?>
                                            <?php if (!$_smarty_tpl->tpl_vars['CURRENT_FIELD_NAME']->value&&$_smarty_tpl->tpl_vars['count']->value==1){?>
                                                <?php $_smarty_tpl->tpl_vars['TEMP_CURRENT_FIELD_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_NAME']->value, null, 0);?>
                                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(2, null, 0);?>
                                            <?php }?>
                                            <?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), null, 0);?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CURRENT_FIELD_NAME']->value==$_smarty_tpl->tpl_vars['FIELD_NAME']->value){?>selected <?php if ($_smarty_tpl->tpl_vars['CURRENT_FIELD_NAME']->value){?>data-colors='<?php echo json_encode($_smarty_tpl->tpl_vars['CURRENT_FIELD_COLORS']->value);?>
' <?php }?> <?php }?>  data-values='<?php echo json_encode($_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value);?>
'><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                        <?php } ?>
                                    </select>
                                </td>
                                

                                
                            </tr>
                        </table>
                        <table class="table table-bordered equalSplit picklist-values-table">
                            <thead>
                                <tr>
                                    <th class="blockHeader" colspan="4">
                                        <?php echo vtranslate('LBL_PICKLIST_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($_smarty_tpl->tpl_vars['CURRENT_FIELD_NAME']->value){?>
                                    <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['seq'] = new Smarty_variable(1, null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value[$_smarty_tpl->tpl_vars['CURRENT_FIELD_NAME']->value], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['count']->value==2){?>
                                        </tr><tr>
                                        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                                    <?php }elseif($_smarty_tpl->tpl_vars['count']->value==1){?>
                                        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(2, null, 0);?>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['count']->value==0){?>
                                    <tr>
                                        <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                                    <?php }?>
                                    <td class="fieldLabel medium"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
<input name="fieldValue_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" type="hidden"/></td>
                                    <td class="fieldValue medium">
                                        <div id="pickListValueColor_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" class="pickListValueColor">
                                            <div style="background-color: <?php echo $_smarty_tpl->tpl_vars['CURRENT_FIELD_COLORS']->value[$_smarty_tpl->tpl_vars['value']->value];?>
"></div>
                                        </div>
                                        <input name="pickListValueColor_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_FIELD_COLORS']->value[$_smarty_tpl->tpl_vars['value']->value];?>
" type="hidden"/>
                                    </td>
                                    <?php $_smarty_tpl->tpl_vars['seq'] = new Smarty_variable($_smarty_tpl->tpl_vars['seq']->value+1, null, 0);?>
                                <?php } ?>
                                <?php if ($_smarty_tpl->tpl_vars['count']->value==1){?>
                                    <td class="fieldLabel medium"></td><td class="fieldLabel medium"></td>
                                    <?php }?>
                                </td></tr>
                            <?php }else{ ?>
                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['seq'] = new Smarty_variable(1, null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['PICKLIST_FIELDS']->value[$_smarty_tpl->tpl_vars['TEMP_CURRENT_FIELD_NAME']->value], null, 0);?>
                                <?php $_smarty_tpl->tpl_vars['PICKLIST_VALUES'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues(), null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['label'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['label']->_loop = false;
 $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['label']->key => $_smarty_tpl->tpl_vars['label']->value){
$_smarty_tpl->tpl_vars['label']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->value = $_smarty_tpl->tpl_vars['label']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['count']->value==2){?>
                                </tr><tr>
                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                            <?php }elseif($_smarty_tpl->tpl_vars['count']->value==1){?>
                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(2, null, 0);?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['count']->value==0){?>
                            <tr>
                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                            <?php }?>
                            <td class="fieldLabel medium"><?php echo $_smarty_tpl->tpl_vars['label']->value;?>
<input name="fieldValue_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" type="hidden"/></td>
                            <td class="fieldValue medium">
                                <div id="pickListValueColor_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" class="pickListValueColor">
                                    <div style="background-color: <?php echo $_smarty_tpl->tpl_vars['DEFAULT_COLOR']->value;?>
"></div>
                                </div>
                                <input name="pickListValueColor_<?php echo $_smarty_tpl->tpl_vars['seq']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_COLOR']->value;?>
" type="hidden"/>
                            </td>
                            <?php $_smarty_tpl->tpl_vars['seq'] = new Smarty_variable($_smarty_tpl->tpl_vars['seq']->value+1, null, 0);?>
                        <?php } ?>
                        <?php if ($_smarty_tpl->tpl_vars['count']->value==1){?>
                            <td class="fieldLabel medium"></td><td class="fieldLabel medium"></td>
                            <?php }?>
                        </td></tr>
                    <?php }?>
            </tbody>
        </table>
    </div>
    <div class="contentHeader row-fluid">
        <span class="pull-right">
            <button type="button" id="ITMTimeControlSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
            <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
        </span>
    </div>
</form>
</div>
<div class="tab-pane" id="itm-default-lineitem-module">
    <form id="ITMTimeItemModule" name="ITMTimeItemModule" action="" method="post">
        <div class="contentHeader row-fluid">
            <span class="pull-right">
                <button type="button" id="ITMTimeItemModuleSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
            </span>
        </div>
        <hr>
        <div class="clearfix"></div>

        <div class="listViewContentDiv row-fluid" id="listViewContents">
            <table class="table">
                <tr>
                    <td class="fieldLabel medium"><strong><?php echo vtranslate('LBL_SELECT_A_MODULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td>
                    <td class="fieldValue medium" colspan="3">
                        <select name="defaultModuleName" class="chzn-select">
                            <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['LINEITEM_MODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINEITEM_MODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LINEITEM_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINEITEM_MODULE']->key => $_smarty_tpl->tpl_vars['LINEITEM_MODULE']->value){
$_smarty_tpl->tpl_vars['LINEITEM_MODULE']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['LINEITEM_MODULE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_MODULE']->value==$_smarty_tpl->tpl_vars['DEFAULT_MODULE']->value){?>selected="selected" <?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['LINEITEM_MODULE']->value,$_smarty_tpl->tpl_vars['LINEITEM_MODULE']->value);?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
        <div class="contentHeader row-fluid">
            <span class="pull-right">
                <button type="button" id="ITMTimeItemModuleSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
            </span>
        </div>
    </form>
</div>

<div class="tab-pane" id="itm-is-lineitem-enable">
    <form id="ITMTimeItemIsActive" name="ITMTimeItemIsActive" action="" method="post">
        <div class="contentHeader row-fluid">
            <span class="pull-right">
                <button type="button" id="ITMTimeItemIsActiveSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
            </span>
        </div>
        <hr>
        <div class="clearfix"></div>

        <div class="listViewContentDiv row-fluid" id="listViewContents">
            <table class="table">
                <tr>
                    <td class="fieldLabel medium"><strong><?php echo vtranslate('LBL_LINEITEM_IS_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></td>
                    <td class="fieldValue medium" colspan="3">
                        <input type="checkbox" name="lineitem_isactive" <?php if ($_smarty_tpl->tpl_vars['LINEITEM_ISACTIVE']->value==1){?>checked="checked"<?php }?>/>
                    </td>
                </tr>
            </table>
        </div>
        <div class="contentHeader row-fluid">
            <span class="pull-right">
                <button type="button" id="ITMTimeItemIsActiveSave" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
                <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
            </span>
        </div>
    </form>
</div>
<div class="tab-pane" id="itm-default-view">
    <form id="ITMDefaultView" name="ITMDefaultView" action="" method="post">
    Select Calendar View &nbsp;<select name="gt_default_view">
         <?php  $_smarty_tpl->tpl_vars['TIMECONTROLVIEW'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TIMECONTROLVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->key => $_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->value){
$_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->value==$_smarty_tpl->tpl_vars['DEFAULTVIEW']->value){?>selected="selected" <?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['TIMECONTROLVIEW']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                            <?php } ?>

    </select>
        <div class="contentHeader row-fluid">
        <span class="pull-right">
            <button type="button" id="ITMDefaultViewSave" class="btn btn-success">
                <strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
            <a class="cancelLink" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
        </span>
    </div>
    </form>
</div>
</div>
</div>

</div><?php }} ?>