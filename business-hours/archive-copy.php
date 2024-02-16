<?php get_header(); ?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">営業時間</h1>
  </div>
</section>

<?php $today = date_i18n('Ymd'); ?>



<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <ul>
        <?php
            $args = array(
                'post_type'=> 'business-hours',
                'meta_key' => 'opening_end', //ACFのフィールド名
                'order' => 'ASC',
                'orderby' => 'date',
                'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
                'relation' => 'AND',
                array(
                'key'     => 'opening_end',
                'value'   => $today,
                'type'    => 'date',
                'compare' => '>=',
                ),
                ),
                'posts_per_page' => -1,
            );
            $wp_query = new WP_Query( $args );
            if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
        ?>
        <li id="#<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug ; ?>"><?php the_title(); ?></li>
        <?php endwhile; endif; ?>
        </ul>
    </div>
</section>





<section class="l-spacer -medium -both">
    <div class="l-container--primary">

        <?php
        $args = array(
            'post_type'=> 'business-hours',
            'meta_key' => 'opening_end', //ACFのフィールド名
            'order' => 'ASC',
            'orderby' => 'date',
            'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
            'relation' => 'AND',
            array(
            'key'     => 'opening_end',
            'value'   => $today,
            'type'    => 'date',
            'compare' => '>=',
            ),
            ),
            'posts_per_page' => 1,
            'offset' => 0,
            );
            $wp_query = new WP_Query( $args );
            if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
        <div id="<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug ; ?>">
            <div class="p-opening_list">
                <h2 class="c-title-medium"><?php the_title(); ?></h2>
                <?php endwhile; ?>

                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/izumiya/" target="_blank"><div class="c-button-arrow">和泉屋 傳兵衛</a><span>菓子処</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'izumiya';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ilsogno/" target="_blank"><div class="c-button-arrow">イル・ソーニョ</a><span>イタリアン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ilsogno';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/garandou/" target="_blank"><div class="c-button-arrow">我蘭憧</a><span>木製品専門店</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'garandou';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kawakamian/" target="_blank"><div class="c-button-arrow">せきれい橋 川上庵</a><span>そば・美酒・一品料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kawakamian';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kisurin/" target="_blank"><div class="c-button-arrow">希須林</a><span>中国家庭料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kisurin';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ju-kan/" target="_blank"><div class="c-button-arrow">ギャラリー樹環</a><span>セレクトギャラリー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ju-kan';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/crafyglanta/" target="_blank"><div class="c-button-arrow">CRAFY・glänta</a><span>手作り指輪工房</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'crafyglanta';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kokoperi/" target="_blank"><div class="c-button-arrow">Karuizawa Vegetable ココぺリ</a><span>農産物・食料品・飲料</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kokoperi';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sajilocafe/" target="_blank"><div class="c-button-arrow">サジロカフェ リンデン</a><span>カフェ・スパイス料理・雑貨</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sajilocafe';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sawamura/" target="_blank"><div class="c-button-arrow">沢村</a><span>ベーカリー＆レストラン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sawamura';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/cercle/" target="_blank"><div class="c-button-arrow">CERCLE wine&deli</a><span>レストラン＆デリ・ワイン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'cercle';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/team7/" target="_blank"><div class="c-button-arrow">TEAM7 軽井沢</a><span>自然素材の家具・寝具・衣類</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'team7';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/natur/" target="_blank"><div class="c-button-arrow">NATUR TERRACE</a><span>北欧インテリア・手工芸</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'natur';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/nagaifarm/" target="_blank"><div class="c-button-arrow">HARVEST NAGAI FARM</a><span>ジェラート</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'nagaifarm';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/maruyamacoffee/" target="_blank"><div class="c-button-arrow">丸山珈琲</a><span>カフェ＆ブックス</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'maruyamacoffee';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/moriasobi/" target="_blank"><div class="c-button-arrow">モリアソビ</a><span>アウトドアリビング&ファニチャー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'moriasobi';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </div>
                </table>
            </div>

            <div class="p-opening_list">
                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/tombo-no-yu/" target="_blank"><div class="c-button-arrow">星野温泉 トンボの湯</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'tombo-no-yu';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sonmin-shokudo/" target="_blank"><div class="c-button-arrow">村民食堂</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sonmin-shokudo';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/hungryspot/" target="_blank"><div class="c-button-arrow">カフェ ハングリースポット</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'hungryspot';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ikarucafe/" target="_blank"><div class="c-button-arrow">イカルカフェ</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ikarucafe';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kera-ike-icerink/" target="_blank"><div class="c-button-arrow">ケラ池スケートリンク</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kera-ike-icerink';
                                $offset = 0;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>







        <?php
        $args = array(
            'post_type'=> 'business-hours',
            'meta_key' => 'opening_end', //ACFのフィールド名
            'order' => 'ASC',
            'orderby' => 'date',
            'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
            'relation' => 'AND',
            array(
            'key'     => 'opening_end',
            'value'   => $today,
            'type'    => 'date',
            'compare' => '>=',
            ),
            ),
            'posts_per_page' => 1,
            'offset' => 1,
            );
            $wp_query = new WP_Query( $args );
            if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
        <div id="<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug ; ?>">
            <div class="p-opening_list">
                <h2 class="c-title-medium"><?php the_title(); ?></h2>
                <?php endwhile; ?>

                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/izumiya/" target="_blank"><div class="c-button-arrow">和泉屋 傳兵衛</a><span>菓子処</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'izumiya';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ilsogno/" target="_blank"><div class="c-button-arrow">イル・ソーニョ</a><span>イタリアン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ilsogno';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/garandou/" target="_blank"><div class="c-button-arrow">我蘭憧</a><span>木製品専門店</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'garandou';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kawakamian/" target="_blank"><div class="c-button-arrow">せきれい橋 川上庵</a><span>そば・美酒・一品料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kawakamian';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kisurin/" target="_blank"><div class="c-button-arrow">希須林</a><span>中国家庭料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kisurin';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ju-kan/" target="_blank"><div class="c-button-arrow">ギャラリー樹環</a><span>セレクトギャラリー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ju-kan';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/crafyglanta/" target="_blank"><div class="c-button-arrow">CRAFY・glänta</a><span>手作り指輪工房</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'crafyglanta';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kokoperi/" target="_blank"><div class="c-button-arrow">Karuizawa Vegetable ココぺリ</a><span>農産物・食料品・飲料</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kokoperi';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sajilocafe/" target="_blank"><div class="c-button-arrow">サジロカフェ リンデン</a><span>カフェ・スパイス料理・雑貨</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sajilocafe';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sawamura/" target="_blank"><div class="c-button-arrow">沢村</a><span>ベーカリー＆レストラン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sawamura';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/cercle/" target="_blank"><div class="c-button-arrow">CERCLE wine&deli</a><span>レストラン＆デリ・ワイン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'cercle';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/team7/" target="_blank"><div class="c-button-arrow">TEAM7 軽井沢</a><span>自然素材の家具・寝具・衣類</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'team7';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/natur/" target="_blank"><div class="c-button-arrow">NATUR TERRACE</a><span>北欧インテリア・手工芸</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'natur';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/nagaifarm/" target="_blank"><div class="c-button-arrow">HARVEST NAGAI FARM</a><span>ジェラート</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'nagaifarm';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/maruyamacoffee/" target="_blank"><div class="c-button-arrow">丸山珈琲</a><span>カフェ＆ブックス</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'maruyamacoffee';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/moriasobi/" target="_blank"><div class="c-button-arrow">モリアソビ</a><span>アウトドアリビング&ファニチャー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'moriasobi';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </div>
                </table>
            </div>

            <div class="p-opening_list">
                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/tombo-no-yu/" target="_blank"><div class="c-button-arrow">星野温泉 トンボの湯</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'tombo-no-yu';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sonmin-shokudo/" target="_blank"><div class="c-button-arrow">村民食堂</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sonmin-shokudo';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/hungryspot/" target="_blank"><div class="c-button-arrow">カフェ ハングリースポット</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'hungryspot';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ikarucafe/" target="_blank"><div class="c-button-arrow">イカルカフェ</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ikarucafe';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kera-ike-icerink/" target="_blank"><div class="c-button-arrow">ケラ池スケートリンク</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kera-ike-icerink';
                                $offset = 1;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>









        <?php
        $args = array(
            'post_type'=> 'business-hours',
            'meta_key' => 'opening_end', //ACFのフィールド名
            'order' => 'ASC',
            'orderby' => 'date',
            'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
            'relation' => 'AND',
            array(
            'key'     => 'opening_end',
            'value'   => $today,
            'type'    => 'date',
            'compare' => '>=',
            ),
            ),
            'posts_per_page' => 1,
            'offset' => 2,
            );
            $wp_query = new WP_Query( $args );
            if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); ?>
        <div id="<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug ; ?>">
            <div class="p-opening_list">
                <h2 class="c-title-medium"><?php the_title(); ?></h2>
                <?php endwhile; ?>

                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/izumiya/" target="_blank"><div class="c-button-arrow">和泉屋 傳兵衛</a><span>菓子処</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'izumiya';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ilsogno/" target="_blank"><div class="c-button-arrow">イル・ソーニョ</a><span>イタリアン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ilsogno';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/garandou/" target="_blank"><div class="c-button-arrow">我蘭憧</a><span>木製品専門店</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'garandou';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kawakamian/" target="_blank"><div class="c-button-arrow">せきれい橋 川上庵</a><span>そば・美酒・一品料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kawakamian';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kisurin/" target="_blank"><div class="c-button-arrow">希須林</a><span>中国家庭料理</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kisurin';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ju-kan/" target="_blank"><div class="c-button-arrow">ギャラリー樹環</a><span>セレクトギャラリー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ju-kan';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/crafyglanta/" target="_blank"><div class="c-button-arrow">CRAFY・glänta</a><span>手作り指輪工房</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'crafyglanta';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kokoperi/" target="_blank"><div class="c-button-arrow">Karuizawa Vegetable ココぺリ</a><span>農産物・食料品・飲料</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kokoperi';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sajilocafe/" target="_blank"><div class="c-button-arrow">サジロカフェ リンデン</a><span>カフェ・スパイス料理・雑貨</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sajilocafe';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sawamura/" target="_blank"><div class="c-button-arrow">沢村</a><span>ベーカリー＆レストラン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sawamura';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/cercle/" target="_blank"><div class="c-button-arrow">CERCLE wine&deli</a><span>レストラン＆デリ・ワイン</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'cercle';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/team7/" target="_blank"><div class="c-button-arrow">TEAM7 軽井沢</a><span>自然素材の家具・寝具・衣類</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'team7';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/natur/" target="_blank"><div class="c-button-arrow">NATUR TERRACE</a><span>北欧インテリア・手工芸</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'natur';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/nagaifarm/" target="_blank"><div class="c-button-arrow">HARVEST NAGAI FARM</a><span>ジェラート</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'nagaifarm';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/maruyamacoffee/" target="_blank"><div class="c-button-arrow">丸山珈琲</a><span>カフェ＆ブックス</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'maruyamacoffee';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/moriasobi/" target="_blank"><div class="c-button-arrow">モリアソビ</a><span>アウトドアリビング&ファニチャー</span></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'moriasobi';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </div>
                </table>
            </div>

            <div class="p-opening_list">
                <table class="p-opening_list_table">
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/tombo-no-yu/" target="_blank"><div class="c-button-arrow">星野温泉 トンボの湯</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'tombo-no-yu';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/sonmin-shokudo/" target="_blank"><div class="c-button-arrow">村民食堂</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'sonmin-shokudo';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/hungryspot/" target="_blank"><div class="c-button-arrow">カフェ ハングリースポット</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'hungryspot';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/ikarucafe/" target="_blank"><div class="c-button-arrow">イカルカフェ</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'ikarucafe';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th><a href="<?php echo home_url('/shop'); ?>/kera-ike-icerink/" target="_blank"><div class="c-button-arrow">ケラ池スケートリンク</a></th>
                        <td>
                            <?php
                                global $shop_slug;
                                global $offset;
                                $shop_slug = 'kera-ike-icerink';
                                $offset = 2;
                                get_template_part('inc/opening');
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php endif; ?>









    </div>
</section>



<section class="l-spacer -medium -both">
	<div class="l-container--primary">
        <section class="l-spacer -medium -both">
        <p>その他の施設の営業時間は、以下の施設サイトでご確認ください。</p>
        </section>
        <div class="p-opening--scroll">
        <table class="p-opening--table -no-scroll">
            <tr>
                <th class="p-opening--fixed02"><a href="https://yukawatan.blestoncourt.com/" target="_blank"><div class="c-button-arrow c-button-outerlink">ブレストンコート　ユカワタン</div></th>
            </tr>
            <tr>
                <th class="p-opening--fixed02"><a href="https://picchio.co.jp/" target="_blank"><div class="c-button-arrow c-button-outerlink">ピッキオ</div></th>
            </tr>
            <tr>
                <th class="p-opening--fixed02"><a href="http://www.besso-navi.com/" target="_blank"><div class="c-button-arrow c-button-outerlink">軽井沢 別荘Navi</div></th>
            </tr>
            <tr>
                <th class="p-opening--fixed02"><a href="https://www.karuizawachurch.org/" target="_blank"><div class="c-button-arrow c-button-outerlink">軽井沢高原教会</div></th>
            </tr>
            <tr>
                <th class="p-opening--fixed02"><a href="https://www.stonechurch.jp/" target="_blank"><div class="c-button-arrow c-button-outerlink">石の教会 内村鑑三記念堂</div></th>
            </tr>
        </table>
        </div>
    </div>
</section>
<?php get_footer(); ?>