<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//=================================================================
$url = preg_replace("/f\/.+/", "" ,$_SERVER['REQUEST_URI']);
$arFields = getSeoData($url);
//=================================================================
?>
<div class="page-header page-header-home">
    <div class="page-header-slider">
        <div class="slide" style="background-image: url(<?=($arFields["PREVIEW_PICTURE"] != "") ? $arFields["PREVIEW_PICTURE"] : "/layout/files/top-slide-1.jpg"?>);"></div>
    </div>
    <div class="page-header-inner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="page-header-descr">
                        <div class="h1"><?=($arFields["PROPERTIES"]["H1"]["VALUE"] != "") ? $arFields["PROPERTIES"]["H1"]["VALUE"] : $arResult["NAME"]?></div>
                        <div class="page-header-text">
                            <p><?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?></p>
                            <div class="btn-video-top-wrapper">
                                <a class="btn-video-top video-link" href="<?= empty($arResult["PROPERTIES"]["FILE_VIDEO"]["VALUE"]) ? $arResult["PROPERTIES"]["LINK_VIDEO"]["VALUE"] : $arResult["PROPERTIES"]["FILE_VIDEO"]["VALUE"]["path"]?>" data-fancybox="">
                                    <div class="frame"></div>
                                    <div class="name"><?=$arResult["PROPERTIES"]["NAME_VIDEO"]["VALUE"]?></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:form.result.new",
                        "main_header_form",
                        array(
                            "COMPONENT_TEMPLATE" => "main_header_form",
                            "WEB_FORM_ID" => "1",
                            "IGNORE_CUSTOM_TEMPLATE" => "N",
                            "USE_EXTENDED_ERRORS" => "N",
                            "SEF_MODE" => "N",
                            "CACHE_TYPE" => "A",
                            "CACHE_TIME" => "3600",
                            "LIST_URL" => "",
                            "EDIT_URL" => "",
                            "SUCCESS_URL" => "",
                            "CHAIN_ITEM_TEXT" => "",
                            "CHAIN_ITEM_LINK" => "",
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