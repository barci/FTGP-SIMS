<?php
$strTableName="orderdetail";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="orderdetail";

$gstrOrderBy="ORDER BY DelDate DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("orderdetail");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["orderdetail"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>