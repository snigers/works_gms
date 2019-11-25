<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>


<div class="popup-dialog">
    <div class="popup-content">
        <div class="close"></div>
        <div class="top-form">
            <div class="h3"><?=$arResult["FORM_DESCRIPTION"]?></div>
            <?=$arResult["FORM_HEADER"]?>
                <div class="top-form-content">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="quote_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                                <input type="text" name="form_text_17" id="quote_name" placeholder="your name" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="quote_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                                <input class="input-phone" type="text" name="form_text_18" id="quote_phone" placeholder="(000) 000-0000" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="quote_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                                <input type="email" name="form_text_19" id="quote_email" placeholder="your mail" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer">
                        <input type="hidden" name="form_hidden_20" value="<?=$APPLICATION->GetCurPage();?>">
                        <input type="hidden" name="web_form_apply" value="Y">
                        <input class="btn btn-2" type="submit" id="web_form_apply" name="web_form_apply" value="Request a quote now">
                    </div>
                </div>
            <?=$arResult["FORM_FOOTER"]?>
            <div class="top-form-bottom">
                <div class="top-form-policy"><a href="#">Privacy Policy</a></div>
            </div>
        </div>
    </div>
</div>


