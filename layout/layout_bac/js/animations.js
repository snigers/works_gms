var is_mobile = false;

if( $('#mobile-indicator').css('display')=='block') {
  is_mobile = true;
}

if (!is_mobile) {

  // Scenes

  var controller = new ScrollMagic.Controller();

  $(".power-tmb").each(function (index, element) {

    if ($(this).hasClass("power-tmb-alt")) {
      var xOffset = -50;
    } else {
      var xOffset = 50;
    }

    var powerTmbHeaderTimeline = new TimelineMax();
    var powerTmbTextTimeline = new TimelineMax();

    var powerTmbHeaderTween = powerTmbHeaderTimeline.fromTo($(element).find(".power-tmb-header"), .5, {x: xOffset, opacity: 0}, {x: 0, opacity: 1, ease:Linear.ease, delay: $(element).data("index")*.5});

    var powerTmbHeaderScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".power-wrapper"),
      offset: -150
    })
      .setTween(powerTmbHeaderTween)
      .addTo(controller);

    var powerTmbTextTween = powerTmbTextTimeline.fromTo($(element).find(".power-tmb-text"), .5, {x: xOffset, opacity: 0}, {x: 0, opacity: 1, ease:Linear.ease, delay: $(element).data("index")*.5 + .25});

    var powerTmbTextScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".power-wrapper"),
      offset: -150
    })
      .setTween(powerTmbTextTween)
      .addTo(controller);



  });

  $(".method-wrapper > *").each(function (index, element) {

    var xOffset = -50;

    var methodTimeline = new TimelineMax();

    var methodTween = methodTimeline.fromTo($(element), .5, {x: xOffset, opacity: 0}, {x: 0, opacity: 1, ease:Linear.ease, delay: $(element).prevAll().length*.5});

    var methodScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".method-wrapper"),
      offset: -150
    })
      .setTween(methodTween)
      .addTo(controller);





  });

  $(".meta-tmb").each(function (index, element) {

    var yOffset = 50;

    var metaTmbHeaderTimeline = new TimelineMax();
    var metaTmbTextTimeline = new TimelineMax();

    var metaTmbHeaderTween = metaTmbHeaderTimeline.fromTo($(element).find(".meta-tmb-header"), .5, {y: yOffset, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: $(element).data("index")*.5});

    var metaTmbHeaderScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".meta-list"),
      offset: -150
    })
      .setTween(metaTmbHeaderTween)
      .addTo(controller);

    var metaTmbTextTween = metaTmbTextTimeline.fromTo($(element).find(".meta-tmb-text"), .5, {y: yOffset, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: $(element).data("index")*.5 + .25});

    var metaTmbTextScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".meta-list"),
      offset: -150
    })
      .setTween(metaTmbTextTween)
      .addTo(controller);



  });

  var mapDescrTween = TweenMax.fromTo(".map-descr-inner", .5, {y: 50, opacity: 0}, {y: 0, opacity: 1});

  var mapDescrScene = new ScrollMagic.Scene({
    triggerElement: ".map-descr-inner",
    offset: -$(window).height()/2 + $(".map-descr-inner").outerHeight() + 100
  })
    .setTween(mapDescrTween)
    .addTo(controller);




  $(".project-pin").each(function (index, element) {

    var projectPinTween = TweenMax.fromTo($(element), .25, {scale: .5, opacity: 0}, {scale: 1, opacity: 1, ease:Linear.ease, delay: $(element).prevAll().length*.25});

    var projectPinScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".projects-map"),
      offset:  -200
    })
      .setTween(projectPinTween)
      .addTo(controller);



  });

  $(".show .rate-tmb").each(function (index, element) {

    var rateTmbHeaderTween = TweenMax.fromTo($(element).find(".rate-tmb-header"), .5, {y: 20, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: $(element).closest(".col-12").prevAll().length * .5});

    var rateTmbHeaderScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".rates-list"),
      offset: -$(window).height()/2 + $(element).closest(".rates-list").outerHeight() - 300
    })
      .setTween(rateTmbHeaderTween)
      .addTo(controller);

    var rateTmbTextTween = TweenMax.fromTo($(element).find(".rate-tmb-text"), .5, {y: 30, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: .25 + $(element).closest(".col-12").prevAll().length * .5});

    var rateTmbTextScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".rates-list"),
      offset: -$(window).height()/2 + $(element).closest(".rates-list").outerHeight() - 300
    })
      .setTween(rateTmbTextTween)
      .addTo(controller);

  });

  $(".approach-tmb").each(function (index, element) {

    var approachTmbHeaderTween = TweenMax.fromTo($(element).find(".h3"), .5, {y: 20, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: $(element).closest(".col-6").prevAll().length * .25});

    var approachTmbHeaderScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".approach-list"),
      offset: -$(window).height()/2 + $(element).closest(".approach-list").outerHeight() - 300
    })
      .setTween(approachTmbHeaderTween)
      .addTo(controller);

    var approachTmbTextTween = TweenMax.fromTo($(element).find(".approach-tmb-text"), .5, {y: 30, opacity: 0}, {y: 0, opacity: 1, ease:Linear.ease, delay: .25 + $(element).closest(".col-6").prevAll().length * .25});

    var approachTmbTextScene = new ScrollMagic.Scene({
      triggerElement: element.closest(".approach-list"),
      offset: -$(window).height()/2 + $(element).closest(".approach-list").outerHeight() - 300
    })
      .setTween(approachTmbTextTween)
      .addTo(controller);

  });




}

$(document).ready(function () {

  headersReveal();

});

$(window).on("resize", function () {

  headersReveal();

});

$(window).on("resize scroll", function () {

  // $("#map_legend_1").prlx(".section-projects",180,-100);
  // $("#map_legend_2").prlx(".section-projects",220,-250);
  //
  // $("#about_numbers_item_1").prlx(".section-about",180,-100);
  // $("#about_numbers_item_2").prlx(".section-about",220,-250);

});

function  headersReveal() {

  if (!is_mobile) {


    var controller2 = new ScrollMagic.Controller();

    $.each( $("h2, .h2, h3, .h3"), function( index, element ) {

      $(element).find(".revealing").each(function () {

        var revealingElement = $(this);

        var revealingMaskTween1 = new TweenMax.to(revealingElement.find(".revealing-mask"), .4, {
          right: 0,
          delay: .4 * revealingElement.prevAll(".revealing").length
        });

        var revealingMaskTween2 = new TweenMax.to(revealingElement.find(".revealing-mask"), .4, {
          left: "100%",
          delay:.4 + .4 * revealingElement.prevAll(".revealing").length
        });

        var revealingContentTween = new TweenMax.to(revealingElement.find(".revealing-content"), 0, {
          opacity:1,
          delay:.4 + .4 * revealingElement.prevAll(".revealing").length
        });

        var revealingMaskScene1 = new ScrollMagic.Scene({triggerElement: element, reverse: false})
          .offset(-300)
          .setTween(revealingMaskTween1)
          .addTo(controller2);

        var revealingMaskScene2 = new ScrollMagic.Scene({triggerElement: element, reverse: false})
          .offset(-300)
          .setTween(revealingMaskTween2)
          .addTo(controller2);

        var revealingContentScene = new ScrollMagic.Scene({triggerElement: element, reverse: false})
          .offset(-300)
          .setTween(revealingContentTween)
          .addTo(controller2);

      });



    });










  }

}

(function( $ ) {
  $.fn.prlx = function(pTrigger, yStart, yFinish) {

    if (!is_mobile) {

      var obj = $(this);

      var yPos;

      if ($(window).scrollTop() < $(pTrigger).offset().top - $(window).height()) {

        yPos = "start";

      } else if ($(window).scrollTop() > $(pTrigger).offset().top + $(window).height()) {

        yPos = "finish";

      } else {

        var percentOffset = ($(pTrigger).offset().top + $(window).height() - $(window).scrollTop()) / ($(window).height() * 2);

        var yRange = Math.abs(yStart - yFinish),
            posInRange = yRange * percentOffset,
            yPos = posInRange + yFinish;

      }

      TweenMax.to(obj, .7, {y: yPos, ease:Linear.ease});

    }

  };
})( jQuery );