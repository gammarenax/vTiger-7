<?php /* Smarty version Smarty-3.1.7, created on 2017-09-21 08:59:30
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ImportEMAILTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39292849559c37f72688e44-17304993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a64e8814333a1c6ddae360f11b5a4a57de4c4ddb' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/ImportEMAILTemplate.tpl',
      1 => 1505401257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39292849559c37f72688e44-17304993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c37f726e725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c37f726e725')) {function content_59c37f726e725($_smarty_tpl) {?>
<form enctype="multipart/form-data" name="importBasic" method="POST" action="index.php">
    <input type="hidden" name="module" value="EMAILMaker">
    <input type="hidden" name="action" value="Import">
    <table style="margin-left: auto;margin-right: auto;width: 100%;" class="searchUIBasic" cellspacing="12">
        <tbody>
            <tr>
                <td class="font-x-large" colspan="2" align="left"><strong><?php echo vtranslate('LBL_EMAILMAKER_IMPORT','EMAILMaker');?>
</strong></td>
            </tr>
            <tr>
                <td class="leftFormBorder1 importContents" valign="top" width="40%">
                    <table cellpadding="2" cellspacing="0" width="100%">
                        <tbody><tr>
                                <td><strong><?php echo vtranslate('LBL_FILE_LOCATION','EMAILMaker');?>
</strong></td>
                                <td class="big"><?php echo vtranslate('LBL_SELECT_XML_TEXT','EMAILMaker');?>
</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td data-import-upload-size="3145728">
                                    <input name="type" value="xml" type="hidden">
                                    <input name="import_file" id="import_file" onchange="EMAILMaker_ImportJs.checkFileType()" type="file">
                                </td>
                            </tr>
                        </tbody>                    
                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <button type="submit" name="next" class="btn btn-success" onclick="return EMAILMaker_ImportJs.uploadAndParse();"><strong><?php echo vtranslate('LBL_NEXT','EMAILMaker');?>
</strong></button> &nbsp;&nbsp;
                    <a name="cancel" class="cursorPointer cancelLink" value="Cancel" onclick="location.href = 'index.php?module=EMAILMaker&amp;view=List'"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<?php }} ?>