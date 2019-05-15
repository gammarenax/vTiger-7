{*<!--
/*********************************************************************************
* The content of this file is subject to the Dynamic Fields 4 You.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
-->*}
<input type='hidden' value='{$MODE}' name='actualmode'>
<div class='hide'>
    <input type='hidden' value='0' name='isgroup'>
    <input type='hidden' value='{if $IS_INVENTORY_MODULE eq "yes"}1{else}0{/if}' id='is_inventory_module' name='is_inventory_module'>
    <input type='hidden' value='{$ALL_FIELDS|count}' id='new_fields' name='new_fields'>
    <input type='hidden' value='{$ALL_BLOCKS|count}' id='new_blocks' name='new_blocks'>
    <input type='hidden' value='{$ALL_FIELDS_GROUPS|count}' id='new_fields_groups' name='new_fields_groups'>
    <select id='field_options'>
        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
        {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
            {if $BLOCK_LABEL != 'LBL_ITEM_DETAILS' || $IS_INVENTORY_MODULE neq "yes"}
                <optgroup label="{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}">
                        {foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
                            <option value="{$FIELD_NAME}">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</option>
                        {/foreach}
                </optgroup>
            {/if}
        {/foreach}
    </select>

    <select id="field_action_options">
        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
        {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
            <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
        {/foreach}
        <option value='mandatory'>{vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
    </select>

    <select class="select2 col-lg-12" id='block_options'>
        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
        {foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE}
            <option value="{$BLOCK_LABEL}">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</option>
        {/foreach}
    </select>

    <select id="block_action_options">
        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
        {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
            <option value="{$VISIBLE_KEY}">{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
        {/foreach}
    </select>

    {if $FIELDS_GROUPS_STRUCTURE|count > 0}
    <select class="select2 col-lg-12" id='fields_groups_options'>
        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
        {foreach key=GROUP_ID item=GROUP_LABEL from=$FIELDS_GROUPS_STRUCTURE}
            <option value="{$GROUP_ID}">{vtranslate($GROUP_LABEL, $SELECTED_MODULE_NAME)}</option>
        {/foreach}
    </select>
    {/if}
</div>

<div class=" tab-content layoutContent padding20 themeTableColor overflowVisible">
    <div class="col-lg-3 col-md-3 col-sm-3"></div>
    <div class="col-lg-6 col-md-6 col-sm-6">
        <table id='fieldsTable' class="table table-bordered">
            <thead>
                <tr>
                    <th class="listViewHeaders bgColor" colspan="3">
                            {vtranslate('LBL_FIELDS', $QUALIFIED_MODULE)}
                    </th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                    {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                    <td class="fieldLabel medium" style="width: 60%"></td>
                    <td class="fieldLabel medium" style="width: 40%" {if $MODE neq "FieldsGroup"}colspan='2'{/if}>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                </tr>
                {foreach item=FIELD_MODEL key=FIELD_NAME name="foreachfields" from=$ALL_FIELDS}

                    {assign var=IS_MANDATORY value=$DYNAMICFIELDS_RECORD_MODEL->isMandatory($FIELD_NAME)}
                    <tr id='field_tr_seq_{$smarty.foreach.foreachfields.iteration}'>
                        {assign var=VISIBLE_TYPE value=$DYNAMICFIELDS_RECORD_MODEL->getVisibility($FIELD_NAME)}
                        <td class="fieldLabel medium" style="width: 20%;">
                            <label class="muted pull-right marginRight10px">{vtranslate($FIELD_MODEL->get('label'), $SELECTED_MODULE_NAME)}</label>
                            <input type="hidden" name="field_visibility_{$smarty.foreach.foreachfields.iteration}" value="{$FIELD_NAME}">
                        </td>
                            {if $MODE neq "FieldsGroup"}
                                <td style="width: 20%" data-fieldname="{$FIELD_NAME}">
                                    <select class="select2 col-lg-6" name="field_select_visibility_{$smarty.foreach.foreachfields.iteration}">
                                        <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                        {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                            <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $VISIBLE_TYPE && $IS_MANDATORY neq "yes"}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)}</option>
                                        {/foreach}
                                        <option value='mandatory' {if $IS_MANDATORY eq "yes"}selected{/if}> {vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
                                    </select>
                                </td>
                            {/if}
                        <td style='width:2%;vertical-align: middle;'>
                            <a href='javascript:;'><i class="fa fa-trash trashField" data-type="field" data-seq='{$smarty.foreach.foreachfields.iteration}'></i></a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>

        <div class="row-fluid marginBottom10px">
            <div class="span6 btn-toolbar">
                <button class="btn addButton addField"><i class="fa fa-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_FIELD', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div>

        <table id='blocksTable' class="table table-bordered blockContainer showInlineTable equalSplit">
            <thead>
                <tr>
                    <th class="listViewHeaders bgColor" colspan="3">
                            {vtranslate('LBL_BLOCKS', $QUALIFIED_MODULE)}
                    </th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    {assign var=LABEL_VISIBLE value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_VISIBLE', $QUALIFIED_MODULE)}</label>"}
                    {assign var=LABEL_MANDATORY value="<label class=\"muted textAlignCenter marginRight10px\">{vtranslate('LBL_MANDATORY', $QUALIFIED_MODULE)}</label>"}
                    <td class="fieldLabel medium" style="width: 60%"></td>
                    <td class="fieldLabel medium" style="width: 40%" {if $MODE neq "FieldsGroup"}colspan='2'{/if}>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                </tr>
                {foreach item=BLOCK_VISIBLE_TYPE key=BLOCK_LABEL name='foreachblocks' from=$ALL_BLOCKS}

                    <tr id="block_tr_seq_{$smarty.foreach.foreachblocks.iteration}">
                        {assign var=BLOCK_SEQ value=$smarty.foreach.foreachblocks.iteration}
                        <td class="fieldLabel medium" style="width: 20%;">
                            <label class="muted pull-right marginRight10px">{vtranslate($BLOCK_LABEL, $SELECTED_MODULE_NAME)}</label>
                            <input type="hidden" name="block_visibility_{$BLOCK_SEQ}" value="{$BLOCK_LABEL}">
                        </td>
                        {if $MODE neq "FieldsGroup"}
                            <td style="width: 20%" data-fieldname="{$BLOCK_ID}">
                                <select class="select2 col-lg-6" name="block_select_visibility_{$BLOCK_SEQ}" id="visibility_{$BLOCK_SEQ}">
                                    <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                    {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                        <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $BLOCK_VISIBLE_TYPE}selected{/if} {if $IS_INVENTORY_MODULE eq "yes" && $BLOCK_LABEL eq "LBL_ITEM_DETAILS" && $VISIBLE_KEY eq "3"}disabled="disabled"{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                    {/foreach}
                                </select>
                            </td>
                        {/if}
                        <td style='width:2%;vertical-align: middle;'>
                            <a href='javascript:;'><i class="fa fa-trash trashBlock" data-type="block" data-seq='{$BLOCK_SEQ}'></i></a>
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        <div class="row-fluid">
            <div class="span8 btn-toolbar">
                <button class="btn addButton addBlock"><i class="fa fa-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_BLOCK', $QUALIFIED_MODULE)}</strong></button>
            </div>
        </div><br>
        {if $FIELDS_GROUPS_STRUCTURE|count > 0 && $MODE neq "FieldsGroup"}
            <table id='fieldsGroupsTable' class="table table-bordered blockContainer showInlineTable equalSplit">
                <thead>
                    <tr>
                        <th class="listViewHeaders bgColor" colspan="3">
                                {vtranslate('LBL_FIELDS_GROUPS', $QUALIFIED_MODULE)}
                        </th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                        <td class="fieldLabel medium" style="width: 60%"></td>
                        <td class="fieldLabel medium" style="width: 40%" colspan='2'>{vtranslate('LBL_ACTION', $QUALIFIED_MODULE)}</td>
                    </tr>
                    {foreach item=FG_DATA key=FG_ID name="foreachfieldsgroups" from=$ALL_FIELDS_GROUPS}
                        {assign var=FG_VISIBLE_TYPE value=$FG_DATA.visible}
                        {assign var=IS_MANDATORY value=$FG_DATA.mandatory}
                        <tr id='fields_group_tr_seq_{$smarty.foreach.foreachfieldsgroups.iteration}'>
                            <td class="fieldLabel medium" style="width: 20%;">
                                <label class="muted pull-right marginRight10px">{$FIELDS_GROUPS_STRUCTURE[$FG_ID]}</label>
                                <input type="hidden" name="fields_group_visibility_{$smarty.foreach.foreachfieldsgroups.iteration}" value="{$FG_ID}">
                            </td>
                            <td style="width: 20%" data-fieldname="{$FG_ID}">
                                        <select class="select2 col-lg-6" name="fields_group_select_visibility_{$smarty.foreach.foreachfieldsgroups.iteration}">
                                            <option value="0">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>

                                            {foreach item=VISIBLE_VALUE key=VISIBLE_KEY from=$DYNAMICFIELDS_MODEL->getVisibilityCases()}
                                                <option value="{$VISIBLE_KEY}" {if $VISIBLE_KEY eq $FG_VISIBLE_TYPE && $IS_MANDATORY neq "1"}selected{/if}>{vtranslate($VISIBLE_VALUE, $QUALIFIED_MODULE)} </option>
                                            {/foreach}
                                            <option value='mandatory' {if $IS_MANDATORY eq "1"}selected{/if}> {vtranslate('LBL_SHOW_AS_MANDATORY', $QUALIFIED_MODULE)}</option>
                                        </select>
                            </td>
                            <td style='width:2%;vertical-align: middle;'>
                                <a href='javascript:;'><i class="fa fa-trash trashFieldsGroup" data-type="fields_group" data-seq='{$smarty.foreach.foreachfieldsgroups.iteration}'></i></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <div class="row-fluid marginBottom10px">
                <div class="span6 btn-toolbar">
                    <button class="btn addButton addFieldsGroup"><i class="fa fa-plus"></i>&nbsp;<strong>{vtranslate('LBL_ADD_FIELDS_GROUP', $QUALIFIED_MODULE)}</strong></button>
                </div>
            </div>
        {/if}
    </div>
</div>