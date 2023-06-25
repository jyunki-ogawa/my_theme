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
        <div class="skill__content__item__description">wordpress<br>sass<br>css設計<br></div>
      </div>
      <div class="skill__content__item">
        <div class="skill__content__item__logo skill__content__item__logo3"><img src="<?php echo get_template_directory_uri(); ?>/images/scale.jpg" alt="scale"></div>
        <div class="skill__content__item__title">その他スキル</div>
        <div class="skill__content__item__subtitle">正確なコーディング</div>
        <div class="skill__content__item__description">ピクセルパーフェクト<br>テクニカルSEO<br>サイト保守</div>
      </div>
    </div>
  </div>
</section>
<section class="project" id="project-link">
  <div class="project__inner">
    <h2 class="project__title">PROJECTS</h2>
    <div class="project__sub-title">実務を想定した制作を行なっております。</div>
    <div class="project__content">
      <div class="project__content__item">
        <figure class="project__content__item__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/screenshot1.png" alt="旅館のサイト">
        </figure>
        <div class="project__content__item__main-content">
          <div class="project__content__item__main-content__title">老舗旅館のサイト</div>
          <div class="project__content__item__main-content__genre"><span>JavaScript</span><span>SASS</span></div>
          <div class="project__content__item__main-content__description">ファーストビューのアニメーションや、スクロール量に応じたヘッダー制御を取り入れております。</div>
          <div class="project__content__item__main-content__btn">
            <button class="project__content__item__main-content__btn__btn1"><a href="<?php the_permalink(28); ?>">サイトの詳細</a></button>
            <button class="project__content__item__main-content__btn__btn2">サイトを見る</button>
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
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : ?>
            <?php the_post();  ?>
            <article class="swiper-slide">
              <figure class="swiper-slide__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php
                  $post_title = get_the_title();
                  the_post_thumbnail('large', array('alt' => $post_title));
                  ?>
                  <div class="swiper-slide__img__category">カテゴリー</div>
                <?php else : ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                  <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.jpg" alt="デフォルトのアイキャッチ画像" />
                <?php endif; ?>
              </figure>
              <div class="swiper-slide__text-box">
                <div class="swiper-slide__text-box__date">2023/5/6</div>
                <h3 class="swiper-slide__text-box__headding"><?php the_title(); ?></h3>
                <button> <a href="<?php the_permalink(); ?>">記事の詳細</a></button>
              </div>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
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
                    <?php
                    $post_title = get_the_title();
                    the_post_thumbnail('large', array('alt' => $post_title));
                    ?>
                    <div class="swiper-slide__img__category">カテゴリー</div>
                  <?php else : ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                    <img src="<?php echo get_template_directory_uri(); ?>/images/no-img.jpg" alt="デフォルトのアイキャッチ画像" />
                  <?php endif; ?>
                  <div class="swiper-slide__img__category">
                    <?php
                    $category = get_the_category();
                    if ($category[0]) {
                      echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->cat_name) . '</a>';
                    }
                    ?>
                    <a href="<?php echo esc_url(get_category_link($cat_id)); ?>"></a><!-- 追加 -->
                  </div>
                </figure>
                <div class="tab__content__item__article__text-box">
                  <div class="tab__content__item__article__text-box__date">2023/5/6</div>
                  <h3 class="tab__content__item__article__text-box__headding"><?php the_title() ?></h3>
                  <button> <a href="<?php the_permalink(); ?>">記事の詳細</a></button>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
        <div class="tab__content__item js-tab-target" id="tab02">コンテンツ2 </div>
        <div class="tab__content__item js-tab-target" id="tab03">コンテンツ3 </div>
      </div>
    </div>
  </div>
</section>
<section class="news">
  <div class="news__inner">
    <h2 class="news__title">NEWS</h2>
    <div class="news__content">
      <article class="news__content__item">
        <div class="news__content__item__date">2022-10-04</div>
        <div class="news__content__item__link"><a>タイトル１</a></div>
      </article>
      <article class="news__content__item">
        <div class="news__content__item__date">2022-10-04</div>
        <div class="news__content__item__link">タイトル１</div>
      </article>
      <article class="news__content__item">
        <div class="news__content__item__date">2022-10-04</div>
        <div class="news__content__item__link">タイトル１</div>
      </article>
    </div>
  </div>
</section>
<section class="contact">
  <div class="contact__inner">
    <h2 class="contact__title">CONTACT</h2>
    <div class="contact__sub-title">お気軽にお問い合わせください。できるだけ早くご返信いたします。</div>
    <form action="" class="contact__form">
    <?php echo do_shortcode('[mwform_formkey key="43"]'); ?>
    </form>
  </div>
</section>
</div>
</div>
</body>
<?php
get_footer();
