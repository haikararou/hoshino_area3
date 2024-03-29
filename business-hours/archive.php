<?php get_header(); ?>

<div class="l-spacer">
    <div class="l-container--wide">
        <?php get_template_part('inc/breadcrumb'); ?>
    </div>
</div>

<section class="l-spacer -pagetitile">
    <div class="l-container--primary">
        <h1 class="c-title-ex-large">営業時間</h1>
    </div>
</section>

<?php $today = date_i18n('Ymd'); ?>

<div>

    <section class="l-spacer -mgB-s business-hours-tab">
        <div class="l-container--primary">
            <ul class="tab-cnt00 ">
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
                    'posts_per_page' => 2,
                );
                $wp_query = new WP_Query( $args );
                if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); $count++;
            ?>
            <li id="tab-<?php echo $count; ?>" class="<?php if($count == 1){ echo '-active';} ?>"><?php the_title(); ?></li>
            <?php endwhile; endif; ?>
            </ul>
        </div>
    </section>


    <section class="l-spacer -mgB-m">
        <div class="l-container--primary">
        <h2 class="c-title-large">ハルニレテラス</h2>
            <table class="p-opening--table" id="table01">
                <thead>
                <tr>
                    <th class="p-opening--fixed01"></th>
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
                            'posts_per_page' => 2,
                        );
                        $wp_query = new WP_Query( $args );
                        if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); $cut++
                    ?>
                    <th class="p-opening--fixed04 tab-<?php echo $cut; ?>">
                        <?php the_title(); ?>
                    </th>
                    <?php endwhile; endif; ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/izumiya/"><div class="c-button-arrow">和泉屋 傳兵衛</a><span>菓子処</span></div></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'izumiya';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/ilsogno/"><div class="c-button-arrow">イル・ソーニョ</a><span>イタリアン</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'ilsogno';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/garandou/"><div class="c-button-arrow">我蘭憧</a><span>木製品専門店</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'garandou';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/kawakamian/"><div class="c-button-arrow">川上庵</a><span>そば・美酒・一品料理</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'kawakamian';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/kisurin/"><div class="c-button-arrow">希須林</a><span>中国家庭料理</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'kisurin';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/ju-kan/"><div class="c-button-arrow">ギャラリー樹環</a><span>セレクトギャラリー</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'ju-kan';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/crafyglanta/"><div class="c-button-arrow">CRAFY・glänta</a><span>手作り指輪工房</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'crafyglanta';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/kokoperi/"><div class="c-button-arrow">ココぺリ</a><span>農産物・食料品・飲料</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'kokoperi';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/sajilocafe/"><div class="c-button-arrow">サジロカフェ</a><span>カフェ・スパイス料理・雑貨</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'sajilocafe';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/sawamura/"><div class="c-button-arrow">沢村</a><span>ベーカリー＆レストラン</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'sawamura';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/cercle/"><div class="c-button-arrow">CERCLE</a><span>レストラン＆デリ・ワイン</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'cercle';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/team7/"><div class="c-button-arrow">TEAM7</a><span>自然素材の家具・寝具・衣類</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'team7';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/natur/"><div class="c-button-arrow">NATUR</a><span>北欧インテリア・手工芸</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'natur';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/nagaifarm/"><div class="c-button-arrow">NAGAI FARM</a><span>ジェラート</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'nagaifarm';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/maruyamacoffee/"><div class="c-button-arrow">丸山珈琲</a><span>カフェ＆ブックス</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'maruyamacoffee';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                <tr>
                    <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/moriasobi/"><div class="c-button-arrow">モリアソビ</a><span>アウトドアリビング&ファニチャー</span></div></th>
                    <?php
                        global $shop_slug;
                        $shop_slug = 'moriasobi';
                        get_template_part('inc/opening');
                    ?>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="l-spacer -mgB-m">
        <div class="l-container--primary">
            <table class="p-opening--table" id="table02">
                <thead>
                <tr>
                    <th class="p-opening--fixed01"></th>
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
                            'posts_per_page' => 2,
                        );
                        $wp_query = new WP_Query( $args );
                        if($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post(); $cut2++
                    ?>
                    <th class="p-opening--fixed04 tab-<?php echo $cut2; ?>">
                        <?php the_title(); ?>
                    </th>
                    <?php endwhile; endif; ?>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="p-opening--fixed02"><a href="<?php echo home_url(); ?>/tombo-no-yu/"><div class="c-button-arrow">星野温泉 トンボの湯</a></div></th>
                        <?php
                            global $shop_slug;
                            $shop_slug = 'tombo-no-yu';
                            get_template_part('inc/opening2');
                        ?>
                    </tr>
                    <tr>
                        <th class="p-opening--fixed02"><a href="<?php echo home_url(); ?>/sonmin-shokudo/"><div class="c-button-arrow">村民食堂</a></div></th>
                        <?php
                            global $shop_slug;
                            $shop_slug = 'sonmin-shokudo';
                            get_template_part('inc/opening2');
                        ?>
                    </tr>
                    <tr>
                        <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/hungryspot/"><div class="c-button-arrow">カフェ ハングリースポット</a></div></th>
                        <?php
                            global $shop_slug;
                            $shop_slug = 'hungryspot';
                            get_template_part('inc/opening2');
                        ?>
                    </tr>
                    <tr>
                        <th class="p-opening--fixed02"><a href="<?php echo home_url('/shop'); ?>/ikarucafe/"><div class="c-button-arrow">イカルカフェ</a></div></th>
                        <?php
                            global $shop_slug;
                            $shop_slug = 'ikarucafe';
                            get_template_part('inc/opening2');
                        ?>
                    </tr>
                    <tr>
                        <th class="p-opening--fixed02"><a href="<?php echo home_url(); ?>/kera-ike-icerink/"><div class="c-button-arrow">ケラ池スケートリンク</a></div></th>
                        <?php
                            global $shop_slug;
                            $shop_slug = 'kera-ike-icerink';
                            get_template_part('inc/opening2');
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="l-spacer -mgB-l other-conts">
        <div class="l-container--primary">
            <section class="l-spacer -mgB-s">
            <p>その他の施設の営業時間は、以下の施設サイトでご確認ください。</p>
            </section>
            <table class="p-opening--table">
                <tr>
                    <th><a href="https://yukawatan.blestoncourt.com/" target="_blank"><div class="c-button-arrow c-button-outerlink">ブレストンコート　ユカワタン</div></a></th>
                </tr>
                <tr>
                    <th><a href="https://picchio.co.jp/" target="_blank"><div class="c-button-arrow c-button-outerlink">ピッキオ</div></th>
                </tr>
                <tr>
                    <th><a href="http://www.besso-navi.com/" target="_blank"><div class="c-button-arrow c-button-outerlink">軽井沢 別荘Navi</div></a></th>
                </tr>
                <tr>
                    <th><a href="https://www.karuizawachurch.org/" target="_blank"><div class="c-button-arrow c-button-outerlink">軽井沢高原教会</div></a></th>
                </tr>
                <tr>
                    <th><a href="https://www.stonechurch.jp/" target="_blank"><div class="c-button-arrow c-button-outerlink">石の教会 内村鑑三記念堂</div></a></th>
                </tr>
            </table>
        </div>
    </section>

</div>

<?php get_footer(); ?>