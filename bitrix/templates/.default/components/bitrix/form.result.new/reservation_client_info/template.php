<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_HEADER"]?>

    <div class="h4">Client info</div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="reservation_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                <input type="text" name="form_text_59" id="reservation_name" placeholder="your name" required>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="reservation_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                <input class="input-phone" type="text" name="form_text_60" id="reservation_phone" placeholder="(000) 000-0000" required>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="reservation_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                <input type="email" name="form_text_61" id="reservation_email" placeholder="your mail" required>
            </div>
        </div>
    </div>
    <div class="h4">Project info</div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="form-group">
                <label for="reservation_size"><?=$arResult["QUESTIONS"]["SIZE_OF_PROJECT"]["CAPTION"]?></label>
                <select name="form_dropdown_SIZE_OF_PROJECT" id="reservation_size" title="Select" required>
					<?foreach ($arResult["QUESTIONS"]["SIZE_OF_PROJECT"]["STRUCTURE"] as $arItem):?>
                        <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
					<?endforeach;?>
                </select>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="form-group">
                <label for="reservation_date"><?=$arResult["QUESTIONS"]["DATE"]["CAPTION"]?></label>
                <input class="input-date" type="text" name="form_text_68" id="reservation_date" placeholder="mm/dd/yy" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="sub-form">
                <div class="h4">Address from</div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="reservation_from_address"><?=$arResult["QUESTIONS"]["FROM_ZIP_TO_ADDRESS"]["CAPTION"]?></label>
                            <input type="text" name="form_text_69" id="reservation_from_address" placeholder="ZIP or address" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="reservation_from_type"><?=$arResult["QUESTIONS"]["FROM_TYPE"]["CAPTION"]?></label>
                            <select name="form_dropdown_FROM_TYPE" id="reservation_from_type" title="Select" required>
								<?foreach ($arResult["QUESTIONS"]["FROM_TYPE"]["STRUCTURE"] as $arItem):?>
                                    <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
								<?endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="reservation_from_add"><?=$arResult["QUESTIONS"]["FROM_ADDITIONAL_QUESTION"]["CAPTION"]?></label>
                            <select name="form_dropdown_FROM_ADDITIONAL_QUESTION" id="reservation_from_add" title="Select" required>
								<?foreach ($arResult["QUESTIONS"]["FROM_ADDITIONAL_QUESTION"]["STRUCTURE"] as $arItem):?>
                                    <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
								<?endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <div class="sub-form sub-form-second">
                <div class="h4">Address to</div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="reservation_to_address"><?=$arResult["QUESTIONS"]["TO_ZIP_TO_ADDRESS"]["CAPTION"]?></label>
                            <input type="text" name="form_text_82" id="reservation_to_address" placeholder="ZIP or address" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="reservation_to_type"><?=$arResult["QUESTIONS"]["TO_TYPE"]["CAPTION"]?></label>
                            <select name="form_dropdown_TO_TYPE" id="reservation_to_type" title="Select" required>
								<?foreach ($arResult["QUESTIONS"]["TO_TYPE"]["STRUCTURE"] as $arItem):?>
                                    <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
								<?endforeach;?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-group">
                            <label for="reservation_to_add"><?=$arResult["QUESTIONS"]["TO_ADDITIONAL_QUESTION"]["CAPTION"]?></label>
                            <select name="form_dropdown_TO_ADDITIONAL_QUESTION" id="reservation_to_add" title="Select" required>
								<?foreach ($arResult["QUESTIONS"]["TO_ADDITIONAL_QUESTION"]["STRUCTURE"] as $arItem):?>
                                    <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
								<?endforeach;?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-section-group">
        <div class="form-section-alt">
            <div class="form-section-name">
                <div class="h5"><?=$arResult["QUESTIONS"]["HELP_WITH_PACKING_BOXES"]["CAPTION"]?></div>
            </div>
            <div class="form-section-field">
                <div class="form-radios-alt">
                    <?foreach ($arResult["QUESTIONS"]["HELP_WITH_PACKING_BOXES"]["STRUCTURE"] as $key => $arItem):?>
                        <div class="form-radio">
                            <input type="radio" name="form_radio_HELP_WITH_PACKING_BOXES" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                            <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
        </div>
        <div class="form-section-alt">
            <div class="form-section-name">
                <div class="h5"><?=$arResult["QUESTIONS"]["STORAGE"]["CAPTION"]?></div>
            </div>
            <div class="form-section-field">
                <div class="form-radios-alt">
					<?foreach ($arResult["QUESTIONS"]["STORAGE"]["STRUCTURE"] as $key => $arItem):?>
                        <div class="form-radio">
                            <input type="radio" name="form_radio_STORAGE" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                            <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                        </div>
					<?endforeach;?>
                </div>
            </div>
        </div>
        <div class="form-section-alt">
            <div class="form-section-name">
                <div class="h5"><?=$arResult["QUESTIONS"]["HELP_WITH_UNWANTED"]["CAPTION"]?></div>
            </div>
            <div class="form-section-field">
                <div class="form-radios-alt">
					<?foreach ($arResult["QUESTIONS"]["HELP_WITH_UNWANTED"]["STRUCTURE"] as $key => $arItem):?>
                        <div class="form-radio">
                            <input type="radio" name="form_radio_HELP_WITH_UNWANTED" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                            <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                        </div>
					<?endforeach;?>
                </div>
            </div>
        </div>
        <div class="form-section-alt">
            <div class="form-section-name">
                <div class="h5"><?=$arResult["QUESTIONS"]["DOES_YOUR_MOVE"]["CAPTION"]?></div>
                <p>Such as piano, pool table, gym equipment, commercial grade kitchen equipment, hot tub and etc.</p>
            </div>
            <div class="form-section-field">
                <div class="form-radios-alt">
					<?foreach ($arResult["QUESTIONS"]["DOES_YOUR_MOVE"]["STRUCTURE"] as $key => $arItem):?>
                        <div class="form-radio">
                            <input type="radio" name="form_radio_DOES_YOUR_MOVE" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                            <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                        </div>
					<?endforeach;?>
                </div>
            </div>
        </div>
        <div class="form-section-alt form-section-alt-alt">
            <div class="h5"><?=$arResult["QUESTIONS"]["HOW_DID_YOU_HEAR"]["CAPTION"]?></div>
            <div class="form-radios form-radios-inline">
				<?foreach ($arResult["QUESTIONS"]["HOW_DID_YOU_HEAR"]["STRUCTURE"] as $key => $arItem):?>
                    <div class="form-radio">
                        <input type="radio" name="form_radio_HOW_DID_YOU_HEAR" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                        <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                    </div>
				<?endforeach;?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="reservation_message"><?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?></label>
                <textarea class="textarea-autogrow" name="form_text_113" id="reservation_message" placeholder="Your message" rows="1"></textarea>
            </div>
        </div>
    </div>
    <div class="form-footer">
        <div class="row">
            <div class="col-12 col-md-4">
                <input type="hidden" name="form_hidden_114" value="<?=$APPLICATION->GetCurPage();?>" size="0">
                <input type="hidden" name="web_form_apply" value="Y">
                <input class="btn btn-2" type="submit" id="web_form_apply" name="web_form_apply" value="Submit">
            </div>
        </div>
    </div>

<?=$arResult["FORM_FOOTER"]?>