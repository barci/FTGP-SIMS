<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_List_View = array();
	$tdataProduct_List_View[".NumberOfChars"] = 80; 
	$tdataProduct_List_View[".ShortName"] = "Product_List_View";
	$tdataProduct_List_View[".OwnerID"] = "";
	$tdataProduct_List_View[".OriginalTable"] = "product";

//	field labels
$fieldLabelsProduct_List_View = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_List_View["English"] = array();
	$fieldToolTipsProduct_List_View["English"] = array();
	$fieldLabelsProduct_List_View["English"]["Note"] = "Note";
	$fieldToolTipsProduct_List_View["English"]["Note"] = "";
	$fieldLabelsProduct_List_View["English"]["ProdID"] = "Prod ID";
	$fieldToolTipsProduct_List_View["English"]["ProdID"] = "";
	$fieldLabelsProduct_List_View["English"]["CatID"] = "Category";
	$fieldToolTipsProduct_List_View["English"]["CatID"] = "";
	$fieldLabelsProduct_List_View["English"]["SuppID"] = "Supplier";
	$fieldToolTipsProduct_List_View["English"]["SuppID"] = "";
	$fieldLabelsProduct_List_View["English"]["QPerUnit"] = "Quantity per Unit";
	$fieldToolTipsProduct_List_View["English"]["QPerUnit"] = "";
	$fieldLabelsProduct_List_View["English"]["Uweight"] = "Unit Weight";
	$fieldToolTipsProduct_List_View["English"]["Uweight"] = "";
	$fieldLabelsProduct_List_View["English"]["Usize"] = "Unit Size";
	$fieldToolTipsProduct_List_View["English"]["Usize"] = "";
	$fieldLabelsProduct_List_View["English"]["ReOrLevel"] = "Re-Order Level";
	$fieldToolTipsProduct_List_View["English"]["ReOrLevel"] = "";
	$fieldLabelsProduct_List_View["English"]["Product_Name"] = "Product Name";
	$fieldToolTipsProduct_List_View["English"]["Product Name"] = "";
	$fieldLabelsProduct_List_View["English"]["CatName"] = "Cat Name";
	$fieldToolTipsProduct_List_View["English"]["CatName"] = "";
	$fieldLabelsProduct_List_View["English"]["Desc"] = "Desc";
	$fieldToolTipsProduct_List_View["English"]["Desc"] = "";
	$fieldLabelsProduct_List_View["English"]["ProductID"] = "Product ID";
	$fieldToolTipsProduct_List_View["English"]["ProductID"] = "";
	$fieldLabelsProduct_List_View["English"]["UInStock"] = "UIn Stock";
	$fieldToolTipsProduct_List_View["English"]["UInStock"] = "";
	if (count($fieldToolTipsProduct_List_View["English"]))
		$tdataProduct_List_View[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_List_View[".NCSearch"] = true;



$tdataProduct_List_View[".shortTableName"] = "Product_List_View";
$tdataProduct_List_View[".nSecOptions"] = 0;
$tdataProduct_List_View[".recsPerRowList"] = 1;
$tdataProduct_List_View[".mainTableOwnerID"] = "";
$tdataProduct_List_View[".moveNext"] = 1;
$tdataProduct_List_View[".nType"] = 1;

$tdataProduct_List_View[".strOriginalTableName"] = "product";




$tdataProduct_List_View[".showAddInPopup"] = true;

$tdataProduct_List_View[".showEditInPopup"] = true;

$tdataProduct_List_View[".showViewInPopup"] = true;

$tdataProduct_List_View[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataProduct_List_View[".listAjax"] = true;
else 
	$tdataProduct_List_View[".listAjax"] = false;

	$tdataProduct_List_View[".audit"] = false;

	$tdataProduct_List_View[".locking"] = false;

$tdataProduct_List_View[".listIcons"] = true;




$tdataProduct_List_View[".showSimpleSearchOptions"] = false;

$tdataProduct_List_View[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_List_View[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_List_View[".isUseAjaxSuggest"] = true;

$tdataProduct_List_View[".rowHighlite"] = true;

// button handlers file names

$tdataProduct_List_View[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_List_View[".isUseTimeForSearch"] = false;




$tdataProduct_List_View[".allSearchFields"] = array();

$tdataProduct_List_View[".allSearchFields"][] = "ProdID";
$tdataProduct_List_View[".allSearchFields"][] = "Product Name";
$tdataProduct_List_View[".allSearchFields"][] = "CatName";
$tdataProduct_List_View[".allSearchFields"][] = "CatID";
$tdataProduct_List_View[".allSearchFields"][] = "SuppID";
$tdataProduct_List_View[".allSearchFields"][] = "QPerUnit";
$tdataProduct_List_View[".allSearchFields"][] = "Uweight";
$tdataProduct_List_View[".allSearchFields"][] = "Usize";
$tdataProduct_List_View[".allSearchFields"][] = "UInStock";
$tdataProduct_List_View[".allSearchFields"][] = "ReOrLevel";
$tdataProduct_List_View[".allSearchFields"][] = "Desc";
$tdataProduct_List_View[".allSearchFields"][] = "Note";

$tdataProduct_List_View[".googleLikeFields"][] = "ProdID";
$tdataProduct_List_View[".googleLikeFields"][] = "Product Name";
$tdataProduct_List_View[".googleLikeFields"][] = "CatName";
$tdataProduct_List_View[".googleLikeFields"][] = "CatID";
$tdataProduct_List_View[".googleLikeFields"][] = "SuppID";
$tdataProduct_List_View[".googleLikeFields"][] = "QPerUnit";
$tdataProduct_List_View[".googleLikeFields"][] = "Uweight";
$tdataProduct_List_View[".googleLikeFields"][] = "Usize";
$tdataProduct_List_View[".googleLikeFields"][] = "UInStock";
$tdataProduct_List_View[".googleLikeFields"][] = "ReOrLevel";
$tdataProduct_List_View[".googleLikeFields"][] = "Note";
$tdataProduct_List_View[".googleLikeFields"][] = "Desc";


$tdataProduct_List_View[".advSearchFields"][] = "ProdID";
$tdataProduct_List_View[".advSearchFields"][] = "Product Name";
$tdataProduct_List_View[".advSearchFields"][] = "CatName";
$tdataProduct_List_View[".advSearchFields"][] = "CatID";
$tdataProduct_List_View[".advSearchFields"][] = "SuppID";
$tdataProduct_List_View[".advSearchFields"][] = "QPerUnit";
$tdataProduct_List_View[".advSearchFields"][] = "Uweight";
$tdataProduct_List_View[".advSearchFields"][] = "Usize";
$tdataProduct_List_View[".advSearchFields"][] = "UInStock";
$tdataProduct_List_View[".advSearchFields"][] = "ReOrLevel";
$tdataProduct_List_View[".advSearchFields"][] = "Desc";
$tdataProduct_List_View[".advSearchFields"][] = "Note";

$tdataProduct_List_View[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataProduct_List_View[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_List_View[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_List_View[".orderindexes"] = array();

$tdataProduct_List_View[".sqlHead"] = "SELECT product.ProdID,  concat(orderdetail.orderID, ' - ', product.Pname, ' - ', category.CatName, ' - ', product.Usize) AS `Product Name`,  category.CatName,  product.CatID,  product.SuppID,  product.QPerUnit,  product.Uweight,  product.Usize,  product.UInStock,  product.ReOrLevel,  product.Note,  category.`Desc`";
$tdataProduct_List_View[".sqlFrom"] = "FROM orderdetail  , product  , category";
$tdataProduct_List_View[".sqlWhereExpr"] = "(product.CatID =category.catid) AND (orderdetail.ProductID =product.prodID)";
$tdataProduct_List_View[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_List_View[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduct_List_View[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_List_View = array();
$tableKeysProduct_List_View[] = "ProdID";
$tdataProduct_List_View[".Keys"] = $tableKeysProduct_List_View;

$tdataProduct_List_View[".listFields"] = array();
$tdataProduct_List_View[".listFields"][] = "ProdID";
$tdataProduct_List_View[".listFields"][] = "Product Name";
$tdataProduct_List_View[".listFields"][] = "CatName";
$tdataProduct_List_View[".listFields"][] = "CatID";
$tdataProduct_List_View[".listFields"][] = "SuppID";
$tdataProduct_List_View[".listFields"][] = "QPerUnit";
$tdataProduct_List_View[".listFields"][] = "Uweight";
$tdataProduct_List_View[".listFields"][] = "Usize";
$tdataProduct_List_View[".listFields"][] = "UInStock";
$tdataProduct_List_View[".listFields"][] = "ReOrLevel";
$tdataProduct_List_View[".listFields"][] = "Desc";
$tdataProduct_List_View[".listFields"][] = "Note";

$tdataProduct_List_View[".viewFields"] = array();
$tdataProduct_List_View[".viewFields"][] = "ProdID";
$tdataProduct_List_View[".viewFields"][] = "Product Name";
$tdataProduct_List_View[".viewFields"][] = "CatName";
$tdataProduct_List_View[".viewFields"][] = "CatID";
$tdataProduct_List_View[".viewFields"][] = "SuppID";
$tdataProduct_List_View[".viewFields"][] = "QPerUnit";
$tdataProduct_List_View[".viewFields"][] = "Uweight";
$tdataProduct_List_View[".viewFields"][] = "Usize";
$tdataProduct_List_View[".viewFields"][] = "UInStock";
$tdataProduct_List_View[".viewFields"][] = "ReOrLevel";
$tdataProduct_List_View[".viewFields"][] = "Note";
$tdataProduct_List_View[".viewFields"][] = "Desc";

$tdataProduct_List_View[".addFields"] = array();
$tdataProduct_List_View[".addFields"][] = "SuppID";
$tdataProduct_List_View[".addFields"][] = "QPerUnit";
$tdataProduct_List_View[".addFields"][] = "Uweight";
$tdataProduct_List_View[".addFields"][] = "Usize";
$tdataProduct_List_View[".addFields"][] = "UInStock";
$tdataProduct_List_View[".addFields"][] = "ReOrLevel";
$tdataProduct_List_View[".addFields"][] = "CatID";
$tdataProduct_List_View[".addFields"][] = "Note";

$tdataProduct_List_View[".inlineAddFields"] = array();
$tdataProduct_List_View[".inlineAddFields"][] = "ProdID";
$tdataProduct_List_View[".inlineAddFields"][] = "Product Name";
$tdataProduct_List_View[".inlineAddFields"][] = "CatName";
$tdataProduct_List_View[".inlineAddFields"][] = "CatID";
$tdataProduct_List_View[".inlineAddFields"][] = "SuppID";
$tdataProduct_List_View[".inlineAddFields"][] = "QPerUnit";
$tdataProduct_List_View[".inlineAddFields"][] = "Uweight";
$tdataProduct_List_View[".inlineAddFields"][] = "Usize";
$tdataProduct_List_View[".inlineAddFields"][] = "UInStock";
$tdataProduct_List_View[".inlineAddFields"][] = "ReOrLevel";
$tdataProduct_List_View[".inlineAddFields"][] = "Desc";
$tdataProduct_List_View[".inlineAddFields"][] = "Note";

$tdataProduct_List_View[".editFields"] = array();
$tdataProduct_List_View[".editFields"][] = "ProdID";
$tdataProduct_List_View[".editFields"][] = "CatID";
$tdataProduct_List_View[".editFields"][] = "SuppID";
$tdataProduct_List_View[".editFields"][] = "QPerUnit";
$tdataProduct_List_View[".editFields"][] = "Uweight";
$tdataProduct_List_View[".editFields"][] = "Usize";
$tdataProduct_List_View[".editFields"][] = "UInStock";
$tdataProduct_List_View[".editFields"][] = "ReOrLevel";
$tdataProduct_List_View[".editFields"][] = "Note";

$tdataProduct_List_View[".inlineEditFields"] = array();
$tdataProduct_List_View[".inlineEditFields"][] = "ProdID";
$tdataProduct_List_View[".inlineEditFields"][] = "Product Name";
$tdataProduct_List_View[".inlineEditFields"][] = "CatName";
$tdataProduct_List_View[".inlineEditFields"][] = "CatID";
$tdataProduct_List_View[".inlineEditFields"][] = "SuppID";
$tdataProduct_List_View[".inlineEditFields"][] = "QPerUnit";
$tdataProduct_List_View[".inlineEditFields"][] = "Uweight";
$tdataProduct_List_View[".inlineEditFields"][] = "Usize";
$tdataProduct_List_View[".inlineEditFields"][] = "UInStock";
$tdataProduct_List_View[".inlineEditFields"][] = "ReOrLevel";
$tdataProduct_List_View[".inlineEditFields"][] = "Desc";
$tdataProduct_List_View[".inlineEditFields"][] = "Note";

$tdataProduct_List_View[".exportFields"] = array();
$tdataProduct_List_View[".exportFields"][] = "ProdID";
$tdataProduct_List_View[".exportFields"][] = "Product Name";
$tdataProduct_List_View[".exportFields"][] = "CatName";
$tdataProduct_List_View[".exportFields"][] = "CatID";
$tdataProduct_List_View[".exportFields"][] = "SuppID";
$tdataProduct_List_View[".exportFields"][] = "QPerUnit";
$tdataProduct_List_View[".exportFields"][] = "Uweight";
$tdataProduct_List_View[".exportFields"][] = "Usize";
$tdataProduct_List_View[".exportFields"][] = "UInStock";
$tdataProduct_List_View[".exportFields"][] = "ReOrLevel";
$tdataProduct_List_View[".exportFields"][] = "Desc";
$tdataProduct_List_View[".exportFields"][] = "Note";

$tdataProduct_List_View[".printFields"] = array();
$tdataProduct_List_View[".printFields"][] = "Product Name";
$tdataProduct_List_View[".printFields"][] = "CatName";
$tdataProduct_List_View[".printFields"][] = "UInStock";
$tdataProduct_List_View[".printFields"][] = "Desc";
$tdataProduct_List_View[".printFields"][] = "ProdID";
$tdataProduct_List_View[".printFields"][] = "CatID";
$tdataProduct_List_View[".printFields"][] = "SuppID";
$tdataProduct_List_View[".printFields"][] = "QPerUnit";
$tdataProduct_List_View[".printFields"][] = "Uweight";
$tdataProduct_List_View[".printFields"][] = "Usize";
$tdataProduct_List_View[".printFields"][] = "ReOrLevel";
$tdataProduct_List_View[".printFields"][] = "Note";

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
	
		
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ProdID"; 
		$fdata["FullName"] = "product.ProdID";
	
		
		
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
	
		
		
	$tdataProduct_List_View["ProdID"] = $fdata;
//	Product Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Product Name";
	$fdata["GoodName"] = "Product_Name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Product Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Product Name"; 
		$fdata["FullName"] = "concat(orderdetail.orderID, ' - ', product.Pname, ' - ', category.CatName, ' - ', product.Usize)";
	
		
		
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
	
		
		
	$tdataProduct_List_View["Product Name"] = $fdata;
//	CatName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CatName";
	$fdata["GoodName"] = "CatName";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Cat Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "CatName"; 
		$fdata["FullName"] = "category.CatName";
	
		
		
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
	
		
		
	$tdataProduct_List_View["CatName"] = $fdata;
//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Category"; 
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
	
		$fdata["strField"] = "CatID"; 
		$fdata["FullName"] = "product.CatID";
	
		
		
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
	
		
		
	$tdataProduct_List_View["CatID"] = $fdata;
//	SuppID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SuppID";
	$fdata["GoodName"] = "SuppID";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Supplier"; 
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
	
		$fdata["strField"] = "SuppID"; 
		$fdata["FullName"] = "product.SuppID";
	
		
		
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
	
		
		
	$tdataProduct_List_View["SuppID"] = $fdata;
//	QPerUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "QPerUnit";
	$fdata["GoodName"] = "QPerUnit";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Quantity per Unit"; 
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
	
		$fdata["strField"] = "QPerUnit"; 
		$fdata["FullName"] = "product.QPerUnit";
	
		
		
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
	
		
		
	$tdataProduct_List_View["QPerUnit"] = $fdata;
//	Uweight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Uweight";
	$fdata["GoodName"] = "Uweight";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Weight"; 
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
	
		$fdata["strField"] = "Uweight"; 
		$fdata["FullName"] = "product.Uweight";
	
		
		
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
	
		
		
	$tdataProduct_List_View["Uweight"] = $fdata;
//	Usize
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Usize";
	$fdata["GoodName"] = "Usize";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Size"; 
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
	
		$fdata["strField"] = "Usize"; 
		$fdata["FullName"] = "product.Usize";
	
		
		
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
	
		
		
	$tdataProduct_List_View["Usize"] = $fdata;
//	UInStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "UInStock";
	$fdata["GoodName"] = "UInStock";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "UIn Stock"; 
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
	
		$fdata["strField"] = "UInStock"; 
		$fdata["FullName"] = "product.UInStock";
	
		
		
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
	
		
		
	$tdataProduct_List_View["UInStock"] = $fdata;
//	ReOrLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ReOrLevel";
	$fdata["GoodName"] = "ReOrLevel";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Re-Order Level"; 
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
	
		$fdata["strField"] = "ReOrLevel"; 
		$fdata["FullName"] = "product.ReOrLevel";
	
		
		
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
	
		
		
	$tdataProduct_List_View["ReOrLevel"] = $fdata;
//	Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Note";
	$fdata["GoodName"] = "Note";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Note"; 
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
	
		$fdata["strField"] = "Note"; 
		$fdata["FullName"] = "product.Note";
	
		
		
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
	
		
		
	$tdataProduct_List_View["Note"] = $fdata;
//	Desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Desc";
	$fdata["GoodName"] = "Desc";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Desc"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Desc"; 
		$fdata["FullName"] = "category.`Desc`";
	
		
		
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
	
		
		
	$tdataProduct_List_View["Desc"] = $fdata;

	
$tables_data["Product List View"]=&$tdataProduct_List_View;
$field_labels["Product_List_View"] = &$fieldLabelsProduct_List_View;
$fieldToolTips["Product List View"] = &$fieldToolTipsProduct_List_View;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product List View"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product List View"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_List_View()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product.ProdID,  concat(orderdetail.orderID, ' - ', product.Pname, ' - ', category.CatName, ' - ', product.Usize) AS `Product Name`,  category.CatName,  product.CatID,  product.SuppID,  product.QPerUnit,  product.Uweight,  product.Usize,  product.UInStock,  product.ReOrLevel,  product.Note,  category.`Desc`";
$proto0["m_strFrom"] = "FROM orderdetail  , product  , category";
$proto0["m_strWhere"] = "(product.CatID =category.catid) AND (orderdetail.ProductID =product.prodID)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(product.CatID =category.catid) AND (orderdetail.ProductID =product.prodID)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(product.CatID =category.catid) AND (orderdetail.ProductID =product.prodID)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "product.CatID =category.catid";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "product"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "=category.catid";
$proto3["m_havingmode"] = "0";
$proto3["m_inBrackets"] = "1";
$proto3["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "orderdetail.ProductID =product.prodID";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ProductID",
	"m_strTable" => "orderdetail"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "=product.prodID";
$proto5["m_havingmode"] = "0";
$proto5["m_inBrackets"] = "1";
$proto5["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = "0";
$proto1["m_inBrackets"] = "0";
$proto1["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = "0";
$proto7["m_inBrackets"] = "0";
$proto7["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "ProdID",
	"m_strTable" => "product"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "orderdetail.orderID"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "product.Pname"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "category.CatName"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "product.Usize"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto12);

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Product Name";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CatName",
	"m_strTable" => "category"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "product"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SuppID",
	"m_strTable" => "product"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "QPerUnit",
	"m_strTable" => "product"
));

$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Uweight",
	"m_strTable" => "product"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Usize",
	"m_strTable" => "product"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "UInStock",
	"m_strTable" => "product"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ReOrLevel",
	"m_strTable" => "product"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Note",
	"m_strTable" => "product"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc",
	"m_strTable" => "category"
));

$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "orderdetail";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ODetailID";
$proto41["m_columns"][] = "OrderID";
$proto41["m_columns"][] = "BillNo";
$proto41["m_columns"][] = "ProductID";
$proto41["m_columns"][] = "UPrice";
$proto41["m_columns"][] = "OrdQuant";
$proto41["m_columns"][] = "DelQuant";
$proto41["m_columns"][] = "Discount";
$proto41["m_columns"][] = "Total";
$proto41["m_columns"][] = "DelDate";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_alias"] = "";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = "0";
$proto42["m_inBrackets"] = "0";
$proto42["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_CROSSJOIN";
			$proto45=array();
$proto45["m_strName"] = "product";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "ProdID";
$proto45["m_columns"][] = "Pname";
$proto45["m_columns"][] = "CatID";
$proto45["m_columns"][] = "SuppID";
$proto45["m_columns"][] = "QPerUnit";
$proto45["m_columns"][] = "Uprice";
$proto45["m_columns"][] = "USP";
$proto45["m_columns"][] = "Uweight";
$proto45["m_columns"][] = "Usize";
$proto45["m_columns"][] = "Discount";
$proto45["m_columns"][] = "UInStock";
$proto45["m_columns"][] = "UInOrder";
$proto45["m_columns"][] = "ReOrLevel";
$proto45["m_columns"][] = "Note";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_alias"] = "";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = "0";
$proto46["m_inBrackets"] = "0";
$proto46["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_CROSSJOIN";
			$proto49=array();
$proto49["m_strName"] = "category";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "CatID";
$proto49["m_columns"][] = "CatName";
$proto49["m_columns"][] = "Desc";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_alias"] = "";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = "0";
$proto50["m_inBrackets"] = "0";
$proto50["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Product_List_View = createSqlQuery_Product_List_View();
												$tdataProduct_List_View[".sqlquery"] = $queryData_Product_List_View;

$tableEvents["Product List View"] = new eventsBase;
$tdataProduct_List_View[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Product List View");

?>