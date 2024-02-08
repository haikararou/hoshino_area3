<?php
/*Template Name: news */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">ニュース</h1>
    <nav>
      <ul class="c-list-category">
        <li><a href="" class="c-list-category__item -act">すべて</a></li>
        <li><a href="" class="c-list-category__item">交通情報</a></li>
        <li><a href="" class="c-list-category__item">星野コミュニティベース</a></li>
        <li><a href="" class="c-list-category__item">店舗からのご案内</a></li>
        <li><a href="" class="c-list-category__item">トピックス</a></li>
      </ul>
    </nav>
	</div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary-l">
  <article class="l-contents">
			<div class="l-contents__conts">

        <ul class="p-post-list">
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">店舗からのご案内</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">店舗からのご案内</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">店舗からのご案内</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">店舗からのご案内</p>
                </div>
              </article>
            </a>
          </li>
        </ul>

        <div class="l-spacer -em3 p-post-list__item__more">
          <div class="wp-pagenavi" role="navigation">
            <a class="c-button-block -lightyellow -arrow -left -pagenavi -more previouspostslink" rel="prev" aria-label="Previous Page" href="https://asupia.co.jp/news/">前へ</a>
            <a class="c-button-block -lightyellow -more -pagenavi -num -act" title="ページ 1" href="https://asupia.co.jp/news/">1</a>
            <span aria-current="page" class="c-button-block -lightyellow -pagenavi -more -num">2</span>
            <a class="c-button-block -lightyellow -pagenavi -more -num" title="ページ 3" href="https://asupia.co.jp/news/page/3/">3</a>
            <a class="c-button-block -lightyellow -arrow -right -pagenavi -more nextpostslink" rel="next" aria-label="Next Page" href="https://asupia.co.jp/news/page/3/">次へ</a>
          </div>
        </div>

      </div>
    </article>
  </div>
</section>


<?php get_footer(); ?>