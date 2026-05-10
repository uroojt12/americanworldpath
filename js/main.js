document.querySelectorAll('.srv-tab').forEach(function(tab) {
  tab.addEventListener('click', function() {
    document.querySelectorAll('.srv-tab').forEach(function(t) { t.classList.remove('active'); });
    document.querySelectorAll('.srv-panel').forEach(function(p) { p.classList.remove('active'); });
    tab.classList.add('active');
    document.querySelectorAll('.srv-panel')[tab.dataset.tab].classList.add('active');
  });
});
// ========== Lenis Smooth Scroll Initialization + Custom Scrollbar ==========
document.addEventListener("DOMContentLoaded", function () {
  if (window.Lenis) {
    // 1. Wrap all content in a scroll container if not already
    let scrollContent = document.querySelector(".lenis-scroll-content");
    if (!scrollContent) {
      scrollContent = document.createElement("div");
      scrollContent.className = "lenis-scroll-content";
      while (document.body.firstChild) {
        scrollContent.appendChild(document.body.firstChild);
      }
      document.body.appendChild(scrollContent);
    }

    // 2. Hide native scrollbars via JS
    document.body.style.overflow = "hidden";
    document.documentElement.style.overflow = "hidden";

    // 3. Add a custom scrollbar element
    let customScrollbar = document.getElementById("custom-scrollbar");
    if (!customScrollbar) {
      customScrollbar = document.createElement("div");
      customScrollbar.id = "custom-scrollbar";
      customScrollbar.innerHTML = '<div class="custom-scrollbar-thumb"></div>';
      document.body.appendChild(customScrollbar);
    }
    const thumb = customScrollbar.querySelector(".custom-scrollbar-thumb");

    // 4. Init Lenis
    const lenis = new Lenis({
      wrapper: window,
      content: scrollContent,
      smooth: true,
      lerp: 0.1,
    });
    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 5. Sync custom scrollbar with Lenis scroll
    function updateScrollbar() {
      const scrollHeight = scrollContent.scrollHeight;
      const clientHeight = window.innerHeight;
      const scrollTop = lenis.scroll;
      const thumbHeight = Math.max(
        (clientHeight / scrollHeight) * clientHeight,
        40,
      );
      const thumbTop =
        (scrollTop / (scrollHeight - clientHeight)) *
        (clientHeight - thumbHeight);
      thumb.style.height = thumbHeight + "px";
      thumb.style.transform = `translateY(${thumbTop || 0}px)`;
      requestAnimationFrame(updateScrollbar);
    }
    updateScrollbar();
  }
});

// ========== Custom Cursor (Stylish Ring + Dot) ==========
// (No JS changes needed, but ensure this is present and correct)
document.addEventListener("DOMContentLoaded", function () {
  let cursor = document.getElementById("custom-cursor");
  if (cursor) cursor.remove(); // Remove any old cursor
  cursor = document.createElement("div");
  cursor.id = "custom-cursor";
  cursor.innerHTML =
    '<div class="cursor-ring"></div><div class="cursor-dot"></div>';
  document.body.appendChild(cursor);
  // Use GSAP for elastic cursor movement
  let mouseX = window.innerWidth / 2,
    mouseY = window.innerHeight / 2;
  let cursorX = mouseX,
    cursorY = mouseY;

  document.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;
  });

  function animateCursor() {
    cursorX += (mouseX - cursorX) * 0.18;
    cursorY += (mouseY - cursorY) * 0.18;
    if (window.gsap) {
      gsap.set(cursor, { x: cursorX, y: cursorY });
    } else {
      cursor.style.left = cursorX + "px";
      cursor.style.top = cursorY + "px";
    }
    requestAnimationFrame(animateCursor);
  }
  animateCursor();
  document.addEventListener("mousedown", () => {
    cursor.classList.add("active");
    if (window.gsap) {
      gsap.to(cursor, { scale: 0.85, duration: 0.18, overwrite: true });
    } else {
      cursor.style.transform = "translate(-50%, -50%) scale(0.85)";
    }
  });
  document.addEventListener("mouseup", () => {
    cursor.classList.remove("active");
    if (window.gsap) {
      gsap.to(cursor, { scale: 1, duration: 0.18, overwrite: true });
    } else {
      cursor.style.transform = "translate(-50%, -50%) scale(1)";
    }
  });
});
/*========== Toggle ==========*/
$(document).ready(function () {
  // Toggle button click event
  $(document).on("click", ".toggle", function () {
    console.log("Toggle Clicked"); // Debugging statement
    $(".toggle").toggleClass("active");
    $("body").toggleClass("flow");
    $("nav").toggleClass("active");
    $(".upperlay").toggleClass("active");
  });

  // Smooth scrolling for anchor links
  $(document).on("click", "[nav] a", function (e) {
    var targetId = $(this).attr("href");

    if (targetId.startsWith("#")) {
      e.preventDefault();

      // Close mobile menu if open
      $(".toggle").removeClass("active");
      $("body").removeClass("flow");
      $("[nav]").removeClass("active");
      $(".upperlay").removeClass("active");

      // Scroll to the target section
      $("html, body").animate(
        {
          scrollTop: $(targetId).offset().top,
        },
        800,
      );
    }
  });
});
// =================scroll===========
let offset = 0;
$(function () {
  // header fix
  offSet = $("body").offset().top;
  offSet = offSet + 5;
  $(window).scroll(function () {
    scrollPos = $(window).scrollTop();
    if (scrollPos >= offSet) {
      $("header").addClass("fix");
    } else {
      $("header").removeClass("fix");
    }
  });
});

// _____popup_____*/

// Language selector dropdown
$(document).on("click", ".dropBtn", function (e) {
  e.stopPropagation();
  var $dropdown = $(this).closest("#lang").find(".dropCnt");
  $(".dropCnt").not($dropdown).removeClass("active");
  $dropdown.toggleClass("active");
});

// Close dropdown when clicking outside
$(document).on("click", function (e) {
  if (!$(e.target).closest("#lang").length) {
    $(".dropCnt").removeClass("active");
  }
});
$(document).on("click", ".popBtn", function () {
  var popUp = $(this).data("popup");
  $("body").addClass("flow");
  $(".popup[data-popup= " + popUp + "]").fadeIn();
});
$(document).on("click", ".crosBtn", function () {
  $(".popup").fadeOut();
  $("body").removeClass("flow");
});

//
/*____ FAQ's ____*/
$(document).on("click", ".faqBlk > h5", function () {
  $(".faqBlk")
    .not($(this).parent().toggleClass("active"))
    .removeClass("active");
  $(".faqBlk > .txt")
    .not($(this).parent().children(".txt").slideToggle())
    .slideUp();
});

$(document).on("click", ".hover-arrow", function () {
  var currentItem = $(this).closest(".item");
  var currentMoreInfo = currentItem.find(".more-info").first();

  if (!currentMoreInfo.length) {
    return;
  }

  $(".process-slider .item")
    .not(currentItem)
    .removeClass("open")
    .find(".more-info")
    .stop(true, true)
    .slideUp(250);

  currentItem.toggleClass("open");
  currentMoreInfo.stop(true, true).slideToggle(300);
});

$(document).ready(function () {
  $(".testimonial-slider").owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $(".testimonial-cstm-slider").owlCarousel({
    loop: true,
    margin: 0,
    nav: false,
    dots: true,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      768: {
        items: 2,
      },
      1000: {
        items: 3,
      },
    },
  });

  // Process Slider (Mobile Only)
  function initProcessCarousel() {
    var checkWidth = $(window).width();
    var processSlider = $(".process-slider");

    if (checkWidth <= 991) {
      if (!processSlider.hasClass("owl-loaded")) {
        processSlider.addClass("owl-carousel owl-theme");
        processSlider.removeClass("row"); // Remove row class for carousel mapping
        $(".process-slider > .item").removeClass("col-lg-3 col-md-6"); // Remove col classes

        processSlider.owlCarousel({
          loop: false,
          margin: 30,
          nav: false,
          dots: true,
          responsive: {
            0: {
              items: 1,
            },
            768: {
              items: 2,
            },
          },
        });
      }
    } else {
      if (processSlider.hasClass("owl-loaded")) {
        processSlider.trigger("destroy.owl.carousel");
        processSlider.removeClass(
          "owl-carousel owl-theme owl-loaded owl-hidden",
        );
        processSlider.find(".owl-stage-outer").children().unwrap();
      }

      processSlider.removeClass("owl-carousel owl-theme owl-loaded owl-hidden");
      processSlider.addClass("row");
      $(".process-slider > .item").addClass("col-lg-3 col-md-6");
    }
  }

  initProcessCarousel();
  $(window).resize(initProcessCarousel);

  // Logos carousel initialization
  if ($(".logo-carousel").length) {
    $(".logo-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 2000,
      responsive: {
        0: {
          items: 2,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 4,
        },
      },
    });
  }
});
$(".skill-carousel").owlCarousel({
  autoplay: true,
  nav: true,
  navText: [
    '<i class="fa fa-chevron-left"></i>',
    '<i class="fa fa-chevron-right"></i>',
  ],
  // navText: [ 'prev', 'next' ],
  dots: false,
  loop: true,
  autoWidth: false,
  autoHeight: true,
  smartSpeed: 1000,
  autoplayTimeout: 10000,
  margin: 0,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
      autoplay: true,
      autoHeight: true,
      dots: false,
      nav: true,
    },
    600: {
      items: 2,
    },
    991: {
      items: 3,
    },
    1000: {
      items: 4,
    },
  },
});
// 1. Initialize Lenis
const lenis = new Lenis({
  duration: 1.2,
  easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // standard easing
  smoothWheel: true,
});

// 2. Connect Lenis to GSAP Ticker
// This is the "secret sauce" to make sure animations and scroll stay synced
lenis.on("scroll", ScrollTrigger.update);

gsap.ticker.add((time) => {
  lenis.raf(time * 1000);
});

gsap.ticker.lagSmoothing(0);
// =================owl===========


