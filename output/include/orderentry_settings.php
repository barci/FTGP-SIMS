<?php
require_once(getabspath("classes/cipherer.php"));
$tdataorderentry = array();
	$tdataorderentry[".NumberOfChars"] = 80; 
	$tdataorderentry[".ShortName"] = "orderentry";
	$tdataorderentry[".OwnerID"] = "";
	$tdataorderentry[".OriginalTable"] = "orderentry";

//	field labels
$fieldLabelsorderentry = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorderentry["English"] = array();
	$fieldToolTipsorderentry["English"] = array();
	$fieldLabelsorderentry["English"]["OrderID"] = "Order ID";
	$fieldToolTipsorderentry["English"]["OrderID"] = "";
	$fieldLabelsorderentry["English"]["StaffID"] = "Staff Incharge";
	$fieldToolTipsorderentry["English"]["StaffID"] = "";
	$fieldLabelsorderentry["English"]["CID"] = "Customer";
	$fieldToolTipsorderentry["English"]["CID"] = "";
	$fieldLabelsorderentry["English"]["ODate"] = "Order Date";
	$fieldToolTipsorderentry["English"]["ODate"] = "";
	$fieldLabelsorderentry["English"]["ErrorMsg"] = "Error Msg";
	$fieldToolTipsorderentry["English"]["ErrorMsg"] = "";
	if (count($fieldToolTipsorderentry["English"]))
		$tdataorderentry[".isUseToolTips"] = true;
}
	
	
	$tdataorderentry[".NCSearch"] = true;



$tdataorderentry[".shortTableName"] = "orderentry";
$tdataorderentry[".nSecOptions"] = 0;
$tdataorderentry[".recsPerRowList"] = 1;
$tdataorderentry[".mainTableOwnerID"] = "";
$tdataorderentry[".moveNext"] = 1;
$tdataorderentry[".nType"] = 0;

$tdataorderentry[".strOriginalTableName"] = "orderentry";




$tdataorderentry[".showAddInPopup"] = false;

$tdataorderentry[".showEditInPopup"] = false;

$tdataorderentry[".showViewInPopup"] = false;

$tdataorderentry[".fieldsForRegister"] = array();

$tdataorderentry[".listAjax"] = false;

	$tdataorderentry[".audit"] = false;

	$tdataorderentry[".locking"] = false;

$tdataorderentry[".listIcons"] = true;
$tdataorderentry[".edit"] = true;
$tdataorderentry[".inlineEdit"] = true;
$tdataorderentry[".inlineAdd"] = true;
$tdataorderentry[".view"] = true;

$tdataorderentry[".exportTo"] = true;

$tdataorderentry[".printFriendly"] = true;

$tdataorderentry[".delete"] = true;

$tdataorderentry[".showSimpleSearchOptions"] = false;

$tdataorderentry[".showSearchPanel"] = true;

if (isMobile())
	$tdataorderentry[".isUseAjaxSuggest"] = false;
else 
	$tdataorderentry[".isUseAjaxSuggest"] = true;

$tdataorderentry[".rowHighlite"] = true;

// button handlers file names

$tdataorderentry[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorderentry[".isUseTimeForSearch"] = false;



$tdataorderentry[".useDetailsPreview"] = true;

$tdataorderentry[".allSearchFields"] = array();

$tdataorderentry[".allSearchFields"][] = "OrderID";
$tdataorderentry[".allSearchFields"][] = "CID";
$tdataorderentry[".allSearchFields"][] = "ODate";
$tdataorderentry[".allSearchFields"][] = "StaffID";
$tdataorderentry[".allSearchFields"][] = "ErrorMsg";

$tdataorderentry[".googleLikeFields"][] = "OrderID";
$tdataorderentry[".googleLikeFields"][] = "StaffID";
$tdataorderentry[".googleLikeFields"][] = "CID";
$tdataorderentry[".googleLikeFields"][] = "ODate";
$tdataorderentry[".googleLikeFields"][] = "ErrorMsg";


$tdataorderentry[".advSearchFields"][] = "OrderID";
$tdataorderentry[".advSearchFields"][] = "CID";
$tdataorderentry[".advSearchFields"][] = "ODate";
$tdataorderentry[".advSearchFields"][] = "StaffID";
$tdataorderentry[".advSearchFields"][] = "ErrorMsg";

$tdataorderentry[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataorderentry[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorderentry[".strOrderBy"] = $tstrOrderBy;

$tdataorderentry[".orderindexes"] = array();

$tdataorderentry[".sqlHead"] = "SELECT OrderID,   StaffID,   CID,   ODate,   ErrorMsg";
$tdataorderentry[".sqlFrom"] = "FROM orderentry";
$tdataorderentry[".sqlWhereExpr"] = "";
$tdataorderentry[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorderentry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorderentry[".arrGroupsPerPage"] = $arrGPP;

$tableKeysorderentry = array();
$tableKeysorderentry[] = "OrderID";
$tdataorderentry[".Keys"] = $tableKeysorderentry;

$tdataorderentry[".listFields"] = array();
$tdataorderentry[".listFields"][] = "OrderID";
$tdataorderentry[".listFields"][] = "CID";
$tdataorderentry[".listFields"][] = "ODate";
$tdataorderentry[".listFields"][] = "StaffID";
$tdataorderentry[".listFields"][] = "ErrorMsg";

$tdataorderentry[".viewFields"] = array();
$tdataorderentry[".viewFields"][] = "OrderID";
$tdataorderentry[".viewFields"][] = "CID";
$tdataorderentry[".viewFields"][] = "ODate";
$tdataorderentry[".viewFields"][] = "StaffID";
$tdataorderentry[".viewFields"][] = "ErrorMsg";

$tdataorderentry[".addFields"] = array();
$tdataorderentry[".addFields"][] = "OrderID";
$tdataorderentry[".addFields"][] = "CID";
$tdataorderentry[".addFields"][] = "ODate";
$tdataorderentry[".addFields"][] = "StaffID";
$tdataorderentry[".addFields"][] = "ErrorMsg";

$tdataorderentry[".inlineAddFields"] = array();
$tdataorderentry[".inlineAddFields"][] = "OrderID";
$tdataorderentry[".inlineAddFields"][] = "CID";
$tdataorderentry[".inlineAddFields"][] = "ODate";
$tdataorderentry[".inlineAddFields"][] = "StaffID";
$tdataorderentry[".inlineAddFields"][] = "ErrorMsg";

$tdataorderentry[".editFields"] = array();
$tdataorderentry[".editFields"][] = "OrderID";
$tdataorderentry[".editFields"][] = "CID";
$tdataorderentry[".editFields"][] = "ODate";
$tdataorderentry[".editFields"][] = "StaffID";
$tdataorderentry[".editFields"][] = "ErrorMsg";

$tdataorderentry[".inlineEditFields"] = array();
$tdataorderentry[".inlineEditFields"][] = "OrderID";
$tdataorderentry[".inlineEditFields"][] = "CID";
$tdataorderentry[".inlineEditFields"][] = "ODate";
$tdataorderentry[".inlineEditFields"][] = "StaffID";
$tdataorderentry[".inlineEditFields"][] = "ErrorMsg";

$tdataorderentry[".exportFields"] = array();
$tdataorderentry[".exportFields"][] = "OrderID";
$tdataorderentry[".exportFields"][] = "CID";
$tdataorderentry[".exportFields"][] = "ODate";
$tdataorderentry[".exportFields"][] = "StaffID";
$tdataorderentry[".exportFields"][] = "ErrorMsg";

$tdataorderentry[".printFields"] = array();
$tdataorderentry[".printFields"][] = "OrderID";
$tdataorderentry[".printFields"][] = "CID";
$tdataorderentry[".printFields"][] = "ODate";
$tdataorderentry[".printFields"][] = "StaffID";
$tdataorderentry[".printFields"][] = "ErrorMsg";

//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Order ID"; 
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
	
		$fdata["strField"] = "OrderID"; 
		$fdata["FullName"] = "OrderID";
	
		
		
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
			$edata["EditParams"].= " maxlength=20";
	
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataorderentry["OrderID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Staff Incharge"; 
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
	
		
		
	$tdataorderentry["StaffID"] = $fdata;
//	CID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CID";
	$fdata["GoodName"] = "CID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Customer"; 
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			
	$edata["LinkField"] = "CID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ComName";
	
		
	$edata["LookupTable"] = "customer";
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
	
		
		
	$tdataorderentry["CID"] = $fdata;
//	ODate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ODate";
	$fdata["GoodName"] = "ODate";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Order Date"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "ODate"; 
		$fdata["FullName"] = "ODate";
	
		
		
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

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
	$edata["InitialYearFactor"] = 100; 
	$edata["LastYearFactor"] = 10; 
	
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdataorderentry["ODate"] = $fdata;
//	ErrorMsg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ErrorMsg";
	$fdata["GoodName"] = "ErrorMsg";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Error Msg"; 
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
	
		$fdata["strField"] = "ErrorMsg"; 
		$fdata["FullName"] = "ErrorMsg";
	
		
		
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
	
		
		
	$tdataorderentry["ErrorMsg"] = $fdata;

	
$tables_data["orderentry"]=&$tdataorderentry;
$field_labels["orderentry"] = &$fieldLabelsorderentry;
$fieldToolTips["orderentry"] = &$fieldToolTipsorderentry;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["orderentry"] = array();
$dIndex = 1-1;
			$strOriginalDetailsTable="orderdetail";
	$detailsParam["dDataSourceTable"]="orderdetail";
	$detailsParam["dOriginalTable"]=$strOriginalDetailsTable;
	$detailsParam["dShortTable"]="orderdetail";
	$detailsParam["masterKeys"]=array();
	$detailsParam["detailKeys"]=array();
	$detailsParam["dispChildCount"]= "1";
	$detailsParam["hideChild"]="0";
	$detailsParam["previewOnList"]= 1;
	$detailsParam["previewOnAdd"]= 0;
	$detailsParam["previewOnEdit"]= 0;
	$detailsParam["previewOnView"]= 0;
		
	$detailsTablesData["orderentry"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["orderentry"][$dIndex]["masterKeys"][]="OrderID";
		$detailsTablesData["orderentry"][$dIndex]["detailKeys"][]="OrderID";

	
// tables which are master tables for current table (detail)
$masterTablesData["orderentry"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="customer";
	$masterParams["mDataSourceTable"]="customer";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "customer";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["orderentry"][$mIndex] = $masterParams;	
		$masterTablesData["orderentry"][$mIndex]["masterKeys"][]="CID";
		$masterTablesData["orderentry"][$mIndex]["detailKeys"][]="CID";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_orderentry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "OrderID,   StaffID,   CID,   ODate,   ErrorMsg";
$proto0["m_strFrom"] = "FROM orderentry";
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
	"m_strName" => "OrderID",
	"m_strTable" => "orderentry"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "orderentry"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "CID",
	"m_strTable" => "orderentry"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "ODate",
	"m_strTable" => "orderentry"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "ErrorMsg",
	"m_strTable" => "orderentry"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "orderentry";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "OrderID";
$proto16["m_columns"][] = "StaffID";
$proto16["m_columns"][] = "CID";
$proto16["m_columns"][] = "ODate";
$proto16["m_columns"][] = "ErrorMsg";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_alias"] = "";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = "0";
$proto17["m_inBrackets"] = "0";
$proto17["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_orderentry = createSqlQuery_orderentry();
					$tdataorderentry[".sqlquery"] = $queryData_orderentry;

$tableEvents["orderentry"] = new eventsBase;
$tdataorderentry[".hasEvents"] = false;

$cipherer = new RunnerCipherer("orderentry");

?>