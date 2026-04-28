// document.addEventListener("DOMContentLoaded", function () {
//     var menuLinks = document.querySelectorAll('a[href^="/#"]');
//     // Проверяем, есть ли якорь в адресной строке при загрузке страницы
//     console.log(window.location.hash);
//     if (window.location.hash) {
//         var targetId = window.location.hash.substring(1);
//         targetId = targetId.replace(/\/$/, '');
//         var target = document.getElementById(targetId);
//         console.log(targetId);
//         console.log(target);
//         if (target) {
//             scrollToTarget(target);
//         }
//     }

//     // Обработчик события для каждой ссылки
//     menuLinks.forEach(function (link) {
//         link.addEventListener("click", function (event) {
//             event.preventDefault();

//             var targetId = this.getAttribute("href").substring(2);
//             var target = document.getElementById(targetId);
//             if (target) {
//                 scrollToTarget(target);
//             }
//         });
//     });


//     // Функция для плавного скролла к целевому элементу
//     function scrollToTarget(target) {
//         var startPosition = window.pageYOffset; // Начальная позиция скролла
//         var targetPosition = target.offsetTop; // Позиция целевого элемента

//         var distance = targetPosition - startPosition; // Расстояние для прокрутки
//         var duration = 800; // Длительность анимации в миллисекундах
//         var startTime = null;

//         function animation(currentTime) {
//             if (startTime === null) {
//                 startTime = currentTime;
//             }

//             var elapsedTime = currentTime - startTime;
//             var scrollPosition = easeInOutQuad(elapsedTime, startPosition, distance, duration);
//             window.scrollTo(0, scrollPosition);

//             if (elapsedTime < duration) {
//                 requestAnimationFrame(animation);
//             }
//         }

//         // Функция для плавности скроллинга
//         function easeInOutQuad(t, b, c, d) {
//             t /= d / 2;
//             if (t < 1) return c / 2 * t * t + b;
//             t--;
//             return -c / 2 * (t * (t - 2) - 1) + b;
//         }

//         requestAnimationFrame(animation);
//     }
// });
