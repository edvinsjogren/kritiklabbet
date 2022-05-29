<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BEWi
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="row" role="main">

      <?php get_sidebar(); ?>
      <?php
      if ( have_posts() ) : ?>
        <div class="col-lg-8 col-xs-12 m-t-2">
        <div class="row">
        <?php
        /* Start the Loop */
        while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?> >
            <h2><?php the_title();?></h2>
            <?php the_content();?>
          </article>
        <?php endwhile;

      else : ?>
        </div>
        </div>
      <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
