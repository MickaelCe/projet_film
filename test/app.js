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

/*------------------------------------------- SLICK */

$(".categorie-slider").slick({
  variableWidth: true,
  arrows: true,
  infinite: false,
  speed: 500,
  swipeToSlide: true,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToScroll: 3,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToScroll: 1,
      },
    },
  ],
});

/*------------------------------------------- MODAL AJAX */

var id = "";

var modalBtns = document.querySelectorAll(".movie-item,.livesearch-item");

modalBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // slice pour retirer le #
    id = e.currentTarget.getAttribute("href").slice(1);
    loadModal();
  });
});

function loadModal() {
  $(document).ready(function () {
    $.ajax({
      success: function () {
        $(".modal-section").load("./modal.php?id=" + id);
      },
    });
  });

  // NO JQUERY MAIS BUG JS
  // var xhr = new XMLHttpRequest();
  // xhr.open("GET", "./modal.php?id=" + id);
  // xhr.onload = function () {
  //   if (xhr.status === 200) {
  //     document.querySelector(".modal-section").innerHTML = xhr.responseText;
  //   } else {
  //     console.log(xhr.status);
  //   }
  // };
  // xhr.send();
}

/*------------------------------------------- CLOSE MODAL */
window.onclick = function (e) {
  if (e.target.classList.contains("modal-overlay")) {
    document.querySelector(".modal-section").textContent = "";
  }
};

/*------------------------------------------- LIVESEARCH */

var search = "";

$("#search_text").keyup(function () {
  search = $(this).val();
  // Remplacer les espaces par des _ pour la recherche PHP
  search = search.replace(/ /g, "_");
  loadSearch();
});

function loadSearch() {
  $(document).ready(function () {
    $.ajax({
      success: function () {
        $(".livesearch-section").load("./fetch.php?search=" + search);
      },
    });
  });
}

/*------------------------------------------- CLOSE LIVESEARCH */

$(document).click(function (e) {
  if (e.target.classList.contains("search")) {
    $(".livesearch-section").fadeIn(500);
  } else {
    $(".livesearch-section").fadeOut(500);
  }
});
