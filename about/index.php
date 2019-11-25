<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Gentlemen's Moving Company");
?> 
	  
	  
	  
      <div class="main">
        <div class="page-wrapper">
          <!-- Шапка страницы-->
          <div class="page-header page-header-alt" style="background-image: url(/layout/files/header-bg-about.jpg);">
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
                      <div class="h1"><?$APPLICATION->ShowTitle()?></div>
                      <div class="page-header-text">
                        <p>Get Started And Join Thousands of&nbsp;Our Happy Customers Today!</p>
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
                <li>
                    <a href="#approach">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleCompanyBlock.php"));?>
                    </a>
                </li>
                <li><a href="#about">About</a></li>
                <li>
                    <a href="#best">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleBestBlock.php"));?>
                    </a>
                </li>
                <li>
                    <a href="#crew">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleCrew.php"));?>
                    </a>
                </li>
                <li>
                    <a href="#reviews">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleMenuReviews.php"));?>
                    </a>
                </li>
                <li>
                    <a href="#gallery">
						<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleMenuGallery.php"));?>
                    </a>
                </li>
              </ul>
            </div>
            <!-- Page menu END-->
            <!-- About-->
            <div class="section-inner">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <div class="h2">About company</div><a name="approach"></a>
                        <div class="h4 orange">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleCompanyBlock.php"));?>
                        </div>
                        <div class="why-list">
                          <div class="row">
							  <?$APPLICATION->IncludeComponent(
								  "bitrix:news.list",
								  "about_company_approach",
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
									  "DISPLAY_DATE" => "N",
									  "DISPLAY_NAME" => "Y",
									  "DISPLAY_PICTURE" => "Y",
									  "DISPLAY_PREVIEW_TEXT" => "N",
									  "DISPLAY_TOP_PAGER" => "N",
									  "FIELD_CODE" => array("",""),
									  "FILTER_NAME" => "",
									  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
									  "IBLOCK_ID" => "6",
									  "IBLOCK_TYPE" => "about",
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
									  "PROPERTY_CODE" => array("",""),
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
                        <blockquote class="blockquote-alt">
							<?$APPLICATION->IncludeComponent(
								"bitrix:news.detail",
								"about_company",
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
									"COMPONENT_TEMPLATE" => ".default",
									"DETAIL_URL" => "",
									"DISPLAY_BOTTOM_PAGER" => "N",
									"DISPLAY_DATE" => "N",
									"DISPLAY_NAME" => "Y",
									"DISPLAY_PICTURE" => "Y",
									"DISPLAY_PREVIEW_TEXT" => "Y",
									"DISPLAY_TOP_PAGER" => "N",
									"ELEMENT_CODE" => "",
									"ELEMENT_ID" => "14",
									"FIELD_CODE" => array(0=>"PREVIEW_TEXT",1=>"PREVIEW_PICTURE",2=>"",),
									"IBLOCK_ID" => "7",
									"IBLOCK_TYPE" => "about",
									"IBLOCK_URL" => "",
									"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									"MESSAGE_404" => "",
									"META_DESCRIPTION" => "-",
									"META_KEYWORDS" => "-",
									"PAGER_BASE_LINK_ENABLE" => "N",
									"PAGER_SHOW_ALL" => "N",
									"PAGER_TEMPLATE" => ".default",
									"PAGER_TITLE" => "Страница",
									"PROPERTY_CODE" => array(0=>"",1=>"",),
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
                        </blockquote>
	
						  <?$APPLICATION->IncludeComponent(
							  "bitrix:news.list",
							  "about_article_block",
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
								  "DISPLAY_DATE" => "N",
								  "DISPLAY_NAME" => "Y",
								  "DISPLAY_PICTURE" => "Y",
								  "DISPLAY_PREVIEW_TEXT" => "Y",
								  "DISPLAY_TOP_PAGER" => "N",
								  "FIELD_CODE" => array(0=>"",1=>"",),
								  "FILTER_NAME" => "",
								  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
								  "IBLOCK_ID" => "8",
								  "IBLOCK_TYPE" => "about",
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
								  "PROPERTY_CODE" => array(0=>"DESCRIPTION",1=>"",),
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
                      <a name="best"></a>
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleBestBlock.php"));?>
                        </div>
                        <?$APPLICATION->IncludeComponent(
                          "bitrix:news.list",
                          "about_best_employees",
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
                              "DISPLAY_DATE" => "N",
                              "DISPLAY_NAME" => "Y",
                              "DISPLAY_PICTURE" => "Y",
                              "DISPLAY_PREVIEW_TEXT" => "Y",
                              "DISPLAY_TOP_PAGER" => "N",
                              "FIELD_CODE" => array(0=>"",1=>"",),
                              "FILTER_NAME" => "",
                              "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                              "IBLOCK_ID" => "9",
                              "IBLOCK_TYPE" => "about",
                              "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                              "INCLUDE_SUBSECTIONS" => "N",
                              "MESSAGE_404" => "",
                              "NEWS_COUNT" => "100",
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
                          )
                        );?>
                        <a name="crew"></a>
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleCrew.php"));?>
                        </div>
                        <?$APPLICATION->IncludeComponent(
                          "bitrix:news.list",
                          "about_crew",
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
                              "CHECK_DATES" => "N",
                              "DETAIL_URL" => "",
                              "DISPLAY_BOTTOM_PAGER" => "N",
                              "DISPLAY_DATE" => "N",
                              "DISPLAY_NAME" => "Y",
                              "DISPLAY_PICTURE" => "Y",
                              "DISPLAY_PREVIEW_TEXT" => "N",
                              "DISPLAY_TOP_PAGER" => "N",
                              "FIELD_CODE" => array(0=>"",1=>"",),
                              "FILTER_NAME" => "",
                              "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                              "IBLOCK_ID" => "10",
                              "IBLOCK_TYPE" => "about",
                              "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                              "INCLUDE_SUBSECTIONS" => "N",
                              "MESSAGE_404" => "",
                              "NEWS_COUNT" => "100",
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
                              "PROPERTY_CODE" => array(0=>"PHOTO",1=>"",),
                              "SET_BROWSER_TITLE" => "N",
                              "SET_LAST_MODIFIED" => "N",
                              "SET_META_DESCRIPTION" => "N",
                              "SET_META_KEYWORDS" => "N",
                              "SET_STATUS_404" => "N",
                              "SET_TITLE" => "N",
                              "SHOW_404" => "N",
                              "SORT_BY1" => "ID",
                              "SORT_BY2" => "SORT",
                              "SORT_ORDER1" => "DESC",
                              "SORT_ORDER2" => "ASC",
                              "STRICT_SECTION_CHECK" => "N"
                          )
                        );?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- About END-->
            <!-- Reviews-->
            <div class="section-reviews section-reviews-inner">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <div class="reviews-header-alt">
                          <div class="row">
								<?$APPLICATION->IncludeComponent(
									"bitrix:news.detail",
									"about_revieve_title",
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
										"COMPONENT_TEMPLATE" => ".default",
										"DETAIL_URL" => "",
										"DISPLAY_BOTTOM_PAGER" => "Y",
										"DISPLAY_DATE" => "N",
										"DISPLAY_NAME" => "Y",
										"DISPLAY_PICTURE" => "Y",
										"DISPLAY_PREVIEW_TEXT" => "Y",
										"DISPLAY_TOP_PAGER" => "N",
										"ELEMENT_CODE" => "",
										"ELEMENT_ID" => "154",
										"FIELD_CODE" => array(0=>"",1=>"",),
										"IBLOCK_ID" => "29",
										"IBLOCK_TYPE" => "about",
										"IBLOCK_URL" => "",
										"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										"MESSAGE_404" => "",
										"META_DESCRIPTION" => "-",
										"META_KEYWORDS" => "-",
										"PAGER_BASE_LINK_ENABLE" => "N",
										"PAGER_SHOW_ALL" => "N",
										"PAGER_TEMPLATE" => ".default",
										"PAGER_TITLE" => "Страница",
										"PROPERTY_CODE" => array(0=>"Subtitle",1=>"PICTURE",2=>"",3=>"",4=>"",),
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
									),
									false,
									array('HIDE_ICONS' => "Y")
								);?>

                          </div>
                        </div>
                        <div class="reviews-slider-wrapper">
                          <div class="reviews-slider">
                            <?$APPLICATION->IncludeComponent(
                              "bitrix:news.list",
                              "about_reviews",
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
                                  "DISPLAY_DATE" => "N",
                                  "DISPLAY_NAME" => "Y",
                                  "DISPLAY_PICTURE" => "Y",
                                  "DISPLAY_PREVIEW_TEXT" => "Y",
                                  "DISPLAY_TOP_PAGER" => "N",
                                  "FIELD_CODE" => array(0=>"",1=>"",),
                                  "FILTER_NAME" => "",
                                  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                  "IBLOCK_ID" => "5",
                                  "IBLOCK_TYPE" => "reviews",
                                  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                  "INCLUDE_SUBSECTIONS" => "N",
                                  "MESSAGE_404" => "",
                                  "NEWS_COUNT" => "100",
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
                                  "PROPERTY_CODE" => array(0=>"STARS",1=>"REGION",2=>"",),
                                  "SET_BROWSER_TITLE" => "N",
                                  "SET_LAST_MODIFIED" => "N",
                                  "SET_META_DESCRIPTION" => "N",
                                  "SET_META_KEYWORDS" => "N",
                                  "SET_STATUS_404" => "N",
                                  "SET_TITLE" => "N",
                                  "SHOW_404" => "N",
                                  "SORT_BY1" => "ACTIVE_FROM",
                                  "SORT_BY2" => "SORT",
                                  "SORT_ORDER1" => "DESC",
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
            <!-- Reviews END-->
            <!-- Text content-->
            <div class="section-inner">
              <div class="section-content">
                <div class="container">
                  <div class="row">
                    <div class="col-12 col-lg-9">
                      <div class="section-inner-cont">
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleHistory.php"));?>
                        </div>
                          <?$APPLICATION->IncludeComponent(
							  "bitrix:news.list",
							  "about_company_history",
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
								  "CHECK_DATES" => "N",
								  "DETAIL_URL" => "",
								  "DISPLAY_BOTTOM_PAGER" => "N",
								  "DISPLAY_DATE" => "N",
								  "DISPLAY_NAME" => "Y",
								  "DISPLAY_PICTURE" => "Y",
								  "DISPLAY_PREVIEW_TEXT" => "Y",
								  "DISPLAY_TOP_PAGER" => "N",
								  "FIELD_CODE" => array(0=>"",1=>"",),
								  "FILTER_NAME" => "",
								  "HIDE_LINK_WHEN_NO_DETAIL" => "N",
								  "IBLOCK_ID" => "11",
								  "IBLOCK_TYPE" => "about",
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
							  )
						  );?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Text content END-->
            <!-- Gallery-->
            <div class="section section-gallery section-gallery-inner">
              <div class="section-content">
                <div class="container">
                    <a name="gallery"></a>
                  <div class="h2">
					  <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/about/titleGallery.php"));?>
                  </div>
                </div>
                <div class="gallery">
                  <div class="row">
                      <?$APPLICATION->IncludeComponent(
						  "bitrix:news.detail",
						  "about_gallery",
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
							  "ELEMENT_ID" => "37",
							  "FIELD_CODE" => array(0=>"",1=>"",),
							  "IBLOCK_ID" => "12",
							  "IBLOCK_TYPE" => "about",
							  "IBLOCK_URL" => "",
							  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							  "MESSAGE_404" => "",
							  "META_DESCRIPTION" => "-",
							  "META_KEYWORDS" => "-",
							  "PAGER_BASE_LINK_ENABLE" => "N",
							  "PAGER_SHOW_ALL" => "N",
							  "PAGER_TEMPLATE" => ".default",
							  "PAGER_TITLE" => "Страница",
							  "PROPERTY_CODE" => array(0=>"GALLERY_PHOTO",1=>"",),
							  "SET_BROWSER_TITLE" => "N",
							  "SET_CANONICAL_URL" => "N",
							  "SET_LAST_MODIFIED" => "N",
							  "SET_META_DESCRIPTION" => "N",
							  "SET_META_KEYWORDS" => "Y",
							  "SET_STATUS_404" => "N",
							  "SET_TITLE" => "N",
							  "SHOW_404" => "N",
							  "STRICT_SECTION_CHECK" => "N",
							  "USE_PERMISSIONS" => "N",
							  "USE_SHARE" => "N"
						  ),
						  false,
						  array('HIDE_ICONS' => "Y")
					  );?>
                  </div>
                </div>
              </div>
            </div>
            <!-- Gallery END-->
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