<?php

class VGSRelmodupdates_VGSLicenseSettings_View extends Settings_Vtiger_Index_View {

    public function process(Vtiger_Request $request) {

       $moduleName = $request->get('module');
       include_once 'modules/' . $moduleName . '/models/VGSLicenseManager.php';


        $viewer = $this->getViewer($request);
        $viewer->assign('LICENSEID', getLicenseId($request->getModule()));
        $viewer->assign('IS_VALIDATED', isLicenseValid($request->getModule()));
        $viewer->assign('MODULE', $request->getModule());
        $viewer->view('VGSActivateLicense.tpl', $request->getModule());
    }

    function getPageTitle(Vtiger_Request $request) {
        return vtranslate('LBL_MODULE_NAME', $request->getModule());
    }

    /**
     * Function to get the list of Script models to be included
     * @param Vtiger_Request $request
     * @return List of Vtiger_JsScript_Model instances
     */
    function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);

        include('vtigerversion.php');
        $version = explode('.', $vtiger_current_version)[0];
        
        if($version > 6){
            $jsFileNames = array(
                "layouts.v7.modules." . $request->getModule() . ".resources.VGSLicense",
            );
        } else {
            $jsFileNames = array(
                "layouts.vlayout.modules." . $request->getModule() . ".resources.VGSLicense",
            );
        }


        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }

}
