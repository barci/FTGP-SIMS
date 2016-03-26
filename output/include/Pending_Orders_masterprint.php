<?php
include_once(getabspath("include/Pending_Orders_settings.php"));

function DisplayMasterTableInfo_Pending_Orders($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="Pending Orders";

//$strSQL = "SELECT  ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate  FROM orderdetail  WHERE (OrdQuant > DelQuant)  ORDER BY DelDate ASC  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Pending_Orders_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="delivery")
{
		$where.= GetFullFieldName("ProductID", "", false)."=".$cipherer->MakeDBValue("ProductID",$keys[1-1], "", "", true);
	$showKeys .= " "."Product".": ".$keys[1-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("OrderID", "", false)."=".$cipherer->MakeDBValue("OrderID",$keys[2-1], "", "", true);
	$showKeys .= " "."Order ID".": ".$keys[2-1];
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
	

//	OrderID - 
			$xt->assign("OrderID_mastervalue", $viewControls->showDBValue("OrderID", $data, $keylink));

//	ProductID - 
			$xt->assign("ProductID_mastervalue", $viewControls->showDBValue("ProductID", $data, $keylink));

//	OrdQuant - 
			$xt->assign("OrdQuant_mastervalue", $viewControls->showDBValue("OrdQuant", $data, $keylink));

//	DelQuant - 
			$xt->assign("DelQuant_mastervalue", $viewControls->showDBValue("DelQuant", $data, $keylink));

//	DelDate - Long Date
			$xt->assign("DelDate_mastervalue", $viewControls->showDBValue("DelDate", $data, $keylink));
	$xt->display("Pending_Orders_masterprint.htm");
	$strTableName=$oldTableName;

}

?>