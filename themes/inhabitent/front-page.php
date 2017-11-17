<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
				<?php get_template_part( 'template-parts/content' ); ?>
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php 
	 $args = array( 'post_type' => 'post', 
	 'order' => 'DES', 
	 'posts_per_page' => 3 );

   $product_posts = get_posts( $args ); // returns an array of posts
  ?>
 
 <section class="product-info container">
            <h2>Shop Stuff</h2>
            <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
							 ) );
							 
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                        <img src="<?php echo get_template_directory_uri() . '/images/' . $term->slug; ?>.svg" alt="<?php echo $term->name; ?>" />
                        <p><?php echo $term->description; ?></p>
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn"><?php echo $term->name; ?> Stuff</a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>
         </section>
 
 
 
 <ul class="stories"> 
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  <li>
	
	<div class="journal-post"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large', '' )?></div>
	<div class="posted-on"><?php red_starter_posted_on(); ?></div> /
	<div class="comments"><a href="<?php the_permalink(); ?>"><?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></div> 
	<div class="journal-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </h2></div>
  <div class ="read-entry"><a href="<?php the_permalink(); ?>">Read entry</a></div>
	</li>

<?php endforeach; wp_reset_postdata(); ?>
</ul>
 


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

<!-- custom loop  -->

