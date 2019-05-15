<?php

require_once 'modules/VGSMaskedInput/model/VGSMaskedInputModel.php';
require_once 'include/Webservices/DescribeObject.php';

class VGSMaskedInput {

	var $LBL_MODULENAME='VGSMaskedInput';

	// Cache to speed up describe information store
	protected static $moduleDescribeCache = array();


	function vtlib_handler($moduleName, $eventType) {
		require_once('include/utils/utils.php');
		global $adb;
		if($eventType == 'module.postinstall') {
			$this->AddSettingsLinks($this->LBL_MODULENAME);
			$this->addLinks();
		} else if($eventType == 'module.disabled') {
            $this->AddSettingsLinks($this->LBL_MODULENAME, false);
            require_once('vtlib/Vtiger/Link.php');
			$tabid = getTabId($this->LBL_MODULENAME);
			Vtiger_Link::deleteAll($tabid);
		} else if($eventType == 'module.enabled') {
			$this->AddSettingsLinks($this->LBL_MODULENAME);
			$this->addLinks();
		} else if($eventType == 'module.preuninstall') {
			$adb->pquery('DELETE FROM vtiger_settings_field WHERE  name= ?', array($this->LBL_MODULENAME));
			require_once('vtlib/Vtiger/Link.php');
			$tabid = getTabId($this->LBL_MODULENAME);
			Vtiger_Link::deleteAll($tabid);
		} else if($eventType == 'module.preupdate') {
		// TODO Handle actions before this module is updated.
		} else if($eventType == 'module.postupdate') {
		// TODO Handle actions after this module is updated.
			$this->AddSettingsLinks($LBL_MODULENAME);
		}
	}
	
	function AddSettingsLinks($moduleName, $setToActive = true){
		$adb = PearDatabase::getInstance();
		$otherSettingsBlock = $adb->pquery('SELECT * FROM vtiger_settings_blocks WHERE label=?', array('LBL_OTHER_SETTINGS'));
		$otherSettingsBlockCount = $adb->num_rows($otherSettingsBlock);
		
		if ($otherSettingsBlockCount > 0) {
			$blockid = $adb->query_result($otherSettingsBlock, 0, 'blockid');
			$sequenceResult = $adb->pquery("SELECT max(sequence) as sequence FROM vtiger_settings_blocks WHERE blockid=?", array($blockid));
			if ($adb->num_rows($sequenceResult)) {
				$sequence = $adb->query_result($sequenceResult, 0, 'sequence');
			}
		}
		
		$result = $adb->pquery('SELECT * FROM vtiger_settings_field WHERE name=?',[$moduleName]);
		
		if($result && $adb->num_rows($result) == 0){
			$fieldid = $adb->getUniqueID('vtiger_settings_field');
			$adb->pquery("INSERT INTO vtiger_settings_field(fieldid, blockid, name, iconpath, description, linkto, sequence, active) 
                        VALUES(?,?,?,?,?,?,?,?)", array($fieldid, $blockid, $moduleName, '', $moduleName . ' Configuration', 'index.php?parent=Settings&module=VGSMaskedInput&view=List', $sequence++, 0));
		}
		
		if($setToActive){
			$adb->pquery("UPDATE vtiger_settings_field SET active=0 WHERE vtiger_settings_field.name=?", array($moduleName));
		}
		else{
			$adb->pquery("UPDATE vtiger_settings_field SET active=1 WHERE vtiger_settings_field.name=?", array($moduleName));
		}
		
	}

	function addLinks(){
        require_once('vtlib/Vtiger/Link.php');
        	$tabId = getTabId("VGSMaskedInput");

            include('vtigerversion.php');
            $version = explode('.', $vtiger_current_version)[0];

    	    if ($version > 6) {
				Vtiger_Link::addLink($tabId, 'HEADERSCRIPT', 'VGSMaskedInput', 'layouts/v7/modules/Settings/VGSMaskedInput/resources/MaskInput.js', '', 0, '');
				Vtiger_Link::addLink($tabId, 'HEADERSCRIPT', 'VGSMaskedInput', 'layouts/v7/modules/Settings/VGSMaskedInput/resources/jquery.maskedinput.js', '', 0, '');
    	    } else {
				Vtiger_Link::addLink($tabId, 'HEADERSCRIPT', 'VGSMaskedInput', 'layouts/vlayout/modules/Settings/VGSMaskedInput/resources/MaskInput.js', '', 0, '');
				Vtiger_Link::addLink($tabId, 'HEADERSCRIPT', 'VGSMaskedInput', 'layouts/vlayout/modules/Settings/VGSMaskedInput/resources/jquery.maskedinput.js', '', 0, '');

    	    }
    }

	static function checkAdminAccess($user) {
		if (is_admin($user)) {
			return true;
		}
		echo "<table border='0' cellpadding='5' cellspacing='0' width='100%' height='450px'><tr><td align='center'>";
		echo "<div style='border: 3px solid rgb(153, 153, 153); background-color: rgb(255, 255, 255); width: 55%; position: relative; z-index: 10000000;'>

		<table border='0' cellpadding='5' cellspacing='0' width='98%'>
		<tbody><tr>
		<td rowspan='2' width='11%'><img src= " . vtiger_imageurl('denied.gif', $theme) . " ></td>
		<td style='border-bottom: 1px solid rgb(204, 204, 204);' nowrap='nowrap' width='70%'>
			<span class='genHeaderSmall'>$app_strings[LBL_PERMISSION]</span></td>
		</tr>
		<tr>
		<td class='small' align='right' nowrap='nowrap'>
		<a href='javascript:window.history.back();'>$app_strings[LBL_GO_BACK]</a><br>
		</td>
		</tr>
		</tbody></table>
		</div>";
		echo "</td></tr></table>";
		exit;
	}

	static function getModuleDescribe($module) {
		if (!isset(self::$moduleDescribeCache[$module])) {
			global $adb, $log, $current_user;
			self::$moduleDescribeCache[$module] = vtws_describe($module, $current_user);
		}
		return self::$moduleDescribeCache[$module];
	}

	static function getFieldInfo($module, $fieldname) {
		$describe = self::getModuleDescribe($module);
		foreach ($describe['fields'] as $index => $fieldInfo) {
			if ($fieldInfo['name'] == $fieldname) {
				return $fieldInfo;
			}
		}
		return false;
	}

	static function getFieldInfos($module) {
		$describe = self::getModuleDescribe($module);
		foreach ($describe['fields'] as $index => $fieldInfo) {
			if ($fieldInfo['name'] == 'id') {

				unset($describe['fields'][$index]);
			}
		}
		return $describe['fields'];
	}

}
