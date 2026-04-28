<?php
/**
  * Template Name: Reviews
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

    <section id="employee" class="section-grid">
        <?php $employee = get_field('employee' );
        $employee_img = $employee['employee_img'];
        $employee_job_title = $employee['employee_job_title'];
        ?>
        <div class="container">
<div class="col-12 text-center" style="
    text-align: center;
">

<h2 class="reviews_heading">Recenzje</h2>
            <p class="reviews_sub_heading">
                Jak bardzo prawdopodobne jest, że polecisz Tak Serwis znajomej osobie?
            </p>




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



<p class="chose_station">
                Wybierz adres stacji, którą chcesz ocenić.
            </p>
<div class="places_links">
    <a href="https://maps.app.goo.gl/VTKPS9z5wPgpQ2Xh6" class="button contrast nolink" target="_blank">Składowa 33, 62-081 Przeźmierowo</a>
    <a href="https://maps.app.goo.gl/hvjvqvp8FdLn8CmW6" class="button contrast nolink" target="_blank">Węglowa 9/11, 61-122 Poznań</a>
    <a href="https://maps.app.goo.gl/Wm8W6Kdo7HMtfjuX9" class="button contrast nolink" target="_blank">świętego Antoniego 68C, 61-359 Poznań</a>
	<a href="https://maps.app.goo.gl/f3FfVfmtatpQ2W8UA" class="button contrast nolink" target="_blank">Strzeszyńska 61, 60-479 Poznań</a>
</div>









            <!--
            <div class="rateBox">
                <a class="s5" href="https://takserwis.pl/recenzje/dodaj-recenzje/"><span><i class="fas fa-star"></i></span></a>
                <a class="s4" href="https://takserwis.pl/recenzje/dodaj-recenzje/"><span><i class="fas fa-star"></i></span></a>
                <a class="s3" href="https://takserwis.pl/recenzje/dodaj-recenzje/"><span><i class="fas fa-star"></i></span></a>
                <a class="s2" href="https://maps.app.goo.gl/gdDBavUgYwdK7ERd7" target="_blank"><span><i class="fas fa-star"></i></span></a>
                <a class="s1" href="https://maps.app.goo.gl/gdDBavUgYwdK7ERd7" target="_blank"><span><i class="fas fa-star"></i></span></a>
            </div> -->
            <p class="cookies_info">
                Strona zapisuje na urządzeniu końcowym informacje w postaci tzw. plików cookies w celu świadczenia usług. 
Wyłączenie zapisu plików cookies jest możliwe poprzez zmianę ustawień urządzenia - w tym celu proszę postępować zgodnie z instrukcją producenta.
            </p>
        </div>
            

        </div>
    </section>





</main>
<script>

    jQuery(document).ready(function($){
	
	$('input:radio[name="simple-rating"]').change(function() {
  if ($(this).is(':checked') && $(this).val() == 5) {
    // Здесь мы выполняем операции, связанные с значением 'yourDesiredValue'
    console.log(222222222);
    $( ".places_links a" ).removeClass( "nolink" );
  } else if($(this).is(':checked') && $(this).val() == 4){
console.log(2222111122222);
$( ".places_links a" ).removeClass( "nolink" );
  } else{
$( ".places_links a" ).addClass( "nolink" );
localStorage.setItem('test', $(this).attr('id'));
window.location.href = 'https://takserwis.pl/recenzje/dodaj-recenzje/';
  }
});

	
});

</script>
<?php get_footer(); ?>