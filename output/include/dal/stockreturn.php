<?php
$dalTablestockreturn = array();
$dalTablestockreturn["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestockreturn["customerID"] = array("type"=>200,"varname"=>"customerID");
$dalTablestockreturn["StaffID"] = array("type"=>200,"varname"=>"StaffID");
$dalTablestockreturn["ProductID"] = array("type"=>200,"varname"=>"ProductID");
$dalTablestockreturn["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablestockreturn["Notes"] = array("type"=>200,"varname"=>"Notes");
$dalTablestockreturn["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTablestockreturn["ReceiveFlag"] = array("type"=>200,"varname"=>"ReceiveFlag");
	$dalTablestockreturn["ID"]["key"]=true;
$dal_info["stockreturn"]=&$dalTablestockreturn;

?>