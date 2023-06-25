<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package my_theme
 */

get_header();
?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : ?>
		<?php the_post();  ?>
		<section class="single-hero">
			<div class="single-hero__inner">
				<h1 class="single-hero__title"><?php the_title(); ?></h1>
				<figure class="single-hero__img">
					<?php if (has_post_thumbnail()) : ?>
						<?php
						$post_title = get_the_title();
						the_post_thumbnail('large', array('alt' => $post_title));
						?>
					<?php endif; ?>
				</figure>
			</div>
		</section>
		<section class="single-content">
			<div class="single-content__inner">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>
<section class="pagination">
	<div class="pagination__inner">
		<div class="pagination__link">
			<?php
			$link = get_previous_posts_link('&larr; 新しい記事へ');
			if ($link) {
				$link = str_replace('<a', '<a class="pagination__link__new"', $link);
				echo $link;
			}
			?>
			<?php
			$link = get_next_posts_link('古い記事へ &rarr;');
			if ($link) {
				$link = str_replace('<a', '<a class="pagination__link__old"', $link);
				echo $link;
			}
			?>
		</div>
	</div>
</section>
</div>
</div>
</body>
<?php
get_footer();
