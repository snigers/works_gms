<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();?>
<?$APPLICATION->IncludeComponent(
	"gms4you:seo",
	"",
	Array(
		"IBLOCK_ID"=>36
	)
);?>
 <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
	
				<?$APPLICATION->IncludeComponent(
					"bitrix:news.detail",
					"FOOTER_detail",
					Array(
						"ACTIVE_DATE_FORMAT" => "d.m.Y",
						"ADD_ELEMENT_CHAIN" => "N",
						"ADD_SECTIONS_CHAIN" => "N",
						"AJAX_MODE" => "N",
						"AJAX_OPTION_ADDITIONAL" => "",
						"AJAX_OPTION_HISTORY" => "N",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_STYLE" => "N",
						"BROWSER_TITLE" => "-",
						"CACHE_GROUPS" => "N",
						"CACHE_TIME" => "36000000",
						"CACHE_TYPE" => "A",
						"CHECK_DATES" => "Y",
						"DETAIL_URL" => "",
						"DISPLAY_BOTTOM_PAGER" => "N",
						"DISPLAY_DATE" => "N",
						"DISPLAY_NAME" => "Y",
						"DISPLAY_PICTURE" => "Y",
						"DISPLAY_PREVIEW_TEXT" => "Y",
						"DISPLAY_TOP_PAGER" => "N",
						"ELEMENT_CODE" => "",
						"ELEMENT_ID" => "156",
						"FIELD_CODE" => array(0=>"",1=>"",),
						"IBLOCK_ID" => "32",
						"IBLOCK_TYPE" => "main",
						"IBLOCK_URL" => "",
						"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
						"MESSAGE_404" => "",
						"META_DESCRIPTION" => "-",
						"META_KEYWORDS" => "-",
						"PAGER_BASE_LINK_ENABLE" => "N",
						"PAGER_SHOW_ALL" => "N",
						"PAGER_TEMPLATE" => ".default",
						"PAGER_TITLE" => "Страница",
						"PROPERTY_CODE" => array(0=>"CONNECT_FB",1=>"CONNECT_INSTAGRAM",2=>"CONNECT_WITH_US",3=>"COPYRIGHT",4=>"DEVELOPER",5=>"LICENSED",6=>"LINK_PRIVACY",7=>"LINK_DEVELOPER",8=>"REGION_TITLE",9=>"SHARE_WITH_US",10=>"TITLE_PRIVACY",11=>"TITLE_DEVELOPER",12=>"TITLE_LICENSED",13=>"",),
						"SET_BROWSER_TITLE" => "N",
						"SET_CANONICAL_URL" => "N",
						"SET_LAST_MODIFIED" => "N",
						"SET_META_DESCRIPTION" => "N",
						"SET_META_KEYWORDS" => "N",
						"SET_STATUS_404" => "N",
						"SET_TITLE" => "N",
						"SHOW_404" => "N",
						"STRICT_SECTION_CHECK" => "N",
						"USE_PERMISSIONS" => "N",
						"USE_SHARE" => "N"
					),
					false,
					array('HIDE_ICONS' => "Y")
				);?>
            </div>
          </div>
        </div>
      </footer>
      <div class="modal fade form-modal quote-modal" id="quoteModal" tabindex="-1">
          <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "reservation_from_popup", Array(
              "CACHE_TIME" => "3600",	// Время кеширования (сек.)
              "CACHE_TYPE" => "A",	// Тип кеширования
              "CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
              "CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
              "EDIT_URL" => "",	// Страница редактирования результата
              "IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
              "LIST_URL" => "",	// Страница со списком результатов
              "SEF_MODE" => "N",	// Включить поддержку ЧПУ
              "SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
              "USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
              "WEB_FORM_ID" => "4",	// ID веб-формы
              "COMPONENT_TEMPLATE" => ".default"
            ),
              false
          );?>
      </div>
      <div class="modal fade form-modal callback-modal" id="callbackModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2">Заказать звонок</div>
            </div>
            <div class="modal-body">
              <p>Оставьте свои данные и&nbsp;наш специалист свяжется с&nbsp;вами в&nbsp;течение 15&nbsp;минут</p>
              <div class="modal-form callback-form">
                <form>
                  <div class="form-group">
                    <label class="placeholder" for="callback_name">Ваше имя</label>
                    <input type="text" name="callback_name" id="callback_name" required>
                  </div>
                  <div class="form-group">
                    <label class="placeholder" for="callback_phone">+7 (___) ___-__-__</label>
                    <input class="input-phone" type="text" name="callback_phone" id="callback_phone" required>
                  </div>
                  <div class="form-footer">
                    <div class="row">
                      <div class="col-12 col-md-6">
                        <button class="btn btn-2 btn-small" type="submit"><span>Отправить</span></button>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-agree">
                          <p>Нажимая кнопку «Отправить», Вы даете свое согласие с&nbsp;<a href="#">политикой конфиденциальности</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade client-modal" id="clientModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body"></div>
          </div>
        </div>
      </div>
      <div class="modal fade form-modal success-modal" id="successModal" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header">
              <div class="h2"><span>Ваша заявка успешно принята!</span></div>
            </div>
            <div class="modal-body">
              <div class="text">
                <p>Перезвоним в течение 15 минут</p>
              </div>
              <div class="success-modal-button">
                <button class="btn btn-1" type="button" data-dismiss="modal" aria-label="Close">Закрыть</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="/layout/js/jquery-3.3.1.min.js"></script>
      <script src="/layout/js/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="/layout/js/bootstrap-select.min.js"></script>
      <script src="/layout/js/jquery.validate.min.js"></script>
      <script src="/layout/js/additional-methods.min.js"></script>
      <script src="/layout/js/jquery.maskedinput.min.js"></script>
      <script src="/layout/js/wNumb.min.js"></script>
      <script src="/layout/js/slick.min.js"></script>
      <script src="/layout/js/fancybox/jquery.fancybox.min.js"></script>
      <script src="/layout/js/greensock/TweenMax.min.js"></script>
      <script src="/layout/js/greensock/plugins/CSSRulePlugin.min.js"></script>
      <script src="/layout/js/greensock/plugins/ScrollToPlugin.min.js"></script>
      <script src="/layout/js/iscroll-probe.js"></script>
      <script src="/layout/js/scrollmagic/ScrollMagic.min.js"></script>
      <script src="/layout/js/scrollmagic/plugins/animation.gsap.min.js"></script>
      <script src="/layout/js/bootstrap-fileinput/js/fileinput.min.js"></script>
      <script src="/layout/js/jquery.mousewheel.js"></script>
      <script src="/layout/js/animations.js"></script>
      <script src="/layout/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/layout/js/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1-MV60BdEKMgEVbl59oSl8UIVbscZmx0&callback=initMap" type="text/javascript"></script>
        <script src="/layout/js/geo_dev.js"></script>
      <script src="/layout/js/main.js"></script>
        <script src="/layout/js/dev-main.js"></script>
    </div>
  </body>
</html>