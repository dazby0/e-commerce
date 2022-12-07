const itemsContainer = document.querySelector(".allItems");

itemsContainer.innerHTML = sessionStorage.getItem("quantity");
