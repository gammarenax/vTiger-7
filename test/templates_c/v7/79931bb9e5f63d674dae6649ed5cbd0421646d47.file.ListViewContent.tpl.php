<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 09:57:51
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/ListViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15883445845cb4559f8fa060-30988114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79931bb9e5f63d674dae6649ed5cbd0421646d47' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/ListViewContent.tpl',
      1 => 1555320277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15883445845cb4559f8fa060-30988114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'LISTVIEW_TYPE' => 0,
    'MODULE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'LISTVIEW_HEADERNAME' => 0,
    'WIDTH' => 0,
    'LEVEL' => 0,
    'LISTVIEW_VALUE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb4559f928a8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb4559f928a8')) {function content_5cb4559f928a8($_smarty_tpl) {?>
<tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" <?php if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')){?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl($_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value);?>
"<?php }?>>

    <td>
        <div style="width:120px ;">
            <span class="actionsRecordButton" style="opacity: 0; padding: 0 5px; padding: 0 5px;">
                <a class="deleteRecordButton" style="padding: 0 5px;">
                    <i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i>
                </a>
                <a class="editRecordButton" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" href="javascript:void(0);" data-url="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getEditViewUrl($_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value);?>
" name="editlink">
                    <i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-pencil alignMiddle"></i>
                </a>
            </span>
        </div>
    </td>

    <?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tdentries"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["tdentries"]['index']++;
?>
        <?php $_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name'), null, 0);?>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDisplayValue($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['LISTVIEW_VALUE'] = new Smarty_variable($_tmp1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['LAST_COLUMN'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last, null, 0);?>

        <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value=="description"){?>
            <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-xs-8 col-sm-8", null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-xs-2 col-sm-2", null, 0);?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADERNAME']->value=="description"&&$_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value=="DefaulFields"){?>
        <?php }else{ ?>
            <td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
" nowrap>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tdentries']['index']==0){?>
                <?php echo str_repeat('&nbsp;',(6*$_smarty_tpl->tpl_vars['LEVEL']->value));?>

                <?php }?>
               &nbsp;<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_VALUE']->value;?>

            </td>
        <?php }?>
    <?php } ?>
</tr><?php }} ?>