<?php
/*Template Name: 採用情報 */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">採用情報</h1>
	</div>
</section>

<section class="l-spacer">
	<div class="l-container--primary-m">
		<article class="l-contents">
			<div class="l-contents__conts">
				<div class="p-recruit-hoshino">
					<a href="https://www.hoshino-area.jp/recruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/recruit/hoshinoresorts.png" alt="星野リゾート"></a>
				</div>

				<dl class="p-recruit-list">
					<?php if(have_rows('recruit')): ?>
					<?php while(have_rows('recruit')): the_row(); ?>
					<div class="p-recruit-list__item">
						<dt class="p-recruit-list__title"><?php the_sub_field('recruit_title'); ?></dt>
						<dd class="p-recruit-list__txt">
							<dl class="c-list-dl -recruit">
							<?php if(have_rows('recruit_list')): ?>
							<?php while(have_rows('recruit_list')): the_row(); ?>
								<?php if(get_sub_field('recruit_list_dt')) :?><dt><?php the_sub_field('recruit_list_dt'); ?></dt><?php endif; ?>
								<?php if(get_sub_field('recruit_list_dd')) :?><dd><?php the_sub_field('recruit_list_dd'); ?></dd><?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
							</dl>
						</dd>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>

				</dl>

			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>