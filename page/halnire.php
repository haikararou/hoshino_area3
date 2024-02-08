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
      <div class="p-harunire__kv__logo">
      <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/harunire/logo.svg" alt="ハルニレテラス"></h1>
		<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
		</div>
      <div class="p-harunire__kv__news">
        <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
        <div class="endress">
          <div class="loop_wrap">
            <?php
            $args = array (
                'post_type' => 'news',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news_cat',
                        'field' => 'slug',
                        'terms' => 'important-news',
                        'operator' => 'IN'
                    ),
                )
            );
            $news = new WP_Query( $args );
            if ($news -> have_posts()):
            ?>
            <?php while ($news -> have_posts()): $news -> the_post(); ?>
            <div><a href="<?php the_permalink();?>"><span><?php the_time('Y.m.d') ?></span><?php the_title(); ?></a>　</div>
            <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
          </div>
      </div>
    </div>
  </div>
</div>


	<section class="l-spacer p-harunire__lead">
		<div class="l-container--primary">
			<div class="p-harunire__lead__inner">
				<h2 class="c-title-ex-small">軽井沢の日常が流れる<br>森の中の小さな街</h1>
				<p>「軽井沢の日常」をコンセプトにした、森の中の小さな街。ハルニレの木立の中、湯川の清流沿いに連なる建物を、ウッドデッキでつないでいます。豊かな自然と個性的なお店が、星野エリアでの一日を彩ります。</p>
			</h2>
		</div>
	</section>

  <?php get_template_part('event/list-3-facility'); ?>

	<?php get_template_part('news/list-3-facility'); ?>

  <section class="l-spacer -medium -both c-border-t">
    <div class="l-container--primary">
      <article class="l-contents--left-title -title-large">
        <div class="l-contents--left-title__title">
          <h2 class="c-title-large -vertical">ショップリスト</h2>
          <ul class="c-list-std filter-list">
            <li class="c-list-std__item active" data-filter="all"><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-all.svg" width="40" height="40" class="icon -shopicon">すべて</span></li>
            <?php
              $terms = get_terms('shop_cat');
              $args = array(
                'exclude' => array(60), //除外したいタームのIDを指定。
              );
              $terms = get_terms('shop_cat', $args);
              foreach ($terms as $term ) {
                $des_list .= '<li class="c-list-std__item '. $term-> slug .'" data-filter="'. $term-> slug .'"><span class="c-text-icon"><img src="'.get_template_directory_uri().'/assets/img/common/icon-'. $term-> slug .'.svg" width="40" height="40" class="icon -shopicon">';
                $des_list .= $term->name . '</span></li>';
              }
              echo $des_list;
            ?>
          </ul>
          <div class="l-spacer -em2">
              <a href="<?php echo home_url('/business-hours'); ?>" class="c-button-block -yellow -icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg" width="16" height="16">営業時間</a>
          </div>
        </div>
        <div class="l-contents--left-title__conts">
          <?php
          $args = array(
            'post_type' => 'shop',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'shop_cat', //タクソノミーを指定
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
              $terms = get_the_terms($post->ID, 'shop_cat');
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

<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<?php get_footer(); ?>