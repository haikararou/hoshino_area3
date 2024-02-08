<?php
/*Template Name: アクティビティ */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">アクティビティ</h1>
    <p>自然に囲まれた星野エリアならではのアクティビティで、今日を、もっと思い出深い日に。</p>
  </div>
</section>

<section class="l-spacer -medium -both" id="picchio">
 <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/picchio.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large"><span class="c-title-sub">自然体験</span>ピッキオ</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/logo_picchio.svg">
        </div>
        <div class="l-spacer -em2">
          <p>ピッキオは「軽井沢野鳥の森」をメインフィールドに、森の生き物との出会いを楽しむ自然観察ツアーを開催しています。<br>
          ツアーは年間通じて行われ、季節ごとに内容が変わります。小さなお子様からご年配の方まで、どなたでも気軽にお楽しみいただける「野鳥の森ネイチャーウォッチング」や、目撃率95％以上の「空飛ぶムササビウォッチング」など、その季節にしか味わえない楽しみがたくさん。自然をこよなく愛するスタッフが、豊かな森をご案内します。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>



<div class="c-small-news">
<h2 class="c-title-medium">ニュース</h2>
<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
$args = array(
'post_type' => 'news',
'posts_per_page' => 3,
'ignore_sticky_posts' => 1,
'tax_query' => array(
array(
'taxonomy' => 'news_shop', //タクソノミーを指定
'field' => 'slug', //ターム名をスラッグで指定する
'terms' => 'picchio', //表示したいタームをスラッグで指定
'operator' => 'IN'
),
)
);
$the_query = new WP_Query( $args );
?>
<?php if ($the_query->have_posts()): ?>
<dl class="c-list-news">
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<div class="c-list-news__item">
<dt class="c-list-news__date"><?php the_time('Y.m.d') ?></dt>
<dt class="c-list-news__conts"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></dt>
</a>
</div>
<?php endwhile; ?>
</dl>
<?php endif; wp_reset_postdata(); ?>
</div>




      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both" id="keraike">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/keraike.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large"><span class="c-title-sub">アイススケート</span>ケラ池スケートリンク</h3>
        </div>
        <div class="l-spacer -em2">
          <p>「森を感じるスケートリンク」がコンセプト。秋の紅葉の時期からスケートリンクが現れ、寒さが増すごとに池一面の氷が厚さを増し、厳冬期には天然氷でのスケートもができるようになります。森の小鳥の声に軽井沢の自然を感じながら、氷上散歩を楽しんでみませんか。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="<?php echo home_url('/kera-ike-icerink'); ?>" class="c-button-block -yellow -arrow -more"><span>詳細</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/crafy.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large"><span class="c-title-sub">手作り指輪工房</span>CRAFY・glänta</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/logo_crafy.jpg">
        </div>
        <div class="l-spacer -em2">
          <p>指輪を手作りできる工房です。初めてでも思い通りの指輪作りができるよう、専任のスタッフが丁寧にサポートします。体験を通して、軽井沢の思い出となるような「豊かな時間」を提供します。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="<?php echo home_url('/shop/crafyglanta/'); ?>" class="c-button-block -yellow -arrow -more"><span>詳細</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>