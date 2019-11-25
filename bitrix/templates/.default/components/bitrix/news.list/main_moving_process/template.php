<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <div class="process-descr">
                    <div class="process-num">Step <?=$key + 1?></div>
                    <div class="h3"><?=$arItem["NAME"]?></div>
                    <?=$arItem["~PREVIEW_TEXT"]?>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
				<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>490, 'height' => 350),BX_RESIZE_IMAGE_EXACT )?>
                <div class="process-pic"><img src="<?=$img["src"];?>"></div>
            </div>
        </div>
    </div>
<?endforeach;?>