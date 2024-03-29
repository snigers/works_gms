<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle();?></title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/layout/js/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/layout/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/layout/css/slick.css">
    <link rel="stylesheet" href="/layout/js/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/layout/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="/layout/js/bootstrap-fileinput/css/fileinput.min.css">
    <link rel="stylesheet" href="/layout/js/bootstrap-fileinput/css/fileinput-rtl.min.css">
    <link rel="stylesheet" href="/layout/css/nouislider.min.css">
    <link rel="stylesheet" href="/layout/js/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/layout/css/animations.css">
    <link rel="stylesheet" href="/layout/css/main.css">
    <link rel="stylesheet" href="/layout/css/responsive.css">
  </head>
  <body>
  <?$APPLICATION->IncludeComponent(
	  "gms4you:seo",
	  "canonical",
	  Array(
		  "IBLOCK_ID"=>36
	  )
  );?>
  <?$APPLICATION->ShowPanel();?>
    <div class="up-link"></div>
    <div class="over-wrapper">
      <div id="mobile-indicator"></div>
      <div id="sm-indicator"></div>
      <header><a name="top"></a>
        <div class="header-content">
          <div class="header-content-inner">
            <div class="header-top">
              <div class="container">
                <div class="navbar-trigger"><span></span><span></span><span></span></div>
                <div class="navbar-wrapper">
                    <div class="close"></div>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "topMenu",
                        array(
                            "COMPONENT_TEMPLATE" => "topMenu",
                            "ROOT_MENU_TYPE" => "top",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "left",
                            "USE_EXT" => "Y",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
							"GEO_LOC" => $_SESSION["GEO_DATA"]
                        ),
                        false
                    );?>
                    </div>
              </div>
            </div>
              <div class="header-bottom">
                  <div class="container">
                      <div class="row">
						  <?$APPLICATION->IncludeComponent(
							  "bitrix:news.detail",
							  "HEADER_detail_path_one",
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
								  "CACHE_GROUPS" => "Y",
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
								  "ELEMENT_ID" => "155",
								  "FIELD_CODE" => array(0=>"",1=>"",),
								  "IBLOCK_ID" => "31",
								  "IBLOCK_TYPE" => "main",
								  "IBLOCK_URL" => "",
								  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								  "MESSAGE_404" => "",
								  "META_DESCRIPTION" => "-",
								  "META_KEYWORDS" => "-",
								  "PAGER_BASE_LINK_ENABLE" => "N",
								  "PAGER_SHOW_ALL" => "N",
								  "PAGER_TEMPLATE" => ".default",
								  "PAGER_TITLE" => "Страница",
								  "PROPERTY_CODE" => array(0=>"LICENSED",1=>"PHONE",2=>"PICTURE_ALT",3=>"TITLE_LICENSED",4=>"",),
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
								  "GEO_LOCATION" => $_SESSION["GEO_DATA"]
							  )
						  );?>
                          <div class="header-col-2">
                              <div class="row">

                                  <div class="header-location">
                                      <a class="btn-header-location" href="#" data-location-popup=".location-suggest-popup">
                                          <span class="city-name">
                                            <?if($_SESSION["GEO_DATA"]['FULL_NAME']):?>
                                                <?echo $_SESSION["GEO_DATA"]['FULL_NAME'];?>
                                            <?else:?>
                                                Los Angeles
                                            <?endif;?>
                                          </span>
                                      </a>
                                      <div class="location-popup location-suggest-popup">
                                          <div class="popup-dialog">
                                              <div class="popup-content">
                                                  <div class="close close-popup"></div>
                                                  <div class="location-suggest-name">
                                                      <span class="city-name">
                                                        <?if($_SESSION["GEO_DATA"]['FULL_NAME']):?>
                                                            <?echo $_SESSION["GEO_DATA"]['FULL_NAME'];?>
                                                        <?else:?>
                                                            Los Angeles
                                                        <?endif;?>
                                                      </span>
                                                  </div>
                                                  <div class="location-suggest-buttons">
                                                      <div class="btn btn-1 btn-location-yes close-popup">Yes</div>
                                                      <div class="btn btn-2 btn-location-choose" data-location-popup=".location-choice-popup">Regions choice</div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="location-popup location-choice-popup">
                                          <div class="popup-dialog">
                                              <div class="popup-content">
                                                  <div class="close"></div>
                                                  <div class="search-form geo-search-form">
                                                      <form>
                                                          <div class="form-group">
                                                              <input type="text" name="geo_search" id="geo_search" placeholder="Search">
                                                              <div class="btn-search">Search</div>
                                                          </div>
                                                          <div class="geo-suggest-popup">
                                                              <div class="suggest-items-list-wrapper">
                                                                  <div class="suggest-items-list"></div>
                                                              </div>
                                                          </div>
                                                      </form>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
	
								  <?$APPLICATION->IncludeComponent(
									  "bitrix:news.detail",
									  "HEADER_detail_path_two",
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
										  "CACHE_GROUPS" => "Y",
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
										  "ELEMENT_ID" => "296",
										  "FIELD_CODE" => array(0=>"",1=>"",),
										  "IBLOCK_ID" => "38",
										  "IBLOCK_TYPE" => "main",
										  "IBLOCK_URL" => "",
										  "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
										  "MESSAGE_404" => "",
										  "META_DESCRIPTION" => "-",
										  "META_KEYWORDS" => "-",
										  "PAGER_BASE_LINK_ENABLE" => "N",
										  "PAGER_SHOW_ALL" => "N",
										  "PAGER_TEMPLATE" => ".default",
										  "PAGER_TITLE" => "Страница",
										  "PROPERTY_CODE" => array(0=>"TITLE_BUTTON",1=>"",),
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



						