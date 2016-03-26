<?php
require_once(getabspath("classes/cipherer.php"));
$tdataProduct_Listing = array();
	$tdataProduct_Listing[".NumberOfChars"] = 80; 
	$tdataProduct_Listing[".ShortName"] = "Product_Listing";
	$tdataProduct_Listing[".OwnerID"] = "";
	$tdataProduct_Listing[".OriginalTable"] = "category";

//	field labels
$fieldLabelsProduct_Listing = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsProduct_Listing["English"] = array();
	$fieldToolTipsProduct_Listing["English"] = array();
	$fieldLabelsProduct_Listing["English"]["CatName"] = "Category Name";
	$fieldToolTipsProduct_Listing["English"]["CatName"] = "";
	$fieldLabelsProduct_Listing["English"]["Desc"] = "Description";
	$fieldToolTipsProduct_Listing["English"]["Desc"] = "";
	$fieldLabelsProduct_Listing["English"]["longname"] = "Product Details";
	$fieldToolTipsProduct_Listing["English"]["longname"] = "";
	$fieldLabelsProduct_Listing["English"]["Pname"] = "Product Name";
	$fieldToolTipsProduct_Listing["English"]["Pname"] = "";
	$fieldLabelsProduct_Listing["English"]["Usize"] = "Unit Size";
	$fieldToolTipsProduct_Listing["English"]["Usize"] = "";
	$fieldLabelsProduct_Listing["English"]["prodid"] = "Product ID";
	$fieldToolTipsProduct_Listing["English"]["prodid"] = "";
	$fieldLabelsProduct_Listing["English"][""] = "";
	$fieldToolTipsProduct_Listing["English"][""] = "";
	$fieldLabelsProduct_Listing["English"][""] = "Product Listing";
	$fieldToolTipsProduct_Listing["English"][""] = "";
	if (count($fieldToolTipsProduct_Listing["English"]))
		$tdataProduct_Listing[".isUseToolTips"] = true;
}
	
	
	$tdataProduct_Listing[".NCSearch"] = true;



$tdataProduct_Listing[".shortTableName"] = "Product_Listing";
$tdataProduct_Listing[".nSecOptions"] = 0;
$tdataProduct_Listing[".recsPerRowList"] = 1;
$tdataProduct_Listing[".mainTableOwnerID"] = "";
$tdataProduct_Listing[".moveNext"] = 1;
$tdataProduct_Listing[".nType"] = 1;

$tdataProduct_Listing[".strOriginalTableName"] = "category";




$tdataProduct_Listing[".showAddInPopup"] = false;

$tdataProduct_Listing[".showEditInPopup"] = false;

$tdataProduct_Listing[".showViewInPopup"] = false;

$tdataProduct_Listing[".fieldsForRegister"] = array();

$tdataProduct_Listing[".listAjax"] = false;

	$tdataProduct_Listing[".audit"] = false;

	$tdataProduct_Listing[".locking"] = false;

$tdataProduct_Listing[".listIcons"] = true;
$tdataProduct_Listing[".inlineAdd"] = true;

$tdataProduct_Listing[".exportTo"] = true;

$tdataProduct_Listing[".printFriendly"] = true;


$tdataProduct_Listing[".showSimpleSearchOptions"] = false;

$tdataProduct_Listing[".showSearchPanel"] = true;

if (isMobile())
	$tdataProduct_Listing[".isUseAjaxSuggest"] = false;
else 
	$tdataProduct_Listing[".isUseAjaxSuggest"] = true;

$tdataProduct_Listing[".rowHighlite"] = true;

// button handlers file names

$tdataProduct_Listing[".addPageEvents"] = false;

// use timepicker for search panel
$tdataProduct_Listing[".isUseTimeForSearch"] = false;




$tdataProduct_Listing[".allSearchFields"] = array();

$tdataProduct_Listing[".allSearchFields"][] = "prodid";
$tdataProduct_Listing[".allSearchFields"][] = "longname";
$tdataProduct_Listing[".allSearchFields"][] = "Pname";
$tdataProduct_Listing[".allSearchFields"][] = "CatName";
$tdataProduct_Listing[".allSearchFields"][] = "Usize";
$tdataProduct_Listing[".allSearchFields"][] = "Desc";

$tdataProduct_Listing[".googleLikeFields"][] = "prodid";
$tdataProduct_Listing[".googleLikeFields"][] = "longname";
$tdataProduct_Listing[".googleLikeFields"][] = "Pname";
$tdataProduct_Listing[".googleLikeFields"][] = "CatName";
$tdataProduct_Listing[".googleLikeFields"][] = "Usize";
$tdataProduct_Listing[".googleLikeFields"][] = "Desc";


$tdataProduct_Listing[".advSearchFields"][] = "prodid";
$tdataProduct_Listing[".advSearchFields"][] = "longname";
$tdataProduct_Listing[".advSearchFields"][] = "Pname";
$tdataProduct_Listing[".advSearchFields"][] = "CatName";
$tdataProduct_Listing[".advSearchFields"][] = "Usize";
$tdataProduct_Listing[".advSearchFields"][] = "Desc";

$tdataProduct_Listing[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdataProduct_Listing[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataProduct_Listing[".strOrderBy"] = $tstrOrderBy;

$tdataProduct_Listing[".orderindexes"] = array();

$tdataProduct_Listing[".sqlHead"] = "SELECT product.ProdID,  concat(product.pname, ' - ', category.catname, ' - ', product.usize) AS longname,  product.Pname,  category.CatName,  product.Usize,  category.`Desc`";
$tdataProduct_Listing[".sqlFrom"] = "FROM category  , product";
$tdataProduct_Listing[".sqlWhereExpr"] = "(product.CatID =category.catid)";
$tdataProduct_Listing[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataProduct_Listing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataProduct_Listing[".arrGroupsPerPage"] = $arrGPP;

$tableKeysProduct_Listing = array();
$tdataProduct_Listing[".Keys"] = $tableKeysProduct_Listing;

$tdataProduct_Listing[".listFields"] = array();
$tdataProduct_Listing[".listFields"][] = "prodid";
$tdataProduct_Listing[".listFields"][] = "longname";
$tdataProduct_Listing[".listFields"][] = "Pname";
$tdataProduct_Listing[".listFields"][] = "CatName";
$tdataProduct_Listing[".listFields"][] = "Usize";
$tdataProduct_Listing[".listFields"][] = "Desc";

$tdataProduct_Listing[".viewFields"] = array();

$tdataProduct_Listing[".addFields"] = array();
$tdataProduct_Listing[".addFields"][] = "CatName";
$tdataProduct_Listing[".addFields"][] = "Desc";

$tdataProduct_Listing[".inlineAddFields"] = array();
$tdataProduct_Listing[".inlineAddFields"][] = "prodid";
$tdataProduct_Listing[".inlineAddFields"][] = "longname";
$tdataProduct_Listing[".inlineAddFields"][] = "Pname";
$tdataProduct_Listing[".inlineAddFields"][] = "CatName";
$tdataProduct_Listing[".inlineAddFields"][] = "Usize";
$tdataProduct_Listing[".inlineAddFields"][] = "Desc";

$tdataProduct_Listing[".editFields"] = array();

$tdataProduct_Listing[".inlineEditFields"] = array();

$tdataProduct_Listing[".exportFields"] = array();
$tdataProduct_Listing[".exportFields"][] = "prodid";
$tdataProduct_Listing[".exportFields"][] = "longname";
$tdataProduct_Listing[".exportFields"][] = "Pname";
$tdataProduct_Listing[".exportFields"][] = "CatName";
$tdataProduct_Listing[".exportFields"][] = "Usize";
$tdataProduct_Listing[".exportFields"][] = "Desc";

$tdataProduct_Listing[".printFields"] = array();
$tdataProduct_Listing[".printFields"][] = "prodid";
$tdataProduct_Listing[".printFields"][] = "longname";
$tdataProduct_Listing[".printFields"][] = "Pname";
$tdataProduct_Listing[".printFields"][] = "CatName";
$tdataProduct_Listing[".printFields"][] = "Usize";
$tdataProduct_Listing[".printFields"][] = "Desc";

//	prodid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "prodid";
	$fdata["GoodName"] = "prodid";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Product ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
	
		
		
	$tdataProduct_Listing["prodid"] = $fdata;
//	longname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "longname";
	$fdata["GoodName"] = "longname";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = "Product Details"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "longname"; 
		$fdata["FullName"] = "concat(product.pname, ' - ', category.catname, ' - ', product.usize)";
	
		
		
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
	
		
		
	$tdataProduct_Listing["longname"] = $fdata;
//	Pname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Pname";
	$fdata["GoodName"] = "Pname";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Product Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Pname"; 
		$fdata["FullName"] = "product.Pname";
	
		
		
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
	
		
		
	$tdataProduct_Listing["Pname"] = $fdata;
//	CatName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CatName";
	$fdata["GoodName"] = "CatName";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Category Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=150";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Listing["CatName"] = $fdata;
//	Usize
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Usize";
	$fdata["GoodName"] = "Usize";
	$fdata["ownerTable"] = "product";
	$fdata["Label"] = "Unit Size"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
	
		
		
	$tdataProduct_Listing["Usize"] = $fdata;
//	Desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Desc";
	$fdata["GoodName"] = "Desc";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Description"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
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
			$edata["EditParams"].= " maxlength=200";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataProduct_Listing["Desc"] = $fdata;

	
$tables_data["Product Listing"]=&$tdataProduct_Listing;
$field_labels["Product_Listing"] = &$fieldLabelsProduct_Listing;
$fieldToolTips["Product Listing"] = &$fieldToolTipsProduct_Listing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Product Listing"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["Product Listing"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Product_Listing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product.ProdID,  concat(product.pname, ' - ', category.catname, ' - ', product.usize) AS longname,  product.Pname,  category.CatName,  product.Usize,  category.`Desc`";
$proto0["m_strFrom"] = "FROM category  , product";
$proto0["m_strWhere"] = "(product.CatID =category.catid)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "product.CatID =category.catid";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CatID",
	"m_strTable" => "product"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "=category.catid";
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
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_CUSTOM";
$proto8["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "product.pname"
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "category.catname"
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto8["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "product.usize"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto8);

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "longname";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Pname",
	"m_strTable" => "product"
));

$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CatName",
	"m_strTable" => "category"
));

$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Usize",
	"m_strTable" => "product"
));

$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc",
	"m_strTable" => "category"
));

$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "category";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "CatID";
$proto23["m_columns"][] = "CatName";
$proto23["m_columns"][] = "Desc";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_alias"] = "";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = "0";
$proto24["m_inBrackets"] = "0";
$proto24["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_CROSSJOIN";
			$proto27=array();
$proto27["m_strName"] = "product";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ProdID";
$proto27["m_columns"][] = "ProdNo";
$proto27["m_columns"][] = "Pname";
$proto27["m_columns"][] = "CatID";
$proto27["m_columns"][] = "SuppID";
$proto27["m_columns"][] = "QPerUnit";
$proto27["m_columns"][] = "Uprice";
$proto27["m_columns"][] = "USP";
$proto27["m_columns"][] = "Uweight";
$proto27["m_columns"][] = "Usize";
$proto27["m_columns"][] = "Discount";
$proto27["m_columns"][] = "UInStock";
$proto27["m_columns"][] = "UInOrder";
$proto27["m_columns"][] = "ReOrLevel";
$proto27["m_columns"][] = "Note";
$proto27["m_columns"][] = "TimeStamp";
$proto27["m_columns"][] = "staffID";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_alias"] = "";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = "0";
$proto28["m_inBrackets"] = "0";
$proto28["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Product_Listing = createSqlQuery_Product_Listing();
						$tdataProduct_Listing[".sqlquery"] = $queryData_Product_Listing;

$tableEvents["Product Listing"] = new eventsBase;
$tdataProduct_Listing[".hasEvents"] = false;

$cipherer = new RunnerCipherer("Product Listing");

?>