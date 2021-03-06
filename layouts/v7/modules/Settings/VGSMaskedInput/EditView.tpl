{strip}
<div class="modal" style="display:block;width:50%;margin-left:25%;margin-top:5%;">
	<div class="modal-header contentsBackground">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		{if $RECORD_ID}
			<h3>{vtranslate('LBL_EDIT_FIELD_MASK', $QUALIFIED_MODULE_NAME)} </h3>
		{else}
			<h3>{vtranslate('LBL_ADD_FIELD_MASK', $QUALIFIED_MODULE_NAME)} </h3>
		{/if}
	</div>
<input type="hidden" id="action" name="action" value="SaveAjax">
		<div class="modal-body configContent">
			{if $RECORD_ID}
				<input type="hidden" value="{$RECORD_ID}" name="fieldid" id="fieldid"/>
			{/if}
            <div class="control-group">
				<span class="control-label">
					<strong>
						{vtranslate('LBL_SELECT_MODULENAME', $QUALIFIED_MODULE_NAME)}
					</strong>
				</span>
				<div class="controls">
                    <select class='chzn-select moduleName' id='moduleName' name='moduleName' onchange='Settings_VGSMaskedInput_List_Js.loadFields();' data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
                        <option value=''>Select module</option>
                        {foreach from=$MODULES item=module_label key=module_id}
                            <option value='{$module_id}' {if $RECORD_MODEL->get('tabid') eq $module_id}selected='selected'{/if}>
                                {vtranslate($module_label)}
                            </option>
                        {/foreach}
                    </select>
				</div>
			</div>
                
            <div class="control-group">
				<span class="control-label">
					<strong>
						{vtranslate('LBL_SELECT_FIELD', $QUALIFIED_MODULE_NAME)}
					</strong>
				</span>
				<div class="controls">
                    <select class='fieldName' id='fieldName' name='fieldName' data-validation-engine="validate[ required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]">
                        <option value=''>Select field</option>
                        {if $RECORD_MODEL->get('fieldid') neq ''}<option value='{$RECORD_MODEL->get("fieldid")}' selected="selected">{$RECORD_MODEL->get("fieldlabel")}</option>{/if}
                    </select>
				</div>
			</div>
            
			<div class="control-group">
				<span class="control-label">
					<strong>
						{vtranslate('LBL_MASK', $QUALIFIED_MODULE_NAME)}
					</strong>
				</span>
				<div class="controls">
                    <input type="text" placeholder="(999)-999-9999" name="maskinfo" class="span3" value="{$RECORD_MODEL->get('maskinfo')}" mandatory='true' />
				</div>
			</div>
            <div class="control-group">
				<span class="control-label">
					<strong>
						{vtranslate('LBL_ENABLED', $QUALIFIED_MODULE_NAME)}
					</strong>
				</span>
				<div class="controls">
                    <input type="checkbox" name="enabled" {if $RECORD_MODEL->get("enabled") eq '1'}checked='checked'{/if}/>
				</div>
			</div>
		</div>
		{include file='ModalFooter.tpl'|@vtemplate_path:$MODULE}
		
</div>
<script type="text/javascript">

	$(document).ready(function(){
		$(".btn-success").click(function(){
			var action = $("#action").val();
			var fieldid = $("#fieldid").val();
			var moduleName = $("#moduleName").val();
			var fieldName = $("#fieldName").val();
			var maskinfo = $("[name='maskinfo']").val();
			var enabled = $("[name='enabled']").val();
			var module="VGSMaskedInput";

			{literal}
		    $.ajax({
		    	type: "POST",
		    	url: "index.php",
		    	data: {"action": action,
		    	"fieldid": fieldid,
		    	"moduleName": moduleName,
		    	"fieldName": fieldName,
		    	"maskinfo": maskinfo,
		    	"enabled": enabled,
		    	"module": module,
		    	"parent": "Settings"}, 
		    	success: function(result)
		    		{
		       		if(result.success){
		       			bootbox.alert(result.result[0]);
		       			location.reload();
		       		}else{
		       			bootbox.alert(result.error.message)
		       		}
		    		}
		    	});
		    {/literal}
		});
	});
	var verifica=true;

	if($("#moduleName").val()=='')
		verifica=false;
	if($("#fieldName").val()=='')
		verifica=false;
	if($("[name='maskinfo']").val()=='')
		verifica=false;

	if(verifica){
			$(".btn-success").show();}
	else{
			$(".btn-success").hide();}


	$("input").change(function(){
		var verifica=true;

		if($("#moduleName").val()=='')
			verifica=false;
		if($("#fieldName").val()=='')
			verifica=false;
		if($("[name='maskinfo']").val()=='')
			verifica=false;

		if(verifica){
				$(".btn-success").show();}
		else{
				$(".btn-success").hide();}

	});

	$("select").change(function(){
		var verifica=true;

		if($("#moduleName").val()=='')
			verifica=false;
		if($("#fieldName").val()=='')
			verifica=false;
		if($("[name='maskinfo']").val()=='')
			verifica=false;

		if(verifica){
				$(".btn-success").show();}
		else{
				$(".btn-success").hide();}

	});
</script>
{/strip}