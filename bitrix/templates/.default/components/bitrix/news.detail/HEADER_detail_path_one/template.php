<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="header-col-1">
    <div class="row">
        <div class="header-logo">
            <a href="<?=($_SESSION["GEO_DATA"]["NAME"] != "") ? "/" . $_SESSION["GEO_DATA"]["URL_SECTION"] : "/"?>">
                <img src="<?=CFile::GetPath($arResult["PROPERTIES"]["LOGO_IMG"]["VALUE"])?>" alt="<?=$arResult["PROPERTIES"]["LOGO_ALT"]["VALUE"]?>">
            </a>
        </div>
        <div class="header-text">
            <p><?=$arResult["PROPERTIES"]["TITLE_LICENSED"]["VALUE"]?><br><?=$arResult["PROPERTIES"]["LICENSED"]["VALUE"]?></p>
        </div>
    </div>
</div>
