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
<div class="editViewPageDiv">
    <div class="col-sm-12 col-xs-12" id="EditView">
        <form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step1" class="form-horizontal">
            <div class="row-fluid">
                {include file='EditSteps.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
            </div>
            <input type="hidden" name="module" value="ITS4YouDynamicFields">
            <input type="hidden" name="view" value="Edit">
            <input type="hidden" name="mode" value="{$MODE}" />
            <input type="hidden" name="parent" value="Settings" />
            <input type="hidden" class="actual_step" value="1" />
            <input type="hidden" name="record" value="{$RECORDID}" />
            <input type="hidden" name="parentid" value="{$PARENT_ID}" />
            <input type="hidden" name="parentmodule" value="{$PARENT_MODULE}" />
            <input type="hidden" name="parenttype" value="{$PARENT_TYPE}" />

            <div class="padding-left1per padding-right1per">
                <div class="contentsBackground row" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
                    <label>
                        <strong>{vtranslate('LBL_STEP_1',$QUALIFIED_MODULE)}: {vtranslate('LBL_STEP_1_INFO',$QUALIFIED_MODULE)}</strong>
                    </label>
                    <br><br>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">
                            {if $PARENT_ID eq "" && $PARENT_MODULE eq ""}
                                {vtranslate('LBL_SELECT_MODULE', $QUALIFIED_MODULE)}
                                <span class="redColor">*</span>
                            {else}
                                {vtranslate('LBL_MODULE', $QUALIFIED_MODULE)}
                            {/if}
                        </label>
                        <div class="col-sm-5 controls">
                            {if $PARENT_ID neq "" && $PARENT_MODULE neq ""}
                                <input type="hidden" name="module_name" value="{$PARENT_MODULE}" />
                                {vtranslate($PARENT_MODULE, $PARENT_MODULE)}
                            {else}
                                <select class="select2" id="moduleName" name="module_name" required="true" data-placeholder="Select Module...">
                                    {foreach from=$ALL_MODULES key=TABID item=MODULE_MODEL}
                                        <option value="{$MODULE_MODEL->getName()}" {if $SELECTED_MODULE == $MODULE_MODEL->getName()} selected {/if}>{vtranslate($MODULE_MODEL->getName(), $MODULE_MODEL->getName())}</option>
                                    {/foreach}
                                </select>
                            {/if}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">
                            {vtranslate('LBL_DESCRIPTION', $QUALIFIED_MODULE)}<span class="redColor">*</span>
                        </label>
                        <div class="col-sm-5 controls">
                            <input type="text" name="description" class="form-control" data-rule-required="true" value="{$DESCRIPTION}" id="description" />
                        </div>
                    </div>
                    {if $MODE eq 'FieldsLayout'}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">
                                {vtranslate('LBL_SHOW_POPUP', $QUALIFIED_MODULE)}
                            </label>
                            <div class="col-sm-5 controls">
                                <input type="checkbox" name="show_popup" value="1" {if $SHOW_POPUP eq "1"}checked{/if}/>
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-overlay-footer clearfix">
                <div class="row clearfix">
                    <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12'>
                        <button type='submit' class='btn btn-success nextButton' >{vtranslate('LBL_NEXT', $MODULE)}</button>&nbsp;&nbsp;
                        <a class='cancelLink' href="javascript:history.back()" type="reset">{vtranslate('LBL_CANCEL', $MODULE)}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{/strip}