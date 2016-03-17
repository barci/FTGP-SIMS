<?php
$dalTabledelivery = array();
$dalTabledelivery["ID"] = array("type"=>3,"varname"=>"ID");
$dalTabledelivery["DrNo"] = array("type"=>200,"varname"=>"DrNo");
$dalTabledelivery["orderID"] = array("type"=>200,"varname"=>"orderID");
$dalTabledelivery["prodID"] = array("type"=>200,"varname"=>"prodID");
$dalTabledelivery["qty"] = array("type"=>3,"varname"=>"qty");
$dalTabledelivery["eta"] = array("type"=>135,"varname"=>"eta");
$dalTabledelivery["delFlag"] = array("type"=>200,"varname"=>"delFlag");
$dalTabledelivery["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
	$dalTabledelivery["ID"]["key"]=true;
$dal_info["delivery"]=&$dalTabledelivery;

?>