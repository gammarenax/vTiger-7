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
{foreach key=index item=jsModel from=$SCRIPTS}
	<script type="{$jsModel->getType()}" src="{$jsModel->getSrc()}"></script>
{/foreach}
		


<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form-horizontal recordEditView" id="QuickEdit" name="QuickEdit" method="post" action="index.php">
            {assign var=HEADER_TITLE value={vtranslate('LBL_QUICK_EDITABLE', $SOURCE_MODULE)}|cat:" "|cat:{vtranslate($SINGLE_MODULE, $MODULE)}}
            {include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$HEADER_TITLE}

            {if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
                <input type="hidden" name="picklistDependency" value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}' />
            {/if}

            <div class="modal-body">
                {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE name="QuickViewBlockLevelLoop"}

                    <h4 class="fieldBlockHeader">{vtranslate($BLOCK_LABEL, $MODULE)}</h4>
                    <hr>
                    <table class="massEditTable table no-border">
                    <tbody>
                        <tr>
                        {assign var=COUNTER value=0}
                        {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                            {assign var="isReferenceField" value=$FIELD_MODEL->getFieldDataType()}
                            {assign var="refrenceList" value=$FIELD_MODEL->getReferenceList()}
                            {assign var="refrenceListCount" value=count($refrenceList)}
                            {if $FIELD_MODEL->get('uitype') eq "19"}
                                {if $COUNTER eq '1'}
                                    <td></td><td></td></tr><tr>
                                    {assign var=COUNTER value=0}
                                {/if}
                            {/if}
                            {if $COUNTER eq 2}
                                    </tr><tr>
                                    {assign var=COUNTER value=1}
                            {else}
                                    {assign var=COUNTER value=$COUNTER+1}
                            {/if}
                            <td class='fieldLabel alignMiddle'>
                                {if $isReferenceField neq "reference"}<label class="muted pull-right">{/if}

                                {if $isReferenceField eq "reference"}
                                    {if $refrenceListCount > 1}
                                        {assign var="DISPLAYID" value=$FIELD_MODEL->get('fieldvalue')}
                                        {assign var="REFERENCED_MODULE_STRUCT" value=$FIELD_MODEL->getUITypeModel()->getReferenceModule($DISPLAYID)}
                                        {if !empty($REFERENCED_MODULE_STRUCT)}
                                                {assign var="REFERENCED_MODULE_NAME" value=$REFERENCED_MODULE_STRUCT->get('name')}
                                        {/if}
                                        <span class="pull-right">
                                                {if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}
                                                <select style="width: 150px;" class="chzn-select referenceModulesList" id="referenceModulesList">
                                                        <optgroup>
                                                                {foreach key=index item=value from=$refrenceList}
                                                                        <option value="{$value}" {if $value eq $REFERENCED_MODULE_NAME} selected {/if} >{vtranslate($value, $value)}</option>
                                                                {/foreach}
                                                        </optgroup>
                                                </select>
                                        </span>
                                    {else}
                                        <label class="muted pull-right">{if $FIELD_MODEL->isMandatory() eq true} <span class="redColor">*</span> {/if}{vtranslate($FIELD_MODEL->get('label'), $MODULE)}</label>
                                    {/if}
                                {else}
                                    {vtranslate($FIELD_MODEL->get('label'), $MODULE)}
                                {/if}
                                {if $FIELD_MODEL->isMandatory() eq true && $isReferenceField neq "reference"} <span class="redColor">*</span> {/if}
                                {if $isReferenceField neq "reference"}</label>{/if}
                            </td>
                            <td class="fieldValue" {if $FIELD_MODEL->get('uitype') eq '19'} colspan="3" {assign var=COUNTER value=$COUNTER+1} {/if}>
                                    {include file=vtemplate_path($FIELD_MODEL->getUITypeModel()->getTemplateName(),$MODULE)}
                            </td>
                            {if $smarty.foreach.blockfields.last eq true AND $BLOCK_FIELDS|@count neq 1 AND $COUNTER eq 1}
                                    <td class="fieldLabel"></td><td></td>
                            {/if}
                        {/foreach}
                    </tr>
                    </table>
                {if $smarty.foreach.QuickViewBlockLevelLoop.last neq true}<br>{/if}
                {/foreach}
            </div>

            <div class="modal-footer quickCreateActions">
                {assign var="EDIT_VIEW_URL" value=$MODULE_MODEL->getCreateRecordUrl()}
                <a class="cancelLink cancelLinkContainer pull-right" type="reset" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</a>
                <button class="btn btn-success" type="submit"><strong>{vtranslate('LBL_APPLY', $SOURCE_MODULE)}</strong></button>
            </div>
        </form>
    </div>
</div>
{/strip}