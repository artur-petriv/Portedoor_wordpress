<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php bloginfo( 'name'); ?> | <?php bloginfo('description'); ?></title>
	<?php wp_head(); ?>
</head>

<body class="body">
	<header class="header">
		<div class="container">
			<div class="header__part">
				<a href="<?php echo get_home_url(); ?>">
					<div class="header__logo">
						<img src="<?php 
							$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
							echo $custom_logo__url[0]; ?>" alt="Logo" class="header__img">
					</div>
				</a>
			</div>
			<div class="header__part">
				<div class="header__phone"><a class="header__phone-image"
						href="tel:<?php the_field('phone_number_call', 2); ?>">
						<svg class="icon-phone header__phone-svg">
							<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
						</svg></a>
					<div class="header__phone-number"><a class="header__phone-link"
							href="tel:<?php the_field('phone_number_call', 2); ?>"><?php the_field('phone_number_visible', 2); ?></a>
					</div>
				</div>
				<div class="header__working">
					<div class="header__working-title"><?php the_field('work_time_title', 2); ?></div>
					<div class="header__working-text"><?php the_field('work_time_description', 2); ?></div>
				</div>
				<div class="header__language"><a class="header__language-link" href="<?php echo get_home_url(); ?>">En</a></div>
			</div>
		</div>
	</header>