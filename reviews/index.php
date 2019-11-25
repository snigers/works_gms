<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Reviews");
?> 
	  
	  
      <div class="main">
        <div class="page-wrapper">
          <div class="page-header" style="background-image: url(/layout/files/header-bg-reviews.jpg);">
            <div class="page-header-inner">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-8">
					  <?$APPLICATION->IncludeComponent(
						  "bitrix:breadcrumb",
						  "breadcrumb",
						  Array(
							  "PATH" => "",
							  "SITE_ID" => "s1",
							  "START_FROM" => "0"
						  )
					  );?>
                    <h1><?$APPLICATION->ShowTitle()?></h1>
                  </div>
                  <div class="col-md-4">
                    <div class="reviews-services">
                      <div class="row">
                        <div class="col-6"><img src="/layout/files/review-service-1.png"></div>
                        <div class="col-6"><img src="/layout/files/review-service-2.png"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
          <div class="page-body page-body-alt">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-8">
					<div class="page-content page-content-alt">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "reviews_list",
                            array(
                                "COMPONENT_TEMPLATE" => "reviews_list",
                                "IBLOCK_TYPE" => "reviews",
                                "IBLOCK_ID" => "5",
                                "NEWS_COUNT" => "10",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "FILTER_NAME" => "",
                                "FIELD_CODE" => array(
                                    0 => "DETAIL_TEXT",
                                    1 => "",
                                ),
                                "PROPERTY_CODE" => array(
                                    0 => "STARS",
                                    1 => "REGION",
                                    2 => "",
                                ),
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "N",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "CACHE_TYPE" => "A",
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
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "STRICT_SECTION_CHECK" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
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
                <div class="col-12 col-lg-4">
                  <div class="page-sidebar">
	
					  <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "reviews_form", Array(
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
						  "WEB_FORM_ID" => "3",	// ID веб-формы
						  "COMPONENT_TEMPLATE" => ".default"
					  ),
						  false
					  );?>
                  </div>
                </div>
              </div>
            </div>
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