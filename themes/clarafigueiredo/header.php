<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv='X-UA-Compatible' content='IE=edge'>
	<title>Page Title</title>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' type='text/css' media='screen' href='<?php echo(get_stylesheet_uri()); ?>?rnd=<?php echo(rand(1000, 9999)); ?>'>
	<?php wp_head(); ?>
</head>
<body>
	<main>
		<header>
			<section>
				<div class='name'>
					<?php echo(get_bloginfo('name')); ?>
				</div>
				<div class='description'>
					<?php echo(get_bloginfo('description')); ?>
				</div>
				<div class='menu'>
					<input id='menu_toggle' type='checkbox' />
					<label for='menu_toggle'>menu</label>
					<ul>
						<?php
							$menus = wp_get_nav_menu_items("Header");
							foreach ($menus as $menu) {
						?>
							<li><a href="<?php echo( $menu->url ); ?>"><?php echo( $menu->title ); ?></a></li>
						<?php } ?>
					</ul>
				</div>
			</section>
		</header>