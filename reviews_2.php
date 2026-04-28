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
// background-color:#1A1924;
width: 30%;
}
.form_questions_places .wpcf7-list-item-label {
    background: #FF9D42;
}
.form_questions_places .wpcf7-list-item-label {
    position: absolute;
    width: 30%;
    height: 50px;
}
.form_questions_places .wpcf7-form-control.wpcf7-checkbox {
    display: flex;
    justify-content: space-between;
    width: 500px;
    margin-left: -20px;
}
.form_questions_rank2.form_questions_places {
    margin-bottom: 90px;
    width: 100%;
}
.form_questions_rank2.form_questions_places .wpcf7-list-item-label{
    width: 24%;
    height: 50px;
    cursor: pointer;
}
.form_questions_rank2.form_questions_places .wpcf7-form-control.wpcf7-checkbox{
        width: 100%;
}
.form_questions_rank2.form_questions_places .wpcf7-list-item{
        width: 30%;
        color: #fff;
}
.form_questions_rank2.form_questions_places input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
    // background-color: #1A1924;
    width: 100%;
    position: absolute!important;
}

.wpcf7-form-control.wpcf7-checkbox {
display: flex;
    justify-content: space-between;
    width: 90%;
    margin-left: -15px;
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

    <section id="main-content" class="main-content">
    <div style="
    padding-top: 70px;
    padding-bottom: 70px;
">
    
    
        <div class="container">
            <div class="grid-2 grid-bonus">
                <div class="grid-bonus__content">


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
    color: #fff;
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
}
        }
    @media (min-width: 320px) and (max-width: 767px) {
    .form_questions_rank2.form_questions_places .wpcf7-list-item {
    width: 100%;
    color: #fff;
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