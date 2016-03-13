<?php
$dalTablecustomer = array();
$dalTablecustomer["CID"] = array("type"=>3,"varname"=>"CID");
$dalTablecustomer["BRegNo"] = array("type"=>200,"varname"=>"BRegNo");
$dalTablecustomer["ComName"] = array("type"=>200,"varname"=>"ComName");
$dalTablecustomer["Fname"] = array("type"=>200,"varname"=>"Fname");
$dalTablecustomer["Lname"] = array("type"=>200,"varname"=>"Lname");
$dalTablecustomer["OAddress"] = array("type"=>200,"varname"=>"OAddress");
$dalTablecustomer["DAddress"] = array("type"=>200,"varname"=>"DAddress");
$dalTablecustomer["Phone"] = array("type"=>200,"varname"=>"Phone");
$dalTablecustomer["Email"] = array("type"=>200,"varname"=>"Email");
$dalTablecustomer["StaffID"] = array("type"=>200,"varname"=>"StaffID");
	$dalTablecustomer["CID"]["key"]=true;
$dal_info["customer"]=&$dalTablecustomer;

?>