<?php
require_once(getabspath("classes/cipherer.php"));
$tdataDR_Printing = array();
	$tdataDR_Printing[".NumberOfChars"] = 80; 
	$tdataDR_Printing[".ShortName"] = "DR_Printing";
	$tdataDR_Printing[".OwnerID"] = "";
	$tdataDR_Printing[".OriginalTable"] = "delivery";

//	field labels
$fieldLabelsDR_Printing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDR_Printing["English"] = array();
	$fieldToolTipsDR_Printing["English"] = array();
	$fieldLabelsDR_Printing["English"]["ID"] = "ID";
	$fieldToolTipsDR_Printing["English"]["ID"] = "";
	$fieldLabelsDR_Printing["English"]["DrNo"] = "DR No";
	$fieldToolTipsDR_Printing["English"]["DrNo"] = "";
	$fieldLabelsDR_Printing["English"]["orderID"] = "Order ID";
	$fieldToolTipsDR_Printing["English"]["orderID"] = "";
	$fieldLabelsDR_Printing["English"]["prodID"] = "Product";
	$fieldToolTipsDR_Printing["English"]["prodID"] = "";
	$fieldLabelsDR_Printing["English"]["qty"] = "Quantity";
	$fieldToolTipsDR_Printing["English"]["qty"] = "";
	$fieldLabelsDR_Printing["English"]["delFlag"] = "Delivery Flag";
	$fieldToolTipsDR_Printing["English"]["delFlag"] = "";
	$fieldLabelsDR_Printing["English"]["Destination"] = "Destination";
	$fieldToolTipsDR_Printing["English"]["Destination"] = "";
	$fieldLabelsDR_Printing["English"]["USP"] = "Unit Price";
	$fieldToolTipsDR_Printing["English"]["USP"] = "";
	$fieldLabelsDR_Printing["English"]["eta"] = "ETA";
	$fieldToolTipsDR_Printing["English"]["eta"] = "";
	$fieldLabelsDR_Printing["English"]["subtotal"] = "Subtotal";
	$fieldToolTipsDR_Printing["English"]["subtotal"] = "";
	if (count($fieldToolTipsDR_Printing["English"]))
		$tdataDR_Printing[".isUseToolTips"] = true;
}
	
	
	$tdataDR_Printing[".NCSearch"] = true;



$tdataDR_Printing[".shortTableName"] = "DR_Printing";
$tdataDR_Printing[".nSecOptions"] = 0;
$tdataDR_Printing[".recsPerRowList"] = 1;
$tdataDR_Printing[".mainTableOwnerID"] = "";
$tdataDR_Printing[".moveNext"] = 1;
$tdataDR_Printing[".nType"] = 1;

$tdataDR_Printing[".strOriginalTableName"] = "delivery";




$tdataDR_Printing[".showAddInPopup"] = false;

$tdataDR_Printing[".showEditInPopup"] = false;

$tdataDR_Printing[".showViewInPopup"] = false;

$tdataDR_Printing[".fieldsForRegister"] = array();

$tdataDR_Printing[".listAjax"] = false;

	$tdataDR_Printing[".audit"] = false;

	$tdataDR_Printing[".locking"] = false;

$tdataDR_Printing[".listIcons"] = true;
$tdataDR_Printing[".edit"] = true;
$tdataDR_Printing[".inlineEdit"] = true;
$tdataDR_Printing[".inlineAdd"] = true;


$tdataDR_Printing[".printFriendly"] = true;

$tdataDR_Printing[".delete"] = true;

$tdataDR_Printing[".showSimpleSearchOptions"] = false;

$tdataDR_Printing[".showSearchPanel"] = true;

if (isMobile())
	$tdataDR_Printing[".isUseAjaxSuggest"] = false;
else 
	$tdataDR_Printing[".isUseAjaxSuggest"] = true;

$tdataDR_Printing[".rowHighlite"] = true;

// button handlers file names

$tdataDR_Printing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDR_Printing[".isUseTimeForSearch"] = false;



$tdataDR_Printing[".useDetailsPreview"] = true;

$tdataDR_Printing[".allSearchFields"] = array();

$tdataDR_Printing[".allSearchFields"][] = "ID";
$tdataDR_Printing[".allSearchFields"][] = "DrNo";
$tdataDR_Printing[".allSearchFields"][] = "orderID";
$tdataDR_Printing[".allSearchFields"][] = "prodID";
$tdataDR_Printing[".allSearchFields"][] = "qty";
$tdataDR_Printing[".allSearchFields"][] = "USP";
$tdataDR_Printing[".allSearchFields"][] = "subtotal";
$tdataDR_Printing[".allSearchFields"][] = "eta";
$tdataDR_Printing[".allSearchFields"][] = "delFlag";
$tdataDR_Printing[".allSearchFields"][] = "Destination";

$tdataDR_Printing[".googleLikeFields"][] = "ID";
$tdataDR_Printing[".googleLikeFields"][] = "DrNo";
$tdataDR_Printing[".googleLikeFields"][] = "orderID";
$tdataDR_Printing[".googleLikeFields"][] = "prodID";
$tdataDR_Printing[".googleLikeFields"][] = "qty";
$tdataDR_Printing[".googleLikeFields"][] = "USP";
$tdataDR_Printing[".googleLikeFields"][] = "subtotal";
$tdataDR_Printing[".googleLikeFields"][] = "eta";
$tdataDR_Printing[".googleLikeFields"][] = "delFlag";
$tdataDR_Printing[".googleLikeFields"][] = "Destination";


$tdataDR_Printing[".advSearchFields"][] = "ID";
$tdataDR_Printing[".advSearchFields"][] = "DrNo";
$tdataDR_Printing[".advSearchFields"][] = "orderID";
$tdataDR_Printing[".advSearchFields"][] = "prodID";
$tdataDR_Printing[".advSearchFields"][] = "qty";
$tdataDR_Printing[".advSearchFields"][] = "USP";
$tdataDR_Printing[".advSearchFields"][] = "subtotal";
$tdataDR_Printing[".advSearchFields"][] = "eta";
$tdataDR_Printing[".advSearchFields"][] = "delFlag";
$tdataDR_Printing[".advSearchFields"][] = "Destination";

$tdataDR_Printing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataDR_Printing[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDR_Printing[".strOrderBy"] = $tstrOrderBy;

$tdataDR_Printing[".orderindexes"] = array();

$tdataDR_Printing[".sqlHead"] = "SELECT delivery.ID,  delivery.DrNo AS DrNo,  delivery.orderID AS orderID,  delivery.prodID AS prodID,  delivery.qty AS qty,  product.USP AS USP,  format((qty*USP),0) as subtotal,  delivery.eta AS eta,  delivery.delFlag AS delFlag,  concat(customer.ComName, ' - ', customer.DAddress, ' - ', customer.phone) AS Destination";
$tdataDR_Printing[".sqlFrom"] = "FROM delivery  , orderentry  , customer  , product";
$tdataDR_Printing[".sqlWhereExpr"] = "(delivery.orderID =orderentry.OrderID) AND (delivery.prodID = product.ProdID) AND (delivery.delFlag = 'NO') AND (orderentry.CID =customer.CID)";
$tdataDR_Printing[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDR_Printing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDR_Printing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysDR_Printing = array();
$tableKeysDR_Printing[] = "ID";
$tdataDR_Printing[".Keys"] = $tableKeysDR_Printing;

$tdataDR_Printing[".listFields"] = array();
$tdataDR_Printing[".listFields"][] = "ID";
$tdataDR_Printing[".listFields"][] = "DrNo";
$tdataDR_Printing[".listFields"][] = "orderID";
$tdataDR_Printing[".listFields"][] = "prodID";
$tdataDR_Printing[".listFields"][] = "qty";
$tdataDR_Printing[".listFields"][] = "USP";
$tdataDR_Printing[".listFields"][] = "subtotal";
$tdataDR_Printing[".listFields"][] = "eta";
$tdataDR_Printing[".listFields"][] = "delFlag";
$tdataDR_Printing[".listFields"][] = "Destination";

$tdataDR_Printing[".viewFields"] = array();

$tdataDR_Printing[".addFields"] = array();
$tdataDR_Printing[".addFields"][] = "DrNo";
$tdataDR_Printing[".addFields"][] = "orderID";
$tdataDR_Printing[".addFields"][] = "prodID";
$tdataDR_Printing[".addFields"][] = "qty";
$tdataDR_Printing[".addFields"][] = "eta";
$tdataDR_Printing[".addFields"][] = "delFlag";

$tdataDR_Printing[".inlineAddFields"] = array();
$tdataDR_Printing[".inlineAddFields"][] = "DrNo";
$tdataDR_Printing[".inlineAddFields"][] = "orderID";
$tdataDR_Printing[".inlineAddFields"][] = "prodID";
$tdataDR_Printing[".inlineAddFields"][] = "qty";
$tdataDR_Printing[".inlineAddFields"][] = "USP";
$tdataDR_Printing[".inlineAddFields"][] = "subtotal";
$tdataDR_Printing[".inlineAddFields"][] = "eta";
$tdataDR_Printing[".inlineAddFields"][] = "delFlag";
$tdataDR_Printing[".inlineAddFields"][] = "Destination";

$tdataDR_Printing[".editFields"] = array();
$tdataDR_Printing[".editFields"][] = "qty";
$tdataDR_Printing[".editFields"][] = "delFlag";

$tdataDR_Printing[".inlineEditFields"] = array();
$tdataDR_Printing[".inlineEditFields"][] = "qty";
$tdataDR_Printing[".inlineEditFields"][] = "delFlag";

$tdataDR_Printing[".exportFields"] = array();

$tdataDR_Printing[".printFields"] = array();
$tdataDR_Printing[".printFields"][] = "prodID";
$tdataDR_Printing[".printFields"][] = "qty";
$tdataDR_Printing[".printFields"][] = "USP";
$tdataDR_Printing[".printFields"][] = "subtotal";

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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["ID"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["DrNo"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["orderID"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdataDR_Printing["prodID"] = $fdata;
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
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdataDR_Printing["qty"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdataDR_Printing["USP"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdataDR_Printing["subtotal"] = $fdata;
//	eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eta";
	$fdata["GoodName"] = "eta";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "ETA"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["eta"] = $fdata;
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
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["delFlag"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataDR_Printing["Destination"] = $fdata;

	
$tables_data["DR Printing"]=&$tdataDR_Printing;
$field_labels["DR_Printing"] = &$fieldLabelsDR_Printing;
$fieldToolTips["DR Printing"] = &$fieldToolTipsDR_Printing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DR Printing"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="packinglist";
	$detailsParam["dDataSourceTable"]="packinglist";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="packinglist";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["DR Printing"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["DR Printing"][$dIndex]["masterKeys"][]="ID";
		$detailsTablesData["DR Printing"][$dIndex]["masterKeys"][]="DrNo";
		$detailsTablesData["DR Printing"][$dIndex]["masterKeys"][]="orderID";
		$detailsTablesData["DR Printing"][$dIndex]["masterKeys"][]="eta";
		$detailsTablesData["DR Printing"][$dIndex]["detailKeys"][]="delID";
		$detailsTablesData["DR Printing"][$dIndex]["detailKeys"][]="delNo";
		$detailsTablesData["DR Printing"][$dIndex]["detailKeys"][]="orderNo";
		$detailsTablesData["DR Printing"][$dIndex]["detailKeys"][]="date";

	
// tables which are master tables for current table (detail)
$masterTablesData["DR Printing"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DR_Printing()
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
$proto45["m_columns"][] = "ID";
$proto45["m_columns"][] = "OrderID";
$proto45["m_columns"][] = "StaffID";
$proto45["m_columns"][] = "CID";
$proto45["m_columns"][] = "DelDate";
$proto45["m_columns"][] = "Note";
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
$proto53["m_columns"][] = "staffID";
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
$queryData_DR_Printing = createSqlQuery_DR_Printing();
										$tdataDR_Printing[".sqlquery"] = $queryData_DR_Printing;

include_once(getabspath("include/DR_Printing_events.php"));
$tableEvents["DR Printing"] = new eventclass_DR_Printing;
$tdataDR_Printing[".hasEvents"] = true;

$cipherer = new RunnerCipherer("DR Printing");

?>