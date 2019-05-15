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
    <ul class="nav nav-tabs massEditTabs" style="margin-bottom: 0;border-bottom: 0">
        {foreach item=LANG_INFO key=ID name=LANG from=$LANGUAGES}
            {if $LANG_INFO['active'] eq 1}
                <li {if $smarty.foreach.LANG.first}class="active"{/if} title="{$LANG_INFO['label']}">
                    <a href="#{$LANG_INFO['prefix']}" data-toggle="tab">
                        <strong>{$LANG_INFO['prefix']}</strong>
                    </a>
                </li>
            {/if}
        {/foreach}
    </ul>
    <div class="tab-content layoutContent padding20 themeTableColor overflowVisible">
    <br>
    {foreach item=LANG_INFO key=ID name=LANG from=$LANGUAGES}
    {if $smarty.foreach.LANG.first}
    <div class="tab-pane active" id="{$LANG_INFO['prefix']}">
        {else}
        <div class="tab-pane" id="{$LANG_INFO['prefix']}">
            {/if}
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <table id="pickListValuesTable" class="table table-bordered" style="table-layout: fixed">
                        <thead>
                        <tr class="listViewHeaders">
                            <th style="border-right: none">{vtranslate($SELECTED_PICKLIST_FIELDMODEL->get('label'),$SELECTED_MODULE_NAME)}
                                &nbsp;{vtranslate('LBL_ITEMS',$QUALIFIED_MODULE)}</th>
                            <th style="border-left: none">{vtranslate('LBL_TRANSLATION', $QUALIFIED_MODULE)}</th>
                        </tr>
                        </thead>
                        <tbody>
                            {assign var=PICKLIST_VALUES value=$SELECTED_PICKLISTFIELD_ALL_VALUES}
                            {foreach key=PICKLIST_KEY item=PICKLIST_VALUE from=$PICKLIST_VALUES}
                                <tr class="pickListValue" data-key-id="{$PICKLIST_KEY}" data-key="{Vtiger_Util_Helper::toSafeHTML($PICKLIST_VALUE)}" data-lang="{$LANG_INFO['prefix']}"
                                    data-langtranslate="{htmlspecialchars(Vtiger_Language_Handler::getLanguageTranslatedString($LANG_INFO['prefix'],$PICKLIST_VALUE,$SELECTED_MODULE_NAME))}">
                                    <td class="textOverflowEllipsis" style="border-right: none">{$PICKLIST_VALUE}</td>
                                    <td style="border-left: none">
                                        <input type="text" class="inputElement nameField pickListTranslation" value="{htmlspecialchars(Vtiger_Language_Handler::getLanguageTranslatedString($LANG_INFO['prefix'],$PICKLIST_VALUE,$SELECTED_MODULE_NAME))}">
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
{/strip}