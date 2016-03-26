<?php
$dalTableproduct = array();
$dalTableproduct["ProdID"] = array("type"=>3,"varname"=>"ProdID");
$dalTableproduct["ProdNo"] = array("type"=>200,"varname"=>"ProdNo");
$dalTableproduct["Pname"] = array("type"=>200,"varname"=>"Pname");
$dalTableproduct["CatID"] = array("type"=>200,"varname"=>"CatID");
$dalTableproduct["SuppID"] = array("type"=>200,"varname"=>"SuppID");
$dalTableproduct["QPerUnit"] = array("type"=>200,"varname"=>"QPerUnit");
$dalTableproduct["Uprice"] = array("type"=>200,"varname"=>"Uprice");
$dalTableproduct["USP"] = array("type"=>200,"varname"=>"USP");
$dalTableproduct["Uweight"] = array("type"=>200,"varname"=>"Uweight");
$dalTableproduct["Usize"] = array("type"=>200,"varname"=>"Usize");
$dalTableproduct["Discount"] = array("type"=>3,"varname"=>"Discount");
$dalTableproduct["UInStock"] = array("type"=>3,"varname"=>"UInStock");
$dalTableproduct["UInOrder"] = array("type"=>3,"varname"=>"UInOrder");
$dalTableproduct["ReOrLevel"] = array("type"=>3,"varname"=>"ReOrLevel");
$dalTableproduct["Note"] = array("type"=>200,"varname"=>"Note");
$dalTableproduct["TimeStamp"] = array("type"=>135,"varname"=>"TimeStamp");
$dalTableproduct["staffID"] = array("type"=>200,"varname"=>"staffID");
	$dalTableproduct["ProdID"]["key"]=true;
$dal_info["product"]=&$dalTableproduct;

?>