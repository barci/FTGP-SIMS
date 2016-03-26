<?php
include_once(getabspath("include/product_settings.php"));

function DisplayMasterTableInfo_product($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="product";

//$strSQL = "SELECT  ProdID,  Pname,  CatID,  SuppID,  QPerUnit,  Uprice,  USP,  Uweight,  Usize,  Discount,  UInStock,  format((Qperunit*uinstock), 0) AS Qty,  UInOrder,  ReOrLevel,  Note,  ProdNo,  staffID  FROM product  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["product_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="stockrequest")
{
		$where.= GetFullFieldName("ProdID", "", false)."=".$cipherer->MakeDBValue("ProdID",$keys[1-1], "", "", true);
	$showKeys .= " "."Prod ID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdID"]));
	

//	ProdID - 
			$xt->assign("ProdID_mastervalue", $viewControls->showDBValue("ProdID", $data, $keylink));

//	Pname - Custom
			$xt->assign("Pname_mastervalue", $viewControls->showDBValue("Pname", $data, $keylink));

//	CatID - 
			$xt->assign("CatID_mastervalue", $viewControls->showDBValue("CatID", $data, $keylink));

//	SuppID - 
			$xt->assign("SuppID_mastervalue", $viewControls->showDBValue("SuppID", $data, $keylink));

//	QPerUnit - 
			$xt->assign("QPerUnit_mastervalue", $viewControls->showDBValue("QPerUnit", $data, $keylink));

//	Uprice - 
			$xt->assign("Uprice_mastervalue", $viewControls->showDBValue("Uprice", $data, $keylink));

//	USP - 
			$xt->assign("USP_mastervalue", $viewControls->showDBValue("USP", $data, $keylink));

//	Uweight - 
			$xt->assign("Uweight_mastervalue", $viewControls->showDBValue("Uweight", $data, $keylink));

//	Usize - 
			$xt->assign("Usize_mastervalue", $viewControls->showDBValue("Usize", $data, $keylink));

//	Discount - 
			$xt->assign("Discount_mastervalue", $viewControls->showDBValue("Discount", $data, $keylink));

//	UInStock - Custom
			$xt->assign("UInStock_mastervalue", $viewControls->showDBValue("UInStock", $data, $keylink));

//	Qty - 
			$xt->assign("Qty_mastervalue", $viewControls->showDBValue("Qty", $data, $keylink));

//	UInOrder - 
			$xt->assign("UInOrder_mastervalue", $viewControls->showDBValue("UInOrder", $data, $keylink));

//	ReOrLevel - 
			$xt->assign("ReOrLevel_mastervalue", $viewControls->showDBValue("ReOrLevel", $data, $keylink));

//	Note - 
			$xt->assign("Note_mastervalue", $viewControls->showDBValue("Note", $data, $keylink));

//	ProdNo - 
			$xt->assign("ProdNo_mastervalue", $viewControls->showDBValue("ProdNo", $data, $keylink));

//	staffID - 
			$xt->assign("staffID_mastervalue", $viewControls->showDBValue("staffID", $data, $keylink));
	$xt->display("product_masterprint.htm");
	$strTableName=$oldTableName;

}

?>