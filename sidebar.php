<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>
	<div id="secondary" class="secondary col-lg-3">
		<a class="navbar-brand logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img class="img-fluid m-b-2" src="/wp-content/themes/kritiklabbet/images/slussen.jpg" alt="logo" />
			<img class="img-fluid" src="/wp-content/themes/kritiklabbet/images/Logo_Kritiklabbet_Svart.png" alt="logo" />
		</a>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<div class="collapse navbar-toggleable-md" id="js-main-nav">
				<nav id="site-navigation" class="navbar navbar-light bd-navbar" role="navigation">
					<?php
						// Primary navigation menu.
							wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => false,
									'menu_class'        => 'nav navbar-nav text-uppercase',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
							);
					?>
				</nav><!-- .main-navigation -->
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<label>
						<input type="search" class="search-field" placeholder="Sök..." value="" name="s" title="Sök efter:">
					</label>
					<input type="submit" class="search-submit" value="Sök">
				</form>
			</div>
		<?php endif; ?>
	</div><!-- .secondary -->

<?php endif; ?>
