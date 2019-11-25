<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach ($arResult["DISPLAY_PROPERTIES"]["GALLERY_PHOTO"]["FILE_VALUE"] as $arPhoto):?>
    <div class="col-6 col-md-4">
        <a class="fancybox" href="<?=$arPhoto["SRC"]?>" data-fancybox="main-gal">
            <img src="<?=$arPhoto["SRC"]?>">
        </a>
    </div>
<?endforeach;?>
