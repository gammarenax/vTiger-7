<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_License_View extends Settings_Vtiger_Index_View {

    public function process(Vtiger_Request $request) {
        $this->initializeContents($request);
    }

    public function initializeContents(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        $moduleName = $request->getModule();
        $viewer->assign('MODULE', $moduleName);

        $qualifiedModule = $request->getModule(false);
        $viewer->assign('QUALIFIED_MODULE', $qualifiedModule);
        $viewer->assign("URL", vglobal("site_URL"));

        $moduleModel = Vtiger_Module_Model::getInstance("ITS4YouDynamicFields");

        $company_details = Vtiger_CompanyDetails_Model::getInstanceById();
        $viewer->assign("COMPANY_DETAILS", $company_details);

        $isInstalled = ITS4YouDynamicFields_Module_Model::checkIfIsInstalled();

        if ($isInstalled) {

            $viewer = $this->getViewer($request);
            $mode = $request->get('mode');

            $viewer->assign("MODE", $mode);
            $viewer->assign("LICENSE", $moduleModel->GetLicenseKey());
            $viewer->assign("VERSION_TYPE", $moduleModel->GetVersionType());
            $viewer->assign("LICENSE_DUE_DATE", $moduleModel->GetLicenseDueDate(true));
            $viewer->assign("URL", vglobal("site_URL"));

            $tpl_name = "License";

            $settingLinks = array();
            $moduleSettingLinks = $moduleModel->getSettingLinks();
            foreach ($moduleSettingLinks as $settingsLink) {
                $settingLinks['LISTVIEWSETTING'][] = Vtiger_Link_Model::getInstanceFromValues($settingsLink);
            }

            $viewer->assign('LISTVIEW_LINKS', $settingLinks);

        } else {
            $step = 1;
            $current_step = 1;
            $total_steps = 2;

            if ($moduleModel->getLicenseKey() != '') {
                $step = 2;
                $viewer->assign("HIDE_SUCCESS_ALERT", true);
            }

            $viewer->assign("STEP", $step);
            $viewer->assign("CURRENT_STEP", $current_step);
            $viewer->assign("TOTAL_STEPS", $total_steps);

            $tpl_name = "Install";
        }

        $viewer->view($tpl_name.'.tpl', $qualifiedModule);
    }

    function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $r = "layouts.v7.modules.";


        $jsFileNames = array(
            $r.'Vtiger.resources.Vtiger',
            $r.'Vtiger.resources.List',
            $r.'Settings.'.$moduleName.'.resources.License',
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }
}
