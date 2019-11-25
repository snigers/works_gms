<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<div class="main">
	<div class="page-wrapper">
		<div class="page-header" style="background-image: url(/layout/files/header-bg-text.jpg);">
			<div class="page-header-inner">
				<div class="container">
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
					<div class="article-date">
						<p><?=substr($arResult["DATE_CREATE"], 0, 10)?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="page-body">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="page-content">
							<?if ($arResult["DETAIL_PICTURE"] != ""):?>
								<div class="article-pic article-pic-top"><img src= "<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"></div>
							<?endif;?>
							<?/*CONTENT*/?>
							<?=$arResult["DETAIL_TEXT"];?>
							<?/*END CONTENT*/?>
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
							
							
							
							<div class="h3">Читайте также</div>
							<div class="articles-list">
								<div class="sidebar-articles-list">
									<?$APPLICATION->IncludeComponent(
										"bitrix:news.list",
										"detail_news_list",
										Array(
											"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
											"IBLOCK_ID" => $arParams["IBLOCK_ID"],
											"NEWS_COUNT" => $arParams["NEWS_COUNT"],
											"SORT_BY1" => $arParams["SORT_BY1"],
											"SORT_ORDER1" => $arParams["SORT_ORDER1"],
											"SORT_BY2" => $arParams["SORT_BY2"],
											"SORT_ORDER2" => $arParams["SORT_ORDER2"],
											"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
											"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
											"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
											"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
											"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
											"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
											"SET_TITLE" => $arParams["SET_TITLE"],
											"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
											"MESSAGE_404" => $arParams["MESSAGE_404"],
											"SET_STATUS_404" => $arParams["SET_STATUS_404"],
											"SHOW_404" => $arParams["SHOW_404"],
											"FILE_404" => $arParams["FILE_404"],
											"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
											"CACHE_TYPE" => $arParams["CACHE_TYPE"],
											"CACHE_TIME" => $arParams["CACHE_TIME"],
											"CACHE_FILTER" => $arParams["CACHE_FILTER"],
											"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
											"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
											"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
											"PAGER_TITLE" => $arParams["PAGER_TITLE"],
											"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
											"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
											"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
											"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
											"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
											"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
											"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
											"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
											"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
											"DISPLAY_NAME" => "Y",
											"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
											"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
											"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
											"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
											"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
											"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
											"FILTER_NAME" => "",
											"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
											"CHECK_DATES" => $arParams["CHECK_DATES"],
											"ID_DETAIL_ELEMENT" => $arResult["ID"],
										),
										$component
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