<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("FAQ");
?> 
	  
	  
      <div class="main">
        <div class="page-wrapper">
          <div class="page-header" style="background-image: url(/layout/files/header-bg-faq.jpg);">
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
                <h1><?$APPLICATION->ShowTitle();?></h1>
              </div>
            </div>
          </div>
          <div class="page-body page-body-alt">
            <div class="container">
              <div class="row">
                <div class="col-12 col-lg-8">
                  <div class="page-content page-content-alt">
                    <div class="faq-list">
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"FAQ",
							Array(
								"ACTIVE_DATE_FORMAT" => "d.m.Y",
								"ADD_SECTIONS_CHAIN" => "Y",
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
								"COMPONENT_TEMPLATE" => "FAQ",
								"DETAIL_URL" => "",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"DISPLAY_DATE" => "N",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"DISPLAY_TOP_PAGER" => "N",
								"FIELD_CODE" => array(0=>"",1=>"PROPERTY_SECTION_CODE",),
								"FILTER_NAME" => "",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"IBLOCK_ID" => "15",
								"IBLOCK_TYPE" => "faq",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"INCLUDE_SUBSECTIONS" => "Y",
								"MESSAGE_404" => "",
								"NEWS_COUNT" => "999",
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
								"SORT_BY1" => "IBLOCK_SECTION_ID ",
								"SORT_BY2" => "ID",
								"SORT_ORDER1" => "ASC",
								"SORT_ORDER2" => "DESC",
								"STRICT_SECTION_CHECK" => "N"
							)
						);?>
                    </div>
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
          </div>
          <!-- Contacts-->
          <div class="section section-contacts section-contacts-alt">
            <div class="section-content">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-md-8 order-2 order-md-1">
                    <div class="form-placeholder-mob d-block d-md-none">
                      <div class="form-placeholder-mob-inner">
                        <div class="h3">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/faq/titleForm.php"));?>
                        </div>
                        <div class="btn btn-2 open-popup" data-popup="#helpPopup"><span>Send a question</span></div>
                      </div>
                    </div>
                    <div class="popup popup-mob form-popup" id="helpPopup">
                      <div class="popup-dialog">
                        <div class="popup-content">
                          <div class="close"></div>
                          <div class="help-form">
                            <div class="h3">
								<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/faq/titleForm.php"));?>
                            </div>
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
                  <div class="col-12 col-md-4 order-1 order-md-2">
                      <div class="contacts-descr">
                        <div class="h2">
							<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/faq/titleContact.php"));?>
                        </div>
                          <?$APPLICATION->IncludeComponent(
                              "bitrix:news.detail",
                              "faq_contacts",
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
                                  "ELEMENT_ID" => "178",
                                  "FIELD_CODE" => array(0=>"",1=>"",),
                                  "IBLOCK_ID" => "35",
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
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Contacts END-->
        </div>
      </div>
  
     
   
 
     

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>