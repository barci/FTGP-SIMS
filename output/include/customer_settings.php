<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacustomer = array();
	$tdatacustomer[".NumberOfChars"] = 80; 
	$tdatacustomer[".ShortName"] = "customer";
	$tdatacustomer[".OwnerID"] = "";
	$tdatacustomer[".OriginalTable"] = "customer";

//	field labels
$fieldLabelscustomer = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer["English"] = array();
	$fieldToolTipscustomer["English"] = array();
	$fieldLabelscustomer["English"]["Phone"] = "Phone";
	$fieldToolTipscustomer["English"]["Phone"] = "";
	$fieldLabelscustomer["English"]["Email"] = "Email";
	$fieldToolTipscustomer["English"]["Email"] = "";
	$fieldLabelscustomer["English"]["CID"] = "CID";
	$fieldToolTipscustomer["English"]["CID"] = "";
	$fieldLabelscustomer["English"]["BRegNo"] = "BReg No";
	$fieldToolTipscustomer["English"]["BRegNo"] = "";
	$fieldLabelscustomer["English"]["ComName"] = "Company Name";
	$fieldToolTipscustomer["English"]["ComName"] = "";
	$fieldLabelscustomer["English"]["Fname"] = "First name";
	$fieldToolTipscustomer["English"]["Fname"] = "";
	$fieldLabelscustomer["English"]["Lname"] = "Last Name";
	$fieldToolTipscustomer["English"]["Lname"] = "";
	$fieldLabelscustomer["English"]["OAddress"] = "Office Address";
	$fieldToolTipscustomer["English"]["OAddress"] = "";
	$fieldLabelscustomer["English"]["DAddress"] = "Delivery Address";
	$fieldToolTipscustomer["English"]["DAddress"] = "";
	$fieldLabelscustomer["English"]["StaffID"] = "Staff ID";
	$fieldToolTipscustomer["English"]["StaffID"] = "";
	$fieldLabelscustomer["English"]["DrNo"] = "Dr No";
	$fieldToolTipscustomer["English"]["DrNo"] = "";
	if (count($fieldToolTipscustomer["English"]))
		$tdatacustomer[".isUseToolTips"] = true;
}
	
	
	$tdatacustomer[".NCSearch"] = true;



$tdatacustomer[".shortTableName"] = "customer";
$tdatacustomer[".nSecOptions"] = 0;
$tdatacustomer[".recsPerRowList"] = 1;
$tdatacustomer[".mainTableOwnerID"] = "";
$tdatacustomer[".moveNext"] = 1;
$tdatacustomer[".nType"] = 0;

$tdatacustomer[".strOriginalTableName"] = "customer";




$tdatacustomer[".showAddInPopup"] = true;

$tdatacustomer[".showEditInPopup"] = true;

$tdatacustomer[".showViewInPopup"] = true;

$tdatacustomer[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacustomer[".listAjax"] = true;
else 
	$tdatacustomer[".listAjax"] = false;

	$tdatacustomer[".audit"] = false;

	$tdatacustomer[".locking"] = false;

$tdatacustomer[".listIcons"] = true;
$tdatacustomer[".edit"] = true;
$tdatacustomer[".inlineEdit"] = true;
$tdatacustomer[".inlineAdd"] = true;
$tdatacustomer[".copy"] = true;
$tdatacustomer[".view"] = true;

$tdatacustomer[".exportTo"] = true;

$tdatacustomer[".printFriendly"] = true;

$tdatacustomer[".delete"] = true;

$tdatacustomer[".showSimpleSearchOptions"] = false;

$tdatacustomer[".showSearchPanel"] = true;

if (isMobile())
	$tdatacustomer[".isUseAjaxSuggest"] = false;
else 
	$tdatacustomer[".isUseAjaxSuggest"] = true;

$tdatacustomer[".rowHighlite"] = true;

// button handlers file names

$tdatacustomer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer[".isUseTimeForSearch"] = false;




$tdatacustomer[".allSearchFields"] = array();

$tdatacustomer[".allSearchFields"][] = "BRegNo";
$tdatacustomer[".allSearchFields"][] = "ComName";
$tdatacustomer[".allSearchFields"][] = "Fname";
$tdatacustomer[".allSearchFields"][] = "Lname";
$tdatacustomer[".allSearchFields"][] = "OAddress";
$tdatacustomer[".allSearchFields"][] = "DAddress";
$tdatacustomer[".allSearchFields"][] = "StaffID";
$tdatacustomer[".allSearchFields"][] = "Phone";
$tdatacustomer[".allSearchFields"][] = "Email";

$tdatacustomer[".googleLikeFields"][] = "CID";
$tdatacustomer[".googleLikeFields"][] = "BRegNo";
$tdatacustomer[".googleLikeFields"][] = "ComName";
$tdatacustomer[".googleLikeFields"][] = "Fname";
$tdatacustomer[".googleLikeFields"][] = "Lname";
$tdatacustomer[".googleLikeFields"][] = "OAddress";
$tdatacustomer[".googleLikeFields"][] = "DAddress";
$tdatacustomer[".googleLikeFields"][] = "Phone";
$tdatacustomer[".googleLikeFields"][] = "Email";
$tdatacustomer[".googleLikeFields"][] = "StaffID";


$tdatacustomer[".advSearchFields"][] = "BRegNo";
$tdatacustomer[".advSearchFields"][] = "ComName";
$tdatacustomer[".advSearchFields"][] = "Fname";
$tdatacustomer[".advSearchFields"][] = "Lname";
$tdatacustomer[".advSearchFields"][] = "OAddress";
$tdatacustomer[".advSearchFields"][] = "DAddress";
$tdatacustomer[".advSearchFields"][] = "StaffID";
$tdatacustomer[".advSearchFields"][] = "Phone";
$tdatacustomer[".advSearchFields"][] = "Email";

$tdatacustomer[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatacustomer[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacustomer[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer[".orderindexes"] = array();

$tdatacustomer[".sqlHead"] = "SELECT CID,  BRegNo,  ComName,  Fname,  Lname,  OAddress,  DAddress,  Phone,  Email,  StaffID";
$tdatacustomer[".sqlFrom"] = "FROM customer";
$tdatacustomer[".sqlWhereExpr"] = "";
$tdatacustomer[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscustomer = array();
$tableKeyscustomer[] = "CID";
$tdatacustomer[".Keys"] = $tableKeyscustomer;

$tdatacustomer[".listFields"] = array();
$tdatacustomer[".listFields"][] = "BRegNo";
$tdatacustomer[".listFields"][] = "ComName";
$tdatacustomer[".listFields"][] = "Fname";
$tdatacustomer[".listFields"][] = "Lname";
$tdatacustomer[".listFields"][] = "OAddress";
$tdatacustomer[".listFields"][] = "DAddress";
$tdatacustomer[".listFields"][] = "StaffID";
$tdatacustomer[".listFields"][] = "Phone";
$tdatacustomer[".listFields"][] = "Email";

$tdatacustomer[".viewFields"] = array();
$tdatacustomer[".viewFields"][] = "BRegNo";
$tdatacustomer[".viewFields"][] = "ComName";
$tdatacustomer[".viewFields"][] = "Fname";
$tdatacustomer[".viewFields"][] = "Lname";
$tdatacustomer[".viewFields"][] = "OAddress";
$tdatacustomer[".viewFields"][] = "DAddress";
$tdatacustomer[".viewFields"][] = "StaffID";
$tdatacustomer[".viewFields"][] = "Phone";
$tdatacustomer[".viewFields"][] = "Email";

$tdatacustomer[".addFields"] = array();
$tdatacustomer[".addFields"][] = "BRegNo";
$tdatacustomer[".addFields"][] = "ComName";
$tdatacustomer[".addFields"][] = "Fname";
$tdatacustomer[".addFields"][] = "Lname";
$tdatacustomer[".addFields"][] = "OAddress";
$tdatacustomer[".addFields"][] = "DAddress";
$tdatacustomer[".addFields"][] = "StaffID";
$tdatacustomer[".addFields"][] = "Phone";
$tdatacustomer[".addFields"][] = "Email";

$tdatacustomer[".inlineAddFields"] = array();
$tdatacustomer[".inlineAddFields"][] = "BRegNo";
$tdatacustomer[".inlineAddFields"][] = "ComName";
$tdatacustomer[".inlineAddFields"][] = "Fname";
$tdatacustomer[".inlineAddFields"][] = "Lname";
$tdatacustomer[".inlineAddFields"][] = "OAddress";
$tdatacustomer[".inlineAddFields"][] = "DAddress";
$tdatacustomer[".inlineAddFields"][] = "StaffID";
$tdatacustomer[".inlineAddFields"][] = "Phone";
$tdatacustomer[".inlineAddFields"][] = "Email";

$tdatacustomer[".editFields"] = array();
$tdatacustomer[".editFields"][] = "BRegNo";
$tdatacustomer[".editFields"][] = "ComName";
$tdatacustomer[".editFields"][] = "Fname";
$tdatacustomer[".editFields"][] = "Lname";
$tdatacustomer[".editFields"][] = "OAddress";
$tdatacustomer[".editFields"][] = "DAddress";
$tdatacustomer[".editFields"][] = "StaffID";
$tdatacustomer[".editFields"][] = "Phone";
$tdatacustomer[".editFields"][] = "Email";

$tdatacustomer[".inlineEditFields"] = array();
$tdatacustomer[".inlineEditFields"][] = "BRegNo";
$tdatacustomer[".inlineEditFields"][] = "ComName";
$tdatacustomer[".inlineEditFields"][] = "Fname";
$tdatacustomer[".inlineEditFields"][] = "Lname";
$tdatacustomer[".inlineEditFields"][] = "OAddress";
$tdatacustomer[".inlineEditFields"][] = "DAddress";
$tdatacustomer[".inlineEditFields"][] = "StaffID";
$tdatacustomer[".inlineEditFields"][] = "Phone";
$tdatacustomer[".inlineEditFields"][] = "Email";

$tdatacustomer[".exportFields"] = array();
$tdatacustomer[".exportFields"][] = "CID";
$tdatacustomer[".exportFields"][] = "BRegNo";
$tdatacustomer[".exportFields"][] = "ComName";
$tdatacustomer[".exportFields"][] = "Fname";
$tdatacustomer[".exportFields"][] = "Lname";
$tdatacustomer[".exportFields"][] = "OAddress";
$tdatacustomer[".exportFields"][] = "DAddress";
$tdatacustomer[".exportFields"][] = "StaffID";
$tdatacustomer[".exportFields"][] = "Phone";
$tdatacustomer[".exportFields"][] = "Email";

$tdatacustomer[".printFields"] = array();
$tdatacustomer[".printFields"][] = "BRegNo";
$tdatacustomer[".printFields"][] = "ComName";
$tdatacustomer[".printFields"][] = "Fname";
$tdatacustomer[".printFields"][] = "Lname";
$tdatacustomer[".printFields"][] = "OAddress";
$tdatacustomer[".printFields"][] = "DAddress";
$tdatacustomer[".printFields"][] = "StaffID";
$tdatacustomer[".printFields"][] = "Phone";
$tdatacustomer[".printFields"][] = "Email";

//	CID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CID";
	$fdata["GoodName"] = "CID";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "CID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CID"; 
		$fdata["FullName"] = "CID";
	
		
		
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
	
		
		
	$tdatacustomer["CID"] = $fdata;
//	BRegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BRegNo";
	$fdata["GoodName"] = "BRegNo";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "BReg No"; 
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
	
		$fdata["strField"] = "BRegNo"; 
		$fdata["FullName"] = "BRegNo";
	
		
		
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
	
		
		
	$tdatacustomer["BRegNo"] = $fdata;
//	ComName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ComName";
	$fdata["GoodName"] = "ComName";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Company Name"; 
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
	
		$fdata["strField"] = "ComName"; 
		$fdata["FullName"] = "ComName";
	
		
		
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
	
		
		
	$tdatacustomer["ComName"] = $fdata;
//	Fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fname";
	$fdata["GoodName"] = "Fname";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "First name"; 
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
	
		$fdata["strField"] = "Fname"; 
		$fdata["FullName"] = "Fname";
	
		
		
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
	
		
		
	$tdatacustomer["Fname"] = $fdata;
//	Lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Lname";
	$fdata["GoodName"] = "Lname";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Last Name"; 
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
	
		$fdata["strField"] = "Lname"; 
		$fdata["FullName"] = "Lname";
	
		
		
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
	
		
		
	$tdatacustomer["Lname"] = $fdata;
//	OAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "OAddress";
	$fdata["GoodName"] = "OAddress";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Office Address"; 
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
	
		$fdata["strField"] = "OAddress"; 
		$fdata["FullName"] = "OAddress";
	
		
		
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
	
		
		
	$tdatacustomer["OAddress"] = $fdata;
//	DAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DAddress";
	$fdata["GoodName"] = "DAddress";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Delivery Address"; 
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
	
		$fdata["strField"] = "DAddress"; 
		$fdata["FullName"] = "DAddress";
	
		
		
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
	
		
		
	$tdatacustomer["DAddress"] = $fdata;
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Phone"; 
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
	
		$fdata["strField"] = "Phone"; 
		$fdata["FullName"] = "Phone";
	
		
		
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
	
		
		
	$tdatacustomer["Phone"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "customer";
	$fdata["Label"] = "Email"; 
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
	
		$fdata["strField"] = "Email"; 
		$fdata["FullName"] = "Email";
	
		
		
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
	
		
		
	$tdatacustomer["Email"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "customer";
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "StaffID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";
	
		
	$edata["LookupTable"] = "staff";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatacustomer["StaffID"] = $fdata;

	
$tables_data["customer"]=&$tdatacustomer;
$field_labels["customer"] = &$fieldLabelscustomer;
$fieldToolTips["customer"] = &$fieldToolTipscustomer;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["customer"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["customer"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CID,  BRegNo,  ComName,  Fname,  Lname,  OAddress,  DAddress,  Phone,  Email,  StaffID";
$proto0["m_strFrom"] = "FROM customer";
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
	"m_strName" => "CID",
	"m_strTable" => "customer"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "BRegNo",
	"m_strTable" => "customer"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ComName",
	"m_strTable" => "customer"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Fname",
	"m_strTable" => "customer"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Lname",
	"m_strTable" => "customer"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "OAddress",
	"m_strTable" => "customer"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DAddress",
	"m_strTable" => "customer"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "customer"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "customer"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "customer"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "customer";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "CID";
$proto26["m_columns"][] = "BRegNo";
$proto26["m_columns"][] = "ComName";
$proto26["m_columns"][] = "Fname";
$proto26["m_columns"][] = "Lname";
$proto26["m_columns"][] = "OAddress";
$proto26["m_columns"][] = "DAddress";
$proto26["m_columns"][] = "Phone";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "StaffID";
$proto26["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customer = createSqlQuery_customer();
										$tdatacustomer[".sqlquery"] = $queryData_customer;

$tableEvents["customer"] = new eventsBase;
$tdatacustomer[".hasEvents"] = false;

$cipherer = new RunnerCipherer("customer");

?>