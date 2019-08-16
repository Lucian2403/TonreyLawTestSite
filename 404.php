<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TorneyLaw
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! Pagina niet gevonden.', 'torneylaw' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Integer sit amet elementum nunc, at rutrum nisi. In at tellus lacinia, rhoncus turpis vel, consequat dui.', 'torneylaw' ); ?></p>

					<?php
					get_search_form();

					$errorImage = get_field('error_image', 'option') ?>
                    <section class="error_page_image" style="background-image: url(<?php echo $errorImage['url'] ?>" );></section>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
