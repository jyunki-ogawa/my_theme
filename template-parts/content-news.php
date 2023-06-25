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
