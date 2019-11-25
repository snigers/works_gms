<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>466, 'height' => 400),BX_RESIZE_IMAGE_EXACT )?>
    <div class="col-6 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <a class="fancybox" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" data-fancybox="main-gal">
            <img src="<?=$img["src"];?>">
        </a>
    </div>
<?endforeach;?>