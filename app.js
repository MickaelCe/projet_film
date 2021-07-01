/*------------------------------------------- NAV DISPARITION ON SCROLL DOWN */

// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.querySelector("nav").style.top = "0";
//   } else {
//     document.querySelector("nav").style.top = "-100px";
//   }
//   prevScrollpos = currentScrollPos;
// };

/*------------------------------------------- SLIDESHOW */

let $slides, interval, $selectors, $btns, currentIndex, nextIndex;

let cycle = (index) => {
  let $currentSlide, $nextSlide, $currentSelector, $nextSelector;

  nextIndex = index !== undefined ? index : nextIndex;

  $currentSlide = $($slides.get(currentIndex));
  $currentSelector = $($selectors.get(currentIndex));

  $nextSlide = $($slides.get(nextIndex));
  $nextSelector = $($selectors.get(nextIndex));

  $currentSlide.removeClass("active").css("z-index", "0");

  $nextSlide.addClass("active").css("z-index", "1");

  $currentSelector.removeClass("current");
  $nextSelector.addClass("current");

  currentIndex =
    index !== undefined
      ? nextIndex
      : currentIndex < $slides.length - 1
      ? currentIndex + 1
      : 0;

  nextIndex = currentIndex + 1 < $slides.length ? currentIndex + 1 : 0;
};

$(() => {
  currentIndex = 0;
  nextIndex = 1;

  $slides = $(".slide");
  $selectors = $(".selector");
  $btns = $(".btn");

  $slides.first().addClass("active");
  $selectors.first().addClass("current");

  interval = window.setInterval(cycle, 6000);

  $selectors.on("click", (e) => {
    let target = $selectors.index(e.target);
    if (target !== currentIndex) {
      window.clearInterval(interval);
      cycle(target);
      interval = window.setInterval(cycle, 6000);
    }
  });
});

/*------------------------------------------- MODAL */

// Get the button that opens the modal
var modalBtn = document.querySelectorAll(".movie-item");
// All page modals
var modals = document.querySelectorAll(".modal-overlay");
// Get the <span> element that closes the modal
var closeBtn = document.querySelectorAll(".close-btn");

// When the user clicks the button, open the modal
for (var i = 0; i < modalBtn.length; i++) {
  modalBtn[i].onclick = function (e) {
    e.preventDefault();
    modal = document.querySelector(e.currentTarget.getAttribute("href"));
    $(modal).fadeIn();
    $("nav").fadeOut();
  };
}

// When the user clicks on <span> (x), close the modal
for (var i = 0; i < closeBtn.length; i++) {
  closeBtn[i].onclick = function () {
    for (var index in modals) {
      if (typeof modals[index].style !== "undefined")
        $(modals[index]).fadeOut();
      $("nav").fadeIn();
    }
  };
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target.classList.contains("modal-overlay")) {
    for (var index in modals) {
      if (typeof modals[index].style !== "undefined")
        $(modals[index]).fadeOut();
      $("nav").fadeIn();
    }
  }
};

/*------------------------------------------- SLICK */

$(".categorie-slider").slick({
  variableWidth: true,
  arrows: true,
  infinite: true,
  speed: 300,
});
