<?php /* Smarty version Smarty-3.1.7, created on 2019-05-08 17:29:28
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/VGSActivateLicense.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10206864005cd311f8562824-66734789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05ba243c1ec87695a2020410e90541b67ca841bc' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/VGSRelModUpdates/VGSActivateLicense.tpl',
      1 => 1557319807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10206864005cd311f8562824-66734789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'IS_VALIDATED' => 0,
    'QUALIFIED_MODULE' => 0,
    'LICENSEID' => 0,
    'JS_LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cd311f865b98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd311f865b98')) {function content_5cd311f865b98($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12">
    <div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;">
        <h3 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('License Activation',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
        <div class="row" style="margin: 1em;">


            <div class="alert alert-warning" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%; display:block;">
                <?php echo vtranslate('Please insert your License Id and click the activate button. Your license will be validated using a SSL encrypted connection. If you rather to use the manual validation method please <span id="enable-manual" style="color: blue; text-decoration: underline;">Click here</span>',$_smarty_tpl->tpl_vars['MODULE']->value);?>

            </div>

        </div>

    </div>


    <div style="width: 90%;margin: auto;margin-top: 2%;">
        
        <input type="hidden" id="isvalid" value="<?php echo $_smarty_tpl->tpl_vars['IS_VALIDATED']->value;?>
">
 <div class="" style="width:100%;">
        <div class="row">
            <div class="row">
                <div class="span12">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="fieldLabel" >
                                    <label class="pull-right marginRight10px"><b><?php echo vtranslate('License Id',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label>
                                </td>
                                <td class="fieldValue">
                                    <input type="text" id="licenseid" name="licenseid" value="<?php echo $_smarty_tpl->tpl_vars['LICENSEID']->value;?>
">
                                </td>
                            </tr>

                        </tbody>
                    </table>

                    <div id="manual-activation" style="display:none;">
                        <div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;">
                            <h4 style="padding-bottom: 1em;text-align: center"><?php echo vtranslate('Manual Activation',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4>
                            <div class="row" style="margin: 1em;">


                                <div class="alert" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%; display:block;">
                                    <?php echo vtranslate('Please send your CRM URL by email to info@vgsglobal.com to receive the activation code.',$_smarty_tpl->tpl_vars['MODULE']->value);?>

                                </div>

                            </div>

                        </div>     


                        <table class="table table-bordered" style="margin-top:2%;">
                            <tbody>

                                <tr>
                                    <td class="fieldLabel">
                                        <label class="pull-right marginRight10px"><b><?php echo vtranslate('Activation Id',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b></label>
                                    </td>
                                    <td class="fieldValue">
                                        <input type="text" id="activationid" name="activationid">

                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row-fluid" style="margin-top: 3%">
                    <div class="span12" style="margin-top: 3%">
                        <span class="pull-right">
                            <button class="btn btn-success activateButton" id="activate" type="button"><strong><?php echo vtranslate('Activate License',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
                            <button class="btn btn-success activateButton" id="deactivate" type="button"><strong><?php echo vtranslate('Deactivate License',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button>
                            <a class="cancelLink" type="reset" onclick="javascript:window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <div id="privacy-policy span12" style="font-size: 80%;margin-top: 5%;width: 60%;margin-left: 5%;">
        <b>Privacy Policy:</b> The license validation process is a 100% automated process. It's done over a secure https connection to ensure your data is 100% secure. Even though, if you still prefer to user the manual validation method please contacts us for instructions.
    </div>
                        
                        <input type="hidden" id="module_name" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
    
        <script type="text/javascript">
            jQuery('#js_strings').html('<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['JS_LANG']->value);?>
');
        </script>

    </div>
<?php }} ?>