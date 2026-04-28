<?php
/**
  * Template Name: Employee
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

</div>
    </section>

    <section id="employee" class="section-grid">
        <?php $employee = get_field('employee' );
        $employee_img = $employee['employee_img'];
        $employee_job_title = $employee['employee_job_title'];
        ?>
        <div class="container">
            <div class="grid-2 grid-bonus">
            
                <div class="grid-bonus__content">

                    <div class="vacancies_img_wrapper">
                        <img fetchpriority="high" class="grid-bonus__image "
                            src="<?php echo $employee_img['url']; ?>" alt="<?php echo $employee_img['alt']; ?>"
                            width="<?php echo $employee_img['width']; ?>"
                            height="<?php echo $employee_img['height']; ?>">            
                    </div>
                
                    
                    
                </div>
                <div class="right-col">

<h1 class="employee_title">
<?php the_title(); ?>   
    </h1>

<div class="employee_job_title">
<?php echo $employee_job_title; ?>  
                </div>
                <?php 
the_content();
?>
                </div>
            </div>
        </div>
    </section>





</main>
<?php get_footer(); ?>