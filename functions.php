<?php

/**
 * Theme functions
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */



require_once 'functions/func-menu.php';
require_once 'functions/func-script.php';
require_once 'functions/func-style.php';
require_once 'functions/func-post-type.php';
require_once 'functions/func-acf-theme.php';
require_once 'functions/func-setup.php';
// require_once 'functions/func-navwalker.php';
// require_once 'functions/func-font.php';
// require_once 'functions/func-webp.php';

// Breadcrumbs
function custom_breadcrumbs() {

    // Настройки
    $separator          = '<em class="ml-0_5em size-0_6em icon-chevron-right-thin"></em>';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $my_lang = pll_current_language(); 
  
  if ( $my_lang == 'ru' ) {
    $home_title         = 'Главная';
  }
  elseif ( $my_lang == 'pl' ) {
    $home_title         = 'Dom';
  }
  
    // Если есть категории пользовательского типа постов введи его name (например portfolio_tags)
    $custom_taxonomy    = 'portfolio_tags';
  
    // Get the query 
    global $post,$wp_query;
  
    // Do not display on the homepage
    if ( !is_front_page() ) {
  
      // Создаём хлебные крошки
      echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
  
      // Home page
      echo '<li class="item-home"><a class="c-yellow bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
      echo '<li class="separator separator-home"> ' . $separator . ' </li>';
  
      if ( (bool) $wp_query->is_posts_page ) {
        $shortTitle = get_the_title( get_option('page_for_posts', true));
        $field = get_field('breadcrumbs_title', get_option('page_for_posts'));
        if (!empty($field)){
          $shortTitle = $field;
        }
        echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . $shortTitle . '</span></li>';
      } else if ( is_archive() && is_tax() && is_front_page() && !is_category() && !is_tag() ) {
        // If post is a custom post type
        $post_type = get_post_type();
        // If it is a custom post type display name and link
        if($post_type != 'post') {
          $post_type_object = get_post_type_object($post_type);
          $post_type_archive = get_post_type_archive_link($post_type);
          $home_url =  get_home_url('/');
          echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $home_url .'/'. $post_type . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
          echo '<li class="separator"> ' . $separator . ' </li>';
        }
        $custom_tax_name = get_queried_object()->name;
        echo '<li class="item-current item-archive"><span class="bread-current bread-archive">' . $custom_tax_name . '</span></li>';
      } else if ( is_single() ) {
        // если пост кастомного типа
        $post_type = get_post_type();
        // If it is a custom post type display name and link
        if($post_type != 'post') {
          $post_type_object = get_post_type_object($post_type);
          $post_type_archive = get_post_type_archive_link($post_type);
          $home_url =  get_home_url('/');
  
          echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $home_url .'/'. $post_type . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
          echo '<li class="separator"> ' . $separator . ' </li>';
        }
        // Get post category info
        $category = get_the_category();
  
        if(!empty($category)) {
  
          // Get last category post is in
          $last_category = end(array_values($category));
  
          // Get parent any categories and create array
          $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
          $cat_parents = explode(',',$get_cat_parents);
  
          // Loop through parent categories and store in variable $cat_display
          $cat_display = '';
          foreach($cat_parents as $parents) {
            $cat_display .= '<li class="item-cat">'.$parents.'</li>';
            $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
          }
  
        }
  
        // Если кастомный тип постов с кастомной таксономией
        $taxonomy_exists = taxonomy_exists($custom_taxonomy);
        if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
  
          $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
          $cat_id         = $taxonomy_terms[0]->term_id;
          $cat_nicename   = $taxonomy_terms[0]->slug;
          $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
          $cat_name       = $taxonomy_terms[0]->name;
  
        }
  
        // Check if the post is in a category
        if(!empty($last_category)) {
          echo $cat_display;
          echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
  
          // Else if post is in a custom taxonomy
        } else if(!empty($cat_id)) {
  
          echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
          echo '<li class="separator"> ' . $separator . ' </li>';
          echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
  
        } else {
  
          echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</span></li>';
  
        }
  
      } else if ( is_category() ) {
  
        // Category page
        echo '<li class="item-current item-cat"><span class="bread-current bread-cat">' . single_cat_title('', false) . '</span></li>';
  
      } else if ( is_page() ) {
  
        // Standard page
        if( $post->post_parent ){
  
          // If child page, get parents
          $anc = get_post_ancestors( $post->ID );
  
          // Get parents in the right order
          $anc = array_reverse($anc);
  
          // Parent page loop
          if ( !isset( $parents ) ) $parents = null;
          foreach ( $anc as $ancestor ) {
            $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
            $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
          }
  
          // Display parent pages
          echo $parents;
  
          // Current page
          $shortTitle = get_the_title();
          $field = get_field('breadcrumbs_title', $post->ID);
          if (!empty($field)){
            $shortTitle = $field;
          }
          echo '<li class="item-current item-' . $post->ID . '"><span title="' . get_the_title() . '"> ' . $shortTitle . '</span></li>';
  
        } else {
  
          $shortTitle = get_the_title();
          $field = get_field('breadcrumbs_title', $post->ID);
          if (!empty($field)){
            $shortTitle = $field;
          }
  
          // Just display current page if not parents
          echo '<li class="item-current item-' . $post->ID . '"><span class="bread-current bread-' . $post->ID . '"> ' . $shortTitle . '</span></li>';
  
        }
  
      } else if ( is_tag() ) {
  
        // страница тэгов
  
        // Информация о теге
        $term_id        = get_query_var('tag_id');
        $taxonomy       = 'post_tag';
        $args           = 'include=' . $term_id;
        $terms          = get_terms( $taxonomy, $args );
        $get_term_id    = $terms[0]->term_id;
        $get_term_slug  = $terms[0]->slug;
        $get_term_name  = $terms[0]->name;
  
        // Показать имя тега
        echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><span class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</span></li>';
  
      } elseif ( is_day() ) {
  
        // архивы по дням
  
        // Ссылка на архив за год
        echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
        echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
  
        // Ссылка на архив за месяц
        echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
        echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
  
        // Показать день
        echo '<li class="item-current item-' . get_the_time('j') . '"><span class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</span></li>';
  
      } else if ( is_month() ) {
  
        // Архив за месяц
  
        
        echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
        echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
  
        // Month display
        echo '<li class="item-month item-month-' . get_the_time('m') . '"><span class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</span></li>';
  
      } else if ( is_year() ) {
  
        
        echo '<li class="item-current item-current-' . get_the_time('Y') . '"><span class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</span></li>';
  
      } else if ( is_author() ) {
  
        // Архив автора
  
        // Информация об авторе
        global $author;
        $userdata = get_userdata( $author );
  
        // Имя автора
        echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><span class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Автор: ' . $userdata->display_name . '</span></li>';
  
      } else if ( get_query_var('paged') ) {
  
        // Постраничные архивы
        echo '<li class="item-current item-current-' . get_query_var('paged') . '"><span class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Страница') . ' ' . get_query_var('paged') . '</span></li>';
  
      } else if ( is_search() ) {
  
        // Страница результатов поиска
        echo '<li class="item-current item-current-' . get_search_query() . '"><span class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Результат поиска для: ' . get_search_query() . '</span></li>';
  
      } elseif ( is_404() ) {
  
        // 404 страница
        echo '<li>' . 'Error 404' . '</li>';
      }
  
      echo '</ul>';
  
    }
  
  }

  add_filter( 'wpseo_breadcrumb_links', 'fix_care_plan_bc_path' );

/**
 * Custom breadcrumb paths using Yoast SEO to fix care plan breadcrumb paths.
 *
 * @param [array] $links default param.
 * @return [array] $links edited links path.
 */
function fix_care_plan_bc_path( $links ) {

	global $post;

    $my_lang = pll_current_language(); 
  
    if ( $my_lang == 'ru' ) {
      $query122 = 679;
      $query123 = 'Услуги';
    }
    elseif ( $my_lang == 'pl' ) {
      $query122 = 675;
      $query123 = 'Usługi';
    }

	if ( is_singular( 'services' ) || is_post_type_archive( 'services' ) ) {
		$breadcrumb[] = array(
			'url'  => get_permalink( $query122 ),
			'text' => $query123,
		);

		array_splice( $links, 1, -2, $breadcrumb );
	}

	return $links;
}



add_action('wp_ajax_load_subservices_for_service', 'load_subservices_for_service_callback');
add_action('wp_ajax_nopriv_load_subservices_for_service', 'load_subservices_for_service_callback');

function load_subservices_for_service_callback() {
    if (isset($_POST['service_id']) && !empty($_POST['service_id'])) {
        $service_id = intval($_POST['service_id']);

        // Получаем данные из поля "Группа" (prices_section)
        $prices_section = get_field('prices_section', $service_id);

        $output = '';

        $my_lang = pll_current_language(); // определяем текущий язык
  
        if ( $my_lang == 'ru' ) {
          // Проверяем, есть ли данные в поле "Группа"
        if ($prices_section) {
          // Получаем данные из поля "Повторитель" (prices) внутри "Группы"
          $prices = $prices_section['prices']; // Доступ к полю prices через ассоциативный массив

          // Проверяем, есть ли данные в поле "Повторитель"
          if ($prices) {
              $output .= '<div class="service-prices-page"><div class="header"><span>Название услуги</span>
              <span>Цена, zł</span></div>'; // Добавляем контейнер для элементов

              foreach ($prices as $item) {
                  $output .= '<div class="item">';
                  $output .= '<div class="">';
                  $output .= '<div class="">' . esc_html($item['text']) . '</div>'; // Замените 'text' на имя поля в "Повторителе"
                  $output .= '</div>';

                  $output .= '<p class="text">' . esc_html($item['price']) . '</p>'; // Замените 'price' на имя поля в "Повторителе"
                  $output .= '</div>';
              }

              $output .= '</div>'; // Закрываем контейнер

          } else {
              $output = '<p>Для этой услуги цены договорные.</p>';
          }

      } else {
          $output = '<p>Для этой услуги цены договорные.</p>';
      }
        }
        elseif ( $my_lang == 'pl' ) {
          // Проверяем, есть ли данные в поле "Группа"
        if ($prices_section) {
          // Получаем данные из поля "Повторитель" (prices) внутри "Группы"
          $prices = $prices_section['prices']; // Доступ к полю prices через ассоциативный массив

          // Проверяем, есть ли данные в поле "Повторитель"
          if ($prices) {
              $output .= '<div class="service-prices-page"><div class="header"><span>Nazwa usługi</span>
              <span>Cena, zł</span></div>'; // Добавляем контейнер для элементов

              foreach ($prices as $item) {
                  $output .= '<div class="item">';
                  $output .= '<div class="">';
                  $output .= '<div class="">' . esc_html($item['text']) . '</div>'; // Замените 'text' на имя поля в "Повторителе"
                  $output .= '</div>';

                  $output .= '<div class="text">' . esc_html($item['price']) . '</div>'; // Замените 'price' на имя поля в "Повторителе"
                  $output .= '</div>';
              }

              $output .= '</div>'; // Закрываем контейнер

          } else {
              $output = '<p>Dla tej usługi ceny są indywidualne.</p>';
          }

      } else {
          $output = '<p>Dla tej usługi ceny są indywidualne.</p>';
      }
        }

        

        wp_send_json_success($output);

    } else {
        wp_send_json_error('ID услуги не получен.');
    }
}