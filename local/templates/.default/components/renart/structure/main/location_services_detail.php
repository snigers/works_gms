<?
//ДЕТАЛЬНАЯ СТРАНИЦА УСЛУГ ГОРОДА
global $GEOLOC_BASE_ELEMENT;

$sectionIdState = getLocationID($arResult["VARIABLES"]["REGION_CODE"]);
$sectionIdElement = getLocationData($arResult["VARIABLES"]["LOCATION_CODE"], $sectionIdState);
$geo_location = geoLocationURL($arResult["VARIABLES"]);
?>

<?
$element_id = "";
$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["SERVICES"]["IBLOCK_ID"], $arResult["VARIABLES"]["SERVICE_CODE"]);
$element_id = checkIsArray($element_id);
$GLOBALS["elements_id"] = array("ID" => $element_id);
?>
<?$ElementID = $APPLICATION->IncludeComponent(
	"bitrix:news.detail",
	"services_detail",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => $GEOLOC_BASE_ELEMENT["SERVICES"]["IBLOCK_ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "PERCENT_CHEAP_MOVING_COMPANY",
			1 => "PERCENT_GENTLEMENS_MOVING_COMPANY",
			2 => "TOTAL_CHEAP_MOVING_COMPANY",
			3 => "TOTAL_GENTLEMENS_MOVING_COMPANY",
			4 => "ABOUT_TEXT",
			5 => "ARTICLE_BLOCK",
			6 => "CHEAP_MOVING_COMPANY",
			7 => "GENTLEMENS_MOVING_COMPANY",
			8 => "LIST_OF_STEPS",
			9 => "LOCAL_MOVES",
			10 => "REVIEWS_CROSS",
			11 => "REVIEWS_LOCAL",
			12 => "SUBTITLE",
			13 => "SUBTITLE_CHEAP",
			14 => "SUBTITLE_WHY_CHOOSE_US",
			15 => "SUBTITLE_FORM",
			16 => "SUBTITLE_GENTLEMENS",
			17 => "SUBTITLE_REVIEWS",
			18 => "SUBTITLE_REVIEWS_CROSS",
			19 => "TITLE_FORM",
			20 => "TITLE_ABOUT_CROSS",
			21 => "TITLE_ABOUT_LOCAL",
			22 => "TITLE_WHY_CHOOSE_US",
			23 => "TITLE_COMPARISONS",
			24 => "TITLE_GALLERY_CROSS",
			25 => "TITLE_GALLERY_LOCAL",
			26 => "TITLE_REVIEWS",
			27 => "TITLE_REVIEWS_CROSS",
			28 => "LOCAL_OR_CROSS_COUNTRY",
			29 => "WHY_CHOOSE_US",
			30 => "TITLE_ABOUT",
			31 => "TITLE_GALLERY",
			32 => "",
		),
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "NAME",
		"SET_CANONICAL_URL" => "N",
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"MESSAGE_404" => "",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "N",
		"USE_PERMISSIONS" => "N",
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "N",
		"DETAIL_PAGER_TITLE" => "Страница",
		"PAGER_SHOW_ALWAYS" => "N",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "N",
		"CHECK_DATES" => "Y",
		"ELEMENT_ID" => $element_id,
		"ELEMENT_CODE" => "",
		"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
		"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"USE_SHARE" => "N",
		"SHARE_HIDE" => $arParams["SHARE_HIDE"],
		"SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
		"SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
		"SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
		"SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
		"ADD_ELEMENT_CHAIN" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"GEO_LOCAL_URL" => $geo_location,
	),
	$component
);?>
