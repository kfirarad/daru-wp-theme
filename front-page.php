<?php get_header(); ?>

<?php
$menu_locations = get_nav_menu_locations();
$menu_items = wp_get_nav_menu_items($menu_locations['hp-menu']);

$links = [];
foreach ($menu_items as $menu_item) {
	$image_url = function_exists('z_taxonomy_image_url') ? z_taxonomy_image_url($menu_item->object_id) : '';
	$image_url = $image_url ? $image_url : get_the_post_thumbnail_url($menu_item->object_id);
	$image_url = $image_url ? $image_url : "https://picsum.photos/762/1048";

	$links[] = [
		'url' => $menu_item->url,
		'image_url' => $image_url,
		'title' => $menu_item->title,
	];
} ?>

<div class="content-center flex w-8/12">
	<ul class="flex content-center w-max flex-wrap justify-around">
		<?php
		foreach ($links as $link) {
			echo '<li class="m-12 w-full md:w-1/4 sm:w-100 grayscale hover:grayscale-0 transition flex content-center justify-around">
						<a href="' . $link['url'] . '">
							<img src="' . $link['image_url'] . '" alt="' . $link['title'] . '" class="w-full h-full object-fill">
							<h3 class="text-center text-2xl font-bold text-gray-800">' . $link['title'] . '</h3>
						</a
						</li>';
		}
		?>
	</ul>
</div>

<?php
get_footer();
