<?php
/*Template Name: イカルカフェ */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<ul class="c-breadcrumb">
			<li class="c-breadcrumb__item"><a href="<?php echo home_url(); ?>">星野エリア</a></li>
			<?php if(is_object_in_term($post->ID,'harunireterrace_cat','halnire')): ?>
			<li class="c-breadcrumb__item"><a href="<?php echo home_url('/harunireterrace'); ?>">ハルニレテラス</a></li>
			<?php else: ?>
			<li class="c-breadcrumb__item"><a href="<?php echo home_url('/shop-restaurant'); ?>">ショップ＆レストラン</a></li>
			<?php endif; ?>
			<li class="c-breadcrumb__item">イカルカフェ</li>
		</ul>
	</div>
</div>

<div class="p-entry">
<?php the_content(); ?>
</div>

<?php get_footer(); ?>