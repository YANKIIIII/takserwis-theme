<?php

$id = get_the_ID();
$other_deals = get_field('other_deals', get_the_ID());
$other_deals_show_block = !empty($other_deals['show_block']);
$other_deals_title = !empty($other_deals['title']) ? $other_deals['title'] : 'Другие Акции';
$other_deals_items = !empty($other_deals['deals']) ? $other_deals['deals'] : [];

$deals = get_field('deal_list');
$class = isset($args['class']) ? $args['class'] : '';
$deals_query = get_query_var('deals_query');

if (!empty($deals_query->posts)) {
    $other_deals_items = $deals_query->posts;
}

if ($other_deals_show_block && !empty($other_deals_items)) :
?>
    <section id="<?php echo esc_attr($class); ?>" class="other_deals">
        <div class="container">
            <h2 class="h3"><?php echo esc_html($other_deals_title); ?></h2>

            <?php
            $filtered_deals = array_filter($other_deals_items, function ($other_deal) {
                // var_dump($other_deal);
                return ($other_deal->ID !== get_the_ID() && get_post_status($other_deal) === 'publish');
            });

            $ul_class = '';
            $count = count($filtered_deals);

            if ($count % 5 === 0) {
                $ul_class = 'class="odd_5"';
            } elseif ($count % 2 === 0) {
                $ul_class = 'class="even"';
            } else {
                $ul_class = 'class="odd"';
            }
            ?>

            <ul <?php echo $ul_class; ?>>
                <?php
                if (!empty($filtered_deals)) :
                    foreach ($filtered_deals as $other_deal) :
                        $group = get_field('options_deals', $other_deal->ID);
                        $choose_custom = get_field('choose_custom', $other_deal->ID);
                        $other_deals_custom_img = $choose_custom && !empty($group['custom_img']) ? $group['custom_img'] : '';
                        $other_deals_color_text = $choose_custom && !empty($group['color_text']) ? $group['color_text'] : '';
                        $other_deals_text = $choose_custom && !empty($group['text']) ? $group['text'] : '';
                        $other_deals_title = $choose_custom && !empty($group['title']) ? $group['title'] : '';
                ?>
                        <li>
                            <a style="background-image: url('<?php
                                                                if (!empty($other_deals_custom_img)) {
                                                                    echo esc_url($other_deals_custom_img);
                                                                } else {
                                                                    echo esc_url(get_the_post_thumbnail_url($other_deal->ID));
                                                                } ?>');" href="<?php echo esc_url(get_permalink($other_deal)); ?>">
                                <div class="content">

                                    <?php if (!empty($other_deals_title) || $other_deal->post_title) : ?>
                                        <h3 class="<?php echo esc_attr($other_deals_color_text); ?>">
                                            <?php
                                            echo esc_html(!empty($other_deals_title) ? $other_deals_title : $other_deal->post_title);
                                            ?>
                                        </h3>
                                    <?php endif; ?>

                                    <?php if (!empty($other_deals_text) || $other_deal->post_excerpt) : ?>
                                        <p class="<?php echo esc_attr($other_deals_color_text); ?>">
                                            <?php
                                            echo esc_html(!empty($other_deals_text) ? $other_deals_text : $other_deal->post_excerpt);
                                            ?>
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </a>
                        </li>
                <?php endforeach;
                endif;
                ?>
            </ul>
        </div>
    </section>
<?php endif; ?>