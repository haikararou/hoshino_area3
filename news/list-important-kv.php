<?php
$args = array(
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
$news = new WP_Query($args);
if ($news->have_posts()): // 投稿が存在する場合のみ表示
?>
<div class="p-kv__news">
    <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
    <?php if ($news->found_posts == 1): // 投稿が1件の場合 ?>
        <?php $news->the_post(); ?>
        <div class="bbs -none">
            <ul>
                <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
            </ul>
        </div>
    <?php else: // 投稿が複数の場合 ?>
        <div class="bbs">
            <ul>
                <?php while ($news->have_posts()): $news->the_post(); ?>
                <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
            <ul>
                <?php rewind_posts(); // ループをリセット ?>
                <?php while ($news->have_posts()): $news->the_post(); ?>
                <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                <?php endwhile; ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<?php 
endif;
wp_reset_postdata();
?>