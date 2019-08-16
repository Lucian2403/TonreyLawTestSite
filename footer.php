<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TorneyLaw
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2718.36952861456!2d28.863132707486596!3d47.05260108928245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c97ce333876a39%3A0x58d1223710cf36fc!2sBest4u+Development!5e0!3m2!1sen!2sus!4v1560770289912!5m2!1sen!2sus" width="100%" height="410" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="contact">
                <div class="contact__info">
                    <?php the_field('contact_text', 'option'); ?>
                </div>

                <div class="contact__social-media">
                    <h3>
                        <?php the_field('social_media_text', 'option') ?>
                    </h3>
                    <div class="contact__social-media__icons">
                        <a class="footer_icons_link" href="<?php the_field('facebook','option') ?>" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
                        <a class="footer_icons_link" href="<?php the_field('twitter','option') ?>" target="_blank"> <i class="fab fa-twitter"></i> </a>
                        <a class="footer_icons_link" href="<?php the_field('linkedin','option') ?>" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
                    </div>
                </div>

                <div class="contact__copyright">
                    <p>
                        <?php the_field('contact_copyright', 'option'); ?>
                    </p>
                </div>
            </div>








        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<?php wp_footer(); ?>

</body>
</html>


