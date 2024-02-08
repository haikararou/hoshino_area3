<?php global $shop_slug; ?>
<? $today = date_i18n('Ymd'); ?>
<?php
    $args = array(
        'post_type'=> 'business-hours',
        'meta_key' => 'opening_end', //ACFのフィールド名
        'order' => 'ASC',
        'orderby' => 'date',
        'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
        'relation' => 'AND',
        array(
        'key'     => 'opening_end',
        'value'   => $today,
        'type'    => 'date',
        'compare' => '>=',
        ),
        ),
        'posts_per_page' => -1,
    );
    $wp_query = new WP_Query( $args );
    if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
?>
<?php
    if(have_rows('opening_hoshino')):
        while(have_rows('opening_hoshino')): the_row();
            if(have_rows($shop_slug)):
                while(have_rows($shop_slug)): the_row();
                    $time = get_sub_field('time');
                    $comment = get_sub_field('comment');
                endwhile;
            endif;
        endwhile;
    endif;
?>
<td>
    <?php echo $time; ?><span><?php echo $comment; ?></span>
</td>
<?php endwhile; endif; ?>