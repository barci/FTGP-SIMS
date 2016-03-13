<?php
include_once(getabspath("include/supplier_settings.php"));

function DisplayMasterTableInfo_supplier($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="supplier";

//$strSQL = "SELECT SupplierID,   ComName,   ConFName,   ConLName,   ConTitle,   Address,   Phone,   Fax,   Email,   PayMeth,   DisType  FROM supplier ";

	$cipherer = new RunnerCipherer($strTableName);
	$settings = new ProjectSettings($strTableName, PAGE_PRINT);
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

$where="";

global $pageObject, $page_styles, $page_layouts, $page_layout_names, $container_styles;
$layout = new TLayout("masterprint","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterprintheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterprintfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["supplier_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="product")
{
		$where.= GetFullFieldName("SupplierID", "", false)."=".$cipherer->MakeDBValue("SupplierID",$keys[1-1], "", "", true);
	$showKeys .= " "."Supplier ID".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
	
}
if(!$where)
{
	$strTableName=$oldTableName;
	return;
}
	$str = SecuritySQL("Export");
	if(strlen($str))
		$where.=" and ".$str;
	
	$strWhere = whereAdd($masterQuery->m_where->toSql($masterQuery),$where);
	if(strlen($strWhere))
		$strWhere=" where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL=AddWhere($strSQL,$where);

	LogInfo($strSQL);
	$rs=db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName=$oldTableName;
		return;
	}
	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["SupplierID"]));
	

//	SupplierID - 
			$xt->assign("SupplierID_mastervalue", $viewControls->showDBValue("SupplierID", $data, $keylink));

//	ComName - 
			$xt->assign("ComName_mastervalue", $viewControls->showDBValue("ComName", $data, $keylink));

//	ConFName - 
			$xt->assign("ConFName_mastervalue", $viewControls->showDBValue("ConFName", $data, $keylink));

//	ConLName - 
			$xt->assign("ConLName_mastervalue", $viewControls->showDBValue("ConLName", $data, $keylink));

//	ConTitle - 
			$xt->assign("ConTitle_mastervalue", $viewControls->showDBValue("ConTitle", $data, $keylink));

//	Address - 
			$xt->assign("Address_mastervalue", $viewControls->showDBValue("Address", $data, $keylink));

//	Phone - 
			$xt->assign("Phone_mastervalue", $viewControls->showDBValue("Phone", $data, $keylink));

//	Fax - 
			$xt->assign("Fax_mastervalue", $viewControls->showDBValue("Fax", $data, $keylink));

//	Email - 
			$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));

//	PayMeth - 
			$xt->assign("PayMeth_mastervalue", $viewControls->showDBValue("PayMeth", $data, $keylink));

//	DisType - 
			$xt->assign("DisType_mastervalue", $viewControls->showDBValue("DisType", $data, $keylink));
	$xt->display("supplier_masterprint.htm");
	$strTableName=$oldTableName;

}

?>