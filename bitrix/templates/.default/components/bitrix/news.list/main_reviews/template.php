<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>

    <?if ($arItem["PROPERTIES"]["TO_MAIN_PAGE"]["VALUE"] == "Y"):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
        <div class="slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="review-tmb test">
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
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
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
    <?endif;?>
<?endforeach;?>