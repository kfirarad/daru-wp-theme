<?php get_header();

$menu_locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items($menu_locations['hp-menu']);

$links = [];
foreach ($menu_items as $menu_item) {
	$image_url = function_exists('z_taxonomy_image_url') ? z_taxonomy_image_url($menu_item->object_id, 'medium_large') : '';
	$image_url = $image_url ? $image_url : get_the_post_thumbnail_url($menu_item->object_id, 'medium_large');
	$image_url = $image_url ? $image_url : "";

	$links[] = [
		'url' => $menu_item->url,
		'image_url' => $image_url,
		'title' => $menu_item->title,
	];
} ?>

<div class="content-center flex w-full mx-auto container">
	<ul class="flex content-center w-max flex-wrap justify-between md:space-x-3">
		<?php
		foreach ($links as $link) {
			echo '<li class="grayscale-[80%] hover:grayscale-0 transition flex content-center md:justify-evenly w-2/5 md:w-1/4 my-6 justify-center m-3">
						<a href="' . $link['url'] . '" class="flex justify-center content-center flex-col">
							' . ($link['image_url'] ? '<img src="' . $link['image_url'] . '" alt="' . $link['title'] . '" class="w-full h-full object-fill" title="' . $link['title'] . '" loading="lazy"/>' : '') . '
							<h3 class="text-center  whitespace-nowrap text-xl md:text-2xl font-bold text-gray-800">' . $link['title'] . '</h3>
						</a>
						</li>';
		}
		?>
	</ul>
</div>

<?php
get_footer();
