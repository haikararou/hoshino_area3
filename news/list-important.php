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
if ($news->have_posts()): // 投稿が存在する場合のみ表示
?>
<div class="c-border-b">
    <div class="l-footer-important-news">
        <div class="l-container--primary">
            <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">重要なお知らせ</h2>
                <dl class="c-list-news l-footer-important-news__news">
                <?php while ($news->have_posts()): $news->the_post(); ?>
                    <div class="c-list-news__item">
                        <dt class="c-list-news__date"><?php the_time('Y/m/d') ?></dt>
                        <dd class="c-list-news__conts"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></dd>
                    </div>
                <?php endwhile; ?>
                </dl>
            </div>
        </div>
    </div>
</div>
<?php 
endif;
wp_reset_postdata();
?>
