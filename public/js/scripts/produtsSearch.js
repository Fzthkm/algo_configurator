document.addEventListener("DOMContentLoaded", () => {
    const selectButtons = document.querySelectorAll(".select-button");

    selectButtons.forEach(button => {
        button.addEventListener("click", () => {
            const component = button.closest(".component");

            if (!component) return;

            const type = button.dataset.category; // <-- получаем тип из кнопки

            const originalHTML = component.innerHTML;
            component.innerHTML = "";
            component.classList.add("component-expanded");

            const cardContainer = document.createElement("div");
            cardContainer.classList.add("component-cards-container");

            const scrollBtnContainer = document.createElement("div");
            scrollBtnContainer.classList.add("scroll-btn-container");

            const scrollLeftBtn = document.createElement("button");
            scrollLeftBtn.classList.add("scroll-btn", "disabled");
            scrollLeftBtn.innerHTML = `<img src="./assets/images/icons/arrow-left.svg" alt="left">`;

            const scrollRightBtn = document.createElement("button");
            scrollRightBtn.classList.add("scroll-btn");
            scrollRightBtn.innerHTML = `<img src="./assets/images/icons/arrow-right.svg" alt="right">`;

            scrollBtnContainer.appendChild(scrollRightBtn);
            scrollBtnContainer.appendChild(scrollLeftBtn);

            component.appendChild(cardContainer);
            component.appendChild(scrollBtnContainer);

            // Функция для создания карточки
            function createCard(product) {
                const card = document.createElement("div");
                card.classList.add("component-list-card");
                card.innerHTML = `
          <div class="component-list-img">
            <img src="${product.image}" alt="${product.name}">
          </div>
          <div class="component-list-info">
            <div>
              <span>${product.category_name}</span>
            </div>
            <div>${product.name}</div>
            <div class="component-list-price">${product.price}<span> руб</span></div>
          </div>
          <div class="component-list-btns">
            <button class="component-list-btn-add" data-product-id="${product.id}">
              <img src="./assets/images/icons/plus.svg">
              <span>Добавить</span>
            </button>
          </div>
        `;
                return card;
            }

            // AJAX-запрос на сервер
            fetch(`/api/get-products?type=${type}`)
                .then(response => response.json())
                .then(data => {
                    if (data && data.products) {
                        data.products.forEach(product => {
                            const card = createCard(product);
                            cardContainer.appendChild(card);
                        });

                        // Навешиваем событие на кнопки "Добавить"
                        const addButtons = cardContainer.querySelectorAll(".component-list-btn-add");
                        addButtons.forEach(addButton => {
                            addButton.addEventListener("click", (e) => {
                                const productId = addButton.dataset.productId;

                                // Здесь ты можешь отправить выбор на сервер или сохранить в localStorage
                                console.log(`Товар с id ${productId} выбран!`);

                                // После выбора можно вернуть исходную верстку или обновить компонент
                                component.innerHTML = originalHTML;
                                component.classList.remove("component-expanded");
                            });
                        });

                    } else {
                        cardContainer.innerHTML = "<p>Товары не найдены.</p>";
                    }
                })
                .catch(error => {
                    console.error("Ошибка загрузки товаров:", error);
                    cardContainer.innerHTML = "<p>Ошибка загрузки товаров.</p>";
                });

        });
    });
});
