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
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step2" class="form-horizontal">
    <div class="row-fluid">
        {include file='EditGroupSteps.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
        <div span="span6">
            <div class="pull-right" style="padding-top:10px;">
                <button class="btn btn-danger {if $MODE eq "editfields"}loadB{else}b{/if}ackStep" type="button"><strong>{vtranslate('LBL_BACK', $QUALIFIED_MODULE)}</strong></button>&nbsp;&nbsp;
                <button class="btn btn-success" id="finish" type="submit"><strong>{vtranslate('LBL_FINISH', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div>
    </div>
    <input type="hidden" name="module" value="ITS4YouDynamicFields" />
    <input type="hidden" name="action" value="Save">
    <input type="hidden" name="mode" value="SaveFields">
    <input type="hidden" name="parent" value="Settings" />
    <input type="hidden" name="record" value="{$DYNAMICFIELDS_RECORD_MODEL->get('dfid')}" />
    <input type="hidden" class="actual_step" value="3" />
    <input type="hidden" class="followsup" value="" />
    <div class="padding1per contentsBackground" style="border:1px solid #ccc; box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
    <input type="hidden" name="save_type" value="individual">
    {include file='EditGroupFields.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
    </div><br>
    <div class="pull-right">
        <button class="btn btn-danger backStep" type="button"><strong>{vtranslate('LBL_BACK', $QUALIFIED_MODULE)}</strong></button>&nbsp;&nbsp;
        <button class="btn btn-success" id="finish" type="submit"><strong>{vtranslate('LBL_FINISH', $QUALIFIED_MODULE)}</strong></button>
    </div>
    <div class="clearfix"></div>

</form>
{/strip}