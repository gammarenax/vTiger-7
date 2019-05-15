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
<div class="span6">
    <div id="breadcrumb">
        <ul class="crumbs marginLeftZero">
            <li class="first step {if $ACTUAL_STEP eq "1"}active{/if}"  style="z-index:9" id="step1">
                <a>
                    <span class="stepNum">1 </span>
                    <span class="stepText">{vtranslate('LBL_MODULE',$QUALIFIED_MODULE)}</span>
                </a>
            </li>
            <li class="step last {if $ACTUAL_STEP eq "2"}active{/if}" style="z-index:7" id="step2">
                <a>
                    <span class="stepNum">2</span>
                    <span class="stepText">{vtranslate('LBL_FIELDS',$QUALIFIED_MODULE)}</span>
                </a>
            </li>
        </ul>
    </div>
</div>
{/strip}
