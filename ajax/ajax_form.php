<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); ?>
<?
pr($_REQUEST);

?>

<?if($_REQUEST["WEB_FORM_ID"] == 1):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "1",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 2):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "2",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 3):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "3",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 4):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "4",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 5):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "5",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 6):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "6",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>

<?if($_REQUEST["WEB_FORM_ID"] == 7):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:form.result.new",
		"main_header_form",
		array(
			"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
			"WEB_FORM_ID" => "7",	// ID веб-формы
			"LIST_URL" => "",	// Страница со списком результатов
			"EDIT_URL" => "",	// Страница редактирования результата
			"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
			"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
			"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
			"IGNORE_CUSTOM_TEMPLATE" => "Y",	// Игнорировать свой шаблон
			"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CACHE_TIME" => "3600",	// Время кеширования (сек.)
			"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
			"COMPONENT_TEMPLATE" => ".default",
			"MODAL" => "Y",
		),
		false
	);?>
<?endif;?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php"); ?>