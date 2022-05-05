<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body <?php body_class('bg-white text-gray-900 antialiased font-assistant'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('tailpress_header'); ?>

		<header>

			<div class="mx-auto container">
				<div class="lg:flex lg:justify-between lg:items-center border-b py-6">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<div>
									<a href="<?php echo get_bloginfo('url'); ?>">
										<h1 class="text-4xl md:text-6xl uppercase inline-block "><?php echo get_bloginfo('name'); ?></h1>
									</a>
									<span class="text-md font-light text-gray-600 whitespace-nowrap">
										<?php echo get_bloginfo('description'); ?>
									</span>

								</div>


							<?php } ?>
						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<div class="space-y-2">
									<span class="block w-5 h-0.5 bg-rose-300"></span>
									<span class="block w-8 h-0.5 bg-rose-300"></span>
									<span class="block w-8 h-0.5 bg-rose-300"></span>
								</div>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
							'menu_class'      => 'lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">
			<?php do_action('tailpress_content_start'); ?>
			<main class="flex justify-center">