<?php
$footer_options = get_field('footer_options', 'option');
$footer_about_title = $footer_options['about_block_title'];
$footer_about_text = $footer_options['about_block_text'];
$footer_icon_links = $footer_options['icon_links'];
$footer_icon_links_new = $footer_options['icon_links_ru'];
$address = $footer_options['address'];
$address_icon = $address['icon'];
$time = $footer_options['time_work'];
$time_icon = $time['icon'];
$contacts = $footer_options['contacts'];
$footer_logo = $footer_options['footer_logo'];
$footer_copyright_text = $footer_options['copyright_text'];
?>
<footer>
    <div class="container">
        <div class="footer-row row1">
            <a href="<?php echo pll_home_url(); ?>" class="logo">
                <img src="<?php echo $footer_logo['url']; ?>" alt="logotype" width="<?php echo $footer_logo['width'];?>"
                    height="<?php echo $footer_logo['height']; ?>">
            </a>
            <div class="footer_menu">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'  => 'footer-menu',
                        'menu'       => 'Menu',
                        'depth'           => 1,
                    )
                );
                ?>
            </div>
            <!--<button class="open-popup-btn button">
                <?php echo pll__('Перезвоните мне','call-me');?></button> -->
                <a href="https://widget.zarezerwuj.pl/direct/ab7cf499-cd6c-46c4-9507-57cbf60ffd46" class="button contrast" target="_blank" onclick="gtag('event', 'zarezerwuj_wizyte', {
       'event_category': 'Запись онлайн', 'event_label': 'https://widget.zarezerwuj.pl' });"><?php echo pll__('Записаться онлайн','book-banner');?></a>
        </div>
        <div class="footer-row row2">
            <ul class="footer_about_address">
                <li class="first_center show_center">
                    <a rel=”nofollow” href="<?php if (!empty($address['link'])) : echo  $address['link'];
                                endif; ?>">
                        <?php if ($address_icon) { ?>
                        <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                            width="<?php echo $address_icon['width']; ?>"
                            height="<?php echo $address_icon['height']; ?>">
                        <?php } ?>
                        <?php if ($address) { ?>
                        <?php echo $address['address']; ?>
                        <?php } ?>
                    </a>
                </li>
                <li class="second_center">
                    <a rel=”nofollow” href="https://maps.app.goo.gl/AoaQFJrjEtUevTFDA">
                        <?php if ($address_icon) { ?>
                        <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                            width="<?php echo $address_icon['width']; ?>"
                            height="<?php echo $address_icon['height']; ?>">
                        <?php } ?>
                        <?php if ($address) { ?>
                        <?php echo 'Węglowa 9/11, 61-001 Poznań'; ?>
                        <?php } ?>
                    </a>
                </li>
                <li class="third_center">
                    <a rel=”nofollow” href="https://maps.app.goo.gl/LBDfDQWY9ZPLRUzo6">
                        <?php if ($address_icon) { ?>
                        <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                            width="<?php echo $address_icon['width']; ?>"
                            height="<?php echo $address_icon['height']; ?>">
                        <?php } ?>
                        <?php if ($address) { ?>
                        <?php echo 'Świętego Antoniego 68C, 61-359 Poznań'; ?>
                        <?php } ?>
                    </a>
                </li>
				<li class="fourth_center">
                    <a rel=”nofollow” href="https://maps.app.goo.gl/X2f8gDdZywhsXxzL9">
                        <?php if ($address_icon) { ?>
                        <img src="<?php echo $address_icon['url']; ?>" alt="<?php echo $address_icon['alt']; ?>"
                            width="<?php echo $address_icon['width']; ?>"
                            height="<?php echo $address_icon['height']; ?>">
                        <?php } ?>
                        <?php if ($address) { ?>
                        <?php echo 'Strzeszyńska 61, 60-479 Poznań'; ?>
                        <?php } ?>
                    </a>
                </li>
				
                <li>
                    <?php if ($time_icon) { ?>
                    <img src="<?php echo $time_icon['url']; ?>" alt="<?php echo $time_icon['alt']; ?>"
                        width="<?php echo $time_icon['width']; ?>" height="<?php echo $time_icon['height']; ?>">
                    <?php } ?>
                    <?php if ($time) { ?>
                    <?php echo $time['time']; ?>
                    <?php } ?>
                </li>
                <?php if ($contacts) { ?>
                <?php foreach ($contacts as $contact) { ?>
                <li>
                    <a class="<?php if (substr($contact['url'], 0, 4) === "tel:") { echo "zphone";} ?>" href="<?php echo $contact['url']; ?>">
                        <?php if ($contact['icon']) { ?>
                        <img src="<?php echo $contact['icon']['url']; ?>" alt="<?php echo $contact['icon']['alt']; ?>"
                            width="<?php echo $contact['icon']['width']; ?>"
                            height="<?php echo $contact['icon']['height']; ?>">
                        <?php } ?>
                        <?php if ($contact['title']) { ?>
                        <?php echo $contact['title']; ?>
                        <?php } ?>
                    </a>
                </li>
                <?php }
                } ?>
            </ul>
            <?php if (!empty($footer_options['requisites'])) {
                $requisites = $footer_options['requisites'];?>
            <div class="info">
                <?php echo  $requisites; ?>
            </div>
            <?php } ?>
            <div class="footer_about_text">
                <?php echo $footer_about_text; ?>
            </div>


                        <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <ul class="footer_about_iconLinks">
                <?php foreach ($footer_icon_links_new as $link) { ?>
                <li>
                    <a rel=”nofollow” href="<?php echo $link['url']; ?>" target="_blank" class="footer_about_iconLink">
                        <?php if ($link['icon']) { ?>
                        <img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['icon']['alt']; ?>"
                            width="<?php echo $link['icon']['width']; ?>"
                            height="<?php echo $link['icon']['height']; ?>">
                        <?php } ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
  <ul class="footer_about_iconLinks">
                <?php foreach ($footer_icon_links as $link) { ?>
                <li>
                    <a rel=”nofollow” href="<?php echo $link['url']; ?>" target="_blank" class="footer_about_iconLink">
                        <?php if ($link['icon']) { ?>
                        <img src="<?php echo $link['icon']['url']; ?>" alt="<?php echo $link['icon']['alt']; ?>"
                            width="<?php echo $link['icon']['width']; ?>"
                            height="<?php echo $link['icon']['height']; ?>">
                        <?php } ?>
                    </a>
                </li>
                <?php } ?>
            </ul>
    <?php
  }
  
?>


        </div>
        <div class="copyright_footer">
            <span class="copyright_footer_text">
                &copy; <?php echo date('Y'); ?>. <?php echo $footer_copyright_text; ?>
            </span>
            <?php $url = get_privacy_policy_url(); ?>
            <a href="<?= $url ?: '#'; ?>"> <?php echo pll__('Пользовательское соглашение','terms');?></a>
        </div>
    </div>
</footer>
</div>
<div class="popup-overlay">
    <div class="popup-container">
        <?php 
        $title_modal =get_field('title_modal', 'option');
        $description_text_modal =get_field('description_text_modal', 'option');
        $shortcode_form =get_field('shortcode_form', 'option');
        $thank_you_block =get_field('thank_you_block', 'option');
        $thank_you_block_title =$thank_you_block['title'];
        $thank_you_block_text =$thank_you_block['text'];
        $thank_you_block_title_of_button =$thank_you_block['title_of_button'];
        ?>
        <?php if(!empty( $title_modal)){ ?>
        <h2><?php echo  $title_modal; ?></h2>
        <?php } ?>
        <?php if(!empty( $description_text_modal)){ ?>
        <p class="text"><?php echo  $description_text_modal; ?></p>
        <?php } ?>
        <?php echo do_shortcode($shortcode_form);?>
        <button class="close-popup-btn"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M14.0213 3.78607C14.521 3.28631 14.521 2.47469 14.0213 1.97492C13.5215 1.47516 12.7099 1.47516 12.2101 1.97492L8.0001 6.18895L3.78607 1.97892C3.28631 1.47915 2.47469 1.47915 1.97492 1.97892C1.47516 2.47869 1.47516 3.2903 1.97492 3.79007L6.18895 8.0001L1.97892 12.2141C1.47915 12.7139 1.47915 13.5255 1.97892 14.0253C2.47869 14.525 3.29031 14.525 3.79007 14.0253L8.0001 9.81125L12.2141 14.0213C12.7139 14.521 13.5255 14.521 14.0253 14.0213C14.525 13.5215 14.525 12.7099 14.0253 12.2101L9.81125 8.0001L14.0213 3.78607Z"
                    fill="white" />
            </svg>
        </button>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_453_141)">
                        <rect x="23" y="28" width="52" height="44" fill="#FF9D42" />
                        <path
                            d="M50 100C63.2608 100 75.9785 94.7322 85.3553 85.3553C94.7322 75.9785 100 63.2608 100 50C100 36.7392 94.7322 24.0215 85.3553 14.6447C75.9785 5.26784 63.2608 0 50 0C36.7392 0 24.0215 5.26784 14.6447 14.6447C5.26784 24.0215 0 36.7392 0 50C0 63.2608 5.26784 75.9785 14.6447 85.3553C24.0215 94.7322 36.7392 100 50 100ZM72.0703 40.8203L47.0703 65.8203C45.2344 67.6562 42.2656 67.6562 40.4492 65.8203L27.9492 53.3203C26.1133 51.4844 26.1133 48.5156 27.9492 46.6992C29.7852 44.8828 32.7539 44.8633 34.5703 46.6992L43.75 55.8789L65.4297 34.1797C67.2656 32.3438 70.2344 32.3438 72.0508 34.1797C73.8672 36.0156 73.8867 38.9844 72.0508 40.8008L72.0703 40.8203Z"
                            fill="white" />
                    </g>
                    <rect x="4" y="4" width="92" height="92" rx="46" stroke="#FF9D42" stroke-width="8" />
                    <defs>
                        <clipPath id="clip0_453_141">
                            <rect width="64" height="50" fill="white" transform="translate(17 25)" />
                        </clipPath>
                    </defs>
                </svg>
                <?php if(!empty( $thank_you_block_title)){ ?>
                <h2><?php echo  $thank_you_block_title; ?> </h2>
                <?php } ?>
                <?php if(!empty( $thank_you_block_text)){ ?>
                <p>
                    <?php echo  $thank_you_block_text; ?> </p>
                <?php } ?>
                <h4 class="modal-soc_title">
                    <?php if($thank_you_block['social_title']){echo $thank_you_block['social_title'];}?></h4>
                <?php if($thank_you_block['social']):?>
                <div class="modal-soc">
                    <?php foreach ($thank_you_block['social'] as $link) { ?>
                    <a href="<?php echo $link['link'];?>" target="_blank" rel="noindex">
                        <img src="<?php echo $link['icon']['url'];?>" alt="<?php echo $link['icon']['alt'];?>"
                            width="<?php echo $link['icon']['width']; ?>"
                            height="<?php echo $link['icon']['height']; ?>">
                    </a>
                    <?php } ?>
                </div>
                <?php endif; ?>
            </div>
            <div class="modal-footer">
                <?php if(!empty( $thank_you_block_title_of_button)){ ?>
                <button type="button" class="close button contrast" data-dismiss="modal" aria-label="Close">
                    <?php echo  $thank_you_block_title_of_button; ?></button>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script>
jQuery(document).ready(function($){
    if (localStorage.getItem('city') == 'Świętego Antoniego 68C, 61-359 Poznań') {
  console.log('Address Świętego Antoniego 68C');
  $(".city-choose").html('Świętego Antoniego 68C, 61-359 Poznań');
  $(".mobile_city_select .language_btn").html('Świętego Antoniego 68C, 61-359 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").addClass('show_center');
  $(".fourth_center").removeClass('show_center');
}
else if (localStorage.getItem('city') == 'Węglowa 9/11, 61-001 Poznań') {
  console.log('Address Węglowa 9/11');
  $(".city-choose").html('Węglowa 9/11, 61-001 Poznań');
  $(".mobile_city_select .language_btn").html('Węglowa 9/11, 61-001 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").addClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").removeClass('show_center');
}
else if (localStorage.getItem('city') == 'Składowa 33, Przezmierowo') {
  console.log('Address Składowa 33');
  $(".city-choose").html('Składowa 33, Przezmierowo');
  $(".mobile_city_select .language_btn").html('Składowa 33, Przezmierowo');
  $(".first_center").addClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").removeClass('show_center');
}
else if (localStorage.getItem('city') == 'Strzeszyńska 61, 60-479 Poznań') {
  console.log('Address Strzeszyńska 61');
  $(".city-choose").html('Strzeszyńska 61, 60-479 Poznań');
  $(".mobile_city_select .language_btn").html('Strzeszyńska 61, 60-479 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").addClass('show_center');
}
  $(".first_center_link").on( "click", function() {
        localStorage.setItem('city', 'Składowa 33, Przezmierowo');
  $(".city-choose").html('Składowa 33, Przezmierowo');
  $(".first_center").addClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").removeClass('show_center');
});

  $(".second_center_link").on( "click", function() {
    localStorage.setItem('city', 'Węglowa 9/11, 61-001 Poznań');
  $(".city-choose").html('Węglowa 9/11, 61-001 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").addClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").removeClass('show_center');
});

  $(".third_center_link").on( "click", function() {
    localStorage.setItem('city', 'Świętego Antoniego 68C, 61-359 Poznań');
  $(".city-choose").html('Świętego Antoniego 68C, 61-359 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").addClass('show_center');
  $(".fourth_center").removeClass('show_center');
});
	
  $(".fourth_center_link").on( "click", function() {
    localStorage.setItem('city', 'Strzeszyńska 61, 60-479 Poznań');
  $(".city-choose").html('Strzeszyńska 61, 60-479 Poznań');
  $(".first_center").removeClass('show_center');
  $(".second_center").removeClass('show_center');
  $(".third_center").removeClass('show_center');
  $(".fourth_center").addClass('show_center');
});
	

 });
</script>
<script>
    jQuery(document).ready(function($){
	
	$('.xpandable-block').each(function(){ // story - класс блока с большим текстом
        var review = $(this).html();
        if( review.length > 510 ) {
            console.log(review.length);
            $(this).after('<div class="xpandabl">Więcej</div>');
        }
    });
    $('.xpandabl').click(function(){
		$(this).prev('.xpandable-block').toggleClass('open');      
	});
	//$('input[name="phone"]').mask("+7 (999) 999 99 99");
	//$('input[name="user_contacts"]').mask("+7 (999) 999 99 99");
	
	$(document).on('af_complete', function(event,res) {
	if(res.success){ 
	    setTimeout(function() {
	$.magnificPopup.close();
}, 2500);
	}
});
	
});


    

    
    </script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Функция для проверки, мобильное ли устройство
  function isMobile() {
    return window.innerWidth <= 768; // Измените 768 на нужную ширину экрана для мобильной версии
  }

  // Получаем все элементы меню, у которых есть дочерние элементы (подменю)
  const menuItemsWithChildren = document.querySelectorAll('#main-menu .menu-item-has-children');

  menuItemsWithChildren.forEach(item => {
    // Получаем ссылку (<a>) внутри элемента меню
    const link = item.querySelector('a');
    // Получаем подменю (<ul>) внутри элемента меню
    const submenu = item.querySelector('.sub-menu');

    if (link && submenu) {
      // Функция для обработки клика (будет вызываться только на мобильных устройствах)
      const handleClick = function(event) {
        event.preventDefault();

        // Переключаем класс 'open' для отображения/скрытия подменю
        item.classList.toggle('open');

        // Добавляем/удаляем класс 'active' для стилизации стрелки (опционально)
        link.classList.toggle('active');

        // Дополнительно, можно управлять видимостью подменю через display
        if (submenu.style.display === 'block') {
          submenu.style.display = 'none';
        } else {
          submenu.style.display = 'block';
        }
      };

      // Проверяем, мобильное ли устройство, и добавляем обработчик события
      if (isMobile()) {
        link.addEventListener('click', handleClick);
      }

      // Добавляем слушатель на изменение размера окна, чтобы добавлять/удалять обработчик
      window.addEventListener('resize', function() {
        if (isMobile()) {
          if (!link.hasEventListener) {
            link.addEventListener('click', handleClick);
            link.hasEventListener = true; // Флаг, чтобы не добавлять обработчик повторно
          }
        } else {
          link.removeEventListener('click', handleClick);
          link.classList.remove('open'); // Закрываем подменю
          link.classList.remove('active'); // Убираем активное состояние стрелки
          submenu.style.display = '';     // Возвращаем display в состояние по умолчанию
          link.hasEventListener = false;
        }
      });

      // Первоначальная проверка при загрузке страницы
      if (!isMobile()) {
        link.removeEventListener('click', handleClick);
        link.classList.remove('open');
        link.classList.remove('active');
        submenu.style.display = '';
        link.hasEventListener = false;
      } else {
         link.hasEventListener = true;
      }
    }
  });
});
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<?php
// Получаем имя текущего шаблона
$template_name = get_page_template_slug();

// Проверяем, не является ли шаблон "Service_new"
if ($template_name !== 'service_new.php') { // Замените 'template-service_new.php' на фактическое имя файла шаблона
?>
  <div class="">
  <?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <script>
    jQuery(document).ready(function($) {
    console.log('custom-prices.js is running');

    
    const MOBILE_BREAKPOINT = 768; 
    const FONT_AWESOME_CHECK_MARK_HTML = '<i class="fas fa-check"></i>'; 
    const FONT_AWESOME_TOGGLE_DOWN_HTML = '<i class="fas fa-chevron-down"></i>'; 
    const FONT_AWESOME_TOGGLE_UP_HTML = '<i class="fas fa-chevron-up"></i>'; 
    

    let isMobile = window.matchMedia(`only screen and (max-width: ${MOBILE_BREAKPOINT}px)`).matches;
    let serviceList = $('.service-list');
    let initialActiveService = serviceList.find('.service-item.active-service'); 
    let subservicesDisplayContainer = $('#subservices-display'); 

    
    if (!initialActiveService.length) {
        initialActiveService = serviceList.find('.service-item').first();
        initialActiveService.addClass('active-service');
    }

    
    function loadSubservices(serviceId) {
        // ИСПРАВЛЕНИЕ: проверка существования контейнера
        if (!subservicesDisplayContainer.length) {
            console.warn("Контейнер #subservices-display не найден. Функция loadSubservices пропущена.");
            return; // Выходим из функции
        }

        subservicesDisplayContainer.html('<p>Загрузка...</p>'); 

        $.ajax({
            url: ajaxurl, 
            type: 'POST',
            data: {
                action: 'load_subservices_for_service', 
                service_id: serviceId
            },
            success: function(response) {
                console.log('AJAX Response:', response);
                if (response && response.data) {
                    subservicesDisplayContainer.html(response.data); 
                } else {
                    
                    subservicesDisplayContainer.html('<p>Подуслуги не найдены или ошибка при получении данных.</p>');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Request Failed:', textStatus, errorThrown);
                subservicesDisplayContainer.html('<p>Ошибка при загрузке подуслуг.</p>');
            }
        });
    }

    
    $('.service-item a.service-title-link').on('click', function(e) {
        e.preventDefault();

        const clickedLink = $(this);
        const clickedServiceItem = clickedLink.closest('.service-item');
        const serviceId = clickedLink.data('service-id');

        
        serviceList.find('.service-item').removeClass('active-service');
        serviceList.find('.service-title-link i.fas').remove(); 

        
        clickedServiceItem.addClass('active-service');

        
        if (isMobile) {
            
            serviceList.prepend(clickedServiceItem.detach());
            
            $('.service-list-toggle .active-service-name').text(clickedLink.contents().filter(function() {
                return this.nodeType === 3; 
            }).text().trim()); 

            
            if (serviceList.is(':visible')) {
                serviceList.slideUp(200, function() {
                    $('.service-list-toggle i').replaceWith(FONT_AWESOME_TOGGLE_DOWN_HTML);
                });
            }
        }

        // ИСПРАВЛЕНИЕ: проверяем существование контейнера перед вызовом
        if (subservicesDisplayContainer.length) {
            loadSubservices(serviceId);
        }
    });

    
    if (isMobile) {
        
        let toggleButton = $(`
            <div class="service-list-toggle">
                <span class="active-service-name"></span>
                ${FONT_AWESOME_TOGGLE_DOWN_HTML}
            </div>
        `);

        
        let initialActiveServiceLink = initialActiveService.find('.service-title-link');
        toggleButton.find('.active-service-name').text(initialActiveServiceLink.contents().filter(function() {
            return this.nodeType === 3; 
        }).text().trim()); 


        
        serviceList.before(toggleButton);

        
        serviceList.hide();

        
        toggleButton.on('click', function() {
            serviceList.slideToggle(200, function() {
                
                $(this).prev('.service-list-toggle').find('i').replaceWith(serviceList.is(':visible') ? FONT_AWESOME_TOGGLE_UP_HTML : FONT_AWESOME_TOGGLE_DOWN_HTML);
            }.bind(serviceList)); 
        });
    }

    // ИСПРАВЛЕНИЕ: проверяем существование контейнера перед вызовом
    if (subservicesDisplayContainer.length) {
        loadSubservices(initialActiveService.find('.service-title-link').data('service-id'));
    }

   
    $(window).on('resize', function() {
        let wasMobile = isMobile;
        isMobile = window.matchMedia(`only screen and (max-width: ${MOBILE_BREAKPOINT}px)`).matches;

        if (wasMobile !== isMobile) {
            
            if (isMobile) {
                
                let activeServiceItem = serviceList.find('.service-item.active-service');
                let activeServiceLink = activeServiceItem.find('.service-title-link');
                
                
                if (!activeServiceLink.find('i.fas').length) {
                }

                
                serviceList.prepend(activeServiceItem.detach());
                $('.service-list-toggle .active-service-name').text(activeServiceLink.contents().filter(function() { return this.nodeType === 3; }).text().trim());
                $('.service-list-toggle i').replaceWith(FONT_AWESOME_TOGGLE_DOWN_HTML);

                serviceList.hide(); 
                
                
                if (!$('.service-list-toggle').length) {
                    let toggleButton = $(`
                        <div class="service-list-toggle">
                            <span class="active-service-name"></span>
                            ${FONT_AWESOME_TOGGLE_DOWN_HTML}
                        </div>
                    `);
                    toggleButton.find('.active-service-name').text(activeServiceLink.contents().filter(function() { return this.nodeType === 3; }).text().trim());
                    serviceList.before(toggleButton);
                    
                    toggleButton.on('click', function() {
                        serviceList.slideToggle(200, function() {
                            $(this).prev('.service-list-toggle').find('i').replaceWith(serviceList.is(':visible') ? FONT_AWESOME_TOGGLE_UP_HTML : FONT_AWESOME_TOGGLE_DOWN_HTML);
                        }.bind(serviceList));
                    });
                }

            } else {
                
                $('.service-list-toggle').remove();
                serviceList.show(); 

                
                serviceList.find('.service-title-link i.fas').remove();

            }
        }
    });
});
    </script>

    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
<script>
    jQuery(document).ready(function($) {
    console.log('custom-prices.js is running');

    
    const MOBILE_BREAKPOINT = 768; 
    const FONT_AWESOME_CHECK_MARK_HTML = '<i class="fas fa-check"></i>'; 
    const FONT_AWESOME_TOGGLE_DOWN_HTML = '<i class="fas fa-chevron-down"></i>'; 
    const FONT_AWESOME_TOGGLE_UP_HTML = '<i class="fas fa-chevron-up"></i>'; 
    

    let isMobile = window.matchMedia(`only screen and (max-width: ${MOBILE_BREAKPOINT}px)`).matches;
    let serviceList = $('.service-list');
    let initialActiveService = serviceList.find('.service-item.active-service'); 
    let subservicesDisplayContainer = $('#subservices-display'); 

    
    if (!initialActiveService.length) {
        initialActiveService = serviceList.find('.service-item').first();
        initialActiveService.addClass('active-service');
    }

    
    function loadSubservices(serviceId) {
        // ИСПРАВЛЕНИЕ: проверка существования контейнера
        if (!subservicesDisplayContainer.length) {
            console.warn("Контейнер #subservices-display не найден. Функция loadSubservices пропущена.");
            return; // Выходим из функции
        }

        subservicesDisplayContainer.html('<p>Ładowanie...</p>'); 

        $.ajax({
            url: ajaxurl, 
            type: 'POST',
            data: {
                action: 'load_subservices_for_service', 
                service_id: serviceId
            },
            success: function(response) {
                console.log('AJAX Response:', response);
                if (response && response.data) {
                    subservicesDisplayContainer.html(response.data); 
                } else {
                    
                    subservicesDisplayContainer.html('<p>Nie znaleziono podusług lub wystąpił błąd podczas pobierania danych.</p>');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX Request Failed:', textStatus, errorThrown);
                subservicesDisplayContainer.html('<p>Błąd podczas ładowania podusług.</p>');
            }
        });
    }

    
    $('.service-item a.service-title-link').on('click', function(e) {
        e.preventDefault();

        const clickedLink = $(this);
        const clickedServiceItem = clickedLink.closest('.service-item');
        const serviceId = clickedLink.data('service-id');

        
        serviceList.find('.service-item').removeClass('active-service');
        serviceList.find('.service-title-link i.fas').remove(); 

        
        clickedServiceItem.addClass('active-service');

        
        if (isMobile) {
            
            serviceList.prepend(clickedServiceItem.detach());
            
            $('.service-list-toggle .active-service-name').text(clickedLink.contents().filter(function() {
                return this.nodeType === 3; 
            }).text().trim()); 

            
            if (serviceList.is(':visible')) {
                serviceList.slideUp(200, function() {
                    $('.service-list-toggle i').replaceWith(FONT_AWESOME_TOGGLE_DOWN_HTML);
                });
            }
        }

        // ИСПРАВЛЕНИЕ: проверяем существование контейнера перед вызовом
        if (subservicesDisplayContainer.length) {
            loadSubservices(serviceId);
        }
    });

    
    if (isMobile) {
        
        let toggleButton = $(`
            <div class="service-list-toggle">
                <span class="active-service-name"></span>
                ${FONT_AWESOME_TOGGLE_DOWN_HTML}
            </div>
        `);

        
        let initialActiveServiceLink = initialActiveService.find('.service-title-link');
        toggleButton.find('.active-service-name').text(initialActiveServiceLink.contents().filter(function() {
            return this.nodeType === 3; 
        }).text().trim()); 


        
        serviceList.before(toggleButton);

        
        serviceList.hide();

        
        toggleButton.on('click', function() {
            serviceList.slideToggle(200, function() {
                
                $(this).prev('.service-list-toggle').find('i').replaceWith(serviceList.is(':visible') ? FONT_AWESOME_TOGGLE_UP_HTML : FONT_AWESOME_TOGGLE_DOWN_HTML);
            }.bind(serviceList)); 
        });
    }

    // ИСПРАВЛЕНИЕ: проверяем существование контейнера перед вызовом
    if (subservicesDisplayContainer.length) {
        loadSubservices(initialActiveService.find('.service-title-link').data('service-id'));
    }

   
    $(window).on('resize', function() {
        let wasMobile = isMobile;
        isMobile = window.matchMedia(`only screen and (max-width: ${MOBILE_BREAKPOINT}px)`).matches;

        if (wasMobile !== isMobile) {
            
            if (isMobile) {
                
                let activeServiceItem = serviceList.find('.service-item.active-service');
                let activeServiceLink = activeServiceItem.find('.service-title-link');
                
                
                if (!activeServiceLink.find('i.fas').length) {
                }

                
                serviceList.prepend(activeServiceItem.detach());
                $('.service-list-toggle .active-service-name').text(activeServiceLink.contents().filter(function() { return this.nodeType === 3; }).text().trim());
                $('.service-list-toggle i').replaceWith(FONT_AWESOME_TOGGLE_DOWN_HTML);

                serviceList.hide(); 
                
                
                if (!$('.service-list-toggle').length) {
                    let toggleButton = $(`
                        <div class="service-list-toggle">
                            <span class="active-service-name"></span>
                            ${FONT_AWESOME_TOGGLE_DOWN_HTML}
                        </div>
                    `);
                    toggleButton.find('.active-service-name').text(activeServiceLink.contents().filter(function() { return this.nodeType === 3; }).text().trim());
                    serviceList.before(toggleButton);
                    
                    toggleButton.on('click', function() {
                        serviceList.slideToggle(200, function() {
                            $(this).prev('.service-list-toggle').find('i').replaceWith(serviceList.is(':visible') ? FONT_AWESOME_TOGGLE_UP_HTML : FONT_AWESOME_TOGGLE_DOWN_HTML);
                        }.bind(serviceList));
                    });
                }

            } else {
                
                $('.service-list-toggle').remove();
                serviceList.show(); 

                
                serviceList.find('.service-title-link i.fas').remove();

            }
        }
    });
});
    </script>
    <?php
  }
  
?>
 
<?php
}
?>



<script src="//code.jivo.ru/widget/1RKXHiR6bZ" async></script>
<a href="tel:+48880353599" class="call-btn">
<svg width="64" height="64" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
  <!-- Увеличенный круг -->
  <circle cx="8" cy="8" r="2" stroke="#fcb900" stroke-width="11" fill="none"></circle>

  <!-- Ещё немного уменьшенная трубка -->
  <g transform="translate(2.6,2.6) scale(0.65)">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.379 10.544c.73-.733 1.432-1.435 2.165-2.165.932-.992 1.105-1.912.671-2.234l-.889-.513a1.163 1.163 0 01-.425-1.588l1.334-2.312a1.163 1.163 0 011.589-.425l.889.513c2.884 1.665-.464 7.013-1.864 8.413l-1.616 1.616c-1.4 1.4-6.748 4.748-8.413 1.864l-.513-.89a1.163 1.163 0 01.425-1.588L4.044 9.9a1.163 1.163 0 011.588.425l.514.89c.321.433 1.24.26 2.233-.672z" fill="#ffffff"></path>
  </g>
</svg>
</a>
</body>

</html>