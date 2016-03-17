<?php
include_once(getabspath("include/product_settings.php"));

function DisplayMasterTableInfo_product($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "product";
	
	$settings = new ProjectSettings($strTableName, PAGE_LIST);
	$cipherer = new RunnerCipherer($strTableName);
	
	$masterQuery = $settings->getSQLQuery();
	
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST);

$where = "";
$mKeys = array();
$showKeys = "";

global $page_styles, $page_layouts, $page_layout_names, $container_styles;

$layout = new TLayout("masterlist","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["0"] = array();

$layout->containers["0"][] = array("name"=>"masterlistheader","block"=>"","substyle"=>1);


$layout->skins["0"] = "empty";
$layout->blocks["bare"][] = "0";
$layout->containers["mastergrid"] = array();

$layout->containers["mastergrid"][] = array("name"=>"masterlistfields","block"=>"","substyle"=>1);


$layout->skins["mastergrid"] = "grid";
$layout->blocks["bare"][] = "mastergrid";$page_layouts["product_masterlist"] = $layout;


if($detailtable == "stockrequest")
{
		$where.= GetFullFieldName("ProdID", "", false)."=".$cipherer->MakeDBValue("ProdID",$keys[1-1], "", "", true);
	$showKeys .= " "."Prod ID".": ".$keys[1-1];
	$xt->assign('showKeys',$showKeys);
}
	if(!$where)
	{
		$strTableName = $oldTableName;
		return;
	}
	$str = SecuritySQL("Search");
	if(strlen($str))
		$where.= " and ".$str;

	$strWhere = whereAdd($masterQuery->WhereToSql(),$where);
	if(strlen($strWhere))
		$strWhere = " where ".$strWhere." ";
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();

//	$strSQL = AddWhere($strSQL,$where);
	LogInfo($strSQL);
	$rs = db_query($strSQL,$conn);
	$data = $cipherer->DecryptFetchedArray($rs);
	if(!$data)
	{
		$strTableName = $oldTableName;
		return;
	}
	$keylink = "";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdID"]));
	

//	ProdID - 
			$value="";

					$xt->assign("ProdID_mastervalue", $viewControls->showDBValue("ProdID", $data, $keylink));

//	Pname - 
			$value="";

					$xt->assign("Pname_mastervalue", $viewControls->showDBValue("Pname", $data, $keylink));

//	CatID - 
			$value="";

					$xt->assign("CatID_mastervalue", $viewControls->showDBValue("CatID", $data, $keylink));

//	SuppID - 
			$value="";

					$xt->assign("SuppID_mastervalue", $viewControls->showDBValue("SuppID", $data, $keylink));

//	QPerUnit - 
			$value="";

					$xt->assign("QPerUnit_mastervalue", $viewControls->showDBValue("QPerUnit", $data, $keylink));

//	Uprice - 
			$value="";

					$xt->assign("Uprice_mastervalue", $viewControls->showDBValue("Uprice", $data, $keylink));

//	USP - 
			$value="";

					$xt->assign("USP_mastervalue", $viewControls->showDBValue("USP", $data, $keylink));

//	Uweight - 
			$value="";

					$xt->assign("Uweight_mastervalue", $viewControls->showDBValue("Uweight", $data, $keylink));

//	Usize - 
			$value="";

					$xt->assign("Usize_mastervalue", $viewControls->showDBValue("Usize", $data, $keylink));

//	Discount - 
			$value="";

					$xt->assign("Discount_mastervalue", $viewControls->showDBValue("Discount", $data, $keylink));

//	UInStock - 
			$value="";

					$xt->assign("UInStock_mastervalue", $viewControls->showDBValue("UInStock", $data, $keylink));

//	Qty - 
			$value="";

					$xt->assign("Qty_mastervalue", $viewControls->showDBValue("Qty", $data, $keylink));

//	UInOrder - 
			$value="";

					$xt->assign("UInOrder_mastervalue", $viewControls->showDBValue("UInOrder", $data, $keylink));

//	ReOrLevel - 
			$value="";

					$xt->assign("ReOrLevel_mastervalue", $viewControls->showDBValue("ReOrLevel", $data, $keylink));

//	Note - 
			$value="";

					$xt->assign("Note_mastervalue", $viewControls->showDBValue("Note", $data, $keylink));

//	ProdNo - 
			$value="";

					$xt->assign("ProdNo_mastervalue", $viewControls->showDBValue("ProdNo", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("product", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("product_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>