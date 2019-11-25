<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<div class="reviews-header-l"><a name="reviews"></a>
    <div class="h2">
		<?=$arResult["NAME"]?>
    </div>
    <div class="h3">
		<?=$arResult["PROPERTIES"]["SUBTITLE"]["VALUE"]?>
    </div>
</div>
<? foreach ($arResult["PROPERTIES"]["PICTURE"]["VALUE"] as $arProp):?>
    <div class="reviews-header-m">
        <img src="<?=CFile::GetPath($arProp)?>">
    </div>
<?endforeach;?>