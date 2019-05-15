<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 11:33:14
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/ListViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20385676835cb46bfacf4cc0-80266228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd024b676dba80e02393f210d4360a946bcb04ec3' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/ITS4YouReports/ListViewActions.tpl',
      1 => 1555322855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20385676835cb46bfacf4cc0-80266228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_MASSACTIONS' => 0,
    'LIST_MASSACTION' => 0,
    'LISTVIEW_MASSACTIONS_1' => 0,
    'deleteAction' => 0,
    'MODULE' => 0,
    'VERSION_TYPE' => 0,
    'IS_ADMIN' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb46bfad30ac',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb46bfad30ac')) {function content_5cb46bfad30ac($_smarty_tpl) {?>
<div id="listview-actions" class="listview-actions-container">
    <?php  $_smarty_tpl->tpl_vars['LIST_MASSACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LIST_MASSACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LIST_MASSACTION']->key => $_smarty_tpl->tpl_vars['LIST_MASSACTION']->value){
$_smarty_tpl->tpl_vars['LIST_MASSACTION']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value->getLabel()=='LBL_EDIT'){?>
            <?php $_smarty_tpl->tpl_vars['editAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value, null, 0);?>
        <?php }elseif($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value->getLabel()=='LBL_DELETE'){?>
            <?php $_smarty_tpl->tpl_vars['deleteAction'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIST_MASSACTION']->value, null, 0);?>
        <?php }else{ ?>
            <?php $_smarty_tpl->tpl_vars['a'] = new Smarty_variable(array_push($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS_1']->value,$_smarty_tpl->tpl_vars['LIST_MASSACTION']->value), null, 0);?>
            
        <?php }?>
    <?php } ?>
    <div class="row">
        <div class="col-md-3">
            <div class="btn-group listViewActionsContainer" role="group" aria-label="...">
                <?php if ($_smarty_tpl->tpl_vars['deleteAction']->value){?>
                    <button type="button" class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_LBL_MOVE_REPORT"
                            onclick='<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_List_Js.massMove("index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=MoveReports")' title="<?php echo vtranslate('LBL_MOVE_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" disabled="disabled">
                        <i class="vicon-foldermove" style='font-size:13px;'></i>
                    </button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['deleteAction']->value){?>
                    <button type="button" class="btn btn-default" id=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo $_smarty_tpl->tpl_vars['deleteAction']->value->getLabel();?>

                        <?php if (stripos($_smarty_tpl->tpl_vars['deleteAction']->value->getUrl(),'javascript:')===0){?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['deleteAction']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick="Vtiger_List_Js.triggerMassAction('<?php echo $_smarty_tpl->tpl_vars['deleteAction']->value->getUrl();?>
')"<?php }?>
                            title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" disabled="disabled"
                            style="margin-left:5px;" >
                        <i class="fa fa-trash"></i>
                    </button>
                <?php }?>
            </div>
        </div>
        <div class="col-md-6">
            <span class="customFilterMainSpan btn-group">
                <?php if ($_smarty_tpl->tpl_vars['VERSION_TYPE']->value=="deactivate"||$_smarty_tpl->tpl_vars['VERSION_TYPE']->value==''){?>
                    <span class="btn-group">
                    <?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value=="1"){?>
                        <a href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=License'>
                            <span class="btn btn-danger">
                                <?php echo vtranslate("LBL_ACTIVATE_BTN",$_smarty_tpl->tpl_vars['MODULE']->value);?>

                            </span>
                        </a>
                    <?php }else{ ?>
                        <div class='alert alert-danger margin0px'>
                            <?php echo vtranslate("LBL_ACTIVATE_BTN",$_smarty_tpl->tpl_vars['MODULE']->value);?>

                        </div>
                    <?php }?>
                    </span>
                <?php }?>
            </span>
        </div>
        <div class="col-md-3">
            <?php $_smarty_tpl->tpl_vars['RECORD_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value, null, 0);?>
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Pagination.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SHOWPAGEJUMP'=>true), 0);?>

        </div>
    </div>
</div><?php }} ?>