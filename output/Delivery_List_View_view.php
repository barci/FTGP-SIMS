<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

include("include/dbcommon.php");
include("include/Delivery_List_View_variables.php");
include('include/xtempl.php');
include('classes/viewpage.php');
include("classes/searchclause.php");

add_nocache_headers();

//	check if logged in
if(!isLogged() || CheckPermissionsEvent($strTableName, 'S') && !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: login.php?message=expired"); 
	return;
}

$layout = new TLayout("view2","BoldOrange","MobileOrange");
$layout->blocks["top"] = array();
$layout->skins["pdf"] = "empty";
$layout->blocks["top"][] = "pdf";
$layout->containers["view"] = array();

$layout->containers["view"][] = array("name"=>"viewheader","block"=>"","substyle"=>2);


$layout->containers["view"][] = array("name"=>"wrapper","block"=>"","substyle"=>1, "container"=>"fields");


$layout->containers["fields"] = array();

$layout->containers["fields"][] = array("name"=>"viewfields","block"=>"","substyle"=>1);


$layout->containers["fields"][] = array("name"=>"viewbuttons","block"=>"","substyle"=>2);


$layout->skins["fields"] = "fields";

$layout->skins["view"] = "1";
$layout->blocks["top"][] = "view";
$layout->skins["details"] = "empty";
$layout->blocks["top"][] = "details";$page_layouts["Delivery_List_View_view"] = $layout;




//$cipherer = new RunnerCipherer($strTableName);
	
$xt = new Xtempl();

$query = $gQuery->Copy();

$filename = "";	
$message = "";
$key = array();
$next = array();
$prev = array();
$all = postvalue("all");
$pdf = postvalue("pdf");
$mypage = 1;

//Show view page as popUp or not
$inlineview = (postvalue("onFly") ? true : false);

//If show view as popUp, get parent Id
if($inlineview)
	$parId = postvalue("parId");
else
	$parId = 0;

//Set page id	
if(postvalue("id"))
	$id = postvalue("id");
else
	$id = 1;

//$isNeedSettings = true;//($inlineview && postvalue("isNeedSettings") == 'true') || (!$inlineview);	
	
// assign an id
$xt->assign("id",$id);

//array of params for classes
$params = array("pageType" => PAGE_VIEW, "id" => $id, "tName" => $strTableName);
$params["xt"] = &$xt;
$params["all"] = $all;

//Get array of tabs for edit page
$params['useTabsOnView'] = $gSettings->useTabsOnView();
if($params['useTabsOnView'])
	$params['arrViewTabs'] = $gSettings->getViewTabs();
$pageObject = new ViewPage($params);

// SearchClause class stuff
$pageObject->searchClauseObj->parseRequest();
$_SESSION[$strTableName.'_advsearch'] = serialize($pageObject->searchClauseObj);

// proccess big google maps

// add button events if exist
$pageObject->addButtonHandlers();

//For show detail tables on master page view
$dpParams = array();
if($pageObject->isShowDetailTables && !isMobile())
{
	$ids = $id;
	$pageObject->jsSettings['tableSettings'][$strTableName]['dpParams'] = array();
}

//	Before Process event
if($eventObj->exists("BeforeProcessView"))
	$eventObj->BeforeProcessView($conn, $pageObject);
	
//	read current values from the database
$data = $pageObject->getCurrentRecordInternal();

if (!sizeof($data)) {
	header("Location: Delivery_List_View_list.php?a=return");
	exit();
}

$out = "";
$first = true;
$fieldsArr = array();
$arr = array();
$arr['fName'] = "ID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("ID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "DrNo";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("DrNo");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "orderID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("orderID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "prodID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("prodID");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "longname";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("longname");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "qty";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("qty");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "eta";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("eta");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "delFlag";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("delFlag");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "TimeStamp";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("TimeStamp");
$fieldsArr[] = $arr;
$arr = array();
$arr['fName'] = "staffID";
$arr['viewFormat'] = $pageObject->pSet->getViewFormat("staffID");
$fieldsArr[] = $arr;

$mainTableOwnerID = $pageObject->pSet->getTableOwnerIdField();
$ownerIdValue="";

$pageObject->setGoogleMapsParams($fieldsArr);

while($data)
{
	$xt->assign("show_key1", htmlspecialchars($pageObject->showDBValue("ID", $data)));

	$keylink="";
	$keylink.="&key1=".htmlspecialchars(rawurlencode(@$data["ID"]));

////////////////////////////////////////////
//ID - 
	
	$value = $pageObject->showDBValue("ID", $data, $keylink);
	if($mainTableOwnerID=="ID")
		$ownerIdValue=$value;
	$xt->assign("ID_value",$value);
	if(!$pageObject->isAppearOnTabs("ID"))
		$xt->assign("ID_fieldblock",true);
	else
		$xt->assign("ID_tabfieldblock",true);
////////////////////////////////////////////
//DrNo - 
	
	$value = $pageObject->showDBValue("DrNo", $data, $keylink);
	if($mainTableOwnerID=="DrNo")
		$ownerIdValue=$value;
	$xt->assign("DrNo_value",$value);
	if(!$pageObject->isAppearOnTabs("DrNo"))
		$xt->assign("DrNo_fieldblock",true);
	else
		$xt->assign("DrNo_tabfieldblock",true);
////////////////////////////////////////////
//orderID - 
	
	$value = $pageObject->showDBValue("orderID", $data, $keylink);
	if($mainTableOwnerID=="orderID")
		$ownerIdValue=$value;
	$xt->assign("orderID_value",$value);
	if(!$pageObject->isAppearOnTabs("orderID"))
		$xt->assign("orderID_fieldblock",true);
	else
		$xt->assign("orderID_tabfieldblock",true);
////////////////////////////////////////////
//prodID - 
	
	$value = $pageObject->showDBValue("prodID", $data, $keylink);
	if($mainTableOwnerID=="prodID")
		$ownerIdValue=$value;
	$xt->assign("prodID_value",$value);
	if(!$pageObject->isAppearOnTabs("prodID"))
		$xt->assign("prodID_fieldblock",true);
	else
		$xt->assign("prodID_tabfieldblock",true);
////////////////////////////////////////////
//longname - 
	
	$value = $pageObject->showDBValue("longname", $data, $keylink);
	if($mainTableOwnerID=="longname")
		$ownerIdValue=$value;
	$xt->assign("longname_value",$value);
	if(!$pageObject->isAppearOnTabs("longname"))
		$xt->assign("longname_fieldblock",true);
	else
		$xt->assign("longname_tabfieldblock",true);
////////////////////////////////////////////
//qty - 
	
	$value = $pageObject->showDBValue("qty", $data, $keylink);
	if($mainTableOwnerID=="qty")
		$ownerIdValue=$value;
	$xt->assign("qty_value",$value);
	if(!$pageObject->isAppearOnTabs("qty"))
		$xt->assign("qty_fieldblock",true);
	else
		$xt->assign("qty_tabfieldblock",true);
////////////////////////////////////////////
//eta - Long Date
	
	$value = $pageObject->showDBValue("eta", $data, $keylink);
	if($mainTableOwnerID=="eta")
		$ownerIdValue=$value;
	$xt->assign("eta_value",$value);
	if(!$pageObject->isAppearOnTabs("eta"))
		$xt->assign("eta_fieldblock",true);
	else
		$xt->assign("eta_tabfieldblock",true);
////////////////////////////////////////////
//delFlag - 
	
	$value = $pageObject->showDBValue("delFlag", $data, $keylink);
	if($mainTableOwnerID=="delFlag")
		$ownerIdValue=$value;
	$xt->assign("delFlag_value",$value);
	if(!$pageObject->isAppearOnTabs("delFlag"))
		$xt->assign("delFlag_fieldblock",true);
	else
		$xt->assign("delFlag_tabfieldblock",true);
////////////////////////////////////////////
//TimeStamp - Short Date
	
	$value = $pageObject->showDBValue("TimeStamp", $data, $keylink);
	if($mainTableOwnerID=="TimeStamp")
		$ownerIdValue=$value;
	$xt->assign("TimeStamp_value",$value);
	if(!$pageObject->isAppearOnTabs("TimeStamp"))
		$xt->assign("TimeStamp_fieldblock",true);
	else
		$xt->assign("TimeStamp_tabfieldblock",true);
////////////////////////////////////////////
//staffID - 
	
	$value = $pageObject->showDBValue("staffID", $data, $keylink);
	if($mainTableOwnerID=="staffID")
		$ownerIdValue=$value;
	$xt->assign("staffID_value",$value);
	if(!$pageObject->isAppearOnTabs("staffID"))
		$xt->assign("staffID_fieldblock",true);
	else
		$xt->assign("staffID_tabfieldblock",true);

/////////////////////////////////////////////////////////////
if($pageObject->isShowDetailTables && !isMobile())
{
	if(count($dpParams['ids']))
	{
		$xt->assign("detail_tables",true);
		include('classes/listpage.php');
		include('classes/listpage_embed.php');
		include('classes/listpage_dpinline.php');
	}
	
	$dControlsMap = array();
	$dViewControlsMap = array();
	
	for($d=0;$d<count($dpParams['ids']);$d++)
	{
		$options = array();
		//array of params for classes
		$options["mode"] = LIST_DETAILS;
		$options["pageType"] = PAGE_LIST;
		$options["masterPageType"] = PAGE_VIEW;
		$options["mainMasterPageType"] = PAGE_VIEW;
		$options['masterTable'] = "Delivery List View";
		$options['firstTime'] = 1;
		
		$strTableName = $dpParams['strTableNames'][$d];
		include_once("include/".GetTableURL($strTableName)."_settings.php");
		if(!CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
		{
			$strTableName = "Delivery List View";
			continue;
		}
		
		$layout = GetPageLayout(GoodFieldName($strTableName), PAGE_LIST);
		if($layout)
		{
			$rtl = $xt->getReadingOrder() == 'RTL' ? 'RTL' : '';
			$xt->cssFiles[] = array("stylepath" => "styles/".$layout->style.'/style'.$rtl.".css"
				, "pagestylepath" => "pagestyles/".$layout->name.$rtl.".css");
			$xt->IEcssFiles[] = array("stylepathIE" => "styles/".$layout->style.'/styleIE'.".css");
		}
		
		$options['xt'] = new Xtempl();
		$options['id'] = $dpParams['ids'][$d];
		$options['flyId'] = $pageObject->genId()+1;
		$mkr = 1;
		foreach($mKeys[$strTableName] as $mk)
			$options['masterKeysReq'][$mkr++] = $data[$mk];

		$listPageObject = ListPage::createListPage($strTableName, $options);
		
		// prepare code
		$listPageObject->prepareForBuildPage();
		
		// show page
		if($listPageObject->permis[$strTableName]['search'] && $listPageObject->rowsFound)
		{
			//set page events
			foreach($listPageObject->eventsObject->events as $event => $name)
				$listPageObject->xt->assign_event($event, $listPageObject->eventsObject, $event, array());
			
			//add detail settings to master settings
			$listPageObject->addControlsJSAndCSS();
			$listPageObject->fillSetCntrlMaps();
			$pageObject->jsSettings['tableSettings'][$strTableName]	= $listPageObject->jsSettings['tableSettings'][$strTableName];
			$dControlsMap[$strTableName] = $listPageObject->controlsMap;
			$dViewControlsMap[$strTableName] = $listPageObject->viewControlsMap;
			foreach($listPageObject->jsSettings['global']['shortTNames'] as $keySet=>$val)
			{
				if(!array_key_exists($keySet,$pageObject->settingsMap["globalSettings"]['shortTNames']))
					$pageObject->settingsMap["globalSettings"]['shortTNames'][$keySet] = $val;
			}
			
			//Add detail's js files to master's files
			$pageObject->copyAllJSFiles($listPageObject->grabAllJSFiles());
			
			//Add detail's css files to master's files
			$pageObject->copyAllCSSFiles($listPageObject->grabAllCSSFiles());
		
			$xtParams = array("method"=>'showPage', "params"=> false);
			$xtParams['object'] = $listPageObject;
			$xt->assign("displayDetailTable_".GoodFieldName($listPageObject->tName), $xtParams);
		
			$pageObject->controlsMap['dpTablesParams'][] = array('tName'=>$strTableName, 'id'=>$options['id']);
		}
	}
	$pageObject->controlsMap['dControlsMap'] = $dControlsMap;
	$pageObject->viewControlsMap['dViewControlsMap'] = $dViewControlsMap; 
	$strTableName = "Delivery List View";
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin prepare for Next Prev button
if(!@$_SESSION[$strTableName."_noNextPrev"] && !$inlineview && !$pdf)
{
	$pageObject->getNextPrevRecordKeys($data,"Search",$next,$prev);
}
//End prepare for Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


if ($pageObject->googleMapCfg['isUseGoogleMap'])
{
	$pageObject->initGmaps();
}

$pageObject->addCommonJs();

//fill tab groups name and sections name to controls
$pageObject->fillCntrlTabGroups();

if(!$inlineview)
{
	$pageObject->body["begin"].="<script type=\"text/javascript\" src=\"include/loadfirst.js\"></script>\r\n";
		$pageObject->body["begin"].= "<script type=\"text/javascript\" src=\"include/lang/".getLangFileName(mlang_getcurrentlang()).".js\"></script>";		
	
	$pageObject->jsSettings['tableSettings'][$strTableName]["keys"] = $pageObject->jsKeys;
	$pageObject->jsSettings['tableSettings'][$strTableName]['keyFields'] = $pageObject->keyFields;
	$pageObject->jsSettings['tableSettings'][$strTableName]["prevKeys"] = $prev;
	$pageObject->jsSettings['tableSettings'][$strTableName]["nextKeys"] = $next; 
	
	// assign body end
	$pageObject->body['end'] = array();
	$pageObject->body['end']["method"] = "assignBodyEnd";
	$pageObject->body['end']["object"] = &$pageObject;
	
	$xt->assign("body",$pageObject->body);
	$xt->assign("flybody",true);
}
else
{
	$xt->assign("footer",false);
	$xt->assign("header",false);
	$xt->assign("flybody",$pageObject->body);
	$xt->assign("body",true);
	$xt->assign("pdflink_block",false);
	
	$pageObject->fillSetCntrlMaps();
	
	$returnJSON['controlsMap'] = $pageObject->controlsHTMLMap;
	$returnJSON['viewControlsMap'] = $pageObject->viewControlsHTMLMap;
	$returnJSON['settings'] = $pageObject->jsSettings;
}
$xt->assign("style_block",true);
$xt->assign("stylefiles_block",true);

$editlink="";
$editkeys=array();
	$editkeys["editid1"]=postvalue("editid1");
foreach($editkeys as $key=>$val)
{
	if($editlink)
		$editlink.="&";
	$editlink.=$key."=".$val;
}
$xt->assign("editlink_attrs","id=\"editLink".$id."\" name=\"editLink".$id."\" onclick=\"window.location.href='Delivery_List_View_edit.php?".$editlink."'\"");

$strPerm = GetUserPermissions($strTableName);
if(CheckSecurity($ownerIdValue,"Edit") && !$inlineview && strpos($strPerm, "E")!==false)
	$xt->assign("edit_button",true);
else
	$xt->assign("edit_button",false);

if(!$pdf && !$all && !$inlineview)
{
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Begin show Next Prev button
	$nextlink=$prevlink="";
	if(count($next))
	{
		$xt->assign("next_button",true);
	 		$nextlink .="editid1=".htmlspecialchars(rawurlencode($next[1-1]));
		$xt->assign("nextbutton_attrs","id=\"nextButton".$id."\"");
	}
	else 
		$xt->assign("next_button",false);
	if(count($prev))
	{
		$xt->assign("prev_button",true);
			$prevlink .="editid1=".htmlspecialchars(rawurlencode($prev[1-1]));
		$xt->assign("prevbutton_attrs","id=\"prevButton".$id."\"");
	}
	else 
		$xt->assign("prev_button",false);
//End show Next Prev button
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$xt->assign("back_button",true);
	$xt->assign("backbutton_attrs","id=\"backButton".$id."\"");
}

$oldtemplatefile = $pageObject->templatefile;

if(!$all)
{
	if($eventObj->exists("BeforeShowView"))
	{
		$templatefile = $pageObject->templatefile;
		$eventObj->BeforeShowView($xt,$templatefile,$data, $pageObject);
		$pageObject->templatefile = $templatefile;
	}
	if(!$pdf)
	{
		if(!$inlineview)
			$xt->display($pageObject->templatefile);
		else{
				$xt->load_template($pageObject->templatefile);
				$returnJSON['html'] = $xt->fetch_loaded('style_block').$xt->fetch_loaded('body');
				if(count($pageObject->includes_css))
					$returnJSON['CSSFiles'] = array_unique($pageObject->includes_css);
				if(count($pageObject->includes_cssIE))
					$returnJSON['CSSFilesIE'] = array_unique($pageObject->includes_cssIE);				
				$returnJSON['idStartFrom'] = $id+1;
				$returnJSON["additionalJS"] = $pageObject->grabAllJsFiles();
				echo (my_json_encode($returnJSON)); 
			}
	}
	break;
}
}


?>
