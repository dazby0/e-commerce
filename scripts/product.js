const btnDecrement = document.querySelector(".decrement");
const btnIncrement = document.querySelector(".increment");
const quantityInput = document.querySelector(".number-input");
const addToCartBtn = document.querySelector(".add-cart");
const cartInfo = document.querySelector(".info");

const itemName = document.querySelector(".item-name").innerHTML;
const imgSrcInfo = document.querySelector(".img-src").src;
const priceInfo = parseInt(
  document.querySelector(".price-numbers").innerHTML.trim()
);

const imgSrcInput = document.querySelector(".imgSrcInput");
const priceInput = document.querySelector(".priceInput");
const titleInput = document.querySelector(".titleInput");
const quantityInputLast = document.querySelector(".quantityInput");

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

localStorage.setItem("quantityStorage", 0);

let quantity = parseInt(localStorage.getItem("quantityStorage"));
console.log(quantity);
refreshItems();

function refreshItems() {
  if (quantity > 0) {
    cartInfo.style.display = "block";
    cartInfo.innerHTML = quantity;
  } else cartInfo.style.display = "none";
}

addToCartBtn.addEventListener("click", () => {
  let value = quantityInput.valueAsNumber;

  titleInput.value = itemName;
  priceInput.value = priceInfo;
  imgSrcInput.value = imgSrcInfo;
  quantityInputLast.value = value;

  localStorage.setItem(
    "quantityStorage",
    (quantity += parseInt(quantityInputLast.value))
  );
  console.log(localStorage.getItem("quantityStorage"));
  refreshItems();
});
