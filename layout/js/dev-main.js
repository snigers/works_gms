$(document).ready(function () {
	$("body").on('submit', 'form[name="form1"], form[name="RATES_FORM"], form[name="REVIEWS_FORM"], form[name="CONTACTS_FORM"], form[name="RESERVATION_CLIENT_INFO"]', function (e) {
		var form = $(this);
		var formUrl;
		formUrl = '/ajax/ajax_form.php';

		e.preventDefault();

		var form_value = form.serialize();

		form.find("[type=submit]").prop("disabled", true).addClass("loading");

		$.ajax({
			url: formUrl,
			dataType: 'html',
			type: 'POST',
			data: form_value,
			success: function (html, data) {

				$(form).trigger('reset');
				// Очищаю select от заполненых значений

				form.find("select").val('default').selectpicker("refresh");

				// Устанавливаем начальный слайд
				form.find(".slick-slider").slick("slickGoTo", 0);

				form.find("[type=submit]").prop("disabled", false).removeClass("loading");

				formSuccess(form);

			}
		});
	});

	$(document).ready(function () {
		$("body").on('submit', 'form[name="RATES_RECEIVE_FORM"]', function (e) {
			var form = $(this);
			var formUrl;
			formUrl = '/ajax/ajax_form.php';

			e.preventDefault();

			var form_value = new FormData(form.get(0));

			form.find("[type=submit]").prop("disabled", true).addClass("loading");

			$.ajax({
				url: formUrl,
				type: 'POST',
				contentType: false, // важно - убираем форматирование данных по умолчанию
				processData: false, // важно - убираем преобразование строк по умолчанию
				data: form_value,
				success: function (json) {

					$(form).trigger('reset');
					// Очищаю select от заполненых значений

					form.find("select").val('default').selectpicker("refresh");

					// Устанавливаем начальный слайд
					form.find(".slick-slider").slick("slickGoTo", 0);

					form.find("[type=submit]").prop("disabled", false).removeClass("loading");

					formSuccess(form);

				}
			});
		});
	});

	// Popup form
	$("body").on('submit', 'form[name="RESERVATION_FORM_POPUP"]', function (e) {
		var form = $(this);
		var formUrl;
		formUrl = '/ajax/ajax_form.php';

		e.preventDefault();

		form.find("[type=submit]").prop("disabled", true).addClass("loading");

		var form_value = form.serialize();
		$.ajax({
			url: formUrl,
			dataType: 'html',
			type: 'POST',
			data: form_value,
			success: function (html, data) {
				$(form).trigger('reset');

				form.find("select").val('default').selectpicker("refresh");

				form.find("[type=submit]").prop("disabled", false).removeClass("loading");

				formSuccess(form);

			}
		});
	});

	$("body").on("click", ".show-more-wrapper", function () {

		var targetContainer = $('.news-list-next-page'),
			url =  $('.show-more-wrapper').attr('data-url');

		if (url !== undefined) {
			$.ajax({
				type: 'GET',
				url: url,
				dataType: 'html',
				success: function(data){

					//  Удаляем старую навигацию
					$('.show-more-wrapper').remove();

					var elements = $(data).find('.news-list-next-page'),  //  Ищем элементы
						pagination = $(data).find('.show-more-wrapper');//  Ищем навигацию

					targetContainer.append(elements);   //  Добавляем посты в конец контейнера
					targetContainer.append(pagination); //  добавляем навигацию следом

				}
			})
		}
	});


	$(".tags-list > a").click(function(){
		this.href = "/blog/?tags=" + this.innerText;
	});
});