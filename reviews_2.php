<?php
/**
  * Template Name: Review form
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
    padding-top: 140px !important;
}
@media (max-width: 991px) {
    main {
        padding-top: 100px !important;
    }
}
@media (max-width: 767px) {
    main {
        padding-top: 80px !important;
    }
}
input[type="checkbox"] {
  width: 1px;
    height: 1px;
    position: absolute;
    overflow: auto;
    clip: rect(0 0 0 0);
}
.wpcf7-list-item-label {
  position: absolute;
    width: 50px;
    height: 50px;
    z-index: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #F4F6F8;
    border-radius: 8px;
    cursor: pointer;
}
.wpcf7-submit{
    cursor: pointer;
}


input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
content: "";
  width: 50px;
    height: 50px;
    position: absolute;
background-color:#FBBC04;
z-index: -1;
border-radius: 8px;
}
.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
    width: 30%;
}
.form_questions_places .wpcf7-list-item-label {
    background: #FF9D42;
    color: #1A1924;
    font-weight: 600;
}
.form_questions_places .wpcf7-list-item-label {
    position: absolute;
    width: 30%;
    height: 50px;
}
.form_questions_places.wpcf7-form-control.wpcf7-checkbox,
.form_questions_places .wpcf7-form-control.wpcf7-checkbox {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-left: 0;
}
.form_questions_rank2.form_questions_places {
    margin-bottom: 90px;
    width: 100%;
}
.form_questions_rank2.form_questions_places .wpcf7-list-item-label {
    width: 100%;
    height: 50px;
    cursor: pointer;
    position: absolute;
    left: 0;
    top: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 10px;
    font-size: 13px;
    border-radius: 8px;
    line-height: 1.2;
    color: #1A1924;
    font-weight: 600;
    background: #FF9D42;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
}
.form_questions_rank2.form_questions_places .wpcf7-list-item-label:hover {
    background: #E88328;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(232, 131, 40, 0.25);
}
.form_questions_rank2.form_questions_places.wpcf7-form-control.wpcf7-checkbox,
.form_questions_rank2.form_questions_places .wpcf7-form-control.wpcf7-checkbox {
    width: 100%;
    display: flex;
    justify-content: space-between;
    margin-left: 0;
    margin-right: 0;
    flex-wrap: wrap;
}
.form_questions_rank2.form_questions_places .wpcf7-list-item {
    width: 18.5%;
    height: 50px;
    color: #1A1924;
    position: relative;
    display: inline-block;
}
.form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
    background-color: #FBBC04;
    width: 100%;
    height: 100%;
    position: absolute!important;
    left: 0;
    top: 0;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}
.form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label:hover::before {
    background-color: #E2A703;
}
.form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label {
    color: #1A1924 !important;
}

.wpcf7-form-control.wpcf7-checkbox {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-left: 0;
}
.form_questions_block .wpcf7-list-item {
    position: relative;
    display: inline-block;
    width: 50px;
    height: 50px;
    margin: 0;
}
.form_questions_block .wpcf7-list-item-label {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: #F4F6F8;
    color: #1A1924;
    font-weight: 600;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
}
.form_questions_block .wpcf7-list-item-label:hover {
    background: #EAECEF;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}
.form_questions_block input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
    background-color: #FBBC04;
    width: 100%;
    height: 100%;
    position: absolute!important;
    left: 0;
    top: 0;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}
.form_questions_block input[type="checkbox"]:checked + .wpcf7-list-item-label:hover::before {
    background-color: #E2A703;
}
.form_questions_block input[type="checkbox"]:checked + .wpcf7-list-item-label {
    color: #1A1924 !important;
}
form {
    display: block;
}
.form_questions_wrapper {
    display: flex;
    justify-content: space-between;
    margin-bottom: 50px;
}
.form_questions_block {
    padding: 20px;
    background: #ffffff;
    width: 32%;
}
.form_questions_rank {
    margin-bottom: 70px;
    margin-top: 20px;
}
.form_questions_rank_text {
    display: flex;
    justify-content: space-between;
}
.form_inputs_wrapper {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
    margin-bottom: 30px;
}
.form_inputs_wrapper label{
    width: 50%;
}
.form_inputs_wrapper label:first-child{
    margin-right: 20px;
}
form .wpcf7-submit {
    background: #ff9d42;
    color: #fff;
    border-radius: 8px;
    transition: background-color .6s, color .6s;
    margin-top: -6px;
    height: 46px;
    width: 200px;
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
.form_questions_wrapper1111{
    background: #f4f6f8;
    padding: 30px 30px 30px 30px;
    border-radius: 8px;
}
.text_mg{
    margin-top: 20px;
    margin-bottom: 30px;
}
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
            <div class="reviews-container">


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


@media (min-width: 768px) and (max-width: 1023px) {
    .form_questions_rank2.form_questions_places .wpcf7-list-item {
        width: 100%;
        color: #1A1924;
        margin-bottom: 20px;
        height: 50px;
    }
    .form_questions_rank2.form_questions_places .wpcf7-form-control.wpcf7-checkbox {
        width: 100%;
        flex-direction: column;
    }
    .form_questions_rank2.form_questions_places .wpcf7-list-item-label {
        width: 100%;
        height: 50px;
        position: initial;
        color: #1A1924;
        background-color: #FF9D42;
    }
    .form_questions_wrapper {
        flex-direction: column;
    }
    .form_questions_block {
        padding: 20px;
        background: #ffffff;
        width: 100%;
    }
    .form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label {
        background-color: #FBBC04;
        color: #1A1924 !important;
    }
}
@media (min-width: 320px) and (max-width: 767px) {
    .form_questions_rank2.form_questions_places .wpcf7-list-item {
        width: 100%;
        color: #1A1924;
        margin-bottom: 20px;
        height: 50px;
    }
    .form_questions_rank2.form_questions_places .wpcf7-form-control.wpcf7-checkbox {
        width: 100%;
        flex-direction: column;
    }
    .form_questions_rank2.form_questions_places .wpcf7-list-item-label {
        width: 100%;
        height: 50px;
        position: initial;
        color: #1A1924;
        background-color: #FF9D42;
    }
    .form_questions_wrapper {
        flex-direction: column;
    }
    .form_questions_block {
        padding: 20px;
        background: #ffffff;
        width: 100%;
    }
    .form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label {
        background-color: #FBBC04;
        color: #1A1924 !important;
    }
}
</style>

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