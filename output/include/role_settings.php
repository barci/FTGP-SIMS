<?php
require_once(getabspath("classes/cipherer.php"));
$tdatarole = array();
	$tdatarole[".NumberOfChars"] = 80; 
	$tdatarole[".ShortName"] = "role";
	$tdatarole[".OwnerID"] = "";
	$tdatarole[".OriginalTable"] = "role";

//	field labels
$fieldLabelsrole = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrole["English"] = array();
	$fieldToolTipsrole["English"] = array();
	$fieldLabelsrole["English"]["RoleID"] = "Role ID";
	$fieldToolTipsrole["English"]["RoleID"] = "";
	$fieldLabelsrole["English"]["RoleName"] = "Role Name";
	$fieldToolTipsrole["English"]["RoleName"] = "";
	$fieldLabelsrole["English"]["Desc"] = "Description";
	$fieldToolTipsrole["English"]["Desc"] = "";
	if (count($fieldToolTipsrole["English"]))
		$tdatarole[".isUseToolTips"] = true;
}
	
	
	$tdatarole[".NCSearch"] = true;



$tdatarole[".shortTableName"] = "role";
$tdatarole[".nSecOptions"] = 0;
$tdatarole[".recsPerRowList"] = 1;
$tdatarole[".mainTableOwnerID"] = "";
$tdatarole[".moveNext"] = 1;
$tdatarole[".nType"] = 0;

$tdatarole[".strOriginalTableName"] = "role";




$tdatarole[".showAddInPopup"] = true;

$tdatarole[".showEditInPopup"] = true;

$tdatarole[".showViewInPopup"] = true;

$tdatarole[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatarole[".listAjax"] = true;
else 
	$tdatarole[".listAjax"] = false;

	$tdatarole[".audit"] = false;

	$tdatarole[".locking"] = false;

$tdatarole[".listIcons"] = true;
$tdatarole[".edit"] = true;
$tdatarole[".inlineEdit"] = true;
$tdatarole[".inlineAdd"] = true;
$tdatarole[".copy"] = true;
$tdatarole[".view"] = true;

$tdatarole[".exportTo"] = true;

$tdatarole[".printFriendly"] = true;

$tdatarole[".delete"] = true;

$tdatarole[".showSimpleSearchOptions"] = false;

$tdatarole[".showSearchPanel"] = true;

if (isMobile())
	$tdatarole[".isUseAjaxSuggest"] = false;
else 
	$tdatarole[".isUseAjaxSuggest"] = true;

$tdatarole[".rowHighlite"] = true;

// button handlers file names

$tdatarole[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarole[".isUseTimeForSearch"] = false;




$tdatarole[".allSearchFields"] = array();

$tdatarole[".allSearchFields"][] = "RoleID";
$tdatarole[".allSearchFields"][] = "RoleName";
$tdatarole[".allSearchFields"][] = "Desc";

$tdatarole[".googleLikeFields"][] = "RoleID";
$tdatarole[".googleLikeFields"][] = "RoleName";
$tdatarole[".googleLikeFields"][] = "Desc";


$tdatarole[".advSearchFields"][] = "RoleID";
$tdatarole[".advSearchFields"][] = "RoleName";
$tdatarole[".advSearchFields"][] = "Desc";

$tdatarole[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatarole[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarole[".strOrderBy"] = $tstrOrderBy;

$tdatarole[".orderindexes"] = array();

$tdatarole[".sqlHead"] = "SELECT RoleID,   RoleName,   `Desc`";
$tdatarole[".sqlFrom"] = "FROM `role`";
$tdatarole[".sqlWhereExpr"] = "";
$tdatarole[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarole[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarole[".arrGroupsPerPage"] = $arrGPP;

$tableKeysrole = array();
$tableKeysrole[] = "RoleID";
$tdatarole[".Keys"] = $tableKeysrole;

$tdatarole[".listFields"] = array();
$tdatarole[".listFields"][] = "RoleID";
$tdatarole[".listFields"][] = "RoleName";
$tdatarole[".listFields"][] = "Desc";

$tdatarole[".viewFields"] = array();
$tdatarole[".viewFields"][] = "RoleID";
$tdatarole[".viewFields"][] = "RoleName";
$tdatarole[".viewFields"][] = "Desc";

$tdatarole[".addFields"] = array();
$tdatarole[".addFields"][] = "RoleID";
$tdatarole[".addFields"][] = "RoleName";
$tdatarole[".addFields"][] = "Desc";

$tdatarole[".inlineAddFields"] = array();
$tdatarole[".inlineAddFields"][] = "RoleID";
$tdatarole[".inlineAddFields"][] = "RoleName";
$tdatarole[".inlineAddFields"][] = "Desc";

$tdatarole[".editFields"] = array();
$tdatarole[".editFields"][] = "RoleID";
$tdatarole[".editFields"][] = "RoleName";
$tdatarole[".editFields"][] = "Desc";

$tdatarole[".inlineEditFields"] = array();
$tdatarole[".inlineEditFields"][] = "RoleID";
$tdatarole[".inlineEditFields"][] = "RoleName";
$tdatarole[".inlineEditFields"][] = "Desc";

$tdatarole[".exportFields"] = array();
$tdatarole[".exportFields"][] = "RoleID";
$tdatarole[".exportFields"][] = "RoleName";
$tdatarole[".exportFields"][] = "Desc";

$tdatarole[".printFields"] = array();
$tdatarole[".printFields"][] = "RoleID";
$tdatarole[".printFields"][] = "RoleName";
$tdatarole[".printFields"][] = "Desc";

//	RoleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "RoleID";
	$fdata["GoodName"] = "RoleID";
	$fdata["ownerTable"] = "role";
	$fdata["Label"] = "Role ID"; 
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
	
		$fdata["strField"] = "RoleID"; 
		$fdata["FullName"] = "RoleID";
	
		
		
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
	
		
		
	$tdatarole["RoleID"] = $fdata;
//	RoleName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "RoleName";
	$fdata["GoodName"] = "RoleName";
	$fdata["ownerTable"] = "role";
	$fdata["Label"] = "Role Name"; 
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
	
		$fdata["strField"] = "RoleName"; 
		$fdata["FullName"] = "RoleName";
	
		
		
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
	
		
		
	$tdatarole["RoleName"] = $fdata;
//	Desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Desc";
	$fdata["GoodName"] = "Desc";
	$fdata["ownerTable"] = "role";
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
	
		
		
	$tdatarole["Desc"] = $fdata;

	
$tables_data["role"]=&$tdatarole;
$field_labels["role"] = &$fieldLabelsrole;
$fieldToolTips["role"] = &$fieldToolTipsrole;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["role"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["role"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_role()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "RoleID,   RoleName,   `Desc`";
$proto0["m_strFrom"] = "FROM `role`";
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
	"m_strName" => "RoleID",
	"m_strTable" => "role"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "RoleName",
	"m_strTable" => "role"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Desc",
	"m_strTable" => "role"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "role";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "RoleID";
$proto12["m_columns"][] = "RoleName";
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
$queryData_role = createSqlQuery_role();
			$tdatarole[".sqlquery"] = $queryData_role;

$tableEvents["role"] = new eventsBase;
$tdatarole[".hasEvents"] = false;

$cipherer = new RunnerCipherer("role");

?>