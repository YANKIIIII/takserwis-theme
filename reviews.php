<?php
/**
  * Template Name: Reviews
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>
<style>
    .lead {
    text-align: center;
}    
main {
    flex-grow: 1;
    background-color: #ffffff;
    transition: padding-top .6s;
    top: 0;
    position: relative;
}
.places_links {
    display: flex;
    justify-content: space-between;
}
.places_links .button.contrast{
    width: 22%;
}
.reviews_heading{
    margin-bottom: 40px;
}
.reviews_sub_heading{
    font-weight: 700;
    font-size: 20px;
    margin-bottom: 25px;
}
.chose_station{
    margin-top: 25px;
    margin-bottom: 30px;
    font-weight: 700;
    font-size: 16px;
}
.cookies_info{
    margin-top: 40px;
}

</style>
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


<style>
    .simple-rating{
        position: relative;
        font-size: 40px;
        display: inline-block;
        color: #DADCE0;
    }
    .simple-rating:before{
        content: "★★★★★";
        display: block;
    }
    .simple-rating__items{
        position: absolute;
        width: 100%;
        height: 40px;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: row-reverse;
        //overflow: hidden;
    }
    .simple-rating__item{
        position: absolute;
        width: 0;
        height:0;
        opacity: 0;
        visibility: hidden;
        top: 0;
        left: 0;
    }
    .simple-rating__label{
        flex:0 0 20%; 
        height: 100%;
        cursor: pointer;
        color: #DADCE0;
    }
    .simple-rating__label::before{
        content: "★";
        display: block;
        transition: color 0.3s ease 0s;
    }
    .simple-rating__item:checked,
    .simple-rating__item:checked ~ .simple-rating__label{
        color:#FBBC04;
    }
    .simple-rating__label:hover,
    .simple-rating__label:hover ~ .simple-rating__label,
    .simple-rating__label:checked ~ .simple-rating__label:hover{
        color:#FBBC04;
    }
    .nolink{
        pointer-events: none;
    }
    @media (min-width: 320px) and (max-width: 767px) {
    .places_links {
    flex-direction: column;
}
.places_links .button.contrast {
    width: 100%;
    margin-bottom: 20px;
}
        }
</style>

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









            <!--<style>
                .rateBox {
                direction: rtl;
                    text-align: center;
                    margin-top: 20px;
                }

                .rateBox a {
                    display: inline-block;
                    margin: 0 5px;
                    font-size: 1.5em;
                    color: #dadce0;
                    transition: all 0.5s;
                }

                .rateBox a:hover {
                    color: #fbbc04;
                    transform: scale(1.5);
                }

                .s1:hover ~ a, .s2:hover ~ a, .s3:hover ~ a, .s4:hover ~ a, .s5:hover ~ a {
                    color: #fbbc04;
                }
            </style>
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