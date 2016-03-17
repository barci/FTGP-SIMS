<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastockreturn = array();
	$tdatastockreturn[".NumberOfChars"] = 80; 
	$tdatastockreturn[".ShortName"] = "stockreturn";
	$tdatastockreturn[".OwnerID"] = "";
	$tdatastockreturn[".OriginalTable"] = "stockreturn";

//	field labels
$fieldLabelsstockreturn = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstockreturn["English"] = array();
	$fieldToolTipsstockreturn["English"] = array();
	$fieldLabelsstockreturn["English"]["ID"] = "ID";
	$fieldToolTipsstockreturn["English"]["ID"] = "";
	$fieldLabelsstockreturn["English"]["customerID"] = "Customer ID";
	$fieldToolTipsstockreturn["English"]["customerID"] = "";
	$fieldLabelsstockreturn["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsstockreturn["English"]["StaffID"] = "";
	$fieldLabelsstockreturn["English"]["ProductID"] = "Product ID";
	$fieldToolTipsstockreturn["English"]["ProductID"] = "";
	$fieldLabelsstockreturn["English"]["Qty"] = "Qty";
	$fieldToolTipsstockreturn["English"]["Qty"] = "";
	$fieldLabelsstockreturn["English"]["Notes"] = "Notes";
	$fieldToolTipsstockreturn["English"]["Notes"] = "";
	$fieldLabelsstockreturn["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsstockreturn["English"]["TimeStamp"] = "";
	$fieldLabelsstockreturn["English"]["ReceiveFlag"] = "Receive Flag";
	$fieldToolTipsstockreturn["English"]["ReceiveFlag"] = "";
	if (count($fieldToolTipsstockreturn["English"]))
		$tdatastockreturn[".isUseToolTips"] = true;
}
	
	
	$tdatastockreturn[".NCSearch"] = true;



$tdatastockreturn[".shortTableName"] = "stockreturn";
$tdatastockreturn[".nSecOptions"] = 0;
$tdatastockreturn[".recsPerRowList"] = 1;
$tdatastockreturn[".mainTableOwnerID"] = "";
$tdatastockreturn[".moveNext"] = 1;
$tdatastockreturn[".nType"] = 0;

$tdatastockreturn[".strOriginalTableName"] = "stockreturn";




$tdatastockreturn[".showAddInPopup"] = false;

$tdatastockreturn[".showEditInPopup"] = false;

$tdatastockreturn[".showViewInPopup"] = false;

$tdatastockreturn[".fieldsForRegister"] = array();

$tdatastockreturn[".listAjax"] = false;

	$tdatastockreturn[".audit"] = false;

	$tdatastockreturn[".locking"] = false;

$tdatastockreturn[".listIcons"] = true;
$tdatastockreturn[".edit"] = true;
$tdatastockreturn[".inlineEdit"] = true;
$tdatastockreturn[".inlineAdd"] = true;
$tdatastockreturn[".view"] = true;

$tdatastockreturn[".exportTo"] = true;

$tdatastockreturn[".printFriendly"] = true;

$tdatastockreturn[".delete"] = true;

$tdatastockreturn[".showSimpleSearchOptions"] = false;

$tdatastockreturn[".showSearchPanel"] = true;

if (isMobile())
	$tdatastockreturn[".isUseAjaxSuggest"] = false;
else 
	$tdatastockreturn[".isUseAjaxSuggest"] = true;

$tdatastockreturn[".rowHighlite"] = true;

// button handlers file names

$tdatastockreturn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastockreturn[".isUseTimeForSearch"] = false;




$tdatastockreturn[".allSearchFields"] = array();

$tdatastockreturn[".allSearchFields"][] = "ID";
$tdatastockreturn[".allSearchFields"][] = "customerID";
$tdatastockreturn[".allSearchFields"][] = "StaffID";
$tdatastockreturn[".allSearchFields"][] = "ProductID";
$tdatastockreturn[".allSearchFields"][] = "Qty";
$tdatastockreturn[".allSearchFields"][] = "Notes";
$tdatastockreturn[".allSearchFields"][] = "TimeStamp";
$tdatastockreturn[".allSearchFields"][] = "ReceiveFlag";

$tdatastockreturn[".googleLikeFields"][] = "ID";
$tdatastockreturn[".googleLikeFields"][] = "customerID";
$tdatastockreturn[".googleLikeFields"][] = "StaffID";
$tdatastockreturn[".googleLikeFields"][] = "ProductID";
$tdatastockreturn[".googleLikeFields"][] = "Qty";
$tdatastockreturn[".googleLikeFields"][] = "Notes";
$tdatastockreturn[".googleLikeFields"][] = "TimeStamp";
$tdatastockreturn[".googleLikeFields"][] = "ReceiveFlag";


$tdatastockreturn[".advSearchFields"][] = "ID";
$tdatastockreturn[".advSearchFields"][] = "customerID";
$tdatastockreturn[".advSearchFields"][] = "StaffID";
$tdatastockreturn[".advSearchFields"][] = "ProductID";
$tdatastockreturn[".advSearchFields"][] = "Qty";
$tdatastockreturn[".advSearchFields"][] = "Notes";
$tdatastockreturn[".advSearchFields"][] = "TimeStamp";
$tdatastockreturn[".advSearchFields"][] = "ReceiveFlag";

$tdatastockreturn[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastockreturn[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastockreturn[".strOrderBy"] = $tstrOrderBy;

$tdatastockreturn[".orderindexes"] = array();

$tdatastockreturn[".sqlHead"] = "SELECT ID,   customerID,   StaffID,   ProductID,   Qty,   Notes,   `TimeStamp`,   ReceiveFlag";
$tdatastockreturn[".sqlFrom"] = "FROM stockreturn";
$tdatastockreturn[".sqlWhereExpr"] = "";
$tdatastockreturn[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastockreturn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastockreturn[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstockreturn = array();
$tableKeysstockreturn[] = "ID";
$tdatastockreturn[".Keys"] = $tableKeysstockreturn;

$tdatastockreturn[".listFields"] = array();
$tdatastockreturn[".listFields"][] = "ID";
$tdatastockreturn[".listFields"][] = "customerID";
$tdatastockreturn[".listFields"][] = "StaffID";
$tdatastockreturn[".listFields"][] = "ProductID";
$tdatastockreturn[".listFields"][] = "Qty";
$tdatastockreturn[".listFields"][] = "Notes";
$tdatastockreturn[".listFields"][] = "TimeStamp";
$tdatastockreturn[".listFields"][] = "ReceiveFlag";

$tdatastockreturn[".viewFields"] = array();
$tdatastockreturn[".viewFields"][] = "ID";
$tdatastockreturn[".viewFields"][] = "customerID";
$tdatastockreturn[".viewFields"][] = "StaffID";
$tdatastockreturn[".viewFields"][] = "ProductID";
$tdatastockreturn[".viewFields"][] = "Qty";
$tdatastockreturn[".viewFields"][] = "Notes";
$tdatastockreturn[".viewFields"][] = "TimeStamp";
$tdatastockreturn[".viewFields"][] = "ReceiveFlag";

$tdatastockreturn[".addFields"] = array();
$tdatastockreturn[".addFields"][] = "customerID";
$tdatastockreturn[".addFields"][] = "StaffID";
$tdatastockreturn[".addFields"][] = "ProductID";
$tdatastockreturn[".addFields"][] = "Qty";
$tdatastockreturn[".addFields"][] = "Notes";
$tdatastockreturn[".addFields"][] = "TimeStamp";
$tdatastockreturn[".addFields"][] = "ReceiveFlag";

$tdatastockreturn[".inlineAddFields"] = array();
$tdatastockreturn[".inlineAddFields"][] = "customerID";
$tdatastockreturn[".inlineAddFields"][] = "StaffID";
$tdatastockreturn[".inlineAddFields"][] = "ProductID";
$tdatastockreturn[".inlineAddFields"][] = "Qty";
$tdatastockreturn[".inlineAddFields"][] = "Notes";
$tdatastockreturn[".inlineAddFields"][] = "TimeStamp";
$tdatastockreturn[".inlineAddFields"][] = "ReceiveFlag";

$tdatastockreturn[".editFields"] = array();
$tdatastockreturn[".editFields"][] = "customerID";
$tdatastockreturn[".editFields"][] = "StaffID";
$tdatastockreturn[".editFields"][] = "ProductID";
$tdatastockreturn[".editFields"][] = "Qty";
$tdatastockreturn[".editFields"][] = "Notes";
$tdatastockreturn[".editFields"][] = "TimeStamp";
$tdatastockreturn[".editFields"][] = "ReceiveFlag";

$tdatastockreturn[".inlineEditFields"] = array();
$tdatastockreturn[".inlineEditFields"][] = "customerID";
$tdatastockreturn[".inlineEditFields"][] = "StaffID";
$tdatastockreturn[".inlineEditFields"][] = "ProductID";
$tdatastockreturn[".inlineEditFields"][] = "Qty";
$tdatastockreturn[".inlineEditFields"][] = "Notes";
$tdatastockreturn[".inlineEditFields"][] = "TimeStamp";
$tdatastockreturn[".inlineEditFields"][] = "ReceiveFlag";

$tdatastockreturn[".exportFields"] = array();
$tdatastockreturn[".exportFields"][] = "ID";
$tdatastockreturn[".exportFields"][] = "customerID";
$tdatastockreturn[".exportFields"][] = "StaffID";
$tdatastockreturn[".exportFields"][] = "ProductID";
$tdatastockreturn[".exportFields"][] = "Qty";
$tdatastockreturn[".exportFields"][] = "Notes";
$tdatastockreturn[".exportFields"][] = "TimeStamp";
$tdatastockreturn[".exportFields"][] = "ReceiveFlag";

$tdatastockreturn[".printFields"] = array();
$tdatastockreturn[".printFields"][] = "ID";
$tdatastockreturn[".printFields"][] = "customerID";
$tdatastockreturn[".printFields"][] = "StaffID";
$tdatastockreturn[".printFields"][] = "ProductID";
$tdatastockreturn[".printFields"][] = "Qty";
$tdatastockreturn[".printFields"][] = "Notes";
$tdatastockreturn[".printFields"][] = "TimeStamp";
$tdatastockreturn[".printFields"][] = "ReceiveFlag";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatastockreturn["ID"] = $fdata;
//	customerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "customerID";
	$fdata["GoodName"] = "customerID";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "Customer ID"; 
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
	
		$fdata["strField"] = "customerID"; 
		$fdata["FullName"] = "customerID";
	
		
		
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
	
		
		
	$tdatastockreturn["customerID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "stockreturn";
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
	
		
		
	$tdatastockreturn["StaffID"] = $fdata;
//	ProductID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProductID";
	$fdata["GoodName"] = "ProductID";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "Product ID"; 
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
	
		
		
	$tdatastockreturn["ProductID"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "Qty"; 
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
	
		
		
	$tdatastockreturn["Qty"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "Notes"; 
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastockreturn["Notes"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "stockreturn";
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
	
		
		
	$tdatastockreturn["TimeStamp"] = $fdata;
//	ReceiveFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ReceiveFlag";
	$fdata["GoodName"] = "ReceiveFlag";
	$fdata["ownerTable"] = "stockreturn";
	$fdata["Label"] = "Receive Flag"; 
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
	
	$edata = array("EditFormat" => "Text field");
	
		
		
	
//	Begin Lookup settings
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=3";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastockreturn["ReceiveFlag"] = $fdata;

	
$tables_data["stockreturn"]=&$tdatastockreturn;
$field_labels["stockreturn"] = &$fieldLabelsstockreturn;
$fieldToolTips["stockreturn"] = &$fieldToolTipsstockreturn;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["stockreturn"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["stockreturn"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_stockreturn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   customerID,   StaffID,   ProductID,   Qty,   Notes,   `TimeStamp`,   ReceiveFlag";
$proto0["m_strFrom"] = "FROM stockreturn";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strName" => "ID",
	"m_strTable" => "stockreturn"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "customerID",
	"m_strTable" => "stockreturn"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "stockreturn"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductID",
	"m_strTable" => "stockreturn"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "stockreturn"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "stockreturn"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeStamp",
	"m_strTable" => "stockreturn"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ReceiveFlag",
	"m_strTable" => "stockreturn"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "stockreturn";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "customerID";
$proto22["m_columns"][] = "StaffID";
$proto22["m_columns"][] = "ProductID";
$proto22["m_columns"][] = "Qty";
$proto22["m_columns"][] = "Notes";
$proto22["m_columns"][] = "TimeStamp";
$proto22["m_columns"][] = "ReceiveFlag";
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
$queryData_stockreturn = createSqlQuery_stockreturn();
								$tdatastockreturn[".sqlquery"] = $queryData_stockreturn;

$tableEvents["stockreturn"] = new eventsBase;
$tdatastockreturn[".hasEvents"] = false;

$cipherer = new RunnerCipherer("stockreturn");

?>