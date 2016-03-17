<?php
$dalTableorderentry = array();
$dalTableorderentry["OrderID"] = array("type"=>200,"varname"=>"OrderID");
$dalTableorderentry["StaffID"] = array("type"=>200,"varname"=>"StaffID");
$dalTableorderentry["CID"] = array("type"=>200,"varname"=>"CID");
$dalTableorderentry["ODate"] = array("type"=>135,"varname"=>"ODate");
$dalTableorderentry["ErrorMsg"] = array("type"=>200,"varname"=>"ErrorMsg");
$dalTableorderentry["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
	$dalTableorderentry["OrderID"]["key"]=true;
$dal_info["orderentry"]=&$dalTableorderentry;

?>