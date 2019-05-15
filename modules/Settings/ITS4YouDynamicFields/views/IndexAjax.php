<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ********************************************************************************/

class Settings_ITS4YouDynamicFields_IndexAjax_View extends Settings_Vtiger_Index_View {

    function __construct() {
        parent::__construct();
        $this->exposeMethod('editLicense');
    }

    function preProcess(Vtiger_Request $request) {
        return true;
    }

    function postProcess(Vtiger_Request $request) {
        return true;
    }

    function process(Vtiger_Request $request) {
        
        $mode = $request->get('mode');
        if(!empty($mode)) {
                $this->invokeExposedMethod($mode, $request);
                return;
        }
        
        $type = $request->get('type');
    }

    function editLicense(Vtiger_Request $request) {
        
        $viewer = $this->getViewer($request);
        $qmodule = $request->getModule(false);
        $type = $request->get('type');
        $viewer->assign("TYPE", $type);
        
        $key = $request->get('key');
        $viewer->assign("LICENSEKEY", $key);
        
        $viewer->assign("QUALIFIED_MODULE", $qmodule);

        echo $viewer->view('EditLicense.tpl', $qmodule, true);
    }
}