<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 *  ******************************************************************************* */

class Settings_ITS4YouLanguageEditor_LanguageAjax_Action extends Settings_Vtiger_Index_Action
{

    function __construct()
    {
        parent::__construct();
        $this->exposeMethod('createNewLanguage');
        $this->exposeMethod('changeActiveStatusOfLanguage');
        $this->exposeMethod('createNewLangFile');
        $this->exposeMethod('exportLanguage');
        $this->exposeMethod('removeLanguage');
    }

    public function process(Vtiger_Request $request)
    {
        $mode = $request->get('mode');
//        $mode = "createNewLangFile";
        if ($this->isMethodExposed($mode)) {
            $this->invokeExposedMethod($mode, $request);
        }
    }

    public function createNewLanguage(Vtiger_Request $request)
    {
        $formData = $request->get('formData');

        $language = $formData['newLanguage'];
        $label = $formData['langName'];
        $prefix = $formData['langCode'];
        $fromCopyLangPrefix = $formData['selectCopyLang'];

        $params['name'] = $language;
        $params['prefix'] = $prefix;
        $params['label'] = $label;
        $params['fromCopyDirPrefix'] = $fromCopyLangPrefix;

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model();
        $createLang = $moduleModel->createNewLanguage($params);
        if ($createLang == true) {
            $result = array('success' => true, 'created' => true);
        } else {
            $result = array('success' => true, 'created' => false);
        }

        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult($result);
        $response->emit();
    }

    public function changeActiveStatusOfLanguage(Vtiger_Request $request)
    {

        $prefix = $request->get('prefix');
        $label = $request->get('label');
        $name = $request->get('name');

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model();

        $adb = PearDatabase::getInstance();

        $Languages = $moduleModel->getInfoAboutLanguages();

        if (array_key_exists($prefix, $Languages)) {
            $active = $Languages[$prefix]['active'];
            if ($active == 0) {
                $sql = "UPDATE vtiger_language SET `active` = 1 WHERE prefix=? AND label=? AND name=?";
                $result = array('success' => true, 'active' => true);
            } elseif ($active == 1) {
                $sql = "UPDATE vtiger_language SET `active` = 0 WHERE `prefix`=? AND `label`=? AND `name`=?";
                $result = array('success' => true, 'active' => false);
            }
            $adb->pquery($sql, array($prefix, $label, $name), true);
        }

        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult($result);
        $response->emit();
    }

    public function createNewLangFile(Vtiger_Request $request)
    {
        $finnalyPrefix = $request->get('finallyPrefix');
        $createLangPrefix = $request->get('createLangPrefix');
        $forModule = $request->get('forModule');

        if ((strpos($finnalyPrefix, "Settings")) != false) {
            $createLangPrefix = $createLangPrefix . '/Settings';
        }

        $oldDirectory = 'languages/' . $createLangPrefix . "/";
        $newDirectory = 'languages/' . $finnalyPrefix . "/";
        if (is_dir($oldDirectory)) {
            $dir = opendir($oldDirectory);
            mkdir($newDirectory);
            while (($file = readdir($dir)) !== false) {
                if (($file != '.') && ($file != '..')) {
                    $module = $forModule . '.php';
                    if ($file == $module) {
                        $oldDirectory = $oldDirectory . $file;
                        $newDirectory = $newDirectory . $file;
                        copy($oldDirectory, $newDirectory);
                    }
                }
            }
            closedir($dir);
        }
    }

    /**
     * Export selected language
     * @param Vtiger_Request $request
     */
    public function exportLanguage(Vtiger_Request $request)
    {
        $exportModel = new Vtiger_LanguageExport();
        $exportModel->export($request->get('langPrefix'), "languages", "teeest");
    }

    public function removeLanguage(Vtiger_Request $request)
    {
        $params = array(
            "name" => $request->get("langName"),
            "prefix" => $request->get("langPrefix"),
            "label" => $request->get("langLabel"),
        );

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model();
        $result = array();
        if ($moduleModel->removeLanguage($params)){
            $result["removed"] = true;
        } else {
            $result["removed"] = false;
        }

        $response = new Vtiger_Response();
        $response->setEmitType(Vtiger_Response::$EMIT_JSON);
        $response->setResult($result);
        $response->emit();
    }

}
