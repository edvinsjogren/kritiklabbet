<?php
/**
 * Created by brainforest
 */
?>
<?php
$post_id = get_the_ID();
$categories = get_the_category();
$keySlug = wp_list_pluck($categories,'term_id');

$args = array(
  'posts_per_page'   => 6,
  'post_type'        => 'post',
  'orderby'          => 'rand',
  'order'            => 'DESC',
  'exclude'          => $post_id,
  'tax_query' => array(
    array(
      'taxonomy' => 'category',
      'field' => 'term_id',
      'terms' => $keySlug,
    )
  )
);

$posts = get_posts($args); ?>
<div class="row m-t-2">
  <div class="col-xs-12">
    <h3>Relaterande poster</h3>
  </div>
</div>
<div class="row m-t-2">
  <?php foreach ($posts as $post): setup_postdata($post); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-md-6 col-lg-4 m-b-2'); ?> >
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
  <?php endforeach; ?>
</div>
