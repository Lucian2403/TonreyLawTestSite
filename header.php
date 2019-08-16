<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TorneyLaw
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
            endif; ?>
		</div>
		<!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

            <a class="menu_link"  href="#nav-mobile">
                <div class="hamburger" id="#my-menu">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </a>

			<?php
			wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
            ) );
			?>

		</nav><!-- #site-navigation -->
        <!--            Side Navigation Bar-->
<!--        <div id="side-navigation" class="side_nav">-->
<!--            --><?php
//            wp_nav_menu( array(
//                'theme_location' => 'menu-1',
//                'menu_id'        => 'primary-menu',
//                'menu_class'     => 'navbar'
//            ) );
//            ?>
<!--            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
<!--        </div>-->
<!---->
<!--        <a onclick="openNav()" id="open-menu"> <i class="fas fa-bars"></i> </a>-->

        <aside class="header_icons">
            <div class="icons search_icon">
                <i class="fas fa-search"></i>
                <?php get_search_form(); ?>
            </div>
            <div class="icons phone_icon">
                <a href="tel:+<?php the_field('phone_number', 'option') ?>">
                    <i class="fas fa-phone"></i>
                </a>
            </div>
        </aside>
	</header><!-- #masthead -->

    <!--MMENU DIV-->
    <div id="nav-mobile"></div>

	<div id="content" class="site-content">
