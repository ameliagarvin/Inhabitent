<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    
  <div class="product-image">
		<?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    </div>
		<?php endif; ?>

 	</header><!-- .entry-header -->

	<div class="entry-content">
  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  <p id="price"><?php echo CFS()->get('price'); ?></p>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
    ?>
    		<div class="social-media-journal">
		<button type="button" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i>like</button>
	  <button type="button" class="twitter"><i class="fa fa-twitter" aria-hidden="true">tweet</i></button>
		<button type="button" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true">pin</i></button>
		</div>
    
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->