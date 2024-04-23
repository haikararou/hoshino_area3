<?php
/*Template Name: ハルニレテラス */
?>
<?php get_header(); ?>


  <div class="l-spacer pan">
    <div class="l-container--wide">
      <?php get_template_part('inc/breadcrumb'); ?>
    </div>
  </div>

  <div id="key_wrap">
  <div id="keyVisual">
    <div class="videoBox">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/harunire_pc.mp4"></video>
      <video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/harunire_sp.mp4"></video>
      <div class="harunire p-kv__logo">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/harunire/logo.svg" alt="ハルニレテラス"></h1>
		</div>
    <?php get_template_part('news/list-important-kv'); ?>
    </div>
  </div>
</div>

	<section class="l-spacer harunire p-kv__lead">
		<div class="l-container--primary">
			<div class="harunire p-kv__lead__inner">
				<h2 class="c-title-ex-small">軽井沢の日常が流れる<br>森の中の小さな街</h2>
				<p>「軽井沢の日常」をコンセプトにした、森の中の小さな街。ハルニレの木立の中、湯川の清流沿いに連なる建物を、ウッドデッキでつないでいます。豊かな自然と個性的なお店が、星野エリアでの一日を彩ります。</p>
		</div>
	</section>

<div class="c-bg-white lead-end">

  <?php get_template_part('event/list-3-facility'); ?>

  <div class=" p-harunire__news">
  <?php get_template_part('news/list-3-facility'); ?>
  </div>

  <section class="l-spacer -medium -both c-border-t p-harunire__shop">
    <div class="l-container--primary">
      <article class="l-contents--left-title -title-large">
        <div class="l-contents--left-title__title">
          <h2 class="c-title-large -vertical">ショップリスト</h2>
          <ul class="c-list-std filter-list">




<?php $query = new WP_Query(
  array(
  'post_type' => 'harunireterrace', // カスタム投稿タイプのスラッグを指定
  'posts_per_page' => -1, // 全件表示
  'tax_query' => array(
    array(
    'taxonomy' => 'harunireterrace_cat', // タクソノミースラッグを指定
    'field' => 'slug',
    'terms' => 'halnire', // タームスラッグを指定
    ),
  ),
  ) );
?>
<li class="c-list-std__item active" data-filter="all"><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-all.svg" width="40" height="40" class="icon -shopicon">すべて(<?php echo $query->found_posts; ?>)</span></li>

<li class="c-list-std__item restaurant" data-filter="restaurant"><span class="c-text-icon"><img src="https://www.hoshino-area.jp/wp-content/themes/hoshino-area/assets/img/common/icon-restaurant.svg" width="40" height="40" class="icon -shopicon">レストラン（6）</span></li>
<li class="c-list-std__item cafe" data-filter="cafe"><span class="c-text-icon"><img src="https://www.hoshino-area.jp/wp-content/themes/hoshino-area/assets/img/common/icon-cafe.svg" width="40" height="40" class="icon -shopicon">カフェ（4）</span></li>
<li class="c-list-std__item shop" data-filter="shop"><span class="c-text-icon"><img src="https://www.hoshino-area.jp/wp-content/themes/hoshino-area/assets/img/common/icon-shop.svg" width="40" height="40" class="icon -shopicon">ショップ（10）</span></li>
<li class="c-list-std__item pet" data-filter="pet"><span class="c-text-icon"><img src="https://www.hoshino-area.jp/wp-content/themes/hoshino-area/assets/img/common/icon-pet.svg" width="40" height="40" class="icon -shopicon">ペット同伴可（11）</span></li>
<li class="c-list-std__item takeout" data-filter="takeout"><span class="c-text-icon"><img src="https://www.hoshino-area.jp/wp-content/themes/hoshino-area/assets/img/common/icon-takeout.svg" width="40" height="40" class="icon -shopicon">テイクアウト可（9）</span></li>



          </ul>
        </div>
        <div class="l-contents--left-title__conts">
          <?php
          $args = array(
            'post_type' => 'harunireterrace',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'harunireterrace_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => 'halnire', //表示したいタームをスラッグで指定
                'operator' => 'IN'
              ),
            )
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()): ?>
          <ul class="p-restaurant-list filter-item">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <?php
              $terms = get_the_terms($post->ID, 'harunireterrace_cat');
              echo '<li data-item="[';
              foreach($terms as $term){
              echo "'";
              echo $term-> slug;
              echo "',";
              };
              echo ']"';
              echo 'class="fade-in">';
              ?>
                  <a href="<?php if( get_field('facility-url')): ?><?php the_field('facility-url'); ?><?php else: ?><?php the_permalink();?><?php endif; ?>"<?php if(get_field('blank')): ?> target="_blank"<?php endif; ?> class="p-restaurant-card <?php if(get_field('blank')): ?>blank<?php endif; ?>">
                      <?php if( get_field('wi-fi')): ?>
                      <div class="p-restaurant-card__wi-fi">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28">
                      </div>
                      <?php endif; ?>
                      <?php if(has_post_thumbnail()): ?><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" /><?php endif; ?>
                      <div class="p-restaurant-card__text">
                          <div class="p-restaurant-card__title">
                              <h3 class="p-restaurant-card__name"><?php if(get_field('sub_title')): ?><span class="p-restaurant-card__cat"><?php the_field('sub_title'); ?></span><?php endif; ?><em><?php the_title(); ?></em></h3>
                              <?php if(get_field('logo')): ?>
                              <div class="p-restaurant-card__logo">
                                  <img src="<?php the_field('logo'); ?>" alt="">
                              </div>
                              <?php endif; ?>
                          </div>
                      </div>
                  </a>
              </li>
              <?php endwhile; ?>
          </ul>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </article>
    </div>
  </section>

<!-- <div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div> -->

</div>

<?php get_footer(); ?>
