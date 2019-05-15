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
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-6">
                <h4>{vtranslate('LBL_MODULE_NAME',$QUALIFIED_MODULE)}</h4>
                {*<hr>*}
            </div>
            <div class="col-xs-12 col-sm-12 col-lg-6">
                {if $LISTVIEW_LINKS['LISTVIEWSETTING']|@count gt 0}
                    <div class="btn-group pull-right" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-wrench" alt="{vtranslate('LBL_SETTINGS', $MODULE)}"
                                  title="{vtranslate('LBL_SETTINGS', $MODULE)}"></span>&nbsp;&nbsp;&nbsp;
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            {foreach item=LISTVIEW_SETTING from=$LISTVIEW_LINKS['LISTVIEWSETTING']}
                                <li>
                                    <a href={$LISTVIEW_SETTING->getUrl()}>{vtranslate($LISTVIEW_SETTING->getLabel(), $QUALIFIED_MODULE)}</a>
                                </li>
                            {/foreach}
                        </ul>
                    </div>
                {/if}
            </div>
        </div>
        <hr>
        <div class="contents tabbable">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs layoutTabs massEditTabs">
                        <li class="active"><a href="#allLanguages" data-toggle="tab">
                                <strong>{vtranslate('LBL_AVAILABLE_LANGUAGES',$QUALIFIED_MODULE)}</strong></a>
                        </li>
                        <li><a href="#picklistTranslation" data-toggle="tab">
                                <strong>{vtranslate('LBL_PICKLIST_TRANSLATION',$QUALIFIED_MODULE)}</strong></a>
                        </li>
                    </ul>
                    <div class="tab-content layoutContent padding20 themeTableColor overflowVisible">
                        <div class="tab-pane active" id="allLanguages">
                            <div class="row-fluid">
                                <div class="col-sm-12 col-xs-12">
                                    <button class="btn addButton" name="createLangButton" id="createLangButton">
                                        <span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;
                                        <strong>{vtranslate('LBL_CREATE_NEW_LANGUAGE', $QUALIFIED_MODULE)}</strong>
                                    </button>
                                </div>
                            </div>
                            <br><br><br>
                            <div class="row-fluid" id="allLanguagesTableContent">
                                {*{include file="AllLanguagesContent.tpl"|vtemplate_path:"Settings:ITS4YouLanguageEditor"}*}
                                {*<div class="col-sm-12 col-xs-12">*}
                                {*<div id="table-content" class="table-container" style="padding-top:0px !important;">*}
                                {*<table class="table listview-table">*}
                                {*<thead>*}
                                {*<tr class="listViewContentHeader">*}
                                {*<th nowrap="">*}
                                {*<a class="listViewHeaderValues">{vtranslate('LBL_LANGUAGE',$QUALIFIED_MODULE)}</a>*}
                                {*</th>*}
                                {*<th nowrap="">*}
                                {*<a class="listViewHeaderValues">{vtranslate('LBL_NAME',$QUALIFIED_MODULE)}</a>*}
                                {*</th>*}
                                {*<th nowrap="">*}
                                {*<a class="listViewHeaderValues">{vtranslate('LBL_CODE',$QUALIFIED_MODULE)}</a>*}
                                {*</th>*}
                                {*<th nowrap="">*}
                                {*<a class="listViewHeaderValues">{vtranslate('LBL_ACTIONS',$QUALIFIED_MODULE)}</a>*}
                                {*</th>*}
                                {*</tr>*}
                                {*</thead>*}
                                {*<tbody class="overflow-y">*}
                                {*{foreach item=LANG_INFO key=ID from=$LANGUAGES}*}
                                {*<tr class="listViewEntries" data-prefix='{$LANG_INFO['prefix']}'*}
                                {*data-label='{$LANG_INFO['label']}' data-name='{$LANG_INFO['name']}'*}
                                {*data-recordurl="index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit&langPrefix={$LANG_INFO['prefix']}">*}
                                {*<td class="listViewEntryValue  col-xs-3">{$LANG_INFO['name']}</td>*}
                                {*<td class="listViewEntryValue  col-xs-4">{$LANG_INFO['label']}</td>*}
                                {*<td class="listViewEntryValue  col-xs-3">{$LANG_INFO['prefix']}</td>*}
                                {*<td class="listViewEntryValue  col-xs-3">*}
                                {*<div class="btn-group" role="group"*}
                                {*aria-label="Default button group">*}
                                {*{if $LANG_INFO['active'] eq 0}*}
                                {*<button type="button" class="btn btn-sm langButton"*}
                                {*title="{vtranslate('LBL_TOOGLEON', $QUALIFIED_MODULE)}">*}
                                {*<i class="fa fa-toggle-on fa-5x"></i>*}
                                {*</button>*}
                                {*{else}*}
                                {*<button type="button" class="btn btn-sm langButton"*}
                                {*title="{vtranslate('LBL_TOOGLEOFF', $QUALIFIED_MODULE)}">*}
                                {*<i class="fa fa-toggle-off fa-5x"></i>*}
                                {*</button>*}
                                {*&nbsp;&nbsp;<div class="round hollow green">*}
                                {*<i class="fa fa-toggle-on fa-lg"></i>*}
                                {*</div>&nbsp;&nbsp;*}
                                {*<div class="round hollow orange">*}
                                {*<i class="fa fa-copy fa-lg"></i>*}
                                {*</div>*}
                                {*{/if}*}
                                {*{if in_array($LANG_INFO['prefix'], $DEFAULTLANGUAGES)}*}
                                {*<button type="button" class="btn btn-sm copyLanguage"*}
                                {*title="{vtranslate('LBL_COPY', $QUALIFIED_MODULE)}">*}
                                {*<i class="fa fa-copy fa-5x"></i>*}
                                {*</button>*}
                                {*{else}*}
                                {*{assign var="url" value=$LANGUAGEMODEL->getEditViewUrl()}*}
                                {*<a href="{$url}&langPrefix={$LANG_INFO['prefix']}"*}
                                {*class="btn btn-sm">{vtranslate('LBL_EDIT', $QUALIFIED_MODULE)}*}
                                {*<i class="fa fa-edit fa-5x"></i>*}
                                {*</a>*}
                                {*{/if}*}
                                {*</div>*}
                                {*</td>*}
                                {*</tr>*}
                                {*{/foreach}*}
                                {*</tbody>*}
                                {*</table>*}
                                {*</div>*}
                                {*</div>*}
                            </div>
                        </div>
                        <div class="tab-pane" id="picklistTranslation">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-horizontal">
                                <div class="detailViewInfo">
                                    <div class="row form-group">
                                        <div class="col-lg-3 col-md-3 col-sm-3 control-label fieldLabel">
                                            <label class="fieldLabel"><strong>{vtranslate('LBL_SELECT_MODULE',$QUALIFIED_MODULE)} </strong></label>
                                        </div>
                                        <div class="fieldValue col-sm-3 col-xs-3">
                                            <select class="select2 inputElement" id="pickListModules"
                                                    name="pickListModules">
                                                <optgroup label="{vtranslate('LBL_MODULES', $QUALIFIED_MODULE)}">
                                                    {foreach item=PICKLIST_MODULE from=$PICKLIST_MODULES}
                                                        <option {if $SELECTED_MODULE_NAME eq $PICKLIST_MODULE->get('name')} selected="" {/if}
                                                                value="{$PICKLIST_MODULE->get('name')}">{vtranslate($PICKLIST_MODULE->get('label'),$QUALIFIED_MODULE)}</option>
                                                    {/foreach}
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="modulePickListContainer">
                                    {include file="ModulePicklistDetail.tpl"|vtemplate_path:"Settings:ITS4YouLanguageEditor"}
                                </div>
                                <div id="modulePickListValuesContainer">
                                    {if empty($NO_PICKLIST_FIELDS)}
                                        {include file="PickListValueDetail.tpl"|vtemplate_path:"Settings:ITS4YouLanguageEditor"}
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {*</div>*}
    <br>
    <div align="center" class="small" style="color: rgb(153, 153, 153);">{vtranslate("LBL_MODULE_NAME",$QUALIFIED_MODULE)} {$VERSION} :: <a href="http://www.its4you.sk/en" target="_new">{vtranslate("COPYRIGHT",$QUALIFIED_MODULE)}</a></div>
    <br>
{/strip}