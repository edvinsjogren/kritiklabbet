<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brainforest
 */

?>

</div> <!-- /#content .container -->
</main> <!-- /site-content -->
<footer>
  <div class="container site-footer m-b-1 m-t-2">
    <div class="row">
      <div class="col-xs-12 col-lg-4 col-md-4">

      </div>
      <div class="col-xs-12 col-lg-4 col-md-4">
        <?php dynamic_sidebar( 'footer_lvl_1' ); ?>
      </div>
      <div class="col-xs-12 col-lg-4 col-md-4">
        <h2>K-vitter</h2>
        <a class="twitter-timeline" href="https://twitter.com/kritiklabbet" data-height="400"
           data-chrome="nofooter noheader">
        </a>
        <script async src="//platform.twitter.com/widgets.js" tweet-limit="1" charset="utf-8"></script>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.validate.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/tether.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/slick.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/google-maps.js"></script>
<script src="<?php bloginfo('template_url'); ?>/scripts/main.min.js"></script>
</div>
</body>
</html>
