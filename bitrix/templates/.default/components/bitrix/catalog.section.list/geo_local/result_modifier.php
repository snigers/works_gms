<?
if(!defined("B_PROLOG_INCLUDED")  || B_PROLOG_INCLUDED!==true)die();

$arSection = array();

$arFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID']);
$rsSect = CIBlockSection::GetList(array("ID" => "ASC"), $arFilter, false, array("ID", "NAME"));
while ($arSect = $rsSect->GetNext())
{
	$arSection[] = $arSect;
}
$arResult["SECTION_NAME"] = $arSection;

