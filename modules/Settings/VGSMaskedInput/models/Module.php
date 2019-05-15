<?php

class Settings_VGSMaskedInput_Module_Model extends Settings_Vtiger_Module_Model {
	var $baseTable = 'vtiger_vgsmaskedinput';
	var $baseIndex = 'fieldid';
	var $nameFields = array('fieldid');
	var $listFields = array('fieldlabel'=>'Field Name', 'tablabel' => 'Module Name', 'maskinfo' => 'Mask Info', 'enabled' => 'Status');
	var $name = 'VGSMaskedInput';

	public function getCreateRecordUrl() {
		return 'javascript:Settings_VGSMaskedInput_List_Js.triggerEdit(event, "index.php?module='.$this->getName().'&parent='.$this->getParentName().'&view=Edit")';
	}

	public function getListViewUrl() {
		return "index.php?module=".$this->getName()."&parent=".$this->getParentName()."&view=List";
	}

	public function deleteRecord($recordId) {
		$db = PearDatabase::getInstance();
		$db->pquery("DELETE from vtiger_vgsmaskedinput WHERE fieldid=?", array($recordId));
		return true;
	}
}
