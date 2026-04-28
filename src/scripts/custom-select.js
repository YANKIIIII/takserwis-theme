// document.addEventListener("DOMContentLoaded", function () {
//   let selectField = document.querySelector('.brand_select');
//   let selectedOption = document.querySelector('.custom-select .selected-option');
//   let hiddenField = document.querySelector('input[name="menu-564"]');
//   let optionsList = document.querySelector('.custom-select .options-list');
//   let customSelect = document.querySelector('.custom-select');
//   let selectedOptionsContainer = document.querySelector('.selected-options-container');

//   // Обновление опций с помощью значений из Contact Form 7
//   function updateOptions() {
//     let options = selectField.options;

//     // Очистка списка опций
//     optionsList.innerHTML = '';

//     // Добавление новых опций на основе значений из Contact Form 7
//     for (let i = 0; i < options.length; i++) {
//       let optionValue = options[i].value;
//       let optionText = options[i].textContent;

//       let li = document.createElement('li');
//       li.classList.add('option');
//       li.textContent = optionText;
//       li.dataset.value = optionValue;

//       // Проверка, является ли опция выбранной
//       if (optionValue === selectField.value) {
//         li.classList.add('selected');
//       }

//       optionsList.appendChild(li);
//     }
//   }

//   // Показать/скрыть выпадающий список
//   customSelect.addEventListener("click", function () {
//     optionsList.classList.toggle('show');
//     customSelect.classList.toggle('show');
//   });

//   // Обработчик события выбора опции
//   customSelect.addEventListener("click", function (event) {
//     if (event.target.classList.contains('option')) {
//       let selectedValue = event.target.dataset.value;
//       let selectedText = event.target.textContent;
//       selectedOption.textContent = selectedText;
//       hiddenField.value = selectedValue;

//       // Удаление класса "selected" у предыдущей выбранной опции
//       let prevSelected = optionsList.querySelector('.option.selected');
//       if (prevSelected) {
//         prevSelected.classList.remove('selected');
//       }

//       // Добавление класса "selected" к выбранной опции
//       event.target.classList.add('selected');

//       optionsList.classList.remove('show');
//       customSelect.classList.remove('show');
//     }
//   });

//   // Закрытие выпадающего списка при клике вне области
//   // document.addEventListener("click", function (event) {
//   //   if (!customSelect.contains(event.target)) {
//   //     optionsList.classList.remove('show');
//   //     customSelect.classList.remove('show');
//   //   }
//   // });

//   // Обновить опции при изменении значения в Contact Form 7
//   selectField.addEventListener("change", function () {
//     updateOptions();
//   });

//   // Инициализация опций при загрузке страницы
//   updateOptions();
// });
