jQuery(document).ready(function ($) {
  var header = $("#masthead").height();

  $("#content").css("padding-top", header);

  $("#revealBtn").click(function () {
    $(".text-reveal").addClass("active");
    $(this).css("display", "none");
  });

  let $paragraph = $(".animated-text");
  let text = $paragraph.text().split("");

  $paragraph.empty();

  text.forEach((char) => {
    $paragraph.append(`<span>${char}</span>`);
  });

  $(window).scroll(function () {
    $(".text-reveal").addClass("active");
    $("#revealBtn").css("display", "none");

    $paragraph.find("span").each(function (i) {
      const $letter = $(this);
      const rect = $paragraph[0].getBoundingClientRect();
      if ((rect.y - window.innerHeight / 1.75) * -1 > i) {
        $letter.css("opacity", "1");
      } else {
        $letter.css("opacity", "0.15");
      }
    });

    if ($(window).scrollTop() <= 0) {
      $(".text-reveal").removeClass("active");
      $("#revealBtn").css("display", "inline");
    }
  });

  // COUNT UP METHOD
  // COUNT UP METHOD
  // COUNT UP METHOD

  let countedElements = [];

  function isInViewport(element) {
    const elementTop = $(element).offset().top;
    const elementBottom = elementTop + $(element).outerHeight();

    const viewportTop = $(window).scrollTop();
    const viewportBottom = viewportTop + $(window).height();

    return elementBottom > viewportTop && elementTop < viewportBottom;
  }

  function countUp(element, start, target) {
    let current = start;
    const duration = 2000;
    const increment = (target - start) / (duration / 16.67);

    const updateCount = () => {
      current += increment;
      if (current < target) {
        $(element).text(Math.floor(current));
        requestAnimationFrame(updateCount);
      } else {
        $(element).text(target);
      }
    };

    requestAnimationFrame(updateCount);
  }

  $(window).on("scroll", function () {
    $(".count-up").each(function () {
      const countElement = $(this);
      if (
        isInViewport(countElement) &&
        !countedElements.includes(countElement[0])
      ) {
        const start = parseInt(countElement.attr("data-start"), 10);
        const target = parseInt(countElement.attr("data-target"), 10);
        countUp(countElement, start, target);
        countedElements.push(countElement[0]);
      }
    });
  });

  // FAQ function

  $(".faq-item:first-child .faq-content")
    .slideDown()
    .parent()
    .addClass("open")
    .find(".status_icon")
    .attr("src", function () {
      return $(this).data("minus-icon");
    });

  $(".faq-header").click(function () {
    var currentItem = $(this).parent();

    if (currentItem.hasClass("open")) {
      return;
    }

    $(".faq-item").removeClass("open");
    $(".status_icon").attr("src", function () {
      return $(this).data("plus-icon");
    });

    currentItem.addClass("open");
    currentItem.find(".status_icon").attr("src", function () {
      return $(this).data("minus-icon");
    });
  });

  // LOADER

  $("#loader").fadeOut("slow", function () {
    $("#content").css("display", "block");
  });

  // INITIAL TOP

  $("html, body").animate(
    {
      //   scrollTop: 0,
    },
    "slow"
  );
});
