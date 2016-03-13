<?php
include_once(getabspath("include/supplier_settings.php"));

function DisplayMasterTableInfo_supplier($params)
{
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	$detailPageObj = $params["detailPageObj"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	$oldTableName = $strTableName;
	$strTableName = "supplier";
	
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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["supplier_masterlist"] = $layout;


if($detailtable == "product")
{
		$where.= GetFullFieldName("SupplierID", "", false)."=".$cipherer->MakeDBValue("SupplierID",$keys[1-1], "", "", true);
	$showKeys .= " "."Supplier ID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["SupplierID"]));
	

//	SupplierID - 
			$value="";

					$xt->assign("SupplierID_mastervalue", $viewControls->showDBValue("SupplierID", $data, $keylink));

//	ComName - 
			$value="";

					$xt->assign("ComName_mastervalue", $viewControls->showDBValue("ComName", $data, $keylink));

//	ConFName - 
			$value="";

					$xt->assign("ConFName_mastervalue", $viewControls->showDBValue("ConFName", $data, $keylink));

//	ConLName - 
			$value="";

					$xt->assign("ConLName_mastervalue", $viewControls->showDBValue("ConLName", $data, $keylink));

//	ConTitle - 
			$value="";

					$xt->assign("ConTitle_mastervalue", $viewControls->showDBValue("ConTitle", $data, $keylink));

//	Address - 
			$value="";

					$xt->assign("Address_mastervalue", $viewControls->showDBValue("Address", $data, $keylink));

//	Phone - 
			$value="";

					$xt->assign("Phone_mastervalue", $viewControls->showDBValue("Phone", $data, $keylink));

//	Fax - 
			$value="";

					$xt->assign("Fax_mastervalue", $viewControls->showDBValue("Fax", $data, $keylink));

//	Email - 
			$value="";

					$xt->assign("Email_mastervalue", $viewControls->showDBValue("Email", $data, $keylink));

//	PayMeth - 
			$value="";

					$xt->assign("PayMeth_mastervalue", $viewControls->showDBValue("PayMeth", $data, $keylink));

//	DisType - 
			$value="";

					$xt->assign("DisType_mastervalue", $viewControls->showDBValue("DisType", $data, $keylink));

	$viewControls->addControlsJSAndCSS();
	$detailPageObj->viewControlsMap['mViewControlsMap'] = $viewControls->viewControlsMap;

	$layout = GetPageLayout("supplier", 'masterlist');
	if($layout)
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->display("supplier_masterlist.htm");
	
	$strTableName=$oldTableName;
}

?>