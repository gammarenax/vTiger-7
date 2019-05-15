<?php


//This is the access privilege file
$is_admin=false;

$current_user_roles='H5';

$current_user_parent_role_seq='H1::H2::H14::H3::H4::H5';

$current_user_profiles=array(2,11,);

$profileGlobalPermission=array('1'=>1,'2'=>1,);

$profileTabsPermission=array('1'=>0,'2'=>0,'3'=>0,'4'=>0,'6'=>0,'7'=>0,'8'=>0,'9'=>0,'10'=>0,'13'=>0,'14'=>0,'15'=>0,'16'=>0,'18'=>0,'19'=>0,'20'=>0,'21'=>0,'22'=>0,'23'=>0,'24'=>0,'25'=>0,'26'=>1,'27'=>1,'30'=>0,'31'=>0,'32'=>0,'33'=>0,'34'=>0,'35'=>1,'36'=>0,'37'=>0,'38'=>0,'39'=>0,'40'=>0,'41'=>0,'42'=>0,'43'=>0,'44'=>0,'45'=>0,'46'=>0,'47'=>0,'48'=>1,'49'=>1,'50'=>0,'54'=>1,'56'=>0,'57'=>1,'58'=>1,'60'=>0,'61'=>1,'62'=>0,'63'=>0,'28'=>0,);

$profileActionPermission=array(2=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),4=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,10=>0,),6=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,10=>0,),7=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>1,6=>1,8=>1,9=>0,10=>0,),8=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,6=>1,),9=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),13=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>1,6=>1,8=>0,10=>0,),14=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),15=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),16=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),18=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),19=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>1,6=>1,10=>0,),20=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),21=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),22=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,),23=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>0,6=>0,),25=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,6=>0,13=>0,),26=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),34=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,11=>1,12=>1,),35=>array(0=>1,1=>1,2=>1,3=>0,4=>1,7=>1,5=>0,6=>0,10=>0,),36=>array(0=>1,1=>1,2=>1,3=>0,4=>0,7=>1,5=>0,6=>0,10=>0,),38=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),42=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),43=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),44=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),45=>array(0=>0,1=>0,2=>1,3=>0,4=>0,7=>0,5=>0,6=>0,10=>0,),47=>array(0=>0,1=>0,2=>0,3=>0,4=>0,7=>0,),58=>array(0=>1,1=>1,2=>1,3=>0,4=>1,7=>1,5=>0,6=>0,8=>1,10=>0,),61=>array(0=>1,1=>1,2=>1,3=>0,4=>1,7=>1,5=>0,6=>0,8=>1,),40=>array(5=>1,6=>1,10=>0,),);

$current_user_groups=array(18,2,3,4,);

$subordinate_roles=array();

$parent_roles=array('H1','H2','H14','H3','H4',);

$subordinate_roles_users=array();

$user_info=array('user_name'=>'lga','is_admin'=>'off','user_password'=>'$1$lg000000$aShhSX5nsJNZY3EUs52mD.','confirm_password'=>'$1$lg000000$aShhSX5nsJNZY3EUs52mD.','first_name'=>'Luca','last_name'=>'Gallo','roleid'=>'H5','email1'=>'lca@gammarenax.ch','status'=>'Inactive','activity_view'=>'Today','lead_view'=>'Today','hour_format'=>'12','end_hour'=>'','start_hour'=>'08:00','title'=>'Backoffice','phone_work'=>'+41 44 277 77 77','department'=>'Verkauf','phone_mobile'=>'','reports_to_id'=>'5','phone_other'=>'','email2'=>'','phone_fax'=>'+41 44 277 77 66','secondaryemail'=>'','phone_home'=>'','date_format'=>'dd-mm-yyyy','signature'=>'&lt;br /&gt;Freundliche Gr&uuml;ssenn&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;Luca Gallo&lt;/strong&gt;&lt;br /&gt;Verkauf&lt;br /&gt;gammaRenax AG&lt;br /&gt;Ringstrasse 15&lt;br /&gt;8600 D&uuml;bendorf&lt;br /&gt;&lt;br /&gt;Tel +41 44 277 77 77&lt;br /&gt;Fax: +41 44 277 77 66&lt;br /&gt;&lt;br /&gt;Mail: lga@gammarenax.ch&lt;br /&gt;Web: www.gammarenax.ch','description'=>'Luca G.','address_street'=>'Ringstrasse 15','address_city'=>'D&uuml;bendorf','address_state'=>'ZH','address_postalcode'=>'8600','address_country'=>'Schweiz','accesskey'=>'zPAxrVL5P28pona','time_zone'=>'Europe/Amsterdam','currency_id'=>'1','currency_grouping_pattern'=>'123,456,789','currency_decimal_separator'=>'.','currency_grouping_separator'=>'&#039;','currency_symbol_placement'=>'$1.0','imagename'=>'luca.gif','internal_mailer'=>'0','theme'=>'softed','language'=>'de_de','reminder_interval'=>'5 Minutes','phone_crm_extension'=>'1014','no_of_currency_decimals'=>'2','truncate_trailing_zeros'=>'0','dayoftheweek'=>'Monday','callduration'=>'5','othereventduration'=>'5','calendarsharedtype'=>'public','default_record_view'=>'Summary','leftpanelhide'=>'0','rowheight'=>'medium','defaulteventstatus'=>'Planned','defaultactivitytype'=>'Call','hidecompletedevents'=>'0','is_owner'=>'0','defaultcalendarview'=>'MyCalendar','currency_name'=>'Switzerland Francs','currency_code'=>'CHF','currency_symbol'=>'CHF','conv_rate'=>'1.00000','record_id'=>'','record_module'=>'','id'=>'18');
?>