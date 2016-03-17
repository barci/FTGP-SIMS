<?php
include_once(getabspath("include/Pending_Orders_settings.php"));

function DisplayMasterTableInfo_Pending_Orders($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "Pending Orders";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["Pending_Orders_masterlist"] = $layout;


if($detailtable == "delivery")
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ODetailID"]));
	

//	ODetailID - 
			$value="";

					$xt->assign("ODetailID_mastervalue", $viewControls->showDBValue("ODetailID", $data, $keylink));

//	OrderID - 
			$value="";

					$xt->assign("OrderID_mastervalue", $viewControls->showDBValue("OrderID", $data, $keylink));

//	BillNo - 
			$value="";

					$xt->assign("BillNo_mastervalue", $viewControls->showDBValue("BillNo", $data, $keylink));

//	ProductID - 
			$value="";

					$xt->assign("ProductID_mastervalue", $viewControls->showDBValue("ProductID", $data, $keylink));

//	OrdQuant - 
			$value="";

					$xt->assign("OrdQuant_mastervalue", $viewControls->showDBValue("OrdQuant", $data, $keylink));

//	DelQuant - 
			$value="";

					$xt->assign("DelQuant_mastervalue", $viewControls->showDBValue("DelQuant", $data, $keylink));

//	Total - Number
			$value="";

					$xt->assign("Total_mastervalue", $viewControls->showDBValue("Total", $data, $keylink));

//	DelDate - Short Date
			$value="";

					$xt->assign("DelDate_mastervalue", $viewControls->showDBValue("DelDate", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("Pending_Orders", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("Pending_Orders_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>