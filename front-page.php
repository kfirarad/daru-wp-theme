<?php get_header(); ?>

<?php
$menu_locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items($menu_locations['hp-menu']);

$links = [];
foreach ($menu_items as $menu_item) {
	$image_url = function_exists('z_taxonomy_image_url') ? z_taxonomy_image_url($menu_item->object_id, '') : '';
	$image_url = $image_url ? $image_url : get_the_post_thumbnail_url($menu_item->object_id);
	$image_url = $image_url ? $image_url : "";

	$links[] = [
		'url' => $menu_item->url,
		'image_url' => $image_url,
		'title' => $menu_item->title,
	];
} ?>

<div class="content-center flex w-8/12">
	<ul class="flex content-center w-max flex-wrap justify-around space-x-3">
		<?php
		foreach ($links as $link) {
			echo '<li class="grayscale hover:grayscale-0 transition flex content-center justify-around md:w-1/4 my-6 ">
						<a href="' . $link['url'] . '">
							' . ($link['image_url'] ? '<img src="' . $link['image_url'] . '" alt="' . $link['title'] . '" class="w-full h-full object-fill" title="' . $link['image_url'] . '"/>' : '') . '
							<h3 class="text-center text-2xl font-bold text-gray-800">' . $link['title'] . '</h3>
						</a
						</li>';
		}
		?>
	</ul>
</div>

<?php
get_footer();
