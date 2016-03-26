<?php
$strTableName="Pending Orders";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="orderdetail";

$gstrOrderBy="ORDER BY DelDate ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Pending Orders");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Pending Orders"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>