<?php
require_once(getabspath("classes/cipherer.php"));
$tdataStocks_Received = array();
	$tdataStocks_Received[".NumberOfChars"] = 80; 
	$tdataStocks_Received[".ShortName"] = "Stocks_Received";
	$tdataStocks_Received[".OwnerID"] = "";
	$tdataStocks_Received[".OriginalTable"] = "stockrequest";

//	field labels
$fieldLabelsStocks_Received = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsStocks_Received["English"] = array();
	$fieldToolTipsStocks_Received["English"] = array();
	$fieldLabelsStocks_Received["English"]["ID"] = "ID";
	$fieldToolTipsStocks_Received["English"]["ID"] = "";
	$fieldLabelsStocks_Received["English"]["RequestID"] = "Request ID";
	$fieldToolTipsStocks_Received["English"]["RequestID"] = "";
	$fieldLabelsStocks_Received["English"]["StaffID"] = "Staff";
	$fieldToolTipsStocks_Received["English"]["StaffID"] = "";
	$fieldLabelsStocks_Received["English"]["ProductID"] = "Product";
	$fieldToolTipsStocks_Received["English"]["ProductID"] = "";
	$fieldLabelsStocks_Received["English"]["Qty"] = "Qty";
	$fieldToolTipsStocks_Received["English"]["Qty"] = "";
	$fieldLabelsStocks_Received["English"]["Notes"] = "Notes";
	$fieldToolTipsStocks_Received["English"]["Notes"] = "";
	$fieldLabelsStocks_Received["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsStocks_Received["English"]["TimeStamp"] = "";
	$fieldLabelsStocks_Received["English"]["ReceiveFlag"] = "Receive Flag";
	$fieldToolTipsStocks_Received["English"]["ReceiveFlag"] = "";
	if (count($fieldToolTipsStocks_Received["English"]))
		$tdataStocks_Received[".isUseToolTips"] = true;
}
	
	
	$tdataStocks_Received[".NCSearch"] = true;



$tdataStocks_Received[".shortTableName"] = "Stocks_Received";
$tdataStocks_Received[".nSecOptions"] = 0;
$tdataStocks_Received[".recsPerRowList"] = 1;
$tdataStocks_Received[".mainTableOwnerID"] = "";
$tdataStocks_Received[".moveNext"] = 1;
$tdataStocks_Received[".nType"] = 1;

$tdataStocks_Received[".strOriginalTableName"] = "stockrequest";




$tdataStocks_Received[".showAddInPopup"] = false;

$tdataStocks_Received[".showEditInPopup"] = false;

$tdataStocks_Received[".showViewInPopup"] = false;

$tdataStocks_Received[".fieldsForRegister"] = array();

$tdataStocks_Received[".listAjax"] = false;

	$tdataStocks_Received[".audit"] = false;

	$tdataStocks_Received[".locking"] = false;

$tdataStocks_Received[".listIcons"] = true;




$tdataStocks_Received[".showSimpleSearchOptions"] = false;

$tdataStocks_Received[".showSearchPanel"] = true;

if (isMobile())
	$tdataStocks_Received[".isUseAjaxSuggest"] = false;
else 
	$tdataStocks_Received[".isUseAjaxSuggest"] = true;

$tdataStocks_Received[".rowHighlite"] = true;

// button handlers file names

$tdataStocks_Received[".addPageEvents"] = false;

// use timepicker for search panel
$tdataStocks_Received[".isUseTimeForSearch"] = false;




$tdataStocks_Received[".allSearchFields"] = array();

$tdataStocks_Received[".allSearchFields"][] = "RequestID";
$tdataStocks_Received[".allSearchFields"][] = "StaffID";
$tdataStocks_Received[".allSearchFields"][] = "ProductID";
$tdataStocks_Received[".allSearchFields"][] = "Qty";
$tdataStocks_Received[".allSearchFields"][] = "Notes";
$tdataStocks_Received[".allSearchFields"][] = "TimeStamp";
$tdataStocks_Received[".allSearchFields"][] = "ReceiveFlag";

$tdataStocks_Received[".googleLikeFields"][] = "ID";
$tdataStocks_Received[".googleLikeFields"][] = "RequestID";
$tdataStocks_Received[".googleLikeFields"][] = "StaffID";
$tdataStocks_Received[".googleLikeFields"][] = "ProductID";
$tdataStocks_Received[".googleLikeFields"][] = "Qty";
$tdataStocks_Received[".googleLikeFields"][] = "Notes";
$tdataStocks_Received[".googleLikeFields"][] = "TimeStamp";
$tdataStocks_Received[".googleLikeFields"][] = "ReceiveFlag";


$tdataStocks_Received[".advSearchFields"][] = "RequestID";
$tdataStocks_Received[".advSearchFields"][] = "StaffID";
$tdataStocks_Received[".advSearchFields"][] = "ProductID";
$tdataStocks_Received[".advSearchFields"][] = "Qty";
$tdataStocks_Received[".advSearchFields"][] = "Notes";
$tdataStocks_Received[".advSearchFields"][] = "TimeStamp";
$tdataStocks_Received[".advSearchFields"][] = "ReceiveFlag";

$tdataStocks_Received[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataStocks_Received[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataStocks_Received[".strOrderBy"] = $tstrOrderBy;

$tdataStocks_Received[".orderindexes"] = array();

$tdataStocks_Received[".sqlHead"] = "SELECT ID,  requestID,  StaffID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$tdataStocks_Received[".sqlFrom"] = "FROM stockrequest";
$tdataStocks_Received[".sqlWhereExpr"] = "(ReceiveFlag = 'YES')";
$tdataStocks_Received[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataStocks_Received[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataStocks_Received[".arrGroupsPerPage"] = $arrGPP;

$tableKeysStocks_Received = array();
$tableKeysStocks_Received[] = "ID";
$tdataStocks_Received[".Keys"] = $tableKeysStocks_Received;

$tdataStocks_Received[".listFields"] = array();
$tdataStocks_Received[".listFields"][] = "ID";
$tdataStocks_Received[".listFields"][] = "RequestID";
$tdataStocks_Received[".listFields"][] = "StaffID";
$tdataStocks_Received[".listFields"][] = "ProductID";
$tdataStocks_Received[".listFields"][] = "Qty";
$tdataStocks_Received[".listFields"][] = "Notes";
$tdataStocks_Received[".listFields"][] = "ReceiveFlag";

$tdataStocks_Received[".viewFields"] = array();

$tdataStocks_Received[".addFields"] = array();
$tdataStocks_Received[".addFields"][] = "RequestID";
$tdataStocks_Received[".addFields"][] = "StaffID";
$tdataStocks_Received[".addFields"][] = "ProductID";
$tdataStocks_Received[".addFields"][] = "Qty";
$tdataStocks_Received[".addFields"][] = "Notes";
$tdataStocks_Received[".addFields"][] = "ReceiveFlag";

$tdataStocks_Received[".inlineAddFields"] = array();
$tdataStocks_Received[".inlineAddFields"][] = "RequestID";
$tdataStocks_Received[".inlineAddFields"][] = "StaffID";
$tdataStocks_Received[".inlineAddFields"][] = "ProductID";
$tdataStocks_Received[".inlineAddFields"][] = "Qty";
$tdataStocks_Received[".inlineAddFields"][] = "Notes";
$tdataStocks_Received[".inlineAddFields"][] = "ReceiveFlag";

$tdataStocks_Received[".editFields"] = array();
$tdataStocks_Received[".editFields"][] = "RequestID";
$tdataStocks_Received[".editFields"][] = "StaffID";
$tdataStocks_Received[".editFields"][] = "ProductID";
$tdataStocks_Received[".editFields"][] = "Qty";
$tdataStocks_Received[".editFields"][] = "Notes";
$tdataStocks_Received[".editFields"][] = "ReceiveFlag";

$tdataStocks_Received[".inlineEditFields"] = array();

$tdataStocks_Received[".exportFields"] = array();

$tdataStocks_Received[".printFields"] = array();
$tdataStocks_Received[".printFields"][] = "ID";
$tdataStocks_Received[".printFields"][] = "RequestID";
$tdataStocks_Received[".printFields"][] = "StaffID";
$tdataStocks_Received[".printFields"][] = "ProductID";
$tdataStocks_Received[".printFields"][] = "Qty";
$tdataStocks_Received[".printFields"][] = "Notes";
$tdataStocks_Received[".printFields"][] = "ReceiveFlag";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["ID"] = $fdata;
//	RequestID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RequestID";
	$fdata["GoodName"] = "RequestID";
	$fdata["ownerTable"] = "stockrequest";
	$fdata["Label"] = "Request ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "requestID"; 
		$fdata["FullName"] = "requestID";
	
		
		
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
	
		
		
	$tdataStocks_Received["RequestID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["StaffID"] = $fdata;
//	ProductID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProductID";
	$fdata["GoodName"] = "ProductID";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["ProductID"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["Qty"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["Notes"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["TimeStamp"] = $fdata;
//	ReceiveFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ReceiveFlag";
	$fdata["GoodName"] = "ReceiveFlag";
	$fdata["ownerTable"] = "stockrequest";
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
	
		
		
	$tdataStocks_Received["ReceiveFlag"] = $fdata;

	
$tables_data["Stocks Received"]=&$tdataStocks_Received;
$field_labels["Stocks_Received"] = &$fieldLabelsStocks_Received;
$fieldToolTips["Stocks Received"] = &$fieldToolTipsStocks_Received;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Stocks Received"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Stocks Received"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Stocks_Received()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  requestID,  StaffID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$proto0["m_strFrom"] = "FROM stockrequest";
$proto0["m_strWhere"] = "(ReceiveFlag = 'YES')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "ReceiveFlag = 'YES'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ReceiveFlag",
	"m_strTable" => "stockrequest"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= 'YES'";
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
	"m_strTable" => "stockrequest"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "requestID",
	"m_strTable" => "stockrequest"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "stockrequest"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductID",
	"m_strTable" => "stockrequest"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "stockrequest"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Notes",
	"m_strTable" => "stockrequest"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeStamp",
	"m_strTable" => "stockrequest"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "ReceiveFlag",
	"m_strTable" => "stockrequest"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "stockrequest";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "requestID";
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
$queryData_Stocks_Received = createSqlQuery_Stocks_Received();
								$tdataStocks_Received[".sqlquery"] = $queryData_Stocks_Received;

include_once(getabspath("include/Stocks_Received_events.php"));
$tableEvents["Stocks Received"] = new eventclass_Stocks_Received;
$tdataStocks_Received[".hasEvents"] = true;

$cipherer = new RunnerCipherer("Stocks Received");

?>