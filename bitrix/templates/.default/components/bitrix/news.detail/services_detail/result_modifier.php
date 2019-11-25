<?
if(!defined("B_PROLOG_INCLUDED")  || B_PROLOG_INCLUDED!==true)die();

// Check selected local service or country
if ($arResult["PROPERTIES"]["LOCAL_OR_CROSS_COUNTRY"]["VALUE"] != "Y")
{
	CModule::IncludeModule('iblock');
	foreach ($arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key] = GetIBlockElement($arItem);
		$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key]["PREVIEW_PICTURE"], array('width' => 123, 'height' => 147), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"][$key]["PREVIEW_PICTURE"] = $img["src"];
	}
	
	foreach ($arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key] = GetIBlockElement($arPic);
		$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key]["PREVIEW_PICTURE"], array('width' => 390, 'height' => 300), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"][$key]["PREVIEW_PICTURE"] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["PIC_REVIEWS"]["VALUE"] as $key => $arPic)
	{
		$img = CFile::ResizeImageGet($arPic, array('width' => 163, 'height' => 90), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["PIC_REVIEWS"]["VALUE"][$key] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $key => $arItem)
	{
		$img = CFile::ResizeImageGet($arItem, array('width' => 635, 'height' => 545), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["GALLERY"]["VALUE"][$key] =  $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key] = GetIBlockElement($arItem);
		$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key]["PREVIEW_PICTURE"], array('width' => 100, 'height' => 103), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"][$key]["PREVIEW_PICTURE"] = $img["src"];
	}
	
} else {
	CModule::IncludeModule('iblock');
	
	foreach ($arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["VALUE"] as $key => $arItem)
	{
		$img = CFile::ResizeImageGet($arItem, array('width' => 155, 'height' => 147), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["VALUE"][$key] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"] as $key => $arPic)
	{
		$arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key] = GetIBlockElement($arPic);
		$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key]["PREVIEW_PICTURE"], array('width' => 424, 'height' => 329), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"][$key]["PREVIEW_PICTURE"] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["PIC_REVIEWS_CROSS"]["VALUE"] as $key => $arPic)
	{
		$img = CFile::ResizeImageGet($arPic, array('width' => 163, 'height' => 90), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["PIC_REVIEWS_CROSS"]["VALUE"][$key] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["GALLERY_VAR2"]["VALUE"] as $key => $arItem)
	{
		$img = CFile::ResizeImageGet($arItem, array('width' => 635, 'height' => 545), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["GALLERY_VAR2"]["VALUE"][$key] = $img["src"];
	}
	foreach ($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"] as $key => $arItem)
	{
		$arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key] = GetIBlockElement($arItem);
		$img = CFile::ResizeImageGet($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key]["PREVIEW_PICTURE"], array('width' => 100, 'height' => 103), BX_RESIZE_IMAGE_EXACT);
		$arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"][$key]["PREVIEW_PICTURE"] = $img["src"];
	}
}