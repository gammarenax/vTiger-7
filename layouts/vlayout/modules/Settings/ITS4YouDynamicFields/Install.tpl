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
<div class="editContainer"><h3>{vtranslate('LBL_MODULE_NAME',$QUALIFIED_MODULE)} {vtranslate('LBL_INSTALL',$QUALIFIED_MODULE)}</h3>    
    <hr>
    <div id="breadcrumb">             
        <ul class="crumbs marginLeftZero">
            <li class="first step {if $STEP eq "1"}active{/if}" style="z-index:10;" id="steplabel1"><a><span class="stepNum">1</span><span class="stepText">{vtranslate('LBL_VALIDATION',$QUALIFIED_MODULE)}</span></a></li>
            <li class="step last {if $STEP eq "2"}active{/if}" style="z-index:7;"  id="steplabel2"><a><span class="stepNum">2</span><span class="stepText">{vtranslate('LBL_FINISH',$QUALIFIED_MODULE)}</span></a></li>
        </ul>
    </div>
    <div class="clearfix">
    </div>
    <form name="install" id="editLicense"  method="POST" action="index.php" class="form-horizontal">
        <input type="hidden" name="module" value="ITS4YouDynamicFields"/>
        <input type="hidden" name="parent" value="Settings"/>
        <input type="hidden" name="view" value="install"/>
        <div id="step1" class="padding1per" style="border:1px solid #ccc; {if $STEP neq "1"}display:none;{/if}" >    
            <input type="hidden" name="installtype" value="validate"/>                                       
            <div class="controls">
                <div>
                    <strong>{vtranslate('LBL_WELCOME',$QUALIFIED_MODULE)}</strong>
                </div>
            </div>
            <div class="controls paddingTop20">
                <div>
                    {vtranslate('LBL_WELCOME_DESC',$QUALIFIED_MODULE)}</br>{vtranslate('LBL_WELCOME_FINISH',$QUALIFIED_MODULE)}
                </div>
            </div>  

            <div class="controls paddingTop20">
                <div>
                    <strong>{vtranslate('LBL_INSERT_KEY',$QUALIFIED_MODULE)}</strong>
                </div>
                <div>
                    {vtranslate('LBL_ONLINE_ASSURE',$QUALIFIED_MODULE)}
                </div>
            </div> 

            <div class="controls paddingTop20">    
                {include file='LicenseDetails.tpl'|@vtemplate_path:$QUALIFIED_MODULE}
            </div> 
        </div>                                                     
        <div id="step2" class="padding1per" style="border:1px solid #ccc;display:none;" >
            <input type="hidden" name="installtype" value="redirect_recalculate" />
            <div class="controls">
                <div>{vtranslate('LBL_INSTALL_SUCCESS',$QUALIFIED_MODULE)}</div>
                <div class="clearfix">
                </div>
            </div> 
            <br>
            <div class="controls">
                <button type="submit" id="next_button" class="btn btn-success"/><strong>{vtranslate('LBL_FINISH',$QUALIFIED_MODULE)}</strong></button>&nbsp;&nbsp;
            </div>
        </div>	
    </form> 
</div> 

<script language="javascript" type="text/javascript">
    jQuery(document).ready(function() {
        Settings_ITS4YouDynamicFields_License_Js.registerInstallEvents();
    });
</script>     
{/strip}

