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
$count = count($geo_location) - 1;
foreach ($geo_location as $key => $arItem)
{
	if ($key < $count) {
		$res .= "/" . $arItem;
	}
	if ($key === $count) {
		$arRes["MAIN"]["LINK"] = $res . "/";
		$arRes["MAIN"]["TITLE"] = htmlspecialcharsex($arResult[0]["TITLE"]);
		$res .= "/" . $arItem . "/";
		
		$arRes["SERVICES"]["TITLE"] = ucfirst($arItem);
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
////we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
//$css = $APPLICATION->GetCSSArray();
//if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
//{
//	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
//}
//
//$strReturn .= '<div class="bx-breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';
//
//$itemSize = count($arResult);
//for($index = 0; $index < $itemSize; $index++)
//{
//	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
//	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');
//
//	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
//	{
//		$strReturn .= '
//			<div class="bx-breadcrumb-item" id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
//				'.$arrow.'
//				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">
//					<span itemprop="name">'.$title.'</span>
//				</a>
//				<meta itemprop="position" content="'.($index + 1).'" />
//			</div>';
//	}
//	else
//	{
//		$strReturn .= '
//			<div class="bx-breadcrumb-item">
//				'.$arrow.'
//				<span>'.$title.'</span>
//			</div>';
//	}
//}
//
//$strReturn .= '<div style="clear:both"></div></div>';
//
//return $strReturn;

$strReturn .= '<ul class="breadcrumb">';

$itemSize = count($arResult);
foreach ($arRes as $arItem)
{
	if ($arItem["LINK"] != "")
	{
		$strReturn .= '
			<li><a href="'.$arItem["LINK"].'">'.$arItem["TITLE"].'</a></li>';
	} else {
		$strReturn .= '
			<li>'.$arItem["TITLE"].'</li>';
	}
	
}
//for($index = 0; $index < $itemSize; $index++)
//{
//	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
//	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
//	{
//		$strReturn .= '
//			<li><a href="'.$arResult[$index]["LINK"].'">'.$title.'</a></li>';
//	}
//	else
//	{
//		$strReturn .= '<li><a href="'.$res.'">'.$title.'</a></li>';
//		$strReturn .= '<li>'.$title_geo.'</li>';
//	}
//
//}

$strReturn .= '</ul>';

return $strReturn;