<?php

include_once 'vtlib/Vtiger/Module.php';
require_once('includes/main/WebUI.php');

Vtiger_Module::syncfile();
Vtiger_Menu::syncfile();
Vtiger_Access::syncSharingAccess();

echo "DONE";
