<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$count = 0;?>
<?foreach($arResult["ITEMS"] as $key => $arItem):?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    ?>
    <?if (($arParams["ID_DETAIL_ELEMENT"] != $arItem["ID"]) && ($count < 2)):?>
        <?$count++;?>
        <a class="article-tmb" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="article-tmb-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
            <div class="article-tmb-descr">
                <div class="article-tmb-date"><?=substr($arItem["DATE_CREATE"], 0, 10)?></div>
                <div class="h3"><?=$arItem["NAME"]?></div>
                <div class="more-arrow"></div>
            </div>
        </a>
    <?endif;?>
<?endforeach;?>
