<?php
/**
  * Template Name: Review form
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
      crossorigin="anonymous" referrerpolicy="no-referrer" />
<main class="main">

<section id="title_section" class="title_section">
<div class="container">  
    
<?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>

</div>
    </section>

    <section id="main-content" class="main-content">
    <div style="
    padding-top: 70px;
    padding-bottom: 70px;
">
    
    
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">


                

<h2 class="reviews_heading text-center">Recenzje</h2>
            <p class="reviews_sub_heading text-center">
                Jak bardzo prawdopodobne jest, że polecisz Tak Serwis znajomej osobie?
            </p>
<div class="text-center">
    <div class="simple-rating">
<div class="simple-rating__items">
    <input id="simple-rating__5" type="radio" class="simple-rating__item" name="simple-rating" value="5">
    <label for="simple-rating__5" class="simple-rating__label"></label>
    <input id="simple-rating__4" type="radio" class="simple-rating__item" name="simple-rating" value="4">
    <label for="simple-rating__4" class="simple-rating__label"></label>
    <input id="simple-rating__3" type="radio" class="simple-rating__item" name="simple-rating" value="3">
    <label for="simple-rating__3" class="simple-rating__label"></label>
    <input id="simple-rating__2" type="radio" class="simple-rating__item" name="simple-rating" value="2">
    <label for="simple-rating__2" class="simple-rating__label"></label>
    <input id="simple-rating__1" type="radio" class="simple-rating__item" name="simple-rating" value="1">
    <label for="simple-rating__1" class="simple-rating__label"></label>
</div>

</div> 
</div>

<p class="chose_station text-center">
                Wybierz adres stacji, którą chcesz ocenić.
            </p>
            
                <?php 
the_content();
?>
           
           </div>

           <p class="cookies_info text-center">
                Strona zapisuje na urządzeniu końcowym informacje w postaci tzw. plików cookies w celu świadczenia usług. 
Wyłączenie zapisu plików cookies jest możliwe poprzez zmianę ustawień urządzenia - w tym celu proszę postępować zgodnie z instrukcją producenta.
            </p>     
        </div>
    </section>





</main>
<script>

    jQuery(document).ready(function($){
	if (localStorage.getItem('test') == 'simple-rating__1') {
        
        $("#simple-rating__1").attr('checked', 'checked');
    }
    if (localStorage.getItem('test') == 'simple-rating__2') {
        
        $("#simple-rating__2").attr('checked', 'checked');
    }
	if (localStorage.getItem('test') == 'simple-rating__3') {
        
        $("#simple-rating__3").attr('checked', 'checked');
    }
});

</script>
<?php get_footer(); ?>