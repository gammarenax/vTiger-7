<?php /* Smarty version Smarty-3.1.7, created on 2017-12-13 12:56:57
         compiled from "/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsTypeHiddenContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87685135a1bc8f9cd0649-26511380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1af06bc35855e8d205a4c661c261803a6610e34a' => 
    array (
      0 => '/home/gammaren/www/crm.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/ReportsTypeHiddenContents.tpl',
      1 => 1513005920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87685135a1bc8f9cd0649-26511380',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a1bc8f9cf067',
  'variables' => 
  array (
    'MODULE' => 0,
    'reportTypeImagesStyle' => 0,
    'IS_ADMIN_USER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a1bc8f9cf067')) {function content_5a1bc8f9cf067($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars["reportTypeImagesStyle"] = new Smarty_variable("width:100%;text-align:center;", null, 0);?>


<div id="reporttype1" class="reporttypeInfo visible">
    <?php echo vtranslate('LBL_REPORTTYPE1_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

    <div id="reporttype1Image" style="<?php echo $_smarty_tpl->tpl_vars['reportTypeImagesStyle']->value;?>
">
      <br>
      <img src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/chart_types/rtimg1.png" id="rtimg1" style=""/>
    </div>
</div>


<div id="reporttype2" class="reporttypeInfo hide">
    <?php echo vtranslate('LBL_REPORTTYPE2_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

    <div id="reporttype2Image" style="<?php echo $_smarty_tpl->tpl_vars['reportTypeImagesStyle']->value;?>
">
      <br>
      <img src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/chart_types/rtimg2.png" id="rtimg2" style=""/>
    </div>
</div>


<div id="reporttype3" class="reporttypeInfo hide">
    <?php echo vtranslate('LBL_REPORTTYPE3_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

    <div id="reporttype3Image" style="<?php echo $_smarty_tpl->tpl_vars['reportTypeImagesStyle']->value;?>
">
      <br>
      <img src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/chart_types/rtimg3.png" id="rtimg3" style=""/>
    </div>
</div>


<div id="reporttype4" class="reporttypeInfo hide">
    <?php echo vtranslate('LBL_REPORTTYPE4_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

    <div id="reporttype4Image" style="<?php echo $_smarty_tpl->tpl_vars['reportTypeImagesStyle']->value;?>
">
      <br>
      <img src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/chart_types/rtimg4.png" id="rtimg4" style=""/>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN_USER']->value=="1"){?>
    
    <div id="reporttype5" class="reporttypeInfo hide">
        <?php echo vtranslate('LBL_REPORTTYPE5_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>

    </div>
<?php }?>
<?php }} ?>