<?php /* Smarty version Smarty-3.1.7, created on 2017-09-20 12:20:20
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/Extensions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159757311159c25d04292329-01647768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e9fe6aa68f0346307f37b877835d736d06989fd' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/Extensions.tpl',
      1 => 1505401257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159757311159c25d04292329-01647768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'EXTENSIONS_ARR' => 0,
    'arr' => 0,
    'extname' => 0,
    'MODULE' => 0,
    'MODE' => 0,
    'ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c25d042dfba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c25d042dfba')) {function content_59c25d042dfba($_smarty_tpl) {?>
<div class="container-fluid" id="licenseContainer">
    <form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large"><?php echo vtranslate('LBL_EXTENSIONS','EMAILMaker');?>
</label>
    <br clear="all">
    <hr>
    <input type="hidden" name="module" value="EMAILMaker" />
    <input type="hidden" name="view" value="" />
     <br />
    <div class="row-fluid">
        <label class="fieldLabel"><strong><?php echo vtranslate('LBL_AVAILABLE_EXTENSIONS','EMAILMaker');?>
:</strong></label>
        <?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['extname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['EXTENSIONS_ARR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value){
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['extname']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
            <br>    
            <table class="table table-bordered equalSplit detailview-table">
                <thead>
                    <tr>
                        <th class="blockHeader" colspan="2"><b><div class="pull-left" style="font-size:18px;padding-top:5px"><?php echo vtranslate($_smarty_tpl->tpl_vars['arr']->value['label'],'EMAILMaker');?>
</div></b><?php if ($_smarty_tpl->tpl_vars['arr']->value['download']!=''){?><span class="pull-right"><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['arr']->value['download'];?>
"><?php echo vtranslate('LBL_DOWNLOAD','EMAILMaker');?>
</a></span><?php }?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="padding5per">
                            <div class="padding10">
                                <?php echo vtranslate($_smarty_tpl->tpl_vars['arr']->value['desc'],'EMAILMaker');?>

                                <?php if ($_smarty_tpl->tpl_vars['arr']->value['exinstall']!=''){?><br><br>
                                <b><?php echo vtranslate('LBL_INSTAL_EXT','EMAILMaker');?>
</b><br>
                                <?php echo vtranslate($_smarty_tpl->tpl_vars['arr']->value['exinstall'],'EMAILMaker');?>

                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['arr']->value['manual']!=''){?><br><br>
                                    <?php if ($_smarty_tpl->tpl_vars['extname']->value=="UnsubscribeEmail"){?>   
                                        <button type="button" id="showUnsubscribeEmailInstructions" class="btn cursorPointer"><strong><?php echo vtranslate('LBL_SHOW_INSTRUCTIONS','EMAILMaker');?>
</strong></button>
                                        <br>
                                        <div id="UnsubscribeEmailInstructionsDiv" class="hide">
                                            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['arr']->value['manual'],$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                                            <br>
                                            <button type="button" id="hideUnsubscribeEmailInstructions" class="btn cursorPointer"><strong><?php echo vtranslate('LBL_CLOSE_INSTRUCTIONS','EMAILMaker');?>
</strong></button>
                                        </div>
                                    <?php }else{ ?>
                                    <?php echo vtranslate('LBL_CUSTOM_INSTAL_EXT','EMAILMaker');?>
<b> <a href="<?php echo $_smarty_tpl->tpl_vars['arr']->value['manual'];?>
" style="cursor: pointer"><?php echo vtranslate($_smarty_tpl->tpl_vars['arr']->value['label'],'EMAILMaker');?>
.txt</a></b>
                                    <?php }?>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['arr']->value['install_info']!=''){?>
                                <br><br>
                                <div id="install_<?php echo $_smarty_tpl->tpl_vars['extname']->value;?>
_info" class="fontBold<?php if ($_smarty_tpl->tpl_vars['arr']->value['install_info']==''){?> hide<?php }?>"><?php echo $_smarty_tpl->tpl_vars['arr']->value['install_info'];?>
</div>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['arr']->value['install']!=''){?>
                                <button type="button" id="install_<?php echo $_smarty_tpl->tpl_vars['extname']->value;?>
_btn" class="btn btn-success" data-extname="<?php echo $_smarty_tpl->tpl_vars['extname']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['arr']->value['install'];?>
"><?php echo vtranslate('LBL_INSTALL_BUTTON','Install');?>
</button></div>
                                <?php }?>
                            </div>
                        </td>
                    </tr>
                 </tbody>
            </table>
        <?php } ?>                
    </div>
    <?php if ($_smarty_tpl->tpl_vars['MODE']->value=="edit"){?>        
        <div class="pull-right">
            <button class="btn btn-success" type="submit"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
        </div> 
    <?php }?>
    </form>        
</div>
<script language="javascript" type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='true'){?>
    alert('<?php echo vtranslate('ALERT_DOWNLOAD_ERROR','EMAILMaker');?>
');
<?php }?>    
</script>
   <?php }} ?>