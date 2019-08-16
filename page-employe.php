<?php
/**
 * Template Name: Page Employer
 */
get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php $specializationHeroImage = get_field('hero_image') ?>

            <section class="title_page" style="background-image: url(<?php echo $specializationHeroImage['url'] ?>);"></section>

            <section class="container hero_info">
                <h1 class="hero-title"><?php the_field('hero-title') ?></h1>  <h1 class="dynamic_title"><?php wp_title($sep = '', $display = true, $seplocation = ''); ?></h1>

                <?php the_field('hero-info') ?>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
