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
<section class="taxonomy">
	<div class="taxonomy__inner">
		<?php if (is_category()) : ?>
			<?php
			$categoryAll = get_the_category();
			$category = $categoryAll[0];
			?>
			<h1 class="taxonomy__title">「<?php echo esc_html($category->name); ?>」の記事一覧</h1>
		<?php elseif (is_author()) : ?>
			<?php
			$author = get_the_author();
			?>
			<h1 class="taxonomy__title">「<?php echo esc_html($author); ?>」の記事一覧</h1>
		<?php elseif (is_date()) : ?>
			<?php
			$date = get_the_date();
			?>
			<h1 class="taxonomy__title">「<?php echo esc_html($date); ?>」の記事一覧</h1>
		<?php else : ?>
			<!-- タグ用の記述 -->
			<?php
			$tagAll = get_tags();
			$tag = $tagAll[0];
			?>
			<h1 class="taxonomy__title">「<?php echo esc_html($tag->name); ?>」の記事一覧</h1>
		<?php endif; ?>
	</div>
</section>
<section class="archive">
	<div class="archive__inner">
		<div class="archive__content">
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : ?>
					<?php the_post();  ?>
					<article class="archive__content__item">
						<figure class="archive__content__item__img">
							<?php if (has_post_thumbnail()) : ?>
								<a href="<?php the_permalink(); ?>">
									<?php
									$post_title = get_the_title();
									the_post_thumbnail('large', array('alt' => $post_title));
									?>
								</a>
							<?php else : ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
								<a href="<?php the_permalink(); ?>">
									<img src="<?php echo get_template_directory_uri(); ?>/images/no-img.jpg" alt="デフォルトのアイキャッチ画像" />
								</a>
							<?php endif; ?>
						</figure>
						<div class="archive__content__item__img__category">
							<?php
							$categories = get_the_category();
							if ($categories) {
								echo '<a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a>';
							}
							?>
						</div>
						<div class="archive__content__item__text-box">
							<div class="archive__content__item__text-box__date">
								<?php the_time(get_option('date_format')); ?>
							</div>
							<h3 class="archive__content__item__text-box__headding">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h3>
						</div>
					</article>
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
</section>

</div>
</div>
</body>
<?php
get_footer();
