<?php
get_header();
// gather child theme variables
$theme_vars = my_theme_variables();
?>
<main id="contentArea">
	<ul class="contactinfo" itemscope itemtype="https://schema.org/PostalAddress">
		<li><span itemprop="streetAddress">2585 West 200 South</span><span itemprop="addressLocality"> Provo</span>, <span itemprop="addressRegion">Utah</span> <span itemprop="postalCode">84601</span><span class="phone" itemprop="telephone"> Phone: (801) 370-4630</span><span class="fax" itemprop="faxNumber"> Fax: (801) 370-4633</span>
	</ul>
	<?php
	if (in_category('alert')) {
		include get_template_directory() . '/assets/alert-code.php';
	}
	?>
	<section id="announcments">
		<?php
		$args = array(
			'posts_per_page' => 3,
			'post__in'  => get_option('sticky_posts'),
			'ignore_sticky_posts' => 1
		);
		$sticky_query = new WP_Query($args);
		if ($sticky_query->have_posts()) :
			while ($sticky_query->have_posts()) : $sticky_query->the_post();
				$background_image = '';
				$post_id = get_the_ID(); // Define the $post_id variable
				if (get_field('featured_image', $post_id)) {
					$background_image = get_field('featured_image');
				} elseif (has_post_thumbnail()) {
					$background_image = get_the_post_thumbnail_url();
				} else {
					$background_image = get_stylesheet_directory_uri() . '/assets/images/building-image.jpg';
				}
		?>
				<article class="sticky post" style="background-image: url('<?php echo esc_url($background_image); ?>');">


					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				</article>
		<?php endwhile;
			wp_reset_postdata();
		else :
			echo '<p>No sticky posts found</p>';
		endif;
		?>
	</section>
	<section id="mainContent" class="postgrid newsBlog">
		<h1><?= $theme_vars['short_school_name'] ?> News</h1>
		<?php

		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$sticky_posts = get_option('sticky_posts');
		$sticky_args = array(
			'posts_per_page' => 3,
			'post__in' => $sticky_posts,
			'category_name' => 'news',
			'post_type' => 'post',
			'ignore_sticky_posts' => 1
		);
		$sticky_query = new WP_Query($sticky_args);
		$sticky_count = $sticky_query->post_count;

		$regular_args = array(
			'posts_per_page' => 6 - $sticky_count,
			'category_name' => 'news',
			'post_type' => 'post',
			'post__not_in' => $sticky_posts,
			'ignore_sticky_posts' => 1,
			'paged' => $paged
		);
		$regular_query = new WP_Query($regular_args);

		$all_posts = array_merge($sticky_query->posts, $regular_query->posts);
		if (!empty($all_posts)) :
			foreach ($all_posts as $post) : setup_postdata($post);
				$background_image = '';
				$post_id = get_the_ID(); // Define the $post_id variable
				if (get_field('featured_image', $post_id)) {
					$background_image = get_field('featured_image');
				} elseif (has_post_thumbnail()) {
					$background_image = get_the_post_thumbnail_url();
				} else {
					$background_image = get_stylesheet_directory_uri() . '/assets/images/building-image.jpg';
				}
		?>
				<article class="post" style="background-image: url('<?php echo esc_url($background_image); ?>');">


					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

				</article>
		<?php
			endforeach;
		endif;
		?>

		<nav class="archiveNav">
			<?php echo paginate_links(array('total' => $regular_query->max_num_pages)); ?>
		</nav>

	</section>
</main>
<?php
get_sidebar();
get_footer();
?>