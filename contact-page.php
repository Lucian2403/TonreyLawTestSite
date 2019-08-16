<?php
/**
 * Template Name: Contact
 */

get_header();

$imageContact = get_field("contact_page_image");

?>
    <section class="contact_page_image" style="background-image: url(<?php echo $imageContact['url'] ?>" );>
        <h1>
            <?php wp_title($sep = '', $display = true, $seplocation = ''); ?>
        </h1>
    </section>

<section class="contact_page">
    <?php
    $contact_form = get_field('contact_form');
    echo do_shortcode($contact_form); ?>

    <div class="side_info">
        <div class="information_content">
            <?php  the_field('informatie'); ?>
        </div>

        <div class="social_media">
            <h1><?php _e('Social Media') ?> </h1>
            <div class="social_media_icon">
                <a class="footer_icons_link" href="<?php the_field('facebook','option') ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
                <a class="footer_icons_link" href="<?php the_field('twitter','option') ?>" target="_blank"> <i class="fab fa-twitter"></i> </a>
                <a class="footer_icons_link" href="<?php the_field('linkedin','option') ?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
            </div>
        </div>

    </div>

</section>









<?php
get_footer();