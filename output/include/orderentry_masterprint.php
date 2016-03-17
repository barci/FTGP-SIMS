<?php
include_once(getabspath("include/orderentry_settings.php"));

function DisplayMasterTableInfo_orderentry($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="orderentry";

//$strSQL = "SELECT  OrderID,  StaffID,  CID,  ODate,  ErrorMsg  FROM orderentry  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["orderentry_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="orderdetail")
{
		$where.= GetFullFieldName("OrderID", "", false)."=".$cipherer->MakeDBValue("OrderID",$keys[1-1], "", "", true);
	$showKeys .= " "."Order ID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["OrderID"]));
	

//	OrderID - 
			$xt->assign("OrderID_mastervalue", $viewControls->showDBValue("OrderID", $data, $keylink));

//	StaffID - 
			$xt->assign("StaffID_mastervalue", $viewControls->showDBValue("StaffID", $data, $keylink));

//	CID - 
			$xt->assign("CID_mastervalue", $viewControls->showDBValue("CID", $data, $keylink));

//	ODate - Short Date
			$xt->assign("ODate_mastervalue", $viewControls->showDBValue("ODate", $data, $keylink));

//	ErrorMsg - 
			$xt->assign("ErrorMsg_mastervalue", $viewControls->showDBValue("ErrorMsg", $data, $keylink));
	$xt->display("orderentry_masterprint.htm");
	$strTableName=$oldTableName;

}

?>