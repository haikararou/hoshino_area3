
<?php
$className = 'pickup';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
// $rows = get_field('pickup');
// $rows2 = get_field('info');
// $rows3 = get_sub_field('link');
// $noborder = get_field('noborder');
?>
<section class="c-bg-yellow c-border-t l-contents-block__wrap">
<div class="l-contents-block c-bg-white">
<div class="l-contents-block__inner">
<div class="l-container--primary">
<h2 class="c-title-large"><?php the_field('pickup_title'); ?></h2>
<?php if(have_rows('pickup')): ?>
<?php while(have_rows('pickup')): the_row(); ?>
<?php
echo '<div class="l-contents-2column and-border pickup">';
echo '<div class="l-contents-2column__block -w-1_2">';
echo '<img decoding="async" src="';
?>
<?php the_sub_field('img'); ?>
<?php
echo '" alt=""></div>';
echo '<div class="l-contents-2column__block -w-1_2">';
echo '<h2 class="c-title-medium"><span>';
?>
<?php the_sub_field('campaign'); ?>
<?php echo '</span>'; ?>
<?php the_sub_field('title'); ?>
<?php echo '</h2>'; ?>
<?php echo '<h3>'; ?>
<?php the_sub_field('sub'); ?>
<?php echo '</h3>'; ?>
<?php echo '<p>'; ?>
<?php the_sub_field('txt'); ?>
<?php echo '</p>'; ?>
<?php if(have_rows('info')): ?>
<?php
echo '<dl class="c-list-dl -noBorder">';
?>
<?php while(have_rows('info')): the_row(); ?>
<?php
echo '<dt>';
?>
<?php the_sub_field('info_title'); ?>
<?php
echo '</dt>';
echo '<dd>';
?>
<?php the_sub_field('info_txt'); ?>
<?php
echo '</dd>';
?>
<?php endwhile; ?>
<?php endif; ?>
<?php
echo '</dl>';
?>

<?php
$link = get_sub_field('link');
if($link['link_url']) {
echo '<p><a href="';
echo $link['link_url'];
echo '" class="c-button-block -lightyellow -arrow"><span>';
echo $link['link_txt'];
echo '</span></a></p>';
}
?>

<?php
echo '</div></div>';
?>
<?php endwhile; ?>
<?php endif; ?>
</div>
</div>
</div>
</section>