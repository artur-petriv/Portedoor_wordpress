	<footer class="footer">
		<div class="container">
			<div class="footer__container">
				<div class="footer__first">
					<div class="footer__logo"><img class="footer__logo-img" src="<?php the_field('footer_logo'); ?>" alt="Logo white">
						<div class="footer__logo-descr"><?php the_field('footer_logo_descr', 2); ?></div>
					</div>
					<div class="footer__call">
						<div class="footer__call-title">Call us:</div>
						<div class="footer__call-info"><a class="footer__call-phone" href="tel:<?php the_field('phone_number_call', 2); ?>"><?php the_field('phone_number_visible', 2); ?></a>
							<div class="footer__call-work">
								<div class="footer__call-available"><?php the_field('work_time_title', 2); ?></div>
								<div class="footer__call-descr"><?php the_field('work_time_description', 2); ?></div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__offers">
					<div class="footer__offers-title"><?php the_field('footer_offer', 2); ?></div>
					<div class="footer__offers-info">
						<div class="footer__offers-text"><?php the_field('footer_subscription_title', 2); ?></div>
						<form class="footer__offers-form" action="order.php" method="post" id="form-email"><input
								class="footer__offers-email" type="email" name="email" placeholder="<?php the_field('footer_subscription_placeholder', 2); ?>"><button
								class="footer__offers-button" type="submit"><svg class="icon-telegram footer__telegram-svg">
									<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
								</svg></button></form>
						<div class="form-tg__error">*Enter your e-mail address</div>
					</div>
				</div>
				<div class="footer__social">
					<div class="footer__social-mail"><?php the_field('footer_mail', 2); ?></div>
					<div class="footer__social-address"><?php the_field('adres_1', 2); ?><br><?php the_field('adres_2', 2); ?></div>
				</div>
			</div>
		</div>
		<div class="copyright"><?php the_field('copyright', 2); ?></div>
	</footer>
	<script defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvt_XnVi4vJyFx1LhfRK_tm-5F3IPhOj0&amp;language=en"></script>
	<?php wp_footer(); ?>
</body>

</html>