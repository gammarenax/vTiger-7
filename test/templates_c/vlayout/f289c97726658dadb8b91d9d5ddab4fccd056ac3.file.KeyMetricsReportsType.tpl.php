<?php /* Smarty version Smarty-3.1.7, created on 2017-09-14 15:06:04
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsReportsType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148299007459ba9adc3c71a3-80170876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f289c97726658dadb8b91d9d5ddab4fccd056ac3' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/ITS4YouReports/KeyMetricsReportsType.tpl',
      1 => 1505399584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148299007459ba9adc3c71a3-80170876',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'KM_ID' => 0,
    'ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59ba9adc3e48d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ba9adc3e48d')) {function content_59ba9adc3e48d($_smarty_tpl) {?>
<script type="text/javascript">
jQuery().ready(function() {
    var ITS4YouReports_KM_Js = new ITS4YouReports_KeyMetricsList_Js();
    ITS4YouReports_KM_Js.registerEditKeyMetricsRowStep2();
    ITS4YouReports_KM_Js.registerEditKeyMetricsRowStep3();
});
</script>

<div class="tab-content padding20 themeTableColor overflowVisible">
    <div class="active" id="detailViewLayout">            
<div class="contentHeader row-fluid"><h3 class="span8 textOverflowEllipsis"><?php echo vtranslate('LBL_CREATE_NEW_KEY_METRICS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
</div>

<form class="" id="addKeyMetricsWidget" method="post" action="index.php">
    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" />
    <input type="hidden" name="action" value="SaveKeyMetricsRow" />
    <input type="hidden" name="km_id" id="km_id" value="<?php echo $_smarty_tpl->tpl_vars['KM_ID']->value;?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">

<tr>
    <td class="small" style="text-align:center;padding:0px 0px 10px 0px;">
        
        <input type="button" name="back_rep_top" id="back_rep_top" value=" &nbsp;&lt;&nbsp;<?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; " class="btn" onclick="window.location.href='index.php?module=ITS4YouReports&view=KeyMetricsRows&id=<?php echo $_smarty_tpl->tpl_vars['KM_ID']->value;?>
';">&nbsp;&nbsp;        
        
        
        
        <button class="btn btn-success" type="submit" id="savemetricbtn" onclick=""><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
        
    </td>
</tr>

<tr>
    <td align="left" valign="top">
         
        <div class="reportTab" id="step1">
            <?php echo $_smarty_tpl->getSubTemplate ('modules/ITS4YouReports/KeyMetricsRowStep.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
        
           
                             
   </td>
</tr>
</table>


<table width="100%"  border="0" cellspacing="0" cellpadding="5" >
    <tr><td class="small" style="text-align:center;padding:10px 0px 10px 0px;" colspan="3">
        
        <input type="button" name="back_rep_top" id="back_rep_top2" value=" &nbsp;&lt;&nbsp;<?php echo vtranslate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp; " class="btn" onclick="window.location.href='index.php?module=ITS4YouReports&view=KeyMetricsRows&id=<?php echo $_smarty_tpl->tpl_vars['KM_ID']->value;?>
';">&nbsp;&nbsp;        
        
                
        
        <button class="btn btn-success" type="submit" id="savemetricbtn2" onclick=""><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
        
    </td></tr>
</table>


</form>

    </div>
</div> 

<?php }} ?>