<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Portedoor</title>
	<?php wp_head(); ?>
</head>

<body class="body">
	<header class="header">
		<div class="container">
			<div class="header__part"><a href="/">
					<div class="header__logo"><img class="header__img" src="<?php echo get_bloginfo('template_url'); ?>/assets/img/logo_black.png" alt="logo"></div>
				</a></div>
			<div class="header__part">
				<div class="header__phone"><a class="header__phone-image" href="tel:14509002456"><svg
							class="icon-phone header__phone-svg">
							<use xlink:href="<?php echo get_bloginfo('template_url'); ?>/assets/img/sprite.svg#phone"></use>
						</svg></a>
					<div class="header__phone-number"><a class="header__phone-link" href="tel:14509002456">+1 - 450 - 900 -
							2456</a></div>
				</div>
				<div class="header__working">
					<div class="header__working-title">Available 7 days</div>
					<div class="header__working-text">Visit only by appointment</div>
				</div>
				<div class="header__language"><a class="header__language-link" href="/">Fr</a></div>
			</div>
		</div>
	</header>