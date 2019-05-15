<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_Uninstall_View extends Settings_Vtiger_Index_View {

    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        $moduleName = $request->getModule();
        $moduleModel = Vtiger_Module_Model::getInstance("ITS4YouDynamicFields");
        $viewer->assign('MODULE', $moduleName);

        $qualifiedModule = $request->getModule(false);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModule);
        $viewer->view('Uninstall.tpl', $qualifiedModule);
    }

    function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $r = "layouts.v7.modules.";

        $jsFileNames = array(
            $r.'Vtiger.resources.Vtiger',
            $r.'Settings.'.$moduleName.'.resources.Uninstall',
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }
}