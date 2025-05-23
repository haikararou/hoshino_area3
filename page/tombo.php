<?php
/*Template Name: トンボの湯 */
?>
<?php get_header(); ?>



	<div class="l-spacer pan">
		<div class="l-container--wide">
			<?php get_template_part('inc/breadcrumb'); ?>
		</div>
	</div>

	<div id="key_wrap">
		<div id="keyVisual">
			<div class="videoBox">
			<video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/tombo_pc.mp4"></video>
			<video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/tombo_sp.mp4"></video>
			<div class="tombo p-kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/logo.svg" alt="星野温泉 トンボの湯"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
				</div>
				<?php get_template_part('news/list-important-kv'); ?>
			</div>
		</div>
	</div>

	<?php $lead = get_field('lead'); ?>
	<?php if($lead):?>
	<section class="l-spacer tombo p-kv__lead">
		<div class="l-container--primary">
			<div class="p-kv__lead__inner">
				<h2 class="c-title-ex-small"><?php echo $lead['lead_title']; ?></h2>
				<?php if($lead['lead_txt']):?><p><?php echo $lead['lead_txt']; ?></p><?php endif;?>
			</div>
		</div>
	</section>
	<?php endif;?>

<section class="-tombo-bg lead-end">

	<?php if(have_rows('news',115)): ?>
	<section class="l-spacer -medium -both p-tombo__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">トンボの湯からのお知らせ</h2>
			<ul>
			<?php while(have_rows('news',115)): the_row(); ?>
				<li><?php the_sub_field('news_conts'); ?></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php endif; ?>

	<?php $title ="トンボの湯の"; get_template_part('event/list-3-facility'); ?>

	<?php if(have_rows('feature',115)): ?>
	<?php the_sub_field('sub_field_name'); ?>
	<section class="l-spacer -medium -both c-border-t p-tombo__feature">
		<div class="l-container--primary">
			<h2 class="c-title-large">温泉の特徴</h2>
			<?php $i=1; while(have_rows('feature',115)): the_row(); ?>
			<div class="l-spacer -medium count0<?php echo $i; ?>">
				<article class="l-contents-2column <?php if ($i %2 == 1): ?><?php else:?>-pc-rl<?php endif; ?>">
					<div class="l-contents-2column__block -w-1_2 feature_img">
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

	<?php if(have_rows('rental',115)): ?>
	<?php while(have_rows('rental',115)): the_row(); ?>
	<section class="l-contents-block__wrap  p-tombo__notices">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium"><?php the_sub_field('rental_title'); ?></h2>
						<?php if(have_rows('rental_list',115)): ?>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
							<?php while(have_rows('rental_list',115)): the_row(); ?>
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

	<?php if(have_rows('menu',115)): ?>
	<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
		<div class="l-container--primary">
			<article class="l-contents--left-title -ribbon">
				<?php if(get_field('ribbon')): ?>
				<div class="l-contents--left-title__title">
					<h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon"><?php echo get_field('ribbon'); ?></h2>
				</div>
				<?php endif; ?>
				<div class="l-contents--left-title__conts">
				<?php while(have_rows('menu',115)): the_row(); ?>
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

	<?php if(have_rows('gallery',115)): ?>
	<section class="l-spacer -medium -both">
		<div class="l-container--primary-scroll">
			<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
				<div class="swiper-wrapper">
				<?php while(have_rows('gallery',115)): the_row(); ?>
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

	<?php if(have_rows('onsen_info',115)): ?>
	<section class="l-spacer -large -both c-border-t p-tombo__intro">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">温泉のご紹介</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column reverse">
						<div class="l-contents-2column__block -w-1_2--right">
							<dl class="c-list-dl">
							<?php while(have_rows('onsen_info',115)): the_row(); ?>
								<dt><?php the_sub_field('onsen_info_title'); ?></dt>
								<dd><?php the_sub_field('onsen_info_txt'); ?></dd>
							<?php endwhile; ?>
							</dl>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	<?php endif; ?>

	<?php if(have_rows('fun',115)): ?>
	<?php while(have_rows('fun',115)): the_row(); ?>
	<section class="c-bg-yellow l-contents-block__wrap">
		<div class="l-contents-block c-bg-white">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title"><?php the_sub_field('fun_title'); ?></h2>
						<div>
							<?php if(have_rows('fun_conts',115)): ?>
							<?php while(have_rows('fun_conts',115)): the_row(); ?>
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

	<section id="usage-guide" class="l-spacer -medium c-border-t p-tombo__guide">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">営業案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
						<?php if(get_field('biz-info_img',115)) :?><img src="<?php the_field('biz-info_img',115); ?>"><?php endif; ?>
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
								<?php if(have_rows('biz-info',115)): ?>
								<?php while(have_rows('biz-info',115)): the_row(); ?>
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

	<?php if(have_rows('notes',115)): ?>
	<?php while(have_rows('notes',115)): the_row(); ?>
	<section class="l-contents-block__wrap  p-tombo__notices">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium"><?php the_sub_field('notes_title'); ?></h2>
						<?php if(have_rows('notes_list')): ?>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
							<?php while(have_rows('notes_list')): the_row(); ?>
								<li class="c-list-dot__item"><?php the_sub_field('notes_list_li'); ?></li>
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

	<?php if(have_rows('how_to')): ?>
	<?php while(have_rows('how_to')): the_row(); ?>
	<section class="c-bg-yellow l-contents-block__wrap p-tombo__howto">
		<div class="l-contents-block c-bg-white -mgB-m">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title">温泉の入り方</h2>
						<div class="l-contents-2column">
							<div class="l-contents-2column__block -w-1_2--left">
								<div class="youtube lang-ja"><?php echo get_sub_field('how_to_youtube'); ?></div>
								<div class="youtube lang-en"><?php echo get_sub_field('how_to_youtube_en'); ?></div>
								<div class="youtube lang-tw"><?php echo get_sub_field('how_to_youtube_tw'); ?></div>
								<div class="youtube lang-cn"><?php echo get_sub_field('how_to_youtube_cn'); ?></div>
								<div class="youtube lang-ko"><?php echo get_sub_field('how_to_youtube_ko'); ?></div>
							</div>
							<div class="l-contents-2column__block -w-1_2--right">
							<?php if(have_rows('how_to_list')): ?>
								<div>
									<ul class="c-list-dot">
									<?php while(have_rows('how_to_list')): the_row(); ?>
										<li class="c-list-dot__item"><?php the_sub_field('how_to_txt'); ?></li>
									<?php endwhile; ?>
									</ul>
								</div>
							<?php endif; ?>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; ?>
	<?php endif; ?>

</section>

<?php if(have_rows('faq')): ?>
<section class="l-spacer -medium -both  p-tombo__faq">
	<div class="l-container--primary">
		<article class="l-contents--left-title -title-large">
			<h2 class="c-title-large -vertical l-contents--left-title__title"><span>トンボの湯</span>よくある質問</h2>
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

<section class="-tombo-bg">
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>
</section>

<?php get_footer(); ?>