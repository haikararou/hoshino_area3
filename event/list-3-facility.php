<?php $today = date('Ymd'); ?>
<?php Global $title; ?>
<?php
global $post;
$slug = $post->post_name;
$count = 0;
$args = array(
    'post_type'=> 'event',
    'meta_key' => 'event_start', //ACFのフィールド名
    'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
        'relation' => 'AND',
        array(
        'key'     => 'event_start',
        'value'   => $today,
        'type'    => 'date',
        'compare' => '<=',
        ),
        array(
        'key' => 'event_end',
        'value' => $today,
        'type'    => 'date',
        'compare' => '>=',
        ),
    ),
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
        'taxonomy' => 'event_place', //タクソノミーを指定
        'field' => 'slug', //ターム名をスラッグで指定する
        'terms' => $slug, //表示したいタームをスラッグで指定
        'operator' => 'IN'
        ),
    )
);
$wp_query = new WP_Query( $args );
?>
<?php if ( $wp_query->have_posts() ): ?>
<section class="l-spacer -medium -both c-border-t">
    <div class="l-container--primary">
        <article class="l-contents--left-title">
            <h2 class="c-title-large -vertical l-contents--left-title__title"><span><?php echo $title; ?></span>イベント</h2>
            <div class="l-contents--left-title__conts">
            <ul class="p-post-tate">
            <?php if ( $wp_query->have_posts() ): ?>
            <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                <li class="p-post-tate__item">
                    <a href="<?php the_permalink(); ?>">
                        <article class="p-post-card">
                            <div class="p-post-card__img">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="p-post-card__text">
                                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                                <?php if(get_field('event_period')): ?><p class="p-post-card__period">開催中　<span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                            </div>
                        </article>
                    </a>
                </li>
            <?php $count++; endwhile; ?>
            <?php else: endif; ?>
            <?php wp_reset_query(); ?>
            <?php
            $count2 = 3 - $count;
            $args = array(
                'post_type' => 'event',
                'post_status' => 'publish',
                'meta_value'    => $today,// dateで現在の日時を取得
                'meta_key'      => 'event_start',
                'meta_compare'  => '>',// meta_valueとmeta_keyを比較して過去の場合のみ表示
                'posts_per_page' => $count2,
                'orderby' => 'meta_value',// 並び順の基準の指定。この場合は'meta_key'で指定したフィールドの値
                'order'=> 'ASC',
                'tax_query' => array(
                    array(
                    'taxonomy' => 'event_place', //タクソノミーを指定
                    'field' => 'slug', //ターム名をスラッグで指定する
                    'terms' => $slug, //表示したいタームをスラッグで指定
                    'operator' => 'IN'
                    ),
                )
            );
            $wp_query = new WP_Query( $args );
            ?>
            <?php if ( $wp_query->have_posts() ): ?>
            <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                <li class="p-post-tate__item">
                    <a href="<?php the_permalink(); ?>">
                        <article class="p-post-card">
                            <div class="p-post-card__img">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="p-post-card__text">
                                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                                <?php if(get_field('event_period')): ?><p class="p-post-card__period">近日開催　<span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                            </div>
                        </article>
                    </a>
                </li>
            <?php endwhile; ?>
            <?php else: endif; ?>
            <?php wp_reset_query(); ?>
            </ul>
            <div class="l-spacer -em3 p-post-list__item__more">
            <p><a href="<?php echo home_url('/event'); ?>" class="c-button-block -lightyellow -arrow -more"><span>星野エリアのイベント一覧</span></a></p>
            </div>
        </article>
    </div>
</section>
<?php else: ?>

    <?php
$args = array(
    'post_type' => 'event',
    'post_status' => 'publish',
    'meta_value'    => $today,
    'meta_key'      => 'event_start',
    'meta_compare'  => '>',
    'posts_per_page' => 3,
    'orderby' => 'meta_value',
    'order'=> 'ASC',
    'tax_query' => array(
        array(
        'taxonomy' => 'event_place',
        'field' => 'slug',
        'terms' => $slug,
        'operator' => 'IN'
        ),
    )
);
$wp_query = new WP_Query( $args );

// 投稿があるかチェック
if ( $wp_query->have_posts() ):
?>
<!-- 投稿がある場合のみ、このセクションを表示 -->
<section class="l-spacer -medium -both c-border-t">
    <div class="l-container--primary">
        <article class="l-contents--left-title">
            <h2 class="c-title-large -vertical l-contents--left-title__title"><span><?php echo $title; ?></span>イベント</h2>
            <div class="l-contents--left-title__conts">
            <ul class="p-post-tate">
            <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                <li class="p-post-tate__item">
                    <a href="<?php the_permalink(); ?>">
                        <article class="p-post-card">
                            <div class="p-post-card__img">
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                            <?php endif; ?>
                            </div>
                            <div class="p-post-card__text">
                                <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                                <?php if(get_field('event_period')): ?><p class="p-post-card__period">近日開催　<span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                                <?php
                                    $terms4 = get_the_terms($post->ID, 'event_cat');
                                    echo '<p class="p-post-card__cat">';
                                    foreach($terms4 as $term4){
                                    $term_name4 = $term4->name;
                                    echo '<span>';
                                    echo $term_name4;
                                    echo '</span>';
                                    };
                                    echo '</p>';
                                ?>
                            </div>
                        </article>
                    </a>
                </li>
            <?php endwhile; ?>
            </ul>
            <div class="l-spacer -em3 p-post-list__item__more">
            <p><a href="<?php echo home_url('/event'); ?>" class="c-button-block -lightyellow -arrow -more"><span>星野エリアのイベント一覧</span></a></p>
            </div>
            </div>
        </article>
    </div>
</section>
<?php
endif;
wp_reset_query();
?>


<?php endif; ?>


