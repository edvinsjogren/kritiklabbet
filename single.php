<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="row" role="main">
			<?php get_sidebar(); ?>
			<?php
			if ( have_posts() ) : ?>
				<div class="col-lg-8 col-xs-12 single-content m-t-2">
					<h2><?php the_title();?></h2>
					<div class="date m-b-2">
						<?php $format = 'F d, Y';
						$date = get_the_date( $format, get_the_ID() );?>
						<?php echo $date; ?>
					</div>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) :?>
							<?php the_post_thumbnail('large', array( 'class' => "img-fluid")); ?>
							<?php if($copy = get_field('copywrite')):?>
								<p class="copywrite"><?php echo $copy;?></p>
							<?php endif;?>
						<?php endif;?>
					<?php endwhile; ?>
					<div class="post-content m-t-2 m-b-1">
						<?php the_content();?>
					</div>
					<div class="category m-b-2">

						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) : ?>
						<strong>Postad under: </strong>
						<?php
							foreach ($categories as $cat):
									echo '<a class="more-link" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
							endforeach;
						endif;
						?>
					</div>
					<div class="share m-b-2">
						<ul>
							<li class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>"></a></li>
							<li><a class="twitter-share-button social-share--twitter" target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title();?>&#32;&#32;<?php echo get_permalink();?>" data-size="small"></a></li>
						</ul>
					</div>
					<?php comments_template(); ?>
					<?php // get_template_part('/template-parts/related-posts');?>
				</div>

			<?php else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

