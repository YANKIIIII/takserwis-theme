<?php
/**
  * Template Name: vacancie
 * Template Post Type: page
 */
global $post;
?>
<?php get_header(); ?>

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