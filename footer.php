	<footer class="footer">
		<div class="container">
			<div class="footer__container">
				<div class="footer__first">
					<div class="footer__logo"><img class="footer__logo-img" src="<?php echo get_bloginfo('template_url'); ?>/assets/img/logo_white.png" alt="Logo white">
						<div class="footer__logo-descr">Modern interior doors from Europe</div>
					</div>
					<div class="footer__call">
						<div class="footer__call-title">Call us:</div>
						<div class="footer__call-info"><a class="footer__call-phone" href="tel:+14509002456">+1 - 450 - 900 -
								2456</a>
							<div class="footer__call-work">
								<div class="footer__call-available">Available 7 days</div>
								<div class="footer__call-descr">Visit only by appointment</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer__offers">
					<div class="footer__offers-title">Exclusive Offers</div>
					<div class="footer__offers-info">
						<div class="footer__offers-text">Sign up to receive exclusive offers and exciting product news</div>
						<form class="footer__offers-form" action="order.php" method="post" id="form-email"><input
								class="footer__offers-email" type="email" name="email" placeholder="Enter your e-mail here..."><button
								class="footer__offers-button" type="submit"><svg class="icon-telegram footer__telegram-svg">
									<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#telegram"></use>
								</svg></button></form>
						<div class="form-tg__error">*Enter your e-mail address</div>
					</div>
				</div>
				<div class="footer__social">
					<div class="footer__social-mail">portedoor2000@gmail.com</div>
					<div class="footer__social-address">41 Chemin du Tremblay,<br>Boucherville, QC J4B 7L6 Canada, Local 202</div>
				</div>
			</div>
		</div>
		<div class="copyright">© Copyright Porte&Door 2020</div>
	</footer>
	<script defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvt_XnVi4vJyFx1LhfRK_tm-5F3IPhOj0&amp;language=en"></script>
	<?php wp_footer(); ?>
</body>

</html>