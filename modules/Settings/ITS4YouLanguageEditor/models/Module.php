<?php

/* * *******************************************************************************
 * The content of this file is subject to the Labels 4 You license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */

require_once 'modules/com_vtiger_workflow/include.inc';
require_once 'modules/com_vtiger_workflow/expression_engine/VTExpressionsManager.inc';

class Settings_ITS4YouLanguageEditor_Module_Model extends Settings_Vtiger_Module_Model
{

    static $defaultLanguages = array("ar_ae", "de_de", "en_gb", "en_us", "es_es", "es_mx", "fr_fr", "hi_hi", "hu_hu", "it_it", "nl_nl", "pl_pl",
        "pt_br", "ro_ro", "ru_ru", "sv_se", "tr_tr", "sk_sk");

    /**
     * Function to get the url for default view of the module
     * @return <string> - url
     */
    public static function getDefaultUrl()
    {
        return 'index.php?module=ITS4YouLanguageEditor&parent=Settings&view=List';
    }

    /**
     * Function to get the url for create view of the module
     * @return <string> - url
     */
    public static function getCreateViewUrl()
    {
        return "javascript:Settings_ITS4YouLabels_List_Js.triggerCreate('index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit')";
    }

    public static function getEditViewUrl()
    {
        return 'index.php?module=ITS4YouLanguageEditor&parent=Settings&view=Edit';
    }

    public static function getDefaultLanguages()
    {
        return self::$defaultLanguages;
    }

    public static function getInfoAboutLanguages()
    {
        $adb = PearDatabase::getInstance();
        $sql = "SELECT id, name, prefix, label, active FROM vtiger_language";

        $result = $adb->pquery($sql, array());
        while ($row = $adb->fetchByAssoc($result)) {
            $Languages[$row['prefix']] = $row;
        }

        return $Languages;
    }

    /**
     *
     * @return array
     */
    public static function getSortedLanguages()
    {
        $Languages = self::getInfoAboutLanguages();

        //function is a parameter in uasort, sort the array by active column -> in array will be active languages on the beginning
        function cmp($a, $b)
        {
            if ($a == $b) {
                return 0;
            }
            return ($b['active'] < $a['active']) ? -1 : 1;
        }

        uasort($Languages, 'cmp');

        // the default language English en_us will be on the beginning of array, then will be sorted active languages and nonactive languages will be on the end
        $sortedLanguages = array();
        foreach ($Languages as $key => $value) {
            if ($key == "en_us") {
                $ha = array($key => $value);
            } else {
                $sortedLanguages[$key] = $value;
            }
        }

        $sortedLanguages = $ha + $sortedLanguages;

        return $sortedLanguages;
    }

    public static function getLangKeys($langPrefix, $module, $settings = false)
    {
        if ($settings == false) {
            $filename = 'languages/' . trim($langPrefix) . '/' . $module . '.php';
        } else {
            $filename = 'languages/' . trim($langPrefix) . '/Settings/' . $module . '.php';
        }
        $LangKeys = array();
        if (file_exists($filename)) {
            $fileContent = file($filename);
            foreach ($fileContent as $key => $file_row) {
                if (self::parse_data('=>', $file_row)) {
                    $fileParts = explode('=>', $file_row);
                    $langKey = substr(trim($fileParts[0]), 1);
                    $langKey = substr(trim($langKey), 0, -1);
                    array_push($LangKeys, $langKey);
                }
            }
        }

        return $LangKeys;
    }

    public function parse_data($a, $b)
    {
        $resp = false;
        if ($b != '' && stristr($b, $a) !== false) {
            $resp = true;
        }
        return $resp;
    }

    public function getLangVariableType()
    {
        return array('PHP' => 'PHP', 'JS' => 'JS');
    }

    public function updateTranslation($params)
    {
        $langKeys = Vtiger_Language_Handler::getModuleStringsFromFile($params['langPrefix'], $params['forModule']);

        if ($params['variableType'] == "PHP") {
            $langKeys['languageStrings'][$params['keyword']] = $params['newString'];
        }
        if ($params['variableType'] == "JS") {
            $langKeys['jsLanguageStrings'][$params['keyword']] = $params['newString'];
        }

        $this->saveNewLanguageFile($params, $langKeys);
    }

    public function addNewTranslation($params)
    {
        $langKeys = Vtiger_Language_Handler::getModuleStringsFromFile($params['langPrefix'], $params['forModule']);

        if ($params['variableType'] == "PHP") {
            $langKeys['languageStrings'][$params['keyword']] = $params['newString'];
        } elseif ($params['variableType'] == "JS") {
            $langKeys['jsLanguageStrings'][$params['keyword']] = $params['newString'];
        }

        $this->saveNewLanguageFile($params, $langKeys);
    }

    public function deleteTranslation($params)
    {
        $langArrays = Vtiger_Language_Handler::getModuleStringsFromFile($params['langPrefix'], $params['forModule']);

        if (array_key_exists($params['keyword'], $langArrays['languageStrings'])) {
            unset($langArrays['languageStrings'][$params['keyword']]);
        } elseif (array_key_exists($params['keyword'], $langArrays['jsLanguageStrings'])) {
            unset($langArrays['jsLanguageStrings'][$params['keyword']]);
        }

        $this->saveNewLanguageFile($params, $langArrays);
    }

    public function saveNewLanguageFile($params, $langArrays)
    {
        $filename_help = 'languages/' . $params['langPrefix'] . '/help.php';
        $filename_module = 'languages/' . $params['langPrefix'] . '/' . $params['forModule'] . '.php';

        $help = fopen($filename_help, "a");
        $file_module = fopen($filename_module, "r");

        ftruncate($help, 0);


        while (!feof($file_module)) {
            $contents = fgets($file_module);
            if ((strpos($contents, 'languageStrings'))) {
                break;
            }
            fwrite($help, $contents);
        }

        fwrite($help, '$languageStrings = array(' . PHP_EOL);

        foreach ($langArrays['languageStrings'] as $arrayKey => $arrayValue) {
            if (strpos($arrayValue, '"') !== false) {
                $line = '"' . $arrayKey . '" => "' . addslashes($arrayValue) . '",' . PHP_EOL;
            } else {
                $line = '"' . $arrayKey . '" => "' . $arrayValue . '",' . PHP_EOL;
            }

            fwrite($help, $line);
        }
        fwrite($help, ");");

        fwrite($help, PHP_EOL . PHP_EOL . '$jsLanguageStrings = array(' . PHP_EOL);

        foreach ($langArrays['jsLanguageStrings'] as $arrayKey => $arrayValue) {
            if (strpos($arrayValue, '"') !== false) {
                $line = '"' . $arrayKey . '" => "' . addslashes($arrayValue) . '",' . PHP_EOL;
            } else {
                $line = '"' . $arrayKey . '" => "' . $arrayValue . '",' . PHP_EOL;
            }

            fwrite($help, $line);
        }
        fwrite($help, ");");

        unlink($filename_module);
        rename($filename_help, $filename_module);
    }

    public function getMissingTranslations($params)
    {
        $langArrays = Vtiger_Language_Handler::getModuleStringsFromFile($params['langPrefix'], $params['forModule']);
        $AllKeys = $this->getAllLangVariables($params['langPrefix'], $params['previewLangPrefix'], $params['enPrefix'], $params['forModule']);

        $Differences = array();

        foreach ($AllKeys['languageStrings'] as $key => $value) {
            if (!array_key_exists($key, $langArrays['languageStrings'])) {
                $Differences['languageStrings'][$key] = $langArrays['languageStrings'][$key];
            }
        }

        foreach ($AllKeys['jsLanguageStrings'] as $key => $value) {
            if (!array_key_exists($key, $langArrays['jsLanguageStrings'])) {
                $Differences['jsLanguageStrings'][$key] = $langArrays['jsLanguageStrings'][$key];
            }
        }

        return $Differences;
    }

    public function getAllLangVariables($currentLanguage, $previewLanguage, $enPrefix, $forModule, $wantValues = false)
    {
        if ((trim($previewLanguage) != 'none') or (trim($previewLanguage) != 'none/Settings')) {

            $filename = 'languages/' . $previewLanguage . '/' . $forModule . '.php';

            $langArrays = Vtiger_Language_Handler::getModuleStringsFromFile($currentLanguage, $forModule);
            $enLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($enPrefix, $forModule);
            if (file_exists($filename) != false) {
                $previewLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($previewLanguage, $forModule);
                $result = array_merge_recursive($langArrays, $previewLangArrays, $enLangArrays);
            } else {
                $result = array_merge_recursive($langArrays, $enLangArrays);
            }
        }
        if ((trim($previewLanguage) == 'none') or (trim($previewLanguage) == 'none/Settings')) {
            $langArrays = Vtiger_Language_Handler::getModuleStringsFromFile($currentLanguage, $forModule);
            $enLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($enPrefix, $forModule);

            $result = array_merge_recursive($langArrays, $enLangArrays);
        }

        $AllKeys = array();

        foreach ($result['languageStrings'] as $key => $value) {
            if ($wantValues == false) {
                $AllKeys['languageStrings'][$key] = $key;
            } else {
                $AllKeys['languageStrings'][$key] = $value;
            }
        }
        foreach ($result['jsLanguageStrings'] as $key => $value) {
            if ($wantValues == false) {
                $AllKeys['jsLanguageStrings'][$key] = $key;
            } else {
                $AllKeys['jsLanguageStrings'][$key] = $value;
            }
        }

        return $AllKeys;
    }

    public function getLangVariablesBySearchValue($currentLanguage, $previewLanguage, $enPrefix, $forModule, $searchvalue, $missingTrans = "")
    {
        $langArrays = Vtiger_Language_Handler::getModuleStringsFromFile($currentLanguage, $forModule);
        $previewLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($previewLanguage, $forModule);
        $enLangArrays = Vtiger_Language_Handler::getModuleStringsFromFile($enPrefix, $forModule);

        if ($missingTrans == "") {
            $AllKeys = $this->getAllLangVariables($currentLanguage, $previewLanguage, $enPrefix, $forModule, true);
        }
        if ($missingTrans != "") {
            $params = array();
            $params['langPrefix'] = $currentLanguage;
            $params['previewLangPrefix'] = $previewLanguage;
            $params['enPrefix'] = $enPrefix;
            $params['forModule'] = $forModule;
            $AllKeys = $this->getMissingTranslations($params);
        }

        $SearchArray = array();

        function removeAccents($str)
        {
            $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
            $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
            return str_replace($a, $b, $str);
        }

        foreach ($AllKeys['languageStrings'] as $key => $value) {

            foreach ($value as $translation) {
                if (strpos(strtolower(removeAccents($translation)), strtolower(removeAccents($searchvalue))) !== false) {
                    if (!array_key_exists($key, $SearchArray['languageStrings'])) {
                        $SearchArray['languageStrings'][$key] = $key;
                    }
                }
            }

            if (strpos(strtolower($key), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['languageStrings'])) {
                    $SearchArray['languageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($langArrays['languageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['languageStrings'])) {
                    $SearchArray['languageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($previewLangArrays['languageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['languageStrings'])) {
                    $SearchArray['languageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($enLangArrays['languageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['languageStrings'])) {
                    $SearchArray['languageStrings'][$key] = $key;
                }
            }
        }

        foreach ($AllKeys['jsLanguageStrings'] as $key => $value) {

            foreach ($value as $translation) {
                if (strpos(strtolower(removeAccents($translation)), strtolower(removeAccents($searchvalue))) !== false) {
                    if (!array_key_exists($key, $SearchArray['jsLanguageStrings'])) {
                        $SearchArray['jsLanguageStrings'][$key] = $key;
                    }
                }
            }

            if (strpos(strtolower($key), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['jsLanguageStrings'])) {
                    $SearchArray['jsLanguageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($langArrays['jsLanguageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['jsLanguageStrings'])) {
                    $SearchArray['jsLanguageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($previewLangArrays['jsLanguageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['jsLanguageStrings'])) {
                    $SearchArray['jsLanguageStrings'][$key] = $key;
                }
            }
            if (strpos(strtolower($enLangArrays['jsLanguageStrings'][$key]), strtolower($searchvalue)) !== false) {
                if (!array_key_exists($key, $SearchArray['jsLanguageStrings'])) {
                    $SearchArray['jsLanguageStrings'][$key] = $key;
                }
            }
        }

        return $SearchArray;
    }

    public function createNewLanguage($params)
    {
        $adb = PearDatabase::getInstance();

        $Languages = self::checkIfLangExist($params);

        if (array_key_exists($params['prefix'], $Languages)) {
            return false;
        } else {
            $id = $adb->getUniqueId('vtiger_language');
            $date = date('Y-m-d h:i:s', time());
            $sql = "INSERT INTO vtiger_language (`id`, `name`, `prefix`, `label`, `lastupdated`, `sequence`, `isdefault`, `active`) VALUES (?,?,?,?,?,?,?,?);";
            $Sql_Values = array($id, $params['name'], $params['prefix'], $params['label'], $date, NULL, 0, 1);
            $adb->pquery($sql, $Sql_Values, true);
            $fromCopyLangPrefix = "languages/" . $params['fromCopyDirPrefix'] . "/";
            $prefix = "languages/" . $params['prefix'] . "/";
            self::copyLanguageDirectory($fromCopyLangPrefix, $prefix);
            return true;
        }
    }

    public function checkIfLangExist($params)
    {
        $adb = PearDatabase::getInstance();

        $sql = "SELECT * FROM vtiger_language ";
        if ($params['prefix'] != '') {
            $sql .= "WHERE prefix=?";
        }
        $result = $adb->pquery($sql, array($params['prefix']));
        while ($row = $adb->fetchByAssoc($result)) {
            $Languages[$row['prefix']] = $row;
        }

        return $Languages;
    }

    public function copyLanguageDirectory($oldDirectory, $newDirectory)
    {
        if (is_dir($oldDirectory)) {
            $dir = opendir($oldDirectory);
            mkdir($newDirectory, 0775, true);
            while (($file = readdir($dir)) !== false) {
                if (($file != '.') && ($file != '..')) {
                    if (is_dir($oldDirectory . '/' . $file)) {
                        $this->copyLanguageDirectory($oldDirectory . '/' . $file, $newDirectory . '/' . $file);
                    } else {
                        copy($oldDirectory . '/' . $file, $newDirectory . '/' . $file);
                    }
                }
            }
            closedir($dir);
        }
    }

    public function getSettingsFieldLinks()
    {
        $adb = PearDatabase::getInstance();
        $sql = "SELECT linkto FROM vtiger_settings_field";

        $result = $adb->pquery($sql, array());
        $SettingsFieldLinks = array();
        while ($row = $adb->fetchByAssoc($result)) {
            array_push($SettingsFieldLinks, $row['linkto']);
        }

        return $SettingsFieldLinks;
    }

    /**
     * Return languages used by all users in vtiger crm
     * @return array
     */
    public function getLanguagesUsedByUsers()
    {
        $languagesUsedByUsers = array();
        /**
         * @var  $id int
         * @var  $userModel  Users_Record_Model
         */
        foreach (Users_Record_Model::getAll() as $id => $userModel) {
            if (!in_array($userModel->get('language'), $languagesUsedByUsers)) {
                array_push($languagesUsedByUsers, $userModel->get('language'));
            }
        }

        return $languagesUsedByUsers;
    }

    /**
     * Remove language from vtigerCRM
     * @param $params   array input values (prefix, name, label)
     * @return bool     return true, if language is removed, else return false
     */
    public function removeLanguage($params)
    {
        $adb = PearDatabase::getInstance();

        $sql = "DELETE FROM vtiger_language WHERE name = ? AND prefix = ? AND label = ?";
        $adb->pquery($sql, array($params['name'], $params['prefix'], $params['label']));

        $selectSql = "SELECT * FROM vtiger_language WHERE name = ? AND prefix = ? AND label = ?";
        $result = $adb->pquery($selectSql, array($params['name'], $params['prefix'], $params['label']));

        $removed = false;
        if ($adb->getRowCount($result) == 0) {
            @shell_exec("rm -r languages/" . $params['prefix']);
            if (!file_exists("languages/" . $params['prefix']. "/Vtiger.php")) {
                $removed = true;
            }
        }

        return $removed;
    }

}
