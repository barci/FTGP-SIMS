<?php
require_once(getabspath("classes/cipherer.php"));
$tdataSales_Order = array();
	$tdataSales_Order[".NumberOfChars"] = 80; 
	$tdataSales_Order[".ShortName"] = "Sales_Order";
	$tdataSales_Order[".OwnerID"] = "";
	$tdataSales_Order[".OriginalTable"] = "orderdetail";

//	field labels
$fieldLabelsSales_Order = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSales_Order["English"] = array();
	$fieldToolTipsSales_Order["English"] = array();
	$fieldLabelsSales_Order["English"]["ODetailID"] = "ID";
	$fieldToolTipsSales_Order["English"]["ODetailID"] = "";
	$fieldLabelsSales_Order["English"]["OrderID"] = "Order ID";
	$fieldToolTipsSales_Order["English"]["OrderID"] = "";
	$fieldLabelsSales_Order["English"]["BillNo"] = "Bill No";
	$fieldToolTipsSales_Order["English"]["BillNo"] = "";
	$fieldLabelsSales_Order["English"]["ProductID"] = "Product";
	$fieldToolTipsSales_Order["English"]["ProductID"] = "";
	$fieldLabelsSales_Order["English"]["OrdQuant"] = "Order Quantity";
	$fieldToolTipsSales_Order["English"]["OrdQuant"] = "";
	$fieldLabelsSales_Order["English"]["DelQuant"] = "Delivered Quantity";
	$fieldToolTipsSales_Order["English"]["DelQuant"] = "";
	$fieldLabelsSales_Order["English"]["Total"] = "Total";
	$fieldToolTipsSales_Order["English"]["Total"] = "";
	$fieldLabelsSales_Order["English"]["DelDate"] = "Delivery Date";
	$fieldToolTipsSales_Order["English"]["DelDate"] = "";
	if (count($fieldToolTipsSales_Order["English"]))
		$tdataSales_Order[".isUseToolTips"] = true;
}
	
	
	$tdataSales_Order[".NCSearch"] = true;



$tdataSales_Order[".shortTableName"] = "Sales_Order";
$tdataSales_Order[".nSecOptions"] = 0;
$tdataSales_Order[".recsPerRowList"] = 1;
$tdataSales_Order[".mainTableOwnerID"] = "";
$tdataSales_Order[".moveNext"] = 1;
$tdataSales_Order[".nType"] = 1;

$tdataSales_Order[".strOriginalTableName"] = "orderdetail";




$tdataSales_Order[".showAddInPopup"] = false;

$tdataSales_Order[".showEditInPopup"] = false;

$tdataSales_Order[".showViewInPopup"] = false;

$tdataSales_Order[".fieldsForRegister"] = array();

$tdataSales_Order[".listAjax"] = false;

	$tdataSales_Order[".audit"] = false;

	$tdataSales_Order[".locking"] = false;

$tdataSales_Order[".listIcons"] = true;
$tdataSales_Order[".edit"] = true;
$tdataSales_Order[".inlineEdit"] = true;
$tdataSales_Order[".inlineAdd"] = true;


$tdataSales_Order[".printFriendly"] = true;


$tdataSales_Order[".showSimpleSearchOptions"] = false;

$tdataSales_Order[".showSearchPanel"] = true;

if (isMobile())
	$tdataSales_Order[".isUseAjaxSuggest"] = false;
else 
	$tdataSales_Order[".isUseAjaxSuggest"] = true;

$tdataSales_Order[".rowHighlite"] = true;

// button handlers file names

$tdataSales_Order[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSales_Order[".isUseTimeForSearch"] = false;




$tdataSales_Order[".allSearchFields"] = array();

$tdataSales_Order[".allSearchFields"][] = "ODetailID";
$tdataSales_Order[".allSearchFields"][] = "OrderID";
$tdataSales_Order[".allSearchFields"][] = "ProductID";
$tdataSales_Order[".allSearchFields"][] = "OrdQuant";
$tdataSales_Order[".allSearchFields"][] = "DelQuant";
$tdataSales_Order[".allSearchFields"][] = "Total";
$tdataSales_Order[".allSearchFields"][] = "DelDate";
$tdataSales_Order[".allSearchFields"][] = "BillNo";

$tdataSales_Order[".googleLikeFields"][] = "ODetailID";
$tdataSales_Order[".googleLikeFields"][] = "OrderID";
$tdataSales_Order[".googleLikeFields"][] = "BillNo";
$tdataSales_Order[".googleLikeFields"][] = "ProductID";
$tdataSales_Order[".googleLikeFields"][] = "OrdQuant";
$tdataSales_Order[".googleLikeFields"][] = "DelQuant";
$tdataSales_Order[".googleLikeFields"][] = "Total";
$tdataSales_Order[".googleLikeFields"][] = "DelDate";


$tdataSales_Order[".advSearchFields"][] = "ODetailID";
$tdataSales_Order[".advSearchFields"][] = "OrderID";
$tdataSales_Order[".advSearchFields"][] = "ProductID";
$tdataSales_Order[".advSearchFields"][] = "OrdQuant";
$tdataSales_Order[".advSearchFields"][] = "DelQuant";
$tdataSales_Order[".advSearchFields"][] = "Total";
$tdataSales_Order[".advSearchFields"][] = "DelDate";
$tdataSales_Order[".advSearchFields"][] = "BillNo";

$tdataSales_Order[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataSales_Order[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSales_Order[".strOrderBy"] = $tstrOrderBy;

$tdataSales_Order[".orderindexes"] = array();

$tdataSales_Order[".sqlHead"] = "SELECT ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate";
$tdataSales_Order[".sqlFrom"] = "FROM orderdetail";
$tdataSales_Order[".sqlWhereExpr"] = "OrdQuant > DelQuant";
$tdataSales_Order[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSales_Order[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSales_Order[".arrGroupsPerPage"] = $arrGPP;

$tableKeysSales_Order = array();
$tableKeysSales_Order[] = "ODetailID";
$tdataSales_Order[".Keys"] = $tableKeysSales_Order;

$tdataSales_Order[".listFields"] = array();
$tdataSales_Order[".listFields"][] = "ODetailID";
$tdataSales_Order[".listFields"][] = "OrderID";
$tdataSales_Order[".listFields"][] = "ProductID";
$tdataSales_Order[".listFields"][] = "OrdQuant";
$tdataSales_Order[".listFields"][] = "DelQuant";
$tdataSales_Order[".listFields"][] = "Total";
$tdataSales_Order[".listFields"][] = "DelDate";
$tdataSales_Order[".listFields"][] = "BillNo";

$tdataSales_Order[".viewFields"] = array();

$tdataSales_Order[".addFields"] = array();
$tdataSales_Order[".addFields"][] = "OrderID";
$tdataSales_Order[".addFields"][] = "ProductID";
$tdataSales_Order[".addFields"][] = "OrdQuant";
$tdataSales_Order[".addFields"][] = "DelDate";

$tdataSales_Order[".inlineAddFields"] = array();
$tdataSales_Order[".inlineAddFields"][] = "OrderID";
$tdataSales_Order[".inlineAddFields"][] = "ProductID";
$tdataSales_Order[".inlineAddFields"][] = "OrdQuant";
$tdataSales_Order[".inlineAddFields"][] = "DelDate";

$tdataSales_Order[".editFields"] = array();
$tdataSales_Order[".editFields"][] = "OrderID";
$tdataSales_Order[".editFields"][] = "ProductID";
$tdataSales_Order[".editFields"][] = "OrdQuant";
$tdataSales_Order[".editFields"][] = "DelDate";

$tdataSales_Order[".inlineEditFields"] = array();
$tdataSales_Order[".inlineEditFields"][] = "OrderID";
$tdataSales_Order[".inlineEditFields"][] = "ProductID";
$tdataSales_Order[".inlineEditFields"][] = "OrdQuant";
$tdataSales_Order[".inlineEditFields"][] = "DelDate";

$tdataSales_Order[".exportFields"] = array();

$tdataSales_Order[".printFields"] = array();
$tdataSales_Order[".printFields"][] = "ODetailID";
$tdataSales_Order[".printFields"][] = "OrderID";
$tdataSales_Order[".printFields"][] = "ProductID";
$tdataSales_Order[".printFields"][] = "OrdQuant";
$tdataSales_Order[".printFields"][] = "DelQuant";
$tdataSales_Order[".printFields"][] = "Total";
$tdataSales_Order[".printFields"][] = "DelDate";
$tdataSales_Order[".printFields"][] = "BillNo";

//	ODetailID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ODetailID";
	$fdata["GoodName"] = "ODetailID";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ODetailID"; 
		$fdata["FullName"] = "ODetailID";
	
		
		
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
	
		
		
	$tdataSales_Order["ODetailID"] = $fdata;
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Order ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "OrderID"; 
		$fdata["FullName"] = "OrderID";
	
		
		
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
	
		
		
	$tdataSales_Order["OrderID"] = $fdata;
//	BillNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BillNo";
	$fdata["GoodName"] = "BillNo";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Bill No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "BillNo"; 
		$fdata["FullName"] = "BillNo";
	
		
		
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
	
		
		
	$tdataSales_Order["BillNo"] = $fdata;
//	ProductID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProductID";
	$fdata["GoodName"] = "ProductID";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Product"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ProductID"; 
		$fdata["FullName"] = "ProductID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "prodid";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "longname";
	
		
	$edata["LookupTable"] = "Product Listing";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataSales_Order["ProductID"] = $fdata;
//	OrdQuant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "OrdQuant";
	$fdata["GoodName"] = "OrdQuant";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Order Quantity"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "OrdQuant"; 
		$fdata["FullName"] = "OrdQuant";
	
		
		
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
	
		
		
	$tdataSales_Order["OrdQuant"] = $fdata;
//	DelQuant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DelQuant";
	$fdata["GoodName"] = "DelQuant";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Delivered Quantity"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "DelQuant"; 
		$fdata["FullName"] = "DelQuant";
	
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataSales_Order["DelQuant"] = $fdata;
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Total"; 
	$fdata["FieldType"] = 14;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Total"; 
		$fdata["FullName"] = "Total";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
			
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
						
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataSales_Order["Total"] = $fdata;
//	DelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DelDate";
	$fdata["GoodName"] = "DelDate";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Delivery Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "DelDate"; 
		$fdata["FullName"] = "DelDate";
	
		
		
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
	
		
		
	$tdataSales_Order["DelDate"] = $fdata;

	
$tables_data["Sales Order"]=&$tdataSales_Order;
$field_labels["Sales_Order"] = &$fieldLabelsSales_Order;
$fieldToolTips["Sales Order"] = &$fieldToolTipsSales_Order;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Sales Order"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Sales Order"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Sales_Order()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate";
$proto0["m_strFrom"] = "FROM orderdetail";
$proto0["m_strWhere"] = "OrdQuant > DelQuant";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "OrdQuant > DelQuant";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "OrdQuant",
	"m_strTable" => "orderdetail"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "> DelQuant";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "0";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "ODetailID",
	"m_strTable" => "orderdetail"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "orderdetail"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "BillNo",
	"m_strTable" => "orderdetail"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductID",
	"m_strTable" => "orderdetail"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "OrdQuant",
	"m_strTable" => "orderdetail"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "DelQuant",
	"m_strTable" => "orderdetail"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Total",
	"m_strTable" => "orderdetail"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "DelDate",
	"m_strTable" => "orderdetail"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "orderdetail";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ODetailID";
$proto22["m_columns"][] = "OrderID";
$proto22["m_columns"][] = "BillNo";
$proto22["m_columns"][] = "ProductID";
$proto22["m_columns"][] = "UPrice";
$proto22["m_columns"][] = "OrdQuant";
$proto22["m_columns"][] = "DelQuant";
$proto22["m_columns"][] = "Discount";
$proto22["m_columns"][] = "Total";
$proto22["m_columns"][] = "DelDate";
$proto22["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_alias"] = "";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = "0";
$proto23["m_inBrackets"] = "0";
$proto23["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Sales_Order = createSqlQuery_Sales_Order();
								$tdataSales_Order[".sqlquery"] = $queryData_Sales_Order;

$tableEvents["Sales Order"] = new eventsBase;
$tdataSales_Order[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Sales Order");

?>