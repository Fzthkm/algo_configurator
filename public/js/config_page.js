// Toggle choice button

document.addEventListener("DOMContentLoaded", function() {
  const toggleOptions = document.querySelectorAll(".toggle-option");
  const toggleBtn = document.querySelector(".toggle-btn");
  

  const toggleHighlight = document.createElement("div");
  toggleHighlight.classList.add("toggle-highlight");
  toggleBtn.appendChild(toggleHighlight);
  
  
  function updateHighlight(activeBtn) {
    const btnRect = activeBtn.getBoundingClientRect();
    const parentRect = toggleBtn.getBoundingClientRect();
    const offsetX = btnRect.left - parentRect.left;
    
    toggleHighlight.style.width = `${btnRect.width}px`;
    toggleHighlight.style.transform = `translateX(${offsetX}px)`;
  }

  function updateContent(activeBtn) {
    const componentListContent = document.getElementById("component-list-content");
    const selectedContent = document.getElementById("selected-content");

    if (activeBtn.dataset.value === "list") {
      componentListContent.classList.add("active");
      selectedContent.classList.remove("active");
    } else if (activeBtn.dataset.value === "selected") {
      selectedContent.classList.add("active");
      componentListContent.classList.remove("active");
    }
  }


  function handleToggleInteraction(btn) {
    toggleOptions.forEach(b => b.classList.remove("active"));
    btn.classList.add("active");
    updateHighlight(btn);
    updateContent(btn);
  }


  const initialActiveBtn = document.querySelector(".toggle-option.active");
  if (initialActiveBtn) {
    updateHighlight(initialActiveBtn);
    updateContent(initialActiveBtn);
  }


  toggleOptions.forEach((btn) => {
    btn.addEventListener("click", () => handleToggleInteraction(btn));
    btn.addEventListener("touchstart", (e) => {
      e.preventDefault(); 
      handleToggleInteraction(btn);
    }, { passive: false });
  });

  
  window.addEventListener("resize", () => {
    const activeBtn = document.querySelector(".toggle-option.active");
    if (activeBtn) {
      updateHighlight(activeBtn);
    }
  });
});

  // Modals for pc parts
  
  document.addEventListener("DOMContentLoaded", function () {
      
    function getCheckboxContent(data) {
      let options = makeCheckboxOptions(data.values)
  
      return `<div class="filter-section dropdown">
                  <div class="filter-title dropdown-header">
                      <h3>${data.title}</h3>
                      <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                  </div>
                  <div class="dropdown-content">
                      <div class="options">
                          ${options.join('\n')}
                        </div>
                  </div>
              </div>`;
    }

    function makeCheckboxOptions(values) {
      let options = [];
      values.forEach((item) => {
        let row = `<label><input type="checkbox"> ${item.name} <span>(${item.qnt})</span></label>`;
        options.push(row);
      })
      return options;
    }
  
    function getSliderContent(data) {
      return `<div class="filter-section price dropdown">
                  <div class="filter-title dropdown-header">
                      <h3>${data.title}</h3>
                      <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                  </div>
                  <div class="dropdown-content">
                      <div class="filter-price-input">
                          <input type="number" class="input-min" step="${data.values.step}" value="${data.values.min}">
                          <input type="number" class="input-max" step="${data.values.step}" value="${data.values.step}">
                      </div>
                      <div class="price-slider">
                          <div class="progress"></div>
                      </div>
                      <div class="range-input">
                          <input type="range" class="range-min" min="${data.values.min}" max="${data.values.max}" value="${data.values.min}" step="${data.values.step}">
                          <input type="range" class="range-max" min="${data.values.min}" max="${data.values.max}" value="${data.values.max}" step="${data.values.step}">
                      </div>
                  </div>
              </div>`;
    }
  
    function getSearchCheckboxContent(data) {
      let options = makeCheckboxOptions(data.values)
  
      return `<div class="filter-section dropdown">
                  <div class="filter-title dropdown-header">
                      <h3>${data.title}</h3>
                      <img class="arrow" src="./assets/images/icons/arrow-down.svg" />
                  </div>
                  <div class="dropdown-content">
                      <div class="filter-search inner-search">
                          <input type="text" class="search" placeholder="Поиск" />
                          <img src="./assets/images/icons/search.svg" class="search-icon" />
                      </div>
                      <div class="options">
                          ${options.join('\n')}
                      </div>
                  </div>
              </div>`;
    }
  
    const filterMap = {
      cooler: {
        title: "Кулер",
        items: [
          {
            type: 'slider',
            title: 'Цена',
            values: {
              step: 0.01,
              min: 239.57,
              max: 20000,
              currentMin: 239.57,
              currentMax: 16325.36
            }
          },
          {
            type: 'SearchCheckbox',
            title: 'Производитель',
            values: [
              { name: 'Cooler Master', qnt: 234 },
              { name: 'Noctua', qnt: 234 }
            ]
          },
          {
            type: 'checkbox',
            title: 'Система охлаждения',
            values: [
              { name: 'Воздушное', qnt: 234 },
              { name: 'Жидкостное', qnt: 234 }
            ]
          },
          {
            type: 'checkbox',
            title: 'Количество вентиляторов',
            values: [
              { name: '1', qnt: 234 },
              { name: '2', qnt: 234 },
              { name: 'Отсутствует', qnt: 234 }
            ]
          },
          {
            type: 'slider',
            title: 'Уровень шума вентилятора, дБ',
            values: {
              step: 0.01,
              min: 0,
              max: 86,
              currentMin: 0,
              currentMax: 86
            }
          },
          {
            type: 'SearchCheckbox',
            title: 'Socket',
            values: [
              { name: 'AM4', qnt: 234 },
              { name: 'LGA1155', qnt: 234 },
              { name: 'LGA1200', qnt: 234 },
              { name: 'LGA1155 v2', qnt: 234 },
              { name: 'LGA1156', qnt: 234 }
            ]
          },
          {
            type: 'checkbox',
            title: 'Материал радиатора',
            values: [
              { name: 'Медь', qnt: 234 },
              { name: 'Алюминий', qnt: 234 }
            ]
          },
          {
            type: 'checkbox',
            title: 'Регулятор оборотов',
            values: [
              { name: 'PWM', qnt: 234 },
              { name: 'Внутренний', qnt: 234 },
              { name: 'Нет', qnt: 234 }
            ]
          },
          {
            type: 'slider',
            title: 'Высота кулера, мм',
            values: {
              step: 0.01,
              min: 0,
              max: 86,
              currentMin: 0,
              currentMax: 86
            }
          },
          {
            type: 'checkbox',
            title: 'LED-подсветка',
            values: [
              { name: 'ARGB', qnt: 234 },
              { name: 'FRGB', qnt: 234 },
              { name: 'RGB', qnt: 234 },
              { name: 'Нет', qnt: 234 }
            ]
          }
        ]
      },
      cpu: {
        title: "Процессор",
        items: [
          {
            type: 'slider',
            title: 'Цена',
            values: {
              step: 0.01,
              min: 0,
              max: 5656,
            }
          },
          {
            type: 'checkbox',
            title: 'Производитель',
            values: [
              { name: 'ARGB', qnt: 234 },
              { name: 'FRGB', qnt: 234 },
              { name: 'RGB', qnt: 234 },
              { name: 'Нет', qnt: 234 }
            ]
          },
          {
            type: 'SearchCheckbox',
            title: 'Система охлаждения',
            values: [
              { name: 'Cooler Master', qnt: 234 },
              { name: 'Нет', qnt: 234 }
            ]
          }
        ]
      }
    };
  
  
    function openModal(category) {
      const data = filterMap[category];
      if (!data) return;
    
      let html = [];
    
      html.push(`
        <div class="filter-header">
          <h2>Фильтр</h2>
          <span>0</span>
          <button id="close-filter" class="close-filter">×</button>
        </div>
        <div class="filter">
          <div class="filter-search">
            <input type="text" placeholder="Поиск по фильтру" />
            <img src="./assets/images/icons/search.svg" class="search-icon" />
          </div>
        </div>
      `);
    
      data.items.forEach(filter => {
        switch (filter.type) {
          case 'slider':
            html.push(getSliderContent(filter));
            break;
          case 'checkbox':
            html.push(getCheckboxContent(filter));
            break;
          case 'SearchCheckbox':
            html.push(getSearchCheckboxContent(filter));
            break;
        }
      });
    
      html.push(`
        <div class="filter-buttons">
          <button class="clear-btn">Очистить</button>
          <button class="show-btn">Показать <span>212</span></button>
        </div>
      `);
    
      document.getElementById("modal-title").textContent = data.title;
      document.getElementById("filter-container").innerHTML = html.join('\n');
    
      document.getElementById("modal-cooler-catalog").style.display = "flex";
      document.body.style.overflow = 'hidden'; 
    }

    document.querySelectorAll("[data-modal]").forEach(button => {
      button.addEventListener("click", () => openModal(button.dataset.modal));
    });
    
    
    
    document.querySelector(".close-modal-btn").addEventListener("click", () => {
      document.getElementById("modal-cooler-catalog").style.display = "none";
      document.body.style.overflow = ''; 
    });

    document.querySelector(".back-to-congigurator").addEventListener("click", () => {
      document.getElementById("modal-cooler-catalog").style.display = "none";
      document.body.style.overflow = ''; 
    });


        
    document.getElementById("modal-cooler-catalog").addEventListener("click", (event) => {
          if (event.target === event.currentTarget) {
              event.currentTarget.style.display = "none";
              document.body.style.overflow = '';
          }
        })
 })
 
  
// Open parts variants

document.addEventListener("DOMContentLoaded", () => {
  const selectButtons = document.querySelectorAll(".select-button");

  selectButtons.forEach(button => {
    button.addEventListener("click", () => {
      const component = button.closest(".component");

      if (!component) return;

      const originalWidth = component.clientWidth;

      const originalHTML = component.innerHTML;
      component.innerHTML = "";
      component.classList.add("component-expanded");

      const cardContainer = document.createElement("div");
      cardContainer.classList.add("component-cards-container");

      function createCard() {
        const card = document.createElement("div");
        card.classList.add("component-list-card");
        card.innerHTML = `
          <div class="component-list-img">
            <img src="./assets/images/card-3.png">
          </div>
          <div class="component-list-info">
            <div>
              <span>Материнская плата</span>
              <img src="./assets/images/icons/config_page/warning_img.svg" alt="obligatory" />
            </div>
            <div>ASUS Prime B760M-K D4</div>
            <div class="component-list-price">1256. <span>7 руб</span></div>
          </div>
          <div class="component-list-btns">
            <button class="component-list-btn-change">
              <img src="./assets/images/icons/change.svg">
              <span>заменить</span>
            </button>
            <button class="component-list-btn-delete">
              <img src="./assets/images/icons/delete.svg">
              <span>удалить</span>
            </button>
          </div>
        `;
        return card;
      }

      for (let i = 0; i < 3; i++) {
        cardContainer.appendChild(createCard());
      }

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

      let scrollAmount = 0;
      const scrollStep = 280;

      function updateScrollButtons() {
        const maxScroll = cardContainer.scrollWidth - cardContainer.clientWidth;
        scrollLeftBtn.classList.toggle("disabled", scrollAmount <= 0);
        scrollRightBtn.classList.toggle("disabled", scrollAmount >= maxScroll);
      }

      scrollRightBtn.addEventListener("click", () => {
        const maxScroll = cardContainer.scrollWidth - cardContainer.clientWidth;
        scrollAmount = Math.min(scrollAmount + scrollStep, maxScroll);
        cardContainer.scrollTo({ left: scrollAmount, behavior: "smooth" });
        updateScrollButtons();
      });

      scrollLeftBtn.addEventListener("click", () => {
        scrollAmount = Math.max(scrollAmount - scrollStep, 0);
        cardContainer.scrollTo({ left: scrollAmount, behavior: "smooth" });
        updateScrollButtons();
      });

      cardContainer.addEventListener('scroll', () => {
        scrollAmount = cardContainer.scrollLeft;
        updateScrollButtons();
      });

      component.appendChild(cardContainer);
      component.appendChild(scrollBtnContainer);

      const actionBtnContainer = document.createElement("div");
      actionBtnContainer.classList.add("action-btn-container");

      const addButton = document.createElement("button");
      addButton.classList.add("action-btn", "add-btn");
      addButton.innerHTML = `
                              <img src="./assets/images/icons/add.svg" alt="add">
                              <span class="btn-label">добавить</span>
                            `;;

      const removeButton = document.createElement("button");
      removeButton.classList.add("action-btn", "remove-btn");
      removeButton.innerHTML = `<img src="./assets/images/icons/delete.svg" alt="remove">
                                <span class="btn-label">удалить</span>
                              `;

      actionBtnContainer.appendChild(addButton); 
      actionBtnContainer.appendChild(removeButton);

      component.appendChild(actionBtnContainer); 

      setTimeout(updateScrollButtons, 0);

      component.style.width = `${originalWidth}px`;

      // del cards
      cardContainer.querySelectorAll(".component-list-btn-delete").forEach(deleteBtn => {
        deleteBtn.addEventListener("click", () => {
          component.innerHTML = originalHTML;
          component.classList.remove("component-expanded");
          attachEventListeners(component);
        });
      });
    });
  });

  function attachEventListeners(component) {
    const button = component.querySelector(".select-button");
    if (button) {
      button.addEventListener("click", () => {
        button.click();
      });
    }
  }
});

// popup product info 

document.addEventListener('DOMContentLoaded', function() {
  const modalOverlay = document.getElementById('modal-about-item');
  const detailsBtns = document.querySelectorAll('.details-btn');
  const closeModalBtn = modalOverlay.querySelector('.close-modal-btn');
  const body = document.body;

  function openModal(e) {
    if (e) e.preventDefault(); 
    modalOverlay.style.display = 'flex';
    setTimeout(() => {
      modalOverlay.classList.add('active');
    }, 10);
    body.style.overflow = 'hidden';
    
  }

  function closeModal() {
    modalOverlay.classList.remove('active');
    setTimeout(() => {
      modalOverlay.style.display = 'none';
      body.style.overflow = ''; 
    }, 300);
  }

  detailsBtns.forEach(btn => {
    btn.addEventListener('click', openModal);
  });
  
  closeModalBtn.addEventListener('click', closeModal);

  modalOverlay.addEventListener('click', function(e) {
    if (e.target === modalOverlay) {
      closeModal();
    }
  });
  
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalOverlay.style.display === 'flex') {
      closeModal();
    }
  });
});

// 

document.addEventListener('DOMContentLoaded', function () {

  const firstPreview = document.querySelector('.modal-preview-img-wrapper');
  firstPreview.classList.add('active');
  document.getElementById('mainImg').querySelector('img').src = firstPreview.querySelector('img').src;
});

function changeImage(element) {
  const mainImg = document.getElementById('mainImg').querySelector('img');
  const newSrc = element.querySelector('img').src;
  mainImg.src = newSrc;

  document.querySelectorAll('.modal-preview-img-wrapper').forEach((img) => img.classList.remove('active'));
  element.classList.add('active');
}

//
document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('back-to-catalog-block').addEventListener('click', function() {
    document.getElementById('modal-cooler-catalog').style.display = 'block';
    document.getElementById('modal-about-item').style.display = "none";
  });
})


// modal item btns

document.addEventListener('DOMContentLoaded', function() {

  const buyButton = document.getElementById('buy-item');
  const changeChoiceContainer = document.getElementById('change-choice');
  const deleteButton = document.querySelector('.btn-delete-modal-item');

  
  if (buyButton) {
    buyButton.addEventListener('click', function() {
      this.style.display = 'none';
      
      if (changeChoiceContainer) {
        changeChoiceContainer.style.display = 'flex';
      }
    });
  }
  
  if (deleteButton) {
    deleteButton.addEventListener('click', function() {
      if (buyButton) {
        buyButton.style.display = 'block';
      }
      
      if (changeChoiceContainer) {
        changeChoiceContainer.style.display = 'none';
      }
    });
  }
  
  const minusBtn = document.querySelector('.minus');
  const plusBtn = document.querySelector('.plus');
  const qtyInput = document.querySelector('.qty-input');
  
  if (minusBtn && qtyInput) {
    minusBtn.addEventListener('click', function() {
      let value = parseInt(qtyInput.value);
      if (value > 1) {
        qtyInput.value = value - 1;
      }
    });
  }
  
  if (plusBtn && qtyInput) {
    plusBtn.addEventListener('click', function() {
      let value = parseInt(qtyInput.value);
      qtyInput.value = value + 1;
    });
  }
});

// Modal scroll sticky header

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("modal-about-item");
  const modalFrame = modal.querySelector(".modal-frame");
  const modalTitle = modal.querySelector(".modal-item-title");
  const modalPrice = modal.querySelector(".modal-content-price");
  const buyButton = modal.querySelector("#buy-item");

  const stickyHeaderWrapper = document.createElement("div");
  const stickyHeader = document.createElement("div");
  stickyHeader.className = "sticky-header";
  stickyHeader.classList.add("desktop-only")

  const clonedTitle = modalTitle.cloneNode(true);
  const clonedPrice = modalPrice.cloneNode(true);
  const clonedButton = buyButton.cloneNode(true);

  stickyHeader.appendChild(clonedTitle);
  stickyHeader.appendChild(clonedPrice);
  stickyHeader.appendChild(clonedButton);

  stickyHeaderWrapper.style.position = "absolute";
  stickyHeaderWrapper.style.left = 0;
  stickyHeaderWrapper.style.top = 0;
  stickyHeaderWrapper.appendChild(stickyHeader);

  modalFrame.appendChild(stickyHeaderWrapper);

  function updateStickyHeader() {
    const buttonRect = buyButton.getBoundingClientRect();
    const modalRect = modalFrame.getBoundingClientRect();

    const buttonTop = buttonRect.top - modalRect.top;
    const buttonBottom = buttonRect.bottom - modalRect.top;

    const isButtonVisible = buttonTop >= 0 && buttonBottom <= modalFrame.clientHeight;

    if (!isButtonVisible) {
      stickyHeader.classList.add("visible");
    } else {
      stickyHeader.classList.remove("visible");
    }
  }

  modalFrame.addEventListener("scroll", updateStickyHeader);
  updateStickyHeader();

  clonedButton.addEventListener("click", function () {
    buyButton.click();
  });
});


//
document.addEventListener("DOMContentLoaded", function() {
  const chooseBtn = document.getElementById('choose-more'); 
  const modalShop = document.getElementById('modal-cooler-catalog');
  const closeModalBtn = modalShop.querySelector('.close-modal-btn');
  const changeBtn = document.getElementById('change-btn')
  const body = document.getElementsByTagName('body')


  function openModal(e) {
    if (e) e.preventDefault();
    modalShop.style.display = 'flex';
    setTimeout(() => {
      modalShop.classList.add('active');
    }, 10);
    body.style.overflow = 'hidden';
  }

  function closeModal() {
    modalShop.classList.remove('active');
    setTimeout(() => {
      modalShop.style.display = 'none';
      body.style.overflow = '';
    }, 300);
  }

  chooseBtn.addEventListener('click', openModal);
  changeBtn.addEventListener('click', openModal);
  closeModalBtn.addEventListener('click', closeModal);

  modalShop.addEventListener('click', function(e) {
    if (e.target === modalShop) {
      closeModal();
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && modalShop.style.display === 'flex') {
      closeModal();
    }
  });
});


