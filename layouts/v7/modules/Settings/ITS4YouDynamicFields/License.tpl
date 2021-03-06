{*
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */
*}
{strip}
<script type="text/javascript" src="layouts/vlayout/modules/Settings/ITS4YouDynamicFields/resources/License.js"></script>
<div class="container-fluid" id="licenseContainer">
    <form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large">{vtranslate('LBL_LICENSE','Settings:ITS4YouDynamicFields')}</label>
    <br clear="all">
    <hr>
    <input type="hidden" name="module" value="ITS4YouDynamicFields" />
    <input type="hidden" name="parent" value="Settings" />
    <input type="hidden" name="view" value="" />
    <input type="hidden" name="license_key_val" id="license_key_val" value="{$LICENSE}" />
     <br />
    <div class="row-fluid">
        {include file='LicenseDetails.tpl'|@vtemplate_path:'Settings:ITS4YouDynamicFields'}
        <br /> 
    </div>
    {if $MODE eq "edit"}        
        <div class="pull-right">
            <button class="btn btn-success" type="submit">{vtranslate('LBL_SAVE',$MODULE)}</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset">Cancel</a>
        </div> 
    {/if}
    </form>
</div>      
<script language="javascript" type="text/javascript">
    jQuery(document).ready(function() {
        var thisInstance = ITS4YouDynamicFields_License_Js.getInstance();
        thisInstance.registerEvents();
    });
</script>
{/strip}