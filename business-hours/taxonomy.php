<?php get_header(); ?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<?php
echo '<style>';
echo '.cat-';
echo get_queried_object()->slug;
echo '{background: #93936A; color: #FFF !important;}';
echo '</style>';
?>
<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">営業時間</h1>
        <nav>
            <ul class="c-list-category">
                <li><a href="<?php echo home_url(); ?>/business-hours/" class="c-list-category__item">全期間</a></li>
                <?php
                $terms = get_terms('business-hours_cat');
                foreach ( $terms as $term ) {
                echo '<li><a class="c-list-category__item cat-'.$term-> slug.'" href="'.get_term_link( $term ).'">'.$term->name.'</a></li>';
                }
                ?>
            </ul>
        </nav>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <div class="p-opening--scroll">
        <table class="p-opening--table">
            <tr>
                <th class="p-opening--fixed01" colspan="2">期間</th>
                <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        <td class="p-opening--fixed04">
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
                            <!-- <?php the_title(); ?><br> -->
                            <?php if(get_field('opening_start')): ?><?php the_field('opening_start'); ?><?php endif; ?>
                            <?php if(get_field('opening_end')): ?>〜<?php the_field('opening_end'); ?><?php endif; ?>
                        </td>
                        <?php endwhile; ?>
                    <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02" rowspan="4">レストラン</th>
                <th class="p-opening--fixed03">イル・ソーニョ</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
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
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed03">希須林</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'kisurin' ) ) :
                                    while ( have_rows( 'kisurin' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed03">川上庵</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'kawakamian' ) ) :
                                    while ( have_rows( 'kawakamian' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed03">サジロカフェ</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_restaurant' ) ) :
                            while ( have_rows( 'opening_restaurant' ) ) : the_row();
                                if ( have_rows( 'sajilocafe' ) ) :
                                    while ( have_rows( 'sajilocafe' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed02" rowspan="4">カフェ＆スイーツ</th>
                <th class="p-opening--fixed03">丸山珈琲</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_cafe' ) ) :
                            while ( have_rows( 'opening_cafe' ) ) : the_row();
                                if ( have_rows( 'maruyamacoffee' ) ) :
                                    while ( have_rows( 'maruyamacoffee' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
            <tr>
                <th class="p-opening--fixed03">ナガイファーム</th>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                        if ( have_rows( 'opening_cafe' ) ) :
                            while ( have_rows( 'opening_cafe' ) ) : the_row();
                                if ( have_rows( 'nagaifarm' ) ) :
                                    while ( have_rows( 'nagaifarm' ) ) : the_row();
                                        $content = get_sub_field( 'time' );
                                        $style = get_sub_field( 'comment' );
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                    <td>
                        <?php echo $content; ?><span><?php echo $style; ?></span>
                    </td>
                <?php endwhile; ?>
                <?php endif; ?>
            </tr>
        </table>
        </div>
    </div>
</section>

<?php get_footer(); ?>