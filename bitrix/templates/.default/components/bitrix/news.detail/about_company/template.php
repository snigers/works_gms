<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="blockquote-author">
    <div class="blockquote-author-pic"><img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>"></div>
    <div class="blockquote-author-descr">
        <div class="blockquote-author-name">
            <p><?=$arResult["NAME"]?></p>
        </div>
        <div class="blockquote-author-post">
            <p><?=$arResult["PREVIEW_TEXT"]?></p>
        </div>
    </div>
</div>
<div class="blockquote-text">
	<?=$arResult["DETAIL_TEXT"]?>
    <div class="blockquote-sign"><img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"></div>
</div>
