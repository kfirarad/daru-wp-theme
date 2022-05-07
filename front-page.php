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

<div class="w-full md:w-10/12">
	<ul class="grid grid-cols-2 md:grid-cols-3 gap-22 md:gap-10">
		<?php
		foreach ($links as $link) {
			$bg_img = $link['image_url'] ? "background: url('{$link['image_url']}') no-repeat center center / cover;" : "";

			echo '		<li class="p-4 grayscale-[80%] hover:grayscale-0 transition flex content-center my-6 justify-center group border-0">	
							<a href="' . $link['url'] . '" class=" w-full aspect-[3/5]">							
								<div style=" ' . $bg_img . '" class="w-full h-full flex flex-col justify-end content-end">
									<h3 class="text-center  whitespace-wrap text-xl md:text-2xl font-bold text-gray-800 bg-white">' . $link['title'] . '</h3>
								</div>
							</a>
						</li>';
		}
		?>
	</ul>
</div>

<?php
get_footer();
