<?php
$dalTablereceiving = array();
$dalTablereceiving["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablereceiving["requestID"] = array("type"=>200,"varname"=>"requestID");
$dalTablereceiving["StaffID"] = array("type"=>200,"varname"=>"StaffID");
$dalTablereceiving["ProductID"] = array("type"=>200,"varname"=>"ProductID");
$dalTablereceiving["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablereceiving["Notes"] = array("type"=>200,"varname"=>"Notes");
$dalTablereceiving["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTablereceiving["ReceiveFlag"] = array("type"=>200,"varname"=>"ReceiveFlag");
	$dalTablereceiving["ID"]["key"]=true;
$dal_info["receiving"]=&$dalTablereceiving;

?>