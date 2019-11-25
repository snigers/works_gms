<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$sectionIdElement = $arParams["GEO_LOCATION_ID"];
global $GEOLOC_BASE_ELEMENT;
?>

<div class="row">
    <div class="col-12 col-lg-4">
        <div class="about-descr">
            <div class="h3 h3-alt">
                <?=$arResult["NAME"]?>
            </div>
			<?=$arResult["PROPERTIES"]["TEXT_GEOGRAPHY"]["~VALUE"]["TEXT"]?>
            <div class="more-link-wrapper">
                <a class="more-link" href="<?=$arResult["PROPERTIES"]["LINK_GEOGRAPHY"]["VALUE"]?>"><span><?=$arResult["PROPERTIES"]["LINK_GEOGRAPHY"]["DESCRIPTION"]?></span></a>
				
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-8 col-xl-7 offset-xl-1">
        <div class="h3 h3-alt">
			<?=$arResult["PROPERTIES"]["TITLE_GEOGRAPHY"]["VALUE"]?>
        </div>
	
		<?
		$element_id = "";
		$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_GEOGRAPHY"]["IBLOCK_ID"]);
		$GLOBALS["elements_id"] = array("ID" => $element_id);
		?>
		<?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "main_geography",
            array(
                "COMPONENT_TEMPLATE" => "main_geography",
                "IBLOCK_TYPE" => "main",
                "IBLOCK_ID" => "4",
                "NEWS_COUNT" => "100",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_ORDER1" => "DESC",
                "SORT_BY2" => "SORT",
                "SORT_ORDER2" => "ASC",
                "FILTER_NAME" => "elements_id",
                "FIELD_CODE" => array(
                    0 => "",
                    1 => "",
                ),
                "PROPERTY_CODE" => array(
                    0 => "LEFT",
                    1 => "TOP",
                    2 => "",
                ),
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "N",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "CACHE_TYPE" => "N",
                "CACHE_TIME" => "36000000",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "PREVIEW_TRUNCATE_LEN" => "",
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "SET_TITLE" => "N",
                "SET_BROWSER_TITLE" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_LAST_MODIFIED" => "N",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "ADD_SECTIONS_CHAIN" => "N",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "INCLUDE_SUBSECTIONS" => "Y",
                "STRICT_SECTION_CHECK" => "N",
                "PAGER_TEMPLATE" => ".default",
                "DISPLAY_TOP_PAGER" => "N",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "PAGER_TITLE" => "Новости",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "SET_STATUS_404" => "N",
                "SHOW_404" => "N",
                "MESSAGE_404" => ""
            ),
            false
        );?>

    </div>
</div>