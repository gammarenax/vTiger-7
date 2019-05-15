<?php

Class VGSRelmodupdates_VGSLicense_View extends Vtiger_IndexAjax_View
{
    
    function __construct() {
        parent::__construct();
        
        $this->exposeMethod('validateLicense');
        $this->exposeMethod('deactivateLicense');
    }
    
    function validateLicense(Vtiger_Request $request) {
        
        try {
            $licenseId = $request->get('licenseid');
            $activationId = $request->get('activationid');
            $moduleName = $request->get('module');
            
            include_once 'modules/' . $moduleName . '/models/VGSLicenseManager.php';
            
            if ($activationId == '') {
                $validation = validateLicense($licenseId, $moduleName);
                if ($validation == 'valid') {
                    $result = array();
                    $result['result'] = 'ok';
                } 
                else {
                    $result = array();
                    $result['result'] = 'no-ok';
                    $result['message'] = $validation;
                }
            } 
            else {
                if (validateManualLicense($licenseId, $moduleName, $activationId)) {
                    $result = array();
                    $result['result'] = 'ok';
                } 
                else {
                    $result = array();
                    $result['result'] = 'no-ok';
                }
            }
            $response = new Vtiger_Response();
            $response->setResult($result);
            $response->emit();
        }
        catch(Exception $exc) {
            global $log;
            $log->debug("VGS - Entering validateLicense method ...");
            $log->debug($exc->getTraceAsString());
            $log->debug("VGS - Exiting validateLicense method ...");
        }
    }
    
    function deactivateLicense(Vtiger_Request $request) {
        
        try {
            $licenseId = $request->get('licenseid');
            $activationId = $request->get('activationid');
            $moduleName = $request->get('module');

            include_once 'modules/' . $moduleName . '/models/VGSLicenseManager.php';

            
            if ($activationId == '') {
                if (deactivateLicense($licenseId, $moduleName)) {
                    $result = array();
                    $result['result'] = 'ok';
                } 
                else {
                    
                    $result = array();
                    $result['result'] = 'no-ok';
                }
            }
            $response = new Vtiger_Response();
            $response->setResult($result);
            $response->emit();
        }
        catch(Exception $exc) {
            global $log;
            $log->debug("VGS - Entering validateLicense method ...");
            $log->debug($exc->getTraceAsString());
            $log->debug("VGS - Exiting validateLicense method ...");
        }
    }
}
