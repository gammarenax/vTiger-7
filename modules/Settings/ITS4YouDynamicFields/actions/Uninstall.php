<?php
/*********************************************************************************
 * The content of this file is subject to the Dynamic Fields 4 You license.
 * ("License",array()); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 ******************************************************************************* */

class Settings_ITS4YouDynamicFields_Uninstall_Action extends Settings_Vtiger_Basic_Action {

    function __construct() {
        parent::__construct();
    }

    function process(Vtiger_Request $request) {
        
        $Vtiger_Utils_Log = true;
        include_once('vtlib/Vtiger/Module.php');
        $adb = PearDatabase::getInstance();
        $module = Vtiger_Module::getInstance('ITS4YouDynamicFields');
        if ($module) {
            $ITS4YouDynamicFieldsModuleModel = new Settings_ITS4YouDynamicFields_Module_Model();
            
            $request->set('key', $ITS4YouDynamicFieldsModuleModel->GetLicenseKey());
            
            $ITS4YouDynamicFields_License_Action_Model = new Settings_ITS4YouDynamicFields_License_Action();
            $ITS4YouDynamicFields_License_Action_Model->deactivateLicense($request);

            $module->delete();
            @shell_exec('rm -r modules/ITS4YouDynamicFields');
            @shell_exec('rm -r modules/Settings/ITS4YouDynamicFields');
            @shell_exec('rm -r layouts/vlayout/modules/ITS4YouDynamicFields');
            @shell_exec('rm -r layouts/vlayout/modules/Settings/ITS4YouDynamicFields');
            @shell_exec('rm -f languages/ar_ae/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/ar_ae/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/cz_cz/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/cz_cz/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/de_de/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/de_de/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/en_gb/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/en_gb/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/en_us/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/en_us/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/es_es/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/es_es/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/es_mx/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/es_mx/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/fr_fr/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/fr_fr/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/hi_hi/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/hi_hi/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/hu_hu/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/hu_hu/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/it_it/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/it_it/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/nl_nl/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/nl_nl/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/pl_pl/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/pl_pl/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/pt_br/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/pt_br/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/ro_ro/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/ro_ro/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/ru_ru/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/ru_ru/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/sk_sk/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/sk_sk/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/sv_se/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/sv_se/Settings/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/tr_tr/ITS4YouDynamicFields.php');
            @shell_exec('rm -f languages/tr_tr/Settings/ITS4YouDynamicFields.php');

            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields",array());
            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields_license",array());
            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields_seq",array());
            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields_version",array());
            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields_errors",array());
            $adb->pquery("DROP TABLE IF EXISTS its4you_dynamicfields_fields",array());
             
            $result = array('success' => true);
        } else {
            $result = array('success' => false);
        }
        $result = array('success' => true);
        ob_clean();
        $response = new Vtiger_Response();
        $response->setResult($result);
        $response->emit();
    }
}
