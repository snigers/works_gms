<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

    <div class="form-placeholder-mob d-block d-md-none">
        <div class="form-placeholder-mob-inner">
            <div class="h3">Request a&nbsp;Quote Now</div>
            <div class="btn btn-2 open-popup" data-popup="#topFormPopup"><span>Get started</span></div>
        </div>
    </div>
    <div class="popup popup-mob form-popup" id="topFormPopup">
        <div class="popup-dialog">
            <div class="popup-content">
                <div class="close"></div>
                <div class="top-form top-form-alt">
                    <div class="h3"><?=$arResult["FORM_DESCRIPTION"]?></div>
					<?=$arResult["FORM_HEADER"]?>
                        <div class="top-form-content">
                            <div class="top-form-nav-wrapper">
                                <ul class="top-form-nav">
                                    <li class="active">Step 1</li>
                                    <li>Step 2</li>
                                </ul>
                            </div>
                            <div class="top-form-slider">
                                <div class="slide">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_from"><?=$arResult["QUESTIONS"]["FROM"]["CAPTION"]?></label>
                                                <input type="text" name="form_text_21" id="quote_from" placeholder="City or zip code" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_to"><?=$arResult["QUESTIONS"]["TO"]["CAPTION"]?></label>
                                                <input type="text" name="form_text_22" id="quote_to" placeholder="City or zip code" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_size"><?=$arResult["QUESTIONS"]["HOME_SIZE"]["CAPTION"]?></label>
                                                <select name="form_dropdown_HOME_SIZE" id="quote_size" title="--" required>
													<?foreach ($arResult["QUESTIONS"]["HOME_SIZE"]["STRUCTURE"] as $arItem):?>
                                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
													<?endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_date"><?=$arResult["QUESTIONS"]["DATE"]["CAPTION"]?></label>
                                                <input class="input-date" type="text" name="form_text_29" id="quote_date" placeholder="mm/dd/yy" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <div class="btn btn-2 btn-fwd">Get Started</div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                                                <input type="text" name="form_text_30" id="quote_name" placeholder="your name" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_how"><?=$arResult["QUESTIONS"]["FEEDBACK"]["CAPTION"]?></label>
                                                <select name="form_dropdown_FEEDBACK" id="quote_how" title="Select" required>
													<?foreach ($arResult["QUESTIONS"]["FEEDBACK"]["STRUCTURE"] as $arItem):?>
                                                        <option value="<?=$arItem["ID"]?>"><?=$arItem["MESSAGE"]?></option>
													<?endforeach;?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                                                <input class="input-phone" type="text" name="form_text_34" id="quote_phone" placeholder="(000) 000-0000" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-12">
                                            <div class="form-group">
                                                <label for="quote_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                                                <input type="email" name="form_text_35" id="quote_email" placeholder="your mail" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-footer">
                                        <input type="hidden" name="form_hidden_36" value="<?=$APPLICATION->GetCurPage();?>" size="0">
                                        <input type="hidden" name="web_form_apply" value="Y">
                                        <input class="btn btn-2" type="submit" id="web_form_apply" name="web_form_apply" value="Get a Quote Now">
                                    </div>
                                </div>
                            </div>
                        </div>
					<?=$arResult["FORM_FOOTER"]?>
                    <div class="top-form-bottom">
                        <div class="top-form-policy"><a href="#">Privacy Policy</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



