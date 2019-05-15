{*<!--
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/
-->*}
{strip}
<div class="container-fluid" id="UninstallITS4YouDynamicFieldsContainer">    
    <form name="profiles_privilegies" action="index.php" method="post" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large">{vtranslate('LBL_UNINSTALL','Settings:ITS4YouDynamicFields')}</label>
    <br clear="all">
    <hr>
    <input type="hidden" name="module" value="ITS4YouDynamicFields" />
    <input type="hidden" name="view" value="" />
    <input type="hidden" name="license_key_val" id="license_key_val" value="{$LICENSE}" />
    <br />
    <div class="row-fluid">
        <label class="fieldLabel"><strong>{vtranslate('LBL_UNINSTALL_DESC','Settings:ITS4YouDynamicFields')}:</strong></label><br>
        <table class="table table-bordered table-condensed themeTableColor">
            <thead>
                    <tr class="blockHeader">
                            <th class="mediumWidthType">
                                    <span class="alignMiddle">{vtranslate('LBL_UNINSTALL', 'Settings:ITS4YouDynamicFields')}</span>
                            </th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="textAlignCenter">
                            <button id="uninstall_its4youdynamicfields_btn" type="button" class="btn btn-danger marginLeftZero">{vtranslate('LBL_UNINSTALL','Settings:ITS4YouDynamicFields')}</button>
                        </td>
                    </tr>
             </tbody>
        </table>
    </div>
    {if $MODE eq "edit"}        
        <div class="pull-right">
            <button class="btn btn-success" type="submit">{vtranslate('LBL_SAVE',$MODULE)}</button>
            <a class="cancelLink" onclick="javascript:window.history.back();" type="reset">Cancel</a>
        </div> 
    {/if}
    </form>    
</div>
{/strip}