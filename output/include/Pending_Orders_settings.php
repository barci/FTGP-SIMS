<?php
require_once(getabspath("classes/cipherer.php"));
$tdataPending_Orders = array();
	$tdataPending_Orders[".NumberOfChars"] = 80; 
	$tdataPending_Orders[".ShortName"] = "Pending_Orders";
	$tdataPending_Orders[".OwnerID"] = "";
	$tdataPending_Orders[".OriginalTable"] = "orderdetail";

//	field labels
$fieldLabelsPending_Orders = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPending_Orders["English"] = array();
	$fieldToolTipsPending_Orders["English"] = array();
	$fieldLabelsPending_Orders["English"]["ODetailID"] = "ID";
	$fieldToolTipsPending_Orders["English"]["ODetailID"] = "";
	$fieldLabelsPending_Orders["English"]["OrderID"] = "Order ID";
	$fieldToolTipsPending_Orders["English"]["OrderID"] = "";
	$fieldLabelsPending_Orders["English"]["BillNo"] = "Bill No";
	$fieldToolTipsPending_Orders["English"]["BillNo"] = "";
	$fieldLabelsPending_Orders["English"]["ProductID"] = "Product";
	$fieldToolTipsPending_Orders["English"]["ProductID"] = "";
	$fieldLabelsPending_Orders["English"]["OrdQuant"] = "Order Quantity";
	$fieldToolTipsPending_Orders["English"]["OrdQuant"] = "";
	$fieldLabelsPending_Orders["English"]["DelQuant"] = "Delivered Quantity";
	$fieldToolTipsPending_Orders["English"]["DelQuant"] = "";
	$fieldLabelsPending_Orders["English"]["Total"] = "Total";
	$fieldToolTipsPending_Orders["English"]["Total"] = "";
	$fieldLabelsPending_Orders["English"]["DelDate"] = "Delivery Date";
	$fieldToolTipsPending_Orders["English"]["DelDate"] = "";
	if (count($fieldToolTipsPending_Orders["English"]))
		$tdataPending_Orders[".isUseToolTips"] = true;
}
	
	
	$tdataPending_Orders[".NCSearch"] = true;



$tdataPending_Orders[".shortTableName"] = "Pending_Orders";
$tdataPending_Orders[".nSecOptions"] = 0;
$tdataPending_Orders[".recsPerRowList"] = 1;
$tdataPending_Orders[".mainTableOwnerID"] = "";
$tdataPending_Orders[".moveNext"] = 1;
$tdataPending_Orders[".nType"] = 1;

$tdataPending_Orders[".strOriginalTableName"] = "orderdetail";




$tdataPending_Orders[".showAddInPopup"] = false;

$tdataPending_Orders[".showEditInPopup"] = false;

$tdataPending_Orders[".showViewInPopup"] = false;

$tdataPending_Orders[".fieldsForRegister"] = array();

$tdataPending_Orders[".listAjax"] = false;

	$tdataPending_Orders[".audit"] = false;

	$tdataPending_Orders[".locking"] = false;

$tdataPending_Orders[".listIcons"] = true;


$tdataPending_Orders[".printFriendly"] = true;


$tdataPending_Orders[".showSimpleSearchOptions"] = false;

$tdataPending_Orders[".showSearchPanel"] = true;

if (isMobile())
	$tdataPending_Orders[".isUseAjaxSuggest"] = false;
else 
	$tdataPending_Orders[".isUseAjaxSuggest"] = true;

$tdataPending_Orders[".rowHighlite"] = true;

// button handlers file names

$tdataPending_Orders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPending_Orders[".isUseTimeForSearch"] = false;



$tdataPending_Orders[".useDetailsPreview"] = true;

$tdataPending_Orders[".allSearchFields"] = array();

$tdataPending_Orders[".allSearchFields"][] = "ODetailID";
$tdataPending_Orders[".allSearchFields"][] = "OrderID";
$tdataPending_Orders[".allSearchFields"][] = "ProductID";
$tdataPending_Orders[".allSearchFields"][] = "OrdQuant";
$tdataPending_Orders[".allSearchFields"][] = "DelQuant";
$tdataPending_Orders[".allSearchFields"][] = "Total";
$tdataPending_Orders[".allSearchFields"][] = "DelDate";
$tdataPending_Orders[".allSearchFields"][] = "BillNo";

$tdataPending_Orders[".googleLikeFields"][] = "ODetailID";
$tdataPending_Orders[".googleLikeFields"][] = "OrderID";
$tdataPending_Orders[".googleLikeFields"][] = "BillNo";
$tdataPending_Orders[".googleLikeFields"][] = "ProductID";
$tdataPending_Orders[".googleLikeFields"][] = "OrdQuant";
$tdataPending_Orders[".googleLikeFields"][] = "DelQuant";
$tdataPending_Orders[".googleLikeFields"][] = "Total";
$tdataPending_Orders[".googleLikeFields"][] = "DelDate";


$tdataPending_Orders[".advSearchFields"][] = "ODetailID";
$tdataPending_Orders[".advSearchFields"][] = "OrderID";
$tdataPending_Orders[".advSearchFields"][] = "ProductID";
$tdataPending_Orders[".advSearchFields"][] = "OrdQuant";
$tdataPending_Orders[".advSearchFields"][] = "DelQuant";
$tdataPending_Orders[".advSearchFields"][] = "Total";
$tdataPending_Orders[".advSearchFields"][] = "DelDate";
$tdataPending_Orders[".advSearchFields"][] = "BillNo";

$tdataPending_Orders[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataPending_Orders[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPending_Orders[".strOrderBy"] = $tstrOrderBy;

$tdataPending_Orders[".orderindexes"] = array();

$tdataPending_Orders[".sqlHead"] = "SELECT ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate";
$tdataPending_Orders[".sqlFrom"] = "FROM orderdetail";
$tdataPending_Orders[".sqlWhereExpr"] = "OrdQuant > DelQuant";
$tdataPending_Orders[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPending_Orders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPending_Orders[".arrGroupsPerPage"] = $arrGPP;

$tableKeysPending_Orders = array();
$tableKeysPending_Orders[] = "ODetailID";
$tdataPending_Orders[".Keys"] = $tableKeysPending_Orders;

$tdataPending_Orders[".listFields"] = array();
$tdataPending_Orders[".listFields"][] = "ODetailID";
$tdataPending_Orders[".listFields"][] = "OrderID";
$tdataPending_Orders[".listFields"][] = "ProductID";
$tdataPending_Orders[".listFields"][] = "OrdQuant";
$tdataPending_Orders[".listFields"][] = "DelQuant";
$tdataPending_Orders[".listFields"][] = "Total";
$tdataPending_Orders[".listFields"][] = "DelDate";
$tdataPending_Orders[".listFields"][] = "BillNo";

$tdataPending_Orders[".viewFields"] = array();

$tdataPending_Orders[".addFields"] = array();
$tdataPending_Orders[".addFields"][] = "OrderID";
$tdataPending_Orders[".addFields"][] = "ProductID";
$tdataPending_Orders[".addFields"][] = "OrdQuant";
$tdataPending_Orders[".addFields"][] = "DelDate";

$tdataPending_Orders[".inlineAddFields"] = array();
$tdataPending_Orders[".inlineAddFields"][] = "OrderID";
$tdataPending_Orders[".inlineAddFields"][] = "ProductID";
$tdataPending_Orders[".inlineAddFields"][] = "OrdQuant";
$tdataPending_Orders[".inlineAddFields"][] = "DelDate";

$tdataPending_Orders[".editFields"] = array();
$tdataPending_Orders[".editFields"][] = "OrderID";
$tdataPending_Orders[".editFields"][] = "ProductID";
$tdataPending_Orders[".editFields"][] = "OrdQuant";
$tdataPending_Orders[".editFields"][] = "DelDate";

$tdataPending_Orders[".inlineEditFields"] = array();
$tdataPending_Orders[".inlineEditFields"][] = "OrderID";
$tdataPending_Orders[".inlineEditFields"][] = "ProductID";
$tdataPending_Orders[".inlineEditFields"][] = "OrdQuant";
$tdataPending_Orders[".inlineEditFields"][] = "DelDate";

$tdataPending_Orders[".exportFields"] = array();

$tdataPending_Orders[".printFields"] = array();
$tdataPending_Orders[".printFields"][] = "ODetailID";
$tdataPending_Orders[".printFields"][] = "OrderID";
$tdataPending_Orders[".printFields"][] = "ProductID";
$tdataPending_Orders[".printFields"][] = "OrdQuant";
$tdataPending_Orders[".printFields"][] = "DelQuant";
$tdataPending_Orders[".printFields"][] = "Total";
$tdataPending_Orders[".printFields"][] = "DelDate";
$tdataPending_Orders[".printFields"][] = "BillNo";

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
	
		
		
	$tdataPending_Orders["ODetailID"] = $fdata;
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
	
		
		
	$tdataPending_Orders["OrderID"] = $fdata;
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
	
		
		
	$tdataPending_Orders["BillNo"] = $fdata;
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
	
		
		
	$tdataPending_Orders["ProductID"] = $fdata;
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
	
		
		
	$tdataPending_Orders["OrdQuant"] = $fdata;
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
	
		
		
	$tdataPending_Orders["DelQuant"] = $fdata;
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
	
		
		
	$tdataPending_Orders["Total"] = $fdata;
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
	
		
		
	$tdataPending_Orders["DelDate"] = $fdata;

	
$tables_data["Pending Orders"]=&$tdataPending_Orders;
$field_labels["Pending_Orders"] = &$fieldLabelsPending_Orders;
$fieldToolTips["Pending Orders"] = &$fieldToolTipsPending_Orders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Pending Orders"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="delivery";
	$detailsParam["dDataSourceTable"]="delivery";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="delivery";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["Pending Orders"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Pending Orders"][$dIndex]["masterKeys"][]="ProductID";
		$detailsTablesData["Pending Orders"][$dIndex]["masterKeys"][]="OrderID";
		$detailsTablesData["Pending Orders"][$dIndex]["detailKeys"][]="prodID";
		$detailsTablesData["Pending Orders"][$dIndex]["detailKeys"][]="orderID";

	
// tables which are master tables for current table (detail)
$masterTablesData["Pending Orders"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Pending_Orders()
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
$queryData_Pending_Orders = createSqlQuery_Pending_Orders();
								$tdataPending_Orders[".sqlquery"] = $queryData_Pending_Orders;

$tableEvents["Pending Orders"] = new eventsBase;
$tdataPending_Orders[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Pending Orders");

?>