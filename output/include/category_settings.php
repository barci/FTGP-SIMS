<?php
require_once(getabspath("classes/cipherer.php"));
$tdatacategory = array();
	$tdatacategory[".NumberOfChars"] = 80; 
	$tdatacategory[".ShortName"] = "category";
	$tdatacategory[".OwnerID"] = "";
	$tdatacategory[".OriginalTable"] = "category";

//	field labels
$fieldLabelscategory = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscategory["English"] = array();
	$fieldToolTipscategory["English"] = array();
	$fieldLabelscategory["English"]["CatID"] = "Cat ID";
	$fieldToolTipscategory["English"]["CatID"] = "";
	$fieldLabelscategory["English"]["CatName"] = "Category Name";
	$fieldToolTipscategory["English"]["CatName"] = "";
	$fieldLabelscategory["English"]["Desc"] = "Description";
	$fieldToolTipscategory["English"]["Desc"] = "";
	if (count($fieldToolTipscategory["English"]))
		$tdatacategory[".isUseToolTips"] = true;
}
	
	
	$tdatacategory[".NCSearch"] = true;



$tdatacategory[".shortTableName"] = "category";
$tdatacategory[".nSecOptions"] = 0;
$tdatacategory[".recsPerRowList"] = 1;
$tdatacategory[".mainTableOwnerID"] = "";
$tdatacategory[".moveNext"] = 1;
$tdatacategory[".nType"] = 0;

$tdatacategory[".strOriginalTableName"] = "category";




$tdatacategory[".showAddInPopup"] = true;

$tdatacategory[".showEditInPopup"] = true;

$tdatacategory[".showViewInPopup"] = true;

$tdatacategory[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatacategory[".listAjax"] = true;
else 
	$tdatacategory[".listAjax"] = false;

	$tdatacategory[".audit"] = false;

	$tdatacategory[".locking"] = false;

$tdatacategory[".listIcons"] = true;
$tdatacategory[".edit"] = true;
$tdatacategory[".inlineEdit"] = true;
$tdatacategory[".inlineAdd"] = true;
$tdatacategory[".copy"] = true;
$tdatacategory[".view"] = true;

$tdatacategory[".exportTo"] = true;

$tdatacategory[".printFriendly"] = true;

$tdatacategory[".delete"] = true;

$tdatacategory[".showSimpleSearchOptions"] = false;

$tdatacategory[".showSearchPanel"] = true;

if (isMobile())
	$tdatacategory[".isUseAjaxSuggest"] = false;
else 
	$tdatacategory[".isUseAjaxSuggest"] = true;

$tdatacategory[".rowHighlite"] = true;

// button handlers file names

$tdatacategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategory[".isUseTimeForSearch"] = false;



$tdatacategory[".useDetailsPreview"] = true;

$tdatacategory[".allSearchFields"] = array();

$tdatacategory[".allSearchFields"][] = "CatID";
$tdatacategory[".allSearchFields"][] = "CatName";
$tdatacategory[".allSearchFields"][] = "Desc";

$tdatacategory[".googleLikeFields"][] = "CatID";
$tdatacategory[".googleLikeFields"][] = "CatName";
$tdatacategory[".googleLikeFields"][] = "Desc";


$tdatacategory[".advSearchFields"][] = "CatID";
$tdatacategory[".advSearchFields"][] = "CatName";
$tdatacategory[".advSearchFields"][] = "Desc";

$tdatacategory[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdatacategory[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategory[".strOrderBy"] = $tstrOrderBy;

$tdatacategory[".orderindexes"] = array();

$tdatacategory[".sqlHead"] = "SELECT CatID,   CatName,   `Desc`";
$tdatacategory[".sqlFrom"] = "FROM category";
$tdatacategory[".sqlWhereExpr"] = "";
$tdatacategory[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategory[".arrGroupsPerPage"] = $arrGPP;

$tableKeyscategory = array();
$tableKeyscategory[] = "CatID";
$tdatacategory[".Keys"] = $tableKeyscategory;

$tdatacategory[".listFields"] = array();
$tdatacategory[".listFields"][] = "CatID";
$tdatacategory[".listFields"][] = "CatName";
$tdatacategory[".listFields"][] = "Desc";

$tdatacategory[".viewFields"] = array();
$tdatacategory[".viewFields"][] = "CatID";
$tdatacategory[".viewFields"][] = "CatName";
$tdatacategory[".viewFields"][] = "Desc";

$tdatacategory[".addFields"] = array();
$tdatacategory[".addFields"][] = "CatName";
$tdatacategory[".addFields"][] = "Desc";

$tdatacategory[".inlineAddFields"] = array();
$tdatacategory[".inlineAddFields"][] = "CatID";
$tdatacategory[".inlineAddFields"][] = "CatName";
$tdatacategory[".inlineAddFields"][] = "Desc";

$tdatacategory[".editFields"] = array();
$tdatacategory[".editFields"][] = "CatID";
$tdatacategory[".editFields"][] = "CatName";
$tdatacategory[".editFields"][] = "Desc";

$tdatacategory[".inlineEditFields"] = array();
$tdatacategory[".inlineEditFields"][] = "CatID";
$tdatacategory[".inlineEditFields"][] = "CatName";
$tdatacategory[".inlineEditFields"][] = "Desc";

$tdatacategory[".exportFields"] = array();
$tdatacategory[".exportFields"][] = "CatID";
$tdatacategory[".exportFields"][] = "CatName";
$tdatacategory[".exportFields"][] = "Desc";

$tdatacategory[".printFields"] = array();
$tdatacategory[".printFields"][] = "CatID";
$tdatacategory[".printFields"][] = "CatName";
$tdatacategory[".printFields"][] = "Desc";

//	CatID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CatID";
	$fdata["GoodName"] = "CatID";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Cat ID"; 
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
	
		
		
	$tdatacategory["CatID"] = $fdata;
//	CatName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CatName";
	$fdata["GoodName"] = "CatName";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Category Name"; 
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
	
		$fdata["strField"] = "CatName"; 
		$fdata["FullName"] = "CatName";
	
		
		
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
	
		
		
	$tdatacategory["CatName"] = $fdata;
//	Desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Desc";
	$fdata["GoodName"] = "Desc";
	$fdata["ownerTable"] = "category";
	$fdata["Label"] = "Description"; 
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
	
		$fdata["strField"] = "Desc"; 
		$fdata["FullName"] = "`Desc`";
	
		
		
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
	
		
		
	$tdatacategory["Desc"] = $fdata;

	
$tables_data["category"]=&$tdatacategory;
$field_labels["category"] = &$fieldLabelscategory;
$fieldToolTips["category"] = &$fieldToolTipscategory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["category"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="product";
	$detailsParam["dDataSourceTable"]="product";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="product";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["category"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["category"][$dIndex]["masterKeys"][]="CatID";
		$detailsTablesData["category"][$dIndex]["detailKeys"][]="CatID";

	
// tables which are master tables for current table (detail)
$masterTablesData["category"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CatID,   CatName,   `Desc`";
$proto0["m_strFrom"] = "FROM category";
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
	"m_strName" => "CatID",
	"m_strTable" => "category"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "CatName",
	"m_strTable" => "category"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc",
	"m_strTable" => "category"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "category";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "CatID";
$proto12["m_columns"][] = "CatName";
$proto12["m_columns"][] = "Desc";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_alias"] = "";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = "0";
$proto13["m_inBrackets"] = "0";
$proto13["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_category = createSqlQuery_category();
			$tdatacategory[".sqlquery"] = $queryData_category;

$tableEvents["category"] = new eventsBase;
$tdatacategory[".hasEvents"] = false;

$cipherer = new RunnerCipherer("category");

?>