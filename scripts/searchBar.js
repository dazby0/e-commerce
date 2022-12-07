const searchInput = document.querySelector("[data-search]");
const btn = document.querySelector(".search");

const titles = document.querySelectorAll(".title");
// console.log(titles);

const cards = document.querySelectorAll(".card-item");

btn.addEventListener("input", () => {
  const word = searchInput.value.toLowerCase();

  titles.forEach((el) => {
    const title = el.outerHTML.toLowerCase();
    if (title.includes(word)) return;
    else {
      cards.forEach((e) => {
        const card = e.outerHTML.toLowerCase();
        if (card.includes(title)) {
          e.classList.toggle("hide");
        }
      });
    }
  });
});

// searchInput.addEventListener("input", () => {
//   if (searchInput.value === "") {
//     cards.forEach((card) => {
//       card.classList.remove("hide");
//     });
//   }
// });
