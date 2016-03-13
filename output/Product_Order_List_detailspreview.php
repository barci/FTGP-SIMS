<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

include("include/Product_Order_List_variables.php");

$mode = postvalue("mode");

if(!isLogged())
{ 
	return;
}
if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{
	return;
}

$cipherer = new RunnerCipherer($strTableName);


include('include/xtempl.php');
$xt = new Xtempl();

$layout = new TLayout("detailspreview","BoldOrange","MobileOrange");
$layout->blocks["bare"] = array();
$layout->containers["dcount"] = array();

$layout->containers["dcount"][] = array("name"=>"detailspreviewheader","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdetailsfount","block"=>"","substyle"=>1);


$layout->containers["dcount"][] = array("name"=>"detailspreviewdispfirst","block"=>"display_first","substyle"=>1);


$layout->skins["dcount"] = "empty";
$layout->blocks["bare"][] = "dcount";
$layout->containers["detailspreviewgrid"] = array();

$layout->containers["detailspreviewgrid"][] = array("name"=>"detailspreviewfields","block"=>"details_data","substyle"=>1);


$layout->skins["detailspreviewgrid"] = "grid";
$layout->blocks["bare"][] = "detailspreviewgrid";$page_layouts["Product_Order_List_detailspreview"] = $layout;


$recordsCounter = 0;

//	process masterkey value
$mastertable = postvalue("mastertable");
$masterKeys = my_json_decode(postvalue("masterKeys"));
if($mastertable != "")
{
	$_SESSION[$strTableName."_mastertable"]=$mastertable;
//	copy keys to session
	$i = 1;
	if(is_array($masterKeys) && count($masterKeys) > 0)
	{
		while(array_key_exists ("masterkey".$i, $masterKeys))
		{
			$_SESSION[$strTableName."_masterkey".$i] = $masterKeys["masterkey".$i];
			$i++;
		}
	}
	if(isset($_SESSION[$strTableName."_masterkey".$i]))
		unset($_SESSION[$strTableName."_masterkey".$i]);
}
else
	$mastertable = $_SESSION[$strTableName."_mastertable"];

//$strSQL = $gstrSQL;

if($mastertable == "delivery")
{
	$where = "";
		$where .= GetFullFieldName("ProdID", $strTableName, false)."=".make_db_value("ProdID",$_SESSION[$strTableName."_masterkey1"]);
}

$str = SecuritySQL("Search");
if(strlen($str))
	$where.=" and ".$str;
$strSQL = $gQuery->gSQLWhere($where);

$strSQL.=" ".$gstrOrderBy;

$rowcount = $gQuery->gSQLRowCount($where);

$xt->assign("row_count",$rowcount);
if($rowcount) {
	$xt->assign("details_data",true);
	$rs = db_query($strSQL,$conn);

	$display_count = 10;
	if($mode == "inline")
		$display_count*=2;
	if($rowcount>$display_count+2)
	{
		$xt->assign("display_first",true);
		$xt->assign("display_count",$display_count);
	}
	else
		$display_count = $rowcount;

	$rowinfo = array();
	
	$data = $cipherer->DecryptFetchedArray($rs);
	require_once getabspath('classes/controls/ViewControlsContainer.php');
	$pSet = new ProjectSettings($strTableName, PAGE_LIST);
	$viewContainer = new ViewControlsContainer($pSet, PAGE_LIST);
	while($data && $recordsCounter<$display_count) {
		$recordsCounter++;
		$row = array();
		$keylink = "";
		$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ProdID"]));

	
	//	ProdID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ProdID", $data, $keylink);
			$row["ProdID_value"] = $value;
	//	Product Name - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Product Name", $data, $keylink);
			$row["Product_Name_value"] = $value;
	//	CatName - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CatName", $data, $keylink);
			$row["CatName_value"] = $value;
	//	CatID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("CatID", $data, $keylink);
			$row["CatID_value"] = $value;
	//	SuppID - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("SuppID", $data, $keylink);
			$row["SuppID_value"] = $value;
	//	QPerUnit - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("QPerUnit", $data, $keylink);
			$row["QPerUnit_value"] = $value;
	//	Uweight - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Uweight", $data, $keylink);
			$row["Uweight_value"] = $value;
	//	Usize - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Usize", $data, $keylink);
			$row["Usize_value"] = $value;
	//	UInStock - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("UInStock", $data, $keylink);
			$row["UInStock_value"] = $value;
	//	ReOrLevel - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("ReOrLevel", $data, $keylink);
			$row["ReOrLevel_value"] = $value;
	//	Note - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Note", $data, $keylink);
			$row["Note_value"] = $value;
	//	Desc - 
			$viewContainer->recId = $recordsCounter;
		    $value = $viewContainer->showDBValue("Desc", $data, $keylink);
			$row["Desc_value"] = $value;
		$rowinfo[] = $row;
		$data = $cipherer->DecryptFetchedArray($rs);
	}
	$xt->assign_loopsection("details_row",$rowinfo);
}
$returnJSON = array("success" => true);
$xt->load_template("Product_Order_List_detailspreview.htm");
$returnJSON["body"] = $xt->fetch_loaded();

if($mode!="inline"){
	$returnJSON["counter"] = postvalue("counter");
	$layout = GetPageLayout(GoodFieldName($strTableName), 'detailspreview');
	if($layout)
	{
		$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
		$returnJSON["style"] = "styles/".$layout->style."/style".$rtl.".css";
		$returnJSON["pageStyle"] = "pagestyles/".$layout->name.$rtl.".css";
		$returnJSON["layout"] = $layout->style." page-".$layout->name.".css";
	}	
}	

echo "<textarea>".htmlspecialchars(my_json_encode($returnJSON))."</textarea>";
?>