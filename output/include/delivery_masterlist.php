<?php
include_once(getabspath("include/delivery_settings.php"));

function DisplayMasterTableInfo_delivery($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "delivery";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["delivery_masterlist"] = $layout;


if($detailtable == "orderdetail")
{
		$where.= GetFullFieldName("orderID", "", false)."=".$cipherer->MakeDBValue("orderID",$keys[1-1], "", "", true);
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));
	

//	ID - 
			$value="";

					$xt->assign("ID_mastervalue", $viewControls->showDBValue("ID", $data, $keylink));

//	DrNo - 
			$value="";

					$xt->assign("DrNo_mastervalue", $viewControls->showDBValue("DrNo", $data, $keylink));

//	orderID - 
			$value="";

					$xt->assign("orderID_mastervalue", $viewControls->showDBValue("orderID", $data, $keylink));

//	prodID - 
			$value="";

					$xt->assign("prodID_mastervalue", $viewControls->showDBValue("prodID", $data, $keylink));

//	qty - 
			$value="";

					$xt->assign("qty_mastervalue", $viewControls->showDBValue("qty", $data, $keylink));

//	eta - Short Date
			$value="";

					$xt->assign("eta_mastervalue", $viewControls->showDBValue("eta", $data, $keylink));

//	acceptFlag - 
			$value="";

					$xt->assign("acceptFlag_mastervalue", $viewControls->showDBValue("acceptFlag", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("delivery", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("delivery_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>