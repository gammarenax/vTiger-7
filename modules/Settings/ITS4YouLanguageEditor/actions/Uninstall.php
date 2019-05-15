<?php
/* * *******************************************************************************
* The content of this file is subject to the Language Editor 4 You license.
* ("License"); You may not use this file except in compliance with the License
* The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
* Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
* All Rights Reserved.
* ****************************************************************************** */

class Settings_ITS4YouLanguageEditor_Uninstall_Action extends Settings_Vtiger_Basic_Action {

    function __construct() {
        parent::__construct();
    }

    function process(Vtiger_Request $request) {
        
        $Vtiger_Utils_Log = true;
        include_once('vtlib/Vtiger/Module.php');
        $adb = PearDatabase::getInstance();
        $module = Vtiger_Module::getInstance('ITS4YouLanguageEditor');
        if ($module) {
            /*
            $adb->pquery("DELETE FROM vtiger_settings_field WHERE  name= ?", array("Language Editor 4 You"));
            $module->delete();
            @shell_exec('rm -r modules/ITS4YouLanguageEditor');
            @shell_exec('rm -r modules/Settings/ITS4YouLanguageEditor');
            @shell_exec('rm -r layouts/vlayout/modules/Settings/ITS4YouLanguageEditor');
            @shell_exec('rm -f languages/ar_ae/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/ar_ae/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/cz_cz/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/cz_cz/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/de_de/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/de_de/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/en_gb/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/en_gb/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/en_us/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/en_us/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/es_es/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/es_es/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/es_mx/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/es_mx/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/fr_fr/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/fr_fr/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/hi_hi/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/hi_hi/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/hu_hu/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/hu_hu/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/it_it/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/it_it/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/nl_nl/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/nl_nl/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/pl_pl/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/pl_pl/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/pt_br/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/pt_br/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/ro_ro/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/ro_ro/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/ru_ru/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/ru_ru/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/sk_sk/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/sk_sk/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/sv_se/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/sv_se/Settings/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/tr_tr/ITS4YouLanguageEditor.php');
            @shell_exec('rm -f languages/tr_tr/Settings/ITS4YouLanguageEditor.php');

            */
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
