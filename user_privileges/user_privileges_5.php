<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H2';

$current_user_parent_role_seq='H1::H2';

$current_user_profiles=array(1,2,8,10,11,18,);

$profileGlobalPermission=array('1'=>0,'2'=>0,);

$profileTabsPermission=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>0,'27'=>0,'30'=>0,'31'=>0,'32'=>0,'33'=>0,'34'=>0,'35'=>0,'36'=>0,'37'=>0,'38'=>0,'39'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>0,'49'=>0,'50'=>0,'54'=>0,'56'=>0,'57'=>0,'58'=>0,'60'=>0,'61'=>0,'62'=>0,'63'=>0,'28'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),4=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),6=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),7=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,6=>0,),9=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),13=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),15=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),18=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),19=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),20=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),34=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,11=>1,12=>1,),35=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),36=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),42=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),43=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),44=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),45=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),47=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),58=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,10=>0,),61=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,8=>0,),40=>array(5=>0,6=>0,10=>0,),);

$current_user_groups=array(3,);

$subordinate_roles=array('H10','H11','H12','H13','H14','H3','H4','H5','H8','H6','H7','H9',);

$parent_roles=array('H1',);

$subordinate_roles_users=array('H10'=>array(8,),'H11'=>array(),'H12'=>array(),'H13'=>array(),'H14'=>array(),'H3'=>array(7,),'H4'=>array(9,11,12,16,25,26,),'H5'=>array(10,13,14,15,18,),'H8'=>array(27,29,),'H6'=>array(1,23,28,),'H7'=>array(19,),'H9'=>array(),);

$user_info=array('user_name'=>'sg','is_admin'=>'off','user_password'=>'$1$sg000000$ErV/WyFz9pMGyfpszzhPV1','confirm_password'=>'$1$sg000000$ErV/WyFz9pMGyfpszzhPV1','first_name'=>'Severin','last_name'=>'Gallo','roleid'=>'H2','email1'=>'sg@gammarenax.ch','status'=>'Active','activity_view'=>'Today','lead_view'=>'Last 2 Days','hour_format'=>'24','end_hour'=>'','start_hour'=>'07:00','title'=>'CEO','phone_work'=>'+41 44 277 77 77','department'=>'Management','phone_mobile'=>'+41 79 358 05 50','reports_to_id'=>'','phone_other'=>'','email2'=>'','phone_fax'=>'+41 44 277 77 66','secondaryemail'=>'','phone_home'=>'','date_format'=>'dd-mm-yyyy','signature'=>'Mit freundlichen Gr&uuml;ssen&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Severin Gallo&lt;/strong&gt;&lt;br /&gt;Gesch&auml;ftsleiter&lt;br /&gt;&lt;br /&gt;gammaRenax AG&lt;br /&gt;Ringstrasse 15&lt;br /&gt;8600 D&uuml;bendorf&lt;br /&gt;&lt;br /&gt;Tel:      +41 44 277 77 68&lt;br /&gt;Fax:    +41 44 277 77 66&lt;br /&gt;Mobile:  +41 79 358 05 50&lt;br /&gt;Mail:      sg@gammarenax.ch&lt;br /&gt;Web:     www.gammarenax.ch','description'=>'','address_street'=>'Ringstrasse 15','address_city'=>'D&uuml;bendorf','address_state'=>'Schweiz','address_postalcode'=>'8600','address_country'=>'Schweiz','accesskey'=>'cFpyvncyPDKR2d2U','time_zone'=>'Europe/Amsterdam','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>'&#039;','currency_symbol_placement'=>'$1.0','imagename'=>'severin.gif','internal_mailer'=>'0','theme'=>'bluelagoon','language'=>'de_de','reminder_interval'=>'5 Minutes','phone_crm_extension'=>'1000','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Monday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'Planned','defaultactivitytype'=>'Call','hidecompletedevents'=>'1','is_owner'=>'0','defaultcalendarview'=>'MyCalendar','currency_name'=>'Switzerland Francs','currency_code'=>'CHF','currency_symbol'=>'CHF','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'5');
?>