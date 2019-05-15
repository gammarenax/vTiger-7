<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 17:31:41
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/IndexSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544519145cd3127d8c6809-69428402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64ba07d8f29492983b6605ff4ba91419616f8675' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/IndexSettings.tpl',
      1 => 1557319807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544519145cd3127d8c6809-69428402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'RMU_FIELDS_ARRAY' => 0,
    'RMU_FIELDS' => 0,
    'IS_VALIDATED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd3127d94659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd3127d94659')) {function content_5cd3127d94659($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12">
    <div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;">
        <h3 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
        <div class="row" style="margin: 1em;">


            <div class="alert alert-warning" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%; display:none;">
                <?php echo vtranslate('notice',$_smarty_tpl->tpl_vars['MODULE']->value);?>

            </div>

        </div>

    </div>
    <div>

        <div style="width: 80%;margin: auto;margin-top: 2%;">
            <div style="width:100%; height: 1%;margin-bottom: 2%;"><button class="btn pull-right" style="margin-bottom: 0.5em;" id="Contacts_detailView_basicAction_LBL_EDIT" onclick="window.location.href = 'index.php?module=VGSRelModUpdates&view=AddNew&parent=Settings'"><?php echo vtranslate('ADD_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div>

            <table class="table table-bordered listViewEntriesTable">
                <thead>
                    <tr class="listViewHeaders">
                        <th> <?php echo vtranslate('SOURCE_MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('SOURCE_FIELD_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('SOURCE_FIELD_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('TARGET_MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('TARGET_FIELD_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('TARGET_FIELD_VALUE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('Only First Time',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>
                        <th> <?php echo vtranslate('ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </th>

                    </tr>
                </thead>
                <?php  $_smarty_tpl->tpl_vars['RMU_FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RMU_FIELDS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RMU_FIELDS_ARRAY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RMU_FIELDS']->key => $_smarty_tpl->tpl_vars['RMU_FIELDS']->value){
$_smarty_tpl->tpl_vars['RMU_FIELDS']->_loop = true;
?>
                    <tr class="listViewEntries">

                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['source_module'];?>
</td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['source_field_name'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['source_field_value'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['target_module'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['target_module_field'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['target_module_value'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['firstcond'];?>
 </td>
                        <td class="listViewEntryValue" nowrap> <a class="deleteRecordButton" id="<?php echo $_smarty_tpl->tpl_vars['RMU_FIELDS']->value['id'];?>
"><i title="Delete" class="fa fa-trash alignMiddle"></i></a></td>

                    </tr>
                <?php } ?>
            </table>
        </div>    

        
        
        <div class="licenseLink" style=" margin-top: 5%;font-size: 90%;text-align: right;">
            <?php if ($_smarty_tpl->tpl_vars['IS_VALIDATED']->value==true){?>
                <a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=VGSLicenseSettings&parent=Settings">License Information - Deactivate your license</a>
                <?php }?>
        </div>
            
            
    </div>
</div>
<?php }} ?>