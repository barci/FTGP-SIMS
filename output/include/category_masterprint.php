<?php
include_once(getabspath("include/category_settings.php"));

function DisplayMasterTableInfo_category($params)
{
	$detailtable=$params["detailtable"];
	$keys=$params["keys"];
	global $conn,$strTableName;
	$xt = new Xtempl();
	
	$oldTableName=$strTableName;
	$strTableName="category";

//$strSQL = "SELECT CatID,   CatName,   `Desc`  FROM category ";

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
$layout->blocks["bare"][] = "mastergrid";$page_layouts["category_masterprint"] = $layout;


$showKeys = "";
if($detailtable=="product")
{
		$where.= GetFullFieldName("CatID", "", false)."=".$cipherer->MakeDBValue("CatID",$keys[1-1], "", "", true);
	$showKeys .= " "."Cat ID".": ".$keys[1-1];
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
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["CatID"]));
	

//	CatID - 
			$xt->assign("CatID_mastervalue", $viewControls->showDBValue("CatID", $data, $keylink));

//	CatName - 
			$xt->assign("CatName_mastervalue", $viewControls->showDBValue("CatName", $data, $keylink));

//	Desc - 
			$xt->assign("Desc_mastervalue", $viewControls->showDBValue("Desc", $data, $keylink));
	$xt->display("category_masterprint.htm");
	$strTableName=$oldTableName;

}

?>