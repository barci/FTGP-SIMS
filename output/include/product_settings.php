<?php
require_once(getabspath("classes/cipherer.php"));
$tdataproduct = array();
	$tdataproduct[".NumberOfChars"] = 80; 
	$tdataproduct[".ShortName"] = "product";
	$tdataproduct[".OwnerID"] = "";
	$tdataproduct[".OriginalTable"] = "product";

//	field labels
$fieldLabelsproduct = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproduct["English"] = array();
	$fieldToolTipsproduct["English"] = array();
	$fieldLabelsproduct["English"]["Note"] = "Note";
	$fieldToolTipsproduct["English"]["Note"] = "";
	$fieldLabelsproduct["English"]["ProdID"] = "Prod ID";
	$fieldToolTipsproduct["English"]["ProdID"] = "";
	$fieldLabelsproduct["English"]["Pname"] = "Product Name";
	$fieldToolTipsproduct["English"]["Pname"] = "";
	$fieldLabelsproduct["English"]["CatID"] = "Category";
	$fieldToolTipsproduct["English"]["CatID"] = "";
	$fieldLabelsproduct["English"]["SuppID"] = "Supplier";
	$fieldToolTipsproduct["English"]["SuppID"] = "";
	$fieldLabelsproduct["English"]["QPerUnit"] = "Quantity per Unit";
	$fieldToolTipsproduct["English"]["QPerUnit"] = "";
	$fieldLabelsproduct["English"]["Uprice"] = "Unit Price";
	$fieldToolTipsproduct["English"]["Uprice"] = "";
	$fieldLabelsproduct["English"]["USP"] = "Unit Selling Price";
	$fieldToolTipsproduct["English"]["USP"] = "";
	$fieldLabelsproduct["English"]["Uweight"] = "Unit Weight";
	$fieldToolTipsproduct["English"]["Uweight"] = "";
	$fieldLabelsproduct["English"]["Usize"] = "Unit Size";
	$fieldToolTipsproduct["English"]["Usize"] = "";
	$fieldLabelsproduct["English"]["Discount"] = "Discount";
	$fieldToolTipsproduct["English"]["Discount"] = "";
	$fieldLabelsproduct["English"]["ReOrLevel"] = "Re-Order Level";
	$fieldToolTipsproduct["English"]["ReOrLevel"] = "";
	$fieldLabelsproduct["English"]["UInStock"] = "Units In Stock";
	$fieldToolTipsproduct["English"]["UInStock"] = "";
	$fieldLabelsproduct["English"]["UInOrder"] = "Units In Order";
	$fieldToolTipsproduct["English"]["UInOrder"] = "";
	$fieldLabelsproduct["English"]["Qty"] = "Available Quantity (pcs)";
	$fieldToolTipsproduct["English"]["Qty"] = "";
	$fieldLabelsproduct["English"]["ProdNo"] = "Product Number";
	$fieldToolTipsproduct["English"]["ProdNo"] = "";
	$fieldLabelsproduct["English"]["staffID"] = "Staff ID";
	$fieldToolTipsproduct["English"]["staffID"] = "";
	if (count($fieldToolTipsproduct["English"]))
		$tdataproduct[".isUseToolTips"] = true;
}
	
	
	$tdataproduct[".NCSearch"] = true;



$tdataproduct[".shortTableName"] = "product";
$tdataproduct[".nSecOptions"] = 0;
$tdataproduct[".recsPerRowList"] = 1;
$tdataproduct[".mainTableOwnerID"] = "";
$tdataproduct[".moveNext"] = 1;
$tdataproduct[".nType"] = 0;

$tdataproduct[".strOriginalTableName"] = "product";




$tdataproduct[".showAddInPopup"] = true;

$tdataproduct[".showEditInPopup"] = true;

$tdataproduct[".showViewInPopup"] = true;

$tdataproduct[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataproduct[".listAjax"] = true;
else 
	$tdataproduct[".listAjax"] = false;

	$tdataproduct[".audit"] = false;

	$tdataproduct[".locking"] = false;

$tdataproduct[".listIcons"] = true;
$tdataproduct[".inlineEdit"] = true;
$tdataproduct[".inlineAdd"] = true;


$tdataproduct[".printFriendly"] = true;


$tdataproduct[".showSimpleSearchOptions"] = false;

$tdataproduct[".showSearchPanel"] = true;

if (isMobile())
	$tdataproduct[".isUseAjaxSuggest"] = false;
else 
	$tdataproduct[".isUseAjaxSuggest"] = true;

$tdataproduct[".rowHighlite"] = true;

// button handlers file names

$tdataproduct[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproduct[".isUseTimeForSearch"] = false;



$tdataproduct[".useDetailsPreview"] = true;

$tdataproduct[".allSearchFields"] = array();

$tdataproduct[".allSearchFields"][] = "ProdNo";
$tdataproduct[".allSearchFields"][] = "Pname";
$tdataproduct[".allSearchFields"][] = "CatID";
$tdataproduct[".allSearchFields"][] = "Usize";
$tdataproduct[".allSearchFields"][] = "SuppID";
$tdataproduct[".allSearchFields"][] = "Uweight";
$tdataproduct[".allSearchFields"][] = "ReOrLevel";
$tdataproduct[".allSearchFields"][] = "QPerUnit";
$tdataproduct[".allSearchFields"][] = "Qty";
$tdataproduct[".allSearchFields"][] = "Uprice";
$tdataproduct[".allSearchFields"][] = "Note";
$tdataproduct[".allSearchFields"][] = "USP";
$tdataproduct[".allSearchFields"][] = "staffID";
$tdataproduct[".allSearchFields"][] = "Discount";

$tdataproduct[".googleLikeFields"][] = "ProdID";
$tdataproduct[".googleLikeFields"][] = "Pname";
$tdataproduct[".googleLikeFields"][] = "CatID";
$tdataproduct[".googleLikeFields"][] = "SuppID";
$tdataproduct[".googleLikeFields"][] = "QPerUnit";
$tdataproduct[".googleLikeFields"][] = "Uprice";
$tdataproduct[".googleLikeFields"][] = "USP";
$tdataproduct[".googleLikeFields"][] = "Uweight";
$tdataproduct[".googleLikeFields"][] = "Usize";
$tdataproduct[".googleLikeFields"][] = "Discount";
$tdataproduct[".googleLikeFields"][] = "UInStock";
$tdataproduct[".googleLikeFields"][] = "Qty";
$tdataproduct[".googleLikeFields"][] = "UInOrder";
$tdataproduct[".googleLikeFields"][] = "ReOrLevel";
$tdataproduct[".googleLikeFields"][] = "Note";
$tdataproduct[".googleLikeFields"][] = "ProdNo";
$tdataproduct[".googleLikeFields"][] = "staffID";


$tdataproduct[".advSearchFields"][] = "ProdNo";
$tdataproduct[".advSearchFields"][] = "Pname";
$tdataproduct[".advSearchFields"][] = "CatID";
$tdataproduct[".advSearchFields"][] = "Usize";
$tdataproduct[".advSearchFields"][] = "SuppID";
$tdataproduct[".advSearchFields"][] = "Uweight";
$tdataproduct[".advSearchFields"][] = "ReOrLevel";
$tdataproduct[".advSearchFields"][] = "QPerUnit";
$tdataproduct[".advSearchFields"][] = "Qty";
$tdataproduct[".advSearchFields"][] = "Uprice";
$tdataproduct[".advSearchFields"][] = "Note";
$tdataproduct[".advSearchFields"][] = "USP";
$tdataproduct[".advSearchFields"][] = "staffID";
$tdataproduct[".advSearchFields"][] = "Discount";

$tdataproduct[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataproduct[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproduct[".strOrderBy"] = $tstrOrderBy;

$tdataproduct[".orderindexes"] = array();

$tdataproduct[".sqlHead"] = "SELECT ProdID,  Pname,  CatID,  SuppID,  QPerUnit,  Uprice,  USP,  Uweight,  Usize,  Discount,  UInStock,  format((Qperunit*uinstock), 0) AS Qty,  UInOrder,  ReOrLevel,  Note,  ProdNo,  staffID";
$tdataproduct[".sqlFrom"] = "FROM product";
$tdataproduct[".sqlWhereExpr"] = "";
$tdataproduct[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproduct[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproduct[".arrGroupsPerPage"] = $arrGPP;

$tableKeysproduct = array();
$tableKeysproduct[] = "ProdID";
$tdataproduct[".Keys"] = $tableKeysproduct;

$tdataproduct[".listFields"] = array();
$tdataproduct[".listFields"][] = "ProdID";
$tdataproduct[".listFields"][] = "ProdNo";
$tdataproduct[".listFields"][] = "Pname";
$tdataproduct[".listFields"][] = "CatID";
$tdataproduct[".listFields"][] = "Usize";
$tdataproduct[".listFields"][] = "SuppID";
$tdataproduct[".listFields"][] = "Uweight";
$tdataproduct[".listFields"][] = "UInStock";
$tdataproduct[".listFields"][] = "UInOrder";
$tdataproduct[".listFields"][] = "ReOrLevel";
$tdataproduct[".listFields"][] = "QPerUnit";
$tdataproduct[".listFields"][] = "Qty";
$tdataproduct[".listFields"][] = "Note";
$tdataproduct[".listFields"][] = "staffID";

$tdataproduct[".viewFields"] = array();

$tdataproduct[".addFields"] = array();
$tdataproduct[".addFields"][] = "ProdNo";
$tdataproduct[".addFields"][] = "Pname";
$tdataproduct[".addFields"][] = "CatID";
$tdataproduct[".addFields"][] = "Usize";
$tdataproduct[".addFields"][] = "SuppID";
$tdataproduct[".addFields"][] = "Uweight";
$tdataproduct[".addFields"][] = "UInStock";
$tdataproduct[".addFields"][] = "ReOrLevel";
$tdataproduct[".addFields"][] = "QPerUnit";
$tdataproduct[".addFields"][] = "Qty";
$tdataproduct[".addFields"][] = "Note";
$tdataproduct[".addFields"][] = "staffID";

$tdataproduct[".inlineAddFields"] = array();
$tdataproduct[".inlineAddFields"][] = "ProdNo";
$tdataproduct[".inlineAddFields"][] = "Pname";
$tdataproduct[".inlineAddFields"][] = "CatID";
$tdataproduct[".inlineAddFields"][] = "Usize";
$tdataproduct[".inlineAddFields"][] = "SuppID";
$tdataproduct[".inlineAddFields"][] = "Uweight";
$tdataproduct[".inlineAddFields"][] = "UInStock";
$tdataproduct[".inlineAddFields"][] = "ReOrLevel";
$tdataproduct[".inlineAddFields"][] = "QPerUnit";
$tdataproduct[".inlineAddFields"][] = "Qty";
$tdataproduct[".inlineAddFields"][] = "Note";
$tdataproduct[".inlineAddFields"][] = "staffID";

$tdataproduct[".editFields"] = array();

$tdataproduct[".inlineEditFields"] = array();
$tdataproduct[".inlineEditFields"][] = "ProdNo";
$tdataproduct[".inlineEditFields"][] = "Pname";
$tdataproduct[".inlineEditFields"][] = "CatID";
$tdataproduct[".inlineEditFields"][] = "Usize";
$tdataproduct[".inlineEditFields"][] = "SuppID";
$tdataproduct[".inlineEditFields"][] = "Uweight";
$tdataproduct[".inlineEditFields"][] = "ReOrLevel";
$tdataproduct[".inlineEditFields"][] = "Note";

$tdataproduct[".exportFields"] = array();

$tdataproduct[".printFields"] = array();
$tdataproduct[".printFields"][] = "ProdID";
$tdataproduct[".printFields"][] = "ProdNo";
$tdataproduct[".printFields"][] = "Pname";
$tdataproduct[".printFields"][] = "CatID";
$tdataproduct[".printFields"][] = "Usize";
$tdataproduct[".printFields"][] = "SuppID";
$tdataproduct[".printFields"][] = "Uweight";
$tdataproduct[".printFields"][] = "ReOrLevel";
$tdataproduct[".printFields"][] = "QPerUnit";
$tdataproduct[".printFields"][] = "Qty";
$tdataproduct[".printFields"][] = "Note";
$tdataproduct[".printFields"][] = "Uprice";
$tdataproduct[".printFields"][] = "staffID";
$tdataproduct[".printFields"][] = "USP";
$tdataproduct[".printFields"][] = "Discount";

//	ProdID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ProdID";
	$fdata["GoodName"] = "ProdID";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Prod ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ProdID"; 
		$fdata["FullName"] = "ProdID";
	
		
		
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
	
		
		
	$tdataproduct["ProdID"] = $fdata;
//	Pname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Pname";
	$fdata["GoodName"] = "Pname";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Product Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Pname"; 
		$fdata["FullName"] = "Pname";
	
		
		
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
	
	$edata["LinkField"] = "Pname";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "Pname";
	
		
	$edata["LookupTable"] = "product";
	$edata["LookupOrderBy"] = "Pname";
	
		
		
		
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
	
		
		
	$tdataproduct["Pname"] = $fdata;
//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Category"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "CatID"; 
		$fdata["FullName"] = "CatID";
	
		
		
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
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "CatID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CatName";
	
		
	$edata["LookupTable"] = "category";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		$edata["FastType"] = true; 
	
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataproduct["CatID"] = $fdata;
//	SuppID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SuppID";
	$fdata["GoodName"] = "SuppID";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Supplier"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "SuppID"; 
		$fdata["FullName"] = "SuppID";
	
		
		
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
	
		$edata["AllowToAdd"] = true; 
	
				
	
	
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
	
		
		
	$tdataproduct["SuppID"] = $fdata;
//	QPerUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "QPerUnit";
	$fdata["GoodName"] = "QPerUnit";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Quantity per Unit"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "QPerUnit"; 
		$fdata["FullName"] = "QPerUnit";
	
		
		
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
	
		
		
	$tdataproduct["QPerUnit"] = $fdata;
//	Uprice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Uprice";
	$fdata["GoodName"] = "Uprice";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Price"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Uprice"; 
		$fdata["FullName"] = "Uprice";
	
		
		
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
	
		
		
	$tdataproduct["Uprice"] = $fdata;
//	USP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "USP";
	$fdata["GoodName"] = "USP";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Selling Price"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "USP"; 
		$fdata["FullName"] = "USP";
	
		
		
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
	
		
		
	$tdataproduct["USP"] = $fdata;
//	Uweight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Uweight";
	$fdata["GoodName"] = "Uweight";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Weight"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Uweight"; 
		$fdata["FullName"] = "Uweight";
	
		
		
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
	
		
		
	$tdataproduct["Uweight"] = $fdata;
//	Usize
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Usize";
	$fdata["GoodName"] = "Usize";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Size"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Usize"; 
		$fdata["FullName"] = "Usize";
	
		
		
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
	
		
		
	$tdataproduct["Usize"] = $fdata;
//	Discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Discount";
	$fdata["GoodName"] = "Discount";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Discount"; 
	$fdata["FieldType"] = 3;
	
		
		
		
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Discount"; 
		$fdata["FullName"] = "Discount";
	
		
		
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
	
		
		
	$tdataproduct["Discount"] = $fdata;
//	UInStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "UInStock";
	$fdata["GoodName"] = "UInStock";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Units In Stock"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		
		
		
		$fdata["strField"] = "UInStock"; 
		$fdata["FullName"] = "UInStock";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Custom");
	
		
		
		
			
		
		
		
		
		
		
		
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
	
		
		
	$tdataproduct["UInStock"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Available Quantity (pcs)"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Qty"; 
		$fdata["FullName"] = "format((Qperunit*uinstock), 0)";
	
		
		
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
	
		
		
	$tdataproduct["Qty"] = $fdata;
//	UInOrder
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UInOrder";
	$fdata["GoodName"] = "UInOrder";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Units In Order"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		
		
		
		$fdata["strField"] = "UInOrder"; 
		$fdata["FullName"] = "UInOrder";
	
		
		
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
	
		
		
	$tdataproduct["UInOrder"] = $fdata;
//	ReOrLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ReOrLevel";
	$fdata["GoodName"] = "ReOrLevel";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Re-Order Level"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ReOrLevel"; 
		$fdata["FullName"] = "ReOrLevel";
	
		
		
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
	
		
		
	$tdataproduct["ReOrLevel"] = $fdata;
//	Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Note";
	$fdata["GoodName"] = "Note";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Note"; 
		$fdata["FullName"] = "Note";
	
		
		
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
	
		
		
	$tdataproduct["Note"] = $fdata;
//	ProdNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ProdNo";
	$fdata["GoodName"] = "ProdNo";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Product Number"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "ProdNo"; 
		$fdata["FullName"] = "ProdNo";
	
		
		
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
	
		
		
	$tdataproduct["ProdNo"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "product";
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
	
		
		
	$tdataproduct["staffID"] = $fdata;

	
$tables_data["product"]=&$tdataproduct;
$field_labels["product"] = &$fieldLabelsproduct;
$fieldToolTips["product"] = &$fieldToolTipsproduct;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["product"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="stockrequest";
	$detailsParam["dDataSourceTable"]="stockrequest";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="stockrequest";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["product"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["product"][$dIndex]["masterKeys"][]="ProdID";
		$detailsTablesData["product"][$dIndex]["detailKeys"][]="ProductID";

	
// tables which are master tables for current table (detail)
$masterTablesData["product"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="category";
	$masterParams["mDataSourceTable"]="category";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "category";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterTablesData["product"][$mIndex] = $masterParams;	
		$masterTablesData["product"][$mIndex]["masterKeys"][]="CatID";
		$masterTablesData["product"][$mIndex]["detailKeys"][]="CatID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_product()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ProdID,  Pname,  CatID,  SuppID,  QPerUnit,  Uprice,  USP,  Uweight,  Usize,  Discount,  UInStock,  format((Qperunit*uinstock), 0) AS Qty,  UInOrder,  ReOrLevel,  Note,  ProdNo,  staffID";
$proto0["m_strFrom"] = "FROM product";
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
	"m_strName" => "ProdID",
	"m_strTable" => "product"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Pname",
	"m_strTable" => "product"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "product"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "SuppID",
	"m_strTable" => "product"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "QPerUnit",
	"m_strTable" => "product"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Uprice",
	"m_strTable" => "product"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "USP",
	"m_strTable" => "product"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Uweight",
	"m_strTable" => "product"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Usize",
	"m_strTable" => "product"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Discount",
	"m_strTable" => "product"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "UInStock",
	"m_strTable" => "product"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "(Qperunit*uinstock)"
));

$proto28["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "format";
$obj = new SQLFunctionCall($proto28);

$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "Qty";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "UInOrder",
	"m_strTable" => "product"
));

$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "ReOrLevel",
	"m_strTable" => "product"
));

$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Note",
	"m_strTable" => "product"
));

$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdNo",
	"m_strTable" => "product"
));

$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "product"
));

$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto41=array();
$proto41["m_link"] = "SQLL_MAIN";
			$proto42=array();
$proto42["m_strName"] = "product";
$proto42["m_columns"] = array();
$proto42["m_columns"][] = "ProdID";
$proto42["m_columns"][] = "ProdNo";
$proto42["m_columns"][] = "Pname";
$proto42["m_columns"][] = "CatID";
$proto42["m_columns"][] = "SuppID";
$proto42["m_columns"][] = "QPerUnit";
$proto42["m_columns"][] = "Uprice";
$proto42["m_columns"][] = "USP";
$proto42["m_columns"][] = "Uweight";
$proto42["m_columns"][] = "Usize";
$proto42["m_columns"][] = "Discount";
$proto42["m_columns"][] = "UInStock";
$proto42["m_columns"][] = "UInOrder";
$proto42["m_columns"][] = "ReOrLevel";
$proto42["m_columns"][] = "Note";
$proto42["m_columns"][] = "TimeStamp";
$proto42["m_columns"][] = "staffID";
$obj = new SQLTable($proto42);

$proto41["m_table"] = $obj;
$proto41["m_alias"] = "";
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = "0";
$proto43["m_inBrackets"] = "0";
$proto43["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto43);

$proto41["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto41);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_product = createSqlQuery_product();
																	$tdataproduct[".sqlquery"] = $queryData_product;

$tableEvents["product"] = new eventsBase;
$tdataproduct[".hasEvents"] = false;

$cipherer = new RunnerCipherer("product");

?>