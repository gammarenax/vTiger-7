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
                <h4>{vtranslate('LBL_LANGUAGE',$QUALIFIED_MODULE)} {$LANG_LABEL}</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form>
                    <input type="hidden" name="langPrefix" id="langPrefix" value="{$LANG_PREFIX}">
                    <table id="selectingLanguage" class="table table-bordered table-responsive table-condensed table">
                        <thead class="tableHeader">
                        <tr>
                            <th colspan="6"><label
                                        class="pull-left"><b>{vtranslate("LBL_EDITOR_SETTINGS",$QUALIFIED_MODULE)}</b></label>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle"><label class="pull-right">{vtranslate("LBL_PREVIEW_LANG",$QUALIFIED_MODULE)}:</label></td>
                                <td>
                                    <select class="select2 inputElement" id="SelectLanguage" name="SelectLanguage">
                                        <option value="none">{vtranslate("LBL_NONE",$QUALIFIED_MODULE)}</option>
                                        {foreach item=LANG_INFO key=ID from=$LANGUAGES}
                                            {if $LANG_INFO['active'] eq 1}
                                                <option value="{$LANG_INFO['prefix']}">{$LANG_INFO['name']}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </td>
                                <td style="vertical-align: middle"><label class="pull-right">{vtranslate("LBL_MODULE",$QUALIFIED_MODULE)}:</label></td>
                                <td>
                                    <select class="select2 inputElement" id="SelectModule" name="SelectModule">
                                        <option value="none">{vtranslate("LBL_SELECT_OPTION", $QUALIFIED_MODULE)}</option>
                                        <optgroup style="border: none" label="{vtranslate('LBL_GLOBAL_LANG', $QUALIFIED_MODULE)}">
                                            {foreach item=NAME key=KEY from=$GLOBAL_LANG}
                                                <option value="g_{$NAME}">{vtranslate($NAME)}</option>
                                            {/foreach}
                                        </optgroup>
                                        <optgroup style="border: none" label="{vtranslate('LBL_MODULES_LANG', $QUALIFIED_MODULE)}">
                                            {foreach item=MOD_NAME key=KEY from=$MODULES}
                                                <option value="m_{$MOD_NAME}">{vtranslate($MOD_NAME)}</option>
                                            {/foreach}
                                        </optgroup>
                                        <optgroup style="border: none" label="{vtranslate('LBL_SETTING_LANG', $QUALIFIED_MODULE)}">
                                            {foreach item=S_M_NAME key=KEY from=$SETTINGS_MODULES}
                                                <option value="s_{$S_M_NAME}">{vtranslate($S_M_NAME)}</option>
                                            {/foreach}
                                        </optgroup>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle"><label class="pull-right">{vtranslate("LBL_SEARCH_TRANS",$QUALIFIED_MODULE)}:</label></td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="transSearch" id="trans_search" class="inputElement">
                                        <span class="input-group-addon">
                                            <i id="clear_trans_search" class="fa fa-times" title="Clear"></i>
                                        </span>
                                    </div>
                                </td>
                                <td style="vertical-align: middle"><label class="pull-right">{vtranslate("LBL_SHOW_MISSING_TRANS",$QUALIFIED_MODULE)}:</label></td>
                                <td style="vertical-align: middle">
                                    <input type="checkbox" name="missingTrans" id="missingTrans" class="inputElement">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="listViewContentDiv" id="listViewContents">
    {*</div>*}
    {*</div>*}
{/strip}