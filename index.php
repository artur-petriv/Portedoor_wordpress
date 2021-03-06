<?php get_header(); ?>

	<main class="main">
		<div class="bar">
			<div class="bar-wrap">
				<div class="bar__title"><?php the_field('header_bar_title'); ?></div>
			</div>
		</div>
		<div class="main__galerry owl-carousel owl-main">

			<!-- Render category 'main_slider' posts -->
			<?php
				$posts = get_posts( array(
					'numberposts' => -1,
					'category_name'    => 'main_slider',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				) );

				foreach( $posts as $post ) :
					setup_postdata($post);
					?>
						<div class="main__item">
							<div class="main__parts">
								<div class="main__part main__part-first">
									<div class="main__left">
										<div class="main__content">
											<h2 class="main__title"><?php the_title(); ?></h2>
											<div class="main__list">
												<div class="main__li"><?php the_field('item-descr-1'); ?></div>
												<div class="main__li"><?php the_field('item-descr-2'); ?> <span class="expire"></span></div>
											</div>
											<div class="main__button button_c btn"><?php the_field('button-text'); ?></div>
										</div>
									</div>
								</div>
								<div class="main__part">
									<div class="main__right">
										<div class="main__image"><img class="main__img" src="<?php the_field('slider_img'); ?>" alt="Standart"></div>
									</div>
								</div>
							</div>
						</div>
				<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
			<!-- End Render category 'main_slider' posts -->

		</div>
	</main>

	<section class="advantage" id="adv">
		<div class="container">
			<div class="section__head">
				<h3 class="section__title"><?php the_field('header_bar_title_2'); ?></h3>
			</div>
			<div class="advantage__list owl-carousel owl-adv">
				<div class="advantage__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">Most competitive prices in eastern Canada</div>
								</div>
								<div class="bs__item">
									<div class="advantage__wrap">
										<div class="advantage__image"><svg class="advantage__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#money"></use>
											</svg></div>
										<div class="advantage__text">100% Best Price</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="advantage__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">Made in Europe, with the highest quality standards of technology and
										materials.</div>
								</div>
								<div class="bs__item">
									<div class="advantage__wrap">
										<div class="advantage__image"><svg class="advantage__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#quality"></use>
											</svg></div>
										<div class="advantage__text">High Quality</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="advantage__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">18 months of warranty for all products.</div>
								</div>
								<div class="bs__item">
									<div class="advantage__wrap">
										<div class="advantage__image"><svg class="advantage__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#warranty"></use>
											</svg></div>
										<div class="advantage__text">Warranty</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="advantage__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">Visit our showroom and get a discount.</div>
								</div>
								<div class="bs__item">
									<div class="advantage__wrap">
										<div class="advantage__image"><svg class="advantage__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#special"></use>
											</svg></div>
										<div class="advantage__text">Special Offer</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="advantage__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">High quality installation service with 18 months warranty.</div>
								</div>
								<div class="bs__item">
									<div class="advantage__wrap">
										<div class="advantage__image"><svg class="advantage__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#services"></use>
											</svg></div>
										<div class="advantage__text">Services</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="best">
		<div class="container container__slide" id="container">
			<div class="section__head">
				<h3 class="section__title"><?php the_field('header_bar_title_3'); ?></h3>
			</div>
			<div class="best__list owl-carousel owl-best">

				<!-- Render category 'main_slider' posts -->
				<?php
					$posts = get_posts( array(
					'numberposts' => -1,
					'category_name'    => 'best_sellers',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'post_type'   => 'post',
					'suppress_filters' => true
				) );

				foreach( $posts as $post ) :
					setup_postdata($post);
					?>
						<div class="best__item">
							<div class="best__image">
								<div class="bs__container">
									<div class="bs__wrap">
										<div class="bs__item">
											<div class="bs__part"><img class="best__img" src="<?php the_field('item_img_1'); ?>" alt="Item"></div>
										</div>
										<div class="bs__item">
											<div class="bs__part"><img class="best__img owl-lazy" data-src="<?php the_field('item_img_2'); ?>" alt="Item"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="best__content">
								<div class="best__title"><?php the_title(); ?></div>
								<div class="best__price">from <?php the_field('item_price'); ?> $</div>
								<div class="best__descr"><?php the_field('item_descr'); ?></div>
								<div class="best__colors">
									<div class="best__colors-title">Colors:</div>
									<div class="best__colors-list">
										<?php
											$colors = get_field('item_colors');

											if( $colors ) : 
												foreach( $colors as $color ): ?>
													<div class="best__color color-<?php echo $color; ?>"></div>
												<?php endforeach; ?>	
											<?php endif; ?>
									</div>
								</div>
							</div>
							<div class="best__action"><button class="best__link btn button_c"><span class="best__link-text"><?php the_field('item_button_name'); ?></span></button></div>
						</div>
				<?php endforeach; ?>

				<?php wp_reset_postdata(); ?>
				<!-- End Render category 'main_slider' posts -->

			</div>
		</div>
	</section>

	<section class="frame">
		<div class="container container__slide">
			<div class="section__head">
				<h3 class="section__title"><?php the_field('header_bar_title_4'); ?></h3>
			</div>
			<div class="best__list owl-carousel owl-hardware" id="frame__list">

				<!-- End Render category 'hardware' posts -->
				<?php
				$posts = get_posts( array(
					'numberposts' => -1,
					'category_name'    => 'hardware',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				) );

				foreach( $posts as $post ) :
					setup_postdata($post);
					?>
					<div class="best__item">
						<div class="best__content">
							<div class="best__image">
								<div class="bs__container">
									<div class="bs__wrap">
										<div class="bs__item">
											<div class="bs__part"><img class="best__img" src="<?php the_field('item_img_1'); ?>" alt="Frame"></div>
										</div>
										<div class="bs__item">
											<div class="bs__part"><img class="best__img owl-lazy" data-src="<?php the_field('item_img_2'); ?>" alt="Frame">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="best__title best__title_big"><?php the_title(); ?></div>
							<div class="best__price"><?php the_field('item_price'); ?> $</div>
							<div class="best__descr"><?php the_field('item_descr'); ?></div>
							<div class="best__colors">
								<div class="best__colors-title">Colors:</div>
								<div class="best__colors-list">
									<?php
										$colors = get_field('item_colors');

										if( $colors ) : 
											foreach( $colors as $color ): ?>
												<div class="best__color color-<?php echo $color; ?>"></div>
											<?php endforeach; ?>	
										<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="best__action"><button class="best__link btn button_c"><span class="best__link-text"><?php the_field('item_button_name'); ?></span></button></div>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<!-- End Render category 'hardware' posts -->

			</div>
		</div>
	</section>

	<section class="doors">
		<div class="bar">
			<div class="bar-wrap">
				<h3 class="bar__title"><?php the_field('header_bar_title_5'); ?></h3><a class="bar__link btn"><span class="bar__text">Details</span><svg
						class="icon-arrow bar__svg">
						<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow"></use>
					</svg></a>
			</div>
		</div>
		<div class="section__head">
			<h3 class="section__title"><?php the_field('header_bar_title_6'); ?></h3>
		</div>
		<div class="container">
			<div class="doors__slider owl-carousel owl-frame">

				<!-- End Render category 'interior' posts -->
				<?php
				$posts = get_posts( array(
					'numberposts' => -1,
					'category_name'    => 'interior',
					'orderby'     => 'date',
					'order'       => 'ASC',
					'post_type'   => 'post',
					'suppress_filters' => true,
				) );

				$count = 1;
				
				foreach( $posts as $post ) :
					setup_postdata($post);
					

					if($count === 1) : ?>
						<div class="doors__list">
							<div class="doors__box">
					<?php endif; ?>

					<div class="doors__item">
						<div class="doors__wrap">
							<img class="doors__img" src="<?php the_field('item_img'); ?>" alt="Door">
							<div class="doors__info">
								<div class="doors__text"><?php the_field('item_text'); ?></div>
								<div class="doors__price"><?php the_field('item_price') ?>.00 $</div>
							</div>
						</div>
					</div>

					<?php
						if($count === 4) : ?>
								</div>
							</div>
						<?php
						$count = 0;
						endif;

					$count++;
					endforeach;
				?>
				<?php wp_reset_postdata(); ?>
				<!-- End Render category 'hardware' posts -->

			</div>
		</div>
	</section>

	<section class="achi">
		<div class="container container__slide">
			<div class="section__head">
				<h3 class="section__title"><?php the_field('header_bar_title_7'); ?></h3>
			</div>
			<div class="achi__list owl-carousel owl-achi" id="achi">
				
				<!-- End Render category 'achiev' posts -->
				<?php
					$posts = get_posts( array(
						'numberposts' => -1,
						'category_name'    => 'achiev',
						'orderby'     => 'date',
						'order'       => 'ASC',
						'post_type'   => 'post',
						'suppress_filters' => true,
					) );

					foreach( $posts as $post ) :
						setup_postdata($post);
						?>
						<div class="achi__item"><a href="<?php the_field('img_zoom'); ?>" data-fancybox="achi-g">
							<div class="bs">
								<div class="bs__container">
									<div class="bs__wrap">
										<div class="bs__item">
											<div class="bs__part"><img class="bs__img" src="<?php the_field('img_1') ?>" alt="Achievement Image"></div>
										</div>
										<div class="bs__item">
											<div class="bs__part"><img class="bs__img owl-lazy" data-src="<?php the_field('img_2'); ?>" alt="Achievement Image"></div>
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
				<!-- End Render category 'hardware' posts -->

			</div>
		</div>
	</section>

	<section class="more">
		<div class="container">
			<div class="more__list owl-carousel owl-more" id="more">
				<div class="more__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">Possible free delivery from $1000 orders.</div>
								</div>
								<div class="bs__item">
									<div class="more__wrap">
										<div class="more__image"><svg class="more__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#delivery"></use>
											</svg></div>
										<div class="more__text">Delivery from 0$</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="more__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">All materials comply with environmental and safety standards.</div>
								</div>
								<div class="bs__item">
									<div class="more__wrap">
										<div class="more__image"><svg class="more__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#eco"></use>
											</svg></div>
										<div class="more__text">Ecological</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="more__item">
					<div class="bs-l">
						<div class="bs__container">
							<div class="bs__wrap">
								<div class="bs__item">
									<div class="more__bs-text">We accept Visa, Mastercard, Interac, Cash.</div>
								</div>
								<div class="bs__item">
									<div class="more__wrap">
										<div class="more__image"><svg class="more__svg">
												<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#secure"></use>
											</svg></div>
										<div class="more__text">100 % Payment secure</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="map">
		<div class="bar">
			<div class="bar-wrap">
				<h3 class="bar__title"><?php the_field('header_bar_title_8'); ?></h3><a class="bar__link"><span
						class="bar__text btn">Details</span><svg class="icon-arrow bar__svg">
						<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#arrow"></use>
					</svg></a>
			</div>
		</div>
		<div class="container">
			<div class="section__head">
				<h3 class="section__title"><?php the_field('header_bar_title_9'); ?></h3>
			</div>
			<div class="map__wrap">
				<div class="map__frame" id="map"></div>
				<div class="map__info">
					<div class="map__info-wrap">
						<div class="map__info-container">
							<div class="map__info-title">Our adress:</div>
							<div class="map__info-text">41 Chemin du Tremblay, Boucherville, QC J4B 7L6 Canada</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="popup" id="popup">
		<div class="popup__overlay">
			<div class="popup__container">
				<div class="popup__close-btn"><svg class="icon-close popup__close-svg">
						<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#close"></use>
					</svg></div>
				<div class="popup__title">Visit our showroom and we will pay taxes!</div>
				<div class="popup__list">
					<div class="popup__item">
						<div class="popup__text">100% best price</div>
					</div>
					<div class="popup__item">
						<div class="popup__text">Service 18 months</div>
					</div>
					<div class="popup__item">
						<div class="popup__text">Warranty 18 months</div>
					</div>
				</div>
				<form class="popup__form" id="popup-form"><input class="popup__input" type="text" name="name"
						placeholder="Your name *" autofocus><input class="popup__input" type="tel" name="phone"
						placeholder="Phone *"><button class="popup__button">Get a discount</button></form>
			</div>
		</div>
	</div>

<?php get_footer(); ?>