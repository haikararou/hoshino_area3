<div class="c-border-t">
    <div class="l-footer-important-news">
        <div class="l-container--primary">
            <div class="l-footer-important-news__inner">
                <h2 class="l-footer-important-news__title">重要なお知らせ</h2>
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
                <dl class="c-list-news l-footer-important-news__news">
                <?php while ($news -> have_posts()): $news -> the_post(); ?>
                    <div class="c-list-news__item">
                        <dt class="c-list-news__date"><?php the_time('Y.m.d') ?></dt>
                        <dt class="c-list-news__conts"><a href="< ?php the_permalink();?>"><?php the_title(); ?></a></dt>
                    </div>
                <?php endwhile; ?>
                </dl>
                <?php endif; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>