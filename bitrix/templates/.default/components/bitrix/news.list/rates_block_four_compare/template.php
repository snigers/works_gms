<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//pr($arResult["ITEMS"]);
?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="compare-<?= ($key%2 != 0 || $arItem["PROPERTIES"]["LOGIC_GMC"]["VALUE"] == "Y") ? "r" : "l"?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="compare-item compare-item-<?= ($key%2 != 0 || $arItem["PROPERTIES"]["LOGIC_GMC"]["VALUE"] == "Y") ? "pros" : "cons"?>">
            <div class="compare-item-body">
                <div class="h3"><?=$arItem["~NAME"]?></div>
                <ul class="compare-list">
                    <?foreach ($arItem["PROPERTIES"]["COMPARE_LIST"]["VALUE"] as $arProp):?>
                        <li><?=$arProp?></li>
                    <?endforeach;?>
                </ul>
            </div>
            <div class="compare-item-footer">
                <div class="compare-num"><span><?=$arItem["PROPERTIES"]["PERCENT"]["VALUE"]?>%</span></div>
                <div class="compare-item-text">
                    <p><?=$arItem["PROPERTIES"]["TOTAL"]["VALUE"]?></p>
                </div>
            </div>
        </div>
    </div>
    <?if ($key%2 == 0 && count($arResult["ITEMS"]) > 1):?>
        <div class="compare-m">
            <div class="cont">vs</div>
        </div>
    <?endif;?>
<?endforeach;?>