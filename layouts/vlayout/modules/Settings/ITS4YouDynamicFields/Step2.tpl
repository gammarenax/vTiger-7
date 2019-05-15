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
<form name="EditDynamicFields" action="index.php" method="post" id="dynamicfields_step2" class="form-horizontal" >
    <div class="row-fluid">
        {include file='EditSteps.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
        <div class="span6">
            <div class="pull-right" style="padding-top:10px;">
                <button class="btn btn-danger backStep" type="button"><strong>{vtranslate('LBL_BACK', $QUALIFIED_MODULE)}</strong></button>&nbsp;&nbsp;
                <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_NEXT', $QUALIFIED_MODULE)}</strong></button>
                <a class="cancelLink" type="reset" onclick="javascript:window.history.back();">{vtranslate('LBL_CANCEL', $QUALIFIED_MODULE)}</a>
            </div>
        </div>
    </div>

    <input type="hidden" name="module" value="ITS4YouDynamicFields" />
    <input type="hidden" name="action" value="Save" />
    <input type="hidden" name="parent" value="Settings" />
    <input type="hidden" class="actual_step" value="2" />
    <input type="hidden" class="isgroup" value="0" />
    <input type="hidden" name="description" value="{$DYNAMICFIELDS_RECORD_MODEL->get('description')}" />
    <input type="hidden" name="record" value="{$RECORDID}" />
    <input type="hidden" name="followsup" value="{$FOLLOWS_UP}" />
    <input type="hidden" name="module_name" value="{$DYNAMICFIELDS_RECORD_MODEL->get('module_name')}" />
    <input type="hidden" name="conditions" id="advanced_filter" value='' />
    <input type="hidden" name="show_popup" value="{$SHOW_POPUP}" />    
    
    <input type="hidden" id="olderConditions" value='{ZEND_JSON::encode($DYNAMICFIELDS_RECORD_MODEL->get('conditions'))}' />
    <div class="row-fluid padding1per contentsBackground" style="border:1px solid #ccc;box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);">
        <label>
            <strong>{vtranslate('LBL_STEP_2',$QUALIFIED_MODULE)}: {vtranslate('LBL_STEP_2_INFO',$QUALIFIED_MODULE)}</strong>
        </label>
        <div id="advanceFilterContainer" class="conditionsContainer padding1per">
                {include file='AdvanceFilter.tpl'|@vtemplate_path RECORD_STRUCTURE=$RECORD_STRUCTURE}
            {*                        {include file="FieldExpressions.tpl"|@vtemplate_path:$QUALIFIED_MODULE EXECUTION_CONDITION=$LISTVIEWCOLORS_MODEL->get('execution_condition')}*}
        </div>
    </div><br>
    <div class="pull-right">
        <button class="btn btn-danger backStep" type="button"><strong>{vtranslate('LBL_BACK', $QUALIFIED_MODULE)}</strong></button>&nbsp;&nbsp;
        <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_NEXT', $QUALIFIED_MODULE)}</strong></button>
        <a class="cancelLink" type="reset" onclick="javascript:window.history.back();">{vtranslate('LBL_CANCEL', $QUALIFIED_MODULE)}</a>
    </div>
    <div class="clearfix"></div>
</form>
{/strip}