<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BEWi
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="row">
		<?php
		if ( have_posts() ) :


			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

				

			<?php endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			<div class="col-lg-4">
		<?php  get_sidebar(); ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
