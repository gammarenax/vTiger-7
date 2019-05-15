<?php /* Smarty version Smarty-3.1.7, created on 2019-05-14 13:48:28
         compiled from "/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditScript.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8934274355cdac72c745654-20367866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '443b3a191b729680e4a67fdc00a94608b5c4bc4e' => 
    array (
      0 => '/home/gammaren/www/crm7.gammarenax.ch/includes/runtime/../../layouts/v7/modules/ITS4YouReports/EditScript.tpl',
      1 => 1557319796,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8934274355cdac72c745654-20367866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5cdac72c75c6b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdac72c75c6b')) {function content_5cdac72c75c6b($_smarty_tpl) {?>


<input type="hidden" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" />
<script>
/*Sharing functions*/
function sharing_changed(){
    var selectedValue = jQuery('#sharing').val();
    if(selectedValue !== 'share')
    {
        jQuery('#sharing_share_div').hide();
    }
    else
    {
        jQuery('#sharing_share_div').show();
    }
}

jQuery( document ).ready(function(){
    sharing_changed();
});
/*Sharing Ends*/
</script>
<?php }} ?>