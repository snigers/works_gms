<?
if(!defined("B_PROLOG_INCLUDED")  || B_PROLOG_INCLUDED!==true)die();

$geo_session = $_SESSION["GEO_DATA"];

$geo_local = $_SERVER['REQUEST_URI'];
//pr($geo_session);
//pr($geo_local);
//pr($aMenuLinks);
//if (strstr($geo_local, "/?", true) != "")
//{
//	$geo_local = strstr($geo_local, "/?", true);
//}
//$geo_local = trim($geo_local, "/");
//$geo_local = explode("/", $geo_local);

foreach ($aMenuLinks  as $key => $arItem)
{
	switch ($arItem[1]) {
		case "/services/":
			$aMenuLinks[$key][1] = "/" . $_SESSION["GEO_DATA"]["URL_SECTION"] . $aMenuLinks[$key][1];
			break;
		case "/rates/":
			$aMenuLinks[$key][1] = "/" . $_SESSION["GEO_DATA"]["URL_SECTION"] . $aMenuLinks[$key][1];
			break;
		case "/contacts/":
			$aMenuLinks[$key][1] = "/" . $_SESSION["GEO_DATA"]["URL_SECTION"] . $aMenuLinks[$key][1];
			break;
	}
}

//if (count($geo_local) >= 1)
//{
//	$rsSections = CIBlockSection::GetList(array(),array('IBLOCK_ID' => 1, '=CODE' => $geo_local[0]));
//	if ($arSection = $rsSections->Fetch())
//	{
//		if (!empty($arSection))
//		{
//			$menu_item = $geo_local[count($geo_local) - 1];
//			$menu_item_detail = $geo_local[count($geo_local) - 2];
//
//			foreach ($aMenuLinks  as $keys => $arItem)
//			{
//				$current_menu_item = trim($arItem[1], "/");
//				if ($current_menu_item == $menu_item) {
//					$link = "";
//					foreach ($geo_local as $key => $arLocal)
//					{
//						if ($key < (count($geo_local) - 1))
//						{
//							$link .= "/" . $arLocal;
//						} else {
//							break;
//						}
//					}
//				}
//				if ($current_menu_item == $menu_item_detail) {
//					$link = "";
//					foreach ($geo_local as $key => $arLocal)
//					{
//						if ($key < (count($geo_local) - 2))
//						{
//							$link .= "/" . $arLocal;
//						} else {
//							break;
//						}
//					}
//				}
//			}
//			if ($link == "")
//			{
//				foreach ($geo_local as $key => $arLocal)
//				{
//					if ($key <= (count($geo_local) - 1))
//					{
//						$link .= "/" . $arLocal;
//					} else {
//						break;
//					}
//				}
//			}
//
////			foreach ($aMenuLinks  as $key => $arItem)
////			{
////				switch ($arItem[1]) {
////					case "/services/":
////						$aMenuLinks[$key][1] = $link . $aMenuLinks[$key][1];
////						break;
////					case "/rates/":
////						$aMenuLinks[$key][1] = $link . $aMenuLinks[$key][1];
////						break;
////					case "/contacts/":
////						$aMenuLinks[$key][1] = $link . $aMenuLinks[$key][1];
////						break;
////				}
////			}
//
//
//			foreach ($aMenuLinks  as $key => $arItem)
//			{
//				switch ($arItem[1]) {
//					case "/services/":
//						$aMenuLinks[$key][1] = "/" . $geo_session . "/" . $aMenuLinks[$key][1];
//						break;
//					case "/rates/":
//						$aMenuLinks[$key][1] = "/" . $geo_session . "/" . $aMenuLinks[$key][1];
//						break;
//					case "/contacts/":
//						$aMenuLinks[$key][1] = "/" . $geo_session . "/" . $aMenuLinks[$key][1];
//						break;
//				}
//			}
//		}
//	}
//}


//global $APPLICATION;
//if(CModule::IncludeModule("iblock") ) {
//
//	$IBLOCK_ID = 23; // инфоблок с элементами
//
//	$res = CIBlockSection::GetList(
//		array(),
//		Array("IBLOCK_ID"=>$IBLOCK_ID, "IBLOCK_SECTION_ID"),
//		true,
//		Array("ID", "NAME", "IBLOCK_SECTION_ID", "SECTION_PAGE_URL", "DEPTH_LEVEL")
//	);
//}
//while($arSection = $res->GetNext())
//{
//
//	$arFields = $arSection;
//	$aMenuLinksExt[] = Array
//	(
//		$arFields["NAME"],
//		$arFields['SECTION_PAGE_URL'],
//		Array(
//			"ID" => $arFields['ID'],
//			"IBLOCK_SECTION_ID" => $arFields['IBLOCK_SECTION_ID'],
//			"DEPTH_LEVEL" => $arFields['DEPTH_LEVEL'],
//			"SUB_MENU" => ""
//		),
//		Array(),
//		""
//	);
//};
//
//$aMenuLinks = array_merge($aMenuLinksExt); // меню сформировано
//
//// Отправляем меню в result_modifier КК Каталог
//$_POST["MENU_LEVEL"] = array();
//$_POST["MENU_LEVEL"] = $aMenuLinks;
?>