<?php
require_once(getabspath("classes/cipherer.php"));
$tdatasupplier = array();
	$tdatasupplier[".NumberOfChars"] = 80; 
	$tdatasupplier[".ShortName"] = "supplier";
	$tdatasupplier[".OwnerID"] = "";
	$tdatasupplier[".OriginalTable"] = "supplier";

//	field labels
$fieldLabelssupplier = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssupplier["English"] = array();
	$fieldToolTipssupplier["English"] = array();
	$fieldLabelssupplier["English"]["Address"] = "Address";
	$fieldToolTipssupplier["English"]["Address"] = "";
	$fieldLabelssupplier["English"]["Phone"] = "Phone";
	$fieldToolTipssupplier["English"]["Phone"] = "";
	$fieldLabelssupplier["English"]["Fax"] = "Fax";
	$fieldToolTipssupplier["English"]["Fax"] = "";
	$fieldLabelssupplier["English"]["Email"] = "Email";
	$fieldToolTipssupplier["English"]["Email"] = "";
	$fieldLabelssupplier["English"]["SupplierID"] = "Supplier ID";
	$fieldToolTipssupplier["English"]["SupplierID"] = "";
	$fieldLabelssupplier["English"]["ComName"] = "Company Name";
	$fieldToolTipssupplier["English"]["ComName"] = "";
	$fieldLabelssupplier["English"]["ConFName"] = "Contact First Name";
	$fieldToolTipssupplier["English"]["ConFName"] = "";
	$fieldLabelssupplier["English"]["ConLName"] = "Contact Last Name";
	$fieldToolTipssupplier["English"]["ConLName"] = "";
	$fieldLabelssupplier["English"]["ConTitle"] = "Contact Title";
	$fieldToolTipssupplier["English"]["ConTitle"] = "";
	$fieldLabelssupplier["English"]["PayMeth"] = "Payment Method";
	$fieldToolTipssupplier["English"]["PayMeth"] = "";
	$fieldLabelssupplier["English"]["DisType"] = "Discount Type";
	$fieldToolTipssupplier["English"]["DisType"] = "";
	if (count($fieldToolTipssupplier["English"]))
		$tdatasupplier[".isUseToolTips"] = true;
}
	
	
	$tdatasupplier[".NCSearch"] = true;



$tdatasupplier[".shortTableName"] = "supplier";
$tdatasupplier[".nSecOptions"] = 0;
$tdatasupplier[".recsPerRowList"] = 1;
$tdatasupplier[".mainTableOwnerID"] = "";
$tdatasupplier[".moveNext"] = 1;
$tdatasupplier[".nType"] = 0;

$tdatasupplier[".strOriginalTableName"] = "supplier";




$tdatasupplier[".showAddInPopup"] = true;

$tdatasupplier[".showEditInPopup"] = true;

$tdatasupplier[".showViewInPopup"] = true;

$tdatasupplier[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatasupplier[".listAjax"] = true;
else 
	$tdatasupplier[".listAjax"] = false;

	$tdatasupplier[".audit"] = false;

	$tdatasupplier[".locking"] = false;

$tdatasupplier[".listIcons"] = true;
$tdatasupplier[".edit"] = true;
$tdatasupplier[".inlineEdit"] = true;
$tdatasupplier[".inlineAdd"] = true;
$tdatasupplier[".copy"] = true;
$tdatasupplier[".view"] = true;

$tdatasupplier[".exportTo"] = true;

$tdatasupplier[".printFriendly"] = true;

$tdatasupplier[".delete"] = true;

$tdatasupplier[".showSimpleSearchOptions"] = false;

$tdatasupplier[".showSearchPanel"] = true;

if (isMobile())
	$tdatasupplier[".isUseAjaxSuggest"] = false;
else 
	$tdatasupplier[".isUseAjaxSuggest"] = true;

$tdatasupplier[".rowHighlite"] = true;

// button handlers file names

$tdatasupplier[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasupplier[".isUseTimeForSearch"] = false;




$tdatasupplier[".allSearchFields"] = array();

$tdatasupplier[".allSearchFields"][] = "ComName";
$tdatasupplier[".allSearchFields"][] = "SupplierID";
$tdatasupplier[".allSearchFields"][] = "ConFName";
$tdatasupplier[".allSearchFields"][] = "ConLName";
$tdatasupplier[".allSearchFields"][] = "ConTitle";
$tdatasupplier[".allSearchFields"][] = "Address";
$tdatasupplier[".allSearchFields"][] = "Email";
$tdatasupplier[".allSearchFields"][] = "Phone";
$tdatasupplier[".allSearchFields"][] = "Fax";
$tdatasupplier[".allSearchFields"][] = "PayMeth";
$tdatasupplier[".allSearchFields"][] = "DisType";

$tdatasupplier[".googleLikeFields"][] = "SupplierID";
$tdatasupplier[".googleLikeFields"][] = "ComName";
$tdatasupplier[".googleLikeFields"][] = "ConFName";
$tdatasupplier[".googleLikeFields"][] = "ConLName";
$tdatasupplier[".googleLikeFields"][] = "ConTitle";
$tdatasupplier[".googleLikeFields"][] = "Address";
$tdatasupplier[".googleLikeFields"][] = "Phone";
$tdatasupplier[".googleLikeFields"][] = "Fax";
$tdatasupplier[".googleLikeFields"][] = "Email";
$tdatasupplier[".googleLikeFields"][] = "PayMeth";
$tdatasupplier[".googleLikeFields"][] = "DisType";


$tdatasupplier[".advSearchFields"][] = "ComName";
$tdatasupplier[".advSearchFields"][] = "SupplierID";
$tdatasupplier[".advSearchFields"][] = "ConFName";
$tdatasupplier[".advSearchFields"][] = "ConLName";
$tdatasupplier[".advSearchFields"][] = "ConTitle";
$tdatasupplier[".advSearchFields"][] = "Address";
$tdatasupplier[".advSearchFields"][] = "Email";
$tdatasupplier[".advSearchFields"][] = "Phone";
$tdatasupplier[".advSearchFields"][] = "Fax";
$tdatasupplier[".advSearchFields"][] = "PayMeth";
$tdatasupplier[".advSearchFields"][] = "DisType";

$tdatasupplier[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatasupplier[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasupplier[".strOrderBy"] = $tstrOrderBy;

$tdatasupplier[".orderindexes"] = array();

$tdatasupplier[".sqlHead"] = "SELECT SupplierID,  ComName,  ConFName,  ConLName,  ConTitle,  Address,  Phone,  Fax,  Email,  PayMeth,  DisType";
$tdatasupplier[".sqlFrom"] = "FROM supplier";
$tdatasupplier[".sqlWhereExpr"] = "";
$tdatasupplier[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasupplier[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasupplier[".arrGroupsPerPage"] = $arrGPP;

$tableKeyssupplier = array();
$tableKeyssupplier[] = "SupplierID";
$tdatasupplier[".Keys"] = $tableKeyssupplier;

$tdatasupplier[".listFields"] = array();
$tdatasupplier[".listFields"][] = "ComName";
$tdatasupplier[".listFields"][] = "ConFName";
$tdatasupplier[".listFields"][] = "ConLName";
$tdatasupplier[".listFields"][] = "ConTitle";
$tdatasupplier[".listFields"][] = "Address";
$tdatasupplier[".listFields"][] = "Phone";
$tdatasupplier[".listFields"][] = "Email";
$tdatasupplier[".listFields"][] = "Fax";
$tdatasupplier[".listFields"][] = "PayMeth";
$tdatasupplier[".listFields"][] = "DisType";

$tdatasupplier[".viewFields"] = array();
$tdatasupplier[".viewFields"][] = "SupplierID";
$tdatasupplier[".viewFields"][] = "ComName";
$tdatasupplier[".viewFields"][] = "ConFName";
$tdatasupplier[".viewFields"][] = "ConLName";
$tdatasupplier[".viewFields"][] = "ConTitle";
$tdatasupplier[".viewFields"][] = "Address";
$tdatasupplier[".viewFields"][] = "Phone";
$tdatasupplier[".viewFields"][] = "Email";
$tdatasupplier[".viewFields"][] = "Fax";
$tdatasupplier[".viewFields"][] = "PayMeth";
$tdatasupplier[".viewFields"][] = "DisType";

$tdatasupplier[".addFields"] = array();
$tdatasupplier[".addFields"][] = "ComName";
$tdatasupplier[".addFields"][] = "ConFName";
$tdatasupplier[".addFields"][] = "ConLName";
$tdatasupplier[".addFields"][] = "ConTitle";
$tdatasupplier[".addFields"][] = "Address";
$tdatasupplier[".addFields"][] = "Phone";
$tdatasupplier[".addFields"][] = "Email";
$tdatasupplier[".addFields"][] = "Fax";
$tdatasupplier[".addFields"][] = "PayMeth";
$tdatasupplier[".addFields"][] = "DisType";

$tdatasupplier[".inlineAddFields"] = array();
$tdatasupplier[".inlineAddFields"][] = "ComName";
$tdatasupplier[".inlineAddFields"][] = "ConFName";
$tdatasupplier[".inlineAddFields"][] = "ConLName";
$tdatasupplier[".inlineAddFields"][] = "ConTitle";
$tdatasupplier[".inlineAddFields"][] = "Address";
$tdatasupplier[".inlineAddFields"][] = "Phone";
$tdatasupplier[".inlineAddFields"][] = "Email";
$tdatasupplier[".inlineAddFields"][] = "Fax";
$tdatasupplier[".inlineAddFields"][] = "PayMeth";
$tdatasupplier[".inlineAddFields"][] = "DisType";

$tdatasupplier[".editFields"] = array();
$tdatasupplier[".editFields"][] = "ComName";
$tdatasupplier[".editFields"][] = "ConFName";
$tdatasupplier[".editFields"][] = "ConLName";
$tdatasupplier[".editFields"][] = "ConTitle";
$tdatasupplier[".editFields"][] = "Address";
$tdatasupplier[".editFields"][] = "Phone";
$tdatasupplier[".editFields"][] = "Email";
$tdatasupplier[".editFields"][] = "Fax";
$tdatasupplier[".editFields"][] = "PayMeth";
$tdatasupplier[".editFields"][] = "DisType";

$tdatasupplier[".inlineEditFields"] = array();
$tdatasupplier[".inlineEditFields"][] = "ComName";
$tdatasupplier[".inlineEditFields"][] = "ConFName";
$tdatasupplier[".inlineEditFields"][] = "ConLName";
$tdatasupplier[".inlineEditFields"][] = "ConTitle";
$tdatasupplier[".inlineEditFields"][] = "Address";
$tdatasupplier[".inlineEditFields"][] = "Phone";
$tdatasupplier[".inlineEditFields"][] = "Email";
$tdatasupplier[".inlineEditFields"][] = "Fax";
$tdatasupplier[".inlineEditFields"][] = "PayMeth";
$tdatasupplier[".inlineEditFields"][] = "DisType";

$tdatasupplier[".exportFields"] = array();
$tdatasupplier[".exportFields"][] = "SupplierID";
$tdatasupplier[".exportFields"][] = "ComName";
$tdatasupplier[".exportFields"][] = "ConFName";
$tdatasupplier[".exportFields"][] = "ConLName";
$tdatasupplier[".exportFields"][] = "ConTitle";
$tdatasupplier[".exportFields"][] = "Address";
$tdatasupplier[".exportFields"][] = "Phone";
$tdatasupplier[".exportFields"][] = "Email";
$tdatasupplier[".exportFields"][] = "Fax";
$tdatasupplier[".exportFields"][] = "PayMeth";
$tdatasupplier[".exportFields"][] = "DisType";

$tdatasupplier[".printFields"] = array();
$tdatasupplier[".printFields"][] = "SupplierID";
$tdatasupplier[".printFields"][] = "ComName";
$tdatasupplier[".printFields"][] = "ConFName";
$tdatasupplier[".printFields"][] = "ConLName";
$tdatasupplier[".printFields"][] = "ConTitle";
$tdatasupplier[".printFields"][] = "Address";
$tdatasupplier[".printFields"][] = "Phone";
$tdatasupplier[".printFields"][] = "Email";
$tdatasupplier[".printFields"][] = "Fax";
$tdatasupplier[".printFields"][] = "PayMeth";
$tdatasupplier[".printFields"][] = "DisType";

//	SupplierID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "SupplierID";
	$fdata["GoodName"] = "SupplierID";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Supplier ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatasupplier["SupplierID"] = $fdata;
//	ComName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ComName";
	$fdata["GoodName"] = "ComName";
	$fdata["ownerTable"] = "supplier";
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
	
		
		
	$tdatasupplier["ComName"] = $fdata;
//	ConFName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ConFName";
	$fdata["GoodName"] = "ConFName";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Contact First Name"; 
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
	
		$fdata["strField"] = "ConFName"; 
		$fdata["FullName"] = "ConFName";
	
		
		
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
	
		
		
	$tdatasupplier["ConFName"] = $fdata;
//	ConLName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ConLName";
	$fdata["GoodName"] = "ConLName";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Contact Last Name"; 
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
	
		$fdata["strField"] = "ConLName"; 
		$fdata["FullName"] = "ConLName";
	
		
		
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
	
		
		
	$tdatasupplier["ConLName"] = $fdata;
//	ConTitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ConTitle";
	$fdata["GoodName"] = "ConTitle";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Contact Title"; 
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
	
		$fdata["strField"] = "ConTitle"; 
		$fdata["FullName"] = "ConTitle";
	
		
		
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
	
		
		
	$tdatasupplier["ConTitle"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Address"; 
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
	
		$fdata["strField"] = "Address"; 
		$fdata["FullName"] = "Address";
	
		
		
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
	
		
		
	$tdatasupplier["Address"] = $fdata;
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "supplier";
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupplier["Phone"] = $fdata;
//	Fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Fax";
	$fdata["GoodName"] = "Fax";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Fax"; 
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
	
		$fdata["strField"] = "Fax"; 
		$fdata["FullName"] = "Fax";
	
		
		
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
	
		
		
	$tdatasupplier["Fax"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "supplier";
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
			
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatasupplier["Email"] = $fdata;
//	PayMeth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PayMeth";
	$fdata["GoodName"] = "PayMeth";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Payment Method"; 
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
	
		$fdata["strField"] = "PayMeth"; 
		$fdata["FullName"] = "PayMeth";
	
		
		
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
	
		
		
	$tdatasupplier["PayMeth"] = $fdata;
//	DisType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DisType";
	$fdata["GoodName"] = "DisType";
	$fdata["ownerTable"] = "supplier";
	$fdata["Label"] = "Discount Type"; 
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
	
		$fdata["strField"] = "DisType"; 
		$fdata["FullName"] = "DisType";
	
		
		
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
	
		
		
	$tdatasupplier["DisType"] = $fdata;

	
$tables_data["supplier"]=&$tdatasupplier;
$field_labels["supplier"] = &$fieldLabelssupplier;
$fieldToolTips["supplier"] = &$fieldToolTipssupplier;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["supplier"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["supplier"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_supplier()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SupplierID,  ComName,  ConFName,  ConLName,  ConTitle,  Address,  Phone,  Fax,  Email,  PayMeth,  DisType";
$proto0["m_strFrom"] = "FROM supplier";
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
	"m_strName" => "SupplierID",
	"m_strTable" => "supplier"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "ComName",
	"m_strTable" => "supplier"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ConFName",
	"m_strTable" => "supplier"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ConLName",
	"m_strTable" => "supplier"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ConTitle",
	"m_strTable" => "supplier"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "supplier"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "supplier"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Fax",
	"m_strTable" => "supplier"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "supplier"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "PayMeth",
	"m_strTable" => "supplier"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "DisType",
	"m_strTable" => "supplier"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "supplier";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "SupplierID";
$proto28["m_columns"][] = "ComName";
$proto28["m_columns"][] = "ConFName";
$proto28["m_columns"][] = "ConLName";
$proto28["m_columns"][] = "ConTitle";
$proto28["m_columns"][] = "Address";
$proto28["m_columns"][] = "Phone";
$proto28["m_columns"][] = "Fax";
$proto28["m_columns"][] = "Email";
$proto28["m_columns"][] = "PayMeth";
$proto28["m_columns"][] = "DisType";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_supplier = createSqlQuery_supplier();
											$tdatasupplier[".sqlquery"] = $queryData_supplier;

$tableEvents["supplier"] = new eventsBase;
$tdatasupplier[".hasEvents"] = false;

$cipherer = new RunnerCipherer("supplier");

?>