<?php

/* * *******************************************************************************
 * The content of this file is subject to the Language Editor 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

class Settings_ITS4YouLanguageEditor_Edit_View extends Settings_Vtiger_Index_View {

    public function __construct() {
        parent::__construct();
        $this->exposeMethod('getEdit');
    }

    public function preProcess(Vtiger_Request $request) {
        parent::preProcess($request, true);
        $viewer = $this->getViewer($request);
        $langPrefix = $request->get('langPrefix');

        $LanguageModel = new Settings_ITS4YouLanguageEditor_Module_Model;

        $Languages = $LanguageModel->getInfoAboutLanguages();
        unset($Languages['en_us']);

        $GlobalLang = array('1' => 'Vtiger');

        $ListOfEnPHPFiles = scandir('languages/en_us');
        $ListOfPHPFiles = scandir('languages/' . trim($langPrefix));
        $PermittedModules = getPermittedModuleNames();

        $Modules = array();
        foreach ($PermittedModules as $moduleName) {
            $moduleNameWithPHP = trim($moduleName) . '.php';
            if (array_search($moduleNameWithPHP, $ListOfPHPFiles)) {
                array_push($Modules, $moduleName);
            }
        }
        if (array_search("Events.php", $ListOfPHPFiles)) {
            if (array_search("Events", $Modules) == false) {
                array_push($Modules, "Events");
            }
        }
        sort($Modules);

        $SettingsFieldLinks = $LanguageModel->getSettingsFieldLinks();

        $SettingsModulesFromLinks = array();
        foreach ($SettingsFieldLinks as $link) {
            $parts = parse_url($link);
            parse_str($parts['query'], $query);
            if (isset($query['module'])) {
                array_push($SettingsModulesFromLinks, $query['module']);
            } elseif (isset($query['amp;module'])) {
                array_push($SettingsModulesFromLinks, $query['amp;module']);
            }
        }

        $SettingsModules = array();

        $ListOfSettingsPHPFiles = scandir('languages/' . trim($langPrefix) . '/Settings');
        $ListOfEnSettingsPHPFiles = scandir('languages/en_us/Settings');

        foreach ($SettingsModulesFromLinks as $module) {
            $modulewihPHP = $module . ".php";
            if (($key = array_search($modulewihPHP, $ListOfSettingsPHPFiles)) !== false) {
                if (!array_search($module, $SettingsModules)) {
                    array_push($SettingsModules, $module);
                    if (($key = array_search($modulewihPHP, $ListOfEnSettingsPHPFiles)) !== false) {
                        unset($ListOfEnSettingsPHPFiles[$key]);
                    }
                }
            }
        }
        foreach ($SettingsModulesFromLinks as $key => $module) {
            $modulewihPHP = $module . ".php";
            if (($key = array_search($modulewihPHP, $ListOfEnSettingsPHPFiles)) !== false) {
                if (!array_search($module, $SettingsModules)) {
                    array_push($SettingsModules, $module);
                }
            }
        }
        sort($SettingsModules);

        $langLabel = Vtiger_Language_Handler::getLanguageLabel($langPrefix);

        $viewer->assign('LANG_LABEL', $langLabel);
        $viewer->assign('LANG_PREFIX', $langPrefix);
        $viewer->assign("LANGUAGES", $Languages);
        $viewer->assign("GLOBAL_LANG", $GlobalLang);
        $viewer->assign("MODULES", $Modules);
        $viewer->assign("SETTINGS_MODULES", $SettingsModules);
        $viewer->view('EditViewHeader.tpl', $request->getModule(false));
    }

    public function process(Vtiger_Request $request) {
        $this->invokeExposedMethod('getEdit', $request);
    }

    public function getEdit(Vtiger_Request $request) {
        $viewer = $this->getViewer($request);
        $qualified_module = $request->getModule(false);
        $mode = $request->get('mode');

        $previewLang = $request->get('previewLang');
        $php_module = $request->get('phpModule');
        $langPrefix = $request->get('langPrefix');

        $searchValue = $request->get('searchvalue');

        $enPrefix = "en_us";

        $viewer->assign('LANG_PREF', $langPrefix);
        $viewer->assign('PREVIEW_LANG_PREF', $previewLang);

        $moduleModel = new Settings_ITS4YouLanguageEditor_Module_Model;

        if ($php_module != "none") {

            if (isset($previewLang) && isset($php_module)) {
                if ($previewLang == 'none') {
                    $viewer->assign("PREVIEW_LANG", $previewLang);
                }
                $modulePrefix = substr($php_module, 0, 2);
                if ($modulePrefix == 'g_' || $modulePrefix == 'm_') {
                    $module = substr($php_module, 2);
                } elseif ($modulePrefix == 's_') {
                    $module = substr($php_module, 2);
                    $langPrefix = $langPrefix . '/Settings';
                    $previewLang = $previewLang . "/Settings";
                    $enPrefix = "en_us/Settings";
                }

                $filename = 'languages/' . $langPrefix . '/' . $module . '.php';

                $Languages = $moduleModel->getInfoAboutLanguages();

                foreach ($Languages as $key => $L_info) {
                    $name = "languages/" . $key . "/" . $module . '.php';
                    if ((strpos($langPrefix, "Settings")) != false) {
                        $name = "languages/" . $key . "/Settings/" . $module . '.php';
                    }
                    if (!file_exists($name)) {
                        unset($Languages[$key]);
                    }
                }

                $viewer->assign("LANGUAGES", $Languages);
                $viewer->assign('DIRFILENAME', dirname($filename));

                if (file_exists($filename) == false) {
                    if (!is_writable(dirname($filename))){
                        $viewer->assign('FILEDIR_WRITEABLE', 'false');
                    }
                    $viewer->assign('FILE_EXIST', 'dontExist');
                } elseif (file_exists($filename)) {
                    if (!is_writable(dirname($filename))) {
                        $viewer->assign('FILEDIR_WRITEABLE', 'false');
                    }
                    if (!is_writable($filename)) {
                        $viewer->assign('FILE_WRITEABLE', 'false');
                    }
                }

                $viewer->assign('FOR_MODULE', $module);
                $viewer->assign('FINALLY_PREFIX', $langPrefix);

                $PreviewLangKeys = Vtiger_Language_Handler::getModuleStringsFromFile($previewLang, $module);
                $viewer->assign('PREVIEW_LANG_KEYS', $PreviewLangKeys);

                $AllVariables = $moduleModel->getAllLangVariables($langPrefix, $previewLang, $enPrefix, $module);
                $viewer->assign('ALL_LANG_KEYS', $AllVariables['languageStrings']);
                $viewer->assign('ALL_JSLANG_KEYS', $AllVariables['jsLanguageStrings']);

                $EnLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($enPrefix, $module);
                $viewer->assign('EN_LANG_KEYS', $EnLangArrays['languageStrings']);
                $viewer->assign('EN_JSLANG_KEYS', $EnLangArrays['jsLanguageStrings']);

                $GlobalLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($langPrefix, "Vtiger");
                $viewer->assign('GLOBAL_LANG_KEYS', $GlobalLangArrays['languageStrings']);
                $viewer->assign('GLOBAL_JSLANG_KEYS', $GlobalLangArrays['jsLanguageStrings']);


                /***************** zmena aby nebol rovnaky kod ********************/
                $LangKeys = Vtiger_Language_Handler::getModuleStringsFromFile($langPrefix, $module);

                if ($mode == 'missingTranslation') {
                    $params = array();
                    $params['langPrefix'] = $langPrefix;
                    $params['previewLangPrefix'] = $previewLang;
                    $params['enPrefix'] = $enPrefix;
                    $params['forModule'] = $module;

                    $LangKeys = $moduleModel->getMissingTranslations($params);
                }

                $SearchArrays = array();
                if ($searchValue != "") {
                    if ($mode == 'missingTranslation') {
                        $SearchArrays = $moduleModel->getLangVariablesBySearchValue($langPrefix, $previewLang, $enPrefix, $module, $searchValue, "yes");
                    } else {
                        $SearchArrays = $moduleModel->getLangVariablesBySearchValue($langPrefix, $previewLang, $enPrefix, $module, $searchValue);
                    }
                }

                $viewer->assign('LANG_KEYS', $LangKeys['languageStrings']);
                $viewer->assign('JS_LANG_KEYS', $LangKeys['jsLanguageStrings']);

                $viewer->assign('SEARCH_VALUE', $searchValue);
                $viewer->assign('SEARCH_ARRAYS', $SearchArrays);

                $viewer->assign('MODE', $mode);
                /***************** koniec zmeny  **********************************/
            }
        } else {
            $viewer->assign('NONE_MODULE', "none");
        }

        $viewer->assign('LANG_VARIABLE_TYPE', $moduleModel->getLangVariableType());
        $viewer->assign('QUALIFIED_MODULE', $qualified_module);
        $viewer->view('EditViewContent.tpl', $request->getModule(false));
    }

    function getHeaderScripts(Vtiger_Request $request) {
        $headerScriptInstances = parent::getHeaderScripts($request);
        $moduleName = $request->getModule();

        $jsFileNames = array(
            "~layouts/v7/modules/Settings/$moduleName/resources/Edit.js",
        );

        $jsScriptInstances = $this->checkAndConvertJsScripts($jsFileNames);
        $headerScriptInstances = array_merge($headerScriptInstances, $jsScriptInstances);
        return $headerScriptInstances;
    }

}
