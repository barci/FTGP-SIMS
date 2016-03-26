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
	$fieldLabelsorderentry["English"]["ID"] = "ID";
	$fieldToolTipsorderentry["English"]["ID"] = "";
	$fieldLabelsorderentry["English"]["OrderID"] = "Order ID";
	$fieldToolTipsorderentry["English"]["OrderID"] = "";
	$fieldLabelsorderentry["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsorderentry["English"]["StaffID"] = "";
	$fieldLabelsorderentry["English"]["CID"] = "CID";
	$fieldToolTipsorderentry["English"]["CID"] = "";
	$fieldLabelsorderentry["English"]["DelDate"] = "Del Date";
	$fieldToolTipsorderentry["English"]["DelDate"] = "";
	$fieldLabelsorderentry["English"]["Note"] = "Note";
	$fieldToolTipsorderentry["English"]["Note"] = "";
	$fieldLabelsorderentry["English"]["TimeStamp"] = "Time Stamp";
	$fieldToolTipsorderentry["English"]["TimeStamp"] = "";
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

$tdataorderentry[".allSearchFields"][] = "ID";
$tdataorderentry[".allSearchFields"][] = "OrderID";
$tdataorderentry[".allSearchFields"][] = "CID";
$tdataorderentry[".allSearchFields"][] = "DelDate";
$tdataorderentry[".allSearchFields"][] = "Note";
$tdataorderentry[".allSearchFields"][] = "StaffID";

$tdataorderentry[".googleLikeFields"][] = "ID";
$tdataorderentry[".googleLikeFields"][] = "OrderID";
$tdataorderentry[".googleLikeFields"][] = "StaffID";
$tdataorderentry[".googleLikeFields"][] = "CID";
$tdataorderentry[".googleLikeFields"][] = "DelDate";
$tdataorderentry[".googleLikeFields"][] = "Note";
$tdataorderentry[".googleLikeFields"][] = "TimeStamp";


$tdataorderentry[".advSearchFields"][] = "ID";
$tdataorderentry[".advSearchFields"][] = "OrderID";
$tdataorderentry[".advSearchFields"][] = "CID";
$tdataorderentry[".advSearchFields"][] = "DelDate";
$tdataorderentry[".advSearchFields"][] = "Note";
$tdataorderentry[".advSearchFields"][] = "StaffID";

$tdataorderentry[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main
	


$tdataorderentry[".pageSize"] = 20;

$tstrOrderBy = "ORDER BY DelDate DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorderentry[".strOrderBy"] = $tstrOrderBy;

$tdataorderentry[".orderindexes"] = array();
$tdataorderentry[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "DelDate");

$tdataorderentry[".sqlHead"] = "SELECT ID,  OrderID,  StaffID,  CID,  DelDate,  Note,  `TimeStamp`";
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
$tableKeysorderentry[] = "ID";
$tdataorderentry[".Keys"] = $tableKeysorderentry;

$tdataorderentry[".listFields"] = array();
$tdataorderentry[".listFields"][] = "ID";
$tdataorderentry[".listFields"][] = "OrderID";
$tdataorderentry[".listFields"][] = "CID";
$tdataorderentry[".listFields"][] = "DelDate";
$tdataorderentry[".listFields"][] = "Note";
$tdataorderentry[".listFields"][] = "StaffID";

$tdataorderentry[".viewFields"] = array();

$tdataorderentry[".addFields"] = array();
$tdataorderentry[".addFields"][] = "OrderID";
$tdataorderentry[".addFields"][] = "CID";
$tdataorderentry[".addFields"][] = "DelDate";
$tdataorderentry[".addFields"][] = "Note";
$tdataorderentry[".addFields"][] = "StaffID";

$tdataorderentry[".inlineAddFields"] = array();

$tdataorderentry[".editFields"] = array();
$tdataorderentry[".editFields"][] = "OrderID";
$tdataorderentry[".editFields"][] = "CID";
$tdataorderentry[".editFields"][] = "DelDate";
$tdataorderentry[".editFields"][] = "Note";
$tdataorderentry[".editFields"][] = "StaffID";

$tdataorderentry[".inlineEditFields"] = array();

$tdataorderentry[".exportFields"] = array();

$tdataorderentry[".printFields"] = array();

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataorderentry["ID"] = $fdata;
//	OrderID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "OrderID";
	$fdata["GoodName"] = "OrderID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Order ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 1;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 1;
			
		
			$edata["LookupUnique"] = true;
	
	$edata["LinkField"] = "OrderID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "OrderID";
	
		
	$edata["LookupTable"] = "orderentry";
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
	
		
		
	$tdataorderentry["OrderID"] = $fdata;
//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	$fdata["Index"] = 4;
	$fdata["strName"] = "CID";
	$fdata["GoodName"] = "CID";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "CID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataorderentry["CID"] = $fdata;
//	DelDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DelDate";
	$fdata["GoodName"] = "DelDate";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Del Date"; 
	$fdata["FieldType"] = 135;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DelDate"; 
		$fdata["FullName"] = "DelDate";
	
		
		
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
	
		
		
	$tdataorderentry["DelDate"] = $fdata;
//	Note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Note";
	$fdata["GoodName"] = "Note";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Note"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
		
		
	$tdataorderentry["Note"] = $fdata;
//	TimeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TimeStamp";
	$fdata["GoodName"] = "TimeStamp";
	$fdata["ownerTable"] = "orderentry";
	$fdata["Label"] = "Time Stamp"; 
	$fdata["FieldType"] = 135;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "TimeStamp"; 
		$fdata["FullName"] = "`TimeStamp`";
	
		
		
				
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
	
		
		
	$tdataorderentry["TimeStamp"] = $fdata;

	
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
	$detailsParam["previewOnAdd"]= 1;
	$detailsParam["previewOnEdit"]= 1;
	$detailsParam["previewOnView"]= 1;
		
	$detailsTablesData["orderentry"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["orderentry"][$dIndex]["masterKeys"][]="OrderID";
		$detailsTablesData["orderentry"][$dIndex]["masterKeys"][]="DelDate";
		$detailsTablesData["orderentry"][$dIndex]["detailKeys"][]="OrderID";
		$detailsTablesData["orderentry"][$dIndex]["detailKeys"][]="DelDate";

	
// tables which are master tables for current table (detail)
$masterTablesData["orderentry"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_orderentry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  OrderID,  StaffID,  CID,  DelDate,  Note,  `TimeStamp`";
$proto0["m_strFrom"] = "FROM orderentry";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY DelDate DESC";
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
	"m_strTable" => "orderentry"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "OrderID",
	"m_strTable" => "orderentry"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "StaffID",
	"m_strTable" => "orderentry"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "CID",
	"m_strTable" => "orderentry"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DelDate",
	"m_strTable" => "orderentry"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Note",
	"m_strTable" => "orderentry"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeStamp",
	"m_strTable" => "orderentry"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "orderentry";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "ID";
$proto20["m_columns"][] = "OrderID";
$proto20["m_columns"][] = "StaffID";
$proto20["m_columns"][] = "CID";
$proto20["m_columns"][] = "DelDate";
$proto20["m_columns"][] = "Note";
$proto20["m_columns"][] = "TimeStamp";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_alias"] = "";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = "0";
$proto21["m_inBrackets"] = "0";
$proto21["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "DelDate",
	"m_strTable" => "orderentry"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 0;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_orderentry = createSqlQuery_orderentry();
							$tdataorderentry[".sqlquery"] = $queryData_orderentry;

$tableEvents["orderentry"] = new eventsBase;
$tdataorderentry[".hasEvents"] = false;

$cipherer = new RunnerCipherer("orderentry");

?>