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

<section class="hero">
  <div class="hero__inner">
    <h1 class="hero__main-title">Hello, I'm Frontend Developer</h1>
    <p class="hero__sub-title">
      こんにちは。私はフロントエンドエンジニアです。JavaScriptが好きです。
    </p>
    <figure class="hero__img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/hero-img.jpg" alt="パソコン作業">
    </figure>
  </div>
</section>
<section class="about" id="about-link">
  <div class="about__inner">
    <h2 class="about__title">ABOUT</h2>
    <div class="about__description">
      こんにちは。九州・熊本県出身の33歳です。現在職業訓練校でプログラミングを学習しております。<br />
      これまでITサポート・システム導入・コンサルティング、Web広告運用、Web制作サポートなどの職種を経験してきました。<br />
      プログラミングについては即戦力として活躍できるように、実務を想定した学習を行なっております。お客様の要望を的確に汲み取り、実現するために尽力いたします。
    </div>
  </div>
</section>
<section class="skill">
  <div class="skill__inner">
    <h2 class="skill__title">SKILL</h2>
    <div class="skill__content">
      <div class="skill__content__item">
        <div class="skill__content__item__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/html.jpeg" alt="html"></div>
        <div class="skill__content__item__title">言語</div>
        <div class="skill__content__item__subtitle">スタンダードな言語</div>
        <div class="skill__content__item__description">html<br>css<br>JavaScript<br>php</div>
      </div>
      <div class="skill__content__item">
        <div class="skill__content__item__logo"><img src="<?php echo get_template_directory_uri(); ?>/images/wordpress.jpeg" alt="wordpress"></div>
        <div class="skill__content__item__title">ツール・FW</div>
        <div class="skill__content__item__subtitle">実用性の高い技術</div>
        <div class="skill__content__item__description">wordpress<br>sass<br>css設計<br>GitHub</div>
      </div>
      <div class="skill__content__item">
        <div class="skill__content__item__logo skill__content__item__logo3"><img src="<?php echo get_template_directory_uri(); ?>/images/scale.jpg" alt="scale"></div>
        <div class="skill__content__item__title">その他スキル</div>
        <div class="skill__content__item__subtitle">正確なコーディング</div>
        <div class="skill__content__item__description">ピクセルパーフェクト<br>テクニカルSEO<br>アクセシビリティ<br>wpテーマ制作</div>
      </div>
    </div>
  </div>
</section>
<section class="project" id="project-link">
  <div class="project__inner">
    <h2 class="project__title">PROJECTS</h2>
    <div class="project__sub-title">実務を想定した制作を行なっております。各制作物の詳細についてもまとめましたので、併せてご確認ください。</div>
    <div class="project__content">
      <div class="project__content__item">
        <figure class="project__content__item__img">
          <?php
          $image = get_field('portfolio-image1'); //フィールド名「portfolio-image1」の画像オブジェクトの情報を取得
          $url = $image['url']; //画像のURL
          $alt = $image['alt']; //画像のalt
          $title = $image['title']; //画像のタイトル
          $size = 'thumbnail'; //出力サイズを変数に格納
          $large = $image['sizes']['large'];
          $imgThumb = $image['sizes'][$size]; //サムネイル画像のURL
          ?>
          <a href="<?php echo esc_url($url); ?>” title=" <?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($alt); ?>" />
          </a>
        </figure>
        <div class="project__content__item__main-content">
          <div class="project__content__item__main-content__title"><?php echo esc_html(get_field('portfolio-title1')); ?></div>
          <div class="project__content__item__main-content__genre"><span><?php echo esc_html(get_field('portfolio-skill1-1')); ?></span><span><?php echo esc_html(get_field('portfolio-skill1-2')); ?></span><span><?php echo esc_html(get_field('portfolio-skill1-3')); ?></span></div>
          <div class="project__content__item__main-content__description"><?php echo esc_html(get_field('portfolio-description1')); ?></div>
          <div class="project__content__item__main-content__btn">
            <button><a href="<?php echo esc_url(get_field('portfolio-detail-link1')); ?>" class="project__content__item__main-content__btn__btn1">サイトの詳細</a></button>
            <button><a class="project__content__item__main-content__btn__btn2" href="<?php echo esc_url(get_field('portfolio-link1')); ?>">サイトを見る</a></button>
            <button><a class="project__content__item__main-content__btn__btn3" href="<?php echo esc_url(get_field('portfolio-github1')); ?>">GitHub</a></button>
          </div>
        </div>
      </div>
      <div class="project__content__item">
        <figure class="project__content__item__img">
          <?php
          $image = get_field('portfolio-image2'); //フィールド名「portfolio-image1」の画像オブジェクトの情報を取得
          $url = $image['url']; //画像のURL
          $alt = $image['alt']; //画像のalt
          $title = $image['title']; //画像のタイトル
          $size = 'thumbnail'; //出力サイズを変数に格納
          $large = $image['sizes']['large'];
          $imgThumb = $image['sizes'][$size]; //サムネイル画像のURL
          ?>
          <a href="<?php echo esc_url($url); ?>” title=" <?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($alt); ?>" />
          </a>
        </figure>

        <div class="project__content__item__main-content">
          <div class="project__content__item__main-content__title"><?php echo esc_html(get_field('portfolio-title2')); ?></div>
          <div class="project__content__item__main-content__genre"><span><?php echo esc_html(get_field('portfolio-skill2-1')); ?></span><span><?php echo esc_html(get_field('portfolio-skill2-2')); ?></span><span><?php echo esc_html(get_field('portfolio-skill1-3')); ?></span></div>
          <div class="project__content__item__main-content__description"><?php echo esc_html(get_field('portfolio-description2')); ?></div>
          <div class="project__content__item__main-content__btn">
            <button><a href="<?php echo esc_url(get_field('portfolio-detail-link2')); ?>" class="project__content__item__main-content__btn__btn1">サイトの詳細</a></button>
            <button><a class="project__content__item__main-content__btn__btn2" href="<?php echo esc_url(get_field('portfolio-link2')); ?>">サイトを見る</a></button>
            <button><a class="project__content__item__main-content__btn__btn3" href="<?php echo esc_url(get_field('portfolio-github2')); ?>">GitHub</a></button>
          </div>
        </div>
      </div>
      <div class="project__content__item">
        <figure class="project__content__item__img">
          <?php
          $image = get_field('portfolio-image3'); //フィールド名「portfolio-image1」の画像オブジェクトの情報を取得
          $url = $image['url']; //画像のURL
          $alt = $image['alt']; //画像のalt
          $title = $image['title']; //画像のタイトル
          $size = 'thumbnail'; //出力サイズを変数に格納
          $large = $image['sizes']['large'];
          $imgThumb = $image['sizes'][$size]; //サムネイル画像のURL
          ?>
          <a href="<?php echo esc_url($url); ?>” title=" <?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($alt); ?>" />
          </a>
        </figure>
        <div class="project__content__item__main-content">
          <div class="project__content__item__main-content__title"><?php echo esc_html(get_field('portfolio-title3')); ?></div>
          <div class="project__content__item__main-content__genre"><span><?php echo esc_html(get_field('portfolio-skill3-1')); ?></span><span><?php echo esc_html(get_field('portfolio-skill3-2')); ?></span><span><?php echo esc_html(get_field('portfolio-skill3-3')); ?></span></div>
          <div class="project__content__item__main-content__description"><?php echo esc_html(get_field('portfolio-description3')); ?></div>
          <div class="project__content__item__main-content__btn">
            <button><a href="<?php echo esc_url(get_field('portfolio-detail-link3')); ?>" class="project__content__item__main-content__btn__btn1">サイトの詳細</a></button>
            <button><a class="project__content__item__main-content__btn__btn2" href="<?php echo esc_url(get_field('portfolio-link3')); ?>">サイトを見る</a></button>
            <button><a class="project__content__item__main-content__btn__btn3" href="<?php echo esc_url(get_field('portfolio-github3')); ?>">GitHub</a></button>
          </div>
        </div>
      </div>
      <div class="project__content__item">
        <figure class="project__content__item__img">
          <?php
          $image = get_field('portfolio-image4'); //フィールド名「portfolio-image1」の画像オブジェクトの情報を取得
          $url = $image['url']; //画像のURL
          $alt = $image['alt']; //画像のalt
          $title = $image['title']; //画像のタイトル
          $size = 'thumbnail'; //出力サイズを変数に格納
          $large = $image['sizes']['large'];
          $imgThumb = $image['sizes'][$size]; //サムネイル画像のURL
          ?>
          <a href="<?php echo esc_url($url); ?>” title=" <?php echo esc_attr($title); ?>">
            <img src="<?php echo esc_url($large); ?>" alt="<?php echo esc_attr($alt); ?>" />
          </a>
        </figure>
        <div class="project__content__item__main-content">
          <div class="project__content__item__main-content__title"><?php echo esc_html(get_field('portfolio-title4')); ?></div>
          <div class="project__content__item__main-content__genre"><span><?php echo esc_html(get_field('portfolio-skill4-1')); ?></span><span><?php echo esc_html(get_field('portfolio-skill4-2')); ?></span><span><?php echo esc_html(get_field('portfolio-skill4-3')); ?></span></div>
          <div class="project__content__item__main-content__description"><?php echo esc_html(get_field('portfolio-description4')); ?></div>
          <div class="project__content__item__main-content__btn">
            <button><a href="<?php echo esc_url(get_field('portfolio-detail-link4')); ?>" class="project__content__item__main-content__btn__btn1">サイトの詳細</a></button>
            <button><a class="project__content__item__main-content__btn__btn2" href="<?php echo esc_url(get_field('portfolio-link4')); ?>">サイトを見る</a></button>
            <button><a class="project__content__item__main-content__btn__btn3" href="<?php echo esc_url(get_field('portfolio-github4')); ?>">GitHub</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="new" id="article-link">
  <div class="new__inner">
    <h2 class="new__title">新着記事</h2>
    <div class="new__sub-title">制作物の内容や詳細などを紹介しています。</div>
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
        $css_js_query = new WP_Query(
          array(
            'post_type'      => 'post',
            'posts_per_page' => 6,
          )
        );
        ?>
        <?php if ($css_js_query->have_posts()) : ?>
          <?php while ($css_js_query->have_posts()) : ?>
            <?php $css_js_query->the_post(); ?>
            <article class="swiper-slide">
              <figure class="swiper-slide__img">
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
              <span class="swiper-slide__img__category">
                <?php
                $categories = get_the_category();
                if ($categories) {
                  echo '<a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a>';
                }
                ?>
              </span>
              <div class="swiper-slide__text-box">
                <div class="swiper-slide__text-box__date"><?php the_time(get_option('date_format')); ?></div>
                <h3 class="swiper-slide__text-box__headding"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<section class="category">
  <div class="category__inner">
    <h2 class="category__title">記事（カテゴリー別）</h2>
    <div class="tab">
      <!-- .tab-menu -->
      <ul class="tab__menu">
        <li class="tab__menu__item js-tab-trigger is-open" data-id="tab01">css・js</li>
        <li class="tab__menu__item js-tab-trigger" data-id="tab02">wordpress</li>
        <li class="tab__menu__item js-tab-trigger" data-id="tab03">その他</li>
      </ul>
      <!-- .tab-content__item -->
      <div class="tab__content">
        <div class="tab__content__item js-tab-target is-open" id="tab01">
          <?php
          $css_js_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'category_name' => 'css-javascript',
              'posts_per_page' => 4,
            )
          );
          ?>
          <?php if ($css_js_query->have_posts()) : ?>
            <?php while ($css_js_query->have_posts()) : ?>
              <?php $css_js_query->the_post(); ?>
              <article class="tab__content__item__article">
                <figure class="tab__content__item__article__img">
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
                <span class="tab__content__item__article__img__category">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    echo '<a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a>';
                  }
                  ?>
                </span>
                <div class="tab__content__item__article__text-box">
                  <div class="tab__content__item__article__text-box__date"><?php the_time(get_option('date_format')); ?></div>
                  <h3 class="tab__content__item__article__text-box__headding"><?php the_title() ?></h3>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="tab__content__item js-tab-target" id="tab02">
          <?php
          $css_js_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'category_name' => 'wordpress',
              'posts_per_page' => 4,
            )
          );
          ?>
          <?php if ($css_js_query->have_posts()) : ?>
            <?php while ($css_js_query->have_posts()) : ?>
              <?php $css_js_query->the_post(); ?>
              <article class="tab__content__item__article">
                <figure class="tab__content__item__article__img">
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
                <span class="tab__content__item__article__img__category">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    echo '<a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a>';
                  }
                  ?>
                </span>
                <div class="tab__content__item__article__text-box">
                  <div class="tab__content__item__article__text-box__date"><?php the_time(get_option('date_format')); ?></div>
                  <h3 class="tab__content__item__article__text-box__headding"><?php the_title() ?></h3>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="tab__content__item js-tab-target" id="tab03">
          <?php
          $css_js_query = new WP_Query(
            array(
              'post_type'      => 'post',
              'category_name' => 'other',
              'posts_per_page' => 4,
            )
          );
          ?>
          <?php if ($css_js_query->have_posts()) : ?>
            <?php while ($css_js_query->have_posts()) : ?>
              <?php $css_js_query->the_post(); ?>
              <article class="tab__content__item__article">
                <figure class="tab__content__item__article__img">
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
                <span class="tab__content__item__article__img__category">
                  <?php
                  $categories = get_the_category();
                  if ($categories) {
                    echo '<a href="' . get_category_link($categories[0]->term_id) . '">' . $categories[0]->name . '</a>';
                  }
                  ?>
                </span>
                <div class="tab__content__item__article__text-box">
                  <div class="tab__content__item__article__text-box__date"><?php the_time(get_option('date_format')); ?></div>
                  <h3 class="tab__content__item__article__text-box__headding"><?php the_title() ?></h3>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="news__inner">
    <h2 class="news__title">NEWS</h2>
    <div class="news__content">
      <?php
      $css_js_query = new WP_Query(
        array(
          'post_type'      => 'news',
          'posts_per_page' => 3,
        )
      );
      ?>
      <?php if ($css_js_query->have_posts()) : ?>
        <?php while ($css_js_query->have_posts()) : ?>
          <?php $css_js_query->the_post(); ?>
          <article class="news__content__item">
            <div class="news__content__item__date"><?php the_time(get_option('date_format')); ?></div>
            <div class="news__content__item__link"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <button class="news__content__btn"><a href="<?php echo get_post_type_archive_link('news'); ?>">NEWS一覧はこちら</a></button>
    </div>
  </div>
</section>
<section class="contact" id="contact-link">
  <div class="contact__inner">
    <h2 class="contact__title">CONTACT</h2>
    <div class="contact__sub-title">お気軽にお問い合わせください。できるだけ早くご返信いたします。</div>
    <div class="contact__form">
      <?php echo do_shortcode('[mwform_formkey key="43"]'); ?>
    </div>
  </div>
</section>
</div>
</div>
</body>
<?php
get_footer();
