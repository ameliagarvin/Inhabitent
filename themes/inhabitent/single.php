<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
		
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>
		
			<div id="social-media-journal">
			<button type="button" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>like</button>
	 		<button type="button" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i>tweet</button>
	 		<button type="button" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i>pin</button>
		</div>

			<?php the_post_navigation(); ?>
      
	

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :?>
					<div class="post-a-comment"><h1>post a comment</h1><div>
					<div class="join-discussion"><p>Want to join the discussion? Feel free to contribute!</p></div>
					<?php echo do_shortcode( '[contact-form-7 id="140" title="Comment"]' ); 
					  
				endif;
			 ?>

		<?php endwhile; // End of the loop. ?>



	
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
