<?php
include_once(getabspath("include/DR_Printing_settings.php"));

function DisplayMasterTableInfo_DR_Printing($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="DR Printing";

//$strSQL = "SELECT  delivery.ID,  delivery.DrNo AS DrNo,  delivery.orderID AS orderID,  delivery.prodID AS prodID,  delivery.qty AS qty,  product.USP AS USP,  format((qty*USP),0) as subtotal,  delivery.eta AS eta,  delivery.delFlag AS delFlag,  concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone) AS Destination  FROM delivery  , orderentry  , customer  , product  WHERE (delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)  ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["DR_Printing_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="packinglist")
{
		$where.= GetFullFieldName("ID", "", false)."=".$cipherer->MakeDBValue("ID",$keys[1-1], "", "", true);
	$showKeys .= " "."ID".": ".$keys[1-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("DrNo", "", false)."=".$cipherer->MakeDBValue("DrNo",$keys[2-1], "", "", true);
	$showKeys .= " "."DR No".": ".$keys[2-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("orderID", "", false)."=".$cipherer->MakeDBValue("orderID",$keys[3-1], "", "", true);
	$showKeys .= " "."Order ID".": ".$keys[3-1];
		$where.=" and ";
	$showKeys .=" , ";
	$where.= GetFullFieldName("eta", "", false)."=".$cipherer->MakeDBValue("eta",$keys[4-1], "", "", true);
	$showKeys .= " "."ETA".": ".$keys[4-1];
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

//	DrNo - Custom
			$xt->assign("DrNo_mastervalue", $viewControls->showDBValue("DrNo", $data, $keylink));

//	orderID - 
			$xt->assign("orderID_mastervalue", $viewControls->showDBValue("orderID", $data, $keylink));

//	prodID - 
			$xt->assign("prodID_mastervalue", $viewControls->showDBValue("prodID", $data, $keylink));

//	qty - 
			$xt->assign("qty_mastervalue", $viewControls->showDBValue("qty", $data, $keylink));

//	USP - Custom
			$xt->assign("USP_mastervalue", $viewControls->showDBValue("USP", $data, $keylink));

//	subtotal - 
			$xt->assign("subtotal_mastervalue", $viewControls->showDBValue("subtotal", $data, $keylink));

//	eta - Long Date
			$xt->assign("eta_mastervalue", $viewControls->showDBValue("eta", $data, $keylink));

//	delFlag - 
			$xt->assign("delFlag_mastervalue", $viewControls->showDBValue("delFlag", $data, $keylink));

//	Destination - 
			$xt->assign("Destination_mastervalue", $viewControls->showDBValue("Destination", $data, $keylink));
	$xt->display("DR_Printing_masterprint.htm");
	$strTableName=$oldTableName;

}

?>