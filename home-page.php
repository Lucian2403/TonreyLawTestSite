<?php
/**
 * Template Name: Home Page
 */

get_header();

$imageWoman = get_field("image_woman");
$imageSuit  = get_field("image_suit");
$imagePen   = get_field("image_pen");
$imageTeam  = get_field("image_team");

//echo '<pre>';
//var_dump($imageWoman);
//echo '</pre>';

?>
    <ui class="home_images_grid">
        <li class="home_image woman">
            <img class="image_woman" src="<?php echo $imageWoman['url']; ?>" alt="image woman" );>
        </li>
        <li class="home_image suit">
            <img class="image_suit" src="<?php echo $imageSuit['url']; ?>" alt="image suit" );>
        </li>
        <li class="home_image pen">
            <img class="image_pen" src="<?php echo $imagePen['url']; ?>" alt="image pen" );>
        </li>
        <li class="home_image team">
            <img class="image_team" src="<?php echo $imageTeam['url']; ?>" alt="image team" );>
        </li>
    </ui>

    <section class="container  home_info">
        <div class="main_info">
            <?php the_field('main_info'); ?>
            <div class="btn_home">
                <a class="button button_primary" href="<?php the_field('button_url') ?>"><?php the_field('button_text') ?></a>
            </div>
        </div>
    </section>

    <section class="parralax_scroll">
        <?php $imageScroll = get_field("image_scroll");?>
        <div class="image_scroll" style="background-image: url(<?php echo $imageScroll['url'] ?>" );></div>
        <h2 class="text_scroll">
            <?php the_field('text_scroll'); ?>
        </h2>
    </section>

    <section class="specialisaties">
        <div class="info_slider">
            <?php the_field('info_slider'); ?>
        </div>
        <div class="image_slider">
            <?php if( have_rows('image_slider') ): ?>
                <ul class="owl-carousel owl-one page_slides">

                    <?php while( have_rows('image_slider') ): the_row();
                        // vars
                        $imagePic = get_sub_field('image_pic');
                        $imageText = get_sub_field('image_text');
                        $imageLink = get_sub_field('image_url');
                        ?>
                        <li class="page_image">
                            <?php if( $imageLink ): ?>
                            <a href="<?php echo $imageLink; ?>">
                                <?php endif; ?>
                                <div class="image_pic">
                                    <img src="<?php echo $imagePic['url']; ?>" alt="<?php echo $imagePic['alt'] ?>" />
                                </div>

                                <?php if( $imageLink ): ?>
                            </a>
                        <?php endif; ?>
                            <h3>
                                <?php echo $imageText; ?>
                            </h3>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>

<?php

get_footer();
?>