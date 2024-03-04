<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<ul class="c-breadcrumb">
			<li class="c-breadcrumb__item"><a href="<?php echo home_url(); ?>">星野エリア</a></li>
			<li class="c-breadcrumb__item"><a href="<?php echo home_url('/event'); ?>">イベント</a></li>
			<li class="c-breadcrumb__item"><?php the_title(); ?></li>
		</ul>
	</div>
</div>

<section class="l-spacer -pagetitile">
	<div class="l-container--primary c-display-flex -between">
		<h1 class="c-title-ex-large">
			<span class="c-title-sub">
			<?php
			if ($terms2 = get_the_terms($post->ID, 'event_cat')) {
				foreach($terms2 as $term):
					$term_name = $term->name;
					echo $term_name;
					echo " ";
					endforeach;
			} ?>
			</span>
			<?php the_title(); ?><?php if(get_field('event_period')): ?><span>開催期間　<?php the_field('event_period'); ?></span><?php endif; ?>
		</h1>
	</div>
</section>

<div class="p-entry">
<?php the_content(); ?>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-s c-text-center">
		<a href="<?php echo home_url('/event'); ?>" class="c-button-block -lightyellow -arrow"><span>イベント一覧</span></a>
	</div>
</section>

<?php get_footer(); ?>

