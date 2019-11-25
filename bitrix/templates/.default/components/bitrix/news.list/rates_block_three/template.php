<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>140, 'height' => 220),BX_RESIZE_IMAGE_EXACT )?>
    <div class="col-12 col-xl-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="deal-tmb">
            <div class="deal-tmb-pic"><img src="<?=$img["src"];?>"></div>
            <div class="deal-tmb-descr">
                <div class="deal-tmb-descr-top">
                    <div class="h3"><?=$arItem["NAME"]?></div>
                    <table class="deal-prices">
                        <tr>
                            <td class="name"><?=$arItem["PROPERTIES"]["MON_THU"]["NAME"]?>:</td>
                            <td class="val">$ <?=$arItem["PROPERTIES"]["MON_THU"]["VALUE"]?></td>
                        </tr>
                        <tr>
                            <td class="name"><?=$arItem["PROPERTIES"]["FRI_SUN"]["NAME"]?>:</td>
                            <td class="val">$ <?=$arItem["PROPERTIES"]["FRI_SUN"]["VALUE"]?></td>
                        </tr>
                    </table>
                </div>
                <div class="deal-tmb-descr-bottom">
                    <div class="deal-tmb-button"><a class="btn btn-3" href="<?=$arItem["PROPERTIES"]["BUTTON_LINK"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["BUTTON_TITLE"]["VALUE"]?></a></div>
                </div>
            </div>
        </div>
    </div>
    
    
<?endforeach;?>