<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
		
				
			
					
			
				
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
        
				<?php
					get_template_part( 'template-parts/content' );
					
				?> 
 	    <p><?php echo CFS()->get('price'); ?></p>
			  
		

		<?php endwhile; ?>

		<?php else : ?>
		
		<?php endif; ?>

    <div class="social-media">
		<button class="social-media-button"><i class="fa fa-facebook" aria-hidden="true"></i>like</button>
		<button class="social-media-button"><i class="fa fa-twitter" aria-hidden="true">tweet</i></button>
		<button class="social-media-button"><i class="fa fa-pinterest" aria-hidden="true">pin</i></button>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>