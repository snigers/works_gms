<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


$geo_location = $_SERVER["REQUEST_URI"];
$geo_location = trim($geo_location, "/");
if (strstr($geo_location, "/?", true) != "")
{
	$geo_location = strstr($geo_location, "/?", true);
}
$geo_location = explode("/", $geo_location);

$res = "";
$count = count($geo_location) - 2;
$arRes = array();

foreach ($geo_location as $key => $arItem)
{
	if ($key < $count) {
		$res .= $arItem;
	}
	if ($key === $count) {
		if ($_SESSION["GEO_DATA"])
		{
			$arRes["MAIN"]["LINK"] = $_SESSION["GEO_DATA"]["URL_SECTION"];
		} else {
			$arRes["MAIN"]["LINK"] = $res . "/";
		}
		$arRes["MAIN"]["TITLE"] = htmlspecialcharsex($arResult[0]["TITLE"]);
		
		if ($arItem == "services")
		{
			$arRes["SERVICES"]["LINK"] = $_SESSION["GEO_DATA"]["URL_SECTION"] . $arItem . "/";
		} else {
			$arRes["SERVICES"]["LINK"] = "/" . $arItem . "/";
		}
		
		$arRes["SERVICES"]["TITLE"] = ucfirst($arItem);
	}
	if ($key > $count) {
		$arRes["LOCAL"]["TITLE"] = htmlspecialcharsex($arResult[count($arResult) - 1]["TITLE"]);
	}
}
/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
//


$strReturn .= '<ul class="breadcrumb">';

$itemSize = count($arResult);
foreach ($arRes as $arItem)
{
	if ($arItem["LINK"] != "")
	{
		$strReturn .= '
			<li><a class="breadcrumb_link" href="'.$arItem["LINK"].'">'.$arItem["TITLE"].'</a></li>';
	} else {
		$strReturn .= '
			<li>'.$arItem["TITLE"].'</li>';
	}
	
}

$strReturn .= '</ul>';

return $strReturn;