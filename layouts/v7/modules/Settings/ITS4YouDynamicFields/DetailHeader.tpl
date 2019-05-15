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
            {if $MODE eq "FieldsGroup"}
                {vtranslate('LBL_DETAIL_DYNAMIC_GROUP',$QUALIFIED_MODULE)}
            {else}
                {vtranslate('LBL_DYNAMIC_FIELDS_LAYOUT',$QUALIFIED_MODULE)}
            {/if}
        </h4>
    </div>
{/strip}
