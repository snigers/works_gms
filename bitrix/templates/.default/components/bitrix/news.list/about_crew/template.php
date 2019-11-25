<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="crew-tabs-wrapper">
    <ul class="nav crew-tabs" role="tablist">
		<?foreach($arResult["ITEMS"] as $key => $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
			<?php if ($key === 0): ?>
                <li class="nav-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a class="nav-link active" data-toggle="tab" href="#crew<?= $arItem["NAME"] ?>" role="tab"
                       aria-controls="crew<?= $arItem["NAME"] ?>" aria-selected="true"
                       id="crew<?= $arItem["NAME"] ?>-tab">
                        <span><?= $arItem["NAME"] ?></span>
                    </a>
                </li>
            <?else:?>
                <li class="nav-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                    <a class="nav-link" data-toggle="tab" href="#crew<?= $arItem["NAME"] ?>" role="tab" aria-controls="crew<?= $arItem["NAME"] ?>" aria-selected="false" id="crew<?= $arItem["NAME"] ?>-tab">
                        <span><?= $arItem["NAME"] ?></span>
                    </a>
                </li>
			<?php endif ?>
		<?endforeach;?>
    </ul>
</div>

<div class="tab-content crew-tab-content">
    <?foreach($arResult["ITEMS"] as $key => $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
		<?if (count($arItem["DISPLAY_PROPERTIES"]["PHOTO"]["VALUE"]) > 0): ?>
            <div class="tab-pane fade <?=($key ===0)? "show active" : ""?>" role="tabpanel" aria-labelledby="crew<?= $arItem["NAME"] ?>-tab"
                 id="crew<?= $arItem["NAME"] ?>">
                <div class="crew-slider-wrapper">
                    <div class="photo-gallery-slider">
						<? foreach ($arItem["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"] as $arPhoto): ?>
                            <div class="slide">
                                <div class="slide-pic"><img data-lazy="<?= $arPhoto["SRC"] ?>"></div>
                            </div>
						<? endforeach; ?>
                    </div>
                </div>
            </div>
        <?else:?>
            <div class="tab-pane fade <?=($key ===0)? "show active" : ""?>" role="tabpanel" aria-labelledby="crew<?= $arItem["NAME"] ?>-tab" id="crew<?= $arItem["NAME"] ?>">
                <p><?= $arItem["NAME"] ?></p>
            </div>
		<?php endif ?>
    <?endforeach;?>
</div>