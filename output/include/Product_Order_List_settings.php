<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_Order_List = array();
	$tdataProduct_Order_List[".NumberOfChars"] = 80; 
	$tdataProduct_Order_List[".ShortName"] = "Product_Order_List";
	$tdataProduct_Order_List[".OwnerID"] = "";
	$tdataProduct_Order_List[".OriginalTable"] = "product";

//	field labels
$fieldLabelsProduct_Order_List = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_Order_List["English"] = array();
	$fieldToolTipsProduct_Order_List["English"] = array();
	$fieldLabelsProduct_Order_List["English"]["Note"] = "Note";
	$fieldToolTipsProduct_Order_List["English"]["Note"] = "";
	$fieldLabelsProduct_Order_List["English"]["ProdID"] = "Prod ID";
	$fieldToolTipsProduct_Order_List["English"]["ProdID"] = "";
	$fieldLabelsProduct_Order_List["English"]["CatID"] = "Category";
	$fieldToolTipsProduct_Order_List["English"]["CatID"] = "";
	$fieldLabelsProduct_Order_List["English"]["SuppID"] = "Supplier";
	$fieldToolTipsProduct_Order_List["English"]["SuppID"] = "";
	$fieldLabelsProduct_Order_List["English"]["QPerUnit"] = "Quantity per Unit";
	$fieldToolTipsProduct_Order_List["English"]["QPerUnit"] = "";
	$fieldLabelsProduct_Order_List["English"]["Uweight"] = "Unit Weight";
	$fieldToolTipsProduct_Order_List["English"]["Uweight"] = "";
	$fieldLabelsProduct_Order_List["English"]["Usize"] = "Unit Size";
	$fieldToolTipsProduct_Order_List["English"]["Usize"] = "";
	$fieldLabelsProduct_Order_List["English"]["ReOrLevel"] = "Re-Order Level";
	$fieldToolTipsProduct_Order_List["English"]["ReOrLevel"] = "";
	$fieldLabelsProduct_Order_List["English"]["Product_Name"] = "Product Name";
	$fieldToolTipsProduct_Order_List["English"]["Product Name"] = "";
	$fieldLabelsProduct_Order_List["English"]["Desc"] = "Desc";
	$fieldToolTipsProduct_Order_List["English"]["Desc"] = "";
	$fieldLabelsProduct_Order_List["English"]["ProductID"] = "Product ID";
	$fieldToolTipsProduct_Order_List["English"]["ProductID"] = "";
	$fieldLabelsProduct_Order_List["English"]["UInStock"] = "UIn Stock";
	$fieldToolTipsProduct_Order_List["English"]["UInStock"] = "";
	if (count($fieldToolTipsProduct_Order_List["English"]))
		$tdataProduct_Order_List[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_Order_List[".NCSearch"] = true;



$tdataProduct_Order_List[".shortTableName"] = "Product_Order_List";
$tdataProduct_Order_List[".nSecOptions"] = 0;
$tdataProduct_Order_List[".recsPerRowList"] = 1;
$tdataProduct_Order_List[".mainTableOwnerID"] = "";
$tdataProduct_Order_List[".moveNext"] = 1;
$tdataProduct_Order_List[".nType"] = 1;

$tdataProduct_Order_List[".strOriginalTableName"] = "product";




$tdataProduct_Order_List[".showAddInPopup"] = true;

$tdataProduct_Order_List[".showEditInPopup"] = true;

$tdataProduct_Order_List[".showViewInPopup"] = true;

$tdataProduct_Order_List[".fieldsForRegister"] = array();

if (!isMobile())
	$tdataProduct_Order_List[".listAjax"] = true;
else 
	$tdataProduct_Order_List[".listAjax"] = false;

	$tdataProduct_Order_List[".audit"] = false;

	$tdataProduct_Order_List[".locking"] = false;

$tdataProduct_Order_List[".listIcons"] = true;




$tdataProduct_Order_List[".showSimpleSearchOptions"] = false;

$tdataProduct_Order_List[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_Order_List[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_Order_List[".isUseAjaxSuggest"] = true;

$tdataProduct_Order_List[".rowHighlite"] = true;

// button handlers file names

$tdataProduct_Order_List[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_Order_List[".isUseTimeForSearch"] = false;




$tdataProduct_Order_List[".allSearchFields"] = array();

$tdataProduct_Order_List[".allSearchFields"][] = "ProdID";
$tdataProduct_Order_List[".allSearchFields"][] = "Product Name";
$tdataProduct_Order_List[".allSearchFields"][] = "CatID";
$tdataProduct_Order_List[".allSearchFields"][] = "SuppID";
$tdataProduct_Order_List[".allSearchFields"][] = "QPerUnit";
$tdataProduct_Order_List[".allSearchFields"][] = "Uweight";
$tdataProduct_Order_List[".allSearchFields"][] = "Usize";
$tdataProduct_Order_List[".allSearchFields"][] = "UInStock";
$tdataProduct_Order_List[".allSearchFields"][] = "ReOrLevel";
$tdataProduct_Order_List[".allSearchFields"][] = "Desc";
$tdataProduct_Order_List[".allSearchFields"][] = "Note";

$tdataProduct_Order_List[".googleLikeFields"][] = "ProdID";
$tdataProduct_Order_List[".googleLikeFields"][] = "Product Name";
$tdataProduct_Order_List[".googleLikeFields"][] = "CatID";
$tdataProduct_Order_List[".googleLikeFields"][] = "SuppID";
$tdataProduct_Order_List[".googleLikeFields"][] = "QPerUnit";
$tdataProduct_Order_List[".googleLikeFields"][] = "Uweight";
$tdataProduct_Order_List[".googleLikeFields"][] = "Usize";
$tdataProduct_Order_List[".googleLikeFields"][] = "UInStock";
$tdataProduct_Order_List[".googleLikeFields"][] = "ReOrLevel";
$tdataProduct_Order_List[".googleLikeFields"][] = "Note";
$tdataProduct_Order_List[".googleLikeFields"][] = "Desc";


$tdataProduct_Order_List[".advSearchFields"][] = "ProdID";
$tdataProduct_Order_List[".advSearchFields"][] = "Product Name";
$tdataProduct_Order_List[".advSearchFields"][] = "CatID";
$tdataProduct_Order_List[".advSearchFields"][] = "SuppID";
$tdataProduct_Order_List[".advSearchFields"][] = "QPerUnit";
$tdataProduct_Order_List[".advSearchFields"][] = "Uweight";
$tdataProduct_Order_List[".advSearchFields"][] = "Usize";
$tdataProduct_Order_List[".advSearchFields"][] = "UInStock";
$tdataProduct_Order_List[".advSearchFields"][] = "ReOrLevel";
$tdataProduct_Order_List[".advSearchFields"][] = "Desc";
$tdataProduct_Order_List[".advSearchFields"][] = "Note";

$tdataProduct_Order_List[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataProduct_Order_List[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_Order_List[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_Order_List[".orderindexes"] = array();

$tdataProduct_Order_List[".sqlHead"] = "SELECT product.ProdID,  concat(orderdetail.orderID, ' - ', product.Pname, ' - ', category.CatName, ' - ', product.Usize) AS `Product Name`,  product.CatID,  product.SuppID,  product.QPerUnit,  product.Uweight,  product.Usize,  product.UInStock,  product.ReOrLevel,  product.Note,  category.`Desc`";
$tdataProduct_Order_List[".sqlFrom"] = "FROM orderdetail  , product  , category";
$tdataProduct_Order_List[".sqlWhereExpr"] = "(product.CatID =category.catid) AND (orderdetail.ProductID =product.prodID)";
$tdataProduct_Order_List[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_Order_List[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduct_Order_List[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_Order_List = array();
$tableKeysProduct_Order_List[] = "ProdID";
$tdataProduct_Order_List[".Keys"] = $tableKeysProduct_Order_List;

$tdataProduct_Order_List[".listFields"] = array();
$tdataProduct_Order_List[".listFields"][] = "ProdID";
$tdataProduct_Order_List[".listFields"][] = "Product Name";
$tdataProduct_Order_List[".listFields"][] = "CatID";
$tdataProduct_Order_List[".listFields"][] = "SuppID";
$tdataProduct_Order_List[".listFields"][] = "QPerUnit";
$tdataProduct_Order_List[".listFields"][] = "Uweight";
$tdataProduct_Order_List[".listFields"][] = "Usize";
$tdataProduct_Order_List[".listFields"][] = "UInStock";
$tdataProduct_Order_List[".listFields"][] = "ReOrLevel";
$tdataProduct_Order_List[".listFields"][] = "Desc";
$tdataProduct_Order_List[".listFields"][] = "Note";

$tdataProduct_Order_List[".viewFields"] = array();

$tdataProduct_Order_List[".addFields"] = array();
$tdataProduct_Order_List[".addFields"][] = "SuppID";
$tdataProduct_Order_List[".addFields"][] = "QPerUnit";
$tdataProduct_Order_List[".addFields"][] = "Uweight";
$tdataProduct_Order_List[".addFields"][] = "Usize";
$tdataProduct_Order_List[".addFields"][] = "UInStock";
$tdataProduct_Order_List[".addFields"][] = "ReOrLevel";
$tdataProduct_Order_List[".addFields"][] = "CatID";
$tdataProduct_Order_List[".addFields"][] = "Note";

$tdataProduct_Order_List[".inlineAddFields"] = array();

$tdataProduct_Order_List[".editFields"] = array();

$tdataProduct_Order_List[".inlineEditFields"] = array();

$tdataProduct_Order_List[".exportFields"] = array();

$tdataProduct_Order_List[".printFields"] = array();

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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["ProdID"] = $fdata;
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
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["Product Name"] = $fdata;
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
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["CatID"] = $fdata;
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
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["SuppID"] = $fdata;
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
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["QPerUnit"] = $fdata;
//	Uweight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Uweight";
	$fdata["GoodName"] = "Uweight";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Weight"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["Uweight"] = $fdata;
//	Usize
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Usize";
	$fdata["GoodName"] = "Usize";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Size"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["Usize"] = $fdata;
//	UInStock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "UInStock";
	$fdata["GoodName"] = "UInStock";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "UIn Stock"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["UInStock"] = $fdata;
//	ReOrLevel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ReOrLevel";
	$fdata["GoodName"] = "ReOrLevel";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Re-Order Level"; 
	$fdata["FieldType"] = 3;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["ReOrLevel"] = $fdata;
//	Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Note";
	$fdata["GoodName"] = "Note";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["Note"] = $fdata;
//	Desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Desc";
	$fdata["GoodName"] = "Desc";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Desc"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataProduct_Order_List["Desc"] = $fdata;

	
$tables_data["Product-Order List"]=&$tdataProduct_Order_List;
$field_labels["Product_Order_List"] = &$fieldLabelsProduct_Order_List;
$fieldToolTips["Product-Order List"] = &$fieldToolTipsProduct_Order_List;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product-Order List"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product-Order List"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_Order_List()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product.ProdID,  concat(orderdetail.orderID, ' - ', product.Pname, ' - ', category.CatName, ' - ', product.Usize) AS `Product Name`,  product.CatID,  product.SuppID,  product.QPerUnit,  product.Uweight,  product.Usize,  product.UInStock,  product.ReOrLevel,  product.Note,  category.`Desc`";
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
	"m_strName" => "CatID",
	"m_strTable" => "product"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SuppID",
	"m_strTable" => "product"
));

$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "QPerUnit",
	"m_strTable" => "product"
));

$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Uweight",
	"m_strTable" => "product"
));

$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Usize",
	"m_strTable" => "product"
));

$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "UInStock",
	"m_strTable" => "product"
));

$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ReOrLevel",
	"m_strTable" => "product"
));

$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Note",
	"m_strTable" => "product"
));

$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc",
	"m_strTable" => "category"
));

$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "orderdetail";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "ODetailID";
$proto39["m_columns"][] = "OrderID";
$proto39["m_columns"][] = "BillNo";
$proto39["m_columns"][] = "ProductID";
$proto39["m_columns"][] = "UPrice";
$proto39["m_columns"][] = "OrdQuant";
$proto39["m_columns"][] = "DelQuant";
$proto39["m_columns"][] = "Discount";
$proto39["m_columns"][] = "Total";
$proto39["m_columns"][] = "DelDate";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_alias"] = "";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = "0";
$proto40["m_inBrackets"] = "0";
$proto40["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_CROSSJOIN";
			$proto43=array();
$proto43["m_strName"] = "product";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ProdID";
$proto43["m_columns"][] = "Pname";
$proto43["m_columns"][] = "CatID";
$proto43["m_columns"][] = "SuppID";
$proto43["m_columns"][] = "QPerUnit";
$proto43["m_columns"][] = "Uprice";
$proto43["m_columns"][] = "USP";
$proto43["m_columns"][] = "Uweight";
$proto43["m_columns"][] = "Usize";
$proto43["m_columns"][] = "Discount";
$proto43["m_columns"][] = "UInStock";
$proto43["m_columns"][] = "UInOrder";
$proto43["m_columns"][] = "ReOrLevel";
$proto43["m_columns"][] = "Note";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_alias"] = "";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = "0";
$proto44["m_inBrackets"] = "0";
$proto44["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_CROSSJOIN";
			$proto47=array();
$proto47["m_strName"] = "category";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "CatID";
$proto47["m_columns"][] = "CatName";
$proto47["m_columns"][] = "Desc";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_alias"] = "";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = "0";
$proto48["m_inBrackets"] = "0";
$proto48["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Product_Order_List = createSqlQuery_Product_Order_List();
											$tdataProduct_Order_List[".sqlquery"] = $queryData_Product_Order_List;

$tableEvents["Product-Order List"] = new eventsBase;
$tdataProduct_Order_List[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Product-Order List");

?>