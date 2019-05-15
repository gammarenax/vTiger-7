<?php /* Smarty version Smarty-3.1.7, created on 2017-09-15 15:06:41
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:121108274359bbec81e701d5-28945015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '792796a5505e7507741ab8d8c6770bc406365991' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/Settings/ITS4YouCalculateFields/Install.tpl',
      1 => 1505487946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121108274359bbec81e701d5-28945015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'STEP' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59bbec81e9279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bbec81e9279')) {function content_59bbec81e9279($_smarty_tpl) {?>
<div class="contentsDiv marginLeftZero" >
    <div class="padding1per">
        <div class="editContainer" style="padding-left: 3%;padding-right: 3%"><h3><?php echo vtranslate('LBL_MODULE_NAME','Settings:ITS4YouCalculateFields');?>
 <?php echo vtranslate('LBL_INSTALL','Settings:ITS4YouCalculateFields');?>
</h3>    
            <hr>
            <div id="breadcrumb">             
                <ul class="crumbs marginLeftZero">
                    <li class="first step <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="1"){?>active<?php }?>" style="z-index:10;" id="steplabel1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_VALIDATION','Settings:ITS4YouCalculateFields');?>
</span></a></li>
                    <li class="step last <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="2"){?>active<?php }?>" style="z-index:7;"  id="steplabel2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_FINISH','Settings:ITS4YouCalculateFields');?>
</span></a></li>
                </ul>
            </div>
            <div class="clearfix">
            </div>
            <form name="install" id="editLicense"  method="POST" action="index.php" class="form-horizontal">
                <input type="hidden" name="module" value="ITS4YouCalculateFields"/>
                <input type="hidden" name="parent" value="Settings"/>
                <input type="hidden" name="view" value="install"/>
                <div id="step1" class="padding1per" style="border:1px solid #ccc; <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="1"){?>display:none;<?php }?>" >    
                    <input type="hidden" name="installtype" value="validate"/>                                       
                    <div class="controls">
                        <div>
                            <strong><?php echo vtranslate('LBL_WELCOME','Settings:ITS4YouCalculateFields');?>
</strong>
                        </div>
                    </div>
                    <div class="controls paddingTop20">
                        <div>
                            <?php echo vtranslate('LBL_WELCOME_DESC','Settings:ITS4YouCalculateFields');?>
</br><?php echo vtranslate('LBL_WELCOME_FINISH','Settings:ITS4YouCalculateFields');?>

                        </div>
                    </div>  

                    <div class="controls paddingTop20">
                        <div>
                            <strong><?php echo vtranslate('LBL_INSERT_KEY','Settings:ITS4YouCalculateFields');?>
</strong>
                        </div>
                        <div>
                            <?php echo vtranslate('LBL_ONLINE_ASSURE','Settings:ITS4YouCalculateFields');?>

                        </div>
                    </div> 

                    <div class="controls paddingTop20">    
                        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('LicenseDetails.tpl','Settings:ITS4YouCalculateFields'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                    </div> 
                </div>                                                     
                <div id="step2" class="padding1per" style="border:1px solid #ccc;display:none;" >
                    <input type="hidden" name="installtype" value="redirect_recalculate" />
                    <div class="controls">
                        <div><?php echo vtranslate('LBL_INSTALL_SUCCESS','Settings:ITS4YouCalculateFields');?>
</div>
                        <div class="clearfix">
                        </div>
                    </div> 
                    <br>
                    <div class="controls">
                        <button type="submit" id="next_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_FINISH','Settings:ITS4YouCalculateFields');?>
</strong></button>&nbsp;&nbsp;
                    </div>
                </div>	
            </form> 
        </div> 
    </div>
</div>
<script language="javascript" type="text/javascript">
    jQuery(document).ready(function() {
        Settings_ITS4YouCalculateFields_License_Js.registerInstallEvents();
    });
</script>                                   

<?php }} ?>