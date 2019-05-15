<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:04:15
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/ListViewContent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195773865759bbebef8a30b2-28403922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b1a3d2cf8bfde2b0221a9ebaeebb934f67b025' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouDynamicFields/ListViewContent.tpl',
      1 => 1505485621,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195773865759bbebef8a30b2-28403922',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_ENTRY' => 0,
    'LISTVIEW_TYPE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'LISTVIEW_HEADERNAME' => 0,
    'WIDTHTYPE' => 0,
    'WIDTH' => 0,
    'LEVEL' => 0,
    'LISTVIEW_VALUE' => 0,
    'LAST_COLUMN' => 0,
    'RECORD_LINK' => 0,
    'RECORD_LINK_URL' => 0,
    'QUALIFIED_MODULE' => 0,
    'FOLLOWS_UP_ID' => 0,
    'LISTVIEW_ENTRIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbebef9a9d2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbebef9a9d2')) {function content_59bbebef9a9d2($_smarty_tpl) {?><tr class="listViewEntries" data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" <?php if (method_exists($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value,'getDetailViewUrl')){?>data-recordurl="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl($_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value);?>
"<?php }?>>
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
                <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable(50, null, 0);?>
            <?php }else{ ?>
                <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable(30, null, 0);?>
            <?php }?>  

            <td class="listViewEntryValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" width="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
%" nowrap>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['tdentries']['index']==0){?>
                <?php echo str_repeat('&nbsp;',(6*$_smarty_tpl->tpl_vars['LEVEL']->value));?>

                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_VALUE']->value;?>

                    <?php if ($_smarty_tpl->tpl_vars['LAST_COLUMN']->value&&$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks($_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value)){?>
                            </td><td nowrap class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
">
                                    <div class="pull-right actions">
                                            <span class="actionImages">
                                                    <?php  $_smarty_tpl->tpl_vars['RECORD_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks($_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['RECORD_LINK']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['RECORD_LINK']->key => $_smarty_tpl->tpl_vars['RECORD_LINK']->value){
$_smarty_tpl->tpl_vars['RECORD_LINK']->_loop = true;
 $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration++;
 $_smarty_tpl->tpl_vars['RECORD_LINK']->last = $_smarty_tpl->tpl_vars['RECORD_LINK']->iteration === $_smarty_tpl->tpl_vars['RECORD_LINK']->total;
?>
                                                            <?php $_smarty_tpl->tpl_vars["RECORD_LINK_URL"] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getUrl(), null, 0);?>

                                                            <a <?php if (stripos($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,'javascript:')===0){?> onclick="<?php echo substr($_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value,strlen("javascript:"));?>
;if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}" <?php }else{ ?> href='<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK_URL']->value;?>
' <?php }?>>
                                                                    <i class="<?php echo $_smarty_tpl->tpl_vars['RECORD_LINK']->value->getIcon();?>
 alignMiddle" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['RECORD_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></i>
                                                            </a>
                                                            <?php if (!$_smarty_tpl->tpl_vars['RECORD_LINK']->last){?>
                                                                    &nbsp;&nbsp;
                                                            <?php }?>
                                                    <?php } ?>
                                            </span>
                                    </div>
                            </td>
                    <?php }?>
            </td>
    <?php } ?>
</tr>

<?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value[$_smarty_tpl->tpl_vars['FOLLOWS_UP_ID']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
?>
    <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewContent.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FOLLOWS_UP_ID'=>$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId(),'LEVEL'=>($_smarty_tpl->tpl_vars['LEVEL']->value+1),'LISTVIEW_TYPE'=>$_smarty_tpl->tpl_vars['LISTVIEW_TYPE']->value), 0);?>

<?php } ?><?php }} ?>