<?php
/*Template Name: 村民食堂 */
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
			<video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/sonmin_pc.mp4"></video>
			<video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/sonmin_sp.mp4"></video>
			<div class="sonmin p-kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/logo.svg" alt="村民食堂"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
				</div>
				<?php get_template_part('news/list-important-kv'); ?>
			</div>
		</div>
	</div>


	<?php $lead = get_field('lead'); ?>
	<?php if($lead):?>
	<section class="l-spacer sonmin p-kv__lead">
		<div class="l-container--primary">
			<div class="sonmin p-kv__lead__inner">
				<h2 class="c-title-ex-small"><?php echo $lead['lead_title']; ?></h2>
				<?php if($lead['lead_txt']):?><p><?php echo $lead['lead_txt']; ?></p><?php endif;?>
			</div>
		</div>
	</section>
	<?php endif;?>

<section class="-sonmin-bg lead-end">

	<?php if(have_rows('news',117)): ?>
	<section class="l-spacer -medium -both p-sonmin__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">村民食堂からの<br class="sp_b">お知らせ</h2>
			<ul>
			<?php while(have_rows('news',117)): the_row(); ?>
				<li><?php the_sub_field('news_conts'); ?></li>
			<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php endif; ?>

	<?php $title ="村民食堂の"; get_template_part('event/list-3-facility'); ?>

	<?php if(have_rows('menu',117)): ?>
	<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
		<div class="l-container--primary">
			<article class="l-contents--left-title -ribbon">
				<?php if(get_field('ribbon')): ?>
				<div class="l-contents--left-title__title">
					<h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon"><?php echo get_field('ribbon'); ?></h2>
				</div>
				<?php endif; ?>
				<div class="l-contents--left-title__conts">
				<?php while(have_rows('menu',117)): the_row(); ?>
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

	<?php if(have_rows('gallery',117)): ?>
	<section class="l-spacer -medium -both">
		<div class="l-container--primary-scroll">
			<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
				<div class="swiper-wrapper">
				<?php while(have_rows('gallery',117)): the_row(); ?>
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

	<?php
	$page = get_post( get_the_ID() );
	$slug = $page->post_name;
	?>
	<?php get_template_part('news/list-3-facility'); ?>

	<section id="usage-guide" class="l-spacer -medium -pgB-l">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">営業案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
						<?php if(get_field('biz-info_img',117)) :?><img src="<?php the_field('biz-info_img',117); ?>"><?php endif; ?>
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
<section class="l-spacer -medium -both  p-sonmin__faq">
	<div class="l-container--primary">
		<article class="l-contents--left-title -title-large">
			<h2 class="c-title-large -vertical l-contents--left-title__title"><span>村民食堂</span>よくある質問</h2>
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

<section class="-sonmin-bg">
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>
</section>

<?php get_footer(); ?>