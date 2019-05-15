<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 14:34:26
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/Install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:165639885859ba9372bf4d65-90670372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee54474e79fe20c33c6d248a2ca9cc63d71ca48' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/Install.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165639885859ba9372bf4d65-90670372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TYPE' => 0,
    'STEP' => 0,
    'TOTAL_STEPS' => 0,
    'CURRENT_STEP' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9372c5f16',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9372c5f16')) {function content_59ba9372c5f16($_smarty_tpl) {?>

<div class="contentsDiv marginLeftZero" >
            
<div class="padding1per">

<div class="editContainer" style="padding-left: 3%;padding-right: 3%"><h3><?php echo vtranslate('LBL_MODULE_NAME','ITS4YouReports');?>
 <?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?><?php echo vtranslate('LBL_REACTIVATE','ITS4YouReports');?>
<?php }else{ ?><?php echo vtranslate('LBL_INSTALL','ITS4YouReports');?>
<?php }?></h3>    
<hr>
<div id="breadcrumb">             
    <ul class="crumbs marginLeftZero">
        <li class="first step <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="1"){?>active<?php }?>" style="z-index:10;" id="steplabel1"><a><span class="stepNum">1</span><span class="stepText"><?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?><?php echo vtranslate('LBL_REACTIVATE','ITS4YouReports');?>
<?php }else{ ?><?php echo vtranslate('LBL_VALIDATION','ITS4YouReports');?>
<?php }?></span></a></li>
        <?php if ($_smarty_tpl->tpl_vars['TOTAL_STEPS']->value=="4"){?>
        <li class="step <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="2"){?>active<?php }?>" style="z-index:9;"  id="steplabel2"><a><span class="stepNum">2</span><span class="stepText"><?php echo vtranslate('LBL_IMPORT_STEP','ITS4YouReports');?>
</span></a></li>    
        <?php }?>    
        <?php if ($_smarty_tpl->tpl_vars['TOTAL_STEPS']->value=="4"){?>
        <li class="step <?php if ($_smarty_tpl->tpl_vars['STEP']->value=="3"){?>active<?php }?>" style="z-index:9;"  id="steplabel2"><a><span class="stepNum">3</span><span class="stepText"><?php echo vtranslate('LBL_DOWNLOAD_STEP','ITS4YouReports');?>
</span></a></li>    
        <?php }?>    
        <li class="step last <?php if ($_smarty_tpl->tpl_vars['CURRENT_STEP']->value==$_smarty_tpl->tpl_vars['TOTAL_STEPS']->value){?>active<?php }?>" style="z-index:7;"  id="steplabel<?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
"><a><span class="stepNum"><?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
</span><span class="stepText"><?php echo vtranslate('LBL_FINISH','ITS4YouReports');?>
</span></a></li>
    </ul>
</div>
<div class="clearfix">
</div>
<form name="install" id="editLicense"  method="POST" action="index.php" class="form-horizontal">


<input type="hidden" id="currentView" name='currentView' value="List"/>
<input type="hidden" name="module" value="ITS4YouReports"/>
<input type="hidden" name="view" value="License"/>
<input type="hidden" id="type" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
"/>
<input type="hidden" id="import_reports" name="import_reports" value=""/>
 
<div id="step1" class="padding1per" style="border:1px solid #ccc; <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="1"){?>display:none;<?php }?>" >     
    <input type="hidden" name="installtype" value="validate"/>                                       
    <div class="controls">
        <div>
            <strong>
                <?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?>
                    <?php echo vtranslate('LBL_MISMATCH','ITS4YouReports');?>
</strong>
                <?php }else{ ?>
                    <?php echo vtranslate('LBL_WELCOME','ITS4YouReports');?>
</strong>
                <?php }?>
        </div>
        <br>
        <div class="clearfix">
        </div>
    </div>

    <div class="controls">
        <div>
            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?>
                <?php echo vtranslate('LBL_MISMATCH_DESC','ITS4YouReports');?>

            <?php }else{ ?>
           <?php echo vtranslate('LBL_WELCOME_DESC','ITS4YouReports');?>
</br>

            <?php echo vtranslate('LBL_WELCOME_FINISH','ITS4YouReports');?>

            <?php }?>
        </div>
        </br>
<div class="span8 alert alert-danger container-fluid" style="float:left;margin-left: 0px;"><?php echo vtranslate('LBL_LICENSE_CONDITIONS','ITS4YouReports');?>
</div>

        <br>
        <div class="clearfix">
        </div>
    </div>   
<?php if ($_smarty_tpl->tpl_vars['TYPE']->value!="reactivate"){?>
    <div class="controls">
        <div>
            <strong><?php echo vtranslate('LBL_CHECK_COMPANY','ITS4YouReports');?>
</strong>
        </div>
        <div class="clearfix">
        </div>
    </div>
    <div class="controls">
        <div>
            <strong><?php echo vtranslate('LBL_INSERT_KEY','ITS4YouReports');?>
</strong>
        </div>
        <div>
            <?php echo vtranslate('LBL_ONLINE_ASSURE','ITS4YouReports');?>

        </div>
        <div class="clearfix">
        </div>
    </div> 
<?php }?>
     <br>                                    
    <div class="controls">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LicenseInformation.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                        <br />
        <div style="text-align:center;">
            <!--<?php echo vtranslate('LBL_LICENSE_KEY','ITS4YouReports');?>
:&nbsp;<input type="text" class="input-large" id="licensekey" name="licensekey" data-validation-engine="validate[required]"/>-->
            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?>
                <button type="submit" id="reactivate_license" class="btn btn-success"/><strong><?php echo vtranslate('LBL_REACTIVATE','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;
            <?php }else{ ?>
                <button type="submit" id="validate_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_VALIDATE','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value!="reactivate"){?>
                <button type="button" id="order_button" class="btn btn-info" onclick="window.location.href='http://www.its4you.sk/en/vtiger-shop.html'"/><?php echo vtranslate('LBL_ORDER_NOW','ITS4YouReports');?>
</button>
            <?php }?>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>    

<?php if ($_smarty_tpl->tpl_vars['TOTAL_STEPS']->value=="4"){?>        
<div id="step2" class="padding1per" style="border:1px solid #ccc;  <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="2"){?>display:none;<?php }?>">

    <div class="controls">
        <div>
            
            <?php echo vtranslate('LBL_IMPORT_SKIP_1','ITS4YouReports');?>

            <strong>"<?php echo vtranslate('LBL_IMPORT');?>
"</strong>
            <?php echo vtranslate('LBL_IMPORT_SKIP_2','ITS4YouReports');?>

            <strong>"<?php echo vtranslate('LBL_NEXT','ITS4YouReports');?>
"</strong>
            <?php echo vtranslate('LBL_IMPORT_SKIP_3','ITS4YouReports');?>

            <br /><br />                                      
        </div>
    </div>          
    <div class="controls">
        <button type="submit" id="import_button" class="btn btn-success" /><strong><?php echo vtranslate('LBL_IMPORT','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;
        <button type="submit" id="skip_import_button" class="btn btn-success" /><strong><?php echo vtranslate('LBL_NEXT','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;  
    </div>
</div>

<div id="step3" class="padding1per" style="border:1px solid #ccc;  <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="3"){?>display:none;<?php }?>">

    <input type="hidden" name="installtype" value="download_src"/>
    <div class="controls">
        <div>
            <strong><?php echo vtranslate('LBL_DOWNLOAD_SRC','ITS4YouReports');?>
</strong>
        </div>
        <br>
        <div class="clearfix">
        </div>
    </div>

    <div class="controls">
        <div>
            <?php echo vtranslate('LBL_DOWNLOAD_SRC_DESC','ITS4YouReports');?>

        </div>
        <br>
        <div class="clearfix">
        </div>
    </div>          
    <div class="controls">
        <button type="button" id="download_button" class="btn btn-success" onclick="window.open( 'http://www.its4you.sk/en/images/extensions/Reports4You/src/highcharts.zip' , '_newtab');"/><strong><?php echo vtranslate('LBL_DOWNLOAD','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;
        <button type="button" id="finish_button" class="btn btn-success" onclick="location.reload(true);"/><strong><?php echo vtranslate('LBL_FINISH','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;  
    </div>
</div>
<?php }?>                                                        

<div id="step<?php echo $_smarty_tpl->tpl_vars['TOTAL_STEPS']->value;?>
" class="padding1per" style="border:1px solid #ccc; <?php if ($_smarty_tpl->tpl_vars['STEP']->value!="4"){?>display:none;<?php }?>" >
    <input type="hidden" name="installtype" value="redirect_recalculate" />
    <div class="controls">
        <div>
            <?php if ($_smarty_tpl->tpl_vars['TYPE']->value=="reactivate"){?>
                <?php echo vtranslate('LBL_MISMATCH_SUCCESS','ITS4YouReports');?>

            <?php }else{ ?>
                <?php echo vtranslate('LBL_INSTALL_SUCCESS','ITS4YouReports');?>

            <?php }?>
        </div>
        <div class="clearfix">
        </div>
    </div> 
    <br>
    <div class="controls">
        <button type="button" id="next_button" class="btn btn-success"/><strong><?php echo vtranslate('LBL_FINISH','ITS4YouReports');?>
</strong></button>&nbsp;&nbsp;
    </div>
</div>
	
</form> 
</div> 
</div>
</div>
<script language="javascript" type="text/javascript">

jQuery(document).ready(function() {
    //ITS4YouReports_License_Js.registerInstallEvents();
});
</script>                                   

 				<?php }} ?>