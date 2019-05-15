<?php /* Smarty version Smarty-3.1.7, created on 2019-05-13 11:46:03
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16181476785cd958fbe3ca12-39006176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e916f5dea499a0d063ca6f2d8e779ba4c7168b' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/Settings/ITS4YouDynamicFields/ListViewContents.tpl',
      1 => 1557336054,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16181476785cd958fbe3ca12-39006176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGING_MODEL' => 0,
    'LISTVIEW_COUNT' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'PAGE_NUMBER' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'MODULE' => 0,
    'TAB' => 0,
    'QUALIFIED_MODULE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'LISTVIEW_HEADER' => 0,
    'WIDTH' => 0,
    'COLUMN_NAME' => 0,
    'NEXT_SORT_ORDER' => 0,
    'SORT_IMAGE' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'ALL_MODULES' => 0,
    'S_MODULE_MODEL' => 0,
    'DEFAULT_MODULES_LIST' => 0,
    'IS_SAVED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd958fbe7734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd958fbe7734')) {function content_5cd958fbe7734($_smarty_tpl) {?>
<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" />
<input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" />
<input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" />
<input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" />
<input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder">
<input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" />
<input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" id='pageNumber'>
<input type='hidden' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
" id='pageLimit'>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" id="noOfEntries">

<div class="listViewEntriesDiv" style='overflow-x:auto;'>

    <div class="col-sm-12 col-xs-12 ">
        <span class="listViewLoadingImageBlock hide modal" id="loadingListViewModal">
            <img class="listViewLoadingImage" src="<?php echo vimage_path('loading.gif');?>
" alt="no-image" title="<?php echo vtranslate('LBL_LOADING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/>
            <p class="listViewLoadingMsg"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p>
        </span>

        <ul class="nav nav-tabs massEditTabs">
            <li <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="layout"){?>class="active"<?php }?>><a href="#dynamicActions" data-toggle="tab"><strong><?php echo vtranslate('LBL_DYNAMIC_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="group"){?>class="active"<?php }?>><a href="#fieldsGroups" data-toggle="tab"><strong><?php echo vtranslate('LBL_FIELDS_GROUPS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li>
            <li <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="default"){?>class="active"<?php }?>><a href="#defaultForms" data-toggle="tab"><strong><?php echo vtranslate('LBL_DEFAULT_FORMS_TAB',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></a></li>
        </ul>
        <div class="tab-content layoutContent  themeTableColor overflowVisible">
            <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="layout"){?>active<?php }?>" id="dynamicActions">
                <div class="table-container">
                    <table class="table listview-table" style="table-layout: fixed">
                        <thead>
                        <tr class="listViewContentHeader">
                            <th></th>
                            <?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?>

                                <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')=="description"){?>
                                    <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-lg-8 col-xs-8 col-sm-8", null, 0);?>
                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-lg-2 col-xs-2 col-sm-2", null, 0);?>
                                <?php }?>

                                <th class="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
" nowrap>
                                    <a  <?php if (!($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->has('sort'))){?> class="listViewHeaderValues cursorPointer" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                                        <?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a>
                                </th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('isgroup')=="0"){?>
                                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewContent.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FOLLOWS_UP_ID'=>$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId(),'LEVEL'=>'0','LISTVIEW_TYPE'=>'FieldsLayout'), 0);?>

                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            

            <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="group"){?>active<?php }?>" id="fieldsGroups">

                <div class="table-container">
                    <table class="table listview-table" style="table-layout: fixed">
                        <thead>
                        <tr class="listViewContentHeader">
                            <th></th>
                            <?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?>

                                <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')=="description"){?>
                                    <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-lg-8 col-xs-8 col-sm-8", null, 0);?>
                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['WIDTH'] = new Smarty_variable("col-lg-2 col-xs-2 col-sm-2", null, 0);?>
                                <?php }?>

                                <th class="<?php echo $_smarty_tpl->tpl_vars['WIDTH']->value;?>
">
                                    <a  <?php if (!($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->has('sort'))){?> class="listViewHeaderValues cursorPointer" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name');?>
" <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                                        <?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value->get('name')){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a>
                                </th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value[0]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('isgroup')=="1"){?>
                                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewContent.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FOLLOWS_UP_ID'=>$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId(),'LEVEL'=>'0','LISTVIEW_TYPE'=>'FieldsGroup'), 0);?>

                            <?php }?>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['TAB']->value=="default"){?>active<?php }?>" id="defaultForms">
                <div class="col-lg-4 col-sm-6 col-xs-8">
                    <div class="table-container">
                        <table class="table listview-table">
                            <thead>
                            <tr class="listViewContentHeader">
                                <th width="50px">&nbsp;</th>
                                <th>
                                    <?php echo vtranslate("LBL_MODULE",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

                                </th>
                            </tr>
                            </thead>
                            <?php  $_smarty_tpl->tpl_vars['S_MODULE_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['TAB_ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ALL_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->key => $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value){
$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['TAB_ID']->value = $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->key;
?>

                                <?php if ($_smarty_tpl->tpl_vars['DEFAULT_MODULES_LIST']->value[$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName()]!=''){?>
                                    <?php $_smarty_tpl->tpl_vars['IS_SAVED'] = new Smarty_variable("yes", null, 0);?>
                                <?php }else{ ?>
                                    <?php $_smarty_tpl->tpl_vars['IS_SAVED'] = new Smarty_variable("no", null, 0);?>
                                <?php }?>


                                <tr class="listViewEntries" <?php if ($_smarty_tpl->tpl_vars['IS_SAVED']->value=="no"){?>style="font-style:italic;"<?php }?> data-id="<?php if ($_smarty_tpl->tpl_vars['IS_SAVED']->value=="yes"){?><?php echo $_smarty_tpl->tpl_vars['DEFAULT_MODULES_LIST']->value[$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName()]->getId();?>
<?php }?>" data-recordurl="index.php?module=ITS4YouDynamicFields&view=Edit&mode=DefaultForm&parent=Settings&sourceModule=<?php echo $_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName();?>
">
                                    <td width="50px">
                                        <div >
                                            <span class="actionsRecordButton" style="opacity: 0; padding: 0 5px; padding: 0 5px;">
                                                <?php if ($_smarty_tpl->tpl_vars['IS_SAVED']->value=="yes"){?>
                                                    <a class="deleteRecordButton" style="padding: 0 5px;">
                                                        <i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i>
                                                    </a>
                                                <?php }?>
                                                
                                            </span>
                                        </div>
                                    </td>
                                    <td class="listViewEntryValue " <?php if ($_smarty_tpl->tpl_vars['IS_SAVED']->value=="no"){?>style="color:#888;"<?php }?> nowrap>
                                        <?php echo vtranslate($_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName(),$_smarty_tpl->tpl_vars['S_MODULE_MODEL']->value->getName());?>

                                    </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>