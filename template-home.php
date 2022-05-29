<?php
/**
 * Created by brainforest
 * Template Name: Startpage
 */
?>
<?php
get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="row" role="main">
      <?php get_sidebar(); ?>
        <?php
        if ( have_posts() ) : ?>
          <div class="col-lg-9 col-xs-12 m-t-2">
         <?php while ( have_posts() ) : the_post(); ?>
          
           <?php get_template_part("/template-parts/startpage-news");?>

          <?php endwhile; ?>
          </div>

       <?php else :

          get_template_part( 'template-parts/content', 'none' );

        endif; ?>
    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();

