<?php
require_once(getabspath("classes/cipherer.php"));
$tdataGate_Pass_Printing = array();
	$tdataGate_Pass_Printing[".NumberOfChars"] = 80; 
	$tdataGate_Pass_Printing[".ShortName"] = "Gate_Pass_Printing";
	$tdataGate_Pass_Printing[".OwnerID"] = "";
	$tdataGate_Pass_Printing[".OriginalTable"] = "delivery";

//	field labels
$fieldLabelsGate_Pass_Printing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsGate_Pass_Printing["English"] = array();
	$fieldToolTipsGate_Pass_Printing["English"] = array();
	$fieldLabelsGate_Pass_Printing["English"]["ID"] = "ID";
	$fieldToolTipsGate_Pass_Printing["English"]["ID"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["DrNo"] = "DR No";
	$fieldToolTipsGate_Pass_Printing["English"]["DrNo"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["orderID"] = "Order ID";
	$fieldToolTipsGate_Pass_Printing["English"]["orderID"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["prodID"] = "Product";
	$fieldToolTipsGate_Pass_Printing["English"]["prodID"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["qty"] = "Quantity";
	$fieldToolTipsGate_Pass_Printing["English"]["qty"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["delFlag"] = "Delivery Flag";
	$fieldToolTipsGate_Pass_Printing["English"]["delFlag"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["Destination"] = "Destination";
	$fieldToolTipsGate_Pass_Printing["English"]["Destination"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["USP"] = "Unit Price";
	$fieldToolTipsGate_Pass_Printing["English"]["USP"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["eta"] = "Eta";
	$fieldToolTipsGate_Pass_Printing["English"]["eta"] = "";
	$fieldLabelsGate_Pass_Printing["English"]["subtotal"] = "Subtotal";
	$fieldToolTipsGate_Pass_Printing["English"]["subtotal"] = "";
	if (count($fieldToolTipsGate_Pass_Printing["English"]))
		$tdataGate_Pass_Printing[".isUseToolTips"] = true;
}
	
	
	$tdataGate_Pass_Printing[".NCSearch"] = true;



$tdataGate_Pass_Printing[".shortTableName"] = "Gate_Pass_Printing";
$tdataGate_Pass_Printing[".nSecOptions"] = 0;
$tdataGate_Pass_Printing[".recsPerRowList"] = 1;
$tdataGate_Pass_Printing[".mainTableOwnerID"] = "";
$tdataGate_Pass_Printing[".moveNext"] = 1;
$tdataGate_Pass_Printing[".nType"] = 1;

$tdataGate_Pass_Printing[".strOriginalTableName"] = "delivery";




$tdataGate_Pass_Printing[".showAddInPopup"] = false;

$tdataGate_Pass_Printing[".showEditInPopup"] = false;

$tdataGate_Pass_Printing[".showViewInPopup"] = false;

$tdataGate_Pass_Printing[".fieldsForRegister"] = array();

$tdataGate_Pass_Printing[".listAjax"] = false;

	$tdataGate_Pass_Printing[".audit"] = false;

	$tdataGate_Pass_Printing[".locking"] = false;

$tdataGate_Pass_Printing[".listIcons"] = true;
$tdataGate_Pass_Printing[".edit"] = true;
$tdataGate_Pass_Printing[".inlineEdit"] = true;
$tdataGate_Pass_Printing[".inlineAdd"] = true;
$tdataGate_Pass_Printing[".copy"] = true;
$tdataGate_Pass_Printing[".view"] = true;

$tdataGate_Pass_Printing[".exportTo"] = true;

$tdataGate_Pass_Printing[".printFriendly"] = true;

$tdataGate_Pass_Printing[".delete"] = true;

$tdataGate_Pass_Printing[".showSimpleSearchOptions"] = false;

$tdataGate_Pass_Printing[".showSearchPanel"] = true;

if (isMobile())
	$tdataGate_Pass_Printing[".isUseAjaxSuggest"] = false;
else 
	$tdataGate_Pass_Printing[".isUseAjaxSuggest"] = true;

$tdataGate_Pass_Printing[".rowHighlite"] = true;

// button handlers file names

$tdataGate_Pass_Printing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataGate_Pass_Printing[".isUseTimeForSearch"] = false;




$tdataGate_Pass_Printing[".allSearchFields"] = array();

$tdataGate_Pass_Printing[".allSearchFields"][] = "ID";
$tdataGate_Pass_Printing[".allSearchFields"][] = "DrNo";
$tdataGate_Pass_Printing[".allSearchFields"][] = "orderID";
$tdataGate_Pass_Printing[".allSearchFields"][] = "prodID";
$tdataGate_Pass_Printing[".allSearchFields"][] = "qty";
$tdataGate_Pass_Printing[".allSearchFields"][] = "USP";
$tdataGate_Pass_Printing[".allSearchFields"][] = "subtotal";
$tdataGate_Pass_Printing[".allSearchFields"][] = "eta";
$tdataGate_Pass_Printing[".allSearchFields"][] = "delFlag";
$tdataGate_Pass_Printing[".allSearchFields"][] = "Destination";

$tdataGate_Pass_Printing[".googleLikeFields"][] = "ID";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "DrNo";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "orderID";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "prodID";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "qty";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "USP";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "subtotal";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "eta";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "delFlag";
$tdataGate_Pass_Printing[".googleLikeFields"][] = "Destination";


$tdataGate_Pass_Printing[".advSearchFields"][] = "ID";
$tdataGate_Pass_Printing[".advSearchFields"][] = "DrNo";
$tdataGate_Pass_Printing[".advSearchFields"][] = "orderID";
$tdataGate_Pass_Printing[".advSearchFields"][] = "prodID";
$tdataGate_Pass_Printing[".advSearchFields"][] = "qty";
$tdataGate_Pass_Printing[".advSearchFields"][] = "USP";
$tdataGate_Pass_Printing[".advSearchFields"][] = "subtotal";
$tdataGate_Pass_Printing[".advSearchFields"][] = "eta";
$tdataGate_Pass_Printing[".advSearchFields"][] = "delFlag";
$tdataGate_Pass_Printing[".advSearchFields"][] = "Destination";

$tdataGate_Pass_Printing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataGate_Pass_Printing[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataGate_Pass_Printing[".strOrderBy"] = $tstrOrderBy;

$tdataGate_Pass_Printing[".orderindexes"] = array();

$tdataGate_Pass_Printing[".sqlHead"] = "SELECT delivery.ID,  delivery.DrNo AS DrNo,  delivery.orderID AS orderID,  delivery.prodID AS prodID,  delivery.qty AS qty,  product.USP AS USP,  format((qty*USP),0) as subtotal,  delivery.eta AS eta,  delivery.delFlag AS delFlag,  concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone) AS Destination";
$tdataGate_Pass_Printing[".sqlFrom"] = "FROM delivery  , orderentry  , customer  , product";
$tdataGate_Pass_Printing[".sqlWhereExpr"] = "(delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)";
$tdataGate_Pass_Printing[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataGate_Pass_Printing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataGate_Pass_Printing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysGate_Pass_Printing = array();
$tableKeysGate_Pass_Printing[] = "ID";
$tdataGate_Pass_Printing[".Keys"] = $tableKeysGate_Pass_Printing;

$tdataGate_Pass_Printing[".listFields"] = array();
$tdataGate_Pass_Printing[".listFields"][] = "ID";
$tdataGate_Pass_Printing[".listFields"][] = "DrNo";
$tdataGate_Pass_Printing[".listFields"][] = "orderID";
$tdataGate_Pass_Printing[".listFields"][] = "prodID";
$tdataGate_Pass_Printing[".listFields"][] = "qty";
$tdataGate_Pass_Printing[".listFields"][] = "USP";
$tdataGate_Pass_Printing[".listFields"][] = "subtotal";
$tdataGate_Pass_Printing[".listFields"][] = "eta";
$tdataGate_Pass_Printing[".listFields"][] = "delFlag";
$tdataGate_Pass_Printing[".listFields"][] = "Destination";

$tdataGate_Pass_Printing[".viewFields"] = array();
$tdataGate_Pass_Printing[".viewFields"][] = "ID";
$tdataGate_Pass_Printing[".viewFields"][] = "DrNo";
$tdataGate_Pass_Printing[".viewFields"][] = "orderID";
$tdataGate_Pass_Printing[".viewFields"][] = "prodID";
$tdataGate_Pass_Printing[".viewFields"][] = "qty";
$tdataGate_Pass_Printing[".viewFields"][] = "USP";
$tdataGate_Pass_Printing[".viewFields"][] = "subtotal";
$tdataGate_Pass_Printing[".viewFields"][] = "eta";
$tdataGate_Pass_Printing[".viewFields"][] = "delFlag";
$tdataGate_Pass_Printing[".viewFields"][] = "Destination";

$tdataGate_Pass_Printing[".addFields"] = array();
$tdataGate_Pass_Printing[".addFields"][] = "DrNo";
$tdataGate_Pass_Printing[".addFields"][] = "orderID";
$tdataGate_Pass_Printing[".addFields"][] = "prodID";
$tdataGate_Pass_Printing[".addFields"][] = "qty";
$tdataGate_Pass_Printing[".addFields"][] = "eta";
$tdataGate_Pass_Printing[".addFields"][] = "delFlag";

$tdataGate_Pass_Printing[".inlineAddFields"] = array();
$tdataGate_Pass_Printing[".inlineAddFields"][] = "DrNo";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "orderID";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "prodID";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "qty";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "USP";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "subtotal";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "eta";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "delFlag";
$tdataGate_Pass_Printing[".inlineAddFields"][] = "Destination";

$tdataGate_Pass_Printing[".editFields"] = array();
$tdataGate_Pass_Printing[".editFields"][] = "DrNo";
$tdataGate_Pass_Printing[".editFields"][] = "orderID";
$tdataGate_Pass_Printing[".editFields"][] = "prodID";
$tdataGate_Pass_Printing[".editFields"][] = "qty";
$tdataGate_Pass_Printing[".editFields"][] = "eta";
$tdataGate_Pass_Printing[".editFields"][] = "delFlag";

$tdataGate_Pass_Printing[".inlineEditFields"] = array();
$tdataGate_Pass_Printing[".inlineEditFields"][] = "DrNo";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "orderID";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "prodID";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "qty";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "USP";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "subtotal";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "eta";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "delFlag";
$tdataGate_Pass_Printing[".inlineEditFields"][] = "Destination";

$tdataGate_Pass_Printing[".exportFields"] = array();
$tdataGate_Pass_Printing[".exportFields"][] = "ID";
$tdataGate_Pass_Printing[".exportFields"][] = "DrNo";
$tdataGate_Pass_Printing[".exportFields"][] = "orderID";
$tdataGate_Pass_Printing[".exportFields"][] = "prodID";
$tdataGate_Pass_Printing[".exportFields"][] = "qty";
$tdataGate_Pass_Printing[".exportFields"][] = "USP";
$tdataGate_Pass_Printing[".exportFields"][] = "subtotal";
$tdataGate_Pass_Printing[".exportFields"][] = "eta";
$tdataGate_Pass_Printing[".exportFields"][] = "delFlag";
$tdataGate_Pass_Printing[".exportFields"][] = "Destination";

$tdataGate_Pass_Printing[".printFields"] = array();
$tdataGate_Pass_Printing[".printFields"][] = "ID";
$tdataGate_Pass_Printing[".printFields"][] = "DrNo";
$tdataGate_Pass_Printing[".printFields"][] = "orderID";
$tdataGate_Pass_Printing[".printFields"][] = "prodID";
$tdataGate_Pass_Printing[".printFields"][] = "qty";
$tdataGate_Pass_Printing[".printFields"][] = "USP";
$tdataGate_Pass_Printing[".printFields"][] = "subtotal";

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
	
		
		
	$tdataGate_Pass_Printing["ID"] = $fdata;
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
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataGate_Pass_Printing["DrNo"] = $fdata;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "OrderID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "OrderID";
	
		
	$edata["LookupTable"] = "orderentry";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataGate_Pass_Printing["orderID"] = $fdata;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "ProdID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Product Name";
	
		
	$edata["LookupTable"] = "Product-Order List";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataGate_Pass_Printing["prodID"] = $fdata;
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Quantity"; 
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
	
		
		
	$tdataGate_Pass_Printing["qty"] = $fdata;
//	USP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "USP";
	$fdata["GoodName"] = "USP";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Price"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "USP"; 
		$fdata["FullName"] = "product.USP";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataGate_Pass_Printing["USP"] = $fdata;
//	subtotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "subtotal";
	$fdata["GoodName"] = "subtotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Subtotal"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "subtotal"; 
		$fdata["FullName"] = "format((qty*USP),0)";
	
		
		
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
	
		
		
	$tdataGate_Pass_Printing["subtotal"] = $fdata;
//	eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta";
	$fdata["GoodName"] = "eta";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Eta"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "eta"; 
		$fdata["FullName"] = "delivery.eta";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataGate_Pass_Printing["eta"] = $fdata;
//	delFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		$edata["HorizontalLookup"] = true;
	
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "NO";
	$edata["LookupValues"][] = "YES";

	//	End Lookup Settings

		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
	
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataGate_Pass_Printing["delFlag"] = $fdata;
//	Destination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Destination";
	$fdata["GoodName"] = "Destination";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Destination"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Destination"; 
		$fdata["FullName"] = "concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone)";
	
		
		
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
	
		
		
	$tdataGate_Pass_Printing["Destination"] = $fdata;

	
$tables_data["Gate Pass Printing"]=&$tdataGate_Pass_Printing;
$field_labels["Gate_Pass_Printing"] = &$fieldLabelsGate_Pass_Printing;
$fieldToolTips["Gate Pass Printing"] = &$fieldToolTipsGate_Pass_Printing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Gate Pass Printing"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Gate Pass Printing"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Gate_Pass_Printing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "delivery.ID,  delivery.DrNo AS DrNo,  delivery.orderID AS orderID,  delivery.prodID AS prodID,  delivery.qty AS qty,  product.USP AS USP,  format((qty*USP),0) as subtotal,  delivery.eta AS eta,  delivery.delFlag AS delFlag,  concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone) AS Destination";
$proto0["m_strFrom"] = "FROM delivery  , orderentry  , customer  , product";
$proto0["m_strWhere"] = "(delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "delivery.orderID =orderentry.OrderID";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "orderID",
	"m_strTable" => "delivery"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=orderentry.OrderID";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "delivery.prodID = product.ProdID";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "prodID",
	"m_strTable" => "delivery"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= product.ProdID";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "delivery.delFlag = 'NO'";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "delFlag",
	"m_strTable" => "delivery"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "= 'NO'";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "1";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "orderentry.CID =customer.CID";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CID",
	"m_strTable" => "orderentry"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "=customer.CID";
$proto9["m_havingmode"] = "0";
$proto9["m_inBrackets"] = "1";
$proto9["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = "0";
$proto11["m_inBrackets"] = "0";
$proto11["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto11);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "delivery"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DrNo",
	"m_strTable" => "delivery"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "DrNo";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "orderID",
	"m_strTable" => "delivery"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "orderID";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "prodID",
	"m_strTable" => "delivery"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "prodID";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "delivery"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "qty";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "USP",
	"m_strTable" => "product"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "USP";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_CUSTOM";
$proto26["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(qty*USP)"
));

$proto26["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto26);

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "subtotal";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "eta",
	"m_strTable" => "delivery"
));

$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "eta";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "delFlag",
	"m_strTable" => "delivery"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "delFlag";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_CUSTOM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "customer.ComName"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "customer.DAddress"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto34["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "customer.phone"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto34);

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "Destination";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "delivery";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "DrNo";
$proto41["m_columns"][] = "orderID";
$proto41["m_columns"][] = "prodID";
$proto41["m_columns"][] = "qty";
$proto41["m_columns"][] = "eta";
$proto41["m_columns"][] = "delFlag";
$proto41["m_columns"][] = "TimeStamp";
$proto41["m_columns"][] = "staffID";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_CROSSJOIN";
			$proto45=array();
$proto45["m_strName"] = "orderentry";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "OrderID";
$proto45["m_columns"][] = "StaffID";
$proto45["m_columns"][] = "CID";
$proto45["m_columns"][] = "ODate";
$proto45["m_columns"][] = "ErrorMsg";
$proto45["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_alias"] = "";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = "0";
$proto46["m_inBrackets"] = "0";
$proto46["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_CROSSJOIN";
			$proto49=array();
$proto49["m_strName"] = "customer";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "CID";
$proto49["m_columns"][] = "BRegNo";
$proto49["m_columns"][] = "ComName";
$proto49["m_columns"][] = "Fname";
$proto49["m_columns"][] = "Lname";
$proto49["m_columns"][] = "OAddress";
$proto49["m_columns"][] = "DAddress";
$proto49["m_columns"][] = "Phone";
$proto49["m_columns"][] = "Email";
$proto49["m_columns"][] = "StaffID";
$proto49["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_alias"] = "";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = "0";
$proto50["m_inBrackets"] = "0";
$proto50["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_CROSSJOIN";
			$proto53=array();
$proto53["m_strName"] = "product";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ProdID";
$proto53["m_columns"][] = "ProdNo";
$proto53["m_columns"][] = "Pname";
$proto53["m_columns"][] = "CatID";
$proto53["m_columns"][] = "SuppID";
$proto53["m_columns"][] = "QPerUnit";
$proto53["m_columns"][] = "Uprice";
$proto53["m_columns"][] = "USP";
$proto53["m_columns"][] = "Uweight";
$proto53["m_columns"][] = "Usize";
$proto53["m_columns"][] = "Discount";
$proto53["m_columns"][] = "UInStock";
$proto53["m_columns"][] = "UInOrder";
$proto53["m_columns"][] = "ReOrLevel";
$proto53["m_columns"][] = "Note";
$proto53["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_alias"] = "";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = "0";
$proto54["m_inBrackets"] = "0";
$proto54["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Gate_Pass_Printing = createSqlQuery_Gate_Pass_Printing();
										$tdataGate_Pass_Printing[".sqlquery"] = $queryData_Gate_Pass_Printing;

include_once(getabspath("include/Gate_Pass_Printing_events.php"));
$tableEvents["Gate Pass Printing"] = new eventclass_Gate_Pass_Printing;
$tdataGate_Pass_Printing[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Gate Pass Printing");

?>