<section class="l-spacer -medium -both c-border-t">
	<div class="l-container--primary">
		<h2 class="c-title-large">
			<?php if(get_field('logo')): ?>
			<div class="p-restaurant-card__logo000000">
				<img src="<?php the_field('logo'); ?>" alt="">
			</div>
			<?php endif; ?>
			<?php if(get_field('sub_title')): ?><span class="p-restaurant-card__cat"><?php the_field('sub_title'); ?></span><?php endif; ?><?php the_title(); ?>
		</h2>

<?php the_content(); ?>
		<article class="l-contents-2column">
      <?php if ( isset( $attributes['img']['url'] ) ) : ?>
      <img src="<?php echo esc_url( $attributes['img']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['img']['alt'] ); ?>">
      <?php else: ?>
        <?php if(has_post_thumbnail()) : ?>
        <div class="l-contents-2column__block -w-2_3">
          <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
        </div>
        <?php endif; ?>
      <?php endif; ?>
			<div class="l-contents-2column__block -w-1_3">
				<div class="l-spacer -small -both c-border-t c-border-b">
					<h3 class="c-title-small c-title-icon c-text-gold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock-gold.svg">本日の営業時間</h3>
					<?php
					$today = date_i18n('Ymd');
					$args = array(
					'post_type'=> 'business-hours',
					'meta_key' => 'opening_start', //ACFのフィールド名
					'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
						'relation' => 'AND',
						array(
						'key'     => 'opening_start',
						'value'   => $today,
						'type'    => 'date',
						'compare' => '<=',
						),
						array(
						'key' => 'opening_end',
						'value' => $today,
						'type'    => 'date',
						'compare' => '>=',
						),
					),
					'posts_per_page' => 1,
					);
					$wp_query = new WP_Query( $args );
					?>
					<?php if ( $wp_query->have_posts() ): ?>
					<?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
						<?php
						if ( have_rows( 'opening_restaurant' ) ) :
							while ( have_rows( 'opening_restaurant' ) ) : the_row();
							if ( have_rows( 'ilsogno' ) ) :
								while ( have_rows( 'ilsogno' ) ) : the_row();
								$content = get_sub_field( 'time' );
								$style = get_sub_field( 'comment' );
								endwhile;
							endif;
							endwhile;
						endif;
						?>
						<?php echo $content; ?><br><span><?php echo $style; ?></span>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="l-spacer -em2">
        <InnerBlocks />
				</div>
			</div>
		</article>
	</div>
</section>