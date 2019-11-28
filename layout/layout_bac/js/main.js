var is_mobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
  || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cocdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
  is_mobile = true;
}

var isIE9OrBelow = function() {
  return /MSIE\s/.test(navigator.userAgent) && parseFloat(navigator.appVersion.split("MSIE")[1]) < 10;
}

var numFormat = wNumb({
  thousand: ' '
});

$(window).on("scroll touchmove", function () {

  var scrollPos = $(window).scrollTop();

  pageMenu();

  $("a[name]").each(function() {
    if (scrollPos >= $(this).offset().top - 170) {
      $(".page-menu a").removeClass("active")
      $(".page-menu a[href='#"+$(this).attr("name")+"']").addClass("active");
    }
  });



  if (scrollPos > 50) {

    if (!$("header").hasClass("header-fixed")) {

      $("header").addClass("header-fixed");
    }


  } else {

    if ($("header").hasClass("header-fixed")) {

      $("header").removeClass("header-fixed");

    }

  }

  if (scrollPos > 300) {
    $(".up-link").fadeIn(150);
  } else {
    $(".up-link").fadeOut(150);
  }

});

$(window).resize(function () {

  makeUp();

  slickResponsive();

  swapElements();

  $(".slick-slider").slick("setPosition");

});

$(window).on("load", function () {

  makeUp();

});

var baseUrl = ""

$(document).ready(function () {

  swapElements();

  // New **************************************************************************************************

  pageMenu();

  // Rates

  $(".rate-tmb").on("mouseover", function () {

    $(".rate-tmb").not($(this)).removeClass("rate-tmb-alt");
    $(this).addClass("rate-tmb-alt");

  });

  $(".rates-wrapper").on("mouseleave", function () {

    if ($("#mobile-indicator").css("display") != "block") {

      $(".rate-tmb").not(".rate-tmb-middle").removeClass("rate-tmb-alt");
      $(".rate-tmb-middle").addClass("rate-tmb-alt");

    }


  });

  // Rates END

  // Rates mobile

  $(".rates-nav li").click(function () {

    $(".rates-wrapper .row").slick("slickGoTo", $(this).prevAll().length);

  });

  // Rates mobile END

  // Popups

  $("body").on("click", "[data-popup]", function () {

    $($(this).data("popup")).fadeIn(250, function () {

      $(".popup .slick-slider").slick("setPosition");

    });

    $("body").addClass("popup-open");

  });

  $("body").on("click", ".popup", function (e) {

    if (!$(e.target).hasClass("popup-content") && !$(e.target).parents().hasClass("popup-content")) {

      $(this).closest(".popup").fadeOut(250, function () {
        $("body").removeClass("popup-open");
      });

    }

  });

  $("body").on("click", ".popup .close", function (e) {

    $(this).closest(".popup").fadeOut(250, function () {
      $("body").removeClass("popup-open");
    });

  });

  // Popups END

  // Location popup

  $("body").on("click", "[data-location-popup]", function () {

    var targetPopup = $($(this).data("location-popup"));

    $(".location-popup").not(targetPopup).fadeOut(250).removeClass("active");

    targetPopup.fadeIn(250, function () {

      targetPopup.addClass("active");

    });

    $("body").addClass("location-popup-open");

    return false;

  });

  $("body").on("click", function (e) {

    if ($(".location-popup").hasClass("active") && !$(e.target).hasClass("location-popup") && !$(e.target).parents().hasClass("location-popup") && !$(e.target).data("location-popup") && !$(e.target).parents().data("location-popup")) {

      $(".location-popup").fadeOut(250).removeClass("active");
      $("body").removeClass("location-popup-open");

    }

  });

  $("body").on("click", ".location-popup .close", function (e) {

    $(this).closest(".location-popup").fadeOut(250, function () {
      $(this).closest(".location-popup").removeClass("active");
    });

    $("body").removeClass("location-popup-open");

  });

  // Location popup END

  // Top slider

  $(".page-header-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 350,
    //autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    arrows: false,
    swipe: false,
    pauseOnHover: false,
    rows: 0
  });

  // Top slider END

  // Top form

  

  $(".top-form-slider").each(function () {
    
    var topFormSlider = $(this),
        sliderNav = $(this).closest(".top-form-content").find(".top-form-nav");

    topFormSlider.on("init", function () {

      sliderNav.find("li").click(function () {

        var currentFields = topFormSlider.find(".slick-current").find("input, select");

        if (currentFields.valid() || $(this).prevAll().length < topFormSlider.find(".slick-current").data("slick-index")) {
          topFormSlider.slick("slickGoTo", $(this).prevAll().length);
        }

      });

      topFormSlider.find(".btn-fwd").click(function () {

        var currentFields = $(this).closest(".slide").find("input, select");

        if (currentFields.valid()) {
          topFormSlider.slick("slickNext");
        }

      });

    });

    topFormSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

      sliderNav.find("li").removeClass("active");

      sliderNav.find("li").filter(function () {

        return $(this).prevAll().length == nextSlide

      }).addClass("active");


    });

    topFormSlider.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      speed: 350,
      infinite: true,
      arrows: false,
      swipe: false,
      rows: 0
    });
    
  });

  

  // Top form END

  // About map

  $(".about-map-pin").click(function () {

    $(this).find(".gallery a:first-child").click();

  });

  // About map END

  // Contacts map

  function contactsMap() {

    if ($("#contactsMap").length) {

      var image = 'images/map-pin.png';

      center = {
        lat: 34.100163,
        lng: -118.322476
      }

      var mapOptions = {
        center: center,
        zoom: 8,
        scrollwheel:false
      };


      var map = new google.maps.Map(document.getElementById('contactsMap'),
        mapOptions);

      var marker = new google.maps.Marker({
        position: center,
        map: map,
        icon: image
      });

    }

  }

  if ($("#contactsMap").length) {

    google.maps.event.addDomListener(window, 'load', contactsMap);

  }

  // Contacts map END

  // Process slider

  $(".process-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    fade: true,
    speed: 500,
    infinite: false,
    dots: true,
    rows: 0,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          adaptiveHeight: true,
        }
      }
    ]
  });


  // Process slider END

  // Team slider

  $(".team-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    speed: 500,
    infinite: false,
    dots: true,
    rows: 0,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          adaptiveHeight: true,
          dots: true
        }
      }
    ]
  });

  // Team slider END

  // Crew slider

  $(".crew-tabs a").on("shown.bs.tab", function () {

    $(".crew-tab-content .tab-pane.active .photo-gallery-slider").slick("setPosition");

  });

  // Crew slider END

  // Reviews slider

  $(".reviews-slider").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    speed: 500,
    infinite: false,
    dots: false,
    rows: 0,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          adaptiveHeight: true,
          dots: true
        }
      }
    ]
  });

  // Reviews slider END

  // Photo slider

  $(".photo-gallery-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 500,
    fade: true,
    dots: false,
    rows: 0
  });

  // Photo slider END


  // New END **********************************************************************************************


  // FAQ mobile

  $(".faq-select").on("change", function () {

    var faqSelectVal = $(this).val();

    $(".faq-nav-tabs a[id='" + faqSelectVal.replace("#","") + "']").tab("show");

  });

  $(".faq-nav-tabs a").on("shown.bs.tab", function () {

    $(".faq-select").val("#" + $(this).attr("id")).selectpicker('refresh');

  });
  
  // FAQ mobile END


  // Show more

  $("body").on("click", ".show-more", function () {

    var btn = $(this);

    btn.addClass("loading");

    $.ajax({
      url: btn.attr("href"),
      dataType: "html"
    }).done(function (data) {

      btn.before($(data));

      btn.remove();

    });

    return false;

  });

  // Show more END

  $(".modal").on("shown.bs.modal", function () {

    $(".modal.show select").not(".picker__select--month, .picker__select--year, .rates-nav-select").each(function () {
      if ($(this).attr("multiple")) {
        $(this).selectpicker({
          selectAllText: "Выбрать всё",
          deselectAllText: "Снять выбор",
          selectedTextFormat: "count",
          countSelectedText: function(count) {
            return count + " " + declOfNum(count, ['элемент', 'элемента', 'элементов']);
          }
        });
      } else {
        $(this).selectpicker({
          selectAllText: "Выбрать всё",
          deselectAllText: "Снять выбор"
        });
      }
    });

    modalMakeup();

  });

  // Faq

  $(".faq-item-ttl, .faq-item .btn-collapse").click(function () {

    var faqItem = $(this).closest(".faq-item");

    faqItem.children(".faq-item-content").slideToggle(500,function () {

      if (faqItem.hasClass("active")) {

        faqItem.find(".faq-item").removeClass("active");

        faqItem.find(".faq-item-content .faq-item-content").slideUp(500);

      }

      faqItem.toggleClass("active");

    });

  });

  // Faq END

  slickResponsive();

  $(".up-link, .header-logo").click(function () {

    $("html, body").animate({
      scrollTop: 0
    },1000);

  });

  // Anchors

  $(".page-menu a").click(function() {

    $(".page-menu a").removeClass("active");

    var curLink = $(this);


    var anchor = $(this).attr("href").replace("#","");

    var link = $(this);

    if ($("#mobile-indicator").css("display") == "block") {
      var yDiff = 70;
    } else {
      var yDiff = 150;
    }


    $("html,body").animate({
      scrollTop: $("a[name='"+anchor+"']").offset().top - yDiff
    },1000,function () {
      curLink.addClass("active")
    });

    history.pushState(null,null,$(this).attr("href"));

    return false;


  });

  $("body").on("click", "[data-video]", function () {
    $(this).html('<iframe width="100%" height="100%" src="' + $(this).data("video") + '?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>').addClass("active");
  });

  var scrollPos = $(window).scrollTop();

  if (scrollPos > 50) {

    if (!$("header").hasClass("header-fixed")) {

      $("header").addClass("header-fixed");
    }


  } else {

    if ($("header").hasClass("header-fixed")) {

      $("header").removeClass("header-fixed");

    }

  }

  // Main menu

  $(".navbar-trigger").click(function () {

    $(this).toggleClass("active");

    $(".navbar-wrapper").fadeToggle(150);
    $("body").toggleClass("menu-open");

  });

  $(".navbar-wrapper .close, .navbar-wrapper a").click(function () {

    $(".navbar-wrapper").fadeOut(150);
    $("body").removeClass("menu-open");
    $(".navbar-trigger").removeClass("active");

  });

  $(".navbar-wrapper").click(function (e) {

    if (!$(e.target).hasClass("navbar-nav") && !$(e.target).parents().hasClass("navbar-nav")) {

      $(".navbar-wrapper").fadeOut(150);
      $("body").removeClass("menu-open");
      $(".navbar-trigger").removeClass("active");

    }


  });



  // Expandable

  $("body").on("click", ".expandable-trigger", function () {

    var exTrigger = $(this);

    if (!exTrigger.hasClass("active")) {

      exTrigger.closest(".expandable-wrapper").find(".expandable-content").slideDown(500, function () {
        exTrigger.addClass("active");
        exTrigger.closest(".expandable-wrapper").addClass("open");
      });

    } else {

      exTrigger.closest(".expandable-wrapper").find(".expandable-content").slideUp(500, function () {
        exTrigger.removeClass("active");
        exTrigger.closest(".expandable-wrapper").removeClass("open");
      });

    }

  });

  $(".input-date").datepicker({
    autoclose: true,
    clearBtn: true,
    orientation: "bottom"
  }).on("changeDate",function() {
    $(this).valid();
    if ($(this).val()) {
      $(this).addClass("filled")
    }
  }).on("clearDate",function() {
    $(this).removeClass("filled")
  });

  $("input[type=file]").each(function () {

    if ($(this).data("label")) {
      var inputLabel = $(this).data("label");
    } else {
      var inputLabel = "Add file";
    }

    $(this).fileinput({
      showUpload: false,
      showPreview: false,
      showCancel: false,
      browseLabel: inputLabel,
      msgPlaceholder: "",
      dropZoneEnabled: false,
      maxFileCount: 1,
      mainClass: "input-group-lg"
    });

  });

  // Numeric input

  $(document).on("input", ".numeric", function() {
    this.value = this.value.replace(/\D/g,'');
  });


  // Fancybox

  $("a.fancybox").fancybox();

  $(".fancybox-video").fancybox({
    helpers : {
      media : {}
    },
    type: "iframe"
  });

  // Forms

  $("body").on("mouseup", "li.dropdown-header", function () {
    $(this).toggleClass("active");
    $(this).nextAll("li[data-optgroup='" + $(this).data("optgroup") + "']").fadeToggle(150);
    return false;
  });

  $("select").not(".picker__select--month, .picker__select--year, .rates-nav-select").each(function () {
    if ($(this).attr("multiple")) {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор",
        selectedTextFormat: "count",
        countSelectedText: function(count) {
          return count + " " + declOfNum(count, ['элемент', 'элемента', 'элементов']);
        }
      });
    } else {
      $(this).selectpicker({
        selectAllText: "Выбрать всё",
        deselectAllText: "Снять выбор"
      });
    }
  });

  $("select[multiple]").not(".simple-multi").on("shown.bs.select",function () {
    if (!$(this).prev(".dropdown-menu").find(".dropdown-footer").length) {
      dropdownFooter = '\
      <div class="dropdown-footer">\
      <div class="btn btn-1 btn-ico btn-save">Выбрать</div>\
      <div class="btn btn-cancel">Очистить</div>\
      </div>\
      ';
      $(this).prev(".dropdown-menu").find("ul").append(dropdownFooter);
    }
  });



  $("body").on("click",".bootstrap-select .btn-save", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker("toggle");
    return false;
  });

  $("body").on("click",".bootstrap-select .btn-cancel", function () {
    $(this).closest("div.dropdown-menu").next("select").selectpicker('deselectAll');
    return false;
  });





  $('.input-numeric').bind('keyup paste', function(){
    this.value = this.value.replace(/[^0-9]/g, '');
  });

  if ($("input:text").length) {
    $("input:text").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").addClass("active");
      }
    });
  }

  if ($("textarea").length) {
    $("textarea").each(function() {
      if ($(this).val()) {
        $(this).prev(".placeholder").addClass("active");
      }
    });
  }

  $("body").on("focus","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      placeholder.addClass("active");

    }

  });

  $("body").on("blur","input, textarea",function() {
    var el = $(this);

    if (el.parent().find(".placeholder").length) {
      var placeholder = el.parent().find(".placeholder");

      if (!el.val() || (el.hasClass("input-phone") && ! /^(?=.*[0-9])[- +()0-9]+$/.test(el.val()))) {
        placeholder.removeClass("active");
      }

    }

  });

  $("body").on("click",".placeholder",function(e) {
    if ($(this).parent().find("input").length) {
      $(this).parent().find("input").trigger("focus");
    }
    if ($(this).parent().find("textarea").length) {
      $(this).parent().find("textarea").trigger("focus");
    }
  });

  $("body").on("focus","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").addClass("focus");
  });

  $("body").on("blur","input[type=text], input[type=email], input[type=password], textarea", function () {
    $(this).closest(".form-item").removeClass("focus")
  });

  validateForms();

  //.popup anchors

  var hashArr = getHashVars();

  if (hashArr["serviceId"]) {

    $(".service-menu-link[data-service-id='" + hashArr["serviceId"] + "']").click();

  }

  if (hashArr["projectId"]) {

    $(".projects-list .project-tmb[data-project-id='" + hashArr["projectId"] + "']").click();

  }

  //.popup anchors END

});

function yearsName(age) {
  var txt;
  count = age % 100;
  if (count >= 5 && count <= 20) {
    txt = 'лет';
  } else {
    count = count % 10;
    if (count == 1) {
      txt = 'год';
    } else if (count >= 2 && count <= 4) {
      txt = 'года';
    } else {
      txt = 'лет';
    }
  }
  return txt;
}

function validateForms() {

  $('.textarea-autogrow').autogrow();

  $("input.input-phone").mask("+7 (999) 999-99-99");

  jQuery.validator.addClassRules('phone-email-group', {
    require_from_group: [1, ".phone-email-group"]
  });

  $("select").on("change", function () {
    if (!$(this).closest(".picker").length && !$(this).hasClass("faq-select")) {
      $(this).valid();
    }
  });

  $("body").on("click", ".form-item", function (e) {
    if ($(this).find(".bootstrap-select").length && !$(e.target).hasClass("bootstrap-select") && !$(e.target).parents().hasClass("bootstrap-select")) {
      $(e.target).closest(".form-item").find("select").selectpicker('toggle');
    }
  });

  $("form").each(function() {

    form = $(this);

    $(this).validate({
      ignoreTitle: true,
      focusInvalid: true,
      sendForm : false,
      errorPlacement: function(error, element) {

        if (element[0].tagName == "SELECT") {
          element.closest(".form-item").addClass("error");
          element.closest(".bootstrap-select").addClass("error");
          if (element.closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
          } else {
            error.insertAfter(element.closest(".bootstrap-select"));
          }
        } else {
          if (element.attr("type") == "checkbox") {
            element.siblings("label").addClass("checkbox-label-error")
          } else {
            error.insertAfter(element);
            element.closest(".form-group").addClass("error");
          }
        }

      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass(errorClass);
        $(element).closest(".form-item").removeClass("error").addClass("valid");
        $(element).closest(".form-group").removeClass("error");

        if ($(element)[0].tagName == "SELECT") {
          $(element).closest(".form-item").removeClass("error");
          $(element).closest(".bootstrap-select").removeClass("error");
          if ($(element).closest(".form-item").length) {
            error.insertAfter(element.closest(".form-item"));
            $(element).closest(".form-item").next("label.error").remove();
          } else {
            $(element).closest(".btn-group").next("label.error").remove();
          }
        } else {
          $(element).next(".error").remove();
          if ($(element).attr("type") == "checkbox") {
            $(element).siblings("label").removeClass("checkbox-label-error")
          }
        }
      },
      invalidHandler: function(form, validatorcalc) {
        var errors = validatorcalc.numberOfInvalids();
        if (errors && validatorcalc.errorList[0].element.tagName == "INPUT") {
          validatorcalc.errorList[0].element.focus();
        }
      }
    });

    if ($(this).find("input.password").length && $(this).find("input.password-repeat").length) {
      $(this).find("input.password-repeat").rules('add', {
        equalTo: "#"+form.find("input.password").attr("id")
      });
    }

  });

}

function declOfNum(number, titles) {
  cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

function readURL(input, img) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      img.attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}




function declOfNum(number, titles) {
  cases = [2, 0, 1, 1, 1, 2];
  return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];
}

function formSuccess(form) {

  //form.find(".form-group input, .form-group textarea").val("");
  form.find(".placeholder").removeClass("active");
  $("#successModal").modal("show");
  form.closest(".modal").modal("hide");
}

function slickResponsive() {

  if ($("#mobile-indicator").css("display") == "block") {

    if (!$(".why-list .row").hasClass("slick-initialized")) {

      $(".why-list .row").slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
        infinite: false,
        rows: 0
      });

    }

    if (!$(".benefits-list .row").hasClass("slick-initialized")) {

      $(".benefits-list .row").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        infinite: false,
        rows: 0
      });

    }

    if (!$(".rates-wrapper .row").hasClass("slick-initialized")) {

      $(".rates-wrapper .row").on('beforeChange', function(event, slick, currentSlide, nextSlide) {

        $(".rate-tmb").removeClass("rate-tmb-alt");
        $(".rates-wrapper .slick-slide[data-slick-index='" + nextSlide + "'] .rate-tmb").addClass("rate-tmb-alt");

        $(".rates-nav li").removeClass("active");
        $(".rates-nav li").filter(function () {

          return $(this).prevAll().length == nextSlide;

        }).addClass("active");

      });

      $(".rate-tmb").click(function () {

        $(".rates-wrapper .row").slick("slickGoTo", $(this).closest(".slick-slide").data("slick-index"));

      });

      $(".rates-wrapper .row").on("init", function () {

        $(".rate-tmb").removeClass("rate-tmb-alt");

        $(".rates-wrapper [data-slick-index=1] .rate-tmb").addClass("rate-tmb-alt");

      });


      $(".rates-wrapper .row").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: false,
        initialSlide: 1,
        rows: 0
      });

      $(".rates-nav li").removeClass("active");
      $(".rates-nav li:nth-child(2)").addClass("active");

    }

  } else {

    if ($(".why-list .row").hasClass("slick-initialized")) {

      $(".why-list .row").slick("unslick");

    }

    if ($(".benefits-list .row").hasClass("slick-initialized")) {

      $(".benefits-list .row").slick("unslick");

    }

    if ($(".rates-wrapper .row").hasClass("slick-initialized")) {

      $(".rates-wrapper .row").slick("unslick");

      $(".rate-tmb").removeClass("rate-tmb-alt");

      $(".rate-tmb-middle").addClass("rate-tmb-alt");

    }

  }

}


(function ($) {
  $.fn.parallax = function (scrollPos, itemFactor, itemShift) {

    if (!is_mobile) {

      var parallaxItem = $(this);
      var origTop = parseInt(parallaxItem.attr("data-origtop"));

      if (parallaxItem.data("pfactor")) {

        var pFactor = parallaxItem.data("pfactor") * .5;

      } else {

        var pFactor = itemFactor;

      }

      if (parallaxItem.data("shift")) {

        var shift = parallaxItem.data("shift");

      } else {

        var shift = itemShift;

      }



      // parallaxItem.stop().animate({
      // marginTop: (origTop - (scrollPos + window.innerHeight/2))*pFactor + shift
      // },500)

      mTop = (origTop - scrollPos) * pFactor + shift;

      parallaxItem.css({
        transform: "translateY(" + mTop + "px)"
      });

    }

  };
})(jQuery);

function resetParallax() {

  if (!is_mobile) {

    $(".parallax-block").each(function () {
      $(this).css({
        transform: "translateY(0px)"
      }).attr("data-origtop", $(this).offset().top)
    })

    // var scrollPos = $(window).scrollTop();
    // $(".parallax-block").each(function () {
    //   $(this).parallax(scrollPos);
    // });

  }

}

function getScrollBarWidth () {
  var inner = document.createElement('p');
  inner.style.width = "100%";
  inner.style.height = "200px";

  var outer = document.createElement('div');
  outer.style.position = "absolute";
  outer.style.top = "0px";
  outer.style.left = "0px";
  outer.style.visibility = "hidden";
  outer.style.width = "200px";
  outer.style.height = "150px";
  outer.style.overflow = "hidden";
  outer.appendChild (inner);

  document.body.appendChild (outer);
  var w1 = inner.offsetWidth;
  outer.style.overflow = 'scroll';
  var w2 = inner.offsetWidth;
  if (w1 == w2) w2 = outer.clientWidth;

  document.body.removeChild (outer);

  return (w1 - w2);
};

function popupMakeup() {

  if ($(".popup").length && $(".popup").hasClass("active")) {

    slickResponsive();

    $(".popup a.fancybox").fancybox();

    if ($(".popup.active .popup-content").height() > $(".popup.active .popup-content-wrapper").height()) {

      $(".popup.active .popup-close, .popup.active .popup-up").css({
        right: getScrollBarWidth()
      });

    } else {

      $(".popup.active .popup-close, .popup.active .popup-up").css({
        right: 0
      });

    }

  }

}

function modalMakeup() {

  if ($(".modal").length && $(".modal").hasClass("show")) {

    if ($(".modal.show .modal-dialog").outerHeight() > $(".modal.show").height()) {

      $(".modal.show .close").css({
        marginRight: getScrollBarWidth()
      });

    } else {

      $(".modal.show .close").css({
        marginRight: 0
      });

    }

  }

}

(function($) {
  $.fn.autogrow = function() {
    return this.each(function() {
      var textarea = this;
      $.fn.autogrow.resize(textarea);
      $(textarea).focus(function() {
        textarea.interval = setInterval(function() {
          $.fn.autogrow.resize(textarea);
        }, 500);
      }).blur(function() {
        clearInterval(textarea.interval);
      });
    });
  };
  $.fn.autogrow.resize = function(textarea) {
    var lineHeight = parseInt($(textarea).css('line-height'), 10);
    var lines = textarea.value.split('\n');
    var columns = textarea.cols;
    var lineCount = 0;
    $.each(lines, function() {
      lineCount += Math.ceil(this.length / columns) || 1;
    });
    var height = lineHeight * (lineCount) + 13;
    $(textarea).css('height', height);
  };
})(jQuery);

function makeUp() {

  $(".section-top-1").css({
    minHeight: $(window).height()
  });

}

function getHashVars() {

  var hashString = window.location.hash;

  hashString = hashString.replace("#","");

  var hashArray = hashString.split("&");

  var hashVars = new Array();

  for (var i in hashArray) {
    hashVar = hashArray[i].split("=");

    hashVars[hashVar[0]] = hashVar[1];

  }

  return hashVars;

}

function pageMenu() {

  if ($(".page-menu-wrapper").length) {

    if ($(".page-menu-wrapper").height() < $(window).height() - ($(".header-fixed").height() + 20)) {

      var scrollPos = $(window).scrollTop();

      if (scrollPos > $(".page-body").offset().top - $(".header-fixed").height() - 20) {
        $(".page-menu-wrapper").addClass("page-menu-wrapper-fixed").css({
          top: $(".header-fixed").height() + 20
        })
      } else {
        $(".page-menu-wrapper").removeClass("page-menu-wrapper-fixed").css({
          top: "auto"
        });
      }

      if ($(".menu-stop").length) {
        var menuStop = $(".menu-stop");
      } else {
        var menuStop = $("footer");
      }

      if (scrollPos > menuStop.offset().top - $(".page-menu-wrapper").outerHeight() - $(".page-menu-wrapper").position().top - 40) {
        $(".page-menu-wrapper").css({
          marginTop: -scrollPos + menuStop.offset().top - $(".page-menu-wrapper").outerHeight() - $(".page-menu-wrapper").position().top - 40
        });
      } else {
        $(".page-menu-wrapper").css({
          marginTop: 0
        });
      }

      $("a").filter(function () {
        return $(this).attr("name") != undefined;
      }).each(function () {

        if ($(this).offset().top - scrollPos >= 0 && $(this).offset().top - scrollPos < $(window).height() / 2) {
          $(".page-menu-wrapper a").removeClass("active");
          $(".page-menu-wrapper a[href='#" + $(this).attr("name") + "']").addClass("active");
        }

      });

    } else {

      $(".page-menu-wrapper").removeClass("page-menu-wrapper-fixed");

      $(".page-menu-wrapper").css({
        marginTop: 0,
        top: "auto"
      });

    }

  }

}

function  swapElements() {

  if ($("#sm-indicator").css("display") == "block") {

    if (!$(".blog-controls-mob").hasClass("is-mob")) {
      $(".blog-controls .inner").swapWith(".blog-controls-mob .inner");
      $(".blog-controls-mob").addClass("is-mob");

      validateForms();

    }


  } else {

    if ($(".blog-controls-mob").hasClass("is-mob")) {
      $(".blog-controls-mob .inner").swapWith(".blog-controls .inner");
      $(".blog-controls-mob").removeClass("is-mob");

      validateForms();

    }


  }

}

jQuery.fn.swapWith = function(to) {
  return this.each(function() {
    var copy_to = $(to).clone(true);
    var copy_from = $(this).clone(true);
    $(to).replaceWith(copy_from);
    $(this).replaceWith(copy_to);
  });
};