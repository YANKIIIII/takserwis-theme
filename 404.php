<?php
/**
 * 404 template
 *
 * @author   <Author>
 * @version  1.0.0
 * @package  <Package>
 */

get_header();

$p404 = get_field('404', 'option');
?>
<div class="error_block" style="background-image:url(<?php echo $p404['background_image']; ?>);">
    <div class="wrapper">
        <div class="error_info">
            <div class="_suptitle">
                <?php echo $p404['suptitle']; ?>
            </div>
            <div class="error_code">
                404
            </div>
            <div class="_message">
                <?php echo $p404['message']; ?>
            </div>
            <a href="<?php echo pll_home_url(); ?>" class="_button button contrast">
                <?php echo $p404['button_text']; ?>
            </a>
        </div>
    </div>
</div>
<?php
get_footer();