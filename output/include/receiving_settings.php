<?php
require_once(getabspath("classes/cipherer.php"));
$tdatareceiving = array();
	$tdatareceiving[".NumberOfChars"] = 80; 
	$tdatareceiving[".ShortName"] = "receiving";
	$tdatareceiving[".OwnerID"] = "";
	$tdatareceiving[".OriginalTable"] = "receiving";

//	field labels
$fieldLabelsreceiving = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreceiving["English"] = array();
	$fieldToolTipsreceiving["English"] = array();
	$fieldLabelsreceiving["English"]["ID"] = "ID";
	$fieldToolTipsreceiving["English"]["ID"] = "";
	$fieldLabelsreceiving["English"]["RequestID"] = "Request ID";
	$fieldToolTipsreceiving["English"]["RequestID"] = "";
	$fieldLabelsreceiving["English"]["StaffID"] = "Staff";
	$fieldToolTipsreceiving["English"]["StaffID"] = "";
	$fieldLabelsreceiving["English"]["ProductID"] = "Product";
	$fieldToolTipsreceiving["English"]["ProductID"] = "";
	$fieldLabelsreceiving["English"]["Qty"] = "Qty";
	$fieldToolTipsreceiving["English"]["Qty"] = "";
	$fieldLabelsreceiving["English"]["Notes"] = "Notes";
	$fieldToolTipsreceiving["English"]["Notes"] = "";
	$fieldLabelsreceiving["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsreceiving["English"]["TimeStamp"] = "";
	$fieldLabelsreceiving["English"]["ReceiveFlag"] = "Receive Flag";
	$fieldToolTipsreceiving["English"]["ReceiveFlag"] = "";
	if (count($fieldToolTipsreceiving["English"]))
		$tdatareceiving[".isUseToolTips"] = true;
}
	
	
	$tdatareceiving[".NCSearch"] = true;



$tdatareceiving[".shortTableName"] = "receiving";
$tdatareceiving[".nSecOptions"] = 0;
$tdatareceiving[".recsPerRowList"] = 1;
$tdatareceiving[".mainTableOwnerID"] = "";
$tdatareceiving[".moveNext"] = 1;
$tdatareceiving[".nType"] = 0;

$tdatareceiving[".strOriginalTableName"] = "receiving";




$tdatareceiving[".showAddInPopup"] = false;

$tdatareceiving[".showEditInPopup"] = false;

$tdatareceiving[".showViewInPopup"] = false;

$tdatareceiving[".fieldsForRegister"] = array();

$tdatareceiving[".listAjax"] = false;

	$tdatareceiving[".audit"] = false;

	$tdatareceiving[".locking"] = false;

$tdatareceiving[".listIcons"] = true;
$tdatareceiving[".edit"] = true;
$tdatareceiving[".inlineAdd"] = true;

$tdatareceiving[".exportTo"] = true;

$tdatareceiving[".printFriendly"] = true;


$tdatareceiving[".showSimpleSearchOptions"] = false;

$tdatareceiving[".showSearchPanel"] = true;

if (isMobile())
	$tdatareceiving[".isUseAjaxSuggest"] = false;
else 
	$tdatareceiving[".isUseAjaxSuggest"] = true;

$tdatareceiving[".rowHighlite"] = true;

// button handlers file names

$tdatareceiving[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareceiving[".isUseTimeForSearch"] = false;




$tdatareceiving[".allSearchFields"] = array();

$tdatareceiving[".allSearchFields"][] = "RequestID";
$tdatareceiving[".allSearchFields"][] = "StaffID";
$tdatareceiving[".allSearchFields"][] = "ProductID";
$tdatareceiving[".allSearchFields"][] = "Qty";
$tdatareceiving[".allSearchFields"][] = "Notes";
$tdatareceiving[".allSearchFields"][] = "TimeStamp";
$tdatareceiving[".allSearchFields"][] = "ReceiveFlag";

$tdatareceiving[".googleLikeFields"][] = "ID";
$tdatareceiving[".googleLikeFields"][] = "RequestID";
$tdatareceiving[".googleLikeFields"][] = "StaffID";
$tdatareceiving[".googleLikeFields"][] = "ProductID";
$tdatareceiving[".googleLikeFields"][] = "Qty";
$tdatareceiving[".googleLikeFields"][] = "Notes";
$tdatareceiving[".googleLikeFields"][] = "TimeStamp";
$tdatareceiving[".googleLikeFields"][] = "ReceiveFlag";


$tdatareceiving[".advSearchFields"][] = "RequestID";
$tdatareceiving[".advSearchFields"][] = "StaffID";
$tdatareceiving[".advSearchFields"][] = "ProductID";
$tdatareceiving[".advSearchFields"][] = "Qty";
$tdatareceiving[".advSearchFields"][] = "Notes";
$tdatareceiving[".advSearchFields"][] = "TimeStamp";
$tdatareceiving[".advSearchFields"][] = "ReceiveFlag";

$tdatareceiving[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatareceiving[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatareceiving[".strOrderBy"] = $tstrOrderBy;

$tdatareceiving[".orderindexes"] = array();

$tdatareceiving[".sqlHead"] = "SELECT ID,  requestID,  StaffID,  ProductID,  Qty,  Notes,  `TimeStamp`,  ReceiveFlag";
$tdatareceiving[".sqlFrom"] = "FROM stockrequest";
$tdatareceiving[".sqlWhereExpr"] = "(ReceiveFlag = 'NO')";
$tdatareceiving[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareceiving[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareceiving[".arrGroupsPerPage"] = $arrGPP;

$tableKeysreceiving = array();
$tableKeysreceiving[] = "ID";
$tdatareceiving[".Keys"] = $tableKeysreceiving;

$tdatareceiving[".listFields"] = array();
$tdatareceiving[".listFields"][] = "ID";
$tdatareceiving[".listFields"][] = "RequestID";
$tdatareceiving[".listFields"][] = "StaffID";
$tdatareceiving[".listFields"][] = "ProductID";
$tdatareceiving[".listFields"][] = "Qty";
$tdatareceiving[".listFields"][] = "Notes";
$tdatareceiving[".listFields"][] = "ReceiveFlag";

$tdatareceiving[".viewFields"] = array();

$tdatareceiving[".addFields"] = array();
$tdatareceiving[".addFields"][] = "RequestID";
$tdatareceiving[".addFields"][] = "StaffID";
$tdatareceiving[".addFields"][] = "ProductID";
$tdatareceiving[".addFields"][] = "Qty";
$tdatareceiving[".addFields"][] = "Notes";
$tdatareceiving[".addFields"][] = "ReceiveFlag";

$tdatareceiving[".inlineAddFields"] = array();
$tdatareceiving[".inlineAddFields"][] = "RequestID";
$tdatareceiving[".inlineAddFields"][] = "StaffID";
$tdatareceiving[".inlineAddFields"][] = "ProductID";
$tdatareceiving[".inlineAddFields"][] = "Qty";
$tdatareceiving[".inlineAddFields"][] = "Notes";
$tdatareceiving[".inlineAddFields"][] = "ReceiveFlag";

$tdatareceiving[".editFields"] = array();
$tdatareceiving[".editFields"][] = "RequestID";
$tdatareceiving[".editFields"][] = "StaffID";
$tdatareceiving[".editFields"][] = "ProductID";
$tdatareceiving[".editFields"][] = "Qty";
$tdatareceiving[".editFields"][] = "Notes";
$tdatareceiving[".editFields"][] = "ReceiveFlag";

$tdatareceiving[".inlineEditFields"] = array();

$tdatareceiving[".exportFields"] = array();

$tdatareceiving[".printFields"] = array();
$tdatareceiving[".printFields"][] = "ID";
$tdatareceiving[".printFields"][] = "RequestID";
$tdatareceiving[".printFields"][] = "StaffID";
$tdatareceiving[".printFields"][] = "ProductID";
$tdatareceiving[".printFields"][] = "Qty";
$tdatareceiving[".printFields"][] = "Notes";
$tdatareceiving[".printFields"][] = "ReceiveFlag";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["ID"] = $fdata;
//	RequestID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RequestID";
	$fdata["GoodName"] = "RequestID";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["RequestID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["StaffID"] = $fdata;
//	ProductID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ProductID";
	$fdata["GoodName"] = "ProductID";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["ProductID"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["Qty"] = $fdata;
//	Notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Notes";
	$fdata["GoodName"] = "Notes";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["Notes"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["TimeStamp"] = $fdata;
//	ReceiveFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ReceiveFlag";
	$fdata["GoodName"] = "ReceiveFlag";
	$fdata["ownerTable"] = "receiving";
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
	
		
		
	$tdatareceiving["ReceiveFlag"] = $fdata;

	
$tables_data["receiving"]=&$tdatareceiving;
$field_labels["receiving"] = &$fieldLabelsreceiving;
$fieldToolTips["receiving"] = &$fieldToolTipsreceiving;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["receiving"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["receiving"] = array();

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
	$masterTablesData["receiving"][$mIndex] = $masterParams;	
		$masterTablesData["receiving"][$mIndex]["masterKeys"][]="ProdID";
		$masterTablesData["receiving"][$mIndex]["detailKeys"][]="ProductID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_receiving()
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
	"m_sql" => "requestID"
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
	"m_sql" => "ProductID"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Qty"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "Notes"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "`TimeStamp`"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
$obj = new SQLNonParsed(array(
	"m_sql" => "ReceiveFlag"
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
$queryData_receiving = createSqlQuery_receiving();
								$tdatareceiving[".sqlquery"] = $queryData_receiving;

include_once(getabspath("include/receiving_events.php"));
$tableEvents["receiving"] = new eventclass_receiving;
$tdatareceiving[".hasEvents"] = true;

$cipherer = new RunnerCipherer("receiving");

?>