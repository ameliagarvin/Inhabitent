<?php
/**
* Template Name: About Page
*
 * @package RED_Starter_Theme
 */

 get_header(); ?>
 

 
   <div id="primary" class="content-area"> 

   <header class="entry-header custom-hero">
          <div class="container">
            <?php the_title( '<h1 class="entry-level">', '</h1>'); ?>
          </div>
        </header>
        
     <main id="main" class="site-main" role="main">

    

      <article id="post-<? the_ID(); ?>" <?php post_class(); ?>>
      

        <div class="container">
          <div class="entry-content">
            <h2>Our Story</h2>
            <?php echo CFS()->get( 'about_our_story' ); ?>

            <h2>Our Team</h2>
            <?php echo CFS()->get( 'about_our_team');?>
          </div>
        </div>
       </article>

      </main>
    </div>
  <?php get_footer(); ?>        
 