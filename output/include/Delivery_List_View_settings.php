<?php
require_once(getabspath("classes/cipherer.php"));
$tdataDelivery_List_View = array();
	$tdataDelivery_List_View[".NumberOfChars"] = 80; 
	$tdataDelivery_List_View[".ShortName"] = "Delivery_List_View";
	$tdataDelivery_List_View[".OwnerID"] = "";
	$tdataDelivery_List_View[".OriginalTable"] = "delivery";

//	field labels
$fieldLabelsDelivery_List_View = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDelivery_List_View["English"] = array();
	$fieldToolTipsDelivery_List_View["English"] = array();
	$fieldLabelsDelivery_List_View["English"]["ID"] = "ID";
	$fieldToolTipsDelivery_List_View["English"]["ID"] = "";
	$fieldLabelsDelivery_List_View["English"]["DrNo"] = "DR No";
	$fieldToolTipsDelivery_List_View["English"]["DrNo"] = "";
	$fieldLabelsDelivery_List_View["English"]["orderID"] = "Order ID";
	$fieldToolTipsDelivery_List_View["English"]["orderID"] = "";
	$fieldLabelsDelivery_List_View["English"]["prodID"] = "Product";
	$fieldToolTipsDelivery_List_View["English"]["prodID"] = "";
	$fieldLabelsDelivery_List_View["English"]["qty"] = "Qantity";
	$fieldToolTipsDelivery_List_View["English"]["qty"] = "";
	$fieldLabelsDelivery_List_View["English"]["eta"] = "ETA";
	$fieldToolTipsDelivery_List_View["English"]["eta"] = "";
	$fieldLabelsDelivery_List_View["English"]["delFlag"] = "Delivery Flag";
	$fieldToolTipsDelivery_List_View["English"]["delFlag"] = "";
	$fieldLabelsDelivery_List_View["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsDelivery_List_View["English"]["TimeStamp"] = "";
	$fieldLabelsDelivery_List_View["English"]["staffID"] = "Staff ID";
	$fieldToolTipsDelivery_List_View["English"]["staffID"] = "";
	$fieldLabelsDelivery_List_View["English"]["longname"] = "Longname";
	$fieldToolTipsDelivery_List_View["English"]["longname"] = "";
	if (count($fieldToolTipsDelivery_List_View["English"]))
		$tdataDelivery_List_View[".isUseToolTips"] = true;
}
	
	
	$tdataDelivery_List_View[".NCSearch"] = true;



$tdataDelivery_List_View[".shortTableName"] = "Delivery_List_View";
$tdataDelivery_List_View[".nSecOptions"] = 0;
$tdataDelivery_List_View[".recsPerRowList"] = 1;
$tdataDelivery_List_View[".mainTableOwnerID"] = "";
$tdataDelivery_List_View[".moveNext"] = 1;
$tdataDelivery_List_View[".nType"] = 1;

$tdataDelivery_List_View[".strOriginalTableName"] = "delivery";




$tdataDelivery_List_View[".showAddInPopup"] = false;

$tdataDelivery_List_View[".showEditInPopup"] = false;

$tdataDelivery_List_View[".showViewInPopup"] = false;

$tdataDelivery_List_View[".fieldsForRegister"] = array();

$tdataDelivery_List_View[".listAjax"] = false;

	$tdataDelivery_List_View[".audit"] = false;

	$tdataDelivery_List_View[".locking"] = false;

$tdataDelivery_List_View[".listIcons"] = true;
$tdataDelivery_List_View[".edit"] = true;
$tdataDelivery_List_View[".inlineEdit"] = true;
$tdataDelivery_List_View[".inlineAdd"] = true;
$tdataDelivery_List_View[".view"] = true;

$tdataDelivery_List_View[".exportTo"] = true;

$tdataDelivery_List_View[".printFriendly"] = true;

$tdataDelivery_List_View[".delete"] = true;

$tdataDelivery_List_View[".showSimpleSearchOptions"] = false;

$tdataDelivery_List_View[".showSearchPanel"] = true;

if (isMobile())
	$tdataDelivery_List_View[".isUseAjaxSuggest"] = false;
else 
	$tdataDelivery_List_View[".isUseAjaxSuggest"] = true;

$tdataDelivery_List_View[".rowHighlite"] = true;

// button handlers file names

$tdataDelivery_List_View[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDelivery_List_View[".isUseTimeForSearch"] = false;




$tdataDelivery_List_View[".allSearchFields"] = array();

$tdataDelivery_List_View[".allSearchFields"][] = "ID";
$tdataDelivery_List_View[".allSearchFields"][] = "DrNo";
$tdataDelivery_List_View[".allSearchFields"][] = "orderID";
$tdataDelivery_List_View[".allSearchFields"][] = "prodID";
$tdataDelivery_List_View[".allSearchFields"][] = "longname";
$tdataDelivery_List_View[".allSearchFields"][] = "qty";
$tdataDelivery_List_View[".allSearchFields"][] = "eta";
$tdataDelivery_List_View[".allSearchFields"][] = "delFlag";
$tdataDelivery_List_View[".allSearchFields"][] = "TimeStamp";
$tdataDelivery_List_View[".allSearchFields"][] = "staffID";

$tdataDelivery_List_View[".googleLikeFields"][] = "ID";
$tdataDelivery_List_View[".googleLikeFields"][] = "DrNo";
$tdataDelivery_List_View[".googleLikeFields"][] = "orderID";
$tdataDelivery_List_View[".googleLikeFields"][] = "prodID";
$tdataDelivery_List_View[".googleLikeFields"][] = "longname";
$tdataDelivery_List_View[".googleLikeFields"][] = "qty";
$tdataDelivery_List_View[".googleLikeFields"][] = "eta";
$tdataDelivery_List_View[".googleLikeFields"][] = "delFlag";
$tdataDelivery_List_View[".googleLikeFields"][] = "TimeStamp";
$tdataDelivery_List_View[".googleLikeFields"][] = "staffID";


$tdataDelivery_List_View[".advSearchFields"][] = "ID";
$tdataDelivery_List_View[".advSearchFields"][] = "DrNo";
$tdataDelivery_List_View[".advSearchFields"][] = "orderID";
$tdataDelivery_List_View[".advSearchFields"][] = "prodID";
$tdataDelivery_List_View[".advSearchFields"][] = "longname";
$tdataDelivery_List_View[".advSearchFields"][] = "qty";
$tdataDelivery_List_View[".advSearchFields"][] = "eta";
$tdataDelivery_List_View[".advSearchFields"][] = "delFlag";
$tdataDelivery_List_View[".advSearchFields"][] = "TimeStamp";
$tdataDelivery_List_View[".advSearchFields"][] = "staffID";

$tdataDelivery_List_View[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataDelivery_List_View[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDelivery_List_View[".strOrderBy"] = $tstrOrderBy;

$tdataDelivery_List_View[".orderindexes"] = array();

$tdataDelivery_List_View[".sqlHead"] = "SELECT delivery.ID,  delivery.DrNo,  delivery.orderID,  delivery.prodID,  concat(product.Pname, ' - (', delivery.qty,')') AS longname,  delivery.qty,  delivery.eta,  delivery.delFlag,  delivery.`TimeStamp`,  delivery.staffID";
$tdataDelivery_List_View[".sqlFrom"] = "FROM delivery  , product";
$tdataDelivery_List_View[".sqlWhereExpr"] = "(delivery.prodID =product.ProdID) AND (delivery.delFlag = 'NO')";
$tdataDelivery_List_View[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDelivery_List_View[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDelivery_List_View[".arrGroupsPerPage"] = $arrGPP;

$tableKeysDelivery_List_View = array();
$tableKeysDelivery_List_View[] = "ID";
$tdataDelivery_List_View[".Keys"] = $tableKeysDelivery_List_View;

$tdataDelivery_List_View[".listFields"] = array();
$tdataDelivery_List_View[".listFields"][] = "ID";
$tdataDelivery_List_View[".listFields"][] = "DrNo";
$tdataDelivery_List_View[".listFields"][] = "orderID";
$tdataDelivery_List_View[".listFields"][] = "prodID";
$tdataDelivery_List_View[".listFields"][] = "longname";
$tdataDelivery_List_View[".listFields"][] = "qty";
$tdataDelivery_List_View[".listFields"][] = "eta";
$tdataDelivery_List_View[".listFields"][] = "delFlag";
$tdataDelivery_List_View[".listFields"][] = "TimeStamp";
$tdataDelivery_List_View[".listFields"][] = "staffID";

$tdataDelivery_List_View[".viewFields"] = array();
$tdataDelivery_List_View[".viewFields"][] = "ID";
$tdataDelivery_List_View[".viewFields"][] = "DrNo";
$tdataDelivery_List_View[".viewFields"][] = "orderID";
$tdataDelivery_List_View[".viewFields"][] = "prodID";
$tdataDelivery_List_View[".viewFields"][] = "longname";
$tdataDelivery_List_View[".viewFields"][] = "qty";
$tdataDelivery_List_View[".viewFields"][] = "eta";
$tdataDelivery_List_View[".viewFields"][] = "delFlag";
$tdataDelivery_List_View[".viewFields"][] = "TimeStamp";
$tdataDelivery_List_View[".viewFields"][] = "staffID";

$tdataDelivery_List_View[".addFields"] = array();
$tdataDelivery_List_View[".addFields"][] = "DrNo";
$tdataDelivery_List_View[".addFields"][] = "orderID";
$tdataDelivery_List_View[".addFields"][] = "prodID";
$tdataDelivery_List_View[".addFields"][] = "qty";
$tdataDelivery_List_View[".addFields"][] = "eta";
$tdataDelivery_List_View[".addFields"][] = "delFlag";
$tdataDelivery_List_View[".addFields"][] = "TimeStamp";
$tdataDelivery_List_View[".addFields"][] = "staffID";

$tdataDelivery_List_View[".inlineAddFields"] = array();
$tdataDelivery_List_View[".inlineAddFields"][] = "DrNo";
$tdataDelivery_List_View[".inlineAddFields"][] = "orderID";
$tdataDelivery_List_View[".inlineAddFields"][] = "prodID";
$tdataDelivery_List_View[".inlineAddFields"][] = "longname";
$tdataDelivery_List_View[".inlineAddFields"][] = "qty";
$tdataDelivery_List_View[".inlineAddFields"][] = "eta";
$tdataDelivery_List_View[".inlineAddFields"][] = "delFlag";
$tdataDelivery_List_View[".inlineAddFields"][] = "TimeStamp";
$tdataDelivery_List_View[".inlineAddFields"][] = "staffID";

$tdataDelivery_List_View[".editFields"] = array();
$tdataDelivery_List_View[".editFields"][] = "DrNo";
$tdataDelivery_List_View[".editFields"][] = "orderID";
$tdataDelivery_List_View[".editFields"][] = "prodID";
$tdataDelivery_List_View[".editFields"][] = "qty";
$tdataDelivery_List_View[".editFields"][] = "eta";
$tdataDelivery_List_View[".editFields"][] = "delFlag";
$tdataDelivery_List_View[".editFields"][] = "TimeStamp";
$tdataDelivery_List_View[".editFields"][] = "staffID";

$tdataDelivery_List_View[".inlineEditFields"] = array();
$tdataDelivery_List_View[".inlineEditFields"][] = "DrNo";
$tdataDelivery_List_View[".inlineEditFields"][] = "orderID";
$tdataDelivery_List_View[".inlineEditFields"][] = "prodID";
$tdataDelivery_List_View[".inlineEditFields"][] = "longname";
$tdataDelivery_List_View[".inlineEditFields"][] = "qty";
$tdataDelivery_List_View[".inlineEditFields"][] = "eta";
$tdataDelivery_List_View[".inlineEditFields"][] = "delFlag";
$tdataDelivery_List_View[".inlineEditFields"][] = "TimeStamp";
$tdataDelivery_List_View[".inlineEditFields"][] = "staffID";

$tdataDelivery_List_View[".exportFields"] = array();
$tdataDelivery_List_View[".exportFields"][] = "ID";
$tdataDelivery_List_View[".exportFields"][] = "DrNo";
$tdataDelivery_List_View[".exportFields"][] = "orderID";
$tdataDelivery_List_View[".exportFields"][] = "prodID";
$tdataDelivery_List_View[".exportFields"][] = "longname";
$tdataDelivery_List_View[".exportFields"][] = "qty";
$tdataDelivery_List_View[".exportFields"][] = "eta";
$tdataDelivery_List_View[".exportFields"][] = "delFlag";
$tdataDelivery_List_View[".exportFields"][] = "TimeStamp";
$tdataDelivery_List_View[".exportFields"][] = "staffID";

$tdataDelivery_List_View[".printFields"] = array();
$tdataDelivery_List_View[".printFields"][] = "ID";
$tdataDelivery_List_View[".printFields"][] = "DrNo";
$tdataDelivery_List_View[".printFields"][] = "orderID";
$tdataDelivery_List_View[".printFields"][] = "prodID";
$tdataDelivery_List_View[".printFields"][] = "longname";
$tdataDelivery_List_View[".printFields"][] = "qty";
$tdataDelivery_List_View[".printFields"][] = "eta";
$tdataDelivery_List_View[".printFields"][] = "delFlag";
$tdataDelivery_List_View[".printFields"][] = "TimeStamp";
$tdataDelivery_List_View[".printFields"][] = "staffID";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "delivery.ID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["ID"] = $fdata;
//	DrNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DrNo";
	$fdata["GoodName"] = "DrNo";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "DR No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "DrNo"; 
		$fdata["FullName"] = "delivery.DrNo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["DrNo"] = $fdata;
//	orderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "orderID";
	$fdata["GoodName"] = "orderID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Order ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "orderID"; 
		$fdata["FullName"] = "delivery.orderID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["orderID"] = $fdata;
//	prodID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "prodID";
	$fdata["GoodName"] = "prodID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Product"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "prodID"; 
		$fdata["FullName"] = "delivery.prodID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["prodID"] = $fdata;
//	longname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "longname";
	$fdata["GoodName"] = "longname";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Longname"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "longname"; 
		$fdata["FullName"] = "concat(product.Pname, ' - (', delivery.qty,')')";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["longname"] = $fdata;
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Qantity"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "qty"; 
		$fdata["FullName"] = "delivery.qty";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			
		
//	Begin validation
	$edata["validateAs"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["qty"] = $fdata;
//	eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eta";
	$fdata["GoodName"] = "eta";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "ETA"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta"; 
		$fdata["FullName"] = "delivery.eta";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Long Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["eta"] = $fdata;
//	delFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "delFlag";
	$fdata["GoodName"] = "delFlag";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Delivery Flag"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "delFlag"; 
		$fdata["FullName"] = "delivery.delFlag";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["delFlag"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Time Stamp"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "TimeStamp"; 
		$fdata["FullName"] = "delivery.`TimeStamp`";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["TimeStamp"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "staffID"; 
		$fdata["FullName"] = "delivery.staffID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
			
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataDelivery_List_View["staffID"] = $fdata;

	
$tables_data["Delivery List View"]=&$tdataDelivery_List_View;
$field_labels["Delivery_List_View"] = &$fieldLabelsDelivery_List_View;
$fieldToolTips["Delivery List View"] = &$fieldToolTipsDelivery_List_View;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Delivery List View"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Delivery List View"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Delivery_List_View()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delivery.ID,  delivery.DrNo,  delivery.orderID,  delivery.prodID,  concat(product.Pname, ' - (', delivery.qty,')') AS longname,  delivery.qty,  delivery.eta,  delivery.delFlag,  delivery.`TimeStamp`,  delivery.staffID";
$proto0["m_strFrom"] = "FROM delivery  , product";
$proto0["m_strWhere"] = "(delivery.prodID =product.ProdID) AND (delivery.delFlag = 'NO')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(delivery.prodID =product.ProdID) AND (delivery.delFlag = 'NO')";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(delivery.prodID =product.ProdID) AND (delivery.delFlag = 'NO')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "delivery.prodID =product.ProdID";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "prodID",
	"m_strTable" => "delivery"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=product.ProdID";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "delivery.delFlag = 'NO'";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delFlag",
	"m_strTable" => "delivery"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= 'NO'";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "delivery"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "DrNo",
	"m_strTable" => "delivery"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "orderID",
	"m_strTable" => "delivery"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "prodID",
	"m_strTable" => "delivery"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "product.Pname"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - ('"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "delivery.qty"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "')'"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto18);

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "longname";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "delivery"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "eta",
	"m_strTable" => "delivery"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "delFlag",
	"m_strTable" => "delivery"
));

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeStamp",
	"m_strTable" => "delivery"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "delivery"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto33=array();
$proto33["m_link"] = "SQLL_MAIN";
			$proto34=array();
$proto34["m_strName"] = "delivery";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "ID";
$proto34["m_columns"][] = "DrNo";
$proto34["m_columns"][] = "orderID";
$proto34["m_columns"][] = "prodID";
$proto34["m_columns"][] = "qty";
$proto34["m_columns"][] = "eta";
$proto34["m_columns"][] = "delFlag";
$proto34["m_columns"][] = "TimeStamp";
$proto34["m_columns"][] = "staffID";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_alias"] = "";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = "0";
$proto35["m_inBrackets"] = "0";
$proto35["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
												$proto37=array();
$proto37["m_link"] = "SQLL_CROSSJOIN";
			$proto38=array();
$proto38["m_strName"] = "product";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "ProdID";
$proto38["m_columns"][] = "ProdNo";
$proto38["m_columns"][] = "Pname";
$proto38["m_columns"][] = "CatID";
$proto38["m_columns"][] = "SuppID";
$proto38["m_columns"][] = "QPerUnit";
$proto38["m_columns"][] = "Uprice";
$proto38["m_columns"][] = "USP";
$proto38["m_columns"][] = "Uweight";
$proto38["m_columns"][] = "Usize";
$proto38["m_columns"][] = "Discount";
$proto38["m_columns"][] = "UInStock";
$proto38["m_columns"][] = "UInOrder";
$proto38["m_columns"][] = "ReOrLevel";
$proto38["m_columns"][] = "Note";
$proto38["m_columns"][] = "TimeStamp";
$proto38["m_columns"][] = "staffID";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_alias"] = "";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = "0";
$proto39["m_inBrackets"] = "0";
$proto39["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Delivery_List_View = createSqlQuery_Delivery_List_View();
										$tdataDelivery_List_View[".sqlquery"] = $queryData_Delivery_List_View;

$tableEvents["Delivery List View"] = new eventsBase;
$tdataDelivery_List_View[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Delivery List View");

?>