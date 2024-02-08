<?php get_header(); ?>
<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -pagetitile">
    <div class="l-container--primary">
        <h1 class="c-title-ex-large">ショップ＆レストラン</h1>
        <p>ハルニレテラスを中心に、個性豊かなお店が揃っています。今日の気分に合わせて、食事やお買い物をお楽しみください。</p>
    </div>
</section>

<section class="l-spacer -mgB-l">
    <div class="l-container--primary">
        <article class="l-contents--left-title -title-large">
            <div class="l-contents--left-title__title shopmenu">

                <ul class="c-list-std">
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
					echo $des_list; ?>
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

<section class="c-bg-yellow l-contents-block__wrap">
    <div class="l-contents-block c-bg-white">
        <div class="l-contents-block__inner">
            <div class="l-container--primary">
                <div class="l-contents-2column">
                    <div class="l-contents-2column__block -w-1_2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shop/harunire.jpg">
                    </div>
                    <div class="l-contents-2column__block -w-1_2">
                        <h2 class="c-title-large"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-halnire.svg" alt="ハルニレテラス" class="logo-halnire"></h2>
                        <p>「軽井沢の日常」をコンセプトにした、森の中の小さな街。ハルニレの木立の中、湯川の清流沿いに連なる建物を、ウッドデッキでつないでいます。豊かな自然と個性的なお店が、星野エリアでの一日を彩ります。</p>
                        <p><a href="<?php echo home_url('/harunireterrace'); ?>" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>もっと見る</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>