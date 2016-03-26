<?php
$dalTableorderdetail = array();
$dalTableorderdetail["ODetailID"] = array("type"=>3,"varname"=>"ODetailID");
$dalTableorderdetail["OrderID"] = array("type"=>200,"varname"=>"OrderID");
$dalTableorderdetail["BillNo"] = array("type"=>200,"varname"=>"BillNo");
$dalTableorderdetail["ProductID"] = array("type"=>200,"varname"=>"ProductID");
$dalTableorderdetail["UPrice"] = array("type"=>14,"varname"=>"UPrice");
$dalTableorderdetail["OrdQuant"] = array("type"=>3,"varname"=>"OrdQuant");
$dalTableorderdetail["DelQuant"] = array("type"=>3,"varname"=>"DelQuant");
$dalTableorderdetail["Discount"] = array("type"=>14,"varname"=>"Discount");
$dalTableorderdetail["Total"] = array("type"=>14,"varname"=>"Total");
$dalTableorderdetail["DelDate"] = array("type"=>7,"varname"=>"DelDate");
$dalTableorderdetail["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTableorderdetail["staffID"] = array("type"=>200,"varname"=>"staffID");
	$dalTableorderdetail["ODetailID"]["key"]=true;
$dal_info["orderdetail"]=&$dalTableorderdetail;

?>