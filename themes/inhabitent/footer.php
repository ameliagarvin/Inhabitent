<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
  
			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wood" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/images/dark-wood.png')">
	 <div class="site-info">
	 <div class= "contact-info">
    <p>CONTACT INFO</p>
			<p><i class="fa fa-envelope-o"aria-hidden="true"><a href="#">info@inhabitent.com</a></i></p> 
			<i class="fa fa-phone"aria-hidden="true"><a href="#">778-456-7891</a></i>
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

		<div class="inhabitent-logo" ><img src="<?php echo get_stylesheet_directory_uri();?>/images/inhabitent-logo-text.svg">
		</div>

		</div>

		<div class ="copyright">
			<p>COPYRIGHT &copy; 2017 INHABITENT</p>
		</div>
				
				
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
    
	</body>
</html>
