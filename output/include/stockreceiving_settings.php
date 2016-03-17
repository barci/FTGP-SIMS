<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastockreceiving = array();
	$tdatastockreceiving[".NumberOfChars"] = 80; 
	$tdatastockreceiving[".ShortName"] = "stockreceiving";
	$tdatastockreceiving[".OwnerID"] = "";
	$tdatastockreceiving[".OriginalTable"] = "stockreceiving";

//	field labels
$fieldLabelsstockreceiving = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstockreceiving["English"] = array();
	$fieldToolTipsstockreceiving["English"] = array();
	$fieldLabelsstockreceiving["English"]["ID"] = "ID";
	$fieldToolTipsstockreceiving["English"]["ID"] = "";
	$fieldLabelsstockreceiving["English"]["RequestID"] = "Request ID";
	$fieldToolTipsstockreceiving["English"]["RequestID"] = "";
	$fieldLabelsstockreceiving["English"]["StaffID"] = "Staff";
	$fieldToolTipsstockreceiving["English"]["StaffID"] = "";
	$fieldLabelsstockreceiving["English"]["SupplierID"] = "Supplier";
	$fieldToolTipsstockreceiving["English"]["SupplierID"] = "";
	$fieldLabelsstockreceiving["English"]["ProductID"] = "Product";
	$fieldToolTipsstockreceiving["English"]["ProductID"] = "";
	$fieldLabelsstockreceiving["English"]["Qty"] = "Qty";
	$fieldToolTipsstockreceiving["English"]["Qty"] = "";
	$fieldLabelsstockreceiving["English"]["Notes"] = "Notes";
	$fieldToolTipsstockreceiving["English"]["Notes"] = "";
	$fieldLabelsstockreceiving["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsstockreceiving["English"]["TimeStamp"] = "";
	$fieldLabelsstockreceiving["English"]["ReceiveFlag"] = "Receive Flag";
	$fieldToolTipsstockreceiving["English"]["ReceiveFlag"] = "";
	if (count($fieldToolTipsstockreceiving["English"]))
		$tdatastockreceiving[".isUseToolTips"] = true;
}
	
	
	$tdatastockreceiving[".NCSearch"] = true;



$tdatastockreceiving[".shortTableName"] = "stockreceiving";
$tdatastockreceiving[".nSecOptions"] = 0;
$tdatastockreceiving[".recsPerRowList"] = 1;
$tdatastockreceiving[".mainTableOwnerID"] = "";
$tdatastockreceiving[".moveNext"] = 1;
$tdatastockreceiving[".nType"] = 0;

$tdatastockreceiving[".strOriginalTableName"] = "stockreceiving";




$tdatastockreceiving[".showAddInPopup"] = false;

$tdatastockreceiving[".showEditInPopup"] = false;

$tdatastockreceiving[".showViewInPopup"] = false;

$tdatastockreceiving[".fieldsForRegister"] = array();

$tdatastockreceiving[".listAjax"] = false;

	$tdatastockreceiving[".audit"] = false;

	$tdatastockreceiving[".locking"] = false;

$tdatastockreceiving[".listIcons"] = true;
$tdatastockreceiving[".edit"] = true;
$tdatastockreceiving[".inlineAdd"] = true;

$tdatastockreceiving[".exportTo"] = true;

$tdatastockreceiving[".printFriendly"] = true;


$tdatastockreceiving[".showSimpleSearchOptions"] = false;

$tdatastockreceiving[".showSearchPanel"] = true;

if (isMobile())
	$tdatastockreceiving[".isUseAjaxSuggest"] = false;
else 
	$tdatastockreceiving[".isUseAjaxSuggest"] = true;

$tdatastockreceiving[".rowHighlite"] = true;

// button handlers file names

$tdatastockreceiving[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastockreceiving[".isUseTimeForSearch"] = false;




$tdatastockreceiving[".allSearchFields"] = array();

$tdatastockreceiving[".allSearchFields"][] = "RequestID";
$tdatastockreceiving[".allSearchFields"][] = "StaffID";
$tdatastockreceiving[".allSearchFields"][] = "SupplierID";
$tdatastockreceiving[".allSearchFields"][] = "ProductID";
$tdatastockreceiving[".allSearchFields"][] = "Qty";
$tdatastockreceiving[".allSearchFields"][] = "Notes";
$tdatastockreceiving[".allSearchFields"][] = "TimeStamp";
$tdatastockreceiving[".allSearchFields"][] = "ReceiveFlag";

$tdatastockreceiving[".googleLikeFields"][] = "ID";
$tdatastockreceiving[".googleLikeFields"][] = "RequestID";
$tdatastockreceiving[".googleLikeFields"][] = "StaffID";
$tdatastockreceiving[".googleLikeFields"][] = "SupplierID";
$tdatastockreceiving[".googleLikeFields"][] = "ProductID";
$tdatastockreceiving[".googleLikeFields"][] = "Qty";
$tdatastockreceiving[".googleLikeFields"][] = "Notes";
$tdatastockreceiving[".googleLikeFields"][] = "TimeStamp";
$tdatastockreceiving[".googleLikeFields"][] = "ReceiveFlag";


$tdatastockreceiving[".advSearchFields"][] = "RequestID";
$tdatastockreceiving[".advSearchFields"][] = "StaffID";
$tdatastockreceiving[".advSearchFields"][] = "SupplierID";
$tdatastockreceiving[".advSearchFields"][] = "ProductID";
$tdatastockreceiving[".advSearchFields"][] = "Qty";
$tdatastockreceiving[".advSearchFields"][] = "Notes";
$tdatastockreceiving[".advSearchFields"][] = "TimeStamp";
$tdatastockreceiving[".advSearchFields"][] = "ReceiveFlag";

$tdatastockreceiving[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastockreceiving[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastockreceiving[".strOrderBy"] = $tstrOrderBy;

$tdatastockreceiving[".orderindexes"] = array();

$tdatastockreceiving[".sqlHead"] = "SELECT ID,  RequestID,  StaffID,  SupplierID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$tdatastockreceiving[".sqlFrom"] = "FROM stockrequest";
$tdatastockreceiving[".sqlWhereExpr"] = "ReceiveFlag = 'NO'";
$tdatastockreceiving[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastockreceiving[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastockreceiving[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstockreceiving = array();
$tableKeysstockreceiving[] = "ID";
$tdatastockreceiving[".Keys"] = $tableKeysstockreceiving;

$tdatastockreceiving[".listFields"] = array();
$tdatastockreceiving[".listFields"][] = "ID";
$tdatastockreceiving[".listFields"][] = "RequestID";
$tdatastockreceiving[".listFields"][] = "StaffID";
$tdatastockreceiving[".listFields"][] = "SupplierID";
$tdatastockreceiving[".listFields"][] = "ProductID";
$tdatastockreceiving[".listFields"][] = "Qty";
$tdatastockreceiving[".listFields"][] = "Notes";
$tdatastockreceiving[".listFields"][] = "ReceiveFlag";

$tdatastockreceiving[".viewFields"] = array();

$tdatastockreceiving[".addFields"] = array();
$tdatastockreceiving[".addFields"][] = "RequestID";
$tdatastockreceiving[".addFields"][] = "StaffID";
$tdatastockreceiving[".addFields"][] = "SupplierID";
$tdatastockreceiving[".addFields"][] = "ProductID";
$tdatastockreceiving[".addFields"][] = "Qty";
$tdatastockreceiving[".addFields"][] = "Notes";
$tdatastockreceiving[".addFields"][] = "ReceiveFlag";

$tdatastockreceiving[".inlineAddFields"] = array();
$tdatastockreceiving[".inlineAddFields"][] = "RequestID";
$tdatastockreceiving[".inlineAddFields"][] = "StaffID";
$tdatastockreceiving[".inlineAddFields"][] = "SupplierID";
$tdatastockreceiving[".inlineAddFields"][] = "ProductID";
$tdatastockreceiving[".inlineAddFields"][] = "Qty";
$tdatastockreceiving[".inlineAddFields"][] = "Notes";
$tdatastockreceiving[".inlineAddFields"][] = "ReceiveFlag";

$tdatastockreceiving[".editFields"] = array();
$tdatastockreceiving[".editFields"][] = "RequestID";
$tdatastockreceiving[".editFields"][] = "StaffID";
$tdatastockreceiving[".editFields"][] = "SupplierID";
$tdatastockreceiving[".editFields"][] = "ProductID";
$tdatastockreceiving[".editFields"][] = "Qty";
$tdatastockreceiving[".editFields"][] = "Notes";
$tdatastockreceiving[".editFields"][] = "ReceiveFlag";

$tdatastockreceiving[".inlineEditFields"] = array();

$tdatastockreceiving[".exportFields"] = array();

$tdatastockreceiving[".printFields"] = array();
$tdatastockreceiving[".printFields"][] = "ID";
$tdatastockreceiving[".printFields"][] = "RequestID";
$tdatastockreceiving[".printFields"][] = "StaffID";
$tdatastockreceiving[".printFields"][] = "SupplierID";
$tdatastockreceiving[".printFields"][] = "ProductID";
$tdatastockreceiving[".printFields"][] = "Qty";
$tdatastockreceiving[".printFields"][] = "Notes";
$tdatastockreceiving[".printFields"][] = "ReceiveFlag";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
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
	
		
		
	$tdatastockreceiving["ID"] = $fdata;
//	RequestID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RequestID";
	$fdata["GoodName"] = "RequestID";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Request ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "RequestID"; 
		$fdata["FullName"] = "RequestID";
	
		
		
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
	
		
		
	$tdatastockreceiving["RequestID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Staff"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "StaffID"; 
		$fdata["FullName"] = "StaffID";
	
		
		
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
	
		
		
	$tdatastockreceiving["StaffID"] = $fdata;
//	SupplierID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SupplierID";
	$fdata["GoodName"] = "SupplierID";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Supplier"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "SupplierID"; 
		$fdata["FullName"] = "SupplierID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "SupplierID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ComName";
	
		
	$edata["LookupTable"] = "supplier";
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
	
		
		
	$tdatastockreceiving["SupplierID"] = $fdata;
//	ProductID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ProductID";
	$fdata["GoodName"] = "ProductID";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Product"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
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
	
		
		
	$tdatastockreceiving["ProductID"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Qty"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Qty"; 
		$fdata["FullName"] = "Qty";
	
		
		
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
	
		
		
	$tdatastockreceiving["Qty"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Notes"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Notes"; 
		$fdata["FullName"] = "Notes";
	
		
		
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
	
	$edata = array("EditFormat" => "Text area");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;
	
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastockreceiving["Notes"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Time Stamp"; 
	$fdata["FieldType"] = 135;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "TimeStamp"; 
		$fdata["FullName"] = "`TimeStamp`";
	
		
		
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
	
		
		
	$tdatastockreceiving["TimeStamp"] = $fdata;
//	ReceiveFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ReceiveFlag";
	$fdata["GoodName"] = "ReceiveFlag";
	$fdata["ownerTable"] = "stockreceiving";
	$fdata["Label"] = "Receive Flag"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ReceiveFlag"; 
		$fdata["FullName"] = "ReceiveFlag";
	
		
		
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
	
		
		
	$tdatastockreceiving["ReceiveFlag"] = $fdata;

	
$tables_data["stockreceiving"]=&$tdatastockreceiving;
$field_labels["stockreceiving"] = &$fieldLabelsstockreceiving;
$fieldToolTips["stockreceiving"] = &$fieldToolTipsstockreceiving;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["stockreceiving"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["stockreceiving"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="product";
	$masterParams["mDataSourceTable"]="product";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "product";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["stockreceiving"][$mIndex] = $masterParams;	
		$masterTablesData["stockreceiving"][$mIndex]["masterKeys"][]="ProdID";
		$masterTablesData["stockreceiving"][$mIndex]["detailKeys"][]="ProductID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_stockreceiving()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  RequestID,  StaffID,  SupplierID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$proto0["m_strFrom"] = "FROM stockrequest";
$proto0["m_strWhere"] = "ReceiveFlag = 'NO'";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "ReceiveFlag = 'NO'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ReceiveFlag = 'NO'"
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
$obj = new SQLNonParsed(array(
	"m_sql" => "ID"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "RequestID"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "StaffID"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "SupplierID"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ProductID"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Qty"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Notes"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "`TimeStamp`"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ReceiveFlag"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "stockrequest";
$proto24["m_columns"] = array();
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
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_stockreceiving = createSqlQuery_stockreceiving();
									$tdatastockreceiving[".sqlquery"] = $queryData_stockreceiving;

include_once(getabspath("include/stockreceiving_events.php"));
$tableEvents["stockreceiving"] = new eventclass_stockreceiving;
$tdatastockreceiving[".hasEvents"] = true;

$cipherer = new RunnerCipherer("stockreceiving");

?>