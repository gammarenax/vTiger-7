<?php /* Smarty version Smarty-3.1.7, created on 2017-10-17 12:18:18
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditGroupFields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124730385759e5f50ae4ece2-55235810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0069b8cc886705a85d60aeb2dee23f5d1f583fb2' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/EditGroupFields.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124730385759e5f50ae4ece2-55235810',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ALL_FIELDS' => 0,
    'ALL_BLOCKS' => 0,
    'QUALIFIED_MODULE' => 0,
    'RECORD_STRUCTURE' => 0,
    'BLOCK_LABEL' => 0,
    'SELECTED_MODULE_NAME' => 0,
    'BLOCK_FIELDS' => 0,
    'FIELD_NAME' => 0,
    'FIELD_MODEL' => 0,
    'DYNAMICFIELDS_RECORD_MODEL' => 0,
    'BLOCK_SEQ' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e5f50aed670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e5f50aed670')) {function content_59e5f50aed670($_smarty_tpl) {?>

<div class='hide'>
<input type='hidden' value='1' name='isgroup'>
<input type='text' value='<?php echo count($_smarty_tpl->tpl_vars['ALL_FIELDS']->value);?>
' id='new_fields' name='new_fields'>
<input type='text' value='<?php echo count($_smarty_tpl->tpl_vars['ALL_BLOCKS']->value);?>
' id='new_blocks' name='new_blocks'>
<select id='field_options'>
    <option value="0"><?php echo vtranslate("LBL_SELECT_OPTION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?>
        <optgroup label="<?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
">
                <?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option>
                <?php } ?>
        </optgroup>
    <?php } ?>
</select>
<select class="chzn-select span5" id='block_options'>
    <option value="0"><?php echo vtranslate("LBL_SELECT_OPTION",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
    <?php  $_smarty_tpl->tpl_vars['BLOCK_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value){
$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->key;
?>
        
        <option value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option>
    <?php } ?>
</select>
</div>

<div class="row-fluid">
<div class="span12">
    <div class="span8">
        <div class="row-fluid">
            <div class="span12">
                <table id='fieldsTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                    <thead>
                        <tr>
                            <th class="blockHeader" colspan="3">
                                    <?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <?php ob_start();?><?php echo vtranslate('LBL_VISIBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LABEL_VISIBLE'] = new Smarty_variable("<label class=\"muted textAlignCenter marginRight10px\">".$_tmp1."</label>", null, 0);?>
                            <?php ob_start();?><?php echo vtranslate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LABEL_MANDATORY'] = new Smarty_variable("<label class=\"muted textAlignCenter marginRight10px\">".$_tmp2."</label>", null, 0);?>
                            <td class="fieldLabel medium" style="width: 90%"></td>
                            <td class="fieldLabel medium" style="width: 10%"><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>


                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foreachfields"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["foreachfields"]['iteration']++;
?>

                            <?php $_smarty_tpl->tpl_vars['IS_MANDATORY'] = new Smarty_variable($_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->isMandatory($_smarty_tpl->tpl_vars['FIELD_NAME']->value), null, 0);?>
                            <tr id='field_tr_seq_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foreachfields']['iteration'];?>
'>
                                <?php $_smarty_tpl->tpl_vars['VISIBLE_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['DYNAMICFIELDS_RECORD_MODEL']->value->getVisibility($_smarty_tpl->tpl_vars['FIELD_NAME']->value), null, 0);?>
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</label>
                                    <input type="hidden" name="field_visibility_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foreachfields']['iteration'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
">
                                </td>
                                <td style='width:2%;vertical-align: middle;'>
                                    <a href='javascript:;'><i class="icon-trash trashField" data-type="field" data-seq='<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foreachfields']['iteration'];?>
'></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row-fluid marginBottom10px">       
            <div class="span6 btn-toolbar">
                <button class="btn addButton addField"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
            </div>
        </div>
    </div>
    <div class="span8">
        <div class="row-fluid">
            <div class="span12">
                <table id='blocksTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                    <thead>
                        <tr>
                            <th class="blockHeader" colspan="3">
                                    <?php echo vtranslate('LBL_BLOCKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                            </th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <?php ob_start();?><?php echo vtranslate('LBL_VISIBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LABEL_VISIBLE'] = new Smarty_variable("<label class=\"muted textAlignCenter marginRight10px\">".$_tmp3."</label>", null, 0);?>
                            <?php ob_start();?><?php echo vtranslate('LBL_MANDATORY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LABEL_MANDATORY'] = new Smarty_variable("<label class=\"muted textAlignCenter marginRight10px\">".$_tmp4."</label>", null, 0);?>
                            <td class="fieldLabel medium" style="width: 90%"></td>
                            <td class="fieldLabel medium" style="width: 10%"><?php echo vtranslate('LBL_ACTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
                        </tr>
                        <?php  $_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE']->_loop = false;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_BLOCKS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foreachblocks']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE']->key => $_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE']->value){
$_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE']->_loop = true;
 $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value = $_smarty_tpl->tpl_vars['BLOCK_VISIBLE_TYPE']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foreachblocks']['iteration']++;
?>

                            <tr id="block_tr_seq_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foreachblocks']['iteration'];?>
">
                                <?php $_smarty_tpl->tpl_vars['BLOCK_SEQ'] = new Smarty_variable($_smarty_tpl->getVariable('smarty')->value['foreach']['foreachblocks']['iteration'], null, 0);?>
                                <td class="fieldLabel medium" style="width: 20%;"> 
                                    <label class="muted pull-right marginRight10px"><?php echo vtranslate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</label>
                                    <input type="hidden" name="block_visibility_<?php echo $_smarty_tpl->tpl_vars['BLOCK_SEQ']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
">
                                </td>
                                <td style='width:2%;vertical-align: middle;'>
                                    <a href='javascript:;'><i class="icon-trash trashBlock" data-type="block" data-seq='<?php echo $_smarty_tpl->tpl_vars['BLOCK_SEQ']->value;?>
'></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row-fluid">       
            <div class="span8 btn-toolbar">
                <button class="btn addButton addBlock"><i class="icon-plus"></i>&nbsp;<strong><?php echo vtranslate('LBL_ADD_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
            </div>
        </div>
    </div>
    </div>
</div>
<br>
<?php }} ?>