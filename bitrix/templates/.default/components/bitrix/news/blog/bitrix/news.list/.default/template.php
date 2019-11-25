<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="page-content page-content-alt news-list-next-page">
    <div class="blog-controls-mob">
        <div class="inner"></div>
    </div>
    <div class="blog-list">

        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a class="blog-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="blog-tmb-descr">
                    <div class="blog-tmb-date">
                    <p><?=substr($arItem["DATE_CREATE"], 0, 10)?></p>
                </div>
                <div class="h3"><?=$arItem["NAME"]?></div>
                    <p><?=$arItem["PREVIEW_TEXT"]?></p>
                </div>
                <div class="blog-tmb-pic">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                </div>
            </a>
         
        <?endforeach;?>
		<?if($arResult["NAV_RESULT"]->NavPageCount > 1):?>
			<?if ($arResult["NAV_RESULT"]->NavPageNomer+1 <= $arResult["NAV_RESULT"]->nEndPage):?>
				<?
				$plus = $arResult["NAV_RESULT"]->NavPageNomer+1;
				$url = "/blog/" . "?PAGEN_".$arResult["NAV_RESULT"]->NavNum."=".$plus;
				?>
                <div class="show-more-wrapper" data-url="<?=$url?>">
                    <a class="btn btn-3 btn-show-more" href="" style="pointer-events: none;">
                        <span>Show more</span>
                    </a>
                </div>
			<?else:?>
		
			<?endif?>
		<?endif?>
    </div>
</div>