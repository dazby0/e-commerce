const itemsContainer = document.querySelector(".allItems");
const cookieInfoContainer = document.querySelector(".cookie-show");

const nameContainer = document.querySelector(".name");
const priceContainer = document.querySelector(".price");
const srcContainer = document.querySelector(".src");

itemsContainer.innerHTML = sessionStorage.getItem("quantity");

const cookie = new Map(
  document.cookie
    .split("; ")
    .map((v) => v.split(/=(.*)/s).map(decodeURIComponent))
);

const iterator = cookie.keys();
let titles = [];
for (let i = 0; i < cookie.size; i++) {
  titles[i] = iterator.next().value;
}
console.log(titles);

titles.forEach((title) => {
  const itemInfo = cookie.get(title);
  const itemInfoArray = itemInfo.split(" ");

  if (itemInfoArray.length > 1) {
    const pPrice = (document.createElement("p").innerHTML = itemInfoArray[0]);
    const pSrc = (document.createElement("p").innerHTML = itemInfoArray[1]);

    document.body.appendChild(pPrice, pSrc);
  }
});
