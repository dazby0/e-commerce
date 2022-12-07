const btnDecrement = document.querySelector(".decrement");
const btnIncrement = document.querySelector(".increment");
const quantityInput = document.querySelector(".number-input");
const addToCartBtn = document.querySelector(".add-cart");
const cartInfo = document.querySelector(".info");

const itemName = document.querySelector(".item-name").innerHTML;
const imgSrcInfo = document.querySelector(".img-src").src;
const priceInfo = document.querySelector(".price");

// const imgSrcInput = document.querySelector(".imgSrcInput");
// const priceInput = document.querySelector(".priceInput");

btnIncrement.addEventListener("click", () => {
  quantityInput.value++;
  btnDecrement.disabled = false;
});

btnDecrement.addEventListener("click", () => {
  quantityInput.value--;
  quantityInput.value === "0"
    ? (btnDecrement.disabled = true)
    : (btnDecrement.disabled = false);
});

let quantity = sessionStorage.getItem("quantity");
refreshItems();

function refreshItems() {
  if (quantity > 0) {
    cartInfo.style.display = "block";
    cartInfo.innerHTML = quantity;
  } else cartInfo.style.display = "none";
}

addToCartBtn.addEventListener("click", () => {
  let value = quantityInput.valueAsNumber;
  sessionStorage.setItem("quantity", (quantity += value));
  refreshItems();

  // imgSrcInput.value = imgSrcInfo;
  const correctPrice = priceInfo.innerText.split(" ");
  // priceInput.value = correctPrice[0];

  const date = new Date();

  document.cookie = `${itemName}=${
    correctPrice[0]
  } ${imgSrcInfo}; expires=${date.setTime(date.getTime() + 5)}; path=/`;
});
