<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>263, 'height' => 209),BX_RESIZE_IMAGE_EXACT )?>
    <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="benefit-tmb">
            <div class="benefit-tmb-pic"><img src="<?=$img["src"];?>"></div>
            <div class="benefit-tmb-descr">
                <div class="h3"><?=$arItem["NAME"]?></div>
				<?=$arItem["~PREVIEW_TEXT"]?>
            </div>
        </div>
    </div>
<?endforeach;?>