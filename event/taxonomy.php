<?php get_header(); ?>

<?php
$today = date('Ymd');
$date_start = get_post_meta($post->ID, 'event_start', true);
$date_end = get_post_meta($post->ID, 'event_end', true);
?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">イベント</h1>
        <!-- ?php $class= isset($args['class']) ? $args['class'] : ''; ? -->
        <!-- ?php get_template_part('inc/today'); ? -->
	</div>
</section>

<section class="l-spacer -medium -both">
    <div class="l-container--primary-l">
        <article class="l-contents">
            <div class="l-contents__conts">
            <?php if (have_posts()): ?>
                <ul class="p-post-list">
                <?php while ( have_posts() ): the_post(); ?>
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
                                    <?php if(get_field('event_period')): ?>
                                    <?php if(strtotime($today) >= strtotime($date_start) && strtotime($today) <= strtotime($date_end)) : ?>
                                    <p class="p-post-card__info">開催中　<span><?php the_field('event_period'); ?></span></p>
                                    <?php elseif(strtotime($today) > strtotime($date_end)) : ?>
                                    <p class="p-post-card__info">終了　<span><?php the_field('event_period'); ?></span></p>
                                    <?php else : ?>
                                    <p class="p-post-card__info">開催予定　<span><?php the_field('event_period'); ?></span></p>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
            </div>
        </article>
    </div>
</section>

<div class="l-container--primary-l">
<section class="l-spacer -medium -both">
    <?php wp_pagenavi(); ?>
</section>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-s c-text-center">
		<a href="<?php echo home_url('/event'); ?>" class="c-button-block -lightyellow -arrow"><span>イベント一覧</span></a>
	</div>
</section>

<?php get_footer(); ?>