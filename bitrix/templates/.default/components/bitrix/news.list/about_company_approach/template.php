<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        <div class="why-tmb" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="why-tmb-pic"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
            <div class="why-tmb-descr">
                <p><?=$arItem["NAME"]?></p>
            </div>
        </div>
<?endforeach;?>
