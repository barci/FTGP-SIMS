<?php
$dalTablesupplier = array();
$dalTablesupplier["SupplierID"] = array("type"=>3,"varname"=>"SupplierID");
$dalTablesupplier["ComName"] = array("type"=>200,"varname"=>"ComName");
$dalTablesupplier["ConFName"] = array("type"=>200,"varname"=>"ConFName");
$dalTablesupplier["ConLName"] = array("type"=>200,"varname"=>"ConLName");
$dalTablesupplier["ConTitle"] = array("type"=>200,"varname"=>"ConTitle");
$dalTablesupplier["Address"] = array("type"=>200,"varname"=>"Address");
$dalTablesupplier["Phone"] = array("type"=>200,"varname"=>"Phone");
$dalTablesupplier["Fax"] = array("type"=>200,"varname"=>"Fax");
$dalTablesupplier["Email"] = array("type"=>200,"varname"=>"Email");
$dalTablesupplier["PayMeth"] = array("type"=>200,"varname"=>"PayMeth");
$dalTablesupplier["DisType"] = array("type"=>200,"varname"=>"DisType");
	$dalTablesupplier["SupplierID"]["key"]=true;
$dal_info["supplier"]=&$dalTablesupplier;

?>