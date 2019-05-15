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
<div class="dynamicfieldsContents col-lg-12 col-md-12 col-sm-12">
    <div class="editViewHeader">
        <h4>
            {if $RECORDID eq ''}
                {if $MODE eq 'FieldsLayout'}
                    {vtranslate('LBL_NEW_DYNAMIC_FIELDS_LAYOUT',$QUALIFIED_MODULE)}
                {elseif $MODE eq 'DefaultForm'}
                    {vtranslate('LBL_DEFAULT_FORM_FOR_MODULE',$QUALIFIED_MODULE)}: {vtranslate($SOURCE_MODULE,$SOURCE_MODULE)}
                {else}
                    {vtranslate('LBL_NEW_DYNAMIC_FIELDS_GROUP',$QUALIFIED_MODULE)}
                {/if}
            {else}
                {if $MODE eq 'FieldsLayout'}
                    {vtranslate('LBL_EDITING_DYNAMIC_FIELDS',$QUALIFIED_MODULE)}
                {elseif $MODE eq 'DefaultForm'}
                    {vtranslate('LBL_DEFAULT_FORM_FOR_MODULE',$QUALIFIED_MODULE)}: {vtranslate($SOURCE_MODULE,$SOURCE_MODULE)}
                {else}
                    {vtranslate('LBL_EDITING_DYNAMIC_GROUP',$QUALIFIED_MODULE)}
                {/if}
            {/if}
        </h4>
    </div>
    <input type="hidden" class="load_step" value="{$LOAD_STEP}" />
{/strip}
