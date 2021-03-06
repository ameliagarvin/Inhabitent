<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */


 
get_header(); ?>
 
 <header class="page-header">
            
            <?php
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<h1 class="tax-custom-heading">
<?php echo $term->name;
               $terms = get_terms( array(
                   'taxonomy' => 'product-type',
                   'hide_empty' => 0,
               ) );
               if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) :
                
            ?>
            
               <div class="product-type-description">
              <?php echo category_description(); ?>
               </div>
               
            <?php endif; ?>
            </header>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
   
		<!-- .page-header -->


           
      <?php /* Start the Loop */ ?>
      <div class="product-container">
      <ul>
      
      <?php while ( have_posts() ) : the_post(); ?>
       
		

<li class="poduct-items">
      
<?php
   $args = array();
   $product_posts = get_posts( $args ); // returns an array of posts
?>



<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php /* Content from your array of post results goes here */ ?>
<?php endforeach; wp_reset_postdata(); ?>
        
        
        
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

