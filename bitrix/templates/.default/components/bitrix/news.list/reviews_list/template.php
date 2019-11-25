<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();$this->setFrameMode(true);?>

<div class="news-list-next-page">
    <div class="reviews-list">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
          <div class="review-tmb" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
            <div class="review-tmb-author">
              <div class="review-tmb-author-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
              <div class="review-tmb-author-descr">
                <div class="name">
                  <p><?=$arItem["NAME"]?></p>
                </div>
                <div class="post">
                  <p><?=$arItem["PROPERTIES"]["REGION"]["VALUE"]?></p>
                </div>
              </div>
            </div>
            <div class="review-tmb-descr">
              <div class="rating-yelp">
                <div class="cont">
                    <?if ($arItem["PROPERTIES"]["STARS"]["VALUE"] !== 0):?>
                        <?for ($i = 1; $i <= $arItem["PROPERTIES"]["STARS"]["VALUE"]; $i++):?>
                            <div class="star"></div>
                        <?endfor;?>
                    <?endif;?>
                </div>
              </div>
              <div class="review-tmb-text">
				  <?=$arItem["~PREVIEW_TEXT"]?>
                <div class="expandable-wrapper">
                  <div class="expandable-content">
					  <?=$arItem["~DETAIL_TEXT"]?>
                  </div>
                  <div class="expandable-trigger-wrapper">
                    <div class="expandable-trigger"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?endforeach;?>
        <?if($arResult["NAV_RESULT"]->NavPageCount > 1):?>
            <?if ($arResult["NAV_RESULT"]->NavPageNomer+1 <= $arResult["NAV_RESULT"]->nEndPage):?>
                <?
                $plus = $arResult["NAV_RESULT"]->NavPageNomer+1;
                $url = "/reviews/" . "?PAGEN_".$arResult["NAV_RESULT"]->NavNum."=".$plus;
                ?>
                <div class="show-more-wrapper" data-url="<?=$url?>">
                    <a class="btn btn-3 btn-show-more" href="" style="pointer-events: none;">
                        <span>Show more reviews</span>
                    </a>
                </div>
            <?else:?>
            
            <?endif?>
        <?endif?>
    </div>
</div>