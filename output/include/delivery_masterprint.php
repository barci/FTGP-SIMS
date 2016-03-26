<?php
include_once(getabspath("include/delivery_settings.php"));

function DisplayMasterTableInfo_delivery($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="delivery";

//$strSQL = "SELECT  ID,  DrNo,  orderID,  prodID,  qty,  eta,  delFlag,  staffID  FROM delivery  WHERE (delFlag = 'NO')  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["delivery_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="DR Printing")
{
		$where.= GetFullFieldName("DrNo", "", false)."=".$cipherer->MakeDBValue("DrNo",$keys[1-1], "", "", true);
	$showKeys .= " "."DR No".": ".$keys[1-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("orderID", "", false)."=".$cipherer->MakeDBValue("orderID",$keys[2-1], "", "", true);
	$showKeys .= " "."Order ID".": ".$keys[2-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("eta", "", false)."=".$cipherer->MakeDBValue("eta",$keys[3-1], "", "", true);
	$showKeys .= " "."ETA".": ".$keys[3-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));
	

//	ID - 
			$xt->assign("ID_mastervalue", $viewControls->showDBValue("ID", $data, $keylink));

//	DrNo - 
			$xt->assign("DrNo_mastervalue", $viewControls->showDBValue("DrNo", $data, $keylink));

//	orderID - 
			$xt->assign("orderID_mastervalue", $viewControls->showDBValue("orderID", $data, $keylink));

//	prodID - 
			$xt->assign("prodID_mastervalue", $viewControls->showDBValue("prodID", $data, $keylink));

//	qty - 
			$xt->assign("qty_mastervalue", $viewControls->showDBValue("qty", $data, $keylink));

//	eta - Short Date
			$xt->assign("eta_mastervalue", $viewControls->showDBValue("eta", $data, $keylink));

//	delFlag - 
			$xt->assign("delFlag_mastervalue", $viewControls->showDBValue("delFlag", $data, $keylink));

//	staffID - 
			$xt->assign("staffID_mastervalue", $viewControls->showDBValue("staffID", $data, $keylink));
	$xt->display("delivery_masterprint.htm");
	$strTableName=$oldTableName;

}

?>