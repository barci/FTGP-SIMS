<?php
include_once(getabspath("include/orderentry_settings.php"));

function DisplayMasterTableInfo_orderentry($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "orderentry";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["orderentry_masterlist"] = $layout;


if($detailtable == "orderdetail")
{
		$where.= GetFullFieldName("OrderID", "", false)."=".$cipherer->MakeDBValue("OrderID",$keys[1-1], "", "", true);
	$showKeys .= " "."Order ID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["OrderID"]));
	

//	OrderID - 
			$value="";

					$xt->assign("OrderID_mastervalue", $viewControls->showDBValue("OrderID", $data, $keylink));

//	StaffID - 
			$value="";

					$xt->assign("StaffID_mastervalue", $viewControls->showDBValue("StaffID", $data, $keylink));

//	CID - 
			$value="";

					$xt->assign("CID_mastervalue", $viewControls->showDBValue("CID", $data, $keylink));

//	ODate - Short Date
			$value="";

					$xt->assign("ODate_mastervalue", $viewControls->showDBValue("ODate", $data, $keylink));

//	ErrorMsg - 
			$value="";

					$xt->assign("ErrorMsg_mastervalue", $viewControls->showDBValue("ErrorMsg", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("orderentry", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("orderentry_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>