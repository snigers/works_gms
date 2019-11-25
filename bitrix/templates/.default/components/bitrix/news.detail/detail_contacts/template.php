<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="contacts-descr-alt">
    <div class="contacts-item">
		<? $img = CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["PHONE_PICTURE"]["FILE_VALUE"]["ID"], array('width'=>25, 'height' => 25),BX_RESIZE_IMAGE_EXACT )?>
        <div class="contacts-item-pic"><img src="<?=$img["src"];?>"></div>
        <div class="contacts-item-descr">
            <?foreach ($arResult["PROPERTIES"]["PHONES"]["VALUE"] as $key => $arItem):?>
                <div class="contacts-sub-item">
                    <div class="contacts-phone">
                        <p><a href="tel:<?=$arItem?>"><?=$arItem?></a></p>
                    </div>
                    <div class="contacts-sub-ttl">
                        <p><?=$arResult["PROPERTIES"]["PHONES"]["DESCRIPTION"][$key]?></p>
                    </div>
                </div>
            <?endforeach;?>
        </div>
    </div>
    <div class="contacts-item">
		<? $img = CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["EMAIL_PICTURE"]["FILE_VALUE"]["ID"], array('width'=>25, 'height' => 25),BX_RESIZE_IMAGE_EXACT )?>
        <div class="contacts-item-pic"><img src="<?=$img["src"];?>"></div>
        <div class="contacts-item-descr">
            <div class="contacts-email">
                <p><a href="mailto:<?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?>"><?=$arResult["PROPERTIES"]["EMAIL"]["VALUE"]?></a></p>
            </div>
        </div>
    </div>
    <div class="contacts-item">
		<? $img = CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["POINT_MAP_PICTURE"]["FILE_VALUE"]["ID"], array('width'=>25, 'height' => 25),BX_RESIZE_IMAGE_EXACT )?>
        <div class="contacts-item-pic"><img src="<?=$img["src"];?>"></div>
        <div class="contacts-item-descr">
            <div class="contacts-address">
                <p><?=$arResult["PROPERTIES"]["POINT_MAP"]["~VALUE"]?></p>
                <p>
                    <div class="btn-address open-popup" data-popup="#mapPopup"><span>Смотреть на&nbsp;карте</span></div>
                </p>
            </div>
        </div>
    </div>
    <div class="contacts-item">
		<? $img = CFile::ResizeImageGet($arResult["DISPLAY_PROPERTIES"]["WORKING_HOURS_PICTURE"]["FILE_VALUE"]["ID"], array('width'=>25, 'height' => 25),BX_RESIZE_IMAGE_EXACT )?>
        <div class="contacts-item-pic"><img src="<?=$img["src"];?>"></div>
        <div class="contacts-item-descr">
			<?foreach ($arResult["PROPERTIES"]["WORKING_HOURS"]["VALUE"] as $key => $arItem):?>
                <div class="contacts-sub-item">
                    <div class="contacts-time">
                        <p><?=$arItem?></p>
                    </div>
                    <div class="contacts-sub-ttl">
                        <p><?=$arResult["PROPERTIES"]["WORKING_HOURS"]["DESCRIPTION"][$key]?></p>
                    </div>
                </div>
			<?endforeach;?>
        </div>
    </div>
    <div class="soclinks-wrapper">
        <div class="soclinks-ttl">
            <p>Connect with us</p>
        </div>
        <div class="soclinks-content">
            <div class="soclinks">
                <a class="soclink soclink-fb" href="<?=$arResult["PROPERTIES"]["FACEBOOK_LINK"]["VALUE"]?>"></a>
                <a class="soclink soclink-instagram" href="<?=$arResult["PROPERTIES"]["INSTAGRAM_LINK"]["VALUE"]?>"></a>
            </div>
        </div>
    </div>
</div>
