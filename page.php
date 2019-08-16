<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TorneyLaw
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php $overonsHeroImage = get_field('hero_image') ?>

            <section class="title_page" style="background-image: url(<?php echo $overonsHeroImage['url'] ?>);">
                <h1>
                    <?php wp_title($sep = '', $display = true, $seplocation = ''); ?>
                </h1>
            </section>

            <section class="page_info">
                <div class="page_main_info">
                    <?php the_field('main_info'); ?>
                    <div class="btn_page">
                        <a class="button button_primary" href="<?php the_field('button_url') ?>"><?php the_field('button_text') ?></a>
                    </div>
                </div>
            </section>


<!--            EMPLOYER SLIDER WITH REPEATER-->
            <section class="slide-employers">

<!--                ROW REPEATER-->
                <?php
                // check if the repeater field has rows of data
                if( have_rows('row_employer') ): while ( have_rows('row_employer') ) : the_row(); ?>
                        <ul class="owl-carousel owl-two employers-slide">

<!--                        EMPLOYER REPEATER-->
                <?php if (have_rows('employer')): while (have_rows('employer')) : the_row(); ?>
                            <li class="slide-employers__main">
                                <a href="<?php the_sub_field('employer_link') ?>">
                                    <div class="profile-pic">
                                        <img src="<?php  the_sub_field('profile_pic') ?>" alt="image employer" );>
                                    </div>
                                    <div class="full-name">
                                        <h3>
                                            <?php  the_sub_field('name') ?>
                                        </h3>
                                    </div>
                                </a>

<!--                                SPECIALIZATION REPEATER-->
                                <div class="specialization">
                                    <?php
                                    if(have_rows('specializations')) : while(have_rows('specializations')) :the_row();

                                        $page_slug = get_sub_field('specialization');

                                        $page = url_to_postid($page_slug); ?>
                                        <h4>
                                            <a href="<?php echo $page_slug; ?>">
                                                <?php echo get_the_title($page); ?>
                                            </a>

                                        </h4>
                                    <?php endwhile;
                                    endif?>
                                </div>

                                <div class="bio">
                                    <p>
                                        <?php  the_sub_field('bio') ?>
                                    </p>
                                </div>

<!--                                SOCIAL MEDIA GROUP REPEATER-->
                                <div class="social-media">
                                    <?php if( have_rows('social_media') ):
                                        while( have_rows('social_media') ): the_row();

                                            // vars
                                            $facebook = get_sub_field('facebook');
                                            $twitter  = get_sub_field('twitter');
                                            $linkedin = get_sub_field('linkedin');
                                            ?>
                                        <a class="social-media__link" href="<?php echo $facebook; ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
                                        <a class="social-media__link" href="<?php echo $twitter;  ?>"  target="_blank"> <i class="fab fa-twitter"></i> </a>
                                        <a class="social-media__link" href="<?php echo $linkedin; ?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                            <?php endwhile; else : // no rows found
                    endif; ?>
                        </ul>
                        <?php endwhile; else : // no rows found
                endif; ?>
            </section>

<!--            TEXT SLIDER & PARALLAX SCROLL-->
            <?php $parallaxImage = get_field('image_parallax')?>
            <section class="text_slider" style="background-image: linear-gradient(to bottom, rgba(0,0,0, .8), rgba(0,0,0, 0)), url(<?php echo $parallaxImage['url'] ?>" );>
<!--                Text Slide Repeater-->
                <ul class="owl-carousel owl-three info_slide">
                    <?php if (have_rows('text_slider')) : while (have_rows ('text_slider')) : the_row(); ?>
                    <li>
                       <?php
                        the_sub_field('info_slide');
                      ?>
                    </li>
                    <?php
                      endwhile; else: //no rows found
                        endif;
                        ?>
                </ul>
            </section>


            <section class="specialisaties">
                <div class="info_slider">
                    <?php the_field('info_slider'); ?>
                </div>

<!--                IMAGE SPECIALIZATION SLIDER-->
                <div class="image_slider">
                    <?php if(have_rows('row_images')):
                        while (have_rows('row_images')) : the_row(); ?>
                            <ul class="owl-carousel owl-two page_slides">
                                <?php if(have_rows('image_slider')):
                                while(have_rows('image_slider')): the_row();
                                    // vars
                                    $imagePic  = get_sub_field('image_pic');
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
                                <?php endwhile; else: // no rows found
                                endif; ?>
                            </ul>
                    <?php endwhile; else : // no rows found
                    endif; ?>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
