<?php

/**
VGS Related Module Updates
 *
 *
 * @package        VGSRelModUpdates Module
 * @author         Conrado Maggi
 * @license        Comercial / VPL
 * @copyright      2014 VGS Global
 * @version        Release: 1.0
 */
include_once 'modules/Vtiger/CRMEntity.php';
include_once 'include/utils/utils.php';

class VGSRelModUpdates extends Vtiger_CRMEntity {
	
	public function __construct() {
		
	}

	/**
	* Invoked when special actions are performed on the module.
		    * @param String Module name
		    * @param String Event Type
		    */
    function vtlib_handler($moduleName, $eventType) {
		$adb = PearDatabase::getInstance();
		
		if ($eventType == 'module.postinstall') {
			
			$this->AddSettingsLinks();
			$this->addHandler();
			
		}
		else if ($eventType == 'module.disabled') {
			
			$this->addHandler(false);
			$this->AddSettingsLinks(false);
		}
		else if ($eventType == 'module.enabled') {
			
			$this->addHandler();
			$this->AddSettingsLinks(true);
		}
		else if ($eventType == 'module.preuninstall') {
			$adb->pquery("DELETE FROM vtiger_settings_field WHERE name=?", array('LBL_VGS_RELATEDFIELDS'));
			
			require_once'vtlib/Vtiger/Module.php';
			require 'include/events/include.inc';
			$em = new VTEventsManager($adb);
			$em->unregisterHandler('VGSRelModUpdates');
			$this->AddSettingsLinks(false);
		}
		else if ($eventType == 'module.preupdate') {
			
		}
		else if ($eventType == 'module.postupdate') {
			//Check all the tables are in place
			
			if(!Vtiger_Utils::CheckTable('vtiger_vgsrelmodupdates_log')){
				$adb->pquery('CREATE TABLE `vtiger_vgsrelmodupdates_log` (
                    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                    `vgsrelmodupdatesid` int(11) DEFAULT NULL,
                    `crmid` int(11) DEFAULT NULL,
                    PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
			}
			
			//Check for the column fistcondition
			
			Vtiger_Utils::AddColumn('vtiger_vgsrelmodupdates','firstcond', 'varchar(10) DEFAULT NULL');
			
			
			
		}
	}
	
	function AddSettingsLinks($setToActive = true){
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
		
		$result = $adb->pquery('SELECT * FROM vtiger_settings_field WHERE name=?',['VGS Related Module Updates']);
		
		if($result && $adb->num_rows($result) == 0){
			$fieldid = $adb->getUniqueID('vtiger_settings_field');
			$adb->pquery("INSERT INTO vtiger_settings_field(fieldid, blockid, name, iconpath, description, linkto, sequence, active) 
                        VALUES(?,?,?,?,?,?,?,?)", array($fieldid, $blockid, 'VGS Related Module Updates', '', 'VGSRelModUpdates Configuration', 'index.php?module=VGSRelModUpdates&view=IndexSettings&parent=Settings', $sequence++, 0));
		}

		if($setToActive){
			$adb->pquery("UPDATE vtiger_settings_field SET active=0 WHERE vtiger_settings_field.name=?", array('VGS Related Module Updates'));
		}else{
			$adb->pquery("UPDATE vtiger_settings_field SET active=1 WHERE vtiger_settings_field.name=?", array('VGS Related Module Updates'));
		}

	}

	function addHandler($setToActive = true){
		$adb = PearDatabase::getInstance();
		require_once'vtlib/Vtiger/Module.php';
		require 'include/events/include.inc';
		$em = new VTEventsManager($adb);
		$em->registerHandler('vtiger.entity.aftersave.final', 'modules/VGSRelModUpdates/handler/VGSRelModUpdatesHandler.php', 'VGSRelModUpdates');

		if($setToActive){
			$em->setHandlerActive('VGSRelModUpdates');
		}else {
			$em->setHandlerInActive('VGSRelModUpdates');
		}

	}
}
