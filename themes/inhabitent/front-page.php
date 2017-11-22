<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
    
	<div id="primary" class="content-area">

	<section class="hero">	
  <img src="<?php echo get_template_directory_uri() . '/images/inhabitent-logo-full.svg'; ?>" alt="inhabitent-logo"/>
 </section>
 
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
 
   <h2 class="inhabitent-journal-title">inhabitent journal</h2>
 
	<div class="stories-container"> 
 <ul class="stories"> 
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
  <li class="storie-items">
	
	<div class="journal-post">
	<?php the_post_thumbnail( 'large', '' )?></div>

	<div class="posted-on">
	
	<span class="journal-meta"><?php red_starter_posted_on(); ?> /
	<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> 
	</span>

	<div class="journal-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
  <div class ="read"><a href="<?php the_permalink(); ?>">Read entry</a></div>
	



</li>

<?php endforeach; wp_reset_postdata(); ?>
</ul>
							 </div>							 
 
<!-- Adventures section -->
	<h2 class="inhabitent-adventures">latest adventures</h2>
	
	<div class= "adventure-section">

 
    <div class="canoe">
			<div class="adventure-info">
					<h3>Getting Back to Nature in a Canoe</h3>
				  	<a class="read-more" href ="#">read more</a>
			</div>
		</div>

    <div class="fire">
		  <div class="adventure-info">
					<h3>A Night with Friends at the Beach</h3>
				  	<a class="read-more" href ="#">read more</a>
			</div>
		</div>

    <div class="mountain">
		<div class="mountain-info">
					<h3>Taking in the View at Big Mountain</h3>
				  	<a class="read-more" href ="#">read more</a>
			</div>
		</div>

    <div class="bonfire">
			<div class="bonfire-info">
					<h3>Star-Gazing at the Night Sky</h3>
				  	<a class="read-more" href ="#">read more</a>
		 	</div>
		</div>
		 
</div>
	

<p class="more-adventures">more adventures</p>
		
       
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

<!-- custom loop  -->

