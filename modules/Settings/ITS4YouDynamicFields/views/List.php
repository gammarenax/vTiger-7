<?php
/* * *******************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouDynamicFields_List_View extends Settings_Vtiger_List_View {

    public function process(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);

        $isInstalled = ITS4YouDynamicFields_Module_Model::checkIfIsInstalled();
        if (!$isInstalled) {
            $SettingsITS4YouDynamicFieldsLicenseView = new Settings_ITS4YouDynamicFields_License_View();
            $SettingsITS4YouDynamicFieldsLicenseView->initializeContents($request);
        } else {

            $license = new Settings_ITS4YouDynamicFields_License_Action();
            $license->controlLicense();

            $moduleModel = Vtiger_Module_Model::getInstance("ITS4YouDynamicFields");
            $viewer->assign("VERSION_TYPE", $moduleModel->GetVersionType());
            $viewer->assign("VERSION", ITS4YouDynamicFields_Version_Helper::getVersion());

            if (!vtlib_isModuleActive('ITS4YouProcessFlow')){
                $viewer->assign("PROCESS_FLOW_ERROR", "yes");
            }

            $this->initializeListViewContents($request, $viewer);

            if ($request->has('tab') && !$request->isEmpty('tab')) {
                $tab =  $request->get('tab');
            }
            if (!in_array($tab,array("group","layout","default"))) $tab = "layout";
            $viewer->assign("TAB", $tab);

            $viewer->assign('ALL_MODULES', Vtiger_Module_Model::getEntityModules());
            $viewer->assign('DEFAULT_MODULES_LIST', $moduleModel->getDefaultModulesList());
            $viewer->view('ListViewContents.tpl', $request->getModule(false));
        }
    }

   public function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            '~/libraries/jquery/bootstrapswitch/js/bootstrap-switch.min.js',
            "~layouts/v7/modules/Settings/ITS4YouDynamicFields/resources/License.js",
            "~layouts/v7/lib/jquery/Lightweight-jQuery-In-page-Filtering-Plugin-instaFilta/instafilta.js",
            "~layouts/".Vtiger_Viewer::getDefaultLayoutName()."/lib/jquery/floatThead/jquery.floatThead.js",
            "~layouts/".Vtiger_Viewer::getDefaultLayoutName()."/lib/jquery/perfect-scrollbar/js/perfect-scrollbar.jquery.js",
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }
   
    public function getHeaderCss(Vtiger_Request $request) {
        $headerCssInstances = parent::getHeaderCss($request);
        $cssFileNames = array(
        '~/libraries/jquery/bootstrapswitch/css/bootstrap3/bootstrap-switch.min.css',
        "~layouts/".Vtiger_Viewer::getDefaultLayoutName()."/lib/jquery/perfect-scrollbar/css/perfect-scrollbar.css",
        );
        $cssInstances = $this->checkAndConvertCssStyles($cssFileNames);
        $headerCssInstances = array_merge($headerCssInstances, $cssInstances);
        return $headerCssInstances;
    }
}
