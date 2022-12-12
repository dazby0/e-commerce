const removeBtn = document.querySelector(".remove");
const buyBtn = document.querySelector(".buy-btn");

const quan = document.querySelector(".quan");
const card = document.querySelector(".card-sum");
const totalContainer = document.querySelector(".total-price");
const empty = document.getElementById("empty");
const cart = document.querySelector(".cart");

function disappear() {
  quan.innerHTML = "0";
  cart.style.display = "none";
  card.style.display = "none";
  totalContainer.style.display = "none";
  empty.style.display = "block";
}

removeBtn.addEventListener("click", () => {
  buyBtn.disabled = true;
  removeBtn.disabled = true;
  buyBtn.style.opacity = 0.3;
  removeBtn.style.opacity = 0.3;
  disappear();
});

buyBtn.addEventListener("click", () => {
  alert("Thank you for yours shipping");
  disappear();
});
