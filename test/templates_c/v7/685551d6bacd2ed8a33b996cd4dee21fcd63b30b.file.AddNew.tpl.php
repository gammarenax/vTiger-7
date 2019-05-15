<?php /* Smarty version Smarty-3.1.7, created on 2019-04-15 10:02:46
         compiled from "/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/AddNew.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21376055055cb456c6bcc5f4-84414636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685551d6bacd2ed8a33b996cd4dee21fcd63b30b' => 
    array (
      0 => '/var/www/html/gammaren7/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/AddNew.tpl',
      1 => 1555320149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21376055055cb456c6bcc5f4-84414636',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ENTITY_MODULES' => 0,
    'MODULE1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cb456c6bf2eb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cb456c6bf2eb')) {function content_5cb456c6bf2eb($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12">
    <div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;" id="relform">
        <h3 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
        <div class="row" style="margin: 1em;">


            <div class="alert alert-warning" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
                <?php echo vtranslate('notice',$_smarty_tpl->tpl_vars['MODULE']->value);?>

            </div>

        </div>


        <div>
            <h4 style="margin-top: 4em;margin-bottom: 0.5em;"><?php echo vtranslate('ADD_NEW_UPDATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
            <p><?php echo vtranslate('ADD_NEW_UPDATE_EXPLAIN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p>
            <table class="table table-bordered table-condensed themeTableColor" style="margin-top: 1em;">
                <thead>
                    <tr class="blockHeader">
                        <th colspan="4" class="mediumWidthType"><span class="alignMiddle"><?php echo vtranslate('ADD_NEW_UPDATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('Source Module',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <select name="module1"  class="chzn-select" id="module1" style="width:80%;">
                                <option value="-">--</option>
                                <?php  $_smarty_tpl->tpl_vars['MODULE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE1']->key => $_smarty_tpl->tpl_vars['MODULE1']->value){
$_smarty_tpl->tpl_vars['MODULE1']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['MODULE1']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE1']->value);?>
</option>
                                <?php } ?>
                            </select>    
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('Source Field',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <select name="picklist1"  class="picklist chzn-select" id="picklist1" style="width:80%;">
                                <option value="-">--</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('When Field Value Equals to',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <div id="fieldVal1"></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('Update Module',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <select name="module2"   class="chzn-select" id="module2" style="width:80%;">
                                <option value="-">--</option>
                                
                            </select>
                        </td>
                    </tr>
                        <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('Target Field to Update',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <select name="picklist2"  class="picklist chzn-select" id="picklist2" style="width:80%;">
                                <option value="-">--</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('Value to set',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <div id="fieldVal2"></div>
                        </td>
                    </tr>
                    <tr>
                        <td width="50%" colspan="2"><label class="muted pull-right marginRight10px"><?php echo vtranslate('First Time the condition is true',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td>
                        <td colspan="2" style="border-left: none;">
                            <input type="checkbox" id="firstcond" name="firstcond"></input>
                        </td>
                    </tr>

                    

                </tbody>
            </table>
        
            <br><br>
            <button class="btn pull-right" style="margin-bottom: 0.5em;" id="add_entry"><?php echo vtranslate('SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
            <a class="pull-right" style="margin-right: 2%;" href="javascript:history.go(-1)"><?php echo vtranslate('Cancel',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
        
        </div>
    </div>
</div>
<?php }} ?>