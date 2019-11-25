<?
if(!defined("B_PROLOG_INCLUDED")  || B_PROLOG_INCLUDED!==true)die();

// Check selected local service or country
if ($arResult["PROPERTIES"]["LOCAL_OR_CROSS_COUNTRY"]["VALUE"] != "Y")
{
	CModule::IncludeModule('iblock');
	foreach ($arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key] = GetIBlockElement($arItem);
		$arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key]["PREVIEW_PICTURE"] = CFile::GetPath($arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key]["PREVIEW_PICTURE"]);
	}
	
	foreach ($arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key] = GetIBlockElement($arPic);
		$arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key]["PREVIEW_PICTURE"] = CFile::GetPath($arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key]["PREVIEW_PICTURE"]);
	}
	foreach ($arResult["PROPERTIES"]["PIC_REVIEWS"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["PIC_REVIEWS"]["VALUE"][$key] = CFile::GetPath($arPic);
	}
	foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["GALLERY"]["VALUE"][$key] = CFile::GetPath($arItem);
	}
	foreach ($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key] = GetIBlockElement($arItem);
		$arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key]["PREVIEW_PICTURE"] = CFile::GetPath($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key]["PREVIEW_PICTURE"]);
	}
	
} else {
	CModule::IncludeModule('iblock');
	
	foreach ($arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["VALUE"][$key] = CFile::GetPath($arItem);
	}
	foreach ($arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key] = GetIBlockElement($arPic);
		$arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key]["PREVIEW_PICTURE"] = CFile::GetPath($arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key]["PREVIEW_PICTURE"]);
	}
	foreach ($arResult["PROPERTIES"]["PIC_REVIEWS_CROSS"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["PIC_REVIEWS_CROSS"]["VALUE"][$key] = CFile::GetPath($arPic);
	}
	foreach ($arResult["PROPERTIES"]["GALLERY_VAR2"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["GALLERY_VAR2"]["VALUE"][$key] = CFile::GetPath($arItem);
	}
	foreach ($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key] = GetIBlockElement($arItem);
		$arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key]["PREVIEW_PICTURE"] = CFile::GetPath($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key]["PREVIEW_PICTURE"]);
	}
}