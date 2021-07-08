// Script pour afficher le modal on click
var modalBtns = document.querySelectorAll(".livesearch-item");
modalBtns.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    // slice pour retirer le #
    id = e.currentTarget.getAttribute("href").slice(1);
    loadModal();
  });
});