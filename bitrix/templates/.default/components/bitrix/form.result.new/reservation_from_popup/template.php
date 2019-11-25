<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<div class="modal-dialog">
    <div class="modal-content">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
        <div class="modal-header">
            <div class="h2"><?=$arResult["FORM_DESCRIPTION"]?></div>
        </div>
        <div class="modal-body">
            <div class="quote-form modal-form" id="quoteModalForm">
                <?=$arResult["FORM_HEADER"]?>
                    <div class="row">
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_from"><?=$arResult["QUESTIONS"]["FROM"]["CAPTION"]?></label>
                                <input type="text" name="form_text_37" id="quote_modal_from" placeholder="City or zip code" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_to"><?=$arResult["QUESTIONS"]["TO"]["CAPTION"]?></label>
                                <input type="text" name="form_text_38" id="quote_modal_to" placeholder="City or zip code" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_size"><?=$arResult["QUESTIONS"]["HOME_SIZE"]["CAPTION"]?></label>
                                <select name="form_dropdown_HOME_SIZE" id="quote_modal_size" title="--" required>
									<?foreach ($arResult["QUESTIONS"]["HOME_SIZE"]["STRUCTURE"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
									<?endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_date"><?=$arResult["QUESTIONS"]["DATE"]["CAPTION"]?></label>
                                <input class="input-date" type="text" name="form_text_45" id="quote_modal_date" placeholder="mm/dd/yy" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                                <input type="text" name="form_text_46" id="quote_modal_name" placeholder="your name" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_how"><?=$arResult["QUESTIONS"]["FEEDBACK"]["CAPTION"]?></label>
                                <select name="form_dropdown_FEEDBACK" id="quote_modal_how" title="Select" required>
									<?foreach ($arResult["QUESTIONS"]["FEEDBACK"]["STRUCTURE"] as $arItem):?>
                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
									<?endforeach;?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                                <input class="input-phone" type="text" name="form_text_50" id="quote_modal_phone" placeholder="(000) 000-0000" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 col-lg-3">
                            <div class="form-group">
                                <label for="quote_modal_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                                <input type="email" name="form_text_51" id="quote_modal_email" placeholder="your mail" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="quote_modal_message"><?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?></label>
                                <textarea class="textarea-autogrow" name="form_text_52" id="quote_modal_message" rows="1" placeholder="your message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <div class="row">
                            <input type="hidden" name="form_hidden_53" value="<?=$APPLICATION->GetCurPage();?>">
                            <div class="col-12 col-md-6">
                                <input type="hidden" name="web_form_apply" value="Y">
                                <input class="btn btn-2" type="submit" id="web_form_apply" name="web_form_apply" value="Get started">
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="top-form-policy"><a href="#">Privacy Policy</a></div>
                            </div>
                        </div>
                    </div>
                <?=$arResult["FORM_FOOTER"]?>
            </div>
        </div>
    </div>
</div>