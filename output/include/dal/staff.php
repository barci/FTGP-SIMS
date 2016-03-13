<?php
$dalTablestaff = array();
$dalTablestaff["StaffID"] = array("type"=>3,"varname"=>"StaffID");
$dalTablestaff["Name"] = array("type"=>200,"varname"=>"Name");
$dalTablestaff["Fname"] = array("type"=>200,"varname"=>"Fname");
$dalTablestaff["Lname"] = array("type"=>200,"varname"=>"Lname");
$dalTablestaff["DOB"] = array("type"=>7,"varname"=>"DOB");
$dalTablestaff["Address"] = array("type"=>200,"varname"=>"Address");
$dalTablestaff["Sex"] = array("type"=>200,"varname"=>"Sex");
$dalTablestaff["Phone"] = array("type"=>200,"varname"=>"Phone");
$dalTablestaff["RoleID"] = array("type"=>200,"varname"=>"RoleID");
$dalTablestaff["UserName"] = array("type"=>200,"varname"=>"UserName");
$dalTablestaff["Password"] = array("type"=>200,"varname"=>"Password");
	$dalTablestaff["StaffID"]["key"]=true;
$dal_info["staff"]=&$dalTablestaff;

?>