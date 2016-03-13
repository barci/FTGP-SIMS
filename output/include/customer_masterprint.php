<?php
include_once(getabspath("include/customer_settings.php"));

function DisplayMasterTableInfo_customer($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="customer";

//$strSQL = "SELECT CID,   BRegNo,   ComName,   Fname,   Lname,   OAddress,   DAddress,   Phone,   Email,   StaffID  FROM customer ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["customer_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="orderentry")
{
		$where.= GetFullFieldName("CID", "", false)."=".$cipherer->MakeDBValue("CID",$keys[1-1], "", "", true);
	$showKeys .= " "."CID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["CID"]));
	

//	CID - 
			$xt->assign("CID_mastervalue", $viewControls->showDBValue("CID", $data, $keylink));

//	BRegNo - 
			$xt->assign("BRegNo_mastervalue", $viewControls->showDBValue("BRegNo", $data, $keylink));

//	ComName - 
			$xt->assign("ComName_mastervalue", $viewControls->showDBValue("ComName", $data, $keylink));

//	Fname - 
			$xt->assign("Fname_mastervalue", $viewControls->showDBValue("Fname", $data, $keylink));

//	Lname - 
			$xt->assign("Lname_mastervalue", $viewControls->showDBValue("Lname", $data, $keylink));

//	OAddress - 
			$xt->assign("OAddress_mastervalue", $viewControls->showDBValue("OAddress", $data, $keylink));

//	DAddress - 
			$xt->assign("DAddress_mastervalue", $viewControls->showDBValue("DAddress", $data, $keylink));

//	Phone - 
			$xt->assign("Phone_mastervalue", $viewControls->showDBValue("Phone", $data, $keylink));

//	Email - 
			$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));

//	StaffID - 
			$xt->assign("StaffID_mastervalue", $viewControls->showDBValue("StaffID", $data, $keylink));
	$xt->display("customer_masterprint.htm");
	$strTableName=$oldTableName;

}

?>