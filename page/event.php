<?php
/*Template Name: 開催終了したイベント */
?>
<?php get_header(); ?>

<?
$today = date('Ymd');
$today2 = date('Ymd-H:i:s');
?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">イベント</h1>
	</div>
</section>

<?php
$args = array(
    'paged' => $paged,
    'post_type' => 'event',
    'post_status' => 'publish',
    'meta_value'    => $today,// dateで現在の日時を取得
    'meta_key'      => 'event_end',
    'meta_compare'  => '<',// meta_valueとmeta_keyを比較して過去の場合のみ表示
    'posts_per_page' => 12,
);
$wp_query = new WP_Query( $args );
?>
<section class="l-spacer -medium -both">
    <div class="l-container--primary">
        <article class="l-contents--left-title">
            <h2 class="c-title-large -vertical l-contents--left-title__title">開催終了したイベント</h2>
            <div class="l-contents--left-title__conts">
                <?php if ( $wp_query->have_posts() ): ?>
                <ul class="p-post-list">
                <?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
                    <li class="p-post-list__item">
                        <a href="<?php the_permalink(); ?>">
                            <article class="p-post-card">
                                <div class="p-post-card__img">
                                <?php if(has_post_thumbnail()) : ?>
                                    <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
                                <?php endif; ?>
                                </div>
                                <div class="p-post-card__text">
                                    <?php
                                    $terms = get_the_terms($post->ID,'event_place');
                                    if($terms):
                                    echo '<p class="p-post-card__cat">';
                                    foreach($terms as $term):
                                    echo '<span>'.$term->name.'</span>';
                                    endforeach;
                                    echo '</p>';
                                    endif;
                                    ?>
                                    <h3 class="p-post-card__title"><?php the_title(); ?></h3>
                                    <?php if(get_field('event_period')): ?><p class="p-post-card__period">終了 <span><?php the_field('event_period'); ?></span></p><?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>

                <section class="l-spacer -medium -both">
                    <?php wp_pagenavi(); ?>
                </section>

                <?php else : ?>
                <p>記事が見つかりませんでした。</p>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </article>
    </div>
</section>

<?php get_footer(); ?>