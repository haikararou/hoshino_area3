<div class="p-kv__news">
    <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
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
    <div class="bbs">
    <ul>
    <?php while ($news -> have_posts()): $news -> the_post(); ?>
    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
    <ul>
    <?php while ($news -> have_posts()): $news -> the_post(); ?>
    <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
    </div>
    <?php endif; wp_reset_postdata(); ?>
</div>




