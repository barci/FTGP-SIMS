<?php
$dalTablestockreceiving = array();
$dalTablestockreceiving["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestockreceiving["receiveID"] = array("type"=>200,"varname"=>"receiveID");
$dalTablestockreceiving["StaffID"] = array("type"=>200,"varname"=>"StaffID");
$dalTablestockreceiving["ProductID"] = array("type"=>200,"varname"=>"ProductID");
$dalTablestockreceiving["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablestockreceiving["Notes"] = array("type"=>200,"varname"=>"Notes");
$dalTablestockreceiving["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTablestockreceiving["ReceiveFlag"] = array("type"=>200,"varname"=>"ReceiveFlag");
	$dalTablestockreceiving["ID"]["key"]=true;
$dal_info["stockreceiving"]=&$dalTablestockreceiving;

?>