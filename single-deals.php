<?php
$expire = get_field('expiry_date', get_the_ID());
$deals_info = get_field('deal_more_info', get_the_ID());
$other_deals = get_field('other_deals', get_the_ID());
$thumbnail = get_the_post_thumbnail();
?>

<?php get_header(); ?>
<main class="main">

    <section class="main_section_deals">
        <div class="container">
            <p class="date"><?php if ($expire) : ?> <?php echo pll__('до','do');?> <?php echo $expire;
                                                    endif; ?></p>
            <a href="<?php echo pll_home_url(); ?>"><?php echo pll__('Вернуться на главную','back-home');?><svg
                    width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" rx="6" transform="matrix(-1 0 0 1 32 0)" fill="black" />
                    <path
                        d="M13.5936 16.5279C13.3006 16.235 13.3006 15.7592 13.5936 15.4662L17.3436 11.7162C17.6365 11.4232 18.1123 11.4232 18.4053 11.7162C18.6982 12.0092 18.6982 12.485 18.4053 12.7779L15.185 15.9982L18.4029 19.2186C18.6959 19.5115 18.6959 19.9873 18.4029 20.2803C18.11 20.5732 17.6342 20.5732 17.3412 20.2803L13.5912 16.5303L13.5936 16.5279Z"
                        fill="white" />
                </svg>

            </a>
        </div>
        <div class="container container-deal">
            <div class="content">
                <?php if (!empty(get_the_title())) { ?><h1 class="h1"><?php the_title(); ?></h1><?php } ?>
                <?php if (!empty(get_the_content())) { ?><div class="content_text"><?php the_content(); ?></div>
                <?php } ?>

                <?php
                if ($deals_info) {
                    foreach ($deals_info as $item) : ?>
                <div class="deals_info">
                    <h3><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20ZM12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM11 11V17H13V11H11ZM11 7H13V9H11V7Z"
                                fill="#1A1924" />
                        </svg><?php echo $item['title']; ?></h3>
                    <div class="text"><?php echo $item['text']; ?></div>
                </div>
                <?php endforeach;
                } ?>
            </div>
            <div class="img_wrapp"><?php if ($thumbnail) {
                                        echo $thumbnail;
                                    } ?>
                <?php if ($expire) : ?>
                <p class="date mob"><?php echo pll__('до','do');?> <?php echo $expire; ?></p>
                <?php endif; ?>
            </div>
        </div>

    </section>
    <?php
    $deals = array(
        'post_type' => 'deals',
        'posts_per_page' => 6,
    );

    $deals_query = new WP_Query($deals);
    ?>

    <?php
    set_query_var('deals_query', $deals_query);
    get_template_part('template_parts/deals', 'block');
    ?>


</main>
<?php get_footer(); ?>