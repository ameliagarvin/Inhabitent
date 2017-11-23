<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
 
 <div class="shop-stuff">
              <h2>shop stuff</h2>
            </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<!-- .page-header -->
    <?php
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
                   'posts_per_page' => 16,
							 ) );
							 
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
            ?>
               <div class="product-type-blocks">

                  <?php foreach ( $terms as $term ) : ?>

                     <div class="product-type-block-wrapper">
                       
                        
                        <p><a href="<?php echo get_term_link( $term ); ?>" class="btn">
                        <?php echo $term->name; ?> 
                      </a></p>
                     </div>

                  <?php endforeach; ?>

               </div>
               
            <?php endif; ?>

           
      <?php /* Start the Loop */ ?>
      <div class="product-container">
      <ul>
			<?php while ( have_posts() ) : the_post(); ?>

			

<li class="page-header">
				<?php
         
          

           if ( has_post_thumbnail() ) : ?>
           

           <a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail( 'large'); ?></a>


        <?php endif; ?>
     
        <div class="product-name">
        <?php the_title( sprintf( '<h2 class="entry-title">', esc_url( get_permalink() ) ),'......', '</h2>' ) ; 
        ?>
        <?php echo CFS()->get('price'); ?>
        </div>
               </li>

               
      <?php endwhile; ?>
               </ul>
               </div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

