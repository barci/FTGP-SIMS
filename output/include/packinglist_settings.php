<?php
require_once(getabspath("classes/cipherer.php"));
$tdatapackinglist = array();
	$tdatapackinglist[".NumberOfChars"] = 80; 
	$tdatapackinglist[".ShortName"] = "packinglist";
	$tdatapackinglist[".OwnerID"] = "";
	$tdatapackinglist[".OriginalTable"] = "packinglist";

//	field labels
$fieldLabelspackinglist = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspackinglist["English"] = array();
	$fieldToolTipspackinglist["English"] = array();
	$fieldLabelspackinglist["English"]["ID"] = "ID";
	$fieldToolTipspackinglist["English"]["ID"] = "";
	$fieldLabelspackinglist["English"]["delID"] = "Package Details";
	$fieldToolTipspackinglist["English"]["delID"] = "";
	$fieldLabelspackinglist["English"]["qty"] = "Qty";
	$fieldToolTipspackinglist["English"]["qty"] = "";
	$fieldLabelspackinglist["English"]["unit"] = "Unit";
	$fieldToolTipspackinglist["English"]["unit"] = "";
	$fieldLabelspackinglist["English"]["date"] = "Date";
	$fieldToolTipspackinglist["English"]["date"] = "";
	$fieldLabelspackinglist["English"]["staffID"] = "Staff ID";
	$fieldToolTipspackinglist["English"]["staffID"] = "";
	$fieldLabelspackinglist["English"]["timeStamp"] = "Time Stamp";
	$fieldToolTipspackinglist["English"]["timeStamp"] = "";
	$fieldLabelspackinglist["English"]["notes"] = "Notes";
	$fieldToolTipspackinglist["English"]["notes"] = "";
	$fieldLabelspackinglist["English"]["delNo"] = "Del No";
	$fieldToolTipspackinglist["English"]["delNo"] = "";
	$fieldLabelspackinglist["English"]["orderNo"] = "Order No";
	$fieldToolTipspackinglist["English"]["orderNo"] = "";
	if (count($fieldToolTipspackinglist["English"]))
		$tdatapackinglist[".isUseToolTips"] = true;
}
	
	
	$tdatapackinglist[".NCSearch"] = true;



$tdatapackinglist[".shortTableName"] = "packinglist";
$tdatapackinglist[".nSecOptions"] = 0;
$tdatapackinglist[".recsPerRowList"] = 1;
$tdatapackinglist[".mainTableOwnerID"] = "";
$tdatapackinglist[".moveNext"] = 1;
$tdatapackinglist[".nType"] = 0;

$tdatapackinglist[".strOriginalTableName"] = "packinglist";




$tdatapackinglist[".showAddInPopup"] = false;

$tdatapackinglist[".showEditInPopup"] = false;

$tdatapackinglist[".showViewInPopup"] = false;

$tdatapackinglist[".fieldsForRegister"] = array();

$tdatapackinglist[".listAjax"] = false;

	$tdatapackinglist[".audit"] = false;

	$tdatapackinglist[".locking"] = false;

$tdatapackinglist[".listIcons"] = true;
$tdatapackinglist[".edit"] = true;
$tdatapackinglist[".inlineEdit"] = true;
$tdatapackinglist[".inlineAdd"] = true;
$tdatapackinglist[".view"] = true;

$tdatapackinglist[".exportTo"] = true;

$tdatapackinglist[".printFriendly"] = true;

$tdatapackinglist[".delete"] = true;

$tdatapackinglist[".showSimpleSearchOptions"] = false;

$tdatapackinglist[".showSearchPanel"] = true;

if (isMobile())
	$tdatapackinglist[".isUseAjaxSuggest"] = false;
else 
	$tdatapackinglist[".isUseAjaxSuggest"] = true;

$tdatapackinglist[".rowHighlite"] = true;

// button handlers file names

$tdatapackinglist[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapackinglist[".isUseTimeForSearch"] = false;




$tdatapackinglist[".allSearchFields"] = array();

$tdatapackinglist[".allSearchFields"][] = "ID";
$tdatapackinglist[".allSearchFields"][] = "delNo";
$tdatapackinglist[".allSearchFields"][] = "orderNo";
$tdatapackinglist[".allSearchFields"][] = "delID";
$tdatapackinglist[".allSearchFields"][] = "qty";
$tdatapackinglist[".allSearchFields"][] = "unit";
$tdatapackinglist[".allSearchFields"][] = "date";
$tdatapackinglist[".allSearchFields"][] = "notes";
$tdatapackinglist[".allSearchFields"][] = "staffID";

$tdatapackinglist[".googleLikeFields"][] = "ID";
$tdatapackinglist[".googleLikeFields"][] = "delNo";
$tdatapackinglist[".googleLikeFields"][] = "orderNo";
$tdatapackinglist[".googleLikeFields"][] = "delID";
$tdatapackinglist[".googleLikeFields"][] = "notes";
$tdatapackinglist[".googleLikeFields"][] = "qty";
$tdatapackinglist[".googleLikeFields"][] = "unit";
$tdatapackinglist[".googleLikeFields"][] = "date";
$tdatapackinglist[".googleLikeFields"][] = "staffID";
$tdatapackinglist[".googleLikeFields"][] = "timeStamp";


$tdatapackinglist[".advSearchFields"][] = "ID";
$tdatapackinglist[".advSearchFields"][] = "delNo";
$tdatapackinglist[".advSearchFields"][] = "orderNo";
$tdatapackinglist[".advSearchFields"][] = "delID";
$tdatapackinglist[".advSearchFields"][] = "qty";
$tdatapackinglist[".advSearchFields"][] = "unit";
$tdatapackinglist[".advSearchFields"][] = "date";
$tdatapackinglist[".advSearchFields"][] = "notes";
$tdatapackinglist[".advSearchFields"][] = "staffID";

$tdatapackinglist[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatapackinglist[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapackinglist[".strOrderBy"] = $tstrOrderBy;

$tdatapackinglist[".orderindexes"] = array();

$tdatapackinglist[".sqlHead"] = "SELECT ID,   delNo,   orderNo,   delID,   notes,   qty,   unit,   `date`,   staffID,   `timeStamp`";
$tdatapackinglist[".sqlFrom"] = "FROM packinglist";
$tdatapackinglist[".sqlWhereExpr"] = "";
$tdatapackinglist[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapackinglist[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapackinglist[".arrGroupsPerPage"] = $arrGPP;

$tableKeyspackinglist = array();
$tableKeyspackinglist[] = "ID";
$tdatapackinglist[".Keys"] = $tableKeyspackinglist;

$tdatapackinglist[".listFields"] = array();
$tdatapackinglist[".listFields"][] = "ID";
$tdatapackinglist[".listFields"][] = "delNo";
$tdatapackinglist[".listFields"][] = "orderNo";
$tdatapackinglist[".listFields"][] = "delID";
$tdatapackinglist[".listFields"][] = "qty";
$tdatapackinglist[".listFields"][] = "unit";
$tdatapackinglist[".listFields"][] = "date";
$tdatapackinglist[".listFields"][] = "notes";
$tdatapackinglist[".listFields"][] = "staffID";

$tdatapackinglist[".viewFields"] = array();
$tdatapackinglist[".viewFields"][] = "ID";
$tdatapackinglist[".viewFields"][] = "delNo";
$tdatapackinglist[".viewFields"][] = "orderNo";
$tdatapackinglist[".viewFields"][] = "delID";
$tdatapackinglist[".viewFields"][] = "qty";
$tdatapackinglist[".viewFields"][] = "unit";
$tdatapackinglist[".viewFields"][] = "notes";
$tdatapackinglist[".viewFields"][] = "staffID";

$tdatapackinglist[".addFields"] = array();
$tdatapackinglist[".addFields"][] = "delNo";
$tdatapackinglist[".addFields"][] = "orderNo";
$tdatapackinglist[".addFields"][] = "delID";
$tdatapackinglist[".addFields"][] = "qty";
$tdatapackinglist[".addFields"][] = "unit";
$tdatapackinglist[".addFields"][] = "date";
$tdatapackinglist[".addFields"][] = "notes";
$tdatapackinglist[".addFields"][] = "staffID";

$tdatapackinglist[".inlineAddFields"] = array();
$tdatapackinglist[".inlineAddFields"][] = "delNo";
$tdatapackinglist[".inlineAddFields"][] = "orderNo";
$tdatapackinglist[".inlineAddFields"][] = "delID";
$tdatapackinglist[".inlineAddFields"][] = "qty";
$tdatapackinglist[".inlineAddFields"][] = "unit";
$tdatapackinglist[".inlineAddFields"][] = "date";
$tdatapackinglist[".inlineAddFields"][] = "notes";
$tdatapackinglist[".inlineAddFields"][] = "staffID";

$tdatapackinglist[".editFields"] = array();
$tdatapackinglist[".editFields"][] = "delNo";
$tdatapackinglist[".editFields"][] = "orderNo";
$tdatapackinglist[".editFields"][] = "delID";
$tdatapackinglist[".editFields"][] = "qty";
$tdatapackinglist[".editFields"][] = "unit";
$tdatapackinglist[".editFields"][] = "notes";

$tdatapackinglist[".inlineEditFields"] = array();
$tdatapackinglist[".inlineEditFields"][] = "delNo";
$tdatapackinglist[".inlineEditFields"][] = "orderNo";
$tdatapackinglist[".inlineEditFields"][] = "delID";
$tdatapackinglist[".inlineEditFields"][] = "qty";
$tdatapackinglist[".inlineEditFields"][] = "unit";
$tdatapackinglist[".inlineEditFields"][] = "notes";

$tdatapackinglist[".exportFields"] = array();
$tdatapackinglist[".exportFields"][] = "ID";
$tdatapackinglist[".exportFields"][] = "delNo";
$tdatapackinglist[".exportFields"][] = "orderNo";
$tdatapackinglist[".exportFields"][] = "delID";
$tdatapackinglist[".exportFields"][] = "qty";
$tdatapackinglist[".exportFields"][] = "unit";
$tdatapackinglist[".exportFields"][] = "date";
$tdatapackinglist[".exportFields"][] = "notes";
$tdatapackinglist[".exportFields"][] = "staffID";

$tdatapackinglist[".printFields"] = array();
$tdatapackinglist[".printFields"][] = "ID";
$tdatapackinglist[".printFields"][] = "delNo";
$tdatapackinglist[".printFields"][] = "orderNo";
$tdatapackinglist[".printFields"][] = "delID";
$tdatapackinglist[".printFields"][] = "qty";
$tdatapackinglist[".printFields"][] = "unit";
$tdatapackinglist[".printFields"][] = "date";
$tdatapackinglist[".printFields"][] = "notes";
$tdatapackinglist[".printFields"][] = "staffID";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatapackinglist["ID"] = $fdata;
//	delNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "delNo";
	$fdata["GoodName"] = "delNo";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Del No"; 
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
	
		$fdata["strField"] = "delNo"; 
		$fdata["FullName"] = "delNo";
	
		
		
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
	
		
		
	$tdatapackinglist["delNo"] = $fdata;
//	orderNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "orderNo";
	$fdata["GoodName"] = "orderNo";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Order No"; 
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
	
		$fdata["strField"] = "orderNo"; 
		$fdata["FullName"] = "orderNo";
	
		
		
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
	
		
		
	$tdatapackinglist["orderNo"] = $fdata;
//	delID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "delID";
	$fdata["GoodName"] = "delID";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Package Details"; 
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
	
		$fdata["strField"] = "delID"; 
		$fdata["FullName"] = "delID";
	
		
		
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
			
		
			
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "longname";
	
		
	$edata["LookupTable"] = "Delivery List View";
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
	
		
		
	$tdatapackinglist["delID"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Notes"; 
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
	
		$fdata["strField"] = "notes"; 
		$fdata["FullName"] = "notes";
	
		
		
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
	
		
		
	$tdatapackinglist["notes"] = $fdata;
//	qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "qty";
	$fdata["GoodName"] = "qty";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Qty"; 
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
	
		
		
	$tdatapackinglist["qty"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Unit"; 
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
	
		$fdata["strField"] = "unit"; 
		$fdata["FullName"] = "unit";
	
		
		
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
					$edata["LookupType"] = 0;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				$edata["LCType"] = 4;
			
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "BOX";
	$edata["LookupValues"][] = "PACK";
	$edata["LookupValues"][] = "PCS";

		$edata["Multiselect"] = true; 
	$edata["SelectSize"] = 2;
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
	
		
		
	$tdatapackinglist["unit"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Date"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "date"; 
		$fdata["FullName"] = "`date`";
	
		
		
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
	
		
		
	$tdatapackinglist["date"] = $fdata;
//	staffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "staffID";
	$fdata["GoodName"] = "staffID";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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
	
		
		
	$tdatapackinglist["staffID"] = $fdata;
//	timeStamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "timeStamp";
	$fdata["GoodName"] = "timeStamp";
	$fdata["ownerTable"] = "packinglist";
	$fdata["Label"] = "Time Stamp"; 
	$fdata["FieldType"] = 135;
	
		
		
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "timeStamp"; 
		$fdata["FullName"] = "`timeStamp`";
	
		
		
				
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
	
		
		
	$tdatapackinglist["timeStamp"] = $fdata;

	
$tables_data["packinglist"]=&$tdatapackinglist;
$field_labels["packinglist"] = &$fieldLabelspackinglist;
$fieldToolTips["packinglist"] = &$fieldToolTipspackinglist;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["packinglist"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["packinglist"] = array();

$mIndex = 1-1;
			$strOriginalDetailsTable="delivery";
	$masterParams["mDataSourceTable"]="DR Printing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "DR_Printing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 1;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 0;
	$masterTablesData["packinglist"][$mIndex] = $masterParams;	
		$masterTablesData["packinglist"][$mIndex]["masterKeys"][]="ID";
		$masterTablesData["packinglist"][$mIndex]["masterKeys"][]="DrNo";
		$masterTablesData["packinglist"][$mIndex]["masterKeys"][]="orderID";
		$masterTablesData["packinglist"][$mIndex]["masterKeys"][]="eta";
		$masterTablesData["packinglist"][$mIndex]["detailKeys"][]="delID";
		$masterTablesData["packinglist"][$mIndex]["detailKeys"][]="delNo";
		$masterTablesData["packinglist"][$mIndex]["detailKeys"][]="orderNo";
		$masterTablesData["packinglist"][$mIndex]["detailKeys"][]="date";

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_packinglist()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,   delNo,   orderNo,   delID,   notes,   qty,   unit,   `date`,   staffID,   `timeStamp`";
$proto0["m_strFrom"] = "FROM packinglist";
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
	"m_strName" => "ID",
	"m_strTable" => "packinglist"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "delNo",
	"m_strTable" => "packinglist"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "orderNo",
	"m_strTable" => "packinglist"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "delID",
	"m_strTable" => "packinglist"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "packinglist"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "qty",
	"m_strTable" => "packinglist"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "packinglist"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "packinglist"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "staffID",
	"m_strTable" => "packinglist"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "timeStamp",
	"m_strTable" => "packinglist"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "packinglist";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "ID";
$proto26["m_columns"][] = "delNo";
$proto26["m_columns"][] = "orderNo";
$proto26["m_columns"][] = "delID";
$proto26["m_columns"][] = "notes";
$proto26["m_columns"][] = "qty";
$proto26["m_columns"][] = "unit";
$proto26["m_columns"][] = "date";
$proto26["m_columns"][] = "staffID";
$proto26["m_columns"][] = "timeStamp";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_alias"] = "";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = "0";
$proto27["m_inBrackets"] = "0";
$proto27["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_packinglist = createSqlQuery_packinglist();
										$tdatapackinglist[".sqlquery"] = $queryData_packinglist;

$tableEvents["packinglist"] = new eventsBase;
$tdatapackinglist[".hasEvents"] = false;

$cipherer = new RunnerCipherer("packinglist");

?>