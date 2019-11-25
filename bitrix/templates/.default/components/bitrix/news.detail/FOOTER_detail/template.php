<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="footer-col-1">
    <div class="footer-logo"><img src="<?=CFile::GetPath($arResult["PROPERTIES"]["LOGO_IMG"]["VALUE"])?>"></div>
    <div class="footer-text">
        <p><?=$arResult["PROPERTIES"]["TITLE_LICENSED"]["VALUE"]?><br><?=$arResult["PROPERTIES"]["LICENSED"]["VALUE"]?></p>
    </div>
    <div class="footer-privacy"><a href="<?=$arResult["PROPERTIES"]["LINK_PRIVACY"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["TITLE_PRIVACY"]["VALUE"]?></a></div>
</div>
<div class="footer-col-2">
    <div class="h3"><?=$arResult["PROPERTIES"]["REGION_TITLE"]["VALUE"]?></div>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.section.list",
		"menu_footer_geolocation",
		Array(
			"ADD_SECTIONS_CHAIN" => "N",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"COUNT_ELEMENTS" => "Y",
			"FILTER_NAME" => "sectionsFilter",
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "geolocation",
			"SECTION_CODE" => "",
			"SECTION_FIELDS" => array(0=>"",1=>"",),
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_URL" => "",
			"SECTION_USER_FIELDS" => array(0=>"UF_IN_BOTTOM_MENU",1=>"",),
			"SHOW_PARENT_NAME" => "Y",
			"TOP_DEPTH" => "2",
			"VIEW_MODE" => "TEXT"
		)
	);?>
</div>
<div class="footer-col-3">
    <div class="h3"><?=$arResult["PROPERTIES"]["CONNECT_WITH_US"]["VALUE"]?></div>
    <div class="footer-soclinks"><a class="footer-soclink footer-soclink-fb" href="<?=$arResult["PROPERTIES"]["CONNECT_FB"]["VALUE"]?>"></a>
        <a class="footer-soclink footer-soclink-instagram" href="<?=$arResult["PROPERTIES"]["CONNECT_INSTAGRAM"]["VALUE"]?>"></a></div>
</div>
<div class="footer-col-4">
    <div class="h3"><?=$arResult["PROPERTIES"]["SHARE_WITH_US"]["VALUE"]?></div>
    <div class="footer-share">
        <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
        <script src="https://yastatic.net/share2/share.js"></script>
        <div class="ya-share2" data-services="facebook,twitter"></div>
    </div>
</div>
<div class="footer-col-5">
    <div class="footer-copy">
        <p><?=$arResult["PROPERTIES"]["COPYRIGHT"]["~VALUE"]["TEXT"]?></p>
    </div>
    <div class="footer-dev-wrapper"><a class="footer-dev" href="<?=$arResult["PROPERTIES"]["LINK_DEVELOPER"]["VALUE"]?>" alt="<?=$arResult["PROPERTIES"]["DEVELOPER"]["VALUE"]?>">
            <?=$arResult["PROPERTIES"]["TITLE_DEVELOPER"]["VALUE"]?>
            <br><span><?=$arResult["PROPERTIES"]["DEVELOPER"]["VALUE"]?></span></a></div>
</div>



