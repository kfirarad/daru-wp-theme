<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">

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

			<div class="mx-auto w-full pb-2">
				<div class="border-b pb-2 px-6">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<div>
									<a href="<?php echo get_bloginfo('url'); ?>">
										<h1 class="text-4xl md:text-6xl uppercase inline-block ml-3"><?php echo get_bloginfo('name'); ?></h1>
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
							'container_id'    => 'primary-menu-mobile',
							'container_class' => 'h-0 overflow-hidden bg-gray-100 mt-4 lg:hidden trasition-all duration-200',
							'menu_class'      => 'flex flex-col p-4',
							'theme_location'  => 'primary',
							'li_class'        => 'text-lg',
							'fallback_cb'     => false,
						)
					);
					?>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden lg:block w-10/12 m-auto',
							'menu_class'      => 'flex flex-row justify-center',
							'theme_location'  => 'primary',
							'li_class'        => 'text-lg mx-2',
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