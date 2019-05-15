{*<!--
/*********************************************************************************
 * The content of this file is subject to the Reports license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/
-->*}
{strip}&nbsp;
<div class="contentsDiv marginLeftZero" >
<div class="padding1per">
<div class="editContainer" style="padding-left: 3%;padding-right: 0%; min-height:70em;"><h3>{vtranslate('LBL_MODULE_NAME',$MODULE)} {vtranslate('LBL_INSTALL',$MODULE)}</h3>
<hr>
<div id="breadcrumb">
    <ul class="crumbs marginLeftZero">
        <li class="first step {if $STEP eq "1"}active{/if}" style="z-index:10;" id="steplabel1"><a><span class="stepNum">1</span><span class="stepText">{vtranslate('LBL_VALIDATION',$MODULE)}</span></a></li>
        {if $TOTAL_STEPS eq "4"}
        <li class="step {if $STEP eq "2"}active{/if}" style="z-index:9;"  id="steplabel2"><a><span class="stepNum">2</span><span class="stepText">{vtranslate('LBL_IMPORT_STEP',$MODULE)}</span></a></li>
        {/if}
        {if $TOTAL_STEPS eq "4"}
            <li class="step {if $STEP eq "3"}active{/if}" style="z-index:9;"  id="steplabel3"><a><span class="stepNum">3</span><span class="stepText">{vtranslate('LBL_DOWNLOAD_STEP',$MODULE)}</span></a></li>
        {/if}
        <li class="step last {if $CURRENT_STEP eq $TOTAL_STEPS}active{/if}" style="z-index:7;"  id="steplabel{$TOTAL_STEPS}"><a><span class="stepNum">{$TOTAL_STEPS}</span><span class="stepText">{vtranslate('LBL_FINISH',$MODULE)}</span></a></li>
    </ul>
</div>
<div class="clearfix">
</div>
<form name="install" id="editLicense"  method="POST" action="index.php" class="form-horizontal">
<input type="hidden" name="module" value="{$MODULE}"/>
<input type="hidden" name="view" value="List"/>
  
<div id="step1" class="padding1per" style="border:1px solid #ccc; {if $STEP neq "1"}display:none;{/if}" >
    <input type="hidden" name="installtype" value="validate"/>                                       
    <div class="controls">
        <div>
            <strong>{vtranslate('LBL_WELCOME',$MODULE)}</strong>
        </div>
        <br>
        <div class="clearfix">
        </div>
    </div>
    <div class="controls">
        <div>
           {vtranslate('LBL_WELCOME_DESC',$MODULE)}</br>
            {vtranslate('LBL_WELCOME_FINISH',$MODULE)}
        </div>
        <br>
        <div class="clearfix">
        </div>
    </div>
    <div class="controls">
        <div>
            <strong>{vtranslate('LBL_INSERT_KEY',$MODULE)}</strong>
        </div>
        <div>
            {vtranslate('LBL_ONLINE_ASSURE',$MODULE)}
        </div>
        <div class="clearfix">
        </div>
    </div>
     <div class="controls paddingTop20">    
                {include file='LicenseDetails.tpl'|@vtemplate_path:'ITS4YouReports'}
    </div>
    <div class="clearfix">
    </div>
</div>

{if $TOTAL_STEPS eq "4"}
    <div id="step2" class="padding1per" style="border:1px solid #ccc;  {if $STEP neq "2"}display:none;{/if}">
        <input type="hidden" name="installtype" value="download_src"/>
        <div class="controls">
            <div>
                {vtranslate('LBL_IMPORT_SKIP_1',$MODULE)}
                <strong>"{vtranslate('LBL_IMPORT')}"</strong>
                {vtranslate('LBL_IMPORT_SKIP_2',$MODULE)}
                <strong>"{vtranslate('LBL_NEXT',$MODULE)}"</strong>
                {vtranslate('LBL_IMPORT_SKIP_3',$MODULE)}
                <br /><br />
            </div>
            <br>
        </div>
        <div class="controls">
            <div>
                <button type="submit" id="import_button" class="btn btn-success" /><strong>{vtranslate('LBL_IMPORT',$MODULE)}</strong></button>&nbsp;&nbsp;
                <button type="submit" id="skip_import_button" class="btn btn-success" /><strong>{vtranslate('LBL_NEXT',$MODULE)}</strong></button>&nbsp;&nbsp;
            </div>
            <br>
            <div class="clearfix">
            </div>
        </div>
    </div>
    <div id="step3" class="padding1per" style="border:1px solid #ccc;  {if $STEP neq "3"}display:none;{/if}">

        <input type="hidden" name="installtype" value="download_src"/>
        <div class="controls">
            <div>
                <strong>{vtranslate('LBL_DOWNLOAD_SRC',$MODULE)}</strong>
            </div>
            <br>
            <div class="clearfix">
            </div>
        </div>

        <div class="controls">
            <div>
                {vtranslate('LBL_DOWNLOAD_SRC_DESC',$MODULE)}
            </div>
            <br>
            <div class="clearfix">
            </div>
        </div>
        <div class="controls">
            <button type="button" id="download_button" class="btn btn-success" onclick="window.open( 'http://www.its4you.sk/en/images/extensions/Reports4You/src/highcharts_7x.zip' , '_newtab');"/><strong>{vtranslate('LBL_DOWNLOAD',$MODULE)}</strong></button>&nbsp;&nbsp;
            <button type="button" id="finish_button" class="btn btn-success" onclick="location.reload(true);"/><strong>{vtranslate('LBL_FINISH',$MODULE)}</strong></button>&nbsp;&nbsp;
        </div>
    </div>
{/if}

<div id="step{$TOTAL_STEPS}" class="padding1per" style="border:1px solid #ccc; {if $STEP neq "4"}display:none;{/if}" >
    <input type="hidden" name="installtype" value="redirect_recalculate" />
    <div class="controls">
        <div>{vtranslate('LBL_INSTALL_SUCCESS',$MODULE)}</div>
        <div class="clearfix">
        </div>
    </div> 
    <br>
    <div class="controls">
        <button type="submit" id="next_button" class="btn btn-success"/><strong>{vtranslate('LBL_FINISH',$MODULE)}</strong></button>&nbsp;&nbsp;
    </div>
</div>

</form> 
</div> 
</div>
</div>
<script language="javascript" type="text/javascript">
    jQuery(document).ready(function() {
        var thisInstance = ITS4YouReports_License_Js.getInstance();
        thisInstance.registerInstallEvents();
    });
</script>
{/strip}