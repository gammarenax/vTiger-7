{*<!--
/*********************************************************************************
 * The content of this file is subject to the crmReady license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT&M Srl
 * Portions created by IT&M Srl are Copyright(C) IT&M Srl
 * All Rights Reserved.
 ********************************************************************************/
-->*}
<script type="text/javascript" src="layouts/v7/modules/{$QUALIFIED_MODULE}/resources/License.js"></script>
	<form id="formlicense" class="form-horizontal">
	<div class="editViewPageDiv editViewContainer" id="EditEmailCampaignsSetting" style="padding-top:0px;">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div>
				<h3 style="margin-top: 0px;">{vtranslate('LBL_LICENSE_TITLE', $QUALIFIED_MODULE)}</h3>&nbsp;{vtranslate('LBL_LICENSE_DESC', $QUALIFIED_MODULE)}
			</div>
			
				<input type="hidden" name="module" value="{$QUALIFIED_MODULE}" />
				<input type="hidden" name="view" value="" />
				<div class="blockData">
					<br>
					<div class="hide alert alert-danger errorMessage">
					</div>
					<div class="block">
						<div>
							<h4>{if $LICENSE} {vtranslate('LBL_DEACT_LICENSE_TABLE_TITLE', $QUALIFIED_MODULE)}{else}{vtranslate('LBL_ACT_LICENSE_TABLE_TITLE', $QUALIFIED_MODULE)}{/if}</h4>
						</div>
						<hr>
						<table class="table editview-table no-border">
							<tbody>
								<tr>
									<td class="{$WIDTHTYPE} fieldLabel"><label>{vtranslate('LBL_LICENSE_KEY', $QUALIFIED_MODULE)}</label>&nbsp;<span class="redColor">*</span></td>	
									<td class="{$WIDTHTYPE} fieldValue"><div class=" col-lg-6 col-md-6 col-sm-12"><input {if $LICENSE neq ""}disabled{/if} type="text" class="inputElement" name="license_key_val" id="license_key_val" data-rule-required="true" value="{$LICENSE}" ></div></td>
								</tr>								
							</tbody>
						</table>
					</div>
					<br>	
					<div class='modal-overlay-footer clearfix'>
						<div class="row clearfix">
							<div class='textAlignCenter col-lg-12 col-md-12 col-sm-12 '>
								{if $LICENSE eq ""}
									<button id="activate_license_btn"  class="btn btn-success" title="{vtranslate('LBL_ACTIVATE',$QUALIFIED_MODULE)}" type="button"><strong>{vtranslate('LBL_ACTIVATE',$QUALIFIED_MODULE)}</strong></button>
								{else}
									<button id="deactivate_license_btn" type="button" class="btn btn-danger">{vtranslate('LBL_DEACTIVATE',$QUALIFIED_MODULE)}</button>
								{/if}
								
							</div>
						</div>
					</div>
				</div>
			
		</div>
	</div>
    </form> 

<script language="javascript" type="text/javascript">
crmReady_License_Js.registerEvents();
</script>
   