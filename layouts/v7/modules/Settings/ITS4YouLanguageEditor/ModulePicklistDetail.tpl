{*
/*********************************************************************************
* The content of this file is subject to the Language Editor 4 You license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
********************************************************************************/
*}

{strip}
    {if !empty($NO_PICKLIST_FIELDS) }
        <label style="padding-top: 40px;">
            <b>
                {vtranslate($SELECTED_MODULE_NAME,$SELECTED_MODULE_NAME)} {vtranslate('NO_PICKLIST_FIELDS',$QUALIFIED_NAME)}. &nbsp;
            </b>
        </label>
    {else}
        <div class="row form-group">
            <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
                <label class="fieldLabel">
                    <strong>{vtranslate('LBL_SELECT_PICKLIST_IN',$QUALIFIED_MODULE)}&nbsp;{vtranslate($SELECTED_MODULE_NAME,$QUALIFIED_MODULE)}</strong>
                </label>
            </div>
            <div class="col-sm-3 col-xs-3 fieldValue">
                <select class="select2 inputElement" id="modulePickList" name="modulePickList">
                    {foreach key=PICKLIST_FIELD item=FIELD_MODEL from=$PICKLIST_FIELDS}
                        <option value="{$FIELD_MODEL->getId()}" {if $DEFAULT_FIELD eq $FIELD_MODEL->getName()} selected {/if}>
                            {vtranslate($FIELD_MODEL->get('label'),$SELECTED_MODULE_NAME)}
                        </option>
                    {/foreach}
                </select>
            </div>
        </div>
    {/if}
{/strip}