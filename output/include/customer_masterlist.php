<?php
include_once(getabspath("include/customer_settings.php"));

function DisplayMasterTableInfo_customer($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "customer";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["customer_masterlist"] = $layout;


if($detailtable == "orderentry")
{
		$where.= GetFullFieldName("CID", "", false)."=".$cipherer->MakeDBValue("CID",$keys[1-1], "", "", true);
	$showKeys .= " "."CID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["CID"]));
	

//	CID - 
			$value="";

					$xt->assign("CID_mastervalue", $viewControls->showDBValue("CID", $data, $keylink));

//	BRegNo - 
			$value="";

					$xt->assign("BRegNo_mastervalue", $viewControls->showDBValue("BRegNo", $data, $keylink));

//	ComName - 
			$value="";

					$xt->assign("ComName_mastervalue", $viewControls->showDBValue("ComName", $data, $keylink));

//	Fname - 
			$value="";

					$xt->assign("Fname_mastervalue", $viewControls->showDBValue("Fname", $data, $keylink));

//	Lname - 
			$value="";

					$xt->assign("Lname_mastervalue", $viewControls->showDBValue("Lname", $data, $keylink));

//	OAddress - 
			$value="";

					$xt->assign("OAddress_mastervalue", $viewControls->showDBValue("OAddress", $data, $keylink));

//	DAddress - 
			$value="";

					$xt->assign("DAddress_mastervalue", $viewControls->showDBValue("DAddress", $data, $keylink));

//	Phone - 
			$value="";

					$xt->assign("Phone_mastervalue", $viewControls->showDBValue("Phone", $data, $keylink));

//	Email - 
			$value="";

					$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));

//	StaffID - 
			$value="";

					$xt->assign("StaffID_mastervalue", $viewControls->showDBValue("StaffID", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("customer", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("customer_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>