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
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step1" class="form-horizontal {if $HIDE eq "yes"}hide{/if}">
    <div class="row-fluid">
        {include file='EditGroupSteps.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
        <div class="span6">
            <div class="pull-right" style="padding-top:10px;">
                <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_NEXT', $QUALIFIED_MODULE)}</strong></button>
                <a class="cancelLink" type="reset" onclick="javascript:window.history.back();">{vtranslate('LBL_CANCEL', $QUALIFIED_MODULE)}</a>
            </div>
        </div>
    </div>    

    <input type="hidden" name="module" value="ITS4YouDynamicFields">
    <input type="hidden" name="action" value="Save" />
    <input type="hidden" name="parent" value="Settings" />
    <input type="hidden" name="isgroup" value="1" />
    <input type="hidden" class="actual_step" value="1" />
    <input type="hidden" name="record" value="{$RECORDID}" />
    
    <div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
        <label>
            <strong>{vtranslate('LBL_STEP_1',$QUALIFIED_MODULE)}: {vtranslate('LBL_STEP_1_INFO',$QUALIFIED_MODULE)}</strong>
        </label>
        <br>
        <div class="control-group">
            <div class="control-label">
                {vtranslate('LBL_SELECT_MODULE', $QUALIFIED_MODULE)}
            </div>
            <div class="controls">
                {if $MODE eq 'edit'}
                    <input type='text' disabled='disabled' value="{vtranslate($MODULE_MODEL->getName(), $MODULE_MODEL->getName())}" >
                    <input type='hidden' name='module_name' value="{$MODULE_MODEL->get('name')}" >
                {else}
                    <select class="chzn-select" id="moduleName" name="module_name" required="true" data-placeholder="Select Module...">
                        {foreach from=$ALL_MODULES key=TABID item=MODULE_MODEL}
                            <option value="{$MODULE_MODEL->getName()}" {if $SELECTED_MODULE == $MODULE_MODEL->getName()} selected {/if}>{vtranslate($MODULE_MODEL->getName(), $MODULE_MODEL->getName())}</option>
                        {/foreach}
                    </select>
                {/if}
            </div>
        </div>
        <div class="control-group">
            <div class="control-label">
                {vtranslate('LBL_DESCRIPTION', $QUALIFIED_MODULE)}<span class="redColor">*</span>
            </div>
            <div class="controls">
                <input type="text" name="description" class="span5" data-validation-engine='validate[required]' value="{$DESCRIPTION}" id="description" />
            </div>
        </div>

            
    </div><br>
    <div class="pull-right">
        <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_NEXT', $QUALIFIED_MODULE)}</strong></button>
        <a class="cancelLink" type="reset" onclick="javascript:window.history.back();">{vtranslate('LBL_CANCEL', $QUALIFIED_MODULE)}</a>
    </div>
    <div class="clearfix"></div>
</form>
{/strip}