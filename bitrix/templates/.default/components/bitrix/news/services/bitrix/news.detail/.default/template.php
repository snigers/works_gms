<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="main">
    <div class="page-wrapper">
		<?
		pr("ttetetetetete");
		?>
    <!-- Шапка страницы-->
        <div class="page-header page-header-alt" style="background-image: url(<?=CFile::GetPath($arResult["PROPERTIES"]["PICTURE_BACKGROUND"]["VALUE"])?>)">
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
                                <div class="h1"><?$APPLICATION->ShowTitle();?></div>
                                <div class="page-header-text">
                                    <?=$arResult["PROPERTIES"]["SUBTITLE"]["~VALUE"]["TEXT"]?>
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
            <?/* Check selected local service or country */?>
            <?if ($arResult["PROPERTIES"]["LOCAL_OR_CROSS_COUNTRY"]["VALUE"] != "Y"):?>
                <!-- Page menu-->
                <div class="page-menu-wrapper">
                    <ul class="page-menu">
                        <li>
                            <a href="#why">
								<?=($arResult["PROPERTIES"]["TITLE_WHY_CHOOSE_US"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_WHY_CHOOSE_US"]["VALUE"] : "Why You Should Choose Us?"?>
                            </a>
                        </li>
                        <li>
                            <a href="#reviews">
								<?=($arResult["PROPERTIES"]["TITLE_REVIEWS"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_REVIEWS"]["VALUE"] : "Reviews"?>
                            </a>
                        </li>
                        <li>
                            <a href="#about">
								<?=($arResult["PROPERTIES"]["TITLE_ABOUT_LOCAL"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_ABOUT_LOCAL"]["VALUE"] : "About Local Moves"?>
                            </a>
                        </li>
                        <li>
                            <a href="#gallery">
								<?=($arResult["PROPERTIES"]["TITLE_GALLERY_LOCAL"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_GALLERY_LOCAL"]["VALUE"] : "Gallery"?>
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
                                        <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_WHY_CHOOSE_US"]["VALUE"]?></div><a name="why"></a>
                                        <div class="h4 orange"><?=$arResult["PROPERTIES"]["SUBTITLE_WHY_CHOOSE_US"]["VALUE"]?></div>
                                        <div class="why-list">
                                            <div class="row">
                                                <?foreach ($arResult["PROPERTIES"]["WHY_CHOOSE_US"]["VALUE"] as $arItem):?>
                                                    <div class="why-tmb">
                                                        <div class="why-tmb-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]?>"></div>
                                                        <div class="why-tmb-descr">
                                                            <p><?=$arItem["NAME"]?></p>
                                                        </div>
                                                    </div>
                                                <?endforeach;?>
                                            </div>
                                        </div>
	                                    <?foreach ($arResult["PROPERTIES"]["ARTICLE_BLOCK"]["VALUE"] as $key => $arItem):?>
                                            <?if ($key % 2 == 0):?>
                                                <div class="article-block">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 order-2 order-md-1">
                                                            <div class="h4 orange"><?=$arItem["NAME"]?></div>
                                                            <ul class="ul-alt">
			                                                    <?foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arList):?>
                                                                    <li><?=$arList?></li>
																<?endforeach;?>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-md-6 order-1 order-md-2">
                                                            <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]?>"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?else:?>
                                                <div class="article-block">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]?>"></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="h4 orange"><?=$arItem["NAME"]?></div>
                                                            <ul class="ul-alt">
																<?foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arList):?>
                                                                    <li><?=$arList?></li>
																<?endforeach;?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?endif;?>
										<?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About END-->
                <!-- Reviews-->
                <?if (count($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"]) > 0):?>
                    <div class="section-reviews section-reviews-inner">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont">
                                        <div class="reviews-header-alt">
                                            <div class="row">
                                                <div class="reviews-header-l"><a name="reviews"></a>
                                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_REVIEWS"]["VALUE"]?></div>
                                                    <div class="h3"><?=$arResult["PROPERTIES"]["SUBTITLE_REVIEWS"]["VALUE"]?></div>
                                                </div>
                                                <?foreach ($arResult["PROPERTIES"]["PIC_REVIEWS"]["VALUE"] as $arPic):?>
                                                    <div class="reviews-header-m"><img src="<?=$arPic?>"></div>
                                                <?endforeach;?>
                                            </div>
                                        </div>
                                        <div class="reviews-slider-wrapper">
                                            <div class="reviews-slider">
												<?foreach($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"] as $arItem):?>
                                                        <div class="slide">
                                                            <div class="review-tmb">
                                                                <div class="rating-yelp">
                                                                    <div class="cont">
																		<?php for ($i = 0; $i < $arItem["PROPERTIES"]["STARS"]["VALUE"]; $i++): ?>
                                                                            <div class="star"></div>
																		<?php endfor ?>
                                                                    </div>
                                                                </div>
                                                                <div class="review-tmb-text">
																	<?=$arItem["~PREVIEW_TEXT"]?>
                                                                </div>
                                                                <div class="review-tmb-author">
                                                                    <div class="review-tmb-author-pic">
                                                                        <img src="<?=$arItem["PREVIEW_PICTURE"]?>">
                                                                    </div>
                                                                    <div class="review-tmb-author-descr">
                                                                        <div class="name">
                                                                            <p><?=$arItem["NAME"]?></p>
                                                                        </div>
                                                                        <div class="post">
                                                                            <p><?=$arItem["PROPERTIES"]["REGION"]["VALUE"]?></p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
												<?endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?endif;?>
                <!-- Reviews END-->
                <!-- Text content-->
                <div class="section-inner">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont"><a name="about"></a>
                                        <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_ABOUT_LOCAL"]["VALUE"]?></div>
										<?=$arResult["PROPERTIES"]["LOCAL_MOVES"]["~VALUE"]["TEXT"]?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Text content END-->
                <!-- Gallery-->
                <div class="section section-gallery section-gallery-inner">
                    <div class="section-content">
                        <div class="container"><a name="gallery"></a>
                            <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_GALLERY_LOCAL"]["VALUE"]?></div>
                        </div>
                        <div class="gallery">
                            <div class="row">
                                <?foreach ($arResult["PROPERTIES"]["GALLERY"]["VALUE"] as $arItem):?>
                                    <div class="col-6 col-md-4">
                                        <a class="fancybox" href="<?=$arItem?>" data-fancybox="main-gal">
                                            <img src="<?=$arItem?>">
                                        </a>
                                    </div>
                                <?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery END-->
            <?else:?>

                <!-- Page menu-->
                <div class="page-menu-wrapper">
                    <ul class="page-menu">
                        <li>
                            <a href="#compare">
								<?=($arResult["PROPERTIES"]["TITLE_COMPARISONS"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_COMPARISONS"]["VALUE"] : "Compare"?>
                            </a>
                        </li>
                        <li>
                            <a href="#estimate">
								<?=($arResult["PROPERTIES"]["TITLE_FORM"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_FORM"]["VALUE"] : "3 ways to recieve your free estimate"?>
                            </a>
                        </li>
                        <li>
                            <a href="#about">
								<?=($arResult["PROPERTIES"]["TITLE_ABOUT_CROSS"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_ABOUT_CROSS"]["VALUE"] : "About"?>
                            </a>
                        </li>
                        <li>
                            <a href="#reviews">
								<?=($arResult["PROPERTIES"]["TITLE_REVIEWS_CROSS"]["VALUE"] != "") ? $arResult["PROPERTIES"]["TITLE_REVIEWS_CROSS"]["VALUE"] : "Reviews"?>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Page menu END-->
                <!-- About-->
                <div class="section-inner section-inner-alt">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont"><a name="compare"></a>
                                        <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_COMPARISONS"]["VALUE"]?></div>
                                        <div class="compare-over-wrapper">
                                            <div class="compare-wrapper">
                                                <div class="row">
                                                    <div class="compare-l">
                                                        <div class="compare-item compare-item-cons">
                                                            <div class="compare-item-body">
                                                                <div class="h3"><?=$arResult["PROPERTIES"]["SUBTITLE_CHEAP"]["VALUE"]?></div>
                                                                <ul class="compare-list">
                                                                    <?foreach ($arResult["PROPERTIES"]["CHEAP_MOVING_COMPANY"]["VALUE"] as $arItem):?>
                                                                        <li><?=$arItem?></li>
                                                                    <?endforeach;?>
                                                                </ul>
                                                            </div>
                                                            <div class="compare-item-footer">
                                                                <div class="compare-num"><span><?=$arResult["PROPERTIES"]["PERCENT_CHEAP_MOVING_COMPANY"]["VALUE"]?></span></div>
                                                                <div class="compare-item-text">
                                                                    <p><?=$arResult["PROPERTIES"]["TOTAL_CHEAP_MOVING_COMPANY"]["VALUE"]?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="compare-m">
                                                        <div class="cont">vs</div>
                                                    </div>
                                                    <div class="compare-r">
                                                        <div class="compare-item compare-item-pros">
                                                            <div class="compare-item-body">
                                                                <div class="h3"><?=$arResult["PROPERTIES"]["SUBTITLE_GENTLEMENS"]["VALUE"]?></div>
                                                                <ul class="compare-list">
																	<?foreach ($arResult["PROPERTIES"]["GENTLEMENS_MOVING_COMPANY"]["VALUE"] as $arItem):?>
                                                                        <li><?=$arItem?></li>
																	<?endforeach;?>
                                                                </ul>
                                                            </div>
                                                            <div class="compare-item-footer">
                                                                <div class="compare-num"><span><?=$arResult["PROPERTIES"]["PERCENT_GENTLEMENS_MOVING_COMPANY"]["VALUE"]?></span></div>
                                                                <div class="compare-item-text">
                                                                    <p><?=$arResult["PROPERTIES"]["TOTAL_GENTLEMENS_MOVING_COMPANY"]["VALUE"]?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About END-->
                <!-- Estimate-->
                <div class="section-inner section-est-inner">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont"><a name="estimate"></a>
                                        <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_FORM"]["VALUE"]?></div>
                                        <div class="section-lead">
                                            <p><?=$arResult["PROPERTIES"]["SUBTITLE_FORM"]["VALUE"]?></p>
                                        </div>
                                        <div class="est-numbers-list">
                                            <div class="row">
												<?foreach ($arResult["PROPERTIES"]["LIST_OF_STEPS"]["~VALUE"] as $key => $arItem):?>
                                                    <div class="col-12 col-md-4">
                                                        <div class="est-number-tmb">
                                                            <div class="est-number-tmb-num">0<?=$key + 1?></div>
                                                            <div class="est-number-tmb-descr">
                                                                <p><?=$arItem["TEXT"]?></p>
                                                            </div>
                                                        </div>
                                                    </div>
												<?endforeach;?>
                                            </div>
                                        </div>
                                        <div class="form-placeholder-mob d-block d-md-none">
                                            <div class="form-placeholder-mob-inner">
                                                <div class="h3">Receive Free Price Estimate</div>
                                                <div class="btn btn-2 open-popup" data-popup="#estPopup"><span>Get price estimate</span></div>
                                            </div>
                                        </div>
                                        <div class="popup popup-mob form-popup" id="estPopup">
                                            <div class="popup-dialog">
                                                <div class="popup-content">
                                                    <div class="close"></div>
                                                    <div class="est-form">
                                                        <div class="h3">Receive Free Price Estimate</div>
														<?$APPLICATION->IncludeComponent(
															"bitrix:form.result.new",
															"rates_receive_form",
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
																"WEB_FORM_ID" => "7"
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
                </div>
                <!-- Estimate END-->
                <!-- About-->
                <div class="section-inner">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont">
                                        <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_ABOUT_CROSS"]["VALUE"]?></div><a name="about"></a>
                                        <div class="h4 orange">Cross country moving</div>
                                        <div class="why-list">
                                            <div class="row">
	                                            <?foreach ($arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["VALUE"] as $key => $arItem):?>
                                                    <div class="why-tmb">
                                                        <div class="why-tmb-pic"><img src="<?=$arItem?>"></div>
                                                        <div class="why-tmb-descr">
                                                            <p><?=$arResult["PROPERTIES"]["CROSS_COUNTRY_MOVING"]["DESCRIPTION"][$key]?></p>
                                                        </div>
                                                    </div>
												<?endforeach;?>
                                            </div>
                                        </div>
										<?foreach ($arResult["PROPERTIES"]["ABOUT_TEXT"]["VALUE"] as $key => $arItem):?>
											<?if ($key % 2 == 0):?>
                                                <div class="article-block">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6 order-2 order-md-1">
                                                            <div class="h4 orange"><?=$arItem["NAME"]?></div>
                                                            <ul class="ul-alt">
																<?foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arList):?>
                                                                    <li><?=$arList?></li>
																<?endforeach;?>
                                                            </ul>
                                                        </div>
                                                        <div class="col-12 col-md-6 order-1 order-md-2">
                                                            <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]?>"></div>
                                                        </div>
                                                    </div>
                                                </div>
											<?else:?>
                                                <div class="article-block">
                                                    <div class="row">
                                                        <div class="col-12 col-md-6">
                                                            <div class="article-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]?>"></div>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <div class="h4 orange"><?=$arItem["NAME"]?></div>
                                                            <ul class="ul-alt">
																<?foreach ($arItem["PROPERTIES"]["DESCRIPTION"]["VALUE"] as $arList):?>
                                                                    <li><?=$arList?></li>
																<?endforeach;?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
											<?endif;?>
										<?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About END-->
                <!-- Reviews-->
                <!--            --><?//pr($arResult["PROPERTIES"]["REVIEWS_LOCAL"]["VALUE"]);?>
	            <?if (count($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"]) > 0):?>
                    <div class="section-reviews section-reviews-inner">
                    <div class="section-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-9">
                                    <div class="section-inner-cont">
                                        <div class="reviews-header-alt">
                                            <div class="row">
                                                <div class="reviews-header-l"><a name="reviews"></a>
                                                    <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_REVIEWS_CROSS"]["VALUE"]?></div>
                                                    <div class="h3"><?=$arResult["PROPERTIES"]["SUBTITLE_REVIEWS_CROSS"]["VALUE"]?></div>
                                                </div>
												<?foreach ($arResult["PROPERTIES"]["PIC_REVIEWS_CROSS"]["VALUE"] as $arPic):?>
                                                    <div class="reviews-header-m"><img src="<?=$arPic?>"></div>
												<?endforeach;?>
                                            </div>
                                        </div>
                                        <div class="reviews-slider-wrapper">
                                            <div class="reviews-slider">
												<?foreach($arResult["PROPERTIES"]["REVIEWS_CROSS"]["VALUE"] as $arItem):?>
                                                    <div class="slide">
                                                        <div class="review-tmb">
                                                            <div class="rating-yelp">
                                                                <div class="cont">
																	<?php for ($i = 0; $i < $arItem["PROPERTIES"]["STARS"]["VALUE"]; $i++): ?>
                                                                        <div class="star"></div>
																	<?php endfor ?>
                                                                </div>
                                                            </div>
                                                            <div class="review-tmb-text">
																<?=$arItem["~PREVIEW_TEXT"]?>
                                                            </div>
                                                            <div class="review-tmb-author">
                                                                <div class="review-tmb-author-pic">
                                                                    <img src="<?=$arItem["PREVIEW_PICTURE"]?>">
                                                                </div>
                                                                <div class="review-tmb-author-descr">
                                                                    <div class="name">
                                                                        <p><?=$arItem["NAME"]?></p>
                                                                    </div>
                                                                    <div class="post">
                                                                        <p><?=$arItem["PROPERTIES"]["REGION"]["VALUE"]?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
												<?endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?endif;?>
                <!-- Reviews END-->
                <!-- Gallery-->
                <div class="section section-gallery section-gallery-inner">
                    <div class="section-content">
                        <div class="container"><a name="gallery"></a>
                            <div class="h2"><?=$arResult["PROPERTIES"]["TITLE_GALLERY_CROSS"]["VALUE"]?></div>
                        </div>
                        <div class="gallery">
                            <div class="row">
								<?foreach ($arResult["PROPERTIES"]["GALLERY_VAR2"]["VALUE"] as $arItem):?>
                                    <div class="col-6 col-md-4">
                                        <a class="fancybox" href="<?=$arItem?>" data-fancybox="main-gal">
                                            <img src="<?=$arItem?>">
                                        </a>
                                    </div>
								<?endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery END-->
            <?endif;?>




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












<?/*
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arResult["FIELDS"]["PREVIEW_TEXT"]):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif(strlen($arResult["DETAIL_TEXT"])>0):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>