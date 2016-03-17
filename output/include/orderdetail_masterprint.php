<?php
include_once(getabspath("include/orderdetail_settings.php"));

function DisplayMasterTableInfo_orderdetail($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="orderdetail";

//$strSQL = "SELECT  ODetailID,  OrderID,  BillNo,  ProductID,  UPrice,  OrdQuant,  DelQuant,  Discount,  Total,  DelDate  FROM orderdetail  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["orderdetail_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="delivery")
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ODetailID"]));
	

//	ODetailID - 
			$xt->assign("ODetailID_mastervalue", $viewControls->showDBValue("ODetailID", $data, $keylink));

//	OrderID - 
			$xt->assign("OrderID_mastervalue", $viewControls->showDBValue("OrderID", $data, $keylink));

//	BillNo - 
			$xt->assign("BillNo_mastervalue", $viewControls->showDBValue("BillNo", $data, $keylink));

//	ProductID - 
			$xt->assign("ProductID_mastervalue", $viewControls->showDBValue("ProductID", $data, $keylink));

//	UPrice - Number
			$xt->assign("UPrice_mastervalue", $viewControls->showDBValue("UPrice", $data, $keylink));

//	OrdQuant - 
			$xt->assign("OrdQuant_mastervalue", $viewControls->showDBValue("OrdQuant", $data, $keylink));

//	DelQuant - 
			$xt->assign("DelQuant_mastervalue", $viewControls->showDBValue("DelQuant", $data, $keylink));

//	Discount - Number
			$xt->assign("Discount_mastervalue", $viewControls->showDBValue("Discount", $data, $keylink));

//	Total - Number
			$xt->assign("Total_mastervalue", $viewControls->showDBValue("Total", $data, $keylink));

//	DelDate - Short Date
			$xt->assign("DelDate_mastervalue", $viewControls->showDBValue("DelDate", $data, $keylink));
	$xt->display("orderdetail_masterprint.htm");
	$strTableName=$oldTableName;

}

?>