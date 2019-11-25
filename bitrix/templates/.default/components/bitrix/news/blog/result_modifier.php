<?
if(!defined("B_PROLOG_INCLUDED")  || B_PROLOG_INCLUDED!==true)die();

// Массив для тегов из данного раздела
$arResult["TAGS"] = Array();
// При клике по тегу формируется массив элементов у которых приссутствует этот тег
$arResult["ID_TAG_FILTER"] = Array();
// Массив элементов найденых по поиску
$arResult["ID_SEARCH_FILTER"] = Array();


// Вытаскиваем все элементы инфоблока
$arSelect = Array("ID", "TAGS", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);

// Смотрим вводилось ли в поисковую строку чтото
if ($_GET['search_blog'] != "")
{
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();

		// Проверяем есть ли искомая строка в имени, превью или основной статье
		if (strstr($arFields["NAME"], $_GET['search_blog']) != "" ||
			strstr($arFields["PREVIEW_TEXT"], $_GET['search_blog']) != "" ||
			strstr($arFields["DETAIL_TEXT"], $_GET['search_blog']) != "")
		{
			// Смотрим что теги присутствуют у элемента
			if(strpos($arFields["TAGS"], ",") > 0)
			{
				// Если у элемента несколько тегов то разделяем по запятым
				$result = explode (",", $arFields["TAGS"]);
				// Запускаем цикл по получившемуся массиву
				foreach ($result as $key => $item) {
					// Очищаем от пробелов
					$str = trim($item);
					// Смотрим есть ли в формируемом массиве тегов текущий тег
					// Так же смотрим что у или никакой тег не выбран или что выбранный тег равен текущему тегу элемента
					if (!in_array($str, $arResult["TAGS"]) && ($_GET['tags'] == "" || $_GET['tags'] == $str))
					{
						$arResult["TAGS"][] = $str;
					}
				}
			} elseif (!empty($arFields["TAGS"])) {
				// Если у элемента всего один тег, все остальное тоже самое что и выше
				$str = trim($arFields["TAGS"]);
				if (!in_array($str, $arResult["TAGS"]) && ($_GET['tags'] == "" || $_GET['tags'] == $str))
				{
					$arResult["TAGS"][] = $str;
				}
			}
			
			//Собираем массив элементов если у которых есть выбранный тег (нажали на один из тегов)
			// Смотрим что у элемента есть теги И выбранный тег присутствует в тегах элемента И что тег выбран
			if (($arFields["TAGS"] != null) && (strstr($arFields["TAGS"], $_GET['tags']) != "") && $_GET['tags'] != "")
			{
				$arResult["ID_TAG_FILTER"][] = $arFields["ID"];
			}
			
			// Если есть, то добавляем id элемента для вывода
			$arResult["ID_SEARCH_FILTER"][] = $arFields["ID"];
		}
	}
} else {
	while($ob = $res->GetNextElement())
	{
		$arFields = $ob->GetFields();
		if(strpos($arFields["TAGS"], ",") > 0)
		{
			$result = explode (",", $arFields["TAGS"]);
			
			foreach ($result as $key => $item) {
				$str = trim($item);
				if (!in_array($str, $arResult["TAGS"]) && ($_GET['tags'] == "" || $_GET['tags'] == $str))
				{
					$arResult["TAGS"][] = $str;
				}
			}
		} elseif (!empty($arFields["TAGS"])) {
			$str = trim($arFields["TAGS"]);
			if (!in_array($str, $arResult["TAGS"]) && ($_GET['tags'] == "" || $_GET['tags'] == $str))
			{
				$arResult["TAGS"][] = $str;
			}
		}
		if (($arFields["TAGS"] != null) && (strstr($arFields["TAGS"], $_GET['tags']) != "") && $_GET['tags'] != "")
		{
			$arResult["ID_TAG_FILTER"][] = $arFields["ID"];
		}
	}
}



// Для передачи в детальную страницу.
$arResult["DATE_CREATE"] = Array();
$arResult["DETAIL_PICTURE"] = Array();
$arResult["DETAIL_TEXT"] = Array();

$arSelect = Array("ID", "NAME", "DATE_CREATE", "DETAIL_PICTURE", "DETAIL_TEXT");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "CODE"=>$arResult["VARIABLES"]["ELEMENT_CODE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	$arResult["NAME"] = $arFields["NAME"];
	$arResult["DATE_CREATE"] = $arFields["DATE_CREATE"];
	$arResult["DETAIL_PICTURE"] = CFile::GetPath($arFields["DETAIL_PICTURE"]);
	$arResult["DETAIL_TEXT"] = $arFields["DETAIL_TEXT"];
}
?>