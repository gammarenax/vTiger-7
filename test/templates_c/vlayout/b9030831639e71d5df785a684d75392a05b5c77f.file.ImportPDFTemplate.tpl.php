<?php /* Smarty version Smarty-3.1.7, created on 2018-10-22 08:05:01
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ImportPDFTemplate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7663739815bcd84adbcc387-31902311%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9030831639e71d5df785a684d75392a05b5c77f' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/PDFMaker/ImportPDFTemplate.tpl',
      1 => 1510670557,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7663739815bcd84adbcc387-31902311',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5bcd84adbd706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bcd84adbd706')) {function content_5bcd84adbd706($_smarty_tpl) {?>

<form enctype="multipart/form-data" name="importBasic" method="POST" action="index.php">
    <input type="hidden" name="module" value="PDFMaker">
    <input type="hidden" name="action" value="Import">
    <table style="margin-left: auto;margin-right: auto;width: 100%;" class="searchUIBasic" cellspacing="12">
        <tbody>
            <tr>
                <td class="font-x-large" colspan="2" align="left"><strong><?php echo vtranslate('LBL_PDFMAKER_IMPORT','PDFMaker');?>
</strong></td>
            </tr>
            <tr>
                <td class="leftFormBorder1 importContents" valign="top" width="40%">
                    <table cellpadding="2" cellspacing="0" width="100%">
                        <tbody><tr>
                                <td><strong><?php echo vtranslate('LBL_SELECT_XML','PDFMaker');?>
:</strong></td>
                                <td class="big"><?php echo vtranslate('LBL_SELECT_XML_TEXT','PDFMaker');?>
</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td data-import-upload-size="3145728">
                                    <input name="type" value="xml" type="hidden">
                                    <input name="import_file" id="import_file" onchange="PDFMaker_ImportJs.checkFileType()" type="file">
                                    <!-- input type="hidden" name="userfile_hidden" value=""/ -->
                                </td>
                            </tr>
                        </tbody>                    </table>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <button type="submit" name="next" class="btn btn-success" onclick="return PDFMaker_ImportJs.uploadAndParse();"><strong><?php echo vtranslate('LBL_NEXT','PDFMaker');?>
</strong></button> &nbsp;&nbsp;
                    <a name="cancel" class="cursorPointer cancelLink" value="Cancel" onclick="location.href = 'index.php?module=Contacts&amp;view=List'"><?php echo vtranslate('LBL_CANCEL');?>
</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<?php }} ?>