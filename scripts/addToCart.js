const p = document.createElement("input");
p.setAttribute("type", "text");
p.setAttribute("name", "itemDetails");
p.classList.add("invisibleInput");

const pName = document.createElement("input");
pName.setAttribute("type", "text");
pName.setAttribute("name", "itemName");
pName.classList.add("invisibleInput");

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
    sessionStorage.setItem(title, `${itemInfoArray[0]} ${itemInfoArray[1]}`);
    p.value += `${sessionStorage.getItem(title)} `;
    console.log(p.value);
  }
});
document
  .getElementById("addForm")
  .insertBefore(p, document.getElementById("submitBtn"));

const names = Object.keys(sessionStorage);
for (let i = 0; i < names.length; i++) {
  if (names[i] != "quantity") {
    pName.value += `${names[i]}//`;
    console.log(pName.value);
  }
}
document
  .getElementById("addForm")
  .insertBefore(pName, document.getElementById("submitBtn"));
