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
				<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-6 col-lg-3 m-b-2'); ?> >
					<?php if ( has_post_thumbnail() ) :?>
						<a href="<?php echo get_the_permalink(get_the_ID());?>">
							<div class="entry-thumbnail-container">
								<?php the_post_thumbnail('lista', array( 'class' => "img-fluid entry-thumbnail")); ?>
							</div>
						</a>
						<div class="date">
							<?php $format = 'F d, Y';
							$date = get_the_date( $format, get_the_ID() );?>
							<?php echo $date; ?>
						</div>
						<div class="news-title"><h5><?php the_title();?></h5></div>
						<div class="nes-excerpt"><?php the_excerpt();?></div>
					<?php endif; ?>
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
