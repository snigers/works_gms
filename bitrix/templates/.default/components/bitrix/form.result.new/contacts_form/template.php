<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>


<?=$arResult["FORM_HEADER"]?>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="help_name"><?=$arResult["QUESTIONS"]["NAME"]["CAPTION"]?></label>
                <input type="text" name="form_text_54" id="help_name" placeholder="your name" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-5">
            <div class="form-group">
                <label for="help_phone"><?=$arResult["QUESTIONS"]["PHONE"]["CAPTION"]?></label>
                <input class="input-phone" type="text" name="form_text_55" id="help_phone" placeholder="your phone number" required>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-7">
            <div class="form-group">
                <label for="help_email"><?=$arResult["QUESTIONS"]["EMAIL"]["CAPTION"]?></label>
                <input type="email" name="form_text_56" id="help_email" placeholder="your email" required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="help_message"><?=$arResult["QUESTIONS"]["MESSAGE"]["CAPTION"]?></label>
                <textarea class="textarea-autogrow" name="form_text_57" id="help_message" placeholder="your message" rows="1" required></textarea>
            </div>
        </div>
    </div>
    <div class="form-footer">
        <div class="row">
            <input type="hidden" name="form_hidden_58" value="<?=$APPLICATION->GetCurPage();?>">
            <div class="col-12 col-md-5">
                <input type="hidden" name="web_form_apply" value="Y">
                <input class="btn btn-2" type="submit" id="web_form_apply" name="web_form_apply" value="Submit">
            </div>
        </div>
    </div>
<?=$arResult["FORM_FOOTER"]?>
