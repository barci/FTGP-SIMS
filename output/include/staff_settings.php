<?php
require_once(getabspath("classes/cipherer.php"));
$tdatastaff = array();
	$tdatastaff[".NumberOfChars"] = 80; 
	$tdatastaff[".ShortName"] = "staff";
	$tdatastaff[".OwnerID"] = "";
	$tdatastaff[".OriginalTable"] = "staff";

//	field labels
$fieldLabelsstaff = array();
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaff["English"] = array();
	$fieldToolTipsstaff["English"] = array();
	$fieldLabelsstaff["English"]["Name"] = "Name";
	$fieldToolTipsstaff["English"]["Name"] = "";
	$fieldLabelsstaff["English"]["Address"] = "Address";
	$fieldToolTipsstaff["English"]["Address"] = "";
	$fieldLabelsstaff["English"]["StaffID"] = "Staff ID";
	$fieldToolTipsstaff["English"]["StaffID"] = "";
	$fieldLabelsstaff["English"]["Fname"] = "First Name";
	$fieldToolTipsstaff["English"]["Fname"] = "";
	$fieldLabelsstaff["English"]["Lname"] = "Last Name";
	$fieldToolTipsstaff["English"]["Lname"] = "";
	$fieldLabelsstaff["English"]["DOB"] = "Date of Birth";
	$fieldToolTipsstaff["English"]["DOB"] = "";
	$fieldLabelsstaff["English"]["Sex"] = "Sex";
	$fieldToolTipsstaff["English"]["Sex"] = "";
	$fieldLabelsstaff["English"]["Phone"] = "Phone";
	$fieldToolTipsstaff["English"]["Phone"] = "";
	$fieldLabelsstaff["English"]["RoleID"] = "Role ID";
	$fieldToolTipsstaff["English"]["RoleID"] = "";
	$fieldLabelsstaff["English"]["UserName"] = "User Name";
	$fieldToolTipsstaff["English"]["UserName"] = "";
	$fieldLabelsstaff["English"]["Password"] = "Password";
	$fieldToolTipsstaff["English"]["Password"] = "";
	$fieldLabelsstaff["English"][""] = "";
	$fieldToolTipsstaff["English"][""] = "";
	$fieldLabelsstaff["English"][""] = "";
	$fieldToolTipsstaff["English"][""] = "";
	if (count($fieldToolTipsstaff["English"]))
		$tdatastaff[".isUseToolTips"] = true;
}
	
	
	$tdatastaff[".NCSearch"] = true;



$tdatastaff[".shortTableName"] = "staff";
$tdatastaff[".nSecOptions"] = 0;
$tdatastaff[".recsPerRowList"] = 1;
$tdatastaff[".mainTableOwnerID"] = "";
$tdatastaff[".moveNext"] = 1;
$tdatastaff[".nType"] = 0;

$tdatastaff[".strOriginalTableName"] = "staff";




$tdatastaff[".showAddInPopup"] = true;

$tdatastaff[".showEditInPopup"] = true;

$tdatastaff[".showViewInPopup"] = true;

$tdatastaff[".fieldsForRegister"] = array();

if (!isMobile())
	$tdatastaff[".listAjax"] = true;
else 
	$tdatastaff[".listAjax"] = false;

	$tdatastaff[".audit"] = false;

	$tdatastaff[".locking"] = false;

$tdatastaff[".listIcons"] = true;
$tdatastaff[".edit"] = true;



$tdatastaff[".delete"] = true;

$tdatastaff[".showSimpleSearchOptions"] = false;

$tdatastaff[".showSearchPanel"] = true;

if (isMobile())
	$tdatastaff[".isUseAjaxSuggest"] = false;
else 
	$tdatastaff[".isUseAjaxSuggest"] = true;

$tdatastaff[".rowHighlite"] = true;

// button handlers file names

$tdatastaff[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaff[".isUseTimeForSearch"] = false;




$tdatastaff[".allSearchFields"] = array();

$tdatastaff[".allSearchFields"][] = "StaffID";
$tdatastaff[".allSearchFields"][] = "UserName";
$tdatastaff[".allSearchFields"][] = "RoleID";
$tdatastaff[".allSearchFields"][] = "Name";
$tdatastaff[".allSearchFields"][] = "Fname";
$tdatastaff[".allSearchFields"][] = "Lname";
$tdatastaff[".allSearchFields"][] = "Sex";
$tdatastaff[".allSearchFields"][] = "Address";
$tdatastaff[".allSearchFields"][] = "DOB";
$tdatastaff[".allSearchFields"][] = "Phone";

$tdatastaff[".googleLikeFields"][] = "StaffID";
$tdatastaff[".googleLikeFields"][] = "Name";
$tdatastaff[".googleLikeFields"][] = "Fname";
$tdatastaff[".googleLikeFields"][] = "Lname";
$tdatastaff[".googleLikeFields"][] = "DOB";
$tdatastaff[".googleLikeFields"][] = "Address";
$tdatastaff[".googleLikeFields"][] = "Sex";
$tdatastaff[".googleLikeFields"][] = "Phone";
$tdatastaff[".googleLikeFields"][] = "RoleID";
$tdatastaff[".googleLikeFields"][] = "UserName";
$tdatastaff[".googleLikeFields"][] = "Password";


$tdatastaff[".advSearchFields"][] = "StaffID";
$tdatastaff[".advSearchFields"][] = "UserName";
$tdatastaff[".advSearchFields"][] = "RoleID";
$tdatastaff[".advSearchFields"][] = "Name";
$tdatastaff[".advSearchFields"][] = "Fname";
$tdatastaff[".advSearchFields"][] = "Lname";
$tdatastaff[".advSearchFields"][] = "Sex";
$tdatastaff[".advSearchFields"][] = "Address";
$tdatastaff[".advSearchFields"][] = "DOB";
$tdatastaff[".advSearchFields"][] = "Phone";

$tdatastaff[".isTableType"] = "list";

	



// Access doesn't support subqueries from the same table as main



$tdatastaff[".pageSize"] = 20;

$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastaff[".strOrderBy"] = $tstrOrderBy;

$tdatastaff[".orderindexes"] = array();

$tdatastaff[".sqlHead"] = "SELECT StaffID,   Name,   Fname,   Lname,   DOB,   Address,   Sex,   Phone,   RoleID,   UserName,   Password";
$tdatastaff[".sqlFrom"] = "FROM staff";
$tdatastaff[".sqlWhereExpr"] = "";
$tdatastaff[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaff[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaff[".arrGroupsPerPage"] = $arrGPP;

$tableKeysstaff = array();
$tableKeysstaff[] = "StaffID";
$tdatastaff[".Keys"] = $tableKeysstaff;

$tdatastaff[".listFields"] = array();
$tdatastaff[".listFields"][] = "UserName";
$tdatastaff[".listFields"][] = "RoleID";
$tdatastaff[".listFields"][] = "Name";
$tdatastaff[".listFields"][] = "Fname";
$tdatastaff[".listFields"][] = "Lname";
$tdatastaff[".listFields"][] = "Sex";
$tdatastaff[".listFields"][] = "Address";
$tdatastaff[".listFields"][] = "DOB";
$tdatastaff[".listFields"][] = "Phone";

$tdatastaff[".viewFields"] = array();

$tdatastaff[".addFields"] = array();
$tdatastaff[".addFields"][] = "UserName";
$tdatastaff[".addFields"][] = "Password";
$tdatastaff[".addFields"][] = "RoleID";
$tdatastaff[".addFields"][] = "Name";
$tdatastaff[".addFields"][] = "Fname";
$tdatastaff[".addFields"][] = "Lname";
$tdatastaff[".addFields"][] = "Sex";
$tdatastaff[".addFields"][] = "Address";
$tdatastaff[".addFields"][] = "DOB";
$tdatastaff[".addFields"][] = "Phone";

$tdatastaff[".inlineAddFields"] = array();

$tdatastaff[".editFields"] = array();
$tdatastaff[".editFields"][] = "UserName";
$tdatastaff[".editFields"][] = "Password";
$tdatastaff[".editFields"][] = "RoleID";
$tdatastaff[".editFields"][] = "Name";
$tdatastaff[".editFields"][] = "Fname";
$tdatastaff[".editFields"][] = "Lname";
$tdatastaff[".editFields"][] = "Sex";
$tdatastaff[".editFields"][] = "Address";
$tdatastaff[".editFields"][] = "DOB";
$tdatastaff[".editFields"][] = "Phone";

$tdatastaff[".inlineEditFields"] = array();

$tdatastaff[".exportFields"] = array();

$tdatastaff[".printFields"] = array();

//	StaffID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "StaffID";
	$fdata["GoodName"] = "StaffID";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Staff ID"; 
	$fdata["FieldType"] = 3;
	
		$fdata["AutoInc"] = true;
	
		
		
		
		
		
		
		
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
	
		
		
	$tdatastaff["StaffID"] = $fdata;
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Name"; 
		$fdata["FullName"] = "Name";
	
		
		
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
	
		
		
	$tdatastaff["Name"] = $fdata;
//	Fname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Fname";
	$fdata["GoodName"] = "Fname";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "First Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Fname"; 
		$fdata["FullName"] = "Fname";
	
		
		
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
	
		
		
	$tdatastaff["Fname"] = $fdata;
//	Lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Lname";
	$fdata["GoodName"] = "Lname";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Last Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Lname"; 
		$fdata["FullName"] = "Lname";
	
		
		
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
	
		
		
	$tdatastaff["Lname"] = $fdata;
//	DOB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DOB";
	$fdata["GoodName"] = "DOB";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Date of Birth"; 
	$fdata["FieldType"] = 7;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "DOB"; 
		$fdata["FullName"] = "DOB";
	
		
		
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
	
		
		
	$tdatastaff["DOB"] = $fdata;
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Address"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Address"; 
		$fdata["FullName"] = "Address";
	
		
		
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
	
		
		
	$tdatastaff["Address"] = $fdata;
//	Sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Sex";
	$fdata["GoodName"] = "Sex";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Sex"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Sex"; 
		$fdata["FullName"] = "Sex";
	
		
		
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
	
		
		
	$tdatastaff["Sex"] = $fdata;
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Phone"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "Phone"; 
		$fdata["FullName"] = "Phone";
	
		
		
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
	
		
		
	$tdatastaff["Phone"] = $fdata;
//	RoleID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RoleID";
	$fdata["GoodName"] = "RoleID";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Role ID"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
		
		
	
//	Begin Lookup settings
								$edata["LookupType"] = 2;
	$edata["freeInput"] = 0;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
				
		
			
	$edata["LinkField"] = "RoleID";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "RoleName";
	
		
	$edata["LookupTable"] = "role";
	$edata["LookupOrderBy"] = "";
	
		
		
		
		
		
				
	
	
	//	End Lookup Settings

		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
		
		
//	Begin validation
	$edata["validateAs"] = array();
		
	//	End validation
	
		
				
		$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
		$fdata["isSeparate"] = false;
	
		
		
	$tdatastaff["RoleID"] = $fdata;
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "User Name"; 
	$fdata["FieldType"] = 200;
	
		
		
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "UserName"; 
		$fdata["FullName"] = "UserName";
	
		
		
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
	
		
		
	$tdatastaff["UserName"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "staff";
	$fdata["Label"] = "Password"; 
	$fdata["FieldType"] = 200;
	
		
		
		
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		
		
		
		
		$fdata["strField"] = "Password"; 
		$fdata["FullName"] = "Password";
	
		
		
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
	
	$edata = array("EditFormat" => "Password");
	
		
		
	
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
	
		
		
	$tdatastaff["Password"] = $fdata;

	
$tables_data["staff"]=&$tdatastaff;
$field_labels["staff"] = &$fieldLabelsstaff;
$fieldToolTips["staff"] = &$fieldToolTipsstaff;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["staff"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["staff"] = array();

// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_staff()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "StaffID,   Name,   Fname,   Lname,   DOB,   Address,   Sex,   Phone,   RoleID,   UserName,   Password";
$proto0["m_strFrom"] = "FROM staff";
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
	"m_strName" => "StaffID",
	"m_strTable" => "staff"
));

$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "staff"
));

$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Fname",
	"m_strTable" => "staff"
));

$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Lname",
	"m_strTable" => "staff"
));

$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "DOB",
	"m_strTable" => "staff"
));

$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "staff"
));

$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Sex",
	"m_strTable" => "staff"
));

$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "staff"
));

$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "RoleID",
	"m_strTable" => "staff"
));

$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "staff"
));

$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "staff"
));

$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strName"] = "staff";
$proto28["m_columns"] = array();
$proto28["m_columns"][] = "StaffID";
$proto28["m_columns"][] = "Name";
$proto28["m_columns"][] = "Fname";
$proto28["m_columns"][] = "Lname";
$proto28["m_columns"][] = "DOB";
$proto28["m_columns"][] = "Address";
$proto28["m_columns"][] = "Sex";
$proto28["m_columns"][] = "Phone";
$proto28["m_columns"][] = "RoleID";
$proto28["m_columns"][] = "UserName";
$proto28["m_columns"][] = "Password";
$obj = new SQLTable($proto28);

$proto27["m_table"] = $obj;
$proto27["m_alias"] = "";
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = "0";
$proto29["m_inBrackets"] = "0";
$proto29["m_useAlias"] = "0";
$obj = new SQLLogicalExpr($proto29);

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staff = createSqlQuery_staff();
											$tdatastaff[".sqlquery"] = $queryData_staff;

$tableEvents["staff"] = new eventsBase;
$tdatastaff[".hasEvents"] = false;

$cipherer = new RunnerCipherer("staff");

?>