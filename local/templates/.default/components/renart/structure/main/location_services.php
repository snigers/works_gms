<?
//УСЛУГИ СТРАНИЦА ГОРОДА
global $GEOLOC_BASE_ELEMENT;

$sectionIdState = getLocationID($arResult["VARIABLES"]["REGION_CODE"]);
$sectionIdElement = getLocationData($arResult["VARIABLES"]["LOCATION_CODE"], $sectionIdState);
$geo_location = geoLocationURL($arResult["VARIABLES"]);
?>

<div class="main">
	<div class="page-wrapper">
		<div class="page-header" style="background-image: url(<?=($arFields["PREVIEW_PICTURE"] != "") ? $arFields["PREVIEW_PICTURE"] : "/layout/files/header-bg-services.jpg"?>);">
			<div class="page-header-inner">
				<div class="container">
					<?$APPLICATION->IncludeComponent(
						"bitrix:breadcrumb",
						"geo_breadcrumb",
						Array(
							"PATH" => "",
							"SITE_ID" => "s1",
							"START_FROM" => "0"
						)
					);?>
                    <h1><?=($arFields["PROPERTIES"]["H1"]["VALUE"] != "") ? $arFields["PROPERTIES"]["H1"]["VALUE"] : "Services"?></h1>
				</div>
			</div>
		</div>
		<div class="page-body">
			<div class="section-inner section-services-inner">
				<div class="section-content">
					<?
					$element_id = "";
					$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["SERVICES"]["IBLOCK_ID"]);
					$GLOBALS["elements_id"] = array("ID" => $element_id);
					?>
					<div class="container">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"services_list",
							Array(
								"IBLOCK_TYPE" => "services",
								"IBLOCK_ID" => "2",
								"NEWS_COUNT" => "20",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_ORDER1" => "DESC",
								"SORT_BY2" => "ID",
								"SORT_ORDER2" => "ASC",
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
									30 => "",
								),
								"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
								"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
								"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
								"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
								"SET_TITLE" => "Y",
								"SET_LAST_MODIFIED" => "N",
								"MESSAGE_404" => "",
								"SET_STATUS_404" => "N",
								"SHOW_404" => "N",
								"FILE_404" => $arParams["FILE_404"],
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"CACHE_TYPE" => "N",
								"CACHE_TIME" => "36000",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Новости",
								"PAGER_TEMPLATE" => ".default",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"PAGER_BASE_LINK_ENABLE" => "N",
								"PAGER_BASE_LINK" => "N",
								"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"USE_PERMISSIONS" => "N",
								"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
								"FILTER_NAME" => "elements_id",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"CHECK_DATES" => "Y",
								"CODE_LOCATION" => $arResult["VARIABLES"]["STATE_CODE"],
								"GEO_STATE" => $arResult["VARIABLES"]["STATE_CODE"],
								"GEO_REGION" => $arResult["VARIABLES"]["REGION_CODE"],
								"GEO_LOCAL" => $arResult["VARIABLES"]["LOCATION_CODE"],
							),
							$component
						);?>
					</div>
				</div>
			</div>
			<!-- Text-->
			<?if (isset($arFields)):?>
                <div class="section section-footer-text section-footer-text-alt">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont">
										<?=$arFields['PREVIEW_TEXT'];?>
                                        <div class="expandable-wrapper">
                                            <div class="expandable-content">
												<?=$arFields['DETAIL_TEXT'];?>
												<?=$arFields['DETAIL_TEXT'];?>
                                            </div>
                                            <div class="expandable-trigger-wrapper">
                                                <div class="expandable-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			<?endif;?>
			<!-- Text END-->
		</div>
	</div>
</div>