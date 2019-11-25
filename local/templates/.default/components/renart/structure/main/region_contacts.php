<?
// CONTACTS СТРАНИЦА РЕГИОНА
global $GEOLOC_BASE_ELEMENT;

$sectionIdState = getLocationID($arResult["VARIABLES"]["STATE_CODE"]);
$sectionIdElement = getLocationData($arResult["VARIABLES"]["REGION_CODE"], $sectionIdState);
$geo_location = geoLocationURL($arResult["VARIABLES"]);
//=================================================================
$url = preg_replace("/f\/.+/", "" ,$_SERVER['REQUEST_URI']);
$arFields = getSeoData($url);
//=================================================================
?>
<div class="main">
	<div class="page-wrapper">
		<div class="page-header" style="background-image: url(<?=($arFields["PREVIEW_PICTURE"] != "") ? $arFields["PREVIEW_PICTURE"] : "/layout/files/header-bg-contacts.jpg"?>);">
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
                    <div class="h1">Contacts</div>
				</div>
			</div>
		</div>
		<div class="page-body page-body-alt">
			<div class="container">
				<div class="page-content page-content-alt">
					<div class="contacts-wrapper">
						<div class="row">
							<div class="col-12 col-md-5 col-lg-4">
								<?
								$element_id = "";
								$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["DETAIL_CONTACTS"]["IBLOCK_ID"]);
								$element_id = checkIsArray($element_id);
								?>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"detail_contacts",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_ELEMENT_CHAIN" => "N",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"BROWSER_TITLE" => "-",
										"CACHE_GROUPS" => "N",
										"CACHE_TIME" => "36000000",
										"CACHE_TYPE" => "A",
										"CHECK_DATES" => "Y",
										"DETAIL_URL" => "",
										"DISPLAY_BOTTOM_PAGER" => "N",
										"DISPLAY_DATE" => "N",
										"DISPLAY_NAME" => "Y",
										"DISPLAY_PICTURE" => "Y",
										"DISPLAY_PREVIEW_TEXT" => "Y",
										"DISPLAY_TOP_PAGER" => "N",
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => $element_id,
										"FIELD_CODE" => array(0=>"",1=>"",),
										"IBLOCK_ID" => "13",
										"IBLOCK_TYPE" => "contacts",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array(0=>"PHONE_PICTURE",1=>"EMAIL_PICTURE",2=>"POINT_MAP_PICTURE",3=>"WORKING_HOURS_PICTURE",4=>"",),
										"SET_BROWSER_TITLE" => "N",
										"SET_CANONICAL_URL" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"STRICT_SECTION_CHECK" => "N",
										"USE_PERMISSIONS" => "N",
										"USE_SHARE" => "N"
									)
								);?>
							</div>
							<div class="col-12 col-md-7 col-lg-8">
								<div class="popup popup-mob map-popup" id="mapPopup">
									<div class="popup-dialog">
										<div class="popup-content">
											<div class="close"></div>
											<div class="contacts-map" id="contactsMap"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="help-wrapper">
						<div class="row">
							<div class="col-12 col-md-5 col-lg-4 d-none d-md-block">
								<div class="h2">
									<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/contacts/titleForm.php"));?>
								</div>
							</div>
							<div class="col-12 col-md-7 col-lg-8">
								<div class="form-placeholder-mob d-block d-md-none">
									<div class="form-placeholder-mob-inner">
										<div class="h3">How can we help you?</div>
										<div class="btn btn-2 open-popup" data-popup="#helpPopup"><span>Send a&nbsp;question</span></div>
									</div>
								</div>
								<div class="popup popup-mob form-popup" id="helpPopup">
									<div class="popup-dialog">
										<div class="popup-content">
											<div class="close"></div>
											<div class="help-form help-form-alt">
												<div class="h3 d-block d-md-none">How can we help you?</div>
												<?$APPLICATION->IncludeComponent(
													"bitrix:form.result.new",
													"contacts_form",
													Array(
														"CACHE_TIME" => "3600",
														"CACHE_TYPE" => "A",
														"CHAIN_ITEM_LINK" => "",
														"CHAIN_ITEM_TEXT" => "",
														"COMPONENT_TEMPLATE" => ".default",
														"EDIT_URL" => "",
														"IGNORE_CUSTOM_TEMPLATE" => "N",
														"LIST_URL" => "",
														"SEF_MODE" => "N",
														"SUCCESS_URL" => "",
														"USE_EXTENDED_ERRORS" => "N",
														"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID",),
														"WEB_FORM_ID" => "5"
													)
												);?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


