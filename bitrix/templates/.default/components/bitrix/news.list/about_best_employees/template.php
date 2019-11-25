<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div class="team-slider-wrapper">
    <div class="team-slider">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="team-tmb">
                    <div class="team-tmb-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
                    <div class="team-tmb-descr">
                        <div class="team-tmb-name">
                            <p><?=$arItem["NAME"]?></p>
                        </div>
                        <div class="team-tmb-post">
                            <p><?=$arItem["PREVIEW_TEXT"]?></p>
                        </div>
                    </div>
                </div>
            </div>

        <?endforeach;?>
    </div>
</div>