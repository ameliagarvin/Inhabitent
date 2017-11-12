<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
  
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
    
		
  <footer>
		<div class="wood">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/dark-wood.png">;
    </div>

		<div class= "contact-info">
    <p>CONTACT INFO</p>
			<i class="fa fa-envelope-o"aria-hidden="true"><a href="#">info@inhabitent.com</i> 
			<i class="fa fa-phone"aria-hidden="true"><a href="#">778-456-7891</i>
			<i class="fa fa-facebook-square"aria-hidden="true"></i>
			<i class="fa fa-twitter-square"aria-hidden="true"></i>
			<i class="fa fa-google-plus-square"aria-hidden="true"></i>
		</div>

		<div class= "business-hours">
			<p>BUSINESS HOURS</p>
			<ul>
				<li><span class="hours">Monday-Friday:</span>9am to 5pm</li>
				<li><span class="hours">Saturday:</span>10am to 2pm</li>
				<li><span class="hours">Sunday:</span>Closed</li>
			</ul>
		</div>

		<div class ="copyright">
			<p>COPYRIGHT &copy; 2017 INHABITENT</p>
		</div>
	</footer>	

	</body>
</html>
