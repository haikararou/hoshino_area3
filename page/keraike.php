<?php
/*Template Name: ケラ池スケートリンク */
?>
<?php get_header(); ?>

<section class="-keraike-bg">

	<div class="l-spacer pan">
		<div class="l-container--wide">
			<?php get_template_part('inc/breadcrumb'); ?>
		</div>
	</div>

<div id="key_wrap">
  <div id="keyVisual">
    <div class="videoBox">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/keraike_pc.mp4"></video>
      <video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/keraike_sp.mp4"></video>
      <div class="p-keraike__kv__logo">
	  <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/logo.svg" alt="ケラ池スケートリンク"></h1>
		<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
		</div>
      <div class="p-keraike__kv__news">
        <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
        <div class="endress">
          <div class="loop_wrap">
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
            <?php while ($news -> have_posts()): $news -> the_post(); ?>
            <div><a href="<?php the_permalink();?>"><span><?php the_time('Y.m.d') ?></span><?php the_title(); ?></a>　</div>
            <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
          </div>
      </div>
    </div>
  </div>
</div>

	<?php $lead = get_field('lead'); ?>
	<?php if($lead):?>
	<section class="l-spacer p-keraike__lead">
		<div class="l-container--primary">
			<div class="p-keraike__lead__inner">
				<h2 class="c-title-ex-small"><?php echo $lead['lead_title']; ?></h2>
				<?php if($lead['lead_txt']):?><p><?php echo $lead['lead_txt']; ?></p><?php endif;?>
			</div>
		</div>
	</section>
	<?php endif;?>

	<?php if(have_rows('news')): ?>
	<section class="l-spacer -medium -both p-keraike__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">ケラ池スケートリンク<br>からのお知らせ</h2>
			<ul>
			<?php while(have_rows('news')): the_row(); ?>
				<li><?php the_sub_field('news_conts'); ?></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php endif; ?>

	<?php $title ="ケラ池の"; get_template_part('event/list-3-facility'); ?>

	<?php if(have_rows('feature')): ?>
	<?php the_sub_field('sub_field_name'); ?>
	<section class="l-spacer -medium -both c-border-t">
		<div class="l-container--primary">
			<h2 class="c-title-large">氷上に感じる季節の変化</h2>
			<?php $i=1; while(have_rows('feature')): the_row(); ?>
			<div class="l-spacer -medium">
				<article class="l-contents-2column <?php if ($i %2 == 0): ?>-pc-rl<?php else:?><?php endif; ?>">
					<div class="l-contents-2column__block -w-1_2">
					<?php if(get_sub_field('feature_img')) :?><img src="<?php the_sub_field('feature_img'); ?>"><?php endif; ?>
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
						<?php if(get_sub_field('feature_title')) :?><h3 class="c-title-medium"><?php the_sub_field('feature_title'); ?></h3><?php endif; ?>
							<?php if(get_sub_field('feature_txt')) :?><p><?php the_sub_field('feature_txt'); ?></p><?php endif; ?>
						</div>
					</div>
				</article>
			</div>
			<?php $i++; ?>
			<?php endwhile; ?>
		</div>
	</section>
	<?php endif; ?>

	<?php if(have_rows('rental')): ?>
	<?php while(have_rows('rental')): the_row(); ?>
	<section class="l-contents-block__wrap p-keraike__notice">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium"><?php the_sub_field('rental_title'); ?></h2>
						<?php if(have_rows('rental_list')): ?>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
							<?php while(have_rows('rental_list')): the_row(); ?>
								<li class="c-list-dot__item"><?php the_sub_field('rental_list_li'); ?></li>
							<?php endwhile; ?>
							</ul>
						</div>
						<?php endif; ?>
					</article>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>




	<?php if(have_rows('menu')): ?>
	<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
		<div class="l-container--primary">
			<article class="l-contents--left-title -ribbon">
				<?php if(get_field('ribbon')): ?>
				<div class="l-contents--left-title__title">
					<h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon"><?php echo get_field('ribbon'); ?></h2>
				</div>
				<?php endif; ?>
				<div class="l-contents--left-title__conts">
				<?php while(have_rows('menu')): the_row(); ?>
					<section class="l-contents-2column -pc-rl">
						<div class="l-contents-2column__block -w-1_2--right2">
							<?php if(get_sub_field('menu_img')) :?><img src="<?php the_sub_field('menu_img'); ?>"><?php endif; ?>
						</div>
						<div class="l-contents-2column__block -w-1_2--left2">
							<?php if(get_sub_field('menu_conts')) :?><h3 class="c-title-medium"><?php if(get_sub_field('menu_subtitle')) :?><span><?php the_sub_field('menu_subtitle'); ?></span><?php endif; ?><?php the_sub_field('menu_title'); ?></h3><?php endif; ?>
							<?php if(get_sub_field('menu_conts')) :?><p><?php the_sub_field('menu_conts'); ?></p><?php endif; ?>
						</div>
					</section>
				<?php endwhile; ?>
				</div>
			</article>
			<?php $menu_pdf = get_field('menu_pdf'); ?>
			<?php if($menu_pdf['menu_pdf_file']) :?>
			<p class="p-sonmin__lnk"><a href="<?php echo $menu_pdf['menu_pdf_file']; ?>" class="c-button-block -lightyellow -arrow -pdf" target="_blank"><span><?php echo $menu_pdf['menu_pdf_title']; ?></span></a></p>
			<?php endif; ?>
		</div>
	</section>
	<?php endif; ?>

	<?php if(have_rows('gallery')): ?>
	<section class="l-spacer -medium -both">
		<div class="l-container--primary-scroll">
			<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
				<div class="swiper-wrapper">
				<?php while(have_rows('gallery')): the_row(); ?>
					<div class="swiper-slide p-gallery-slider__slide">
					<?php if(get_sub_field('gallery_img')) :?><img class="p-gallery-slider__img" src="<?php the_sub_field('gallery_img'); ?>"><?php endif; ?>
						<?php if(get_sub_field('gallery_caption')) :?><p class="p-gallery-slider__caption"><?php the_sub_field('gallery_caption'); ?></p><?php endif; ?>
					</div>
				<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
	<?php endif; ?>




	<?php if(have_rows('fun')): ?>
	<?php while(have_rows('fun')): the_row(); ?>
	<section class="c-bg-yellow l-contents-block__wrap">
		<div class="l-contents-block c-bg-white">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title"><?php the_sub_field('fun_title'); ?></h2>
						<div>
							<?php if(have_rows('fun_conts')): ?>
							<?php while(have_rows('fun_conts')): the_row(); ?>
							<div class="l-contents-2column">
								<div class="l-contents-2column__block -w-1_2--left">
								<?php if(get_sub_field('fun_conts_img')) :?><img src="<?php the_sub_field('fun_conts_img'); ?>"><?php endif; ?>
								</div>
								<div class="l-contents-2column__block -w-1_2--right">
									<div>
										<?php if(get_sub_field('fun_conts_title')) :?><h3 class="c-title-small"><?php the_sub_field('fun_conts_title'); ?></h3><?php endif; ?>
										<?php if(get_sub_field('fun_conts_txt')) :?><p><?php the_sub_field('fun_conts_txt'); ?></p><?php endif; ?>
											<?php if(get_sub_field('fun_conts_url')) :?><p>
											<a href="<?php the_sub_field('fun_conts_url'); ?>" class="c-button-block -lightyellow -arrow" <?php if(get_field('fun_conts_blank')): ?>target="_blank"<?php endif; ?>><span><?php the_sub_field('fun_conts_btn'); ?></span></a>
										</p><?php endif; ?>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
	?>
	<?php get_template_part('news/list-3-facility'); ?>

	<section id="usage-guide" class="l-spacer -medium -both c-border-t">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">営業案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
						<?php if(get_field('biz-info_img',119)) :?><img src="<?php the_field('biz-info_img',119); ?>"><?php endif; ?>
						</div>
						<div class="l-contents-2column__block -w-1_2--right">
							<dl class="c-list-dl">
							<dt>営業時間</dt>
								<dd>
									<?php
										$today = date_i18n('Ymd');
										// $page = get_post(get_the_ID());
										// $slug = $page->post_name;
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
									<?php if($wp_query->have_posts()): ?>
										<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
											<?php
												if(have_rows('opening_hoshino')):
													while(have_rows('opening_hoshino')): the_row();
														if(have_rows($slug) ) :
															while(have_rows($slug)): the_row();
																$content = get_sub_field('time');
																$style = get_sub_field('comment');
															endwhile;
														endif;
													endwhile;
												endif;
											?>
											<?php echo $content; ?><span><br><?php echo $style; ?></span>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php wp_reset_query(); ?>
								</dd>
								<?php if(have_rows('biz-info')): ?>
								<?php while(have_rows('biz-info')): the_row(); ?>
								<dt><?php the_sub_field('business-info_dt'); ?></dt>
								<dd><?php the_sub_field('business-info_dd'); ?></dd>
								<?php endwhile; ?>
								<?php endif; ?>
							</dl>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

</section>

<?php if(have_rows('faq')): ?>
<section class="l-spacer -medium -both  p-keraike__faq">
	<div class="l-container--primary">
		<article class="l-contents--left-title -title-large">
			<h2 class="c-title-large -vertical l-contents--left-title__title"><span>ケラ池</span>よくある質問</h2>
			<div class="l-contents--left-title__conts">
				<dl class="p-faq-list">
				<?php while(have_rows('faq')): the_row(); ?>
				<div class="p-faq-list__item">
					<dt class="p-faq-list__question"><?php the_sub_field('faq_q'); ?></dt>
					<dd class="p-faq-list__answer"><?php the_sub_field('faq_a'); ?></dt>
				</div>
				<?php endwhile; ?>
				</dl>
			</div>
		</article>
	</div>
</section>
<?php endif; ?>

<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<?php get_footer(); ?>