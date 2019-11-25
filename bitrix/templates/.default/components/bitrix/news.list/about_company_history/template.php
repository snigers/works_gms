<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<?php if ($key%2 == 0): ?>
        <div class="article-block" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="article-pic article-pic-r"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
			<?=$arItem["~PREVIEW_TEXT"]?>
        </div>
    <?else:?>
        <div class="article-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="article-pic article-pic-l"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"></div>
			<?=$arItem["~PREVIEW_TEXT"]?>
        </div>
	<?php endif ?>
<?endforeach;?>
