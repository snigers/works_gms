<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?
//pr($arResult);
?>
<?=$arResult["FORM_HEADER"]?>

        <div class="form-section">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="h4">Client info</div>
                    <div class="form-group">
                        <label for="est_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                        <input type="text" name="form_text_115" id="est_name" placeholder="your name" required>
                    </div>
                    <div class="form-group">
                        <label for="est_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                        <input class="input-phone" type="text" name="form_text_116" id="est_phone" placeholder="(000) 000-0000" required>
                    </div>
                    <div class="form-group">
                        <label for="est_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                        <input type="text" name="form_text_117" id="est_email" placeholder="your mail" required>
                    </div>
                    <div class="form-group">
                        <div class="form-file">
                            <input type="file" name="form_file_118" id="est_file" size="0" placeholder="File not selected">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="h4">Move details</div>
                    <div class="form-group">
                        <label for="est_date"><?=$arResult["QUESTIONS"]["DATE"]["CAPTION"]?></label>
                        <input class="input-date" type="text" name="form_text_119" id="est_date" placeholder="mm/dd/yy" required>
                    </div>
                    <div class="form-group">
                        <label for="est_from"><?=$arResult["QUESTIONS"]["FROM"]["CAPTION"]?></label>
                        <input type="text" name="form_text_120" id="est_from" placeholder="Zip + address" required>
                    </div>
                    <div class="form-group">
                        <label for="est_to"><?=$arResult["QUESTIONS"]["TO"]["CAPTION"]?></label>
                        <input type="text" name="form_text_121" id="est_to" placeholder="Zip + address" required>
                    </div>
                    <div class="form-group">
                        <label for="est_box"><?=$arResult["QUESTIONS"]["BOX_MY_STAFF_UP"]["CAPTION"]?></label>
                        <select name="form_dropdown_BOX_MY_STAFF_UP" id="est_box" title="Select" required>
							<?foreach ($arResult["QUESTIONS"]["BOX_MY_STAFF_UP"]["STRUCTURE"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
							<?endforeach;?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="h4">Object info</div>
                    <div class="form-group">
                        <label for="est_type"><?=$arResult["QUESTIONS"]["TYPE"]["CAPTION"]?></label>
                        <select name="form_dropdown_TYPE" id="est_type" title="Select" required>
							<?foreach ($arResult["QUESTIONS"]["TYPE"]["STRUCTURE"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
							<?endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="est_kit"><?=$arResult["QUESTIONS"]["BOX_MY_STAFF_UP_OBJECT"]["CAPTION"]?></label>
                        <select name="form_dropdown_BOX_MY_STAFF_UP_OBJECT" id="est_kit" title="Select" required>
							<?foreach ($arResult["QUESTIONS"]["BOX_MY_STAFF_UP_OBJECT"]["STRUCTURE"] as $arItem):?>
                                <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
							<?endforeach;?>
                        </select>
                    </div>
                    <div class="h4">Delivery speed</div>
                    <div class="form-group">
                        <div class="form-radios">
							<?foreach ($arResult["QUESTIONS"]["DELIVERY_SPEED"]["STRUCTURE"] as $key => $arItem):?>
                                <div class="form-radio">
                                    <input type="radio" name="form_radio_DELIVERY_SPEED" id="<?=$arItem["ID"]?>" value="<?=$arItem["ID"]?>" <?=($key === 0) ? "checked" : ""?>>
                                    <label for="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></label>
                                </div>
							<?endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="est_message"><?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?></label>
                        <textarea class="textarea-autogrow" name="form_text_142" id="est_message" placeholder="Your message" rows="1"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <div class="row">
                <div class="col-12 col-md-4">
                    <input type="hidden" name="form_hidden_143" value="<?=$APPLICATION->GetCurPage();?>" size="0">
                    <input type="hidden" name="web_form_apply" value="Y">
                    <input class="btn btn-2"  type="submit" name="web_form_apply" value="Submit">
                </div>
            </div>
        </div>
<?=$arResult["FORM_FOOTER"]?>