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
<div class="col-sm-12 col-xs-12">
    <div id="table-content" class="table-container" style="padding-top:0px !important;">
        <table class="table listview-table">
            <thead>
            <tr class="listViewContentHeader">
                <th nowrap="">
                    <a class="listViewHeaderValues">{vtranslate('LBL_LANGUAGE',$QUALIFIED_MODULE)}</a>
                </th>
                <th nowrap="">
                    <a class="listViewHeaderValues">{vtranslate('LBL_NAME',$QUALIFIED_MODULE)}</a>
                </th>
                <th nowrap="">
                    <a class="listViewHeaderValues">{vtranslate('LBL_CODE',$QUALIFIED_MODULE)}</a>
                </th>
                <th nowrap="">
                    <a class="listViewHeaderValues">{vtranslate('LBL_STATUS',$QUALIFIED_MODULE)}</a>
                </th>
                <th nowrap="">
                    <a class="listViewHeaderValues">{vtranslate('LBL_ACTIONS',$QUALIFIED_MODULE)}</a>
                </th>
            </tr>
            </thead>
            <tbody class="overflow-y">
            {foreach item=LANG_INFO key=ID from=$LANGUAGES}
                <tr class="listViewEntries" data-prefix='{$LANG_INFO['prefix']}'
                    data-label='{$LANG_INFO['label']}' data-name='{$LANG_INFO['name']}'
                    data-recordurl="index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit&langPrefix={$LANG_INFO['prefix']}">
                    <td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer{if $LANG_INFO['active'] eq 0};color: rgb(153, 153, 153){/if};">{$LANG_INFO['name']}</td>
                    <td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer{if $LANG_INFO['active'] eq 0};color: rgb(153, 153, 153){/if};">{$LANG_INFO['label']}</td>
                    <td class="listViewEntryValue col-xs-3 tdListViewEntry" style="cursor:pointer{if $LANG_INFO['active'] eq 0};color: rgb(153, 153, 153){/if};">{$LANG_INFO['prefix']}</td>
                    <td class="listViewEntryValue col-xs-2 tdListViewEntry" style="cursor:pointer{if $LANG_INFO['active'] eq 0};color: rgb(153, 153, 153){/if};">
                        {if $LANG_INFO['active'] eq 0}
                                {vtranslate('LBL_INACTIVE', $QUALIFIED_MODULE)}
                            {else}
                                {vtranslate('LBL_ACTIVE', $QUALIFIED_MODULE)}
                        {/if}
                    </td>
                    <td class="listViewEntryValue col-xs-1" style="cursor:default">
                            <div class="table-actions">
                                <span class="more dropdown action">
                                    <span href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v icon"></i>
                                    </span>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="langButton">
                                                {if $LANG_INFO['prefix'] neq "en_us"}
                                                    {if !in_array($LANG_INFO['prefix'], $LANGUAGES_USED_BY_USERS)}
                                                        {if $LANG_INFO['active'] eq 0}
                                                            <i class="fa fa-toggle-on"></i> {vtranslate('LBL_TOOGLEON', $QUALIFIED_MODULE)}
                                                            {else}
                                                            <i class="fa fa-toggle-off"></i>  {vtranslate('LBL_TOOGLEOFF', $QUALIFIED_MODULE)}
                                                        {/if}
                                                    {/if}
                                                {/if}
                                            </a>
                                        </li>
                                        <li>
                                            {if in_array($LANG_INFO['prefix'], $DEFAULTLANGUAGES)}
                                                <a href="#" class="copyLanguage">
                                                    <i class="fa fa-copy"></i> {vtranslate('LBL_COPY', $QUALIFIED_MODULE)}
                                                </a>
                                                {else}
                                                {assign var="url" value=$LANGUAGEMODEL->getEditViewUrl()}
                                                <a href="{$url}&langPrefix={$LANG_INFO['prefix']}">
                                                    <i class="fa fa-edit"></i> {vtranslate('LBL_EDIT', $QUALIFIED_MODULE)}
                                                </a>
                                            {/if}
                                        </li>
                                        <li>
                                            {if !in_array($LANG_INFO['prefix'], $DEFAULTLANGUAGES)}
                                                {if !in_array($LANG_INFO['prefix'], $LANGUAGES_USED_BY_USERS)}
                                                    <a href="#" class="deleteLang">
                                                        <i class="fa fa-trash-o"></i> {vtranslate('LBL_REMOVE_LANG', $QUALIFIED_MODULE)}
                                                    </a>
                                                {/if}
                                            {/if}
                                        </li>
                                        {*<li>*}
                                            {*<a href="#" class="exportLang">*}
                                                {*<i class="fa fa-download"></i> {vtranslate('LBL_EXPORT_LANG', $QUALIFIED_MODULE)}*}
                                            {*</a>*}
                                        {*</li>*}
                                    </ul>
                                </span>
                            </div>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>
</div>
{/strip}