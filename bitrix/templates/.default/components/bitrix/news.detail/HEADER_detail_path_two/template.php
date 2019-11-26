<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



                                <div class="header-phone"><a class="btn-header-phone" href="tel:<?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?>"><span><?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?></span></a></div>
                            </div>
                        </div>
                        <div class="header-col-3">
                            <div class="header-button"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#quoteModal"><?=$arResult["PROPERTIES"]["TITLE_BUTTON"]["VALUE"]?></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-mob d-block d-md-none">
                <div class="row">
                    <div class="col-6"><a class="btn btn-2" href="tel:<?=$arResult["PROPERTIES"]["PHONE"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["PHONE_MOB_TITLE"]["VALUE"]?></a></div>
                    <div class="col-6"><a class="btn btn-1" href="#" data-toggle="modal" data-target="#quoteModal"><?=$arResult["PROPERTIES"]["LINK_MOBILE_TITLE"]["VALUE"]?></a></div>
                </div>
            </div>

        </div>
    </div>
</header>