<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="reviews-header-l">
	<? $img = CFile::ResizeImageGet($arResult["PROPERTIES"]["PICTURE_LEFT"]["VALUE"], array('width'=>163, 'height' => 90),BX_RESIZE_IMAGE_EXACT )?>
    <img src="<?=$img["src"];?>">
</div>
<div class="reviews-header-m">
    <div class="h2">
        <?=$arResult["NAME"]?>
    </div>
    <div class="h3">
        <?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?>
    </div>
</div>
<div class="reviews-header-r">
	<? $img = CFile::ResizeImageGet($arResult["PROPERTIES"]["PICTURE_RIGHT"]["VALUE"], array('width'=>163, 'height' => 90),BX_RESIZE_IMAGE_EXACT )?>
    <img src="<?=$img["src"];?>">
</div>
