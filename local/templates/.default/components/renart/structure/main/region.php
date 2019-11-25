 <?

 //ГЛАВНАЯ СТРАНИЦА РЕГИОНА
 global $GEOLOC_BASE_ELEMENT;
 
 $sectionIdState = getLocationID($arResult["VARIABLES"]["STATE_CODE"]);
 $sectionIdElement = getLocationData($arResult["VARIABLES"]["REGION_CODE"], $sectionIdState);
 //=================================================================
 $url = preg_replace("/f\/.+/", "" ,$_SERVER['REQUEST_URI']);
 $arFields = getSeoData($url);
 //=================================================================
 
 ?>


 <div class="main">
	 <div class="page-wrapper">
		 <!-- Верхний блок-->
		 <?
		 $element_id = "";
		 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_HEADING"]["IBLOCK_ID"]);
		 $element_id = checkIsArray($element_id);
		 ?>
		 <?$APPLICATION->IncludeComponent(
			 "bitrix:news.detail",
			 "main_heading",
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
				 "ELEMENT_ID" => $element_id,
				 "FIELD_CODE" => array(
					 0 => "FILE_VIDEO",
					 1 => "PREVIEW_PICTURE",
					 2 => "",
				 ),
				 "IBLOCK_ID" => "16",
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
				 "PROPERTY_CODE" => array(
					 0 => "FILE_VIDEO",
					 1 => "LINK_VIDEO",
					 2 => "NAME_VIDEO",
					 3 => "SUBTITLE",
					 4 => "",
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
				 "COMPONENT_TEMPLATE" => "main_heading",
			 ),
			 false
		 );?>
		
		
		
		 <!-- Верхний блок END-->
		
		
		
		 <!-- Why-->
		 <div class="section section-why">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleWhyUs.php"));?>
						 <?
						 ?>
					 </div>
					 <?
					 $element_id = "";
					 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_WHY_US"]["IBLOCK_ID"]);
					 $GLOBALS["elements_id"] = array("ID" => $element_id);
					 ?>
					 <?$APPLICATION->IncludeComponent(
						 "bitrix:news.list",
						 "main_why_us",
						 array(
							 "COMPONENT_TEMPLATE" => "main_why_us",
							 "IBLOCK_TYPE" => "main",
							 "IBLOCK_ID" => "3",
							 "NEWS_COUNT" => "20",
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
								 0 => "",
								 1 => "",
							 ),
							 "CHECK_DATES" => "Y",
							 "DETAIL_URL" => "",
							 "AJAX_MODE" => "N",
							 "AJAX_OPTION_JUMP" => "N",
							 "AJAX_OPTION_STYLE" => "Y",
							 "AJAX_OPTION_HISTORY" => "N",
							 "AJAX_OPTION_ADDITIONAL" => "",
							 "CACHE_TYPE" => "A",
							 "CACHE_TIME" => "36000000",
							 "CACHE_FILTER" => "N",
							 "CACHE_GROUPS" => "Y",
							 "PREVIEW_TRUNCATE_LEN" => "",
							 "ACTIVE_DATE_FORMAT" => "d.m.Y",
							 "SET_TITLE" => "Y",
							 "SET_BROWSER_TITLE" => "Y",
							 "SET_META_KEYWORDS" => "Y",
							 "SET_META_DESCRIPTION" => "Y",
							 "SET_LAST_MODIFIED" => "N",
							 "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
		 </div>
		 <!-- Why END-->
		
		
		 <!-- Services-->
		 <div class="section section-services">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleServices.php"));?>
					 </div>
					 <?
					 $element_id = "";
					 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_SERVICES_LIST"]["IBLOCK_ID"]);
					 $GLOBALS["elements_id"] = array("ID" => $element_id);
					 ?>
					 <?$APPLICATION->IncludeComponent(
						 "bitrix:news.list",
						 "main_services_list",
						 array(
							 "COMPONENT_TEMPLATE" => "main_services_list",
							 "IBLOCK_TYPE" => "services",
							 "IBLOCK_ID" => "2",
							 "NEWS_COUNT" => "20",
							 "SORT_BY1" => "ACTIVE_FROM",
							 "SORT_ORDER1" => "DESC",
							 "SORT_BY2" => "ID",
							 "SORT_ORDER2" => "ASC",
							 "FILTER_NAME" => "elements_id",
							 "FIELD_CODE" => array(
								 0 => "",
								 1 => "",
							 ),
							 "PROPERTY_CODE" => array(
								 0 => "",
								 1 => "",
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
							 "CACHE_GROUPS" => "Y",
							 "PREVIEW_TRUNCATE_LEN" => "",
							 "ACTIVE_DATE_FORMAT" => "d.m.Y",
							 "SET_TITLE" => "N",
							 "SET_BROWSER_TITLE" => "N",
							 "SET_META_KEYWORDS" => "N",
							 "SET_META_DESCRIPTION" => "Y",
							 "SET_LAST_MODIFIED" => "Y",
							 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							 "ADD_SECTIONS_CHAIN" => "N",
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
							 "DISPLAY_BOTTOM_PAGER" => "N",
							 "PAGER_TITLE" => "Новости",
							 "PAGER_SHOW_ALWAYS" => "N",
							 "PAGER_DESC_NUMBERING" => "N",
							 "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							 "PAGER_SHOW_ALL" => "N",
							 "PAGER_BASE_LINK_ENABLE" => "N",
							 "SET_STATUS_404" => "N",
							 "SHOW_404" => "N",
							 "MESSAGE_404" => "",
							 "GEO_STATE" => $arResult["VARIABLES"]["STATE_CODE"],
							 "GEO_REGION" => $arResult["VARIABLES"]["REGION_CODE"],
							 "GEO_LOCAL" => $arResult["VARIABLES"]["LOCATION_CODE"],
						 ),
						 false
					 );?>
				 </div>
			 </div>
		 </div>
		 <!-- Services END-->
		 <!-- About-->
		 <div class="section section-about">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleAbout.php"));?>
					 </div>
					 <?
					 $element_id = "";
					 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["GEOGRAPHY_TEXT"]["IBLOCK_ID"]);
					 $element_id = checkIsArray($element_id);
					 ?>
					 <?$APPLICATION->IncludeComponent(
						 "bitrix:news.detail",
						 "geography_text",
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
							 "ELEMENT_ID" => $element_id,
							 "FIELD_CODE" => array(
								 0 => "PREVIEW_PICTURE",
								 1 => "",
								 2 => "",
							 ),
							 "IBLOCK_ID" => "20",
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
							 "PROPERTY_CODE" => array(
								 0 => "LINK_GEOGRAPHY",
								 1 => "TEXT_GEOGRAPHY",
								 2 => "TITLE_GEOGRAPHY",
								 3 => "",
								 4 => "",
								 5 => "",
								 6 => "",
								 7 => "",
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
							 "COMPONENT_TEMPLATE" => "geography_text",
                             "GEO_LOCATION_ID" => $sectionIdElement,
						 ),
						 false
					 );?>
				 </div>
			 </div>
		 </div>
		 <!-- About END-->
		 <!-- Benefits-->
		 <div class="section section-benefits">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleTechnological.php"));?>
					 </div>
					 <div class="benefits-list">
						 <?
						 $element_id = "";
						 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_TECHNOLOGICAL"]["IBLOCK_ID"]);
						 $GLOBALS["elements_id"] = array("ID" => $element_id);
						 ?>
						 <div class="row">
							 <?$APPLICATION->IncludeComponent(
								 "bitrix:news.list",
								 "main_technological",
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
									 "IBLOCK_ID" => "17",
									 "IBLOCK_TYPE" => "main",
									 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									 "INCLUDE_SUBSECTIONS" => "Y",
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
		 </div>
		 <!-- Benefits END-->
		 <!-- Process-->
		 <div class="section section-process">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleMoving.php"));?>
					 </div>
					 <div class="process-slider-wrapper">
						 <?
						 $element_id = "";
						 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_MOVING_PROCESS"]["IBLOCK_ID"]);
						 $GLOBALS["elements_id"] = array("ID" => $element_id);
						 ?>
						 <div class="process-slider">
							 <?$APPLICATION->IncludeComponent(
								 "bitrix:news.list",
								 "main_moving_process",
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
									 "IBLOCK_ID" => "18",
									 "IBLOCK_TYPE" => "main",
									 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
									 "INCLUDE_SUBSECTIONS" => "Y",
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
		 </div>
		 <!-- Process END-->
		 <!-- Reviews-->
		 <div class="section section-reviews">
			 <div class="section-content">
				 <div class="container">
					 <div class="reviews-header">
						 <?
						 $element_id = "";
						 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_DETAIL_TITLE_FORM"]["IBLOCK_ID"]);
						 $element_id = checkIsArray($element_id);
						 ?>
						 <div class="row">
							 <?$APPLICATION->IncludeComponent(
								 "bitrix:news.detail",
								 "main_detail_title_form",
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
									 "DISPLAY_BOTTOM_PAGER" => "Y",
									 "DISPLAY_DATE" => "N",
									 "DISPLAY_NAME" => "Y",
									 "DISPLAY_PICTURE" => "Y",
									 "DISPLAY_PREVIEW_TEXT" => "Y",
									 "DISPLAY_TOP_PAGER" => "N",
									 "ELEMENT_CODE" => "",
									 "ELEMENT_ID" => $element_id,
									 "FIELD_CODE" => array(0=>"",1=>"",),
									 "IBLOCK_ID" => "28",
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
									 "PROPERTY_CODE" => array(0=>"SUBTITLE",1=>"PICTURE_LEFT",2=>"PICTURE_RIGHT",),
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
						 <?
						 $element_id = "";
						 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_REVIEWS"]["IBLOCK_ID"]);
						 $GLOBALS["elements_id"] = array("ID" => $element_id);
						 ?>
						 <div class="reviews-slider">
							 <?$APPLICATION->IncludeComponent(
								 "bitrix:news.list",
								 "main_reviews",
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
									 "FILTER_NAME" => "elements_id",
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
		 <!-- Reviews END-->
		 <!-- Gallery-->
		 <div class="section section-gallery">
			 <div class="section-content">
				 <div class="container">
					 <div class="h2">
						 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleGallery.php"));?>
					 </div>
				 </div>
				 <div class="gallery">
					 <?
					 $element_id = "";
					 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["MAIN_GALLERY"]["IBLOCK_ID"]);
					 $GLOBALS["elements_id"] = array("ID" => $element_id);
					 ?>
					 <div class="row">
						 <?$APPLICATION->IncludeComponent(
							 "bitrix:news.list",
							 "main_gallery",
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
								 "COMPONENT_TEMPLATE" => "main_gallery",
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
								 "IBLOCK_ID" => "19",
								 "IBLOCK_TYPE" => "main",
								 "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								 "INCLUDE_SUBSECTIONS" => "Y",
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
							 ),
							 false,
							 array('HIDE_ICONS' => "Y")
						 );?>
					 </div>
				 </div>
			 </div>
		 </div>
		 <!-- Gallery END-->
		 <!-- Contacts-->
		 <div class="section section-contacts">
			 <div class="section-content">
				 <div class="container">
					 <div class="row">
						 <div class="col-12 col-md-4">
							 <div class="contacts-descr">
								 <div class="h2">
									 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleContact.php"));?>
								 </div>
								 <?
								 $element_id = "";
								 $element_id = getElementIDbyLoc($sectionIdElement, $GEOLOC_BASE_ELEMENT["FAQ_CONTACTS"]["IBLOCK_ID"]);
								 $element_id = checkIsArray($element_id);
								 ?>
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
										 "ELEMENT_ID" => $element_id,
										 "FIELD_CODE" => array(0=>"",1=>"",),
										 "IBLOCK_ID" => "33",
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
						 <div class="col-12 col-md-8">
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
										 <div class="help-form">
											 <div class="h3">
												 <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array("AREA_FILE_SHOW" => "file", "PATH" => "/includes/main/titleForm.php"));?>
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
					 </div>
				 </div>
			 </div>
		 </div>
		 <!-- Contacts END-->
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
 
 