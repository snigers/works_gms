$(document).ready(function () {

  $("body").on("mouseover", ".geo-search-form .suggest-item", function () {

    $(".geo-search-form .suggest-item").removeClass("active");
    $(this).addClass("active");

  });

  $("body").on("click", ".geo-search-form .suggest-item", function () {

    selectGeo($(this));

  });

  $(".geo-search-form form").on("submit", function (e) {

    e.preventDefault();

    return false;

  });

  $(".geo-search-form button[type=submit]").click(function (e) {
    if ($(".header").hasClass("i-scroll") && !$(".geo-search-form .form-group").hasClass("open")) {
      console.log("not submit")
      e.preventDefault();
      $(".geo-search-form input[type=text]").focus();
    }
  });

  $(".geo-search-form input[type=text]").focus(function () {
    $(this).closest(".form-group").addClass("focus");
  });

  $(".geo-search-form input[type=text]").blur(function () {
    $(this).closest(".form-group").removeClass("focus");
  });

  var timerStarted = false;

  $(".geo-search-form input[type=text]").on( "keyup", function( event ) {

    if (event.which != 38 && event.which != 40 && event.which != 13) {

      if ($(this).val().length >= 2) {
        var inp = $(this);

        if (typeof (requestTimer) != "undefined") {
          clearTimeout(requestTimer);
        }
        requestTimer = setTimeout(function () {

          searchSuggest(inp.val());
        }, 500);

        $(".geo-search-form .geo-suggest-popup").fadeIn(250);


        $(this).closest(".form-group").addClass("open");
      } else {
        $(".geo-search-form .geo-suggest-popup").stop().fadeOut(250);

        $(this).closest(".form-group").removeClass("open");
      }

    }

    event.preventDefault();

  });

  $(".geo-search-form").on("keyup keydown", function( event ) {

    if (event.which == 13) {

      event.preventDefault();

    }


  });


  $("body").on("keydown", function( event ) {

    if ($(".geo-search-form .geo-suggest-popup").css("display") == "block") {

      if (event.which == 40) {

        var thisItem = $(".geo-suggest-popup .suggest-item.active");

        if (thisItem.length == 0) {

          $(".geo-suggest-popup .suggest-item").first().addClass("active");

        }

        if (thisItem.next(".geo-suggest-popup .suggest-item").length) {
          $(".geo-suggest-popup .suggest-item").removeClass("active");
          thisItem.next(".geo-suggest-popup .suggest-item").addClass("active");
        } else {
          $(".geo-suggest-popup .suggest-item").removeClass("active");
          $(".geo-suggest-popup .suggest-item").first().addClass("active");
        }

        event.preventDefault();

      } else if (event.which == 38) {

        var thisItem = $(".geo-suggest-popup .suggest-item.active");

        if (thisItem.prev(".geo-suggest-popup .suggest-item").length) {
          $(".geo-suggest-popup .suggest-item").removeClass("active");
          thisItem.prev(".geo-suggest-popup .suggest-item").addClass("active");
        } else {
          $(".geo-suggest-popup .suggest-item").removeClass("active");
          $(".geo-suggest-popup .suggest-item").last().addClass("active");
        }

        event.preventDefault();

      } else if (event.which == 13) {

        selectGeo($(".geo-suggest-popup .suggest-item.active"));

        $(".geo-search-form .geo-suggest-popup").fadeOut(250);

        $(".geo-search-form .form-group").removeClass("open");
        $(".geo-search-form .suggest-items-list").html("");

      }


    }


  });

  $("body").on("click", function (e) {

    if ($(".geo-search-form .geo-suggest-popup").css("display") == "block" && !$(e.target).hasClass("geo-search-form") && !$(e.target).parents().hasClass("geo-search-form") && !$(e.target).hasClass("geo-suggest-popup") && !$(e.target).parents().hasClass("geo-suggest-popup")) {
      $(".geo-search-form .geo-suggest-popup").fadeOut(250);

      $(".geo-search-form .form-group").removeClass("open");
      $(".geo-search-form .suggest-items-list").html("");
    }

  });

});

function searchSuggest(query) {

  var suggestUrl = '/ajax/get_geo.php?loc_request='+query;

  $.getJSON(suggestUrl, function(data) {

    if (data.length) {

      var itemsHtml = '';

      $(".btn-suggest-all").remove();

      $.each(data, function(index, suggestItem) {

        $(".geo-search-form .geo-suggest-popup").fadeIn(250);

        var name_local;
        if (suggestItem.city != undefined)
        {
          name_local = suggestItem.state + ", " + suggestItem.city;
        } else {

          if (suggestItem.region != undefined)
          {
            name_local = suggestItem.state + ", " + suggestItem.region;
          } else {
            name_local = suggestItem.state;
          }
        }

        // get_page(window.location.pathname);

        itemsHtml += '\
        <div class="suggest-item" data-url="'+suggestItem.url+'" data-name="'+name_local+'"><a href="'+get_path(suggestItem.url)+'">\
          <div class="suggest-item-state">' + suggestItem.state + '</div>';
            if (suggestItem.region != undefined)
            {
              itemsHtml += '\
              <div class="suggest-item-address">\
                <span>' + suggestItem.region + '</span>';

              if (suggestItem.city != undefined) {
                itemsHtml += '\<span > ' + suggestItem.city + ' </span>';
              }
              itemsHtml += '</div>';
            }
        itemsHtml += '</a></div>';

      });

      $(".geo-search-form .suggest-items-list").html(itemsHtml);

    } else {
      $(".geo-search-form .geo-suggest-popup").fadeOut(250);
    }

  });

}

function get_path(url)
{
  var url_page = window.location.pathname;
  if (url_page.indexOf("services") > 0)
  {
    return url + "services/";
  }
  if (url_page.indexOf("rates") > 0)
  {
    return url + "rates/";
  }
  if (url_page.indexOf("contacts") > 0)
  {
    return url + "contacts/";
  }

  if (url_page.indexOf("about") > 0)
  {
    return "";
  }
  if (url_page.indexOf("reviews") > 0)
  {
    return "";
  }
  if (url_page.indexOf("blog") > 0)
  {
    return "";
  }
  if (url_page.indexOf("faq") > 0)
  {
    return "";
  }
  if (url_page.indexOf("reservation") > 0)
  {
    return "";
  }

  return url;
}


function selectGeo() {

  console.log("select geo");

}

