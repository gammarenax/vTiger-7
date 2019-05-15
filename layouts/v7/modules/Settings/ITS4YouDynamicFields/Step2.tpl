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
        <form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step2" class="form-horizontal">

            {if $SHOW_STEPS eq "yes"}
                <div class="row-fluid">
                    {include file='EditSteps.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
                </div>
            {/if}
            <input type="hidden" name="module" value="ITS4YouDynamicFields" />
            <input type="hidden" name="action" value="Save">
            <input type="hidden" name="source_module" value="{$SOURCE_MODULE}">

            <input type="hidden" name="mode" value="{$MODE}" />
            <input type="hidden" name="parent" value="Settings" />
            <input type="hidden" name="record" value="{$RECORDID}" />
            <input type="hidden" class="actual_step" value="2" />

            <input type="hidden" name="parentid" value="{$PARENT_ID}" />
            <input type="hidden" name="parentmodule" value="{$PARENT_MODULE}" />
            <input type="hidden" name="parenttype" value="{$PARENT_TYPE}" />

            {if $SHOW_STEPS eq "no"}
                <hr style="margin-top: 0px !important;">
                {if $MODE neq "DefaultForm"}
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">
                            {vtranslate('LBL_DESCRIPTION', $QUALIFIED_MODULE)}
                            <span class="redColor">*</span>
                        </label>
                        <div class="col-sm-4 controls">
                            <input class="form-control" id="description"  name="description" value="{$DESCRIPTION}" data-rule-required="true">
                        </div>
                    </div>
                {/if}
                {if $MODE eq "FieldsLayout"}
                    <div class="form-group">
                        <label for="name" class="col-sm-4 control-label">
                            {vtranslate('LBL_SHOW_POPUP', $QUALIFIED_MODULE)}
                        </label>
                        <div class="col-sm-4 controls">
                            <input type="checkbox" name="show_popup" value="1" {if $SHOW_POPUP eq "1"}checked{/if}/>
                        </div>
                    </div>
                {/if}

            {else}
                <input type="hidden" name="description" value="{$DESCRIPTION}">
                <input type="hidden" name="show_popup" value="{$SHOW_POPUP}">
            {/if}
            <div class="padding-left1per padding-right1per">
                <div class="contentsBackground row" {if $SHOW_STEPS eq "yes"} style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);"{/if}>
                    {if $MODE eq "DefaultForm"}
                        {include file='EditFieldsAll.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
                    {else}
                        <input type="hidden" name="save_type" value="individual">
                        {include file='EditFields.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
                    {/if}
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="modal-overlay-footer clearfix">
                <div class="row clearfix">
                    <div class='textAlignCenter col-lg-12 col-md-12 col-sm-12'>
                        <button type='submit' class='btn btn-success saveButton' >{if $SHOW_STEPS eq "no"}{vtranslate('LBL_SAVE', $MODULE)}{else}{vtranslate('LBL_FINISH', $MODULE)}{/if}</button>&nbsp;&nbsp;
                        <a class='cancelLink' href="javascript:history.back()" type="reset">{vtranslate('LBL_BACK', $MODULE)}</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{/strip}