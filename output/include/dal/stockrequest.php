<?php
$dalTablestockrequest = array();
$dalTablestockrequest["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablestockrequest["requestID"] = array("type"=>200,"varname"=>"requestID");
$dalTablestockrequest["StaffID"] = array("type"=>200,"varname"=>"StaffID");
$dalTablestockrequest["ProductID"] = array("type"=>200,"varname"=>"ProductID");
$dalTablestockrequest["Qty"] = array("type"=>3,"varname"=>"Qty");
$dalTablestockrequest["Notes"] = array("type"=>200,"varname"=>"Notes");
$dalTablestockrequest["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTablestockrequest["ReceiveFlag"] = array("type"=>200,"varname"=>"ReceiveFlag");
	$dalTablestockrequest["ID"]["key"]=true;
$dal_info["stockrequest"]=&$dalTablestockrequest;

?>