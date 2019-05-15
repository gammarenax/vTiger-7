{*<!--
/*********************************************************************************
 * The content of this file is subject to the crmReady license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT&M Srl
 * Portions created by IT&M Srl are Copyright(C) IT&M Srl
 * All Rights Reserved.
 ********************************************************************************/
-->*}
<script type="text/javascript" src="layouts/vlayout/modules/{$QUALIFIED_MODULE}/resources/License.js"></script>
<div class="container-fluid" id="licenseContainer">
    
    <form id="formlicense" class="form-horizontal">
    <br>
    <label class="pull-left themeTextColor font-x-x-large">{vtranslate('LBL_LICENSE_TITLE',$QUALIFIED_MODULE)}</label>
    <br clear="all">
    <hr>

    <input type="hidden" name="module" value="{$QUALIFIED_MODULE}" />
    <input type="hidden" name="view" value="" />
    <!-- <input type="hidden" name="license_key_val" id="license_key_val" value="{$LICENSE}" /> -->
     <br />
    <div class="row-fluid">
        <label><strong>{vtranslate('LBL_LICENSE_DESC',$QUALIFIED_MODULE)}</strong></label><br>

        <table class="table table-bordered table-condensed themeTableColor">
            <thead>
                    <tr class="blockHeader">
                            <th colspan="2" class="mediumWidthType">
                                    <span class="alignMiddle">{if $LICENSE} {vtranslate('LBL_DEACT_LICENSE_TABLE_TITLE', $QUALIFIED_MODULE)}{else}{vtranslate('LBL_ACT_LICENSE_TABLE_TITLE', $QUALIFIED_MODULE)}{/if}</span>
                            </th>
                    </tr>
            </thead>
            <tbody>
                    <tr>
                                           
                    	{if $LICENSE eq ""}
                        <td width="25%"><label  class="muted marginRight10px">{vtranslate('LBL_LICENSE_KEY', $QUALIFIED_MODULE)}<span class="redColor">*</span></label></td>
                        <td style="border-left: none;">
							<input class="input-large nameField" type="text" name="license_key_val" id="license_key_val" value="{$LICENSE}" data-validation-engine='validate[required]' />
                                	<button id="activate_license_btn"  class="btn btn-success" title="{vtranslate('LBL_ACTIVATE',$QUALIFIED_MODULE)}" type="button"><strong>{vtranslate('LBL_ACTIVATE',$QUALIFIED_MODULE)}</strong></button>
                                {else}
                            <td width="25%"><label  class="muted marginRight10px">{vtranslate('LBL_LICENSE_KEY', $QUALIFIED_MODULE)}</label></td>
                        	<td style="border-left: none;">
	                           	<input class="input-large nameField" type="text" name="license_key_val" id="license_key_val" value="{$LICENSE}" disabled />
								<button id="deactivate_license_btn" type="button" class="btn btn-danger">{vtranslate('LBL_DEACTIVATE',$QUALIFIED_MODULE)}</button>
                                {/if}
                        </td>
                    </tr>
             </tbody>
        </table>
    </div>
    </form>        

</div>
      

<script language="javascript" type="text/javascript">
crmReady_License_Js.registerEvents();
</script>
   