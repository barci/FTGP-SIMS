<?php
require_once(getabspath("classes/cipherer.php"));
$tdatadelivery = array();
	$tdatadelivery[".NumberOfChars"] = 80; 
	$tdatadelivery[".ShortName"] = "delivery";
	$tdatadelivery[".OwnerID"] = "";
	$tdatadelivery[".OriginalTable"] = "delivery";

//	field labels
$fieldLabelsdelivery = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdelivery["English"] = array();
	$fieldToolTipsdelivery["English"] = array();
	$fieldLabelsdelivery["English"]["ID"] = "ID";
	$fieldToolTipsdelivery["English"]["ID"] = "";
	$fieldLabelsdelivery["English"]["DrNo"] = "DR No";
	$fieldToolTipsdelivery["English"]["DrNo"] = "";
	$fieldLabelsdelivery["English"]["orderID"] = "Order ID";
	$fieldToolTipsdelivery["English"]["orderID"] = "";
	$fieldLabelsdelivery["English"]["prodID"] = "Product";
	$fieldToolTipsdelivery["English"]["prodID"] = "";
	$fieldLabelsdelivery["English"]["qty"] = "Quantity";
	$fieldToolTipsdelivery["English"]["qty"] = "";
	$fieldLabelsdelivery["English"]["eta"] = "ETA";
	$fieldToolTipsdelivery["English"]["eta"] = "";
	$fieldLabelsdelivery["English"]["delFlag"] = "Delivery Flag";
	$fieldToolTipsdelivery["English"]["delFlag"] = "";
	$fieldLabelsdelivery["English"]["staffID"] = "Staff ID";
	$fieldToolTipsdelivery["English"]["staffID"] = "";
	if (count($fieldToolTipsdelivery["English"]))
		$tdatadelivery[".isUseToolTips"] = true;
}
	
	
	$tdatadelivery[".NCSearch"] = true;



$tdatadelivery[".shortTableName"] = "delivery";
$tdatadelivery[".nSecOptions"] = 0;
$tdatadelivery[".recsPerRowList"] = 1;
$tdatadelivery[".mainTableOwnerID"] = "";
$tdatadelivery[".moveNext"] = 1;
$tdatadelivery[".nType"] = 0;

$tdatadelivery[".strOriginalTableName"] = "delivery";




$tdatadelivery[".showAddInPopup"] = false;

$tdatadelivery[".showEditInPopup"] = false;

$tdatadelivery[".showViewInPopup"] = false;

$tdatadelivery[".fieldsForRegister"] = array();

$tdatadelivery[".listAjax"] = false;

	$tdatadelivery[".audit"] = false;

	$tdatadelivery[".locking"] = false;

$tdatadelivery[".listIcons"] = true;
$tdatadelivery[".edit"] = true;
$tdatadelivery[".inlineAdd"] = true;


$tdatadelivery[".printFriendly"] = true;

$tdatadelivery[".delete"] = true;

$tdatadelivery[".showSimpleSearchOptions"] = false;

$tdatadelivery[".showSearchPanel"] = true;

if (isMobile())
	$tdatadelivery[".isUseAjaxSuggest"] = false;
else 
	$tdatadelivery[".isUseAjaxSuggest"] = true;

$tdatadelivery[".rowHighlite"] = true;

// button handlers file names

$tdatadelivery[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadelivery[".isUseTimeForSearch"] = false;




$tdatadelivery[".allSearchFields"] = array();

$tdatadelivery[".allSearchFields"][] = "DrNo";
$tdatadelivery[".allSearchFields"][] = "orderID";
$tdatadelivery[".allSearchFields"][] = "prodID";
$tdatadelivery[".allSearchFields"][] = "qty";
$tdatadelivery[".allSearchFields"][] = "eta";
$tdatadelivery[".allSearchFields"][] = "staffID";
$tdatadelivery[".allSearchFields"][] = "delFlag";

$tdatadelivery[".googleLikeFields"][] = "ID";
$tdatadelivery[".googleLikeFields"][] = "DrNo";
$tdatadelivery[".googleLikeFields"][] = "orderID";
$tdatadelivery[".googleLikeFields"][] = "prodID";
$tdatadelivery[".googleLikeFields"][] = "qty";
$tdatadelivery[".googleLikeFields"][] = "eta";
$tdatadelivery[".googleLikeFields"][] = "delFlag";
$tdatadelivery[".googleLikeFields"][] = "staffID";


$tdatadelivery[".advSearchFields"][] = "DrNo";
$tdatadelivery[".advSearchFields"][] = "orderID";
$tdatadelivery[".advSearchFields"][] = "prodID";
$tdatadelivery[".advSearchFields"][] = "qty";
$tdatadelivery[".advSearchFields"][] = "eta";
$tdatadelivery[".advSearchFields"][] = "staffID";
$tdatadelivery[".advSearchFields"][] = "delFlag";

$tdatadelivery[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatadelivery[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY eta desc";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadelivery[".strOrderBy"] = $tstrOrderBy;

$tdatadelivery[".orderindexes"] = array();
$tdatadelivery[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "eta");

$tdatadelivery[".sqlHead"] = "SELECT ID,  DrNo,  orderID,  prodID,  qty,  eta,  delFlag,  staffID";
$tdatadelivery[".sqlFrom"] = "FROM delivery";
$tdatadelivery[".sqlWhereExpr"] = "";
$tdatadelivery[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadelivery[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadelivery[".arrGroupsPerPage"] = $arrGPP;

$tableKeysdelivery = array();
$tableKeysdelivery[] = "ID";
$tdatadelivery[".Keys"] = $tableKeysdelivery;

$tdatadelivery[".listFields"] = array();
$tdatadelivery[".listFields"][] = "DrNo";
$tdatadelivery[".listFields"][] = "orderID";
$tdatadelivery[".listFields"][] = "prodID";
$tdatadelivery[".listFields"][] = "qty";
$tdatadelivery[".listFields"][] = "delFlag";
$tdatadelivery[".listFields"][] = "eta";
$tdatadelivery[".listFields"][] = "staffID";

$tdatadelivery[".viewFields"] = array();

$tdatadelivery[".addFields"] = array();
$tdatadelivery[".addFields"][] = "DrNo";
$tdatadelivery[".addFields"][] = "orderID";
$tdatadelivery[".addFields"][] = "prodID";
$tdatadelivery[".addFields"][] = "qty";
$tdatadelivery[".addFields"][] = "eta";
$tdatadelivery[".addFields"][] = "staffID";
$tdatadelivery[".addFields"][] = "delFlag";

$tdatadelivery[".inlineAddFields"] = array();
$tdatadelivery[".inlineAddFields"][] = "DrNo";
$tdatadelivery[".inlineAddFields"][] = "orderID";
$tdatadelivery[".inlineAddFields"][] = "prodID";
$tdatadelivery[".inlineAddFields"][] = "qty";
$tdatadelivery[".inlineAddFields"][] = "delFlag";
$tdatadelivery[".inlineAddFields"][] = "eta";
$tdatadelivery[".inlineAddFields"][] = "staffID";

$tdatadelivery[".editFields"] = array();
$tdatadelivery[".editFields"][] = "prodID";
$tdatadelivery[".editFields"][] = "qty";
$tdatadelivery[".editFields"][] = "delFlag";

$tdatadelivery[".inlineEditFields"] = array();

$tdatadelivery[".exportFields"] = array();

$tdatadelivery[".printFields"] = array();
$tdatadelivery[".printFields"][] = "DrNo";
$tdatadelivery[".printFields"][] = "orderID";
$tdatadelivery[".printFields"][] = "prodID";
$tdatadelivery[".printFields"][] = "qty";
$tdatadelivery[".printFields"][] = "eta";
$tdatadelivery[".printFields"][] = "staffID";
$tdatadelivery[".printFields"][] = "delFlag";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "ID"; 
		$fdata["FullName"] = "ID";
	
		
		
				
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
	
		
		
	$tdatadelivery["ID"] = $fdata;
//	DrNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DrNo";
	$fdata["GoodName"] = "DrNo";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "DR No"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "DrNo"; 
		$fdata["FullName"] = "DrNo";
	
		
		
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
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "DrNo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "DrNo";
	
		
	$edata["LookupTable"] = "delivery";
	$edata["LookupOrderBy"] = "DrNo";
	
		$edata["LookupDesc"] = true;
	
		
		
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
	
		
		
	$tdatadelivery["DrNo"] = $fdata;
//	orderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "orderID";
	$fdata["GoodName"] = "orderID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Order ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "orderID"; 
		$fdata["FullName"] = "orderID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "OrderID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "OrderID";
	
		
	$edata["LookupTable"] = "orderentry";
	$edata["LookupOrderBy"] = "OrderID";
	
		
		
		
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
	
		
		
	$tdatadelivery["orderID"] = $fdata;
//	prodID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "prodID";
	$fdata["GoodName"] = "prodID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Product"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "prodID"; 
		$fdata["FullName"] = "prodID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "ProdID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Product Name";
	
		
	$edata["LookupTable"] = "Product-Order List";
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
	
		
		
	$tdatadelivery["prodID"] = $fdata;
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Quantity"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "qty"; 
		$fdata["FullName"] = "qty";
	
		
		
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
	
		
		
	$tdatadelivery["qty"] = $fdata;
//	eta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "eta";
	$fdata["GoodName"] = "eta";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "ETA"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "eta"; 
		$fdata["FullName"] = "eta";
	
		
		
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
	
		
		
	$tdatadelivery["eta"] = $fdata;
//	delFlag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "delFlag";
	$fdata["GoodName"] = "delFlag";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Delivery Flag"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "delFlag"; 
		$fdata["FullName"] = "delFlag";
	
		
		
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
	
		
		
	$tdatadelivery["delFlag"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "delivery";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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
	
		
		
	$tdatadelivery["staffID"] = $fdata;

	
$tables_data["delivery"]=&$tdatadelivery;
$field_labels["delivery"] = &$fieldLabelsdelivery;
$fieldToolTips["delivery"] = &$fieldToolTipsdelivery;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["delivery"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["delivery"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="orderdetail";
	$masterParams["mDataSourceTable"]="Pending Orders";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Pending_Orders";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["delivery"][$mIndex] = $masterParams;	
		$masterTablesData["delivery"][$mIndex]["masterKeys"][]="ProductID";
		$masterTablesData["delivery"][$mIndex]["masterKeys"][]="OrderID";
		$masterTablesData["delivery"][$mIndex]["detailKeys"][]="prodID";
		$masterTablesData["delivery"][$mIndex]["detailKeys"][]="orderID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_delivery()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  DrNo,  orderID,  prodID,  qty,  eta,  delFlag,  staffID";
$proto0["m_strFrom"] = "FROM delivery";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eta desc";
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
	"m_strTable" => "delivery"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "DrNo",
	"m_strTable" => "delivery"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "orderID",
	"m_strTable" => "delivery"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "prodID",
	"m_strTable" => "delivery"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "delivery"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "eta",
	"m_strTable" => "delivery"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "delFlag",
	"m_strTable" => "delivery"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "delivery"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "delivery";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "ID";
$proto22["m_columns"][] = "DrNo";
$proto22["m_columns"][] = "orderID";
$proto22["m_columns"][] = "prodID";
$proto22["m_columns"][] = "qty";
$proto22["m_columns"][] = "eta";
$proto22["m_columns"][] = "delFlag";
$proto22["m_columns"][] = "TimeStamp";
$proto22["m_columns"][] = "staffID";
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
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "eta",
	"m_strTable" => "delivery"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 0;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_delivery = createSqlQuery_delivery();
								$tdatadelivery[".sqlquery"] = $queryData_delivery;

include_once(getabspath("include/delivery_events.php"));
$tableEvents["delivery"] = new eventclass_delivery;
$tdatadelivery[".hasEvents"] = true;

$cipherer = new RunnerCipherer("delivery");

?>