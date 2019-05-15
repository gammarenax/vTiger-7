<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 08:50:57
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportSharing.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14106949405a0d636f3098c7-78891392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '912301b799702ab27a2aef16bbd50e7925e9a5f5' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportSharing.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14106949405a0d636f3098c7-78891392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a0d636f34f5c',
  'variables' => 
  array (
    'MODULE' => 0,
    'TEMPLATE_OWNERS' => 0,
    'TEMPLATE_OWNER' => 0,
    'SHARINGTYPES' => 0,
    'SHARINGTYPE' => 0,
    'GROUPNAME' => 0,
    'MEMBER' => 0,
    'element' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a0d636f34f5c')) {function content_5a0d636f34f5c($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/home/gammaren/www/crm.gammarenax.ch/libraries/Smarty/libs/plugins/function.html_options.php';
?>

<div class="row-fluid">       
    <div class="span9">
        <div class="row-fluid">  
            <table class="table table-bordered table-report">
                <thead>
                    <tr class="blockHeader">
                       <th colspan="2">
                            <?php echo vtranslate('LBL_SHARING_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                       </th>
                   </tr>
                </thead>
                <tbody> 
                    <tr>
                        <td class="fieldLabel medium"><label class="pull-right marginRight10px"><?php echo vtranslate("LBL_TEMPLATE_OWNER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <select name="template_owner" id="template_owner" class="classname chzn-select row-fluid" style="width: 210px;">
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TEMPLATE_OWNERS']->value,'selected'=>$_smarty_tpl->tpl_vars['TEMPLATE_OWNER']->value),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="fieldLabel medium"><label class="pull-right marginRight10px"><?php echo vtranslate("LBL_SHARING_TAB",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td>
                            <select name="sharing" id="sharing" class="classname chzn-select row-fluid" onchange="sharing_changed();" style="width: 210px;">
                                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SHARINGTYPES']->value,'selected'=>$_smarty_tpl->tpl_vars['SHARINGTYPE']->value),$_smarty_tpl);?>

                            </select>
                            <div id="sharing_share_div" style="display:none; border-top:2px dotted #DADADA; margin-top:10px; width:100%;">
                                <table width="100%"  border="0" align="center" cellpadding="5" cellspacing="0">
                                    <tr>
                                            <td width="40%" valign=top class="cellBottomDotLinePlain small"><strong><?php echo vtranslate("LBL_MEMBER_AVLBL",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td>
                                            <td width="10%">&nbsp;</td>
                                            <td width="40%" class="cellBottomDotLinePlain small"><strong><?php echo vtranslate("LBL_MEMBER_SELECTED",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></td>
                                    </tr>
                                    <tr>
                                            <td valign=top class="small">
                                                    <?php echo vtranslate("LBL_ENTITY",$_smarty_tpl->tpl_vars['MODULE']->value);?>
:&nbsp;
                                                    <select id="sharingMemberType" name="sharingMemberType" class="classname chzn-select row-fluid" onchange="showSharingMemberTypes()" style="width: 210px;">
                                                    <option value="groups" selected><?php echo vtranslate("LBL_GROUPS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                                    <option value="roles"><?php echo vtranslate("LBL_ROLES",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                                    <option value="rs"><?php echo vtranslate("LBL_ROLES_SUBORDINATES",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                                    <option value="users"><?php echo vtranslate("LBL_USERS",$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option>
                                                    </select>
                                                    <input type="hidden" name="sharingFindStr" id="sharingFindStr">&nbsp;
                                            </td>
                                            <td width="50">&nbsp;</td>
                                            <td class="small">&nbsp;</td>
                                    </tr>
                                    <tr class="small">
                                        <td valign=top><?php echo vtranslate("LBL_MEMBER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate("LBL_OF",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate("LBL_ENTITY",$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                                                <select id="sharingAvailList" name="sharingAvailList" multiple size="10" class="small crmFormList"></select>
                                        </td>
                                        <td width="50">
                                                <div align="center">
                                                        
                                                        
                                                        <a href="#" class="btn" name="sharingAddButt" onClick="sharingAddColumn()" > >> </a><br /><br />
                                                        <a href="#" class="btn" name="sharingDelButt" onClick="sharingDelColumn()" > << </a>
                                                        
                                                </div>
                                        </td>
                                        <td class="small"  valign=top><?php echo vtranslate("LBL_MEMBER",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate("LBL_OF",$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php if ($_smarty_tpl->tpl_vars['GROUPNAME']->value!=''){?>&quot;<?php echo $_smarty_tpl->tpl_vars['GROUPNAME']->value;?>
&quot;<?php }?><br>
                                                <select id="sharingSelectedColumns" name="sharingSelectedColumns" multiple size="10" class="small crmFormList">
                                                <?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MEMBER']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['element']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value[1];?>
</option>
                                                <?php } ?>
                                                </select>
                                                <input type="hidden" name="sharingSelectedColumnsString" id="sharingSelectedColumnsString" value="" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
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
                        <i class="icon-info-sign"></i>&nbsp;<?php echo vtranslate('LBL_SHARING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<br>
                       </th>
                   </tr>
                </thead>
                <tbody>    
                    <tr style="height:25px">
                        <td>
                            <div class="padding1per">
                              <span>
                                <?php echo vtranslate('LBL_STEP9_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

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