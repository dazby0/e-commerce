const addBtn = document.querySelector(".add-product-btn");
const body = document.getElementById("body");
const modal = document.querySelector(".add-product-modal");
const closeBtn = document.querySelector(".close");

addBtn.addEventListener("click", () => {
  body.classList.toggle("blur");
  modal.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  body.classList.toggle("blur");
  modal.style.display = "none";
});
