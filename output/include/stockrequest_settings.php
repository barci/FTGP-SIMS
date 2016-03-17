<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastockrequest = array();
	$tdatastockrequest[".NumberOfChars"] = 80; 
	$tdatastockrequest[".ShortName"] = "stockrequest";
	$tdatastockrequest[".OwnerID"] = "";
	$tdatastockrequest[".OriginalTable"] = "stockrequest";

//	field labels
$fieldLabelsstockrequest = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstockrequest["English"] = array();
	$fieldToolTipsstockrequest["English"] = array();
	$fieldLabelsstockrequest["English"]["ID"] = "ID";
	$fieldToolTipsstockrequest["English"]["ID"] = "";
	$fieldLabelsstockrequest["English"]["RequestID"] = "Request ID";
	$fieldToolTipsstockrequest["English"]["RequestID"] = "";
	$fieldLabelsstockrequest["English"]["StaffID"] = "Staff";
	$fieldToolTipsstockrequest["English"]["StaffID"] = "";
	$fieldLabelsstockrequest["English"]["ProductID"] = "Product";
	$fieldToolTipsstockrequest["English"]["ProductID"] = "";
	$fieldLabelsstockrequest["English"]["Qty"] = "Qty";
	$fieldToolTipsstockrequest["English"]["Qty"] = "";
	$fieldLabelsstockrequest["English"]["Notes"] = "Notes";
	$fieldToolTipsstockrequest["English"]["Notes"] = "";
	$fieldLabelsstockrequest["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsstockrequest["English"]["TimeStamp"] = "";
	$fieldLabelsstockrequest["English"]["ReceiveFlag"] = "Receive Flag";
	$fieldToolTipsstockrequest["English"]["ReceiveFlag"] = "";
	if (count($fieldToolTipsstockrequest["English"]))
		$tdatastockrequest[".isUseToolTips"] = true;
}
	
	
	$tdatastockrequest[".NCSearch"] = true;



$tdatastockrequest[".shortTableName"] = "stockrequest";
$tdatastockrequest[".nSecOptions"] = 0;
$tdatastockrequest[".recsPerRowList"] = 1;
$tdatastockrequest[".mainTableOwnerID"] = "";
$tdatastockrequest[".moveNext"] = 1;
$tdatastockrequest[".nType"] = 0;

$tdatastockrequest[".strOriginalTableName"] = "stockrequest";




$tdatastockrequest[".showAddInPopup"] = false;

$tdatastockrequest[".showEditInPopup"] = false;

$tdatastockrequest[".showViewInPopup"] = false;

$tdatastockrequest[".fieldsForRegister"] = array();

$tdatastockrequest[".listAjax"] = false;

	$tdatastockrequest[".audit"] = false;

	$tdatastockrequest[".locking"] = false;

$tdatastockrequest[".listIcons"] = true;
$tdatastockrequest[".edit"] = true;
$tdatastockrequest[".inlineAdd"] = true;

$tdatastockrequest[".exportTo"] = true;

$tdatastockrequest[".printFriendly"] = true;


$tdatastockrequest[".showSimpleSearchOptions"] = false;

$tdatastockrequest[".showSearchPanel"] = true;

if (isMobile())
	$tdatastockrequest[".isUseAjaxSuggest"] = false;
else 
	$tdatastockrequest[".isUseAjaxSuggest"] = true;

$tdatastockrequest[".rowHighlite"] = true;

// button handlers file names

$tdatastockrequest[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastockrequest[".isUseTimeForSearch"] = false;




$tdatastockrequest[".allSearchFields"] = array();

$tdatastockrequest[".allSearchFields"][] = "RequestID";
$tdatastockrequest[".allSearchFields"][] = "StaffID";
$tdatastockrequest[".allSearchFields"][] = "ProductID";
$tdatastockrequest[".allSearchFields"][] = "Qty";
$tdatastockrequest[".allSearchFields"][] = "Notes";
$tdatastockrequest[".allSearchFields"][] = "TimeStamp";
$tdatastockrequest[".allSearchFields"][] = "ReceiveFlag";

$tdatastockrequest[".googleLikeFields"][] = "ID";
$tdatastockrequest[".googleLikeFields"][] = "RequestID";
$tdatastockrequest[".googleLikeFields"][] = "StaffID";
$tdatastockrequest[".googleLikeFields"][] = "ProductID";
$tdatastockrequest[".googleLikeFields"][] = "Qty";
$tdatastockrequest[".googleLikeFields"][] = "Notes";
$tdatastockrequest[".googleLikeFields"][] = "TimeStamp";
$tdatastockrequest[".googleLikeFields"][] = "ReceiveFlag";


$tdatastockrequest[".advSearchFields"][] = "RequestID";
$tdatastockrequest[".advSearchFields"][] = "StaffID";
$tdatastockrequest[".advSearchFields"][] = "ProductID";
$tdatastockrequest[".advSearchFields"][] = "Qty";
$tdatastockrequest[".advSearchFields"][] = "Notes";
$tdatastockrequest[".advSearchFields"][] = "TimeStamp";
$tdatastockrequest[".advSearchFields"][] = "ReceiveFlag";

$tdatastockrequest[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastockrequest[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastockrequest[".strOrderBy"] = $tstrOrderBy;

$tdatastockrequest[".orderindexes"] = array();

$tdatastockrequest[".sqlHead"] = "SELECT ID,  requestID,  StaffID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$tdatastockrequest[".sqlFrom"] = "FROM stockrequest";
$tdatastockrequest[".sqlWhereExpr"] = "(ReceiveFlag = 'NO')";
$tdatastockrequest[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastockrequest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastockrequest[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstockrequest = array();
$tableKeysstockrequest[] = "ID";
$tdatastockrequest[".Keys"] = $tableKeysstockrequest;

$tdatastockrequest[".listFields"] = array();
$tdatastockrequest[".listFields"][] = "ID";
$tdatastockrequest[".listFields"][] = "RequestID";
$tdatastockrequest[".listFields"][] = "StaffID";
$tdatastockrequest[".listFields"][] = "ProductID";
$tdatastockrequest[".listFields"][] = "Qty";
$tdatastockrequest[".listFields"][] = "Notes";
$tdatastockrequest[".listFields"][] = "ReceiveFlag";

$tdatastockrequest[".viewFields"] = array();

$tdatastockrequest[".addFields"] = array();
$tdatastockrequest[".addFields"][] = "RequestID";
$tdatastockrequest[".addFields"][] = "StaffID";
$tdatastockrequest[".addFields"][] = "ProductID";
$tdatastockrequest[".addFields"][] = "Qty";
$tdatastockrequest[".addFields"][] = "Notes";
$tdatastockrequest[".addFields"][] = "ReceiveFlag";

$tdatastockrequest[".inlineAddFields"] = array();
$tdatastockrequest[".inlineAddFields"][] = "RequestID";
$tdatastockrequest[".inlineAddFields"][] = "StaffID";
$tdatastockrequest[".inlineAddFields"][] = "ProductID";
$tdatastockrequest[".inlineAddFields"][] = "Qty";
$tdatastockrequest[".inlineAddFields"][] = "Notes";
$tdatastockrequest[".inlineAddFields"][] = "ReceiveFlag";

$tdatastockrequest[".editFields"] = array();
$tdatastockrequest[".editFields"][] = "RequestID";
$tdatastockrequest[".editFields"][] = "StaffID";
$tdatastockrequest[".editFields"][] = "ProductID";
$tdatastockrequest[".editFields"][] = "Qty";
$tdatastockrequest[".editFields"][] = "Notes";
$tdatastockrequest[".editFields"][] = "ReceiveFlag";

$tdatastockrequest[".inlineEditFields"] = array();

$tdatastockrequest[".exportFields"] = array();

$tdatastockrequest[".printFields"] = array();
$tdatastockrequest[".printFields"][] = "ID";
$tdatastockrequest[".printFields"][] = "RequestID";
$tdatastockrequest[".printFields"][] = "StaffID";
$tdatastockrequest[".printFields"][] = "ProductID";
$tdatastockrequest[".printFields"][] = "Qty";
$tdatastockrequest[".printFields"][] = "Notes";
$tdatastockrequest[".printFields"][] = "ReceiveFlag";

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
	
		
		
	$tdatastockrequest["ID"] = $fdata;
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
	
		
		
	$tdatastockrequest["RequestID"] = $fdata;
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
	
		
		
	$tdatastockrequest["StaffID"] = $fdata;
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
	
		
		
	$tdatastockrequest["ProductID"] = $fdata;
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
	
		
		
	$tdatastockrequest["Qty"] = $fdata;
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
	
		
		
	$tdatastockrequest["Notes"] = $fdata;
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
	
		
		
	$tdatastockrequest["TimeStamp"] = $fdata;
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
	
		
		
	$tdatastockrequest["ReceiveFlag"] = $fdata;

	
$tables_data["stockrequest"]=&$tdatastockrequest;
$field_labels["stockrequest"] = &$fieldLabelsstockrequest;
$fieldToolTips["stockrequest"] = &$fieldToolTipsstockrequest;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["stockrequest"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["stockrequest"] = array();

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
	$masterTablesData["stockrequest"][$mIndex] = $masterParams;	
		$masterTablesData["stockrequest"][$mIndex]["masterKeys"][]="ProdID";
		$masterTablesData["stockrequest"][$mIndex]["detailKeys"][]="ProductID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_stockrequest()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  requestID,  StaffID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$proto0["m_strFrom"] = "FROM stockrequest";
$proto0["m_strWhere"] = "(ReceiveFlag = 'NO')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "ReceiveFlag = 'NO'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ReceiveFlag",
	"m_strTable" => "stockrequest"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "= 'NO'";
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
$queryData_stockrequest = createSqlQuery_stockrequest();
								$tdatastockrequest[".sqlquery"] = $queryData_stockrequest;

include_once(getabspath("include/stockrequest_events.php"));
$tableEvents["stockrequest"] = new eventclass_stockrequest;
$tdatastockrequest[".hasEvents"] = true;

$cipherer = new RunnerCipherer("stockrequest");

?>