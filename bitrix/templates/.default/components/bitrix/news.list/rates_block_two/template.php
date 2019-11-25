<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


    <div class="d-block d-md-none">
        <ul class="rates-nav">
            <?foreach ($arResult["ITEMS"] as $arItem):?>
                <li <?= ($arItem["PROPERTIES"]["MOVERS"]["VALUE"] == 3) ? 'class="active"' : ""?>>
                    <div class="rates-nav-item">
                        <div class="num"><?=$arItem["PROPERTIES"]["MOVERS"]["VALUE"]?></div>
                        <div class="ttl"><?=$arItem["PROPERTIES"]["MOVERS"]["NAME"]?></div>
                    </div>
                </li>
            <?endforeach;?>
        </ul>
    </div>
    <div class="rates-over-wrapper">
        <div class="row">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-12 col-md-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="rate-tmb">
                        <div class="rate-tmb-inner">
                            <div class="rate-tmb-pic">
								<? $img = CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"]["ID"], array('width'=>292, 'height' => 190),BX_RESIZE_IMAGE_EXACT )?>
                                <div class="rate-img rate-img-normal"><img src="<?=$img["src"];?>"></div>
								<? $img = CFile::ResizeImageGet($arItem["PROPERTIES"]["PICTURE"]["VALUE"], array('width'=>292, 'height' => 190),BX_RESIZE_IMAGE_EXACT )?>
                                <div class="rate-img rate-img-hover"><img src="<?=$img["src"];?>"></div>
                            </div>
                            <div class="rate-tmb-descr">
                                <div class="rate-tmb-header">
                                    <div class="h3"><?=$arItem["NAME"]?></div>
                                    <div class="sub-ttl">
                                        <p><?=$arItem["PROPERTIES"]["MOVERS"]["VALUE"]?> <?=$arItem["PROPERTIES"]["MOVERS"]["NAME"]?> <span class="sep">/</span> <?=$arItem["PROPERTIES"]["TRUCK"]["VALUE"]?> <?=$arItem["PROPERTIES"]["TRUCK"]["NAME"]?></p>
                                    </div>
                                </div>
                                <ul class="rate-list">
                                    <?foreach ($arItem["PROPERTIES"]["LIST_PROPERTIES"]["VALUE"] as $arProp):?>
                                        <li><?=$arProp?></li>
                                    <?endforeach;?>
                                </ul>
                                <div class="rate-tmb-button">
                                    <a class="btn btn-3" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["TITLE_LINK"]["VALUE"]?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            <?endforeach;?>
        </div>
    </div>