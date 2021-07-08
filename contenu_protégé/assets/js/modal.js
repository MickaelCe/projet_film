var closeBtn = document.querySelector(".close-btn");
  try {
    closeBtn.addEventListener("click", () => {
      document.querySelector(".modal-section").textContent = "";
    });
  } catch (error) {
    console.log(error);
  }