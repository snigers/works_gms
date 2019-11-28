<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?

$rsSect = CIBlockSection::GetList(array(),array('IBLOCK_ID' => GEO_LOC_ID, "NAME" => "%".$_GET["loc_request"]."%"), false, array("ID", "IBLOCK_SECTION_ID", "CODE", "NAME", "UF_GEO_EMAIL"));
$result = array();
while ($arSect = $rsSect->GetNext())
{
	
	if ($arSect["IBLOCK_SECTION_ID"] != "")
	{
		
		$rsSections = CIBlockSection::GetList(array(),array('IBLOCK_ID' => GEO_LOC_ID, "ID" => $arSect["IBLOCK_SECTION_ID"]), false, array("ID", "IBLOCK_SECTION_ID", "CODE", "NAME", "UF_GEO_EMAIL"));
		if ($arSection = $rsSections->Fetch())
		{
			if ($arSection["IBLOCK_SECTION_ID"] != "")
			{
				$rsSectionsState = CIBlockSection::GetList(array(),array('IBLOCK_ID' => GEO_LOC_ID, "ID" => $arSection["IBLOCK_SECTION_ID"]), false, array("ID", "IBLOCK_SECTION_ID", "CODE", "NAME", "UF_GEO_EMAIL"));
				if ($rsSectionsState = $rsSectionsState->Fetch())
				{
					$arSect["STATE"]["ID"] = $rsSectionsState["ID"];
					$arSect["STATE"]["NAME"] = $rsSectionsState["NAME"];
					$arSect["STATE"]["CODE"] = $rsSectionsState["CODE"];
					
					$arSect["REGION"]["ID"] = $arSection["ID"];
					$arSect["REGION"]["NAME"] = $arSection["NAME"];
					$arSect["REGION"]["CODE"] = $arSection["CODE"];
				}
			} else {
				
				$arSect["STATE"]["ID"] = $arSection["ID"];
				$arSect["STATE"]["NAME"] = $arSection["NAME"];
				$arSect["STATE"]["CODE"] = $arSection["CODE"];
			}
		}
	}
	
	$result[] = $arSect;
}


$geo_result = array();
foreach ($result as $arItem)
{
	$item = array();
	if ($arItem["IBLOCK_SECTION_ID"] == "")
	{
		$item["state"] = $arItem["NAME"];
		$item["url"] = "/" . $arItem["CODE"] . "/";
		
	} else {
		if (!empty($arItem["STATE"]))
		{
			$item["state"] = $arItem["STATE"]["NAME"];
			$item["url"] = "/" . $arItem["STATE"]["CODE"] . "/";
		}
		if (!empty($arItem["REGION"]))
		{
			$item["region"] = $arItem["REGION"]["NAME"];
			$item["city"] = $arItem["NAME"];
			$item["url"] .= $arItem["REGION"]["CODE"] . "/" . $arItem["CODE"] . "/";
			
		} else {
			$item["region"] = $arItem["NAME"];
			$item["url"] = "/" . $arItem["STATE"]["CODE"] . "/" . $arItem["CODE"] . "/";
		}
		
	}
	$geo_result[] = $item;
}


echo json_encode($geo_result);







?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");?>