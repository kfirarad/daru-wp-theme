<?php get_header(); ?>

<div class="container mx-auto my-8">

	<header class="entry-header mb-8">
		<div class="max-w-5xl m-auto">
			<h2 class="entry-title text-4xl lg:text-5xl font-extrabold leading-tight mb-1">
				<?php echo single_term_title('', false); ?>
			</h2>
		</div>
	</header>

	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>
		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
