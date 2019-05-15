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
    <div class="editContainer">
        <div class="widget_header row-fluid">
            <div class="span12">
            <h3>
                {if $RECORDID eq ''}
                    {vtranslate('LBL_DEFINE_NEW_DYNAMIC_FIELDS',$QUALIFIED_MODULE)}
                {else}
                    {vtranslate('LBL_EDITING_DYNAMIC_FIELDS',$QUALIFIED_MODULE)} : {$DYNAMICFIELDS_RECORD_MODEL->get('description')}
                {/if}
            </h3>
            </div>
        </div>
        <hr>
        <!--div id="pull-left">
            <div id="breadcrumb">
                <ul class="crumbs marginLeftZero">
                    <li class="first step"  style="z-index:9" id="step1">
                        <a>
                            <span class="stepNum">1</span>
                            <span class="stepText">{vtranslate('LBL_MODULE',$QUALIFIED_MODULE)}</span>
                        </a>
                    </li>
                    <li style="z-index:8" class="step" id="step2">
                        <a>
                            <span class="stepNum">2</span>
                            <span class="stepText">{vtranslate('LBL_CONDITIONS',$QUALIFIED_MODULE)}</span>
                        </a>
                    </li>
                    <li class="step last" style="z-index:7" id="step3">
                        <a>
                            <span class="stepNum">3</span>
                            <span class="stepText">{vtranslate('LBL_FIELDS',$QUALIFIED_MODULE)}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div-->
        <div class="clearfix"></div>
    </div>
    <div class="dynamicfieldsContents">
        <input type="hidden" class="load_step" value="{$LOAD_STEP}" />
{/strip}
