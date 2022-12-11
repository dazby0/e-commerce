const quantity = parseInt(document.querySelector(".quan").innerHTML.trim());
console.log(quantity);

const price = document.querySelector(".price").innerHTML.trim();
const splitArray = price.split("$");
let correctPrice = parseInt(splitArray[0]);
console.log(correctPrice);

const total = document.querySelector(".total");

let sum = quantity * correctPrice;
total.innerHTML = `${sum}$`;
