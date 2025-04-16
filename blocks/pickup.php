<?php
$className = 'pickup';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>
<section class="c-bg-yellow c-border-t l-contents-block__wrap">
<div class="l-contents-block c-bg-white">
<div class="l-contents-block__inner">
<div class="l-container--primary">
<h2 class="c-title-large"><?php the_field('pickup_title'); ?></h2>
<?php if(have_rows('pickup')): ?>
<?php while(have_rows('pickup')): the_row(); ?>
<?php
echo '<div class="l-contents-2column and-border pickup ';
?>
<?php if(get_sub_field('linking')): ?>
<?php echo '-linking';
?>
<?php endif; ?>
<?php
echo '">';
echo '<div class="l-contents-2column__block -w-1_2">';
?>

<?php if(get_sub_field('carousel')): ?>
    <?php // ACF Gallery Field の表示
    $images = get_sub_field('carousel'); // フィールド名の指定
    if( $images ):
    ?>
    <div class="carousel-ul swiper">
    <ul class="swiper-wrapper">
    <?php foreach( $images as $image ): // ループ処理の開始 ?>
        <li class="swiper-slide">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
        </li>
    <?php endforeach; ?>
    </ul>
    <div class="swiper-pagination"></div>
    </div>
    <?php endif; ?>
<?php else: ?>
<?php
echo '<img decoding="async" src="';
?>
    <?php the_sub_field('img'); ?>
<?php
echo '" alt="">';
?>
<?php endif; ?>

<?php
echo '</div>';
echo '<div class="l-contents-2column__block -w-1_2">';
?>



<?php if(get_sub_field('title')): ?>
<?php echo '<h2 class="c-title-medium"><span>'; ?>
<?php the_sub_field('campaign'); ?>
<?php echo '</span>'; ?>
<?php the_sub_field('title'); ?>
<?php echo '</h2>'; ?>
<?php endif; ?>
<?php if(get_sub_field('sub')): ?>
<?php echo '<h3>'; ?>
<?php the_sub_field('sub'); ?>
<?php echo '</h3>'; ?>
<?php endif; ?>
<?php if(get_sub_field('txt')): ?>
<?php echo '<p>'; ?>
<?php the_sub_field('txt'); ?>
<?php echo '</p>'; ?>
<?php endif; ?>
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