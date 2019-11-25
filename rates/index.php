<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Rates");

$sectionIdState = getLocationID($arResult["VARIABLES"]["REGION_CODE"]);
?> 
	  
	  
	  
      <div class="main">
        <div class="page-wrapper">
          <!-- Шапка страницы-->
          <div class="page-header page-header-alt" style="background-image: url(/layout/files/header-bg-rates.jpg);">
            <div class="page-header-inner">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-6 col-lg-7">
                    <div class="page-header-descr">
						<?$APPLICATION->IncludeComponent(
							"bitrix:breadcrumb",
							"breadcrumb",
							Array(
								"PATH" => "",
								"SITE_ID" => "s1",
								"START_FROM" => "0"
							)
						);?>
                      <div class="h1"><?$APPLICATION->ShowTitle();?></div>
                      <div class="page-header-text">
                        <p>Take advantage of our great prices!</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-lg-5">
                    <div class="page-header-button-mob d-block d-md-none">
                      <div class="btn btn-2 open-popup" data-popup="#topFormPopup"><span>Request a&nbsp;Quote</span></div>
                    </div>
                    <div class="popup popup-mob form-popup" id="topFormPopup">
					    <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "quote_now_form", Array(
                            "CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                "CACHE_TYPE" => "A",	// Тип кеширования
                                "CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
                                "CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
                                "EDIT_URL" => "",	// Страница редактирования результата
                                "IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
                                "LIST_URL" => "",	// Страница со списком результатов
                                "SEF_MODE" => "N",	// Включить поддержку ЧПУ
                                "SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
                                "USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
                                "WEB_FORM_ID" => "2",	// ID веб-формы
                                "COMPONENT_TEMPLATE" => ".default",
                                "VARIABLE_ALIASES" => array(
                                    "WEB_FORM_ID" => "WEB_FORM_ID",
                                    "RESULT_ID" => "RESULT_ID",
                                )
                            ),
                            false
                        );?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Шапка страницы END-->
          <div class="page-body">
            <!-- Page menu-->
            <div class="page-menu-wrapper">
              <ul class="page-menu">
                <li><a href="#compare">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockOne.php"));?>
                        </a></li>
                <li><a href="#rates">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockTwo.php"));?>
                    </a></li>
                <li><a href="#deals">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockThree.php"));?>
                        </a></li>
                <li><a href="#cc">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockFour.php"));?>
                        </a></li>
                <li><a href="#estimate">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockFive.php"));?>
                        </a></li>
              </ul>
            </div>
            <!-- Page menu END-->
            <!-- About-->
            <div class="section-inner section-inner-alt">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont"><a name="compare"></a>
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockOne.php"));?>
                        </div>
                        <div class="compare-over-wrapper">
                          <div class="compare-wrapper">
                            <div class="row">
								<?$APPLICATION->IncludeComponent(
                                    "bitrix:news.detail",
                                    "rates_block_one_left",
                                    array(
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
                                        "ELEMENT_ID" => "131",
                                        "FIELD_CODE" => array(
                                            0 => "",
                                            1 => "",
                                        ),
                                        "IBLOCK_ID" => "21",
                                        "IBLOCK_TYPE" => "rates",
                                        "IBLOCK_URL" => "",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "MESSAGE_404" => "",
                                        "META_DESCRIPTION" => "-",
                                        "META_KEYWORDS" => "-",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Страница",
                                        "PROPERTY_CODE" => array(
                                            0 => "BASIC_HIDDEN_FEES",
                                            1 => "BENIFIT",
                                            2 => "INCLUDE_IN_STANDARD_PRICE",
                                            3 => "MARK",
                                            4 => "MARK_TEXT",
                                            5 => "LOSING",
                                            6 => "OTHER_HIDDEN_FEES",
                                            7 => "PRICE_PER_HOUR",
                                            8 => "SEAL_IMAGE",
                                            9 => "TITLE_HIDDEN_FEES",
                                            10 => "TOTAL_BILL",
                                            11 => "",
                                            12 => "",
                                            13 => "",
                                            14 => "",
                                            15 => "",
                                        ),
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
                                        "USE_SHARE" => "N",
                                        "COMPONENT_TEMPLATE" => "rates_block_one_left"
                                    ),
                                    false,
                                    array('HIDE_ICONS' => "Y")
                                );?>
                              <div class="compare-m compare-m-alt">
                                <div class="cont">vs</div>
                              </div>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"rates_block_one_right",
									array(
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
										"ELEMENT_ID" => "170",
										"FIELD_CODE" => array(
											0 => "",
											1 => "",
										),
										"IBLOCK_ID" => "34",
										"IBLOCK_TYPE" => "rates",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array(
											0 => "BASIC_HIDDEN_FEES",
											1 => "BENIFIT",
											2 => "INCLUDE_IN_STANDARD_PRICE",
											3 => "MARK",
											4 => "MARK_TEXT",
											5 => "LOSING",
											6 => "OTHER_HIDDEN_FEES",
											7 => "PRICE_PER_HOUR",
											8 => "SEAL_IMAGE",
											9 => "TITLE_HIDDEN_FEES",
											10 => "TOTAL_BILL",
											11 => "",
											12 => "",
											13 => "",
											14 => "",
											15 => "",
										),
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
										"USE_SHARE" => "N",
										"COMPONENT_TEMPLATE" => "rates_block_one_left"
									),
									false,
                                    array('HIDE_ICONS' => "Y")
								);?>
                            </div>
                          </div>
                        </div><a name="rates"></a>
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockTwo.php"));?>
                        </div>
                        <div class="rates-wrapper">
							<?
							$element_id = "";
							$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_TWO"]["IBLOCK_ID"]);
							$GLOBALS["elements_id"] = array("ID" => $element_id);
							?>
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.list",
								"rates_block_two",
								Array(
									"ACTIVE_DATE_FORMAT" => "d.m.Y",
									"ADD_SECTIONS_CHAIN" => "N",
									"AJAX_MODE" => "N",
									"AJAX_OPTION_ADDITIONAL" => "",
									"AJAX_OPTION_HISTORY" => "N",
									"AJAX_OPTION_JUMP" => "N",
									"AJAX_OPTION_STYLE" => "N",
									"CACHE_FILTER" => "N",
									"CACHE_GROUPS" => "N",
									"CACHE_TIME" => "36000000",
									"CACHE_TYPE" => "N",
									"CHECK_DATES" => "Y",
									"COMPONENT_TEMPLATE" => ".default",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "Y",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"FIELD_CODE" => array(0=>"",1=>"",),
									"FILTER_NAME" => "elements_id",
									"HIDE_LINK_WHEN_NO_DETAIL" => "N",
									"IBLOCK_ID" => "22",
									"IBLOCK_TYPE" => "rates",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"INCLUDE_SUBSECTIONS" => "N",
									"MESSAGE_404" => "",
									"NEWS_COUNT" => "20",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_DESC_NUMBERING" => "N",
									"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_SHOW_ALWAYS" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Новости",
									"PARENT_SECTION" => "",
									"PARENT_SECTION_CODE" => "",
									"PREVIEW_TRUNCATE_LEN" => "",
									"PROPERTY_CODE" => array(0=>"LINK",1=>"LIST_PROPERTIES",2=>"MOVERS",3=>"TITLE_LINK",4=>"TRUCK",5=>"",6=>"",7=>"",8=>"",9=>"",10=>"",11=>"",12=>"",13=>"",14=>"",15=>"",16=>"",),
									"SET_BROWSER_TITLE" => "N",
									"SET_LAST_MODIFIED" => "N",
									"SET_META_DESCRIPTION" => "N",
									"SET_META_KEYWORDS" => "N",
									"SET_STATUS_404" => "N",
									"SET_TITLE" => "N",
									"SHOW_404" => "N",
									"SORT_BY1" => "ID",
									"SORT_BY2" => "SORT",
									"SORT_ORDER1" => "ASC",
									"SORT_ORDER2" => "ASC",
									"STRICT_SECTION_CHECK" => "N"
								)
							);?>
                        </div>
                        <div class="rates-footer">
                          <div class="row">
                            <div class="col-12 col-md-6">
                              <div class="h3">
								  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockTwoOur.php"));?>
                              </div>
                              <div class="rates-pros-list">
                                <div class="row">
									<?
									$element_id = "";
									$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_TWO_OUR_BENEFFITS"]["IBLOCK_ID"]);
									$GLOBALS["elements_id"] = array("ID" => $element_id);
									?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"rates_block_two_our_beneffits",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_SECTIONS_CHAIN" => "N",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "N",
											"CACHE_FILTER" => "N",
											"CACHE_GROUPS" => "N",
											"CACHE_TIME" => "36000000",
											"CACHE_TYPE" => "A",
											"CHECK_DATES" => "Y",
											"DETAIL_URL" => "",
											"DISPLAY_BOTTOM_PAGER" => "N",
											"DISPLAY_DATE" => "Y",
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => "Y",
											"DISPLAY_PREVIEW_TEXT" => "Y",
											"DISPLAY_TOP_PAGER" => "N",
											"FIELD_CODE" => array(0=>"",1=>"",),
											"FILTER_NAME" => "elements_id",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "23",
											"IBLOCK_TYPE" => "rates",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "N",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "20",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_DESC_NUMBERING" => "N",
											"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_SHOW_ALWAYS" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Новости",
											"PARENT_SECTION" => "",
											"PARENT_SECTION_CODE" => "",
											"PREVIEW_TRUNCATE_LEN" => "",
											"PROPERTY_CODE" => array(0=>"",1=>"",),
											"SET_BROWSER_TITLE" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"SORT_BY1" => "ID",
											"SORT_BY2" => "SORT",
											"SORT_ORDER1" => "ASC",
											"SORT_ORDER2" => "ASC",
											"STRICT_SECTION_CHECK" => "N"
										),
										false,
										array('HIDE_ICONS' => "Y")
									);?>
                                </div>
                              </div>
                            </div>
                            <div class="col-12 col-md-6">
                              <div class="h3">
								  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockTwoAccept.php"));?>
                              </div>
                              <div class="pay-list">
                                <div class="row">
									<?
									$element_id = "";
									$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_TWO_WE_ACCEPT"]["IBLOCK_ID"]);
									$GLOBALS["elements_id"] = array("ID" => $element_id);
									?>
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"rates_block_two_we_accept",
										Array(
											"ACTIVE_DATE_FORMAT" => "d.m.Y",
											"ADD_SECTIONS_CHAIN" => "N",
											"AJAX_MODE" => "N",
											"AJAX_OPTION_ADDITIONAL" => "",
											"AJAX_OPTION_HISTORY" => "N",
											"AJAX_OPTION_JUMP" => "N",
											"AJAX_OPTION_STYLE" => "N",
											"CACHE_FILTER" => "N",
											"CACHE_GROUPS" => "N",
											"CACHE_TIME" => "36000000",
											"CACHE_TYPE" => "A",
											"CHECK_DATES" => "Y",
											"COMPONENT_TEMPLATE" => ".default",
											"DETAIL_URL" => "",
											"DISPLAY_BOTTOM_PAGER" => "N",
											"DISPLAY_DATE" => "Y",
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => "Y",
											"DISPLAY_PREVIEW_TEXT" => "Y",
											"DISPLAY_TOP_PAGER" => "N",
											"FIELD_CODE" => array(0=>"",1=>"",),
											"FILTER_NAME" => "elements_id",
											"HIDE_LINK_WHEN_NO_DETAIL" => "N",
											"IBLOCK_ID" => "24",
											"IBLOCK_TYPE" => "rates",
											"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
											"INCLUDE_SUBSECTIONS" => "N",
											"MESSAGE_404" => "",
											"NEWS_COUNT" => "20",
											"PAGER_BASE_LINK_ENABLE" => "N",
											"PAGER_DESC_NUMBERING" => "N",
											"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
											"PAGER_SHOW_ALL" => "N",
											"PAGER_SHOW_ALWAYS" => "N",
											"PAGER_TEMPLATE" => ".default",
											"PAGER_TITLE" => "Новости",
											"PARENT_SECTION" => "",
											"PARENT_SECTION_CODE" => "",
											"PREVIEW_TRUNCATE_LEN" => "",
											"PROPERTY_CODE" => array(0=>"",1=>"",),
											"SET_BROWSER_TITLE" => "N",
											"SET_LAST_MODIFIED" => "N",
											"SET_META_DESCRIPTION" => "N",
											"SET_META_KEYWORDS" => "N",
											"SET_STATUS_404" => "N",
											"SET_TITLE" => "N",
											"SHOW_404" => "N",
											"SORT_BY1" => "ID",
											"SORT_BY2" => "SORT",
											"SORT_ORDER1" => "ASC",
											"SORT_ORDER2" => "ASC",
											"STRICT_SECTION_CHECK" => "N"
										),
										false,
										array('HIDE_ICONS' => "Y")
									);?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div><a name="deals"></a>
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockThree.php"));?>
                        </div>
                        <div class="deals-list">
                          <div class="row">
							  <?
							  $element_id = "";
							  $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_THREE"]["IBLOCK_ID"]);
							  $GLOBALS["elements_id"] = array("ID" => $element_id);
							  ?>
							  <?$APPLICATION->IncludeComponent(
								  "bitrix:news.list",
								  "rates_block_three",
								  Array(
									  "ACTIVE_DATE_FORMAT" => "d.m.Y",
									  "ADD_SECTIONS_CHAIN" => "N",
									  "AJAX_MODE" => "N",
									  "AJAX_OPTION_ADDITIONAL" => "",
									  "AJAX_OPTION_HISTORY" => "N",
									  "AJAX_OPTION_JUMP" => "N",
									  "AJAX_OPTION_STYLE" => "N",
									  "CACHE_FILTER" => "N",
									  "CACHE_GROUPS" => "N",
									  "CACHE_TIME" => "36000000",
									  "CACHE_TYPE" => "A",
									  "CHECK_DATES" => "Y",
									  "COMPONENT_TEMPLATE" => ".default",
									  "DETAIL_URL" => "",
									  "DISPLAY_BOTTOM_PAGER" => "N",
									  "DISPLAY_DATE" => "Y",
									  "DISPLAY_NAME" => "Y",
									  "DISPLAY_PICTURE" => "Y",
									  "DISPLAY_PREVIEW_TEXT" => "Y",
									  "DISPLAY_TOP_PAGER" => "N",
									  "FIELD_CODE" => array(0=>"",1=>"",),
									  "FILTER_NAME" => "elements_id",
									  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
									  "IBLOCK_ID" => "25",
									  "IBLOCK_TYPE" => "rates",
									  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									  "INCLUDE_SUBSECTIONS" => "N",
									  "MESSAGE_404" => "",
									  "NEWS_COUNT" => "20",
									  "PAGER_BASE_LINK_ENABLE" => "N",
									  "PAGER_DESC_NUMBERING" => "N",
									  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									  "PAGER_SHOW_ALL" => "N",
									  "PAGER_SHOW_ALWAYS" => "N",
									  "PAGER_TEMPLATE" => ".default",
									  "PAGER_TITLE" => "Новости",
									  "PARENT_SECTION" => "",
									  "PARENT_SECTION_CODE" => "",
									  "PREVIEW_TRUNCATE_LEN" => "",
									  "PROPERTY_CODE" => array(0=>"BUTTON_LINK",1=>"BUTTON_TITLE",2=>"FRI_SUN",3=>"MON_THU",4=>"",),
									  "SET_BROWSER_TITLE" => "N",
									  "SET_LAST_MODIFIED" => "N",
									  "SET_META_DESCRIPTION" => "N",
									  "SET_META_KEYWORDS" => "N",
									  "SET_STATUS_404" => "N",
									  "SET_TITLE" => "N",
									  "SHOW_404" => "N",
									  "SORT_BY1" => "ID",
									  "SORT_BY2" => "SORT",
									  "SORT_ORDER1" => "ASC",
									  "SORT_ORDER2" => "ASC",
									  "STRICT_SECTION_CHECK" => "N"
								  ),
								  false,
								  array('HIDE_ICONS' => "Y")
							  );?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- About END-->
            <!-- Cross country moving-->
            <div class="section-inner section-cc-inner">
              <div class="section-header">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockFour.php"));?>
                        </div>
                        <div class="why-list">
                          <div class="row">
							  <?
							  $element_id = "";
							  $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_FOUR_WHY_LIST"]["IBLOCK_ID"]);
							  $GLOBALS["elements_id"] = array("ID" => $element_id);
							  ?>
                              <?$APPLICATION->IncludeComponent(
								  "bitrix:news.list",
								  "rates_block_four_why_list",
								  Array(
									  "ACTIVE_DATE_FORMAT" => "d.m.Y",
									  "ADD_SECTIONS_CHAIN" => "N",
									  "AJAX_MODE" => "N",
									  "AJAX_OPTION_ADDITIONAL" => "",
									  "AJAX_OPTION_HISTORY" => "N",
									  "AJAX_OPTION_JUMP" => "N",
									  "AJAX_OPTION_STYLE" => "N",
									  "CACHE_FILTER" => "N",
									  "CACHE_GROUPS" => "N",
									  "CACHE_TIME" => "36000000",
									  "CACHE_TYPE" => "A",
									  "CHECK_DATES" => "Y",
									  "COMPONENT_TEMPLATE" => ".default",
									  "DETAIL_URL" => "",
									  "DISPLAY_BOTTOM_PAGER" => "N",
									  "DISPLAY_DATE" => "Y",
									  "DISPLAY_NAME" => "Y",
									  "DISPLAY_PICTURE" => "Y",
									  "DISPLAY_PREVIEW_TEXT" => "Y",
									  "DISPLAY_TOP_PAGER" => "N",
									  "FIELD_CODE" => array(0=>"",1=>"",),
									  "FILTER_NAME" => "elements_id",
									  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
									  "IBLOCK_ID" => "26",
									  "IBLOCK_TYPE" => "rates",
									  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									  "INCLUDE_SUBSECTIONS" => "N",
									  "MESSAGE_404" => "",
									  "NEWS_COUNT" => "20",
									  "PAGER_BASE_LINK_ENABLE" => "N",
									  "PAGER_DESC_NUMBERING" => "N",
									  "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
									  "PAGER_SHOW_ALL" => "N",
									  "PAGER_SHOW_ALWAYS" => "N",
									  "PAGER_TEMPLATE" => ".default",
									  "PAGER_TITLE" => "Новости",
									  "PARENT_SECTION" => "",
									  "PARENT_SECTION_CODE" => "",
									  "PREVIEW_TRUNCATE_LEN" => "",
									  "PROPERTY_CODE" => array(0=>"",1=>"",2=>"",3=>"",4=>"",5=>"",),
									  "SET_BROWSER_TITLE" => "N",
									  "SET_LAST_MODIFIED" => "N",
									  "SET_META_DESCRIPTION" => "N",
									  "SET_META_KEYWORDS" => "N",
									  "SET_STATUS_404" => "N",
									  "SET_TITLE" => "N",
									  "SHOW_404" => "N",
									  "SORT_BY1" => "ID",
									  "SORT_BY2" => "SORT",
									  "SORT_ORDER1" => "ASC",
									  "SORT_ORDER2" => "ASC",
									  "STRICT_SECTION_CHECK" => "N"
								  ),
								  false,
								  array('HIDE_ICONS' => "Y")
							  );?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <div class="compare-over-wrapper">
                          <div class="compare-wrapper">
                            <div class="row">
								<?
								$element_id = "";
								$element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["RATES_BLOCK_FOUR_COMPARE"]["IBLOCK_ID"]);
								$GLOBALS["elements_id"] = array("ID" => $element_id);
								?>
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.list",
									"rates_block_four_compare",
									Array(
										"ACTIVE_DATE_FORMAT" => "d.m.Y",
										"ADD_SECTIONS_CHAIN" => "N",
										"AJAX_MODE" => "N",
										"AJAX_OPTION_ADDITIONAL" => "",
										"AJAX_OPTION_HISTORY" => "N",
										"AJAX_OPTION_JUMP" => "N",
										"AJAX_OPTION_STYLE" => "N",
										"CACHE_FILTER" => "N",
										"CACHE_GROUPS" => "N",
										"CACHE_TIME" => "36000000",
										"CACHE_TYPE" => "A",
										"CHECK_DATES" => "Y",
										"COMPONENT_TEMPLATE" => ".default",
										"DETAIL_URL" => "",
										"DISPLAY_BOTTOM_PAGER" => "N",
										"DISPLAY_DATE" => "Y",
										"DISPLAY_NAME" => "Y",
										"DISPLAY_PICTURE" => "Y",
										"DISPLAY_PREVIEW_TEXT" => "Y",
										"DISPLAY_TOP_PAGER" => "N",
										"FIELD_CODE" => array(0=>"",1=>"",),
										"FILTER_NAME" => "elements_id",
										"HIDE_LINK_WHEN_NO_DETAIL" => "N",
										"IBLOCK_ID" => "27",
										"IBLOCK_TYPE" => "rates",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"INCLUDE_SUBSECTIONS" => "N",
										"MESSAGE_404" => "",
										"NEWS_COUNT" => "20",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_DESC_NUMBERING" => "N",
										"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_SHOW_ALWAYS" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Новости",
										"PARENT_SECTION" => "",
										"PARENT_SECTION_CODE" => "",
										"PREVIEW_TRUNCATE_LEN" => "",
										"PROPERTY_CODE" => array(0=>"COMPARE_LIST",1=>"PERCENT",2=>"TOTAL",3=>"LOGIC_GMC",4=>""),
										"SET_BROWSER_TITLE" => "N",
										"SET_LAST_MODIFIED" => "N",
										"SET_META_DESCRIPTION" => "N",
										"SET_META_KEYWORDS" => "N",
										"SET_STATUS_404" => "N",
										"SET_TITLE" => "N",
										"SHOW_404" => "N",
										"SORT_BY1" => "ID",
										"SORT_BY2" => "SORT",
										"SORT_ORDER1" => "ASC",
										"SORT_ORDER2" => "ASC",
										"STRICT_SECTION_CHECK" => "N"
									),
									false,
									array('HIDE_ICONS' => "Y")
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
            
            <!-- Cross country moving END-->
            <!-- Estimate-->
            <div class="section-inner section-est-inner section-est-inner-alt">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont"><a name="estimate"></a>
                        <div class="form-placeholder-mob d-block d-md-none">
                          <div class="form-placeholder-mob-inner">
                            <div class="h3">
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockFive.php"));?>
                            </div>
                            <div class="btn btn-2 open-popup" data-popup="#estPopup"><span>Get price estimate</span></div>
                          </div>
                        </div>
                        <div class="popup popup-mob form-popup" id="estPopup">
                          <div class="popup-dialog">
                            <div class="popup-content">
                              <div class="close"></div>
                              <div class="est-form">
                                <div class="h3">
									<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/rates/titleBlockFive.php"));?>
                                </div>
								  <?$APPLICATION->IncludeComponent(
									  "bitrix:form.result.new",
									  "rates_receive_form",
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
										  "WEB_FORM_ID" => "7"
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
            <!-- Estimate END-->
            <!-- Text-->
            <div class="section section-footer-text section-footer-text-alt">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <h1>Local Moves Gentlemen's Moving Company</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
                        <div class="expandable-wrapper">
                          <div class="expandable-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget.</p>
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
            <!-- Text END-->
          </div>
        </div>
      </div>
    
 
     

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>