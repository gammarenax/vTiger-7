{*
/**
 * VGS Related Module Updates
 *
 *
 * @package        VGSRelModUpdates Module
 * @author         Conrado Maggi
 * @license        Comercial / VPL
 * @copyright      2014 VGS Global
 * @version        Release: 1.0
 */
*}

<div style="width: 65%;margin: auto;margin-top: 2em;padding: 2em;" id="relform">
    <h3 style="padding-bottom: 1em;text-align: center">{vtranslate('LBL_MODULE_NAME', $MODULE)}</h3>
    <div class="row" style="margin: 1em;">


        <div class="alert alert-warning" style="float: left;margin-left:1em !important; margin-bottom: 0px !important;margin-top: 0px !important;width: 80%;">
            {vtranslate('notice', $MODULE)}
        </div>

    </div>


    <div>
        <h4 style="margin-top: 4em;margin-bottom: 0.5em;">{vtranslate('ADD_NEW_UPDATE', $MODULE)}</h4>
        <p>{vtranslate('ADD_NEW_UPDATE_EXPLAIN', $MODULE)}</p>
        <table class="table table-bordered table-condensed themeTableColor" style="margin-top: 1em;">
            <thead>
                <tr class="blockHeader">
                    <th colspan="4" class="mediumWidthType"><span class="alignMiddle">{vtranslate('ADD_NEW_UPDATE', $MODULE)}</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('Source Module', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="module1"  class="chzn-select" id="module1">
                            <option value="-">--</option>
                            {foreach from=$ENTITY_MODULES item=MODULE1}
                                <option value="{$MODULE1}">{vtranslate($MODULE1)}</option>
                            {/foreach}
                        </select>    
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('Source Field', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="picklist1"  class="picklist chzn-select" id="picklist1">
                            <option value="-">--</option>

                        </select>
                    </td>
                </tr>
                   <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('When Field Value Equals to', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <div id="fieldVal1"></div>
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('Update Module', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="module2"   class="chzn-select" id="module2">
                            <option value="-">--</option>
                            
                        </select>
                    </td>
                </tr>
                    <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('Target Field to Update', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <select name="picklist2"  class="picklist chzn-select" id="picklist2">
                            <option value="-">--</option>

                        </select>
                    </td>
                </tr>
                 <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('Value to set', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <div id="fieldVal2"></div>
                    </td>
                </tr>
                <tr>
                    <td width="50%" colspan="2"><label class="muted pull-right marginRight10px">{vtranslate('First Time the condition is true', $MODULE)}</label></td>
                    <td colspan="2" style="border-left: none;">
                        <input type="checkbox" id="firstcond" name="firstcond"></input>
                    </td>
                </tr>

                

            </tbody>
        </table>
       
        <br><br>
        <button class="btn pull-right" style="margin-bottom: 0.5em;" id="add_entry">{vtranslate('SAVE', $MODULE)}</button>
        <a class="pull-right" style="margin-right: 2%;" href="javascript:history.go(-1)">{vtranslate('Cancel', $MODULE)}</a>
     
    </div>
</div>
