<?php /* Smarty version Smarty-3.1.7, created on 2017-09-20 12:20:20
         compiled from "/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/unsubscribeinfo/info_en_us.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8121902059c25d0432b868-42594707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b706a0c1d84d62bcb1e9524aca86950d9f407b7' => 
    array (
      0 => '/home/gammaren/www/crm6.gammarenax.ch/includes/runtime/../../layouts/vlayout/modules/EMAILMaker/unsubscribeinfo/info_en_us.tpl',
      1 => 1505401257,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8121902059c25d0432b868-42594707',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c25d0432f99',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c25d0432f99')) {function content_59c25d0432f99($_smarty_tpl) {?>
<label class="pull-left themeTextColor font-x-x-large">Instructions</label>
    <br clear="all">
    <hr>
<p>
We developed for that purpose related custom function as well as other files which you can download using the button in the right upper corner. Please copy whole content of the unzipped file UnsubscribeEmail.zip into your webserver.
</p>
<p>
You can use UnsbuscibeEmail.php within your webpage or vice versa you can edit UnsbuscibeEmail.php according to your needs. Inside UnsbuscibeEmail.php is necessary to define:
</p>
<ul>
    <li>$server_path – this is your vtiger URL. If you are using "vtiger On Demand" you'll find it in your browser's address bar</li> 
    <li>$user_name – this is the username you use to login to the vtiger CRM, see also “My Preferences”</li> 
    <li>$user_access_key – the access key can be retrieved by logging into your vtiger CRM account, going to "My Preferences"</li> 
    <li>Sentence shown after successful unsubscribing (row 77)</li> 
    <li>Sentence shown when email address has not been unsubscribed (row 79)</li>
</ul>   
<center><img src="layouts/vlayout/modules/EMAILMaker/images/unsubscribe_email_1.jpg"></center>
<br><br>
<p>    
The final step is to put custom function its4you_unsubscribeemail into your template. There are just two parameters which you need to modify inside custom function [CUSTOMFUNCTION_AFTER| its4you_unsubscribeemail|$accounts-crmid$|$contacts-crmid$|URL_ADDRESS|Unsubscribe email|CUSTOMFUNCTION_AFTER]:
</p>
<ul>
    <li>parameter 3 - URL_ADDRESS – url address of your unsubscribe email web page</li> 
    <li>parameter 4 – Text of the unsubscribe link</li> 
</ul>   
<p>
    Next picture shows process of unsubscribing contact which leads to change his “Email Opt Out” to “yes”.
</p>
<center><img src="layouts/vlayout/modules/EMAILMaker/images/unsubscribe_email_2.jpg"></center><?php }} ?>