<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>
<div class="header__inner">

	<?php if ( has_custom_logo() ) : ?>
		<div class="nav__logo"><h1><?php the_custom_logo(); ?></h1></div>
	<?php endif; ?>
	<?php $blog_info = get_bloginfo( 'name' ); ?>
<!--	--><?php //if ( ! empty( $blog_info ) ) : ?>
<!--		--><?php //if ( is_front_page() && is_home() ) : ?>
<!--			<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--		--><?php //else : ?>
<!--			<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--		--><?php //endif; ?>
<!--	--><?php //endif; ?>


	<div class="gnav">
		<nav class="nav">
			<ul>
				<li><a href="">HOME</a></li>
				<li><a href="">サービスのご案内</a></li>
				<li>
					<span class="parent">当社の取り組み</span>
					<ul class="nav__sub">
						<li><a href="">当社の取り組み</a></li>
						<li><a href="">当社の取り組み</a></li>
						<li><a href="">当社の取り組み</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<div class="nav__btn">
			<a href="#"><img src=" <?php echo(get_template_directory_uri()."/images/btn_recruit.png") ?>" alt=""></a>
		</div>
	</div>
<!--	--><?php //if ( has_nav_menu( 'menu-1' ) ) : ?>
<!--		<nav id="site-navigation" class="main-navigation" aria-label="--><?php //esc_attr_e( 'Top Menu', 'twentynineteen' ); ?><!--">-->
<!--			--><?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'menu-1',
//					'menu_class'     => 'main-menu',
//					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
//				)
//			);
//			?>
<!--		</nav><!-- #site-navigation -->
<!--	--><?php //endif; ?>
<!--	--><?php //if ( has_nav_menu( 'social' ) ) : ?>
<!--		<nav class="social-navigation" aria-label="--><?php //esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?><!--">-->
<!--			--><?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'social',
//					'menu_class'     => 'social-links-menu',
//					'link_before'    => '<span class="screen-reader-text">',
//					'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
//					'depth'          => 1,
//				)
//			);
//			?>
<!--		</nav><!-- .social-navigation -->
<!--	--><?php //endif; ?>
</div><!-- .site-branding -->
