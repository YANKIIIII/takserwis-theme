<?php
/**
  * Template Name: vacancie
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>
<style>
        #advantages_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
    margin-bottom: -30px;
}
#services_section {
    background-color: #fff;
    padding: 35px 0 0px 0;
    padding-bottom: 30px;
}
.vacancies_img_wrapper_1 {
    bottom: -40px;
    position: absolute;
    right: 50px;
    width: 525px;
    height: 204px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
    font-size: 60px;
}
.vacancies_img_wrapper {
    position: relative;
}
.vacancies_img_wrapper_2 {
    bottom: 128px;
    position: absolute;
    right: 128px;
    z-index: 9;
    width: 340px;
    height: 68px;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-weight: 700;
font-size: 28px;
}
#main-section .grid-vacancie {
    display: grid;
    gap: 30px;
    padding-right: 69px;
    grid-template-columns: auto 26%;
    align-self: auto;
}
#main-section .grid-vacancie .grid-bonus__content {
    align-self: auto;
}
#main-section.grid_vacancie {
    background-color: #ffffff;
}
.vacancie_price {
    font-weight: 700;
    font-size: 32px;
    line-height: 1em;
    color: #ff9d42;
        margin-bottom: 10px;
}
.vacancie_city {
    font-weight: 700;
    font-size: 14px;
    color: rgba(26, 25, 36, 0.72);
    display: flex;
    margin-bottom: 30px;
}
.vacancie_city img{
    margin-right: 7px;
}
.vacancie_contacts_wrapper {
    border-radius: 18px;
    padding: 20px;
    background: #f4f6f8;
    margin-bottom: 40px;
}
.vacancie_price_wrapper {
    margin-bottom: 20px;
}
.vacancie_contacts_button_wrapper {
    margin-bottom: 20px;
}
.vacancie_contacts_button_wrapper button {
    width: 100%;
}
.vacancie_city_contacts_tel a, .vacancie_city_contacts_item a{
    font-weight: 700;
font-size: 14px;
color: rgba(26, 25, 36, 0.72);
}
.vacancie_city_contacts_tel, .vacancie_city_contacts_item{
    display: flex;
    margin-bottom: 10px;
}
.vacancie_city_contacts_tel img, .vacancie_city_contacts_item img{
    margin-right: 7px;
    height: 100%;
}
.vacancie_map{
        list-style: circle;
        padding-left: 15px;
        margin-top: 10px;
}
.vacancie_map li{
        margin-bottom: 10px;
}
.vacancie_map_heading{
        font-weight: 700;
        margin-bottom: 10px;
}
.vacancie_content{
        margin-bottom: 20px;
        margin-top: 20px;
}
.popmake form .vacancie_input, .popmake form textarea {
    background: #f4f6f8;
    border-radius: 8px;
    padding: 15px;
    border: none;
    color: rgba(26, 25, 36, .5);
    width: 100%;
    margin-bottom: 20px;
}

.popmake form {
    display: block;
}

.popmake form .wpcf7-submit {
    background: #ff9d42;
    color: #fff;
    /* border-radius: 8px; */
    /* transition: background-color .6s, color .6s; */
    margin-top: 0px;
    /* height: 46px; */
    width: auto;
    margin-top: 10px;
    margin-bottom: 15px;
    padding-left: 50px;
    padding-right: 50px;
    cursor: pointer;
}
.vacancie_form_title {
    font-weight: 700;
    font-size: 25px;
    color: #1a1924;
    display: flex;
    align-items: baseline;
}
.vacancie_form_title input{
    width: 100%;
    font-weight: 700;
    font-size: 25px;
    color: #1a1924;
}
.vacancie_form_text{
    font-weight: 400;
    font-size: 14px;
    color: #1a1924;
    margin-bottom: 20px;
}
#upload-file {
    opacity:0;
    display: none;
}
#upload-btn {
    padding: 10px;
    position: relative;
    margin-left: 20px;
    color: #ff9d42;
}

#upload-btn::before {
    content: "";
    position: absolute;
    left: -20px;
    /* bottom: 0; */
    color: #FBFDFD;
    background-repeat: no-repeat;
    width: 20px;
    height: 25px;
    background-image: url(/wp-content/uploads/2024/10/akar-icons_attach.png);
    top: 5px;
    font-size: 36px;
}

@media (min-width: 320px) and (max-width: 767px) {

    #main-section .grid-vacancie {
        grid-template-columns: repeat(1, 1fr);
    }
    .vacancie_form_title {
    flex-direction: column;
}
    .vacancie_form_title input {
    width: 100%;
    font-weight: 700;
    font-size: 25px;
    color: #1a1924;
    padding: 0px;
}
.vacancie_city_contacts_tel img, .vacancie_city_contacts_item img{
    height: 100%;
}
 }




</style>
<main class="main">

<section id="title_section" class="title_section">
<div class="container">  
    
<?php 
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' );
}
?>
<h1><?php the_title(); ?></h1>

</div>
    </section>

    <section id="main-section" class="section-grid grid_vacancie">
        <?php $vacancie = get_field('vacancie' );
        $vacancie_price = $vacancie['vacancie_price'];
        $vacancie_employment = $vacancie['vacancie_employment'];
        $vacancie_city = $vacancie['vacancie_city'];
        $vacancie_button = $vacancie['vacancie_button'];
        $vacancie_phone = $vacancie['vacancie_phone'];
        $vacancie_phone_tag_tel = $vacancie['vacancie_phone_tag_tel'];
        $vacancie_email = $vacancie['vacancie_email'];
        $vacancie_working_hours = $vacancie['vacancie_working_hours'];
        $vacancie_adresses_heading = $vacancie['vacancie_adresses_heading'];
        $vacancie_adress_single = $vacancie['vacancie_adress_single'];
        ?>
        <div class="container">
            <div class="grid-2 grid-vacancie">
            
                <div class="grid-bonus__content">


<div class="vacancie_content">
<?php 
the_content();
?>
</div>
                
<div class="">
        <button class="popmake-1605 popmake-1613 button contrast"><?php echo $vacancie_button; ?></button>
    </div>

    
                    
                </div>
                <div class="right-col">
<div class="vacancie_contacts_wrapper">
    <div class="vacancie_city"><img src="/wp-content/uploads/2024/10/carbon_location.svg" alt=""><?php echo $vacancie_city; ?></div>
    <div class="vacancie_price_wrapper">
    <div class="vacancie_price"><?php echo $vacancie_price; ?></div>
    <span class="vacancie_price_text"><?php echo $vacancie_employment; ?></span>
    </div>

    <div class="vacancie_contacts_button_wrapper">
        <button class="popmake-1605 popmake-1613 button contrast"><?php echo $vacancie_button; ?></button>
    </div>

    <div class="vacancie_city_contacts">
<div class="vacancie_city_contacts_tel"><img src="/wp-content/uploads/2024/10/mdi_phone-outline.svg" alt=""><a href="tel:<?php echo $vacancie_phone_tag_tel; ?>"><?php echo $vacancie_phone; ?></a></div>
<div class="vacancie_city_contacts_item"><img src="/wp-content/uploads/2024/10/material-symbols_mail-outline.svg" alt=""><a href="mailto:<?php echo $vacancie_email; ?>"><?php echo $vacancie_email; ?></a></div>
<div class="vacancie_city_contacts_item"><img src="/wp-content/uploads/2024/10/mingcute_time-line.svg" alt=""><?php echo $vacancie_working_hours; ?></div>
    </div>
</div>

<div>
    <div class="vacancie_map_heading"><?php echo $vacancie_adresses_heading; ?></div>
    <div class=""><iframe src="https://www.google.com/maps/d/embed?mid=1Yox5AiQMajNJaA35g11gK0Ayjt0wACM&ehbc=2E312F&noprof=1" width="100%" height="300"></iframe></div>
    
    
    <ul class="vacancie_map">
    <?php foreach ($vacancie_adress_single as $key => $item) { ?>
    <li><?php echo $item['vacancie_adress_single_item']; ?></li>
                
                <?php } ?>

    </ul>
</div>


                </div>
            </div>
        </div>
    </section>

    

    


    

</main>

<?php
  $my_lang = pll_current_language(); // определяем текущий язык
  
  if ( $my_lang == 'ru' ) {
    ?>
    <script>
window.onload = () =>{
    const uploadFile = document.getElementById("upload-file");
    const uploadBtn = document.getElementById("upload-btn");
    const uploadText = document.getElementById("upload-text");

    uploadBtn.addEventListener("click", function(event){
        event.preventDefault();
        uploadFile.click();
    });

    uploadFile.addEventListener("change", function(event){
        event.preventDefault();
        if(uploadFile.value){
            
            uploadText.innerText = uploadFile.value.match(/[\/\\]([\w\d\s\.\-(\)]+)$/)[1];
        }else {
            uploadText.innerText = "Файл не выбран";
        }
    });
}

</script>
    <?php
  }
  elseif ( $my_lang == 'pl' ) {
    ?>
    <script>
window.onload = () =>{
    const uploadFile = document.getElementById("upload-file");
    const uploadBtn = document.getElementById("upload-btn");
    const uploadText = document.getElementById("upload-text");

    uploadBtn.addEventListener("click", function(event){
        event.preventDefault();
        uploadFile.click();
    });

    uploadFile.addEventListener("change", function(event){
        event.preventDefault();
        if(uploadFile.value){
            
            uploadText.innerText = uploadFile.value.match(/[\/\\]([\w\d\s\.\-(\)]+)$/)[1];
        }else {
            uploadText.innerText = "Nie wybrano pliku";
        }
    });
}

</script>
    <?php
  }
  
?>





<?php get_footer(); ?>