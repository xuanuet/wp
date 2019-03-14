<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

<!--	<aside class="widget-area" role="complementary" aria-label="--><?php //esc_attr_e( 'Footer', 'twentynineteen' ); ?><!--">-->
<!--		--><?php
//		if ( is_active_sidebar( 'sidebar-1' ) ) {
//			?>
<!--					<div class="widget-column footer-widget-1">-->
<!--					--><?php //dynamic_sidebar( 'sidebar-1' ); ?>
<!--					</div>-->
<!--				--><?php
//		}
//		?>
<!--	</aside><!-- .widget-area -->

		<div class="ft__logo">
			<img src="<?php echo(get_template_directory_uri()."/images/145x35.png") ?>" alt="logo">
		</div>
		<div class="container">
			<div class="ft__info">
				<div class="ft__info--left">
					<h3>ダミーダミーダミーダミー</h3>
					<p>ダミーダミーダミーダミーダミーダミーダミーダミー</p>
				</div>
				<div class="ft__info--right">
					<div class="ft__menu">
						<h3>ダミーダミー</h3>
					</div>
					<div class="ft__menu">
						<h3>ダミーダミー</h3>
						<ul>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
						</ul>
					</div>
					<div class="ft__menu">
						<h3>ダミーダミー</h3>
					</div>
					<div class="ft__menu">
						<h3>ダミーダミー</h3>
						<ul>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
							<li><a href="#">ダミーダミー</a></li>
						</ul>
					</div>
					<div class="ft__contact">
						<a class="btn" href="#">お問い合わせフォーム</a>
						<div class="box__contact">
							<p>お問い合わせフォーム</p>
							<p>0568-47-0210</p>
							<p>ダミーダミーダミーダミー</p>
							<p>ダミーダミーダミーダミー</p>
						</div>
					</div>
				</div>
			</div>
			<div class="ft__copyright">
				<p>ダミーダミーダミーダミー</p>
			</div>
		</div>



<?php endif; ?>
