<?php
require_once(getabspath("classes/cipherer.php"));
$tdataorderdetail = array();
	$tdataorderdetail[".NumberOfChars"] = 80; 
	$tdataorderdetail[".ShortName"] = "orderdetail";
	$tdataorderdetail[".OwnerID"] = "";
	$tdataorderdetail[".OriginalTable"] = "orderdetail";

//	field labels
$fieldLabelsorderdetail = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorderdetail["English"] = array();
	$fieldToolTipsorderdetail["English"] = array();
	$fieldLabelsorderdetail["English"]["ODetailID"] = "ID";
	$fieldToolTipsorderdetail["English"]["ODetailID"] = "";
	$fieldLabelsorderdetail["English"]["OrderID"] = "Order ID";
	$fieldToolTipsorderdetail["English"]["OrderID"] = "";
	$fieldLabelsorderdetail["English"]["BillNo"] = "Bill No";
	$fieldToolTipsorderdetail["English"]["BillNo"] = "";
	$fieldLabelsorderdetail["English"]["ProductID"] = "Product";
	$fieldToolTipsorderdetail["English"]["ProductID"] = "";
	$fieldLabelsorderdetail["English"]["OrdQuant"] = "Order Quantity";
	$fieldToolTipsorderdetail["English"]["OrdQuant"] = "";
	$fieldLabelsorderdetail["English"]["DelQuant"] = "Delivered Quantity";
	$fieldToolTipsorderdetail["English"]["DelQuant"] = "";
	$fieldLabelsorderdetail["English"]["Total"] = "Total";
	$fieldToolTipsorderdetail["English"]["Total"] = "";
	$fieldLabelsorderdetail["English"]["DelDate"] = "Delivery Date";
	$fieldToolTipsorderdetail["English"]["DelDate"] = "";
	$fieldLabelsorderdetail["English"]["staffID"] = "Staff ID";
	$fieldToolTipsorderdetail["English"]["staffID"] = "";
	$fieldLabelsorderdetail["English"]["DrNo"] = "Dr No";
	$fieldToolTipsorderdetail["English"]["DrNo"] = "";
	if (count($fieldToolTipsorderdetail["English"]))
		$tdataorderdetail[".isUseToolTips"] = true;
}
	
	
	$tdataorderdetail[".NCSearch"] = true;



$tdataorderdetail[".shortTableName"] = "orderdetail";
$tdataorderdetail[".nSecOptions"] = 0;
$tdataorderdetail[".recsPerRowList"] = 1;
$tdataorderdetail[".mainTableOwnerID"] = "";
$tdataorderdetail[".moveNext"] = 1;
$tdataorderdetail[".nType"] = 0;

$tdataorderdetail[".strOriginalTableName"] = "orderdetail";




$tdataorderdetail[".showAddInPopup"] = false;

$tdataorderdetail[".showEditInPopup"] = false;

$tdataorderdetail[".showViewInPopup"] = false;

$tdataorderdetail[".fieldsForRegister"] = array();

$tdataorderdetail[".listAjax"] = false;

	$tdataorderdetail[".audit"] = false;

	$tdataorderdetail[".locking"] = false;

$tdataorderdetail[".listIcons"] = true;
$tdataorderdetail[".edit"] = true;
$tdataorderdetail[".inlineEdit"] = true;
$tdataorderdetail[".inlineAdd"] = true;




$tdataorderdetail[".showSimpleSearchOptions"] = false;

$tdataorderdetail[".showSearchPanel"] = true;

if (isMobile())
	$tdataorderdetail[".isUseAjaxSuggest"] = false;
else 
	$tdataorderdetail[".isUseAjaxSuggest"] = true;

$tdataorderdetail[".rowHighlite"] = true;

// button handlers file names

$tdataorderdetail[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorderdetail[".isUseTimeForSearch"] = false;




$tdataorderdetail[".allSearchFields"] = array();

$tdataorderdetail[".allSearchFields"][] = "ODetailID";
$tdataorderdetail[".allSearchFields"][] = "OrderID";
$tdataorderdetail[".allSearchFields"][] = "ProductID";
$tdataorderdetail[".allSearchFields"][] = "OrdQuant";
$tdataorderdetail[".allSearchFields"][] = "DelQuant";
$tdataorderdetail[".allSearchFields"][] = "DelDate";
$tdataorderdetail[".allSearchFields"][] = "staffID";

$tdataorderdetail[".googleLikeFields"][] = "ODetailID";
$tdataorderdetail[".googleLikeFields"][] = "OrderID";
$tdataorderdetail[".googleLikeFields"][] = "BillNo";
$tdataorderdetail[".googleLikeFields"][] = "ProductID";
$tdataorderdetail[".googleLikeFields"][] = "OrdQuant";
$tdataorderdetail[".googleLikeFields"][] = "DelQuant";
$tdataorderdetail[".googleLikeFields"][] = "Total";
$tdataorderdetail[".googleLikeFields"][] = "DelDate";
$tdataorderdetail[".googleLikeFields"][] = "staffID";


$tdataorderdetail[".advSearchFields"][] = "ODetailID";
$tdataorderdetail[".advSearchFields"][] = "OrderID";
$tdataorderdetail[".advSearchFields"][] = "ProductID";
$tdataorderdetail[".advSearchFields"][] = "OrdQuant";
$tdataorderdetail[".advSearchFields"][] = "DelQuant";
$tdataorderdetail[".advSearchFields"][] = "DelDate";
$tdataorderdetail[".advSearchFields"][] = "staffID";

$tdataorderdetail[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataorderdetail[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DelDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorderdetail[".strOrderBy"] = $tstrOrderBy;

$tdataorderdetail[".orderindexes"] = array();
$tdataorderdetail[".orderindexes"][] = array(8, (0 ? "ASC" : "DESC"), "DelDate");

$tdataorderdetail[".sqlHead"] = "SELECT ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate,  staffID";
$tdataorderdetail[".sqlFrom"] = "FROM orderdetail";
$tdataorderdetail[".sqlWhereExpr"] = "";
$tdataorderdetail[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorderdetail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorderdetail[".arrGroupsPerPage"] = $arrGPP;

$tableKeysorderdetail = array();
$tableKeysorderdetail[] = "ODetailID";
$tdataorderdetail[".Keys"] = $tableKeysorderdetail;

$tdataorderdetail[".listFields"] = array();
$tdataorderdetail[".listFields"][] = "ODetailID";
$tdataorderdetail[".listFields"][] = "OrderID";
$tdataorderdetail[".listFields"][] = "ProductID";
$tdataorderdetail[".listFields"][] = "OrdQuant";
$tdataorderdetail[".listFields"][] = "DelQuant";
$tdataorderdetail[".listFields"][] = "DelDate";
$tdataorderdetail[".listFields"][] = "staffID";
$tdataorderdetail[".listFields"][] = "BillNo";

$tdataorderdetail[".viewFields"] = array();

$tdataorderdetail[".addFields"] = array();
$tdataorderdetail[".addFields"][] = "OrderID";
$tdataorderdetail[".addFields"][] = "ProductID";
$tdataorderdetail[".addFields"][] = "OrdQuant";
$tdataorderdetail[".addFields"][] = "DelDate";
$tdataorderdetail[".addFields"][] = "staffID";

$tdataorderdetail[".inlineAddFields"] = array();
$tdataorderdetail[".inlineAddFields"][] = "OrderID";
$tdataorderdetail[".inlineAddFields"][] = "ProductID";
$tdataorderdetail[".inlineAddFields"][] = "OrdQuant";
$tdataorderdetail[".inlineAddFields"][] = "DelDate";
$tdataorderdetail[".inlineAddFields"][] = "staffID";

$tdataorderdetail[".editFields"] = array();
$tdataorderdetail[".editFields"][] = "OrderID";
$tdataorderdetail[".editFields"][] = "ProductID";
$tdataorderdetail[".editFields"][] = "OrdQuant";

$tdataorderdetail[".inlineEditFields"] = array();
$tdataorderdetail[".inlineEditFields"][] = "OrderID";
$tdataorderdetail[".inlineEditFields"][] = "ProductID";
$tdataorderdetail[".inlineEditFields"][] = "OrdQuant";

$tdataorderdetail[".exportFields"] = array();

$tdataorderdetail[".printFields"] = array();

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
	
		
		
	$tdataorderdetail["ODetailID"] = $fdata;
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
	
		
		
	$tdataorderdetail["OrderID"] = $fdata;
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
	
		
		
	$tdataorderdetail["BillNo"] = $fdata;
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
	
		
		
		$fdata["strField"] = "ProductID"; 
		$fdata["FullName"] = "ProductID";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataorderdetail["ProductID"] = $fdata;
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
	
		
		
	$tdataorderdetail["OrdQuant"] = $fdata;
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
	
		
		
	$tdataorderdetail["DelQuant"] = $fdata;
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Total"; 
	$fdata["FieldType"] = 14;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Total"; 
		$fdata["FullName"] = "Total";
	
		
		
				
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
	
		
		
	$tdataorderdetail["Total"] = $fdata;
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
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DelDate"; 
		$fdata["FullName"] = "DelDate";
	
		
		
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
	
		
		
	$tdataorderdetail["DelDate"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "orderdetail";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "staffID"; 
		$fdata["FullName"] = "staffID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "StaffID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff";
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
	
		
		
	$tdataorderdetail["staffID"] = $fdata;

	
$tables_data["orderdetail"]=&$tdataorderdetail;
$field_labels["orderdetail"] = &$fieldLabelsorderdetail;
$fieldToolTips["orderdetail"] = &$fieldToolTipsorderdetail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["orderdetail"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["orderdetail"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="orderentry";
	$masterParams["mDataSourceTable"]="orderentry";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "orderentry";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["orderdetail"][$mIndex] = $masterParams;	
		$masterTablesData["orderdetail"][$mIndex]["masterKeys"][]="OrderID";
		$masterTablesData["orderdetail"][$mIndex]["masterKeys"][]="DelDate";
		$masterTablesData["orderdetail"][$mIndex]["detailKeys"][]="OrderID";
		$masterTablesData["orderdetail"][$mIndex]["detailKeys"][]="DelDate";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_orderdetail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ODetailID,  OrderID,  BillNo,  ProductID,  OrdQuant,  DelQuant,  Total,  DelDate,  staffID";
$proto0["m_strFrom"] = "FROM orderdetail";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY DelDate DESC";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
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
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "orderdetail"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "orderdetail";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "ODetailID";
$proto24["m_columns"][] = "OrderID";
$proto24["m_columns"][] = "BillNo";
$proto24["m_columns"][] = "ProductID";
$proto24["m_columns"][] = "UPrice";
$proto24["m_columns"][] = "OrdQuant";
$proto24["m_columns"][] = "DelQuant";
$proto24["m_columns"][] = "Discount";
$proto24["m_columns"][] = "Total";
$proto24["m_columns"][] = "DelDate";
$proto24["m_columns"][] = "TimeStamp";
$proto24["m_columns"][] = "staffID";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_alias"] = "";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = "0";
$proto25["m_inBrackets"] = "0";
$proto25["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "DelDate",
	"m_strTable" => "orderdetail"
));

$proto27["m_column"]=$obj;
$proto27["m_bAsc"] = 0;
$proto27["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto27);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_orderdetail = createSqlQuery_orderdetail();
									$tdataorderdetail[".sqlquery"] = $queryData_orderdetail;

$tableEvents["orderdetail"] = new eventsBase;
$tdataorderdetail[".hasEvents"] = false;

$cipherer = new RunnerCipherer("orderdetail");

?>