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

// カスタム投稿の各分類の一覧専用のテンプレート
get_header();
?>
<?php if (is_tax()) : ?>
<section class="taxonomy">
	<div class="taxonomy__inner">
<h1 class="taxonomy__title"><?php the_archive_title(); ?></h1>
</div>
</section>
<?php endif; ?>
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
							$terms = get_the_terms($post->ID, 'genre' );
							if ($terms) {
								echo '<a href="' . get_category_link($terms[0]->term_id) . '">' . $terms[0]->name . '</a>';
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
